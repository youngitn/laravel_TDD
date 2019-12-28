<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testAllPost()
    {
        $response = $this->get('/posts/');
        $response->assertStatus(200);
        $response->assertSee('All Posts:');
    }
}
