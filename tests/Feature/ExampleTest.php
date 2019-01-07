<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testPageLoaded()
    {
        $response = $this->get('/clients/new');
        $response->assertStatus(200);
    }

    public function testCheckProfessorTitle()
    {
        $response = $this->get('/clients/new');
        $this->assertContains('Professor', $response->getContent(), 'You Should Have Professor in the Titles');
    }
}
