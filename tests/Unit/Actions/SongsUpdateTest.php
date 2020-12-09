<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use Mockery;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
// use Illuminate\Contracts\Filesystem\Filesystem;
use App\Models\Song;
use App\Models\Artist;
use App\Models\Language;
use App\Models\Tag;

use App\Actions\SongsUpdate;

class SongsUpdateTest extends TestCase
{
    // protected $fileSystem;
    
    public function setUp(): void 
    {
        // Song $,  $,  $,  $, Http $http
        
        parent::Setup();
    }
    
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testMocking()
    {
        $songModel = Mockery::mock(Song::class);
        $artistModel = Mockery::mock(Artist::class);
        $languageModel = Mockery::mock(Language::class);
        $tagModel = Mockery::mock(Tag::class);
        // $http = $this->mock(Http::class, function ($mock) {
        //     // $mock->shouldReceive('allFiles')->once();
        // });
        // $fileSystem = $this->mock(Filesystem::class, function ($mock) {
        //     $mock->shouldReceive('allFiles')->once();
        // });

        // Http::shouldReceive('get')
        //     ->once();
        //     // ->with('key')
        //     // ->andReturn('value');

        Storage::shouldReceive('allFiles')
            ->once()
            ->with(env('MEDIA_DIR'))
            ->andReturn([
                'public/media/German/Cro/Einmal um die Welt.mp4'
            ]);
        
        $SongsUpdate = new SongsUpdate($songModel, $artistModel, $languageModel, $tagModel);
        
        $SongsUpdate->run();
    }
}
