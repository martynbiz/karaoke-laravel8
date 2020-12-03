<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SongsTest extends TestCase
{
    public function testGetIndex()
    {
        $response = $this->login()->get('/console/songs');

        // assertions
        $response->assertStatus(200);
        $response->assertViewIs('console.songs.index');
    }

    public function testGetView()
    {
        $response = $this->login()->get('/console/songs/'.$this->song->id);

        // assertions
        $response->assertStatus(200);
        $response->assertViewIs('console.songs.view');
    }
}
