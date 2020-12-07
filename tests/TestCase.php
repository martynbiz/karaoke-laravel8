<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

use App\Models\User;
use App\Models\Song;
use App\Models\Language;
use App\Models\SongMeta;
use App\Models\ArtistMeta;
use App\Models\Artist;
use App\Models\Tag;
use App\Models\Playlist;


abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * @var App\Models\User
     */
    protected $user = null;

    /**
     * @var App\Models\Song
     */
    protected $song = null;

    /**
     * @var App\Models\Song
     */
    protected $song2 = null;

    /**
     * @var App\Artist
     */
    protected $artist = null;

    /**
     * @var App\Artist
     */
    protected $artist2 = null;

    /**
     * @var App\Meta
     */
    protected $meta = null;

    /**
     * @var App\Language
     */
    protected $language = null;

    /**
     * @var App\Tag
     */
    protected $tag = null;

    /**
     * @var App\Tag
     */
    protected $tagInvalid = null;


    public function setUp(): void
    {
        parent::setUp();

        $this->user = User::factory()->make();
        $this->artist = Artist::factory()->make();
        $this->language = Language::factory()->make();
        $this->song = Song::factory()->make();
        $this->tag = Tag::factory()->make();
    }

    /**
     * Login with
     */
    protected function login($user=null)
    {
        if (!$user) $user = $this->user;

        $this->be($user);

        return $this;
    }
}
