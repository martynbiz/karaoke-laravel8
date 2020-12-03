<?php

namespace App\Console\Commands\Karaoke;

use Illuminate\Console\Command;

use App\Models\Song;
use App\Models\Artist;
use App\Models\Language;
use App\Models\Tag;

class SongsUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'karaoke:songs:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Will update the song list from the filesystem and fetch meta descriptions';

    /**
     * Song model
     *
     * @var App\Models\Song
     */
    protected $songModel;

    /**
     * Artist model
     *
     * @var App\Models\Artist
     */
    protected $artistModel;

    /**
     * Artist model
     *
     * @var App\Models\Language
     */
    protected $languageModel;

    /**
     * Artist model
     *
     * @var App\Models\Tag
     */
    protected $tagModel;

    /**
     * Settings
     *
     * @var array
     */
    protected $config = [];

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(Song $songModel, Artist $artistModel, Language $languageModel, Tag $tagModel)
    {
        $this->songModel = $songModel;
        $this->artistModel = $artistModel;
        $this->languageModel = $languageModel;
        $this->tagModel = $tagModel;

        $this->config = [
            'media_dir' => '/home/vagrant/karaoke/public/media',
            'path_pattern' => '/^.*\/(.*)\/(.*)\/(.*)\..*?$/',
            'api_key' => '73a4c2716ad6250f92d0210140e47a0c',
        ];

        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // TODO move this to .env  MEDIA_DIR="/var/www/karaoke2/public/media"
        $config = $this->config;

        // Get paths as array
        $paths = $this->scanDir( $config['media_dir'] );
        // $paths = array_slice($paths, 0, 1);// TODO testing
        foreach ($paths as $i => $path) {
            // e.g. /var/www/karaoke/../Lang/Artist/Song.mp4 -> /Lang/Artist/Song.mp4
            // $paths[$i] = $this->prepareSongPath($paths[$i]);
            $paths[$i] = str_replace($config['media_dir'], '', $path);
        }

        // remove songs that are not in the latest scan
        $this->songModel
            ->whereNotIn('path', $paths)
            ->delete();

        // remove artists that no longer have any songs (as they may have just
        // been deleted in the above)
        $artists = $this->artistModel
            ->with('songs')
            ->get();

        foreach ($artists as $artist) {
            if (!count($artist->songs)) {
                $artist->delete();
            }
        }

        $mediaDir = $config['media_dir'];

        $this->line('Adding song paths to database:');
        $this->output->progressStart( count($paths) );

        foreach ($paths as $i => $path) {

            // extract the artist/name from path
            preg_match($config['path_pattern'], $path, $matches);

            if ($matches) {
                list($match, $languageName, $artistName, $songName) = $matches;
                if ($artistName and $songName) {
                    // find or create artist
                    try {

                        $artist = $this->artistModel
                            ->where('name', $artistName)
                            ->first();
                        if (!$artist) {
                            $artist = $this->artistModel->create([
                                'name' => $artistName,
                            ]);
                        }

                        $language = $this->languageModel
                            ->where('name', $languageName)
                            ->first();
                        if (!$language) {
                            $language = $this->languageModel->create([
                                'name' => $languageName,
                            ]);
                        }

                        $song = $artist->songs()
                            ->where('name', $songName) // TODO use path not name? (might have been edited)
                            ->first();
                        if (!$song) {
                            $song = $artist->songs()->create([
                                'name' => $songName,
                                'language_id' => $language->id,
                                'path' => $path,
                            ]);
                        }

                    } catch (Exception $e) {

                        $this->error('ERROR: ' . $e->getMessages());

                    }
                }
            }

            // $this->info( sprintf( "Progress: %s%%", round(($i / count($paths) * 100)) ), false );
            $this->output->progressAdvance();

        }

        $this->output->progressFinish();

        // fetch meta data from api
        $this->fetchMetaData($logs);
    }

    // /**
    //  * Will populate the db with file name data
    //  */
    // public function prepareSongPath($path)
    // {
    //     $container = $this->getContainer();
    //     $mediaDir = $container->get('settings')['song_files']['parent_dir'];
    //     return str_replace($mediaDir, '', $path);
    // }

    /**
     * @param $song {Song}
     * @param $sleepBetweenCalls {integer} How many seconds to wait between api calls
     */
    protected function fetchMetaData(&$logs) {

        $config = $config = $this->config;

        // get song information from api
        $client = new \GuzzleHttp\Client([
            'base_uri' => 'http://ws.audioscrobbler.com/2.0/'
        ]);

        $apiKey = $config['api_key']; //'73a4c2716ad6250f92d0210140e47a0c';
        $songs = $this->songModel
            ->where('has_meta', 0)
            ->get();

        // get song meta
        $this->line('Fetching song meta data:');
        $this->output->progressStart( count($songs) );

        foreach ($songs as $i => $song) {

            $artist = $song->artist;
            $url = '?api_key='.$apiKey.'&format=json&method=track.getInfo&artist='.$song->artist->name.'&track='.$song->name;
            $res = $client->request('GET', $url);
            $decoded = json_decode($res->getBody());

            // TODO song_meta.summary
            if (isset($decoded->track->wiki) and isset($decoded->track->wiki->summary)) {
                $song->meta()->create([
                    'name' => 'summary',
                    'value' => $decoded->track->wiki->summary,
                ]);
            }

            // attach tags
            if (isset($decoded->track->toptags)) {
                // // detach current tags
                // $song->tags()->detach();
                $tagIdsToSync = [];
                foreach ($decoded->track->toptags->tag as $tagObj) {
                    $tagName = ucfirst($tagObj->name);
                    // just so we don't get tags like "Adele", not entirely fool proof though
                    if (strtolower($tagName) != strtolower($artist->name)) {
                        $tag = $this->tagModel
                            ->where('name', $tagName)
                            ->first();
                        if (!$tag) {
                            $tag = $song->tags()->create([
                                'name' => $tagName,
                            ]);
                        }
                        array_push($tagIdsToSync, $tag->id);
                    }
                }
                $song->tags()->sync($tagIdsToSync);
            }
            $song->update([
                'has_meta' => 1,
            ]);

            // $this->info( sprintf( "Progress: %s%%", round(($i / count($songs) * 100)) ), false );

            sleep(1); // so we don't throttle the api

            $this->output->progressAdvance();

        }

        $this->output->progressFinish();


        $artists = $this->artistModel
            ->where('has_meta', 0)
            ->get();

        // get artist meta
        $this->line('Fetching artist meta data:');
        $this->output->progressStart( count($artists) );

        foreach ($artists as $i => $artist) {
            $url = '?api_key='.$apiKey.'&format=json&method=artist.getInfo&artist='.$artist->name;
            $res = $client->request('GET', $url);
            $decoded = json_decode($res->getBody());

            // artist_meta.summary
            if (isset($decoded->artist->bio) and isset($decoded->artist->bio->summary)) {
                $artist->meta()->create([
                    'name' => 'summary',
                    'value' => $decoded->artist->bio->summary,
                ]);
            }

            // attach tags
            $tagIdsToSync = [];
            if (isset($decoded->artist->tags->tag)) {

                // detach current tags
                $artist->tags()->detach();
                foreach ($decoded->artist->tags->tag as $tagObj) {
                    $tagName = ucfirst($tagObj->name);

                    // just so we don't get tags like "Adele", not entirely fool proof though
                    if (strtolower($tagName) != strtolower($artist->name)) {
                        $tag = $this->tagModel
                            ->where('name', $tagName)
                            ->first();
                        if (!$tag) {
                            $tag = $artist->tags()->create([
                                'name' => $tagName,
                            ]);
                        }
                        array_push($tagIdsToSync, $tag->id);
                    }
                }
                $artist->tags()->sync($tagIdsToSync);

            }

            $artist->update([
                'has_meta' => 1,
            ]);

            // $this->info( sprintf( "Progress: %s%%", round(($i / count($artists) * 100)) ), false );

            sleep(1); // so we don't throttle the api

            $this->output->progressAdvance();

        }

        $this->output->progressFinish();

    }

    protected function scanDir($path, &$songs = []) {

        $files = glob($path . '/*');
        foreach ($files as $file) {
            if (is_file($file)) {
                array_push($songs, $file);
            } else {
                $this->scanDir($file, $songs);
            }
        }

        return $songs;

    }
}
