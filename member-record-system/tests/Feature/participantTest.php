<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class participantTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/user/list');

        $response->assertStatus(302);
    }
    public function test_index(){
        $response = $this->get("/");
        $response->assertStatus(200);
    }

    public function test_get_about(){
        $response = $this->get("/about");
        $response->assertStatus(302);
    }
    public function test_get_contact(){
        $response = $this->get("/contact");
        $response->assertStatus(302);
    }
}
