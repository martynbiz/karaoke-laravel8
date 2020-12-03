<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ArtistsTest extends TestCase
{
    public function testGetIndex()
    {
        $response = $this->login()->get('/console/artists');

        // assertions
        $response->assertStatus(200);
        $response->assertViewIs('console.artists.index');
    }

    public function testGetView()
    {
        $response = $this->login()->get('/console/artists/'.$this->artist->id);

        // assertions
        $response->assertStatus(200);
        $response->assertViewIs('console.artists.view');
    }
}
