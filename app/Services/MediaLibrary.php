<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

use App\Models\Song;
use App\Models\Artist;
use App\Models\Language;
use App\Models\Tag;

class MediaLibrary
{
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
     * @var string
     */
    protected $pathPattern;

    /**
     * @var string
     */
    protected $apiBaseUrl;

    /**
     * @var string
     */
    protected $apiKey;

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

        $this->pathPattern = '/^.*\/(.*)\/(.*)\/(.*)\..*?$/';
        $this->apiBaseUrl = 'http://ws.audioscrobbler.com/2.0/';
        $this->apiKey = env('LASTFM_API_KEY');
    }

    /**
     * Execute the console command.
     * @return mixed
     */
    public function syncFiles()
    {
        $this->updateSongPaths();
        $this->fetchSongsMetaData();
        $this->fetchArtistsMetaData();
    }

    /**
     * This will get all the song paths from the fs, and update the database. Adding and removing
     */
    protected function updateSongPaths() {

        $paths = Storage::allFiles(env('MEDIA_STORAGE_DIR'));

        // remove songs that are not in the latest scan
        $this->songModel
            ->whereNotIn('path', $paths)
            ->delete();
        // $songsService->removeSongsNotInPathsArray($paths);
        
        // remove artists that no longer have any songs (as they may have just
        // been deleted in the above)
        $artists = $this->artistModel
            ->with('songs')
            ->get();
        // $artists = $artistsService->getArtistsWithSongs()

        foreach ($artists as $artist) {
            if (!count($artist->songs)) {
                $artist->delete();
                // $artistsService->deleteArtistById($artist->id)
            }
        }

        foreach ($paths as $i => $path) {

            // extract the artist/name from path
            preg_match($this->pathPattern, $path, $matches);

            if ($matches) {
                list($match, $languageName, $artistName, $songName) = $matches;
                if ($artistName and $songName) {
                    
                    // find or create artist
                    try {

                        $artist = $this->artistModel
                            ->where('name', $artistName)
                            ->first();
                        // $artist = $artistsService->getArtistByName($artistName);
                        if (!$artist) {
                            $artist = $this->artistModel->create([
                                'name' => $artistName,
                            ]);
                            // $artistsService->createArtist(['name' => $artistName]);
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
                                'path' => preg_replace('/^public/', '', $path),
                            ]);
                        }

                    } catch (Exception $e) {

                        $this->error('ERROR: ' . $e->getMessages());

                    }
                }
            }
        }
    }

    /**
     * Fetch meta data for each song and artists
     */
    protected function fetchSongsMetaData() {

        $songs = $this->songModel
            ->where('has_meta', 0)
            ->get();

        foreach ($songs as $i => $song) {

            $artist = $song->artist;
            $url = '?api_key='.$this->apiKey.'&format=json&method=track.getInfo&artist='.$song->artist->name.'&track='.$song->name;
            
            // $response = $client->request('GET', $url);
            $response = Http::get($this->apiBaseUrl . $url);
            
            $decoded = json_decode($response->getBody());

            // TODO song_meta.summary
            if (isset($decoded->track->wiki) and isset($decoded->track->wiki->summary)) {
                $song->meta()->create([
                    'name' => 'summary',
                    'value' => $decoded->track->wiki->summary,
                ]);
            }

            // attach tags
            if (isset($decoded->track->toptags)) {
                
                // detach current tags
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

            sleep(1); // so we don't throttle the api
        }
    }

    /**
     * Fetch meta data for each song and artists
     */
    protected function fetchArtistsMetaData() {

        $artists = $this->artistModel
            ->where('has_meta', 0)
            ->get();

        foreach ($artists as $i => $artist) {
            $url = '?api_key='.$this->apiKey.'&format=json&method=artist.getInfo&artist='.$artist->name;
            
            // $response = $client->request('GET', $url);
            $response = Http::get($this->apiBaseUrl . $url);

            $decoded = json_decode($response->getBody());

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

            sleep(1); // so we don't throttle the api
        }
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
