<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TagsTest extends TestCase
{
    public function testGetIndex()
    {
        $response = $this->login()->get('/console/tags');

        // assertions
        $response->assertStatus(200);
        $response->assertViewIs('console.tags.index');
    }

    public function testGetView()
    {
        $response = $this->login()->get('/console/tags/'.$this->tag->id);

        // assertions
        $response->assertStatus(200);
        $response->assertViewIs('console.tags.view');
    }
}
