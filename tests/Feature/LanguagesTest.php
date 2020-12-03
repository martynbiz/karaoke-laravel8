<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LanguagesTest extends TestCase
{
    public function testGetIndex()
    {
        $response = $this->login()->get('/console/languages');

        // assertions
        $response->assertStatus(200);
        $response->assertViewIs('console.languages.index');
    }

    public function testGetView()
    {
        $response = $this->login()->get('/console/languages/'.$this->language->id);

        // assertions
        $response->assertStatus(200);
        $response->assertViewIs('console.languages.view');
    }
}
