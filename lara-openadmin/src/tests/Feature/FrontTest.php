<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use Tests\TestCase;

class FrontTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_top(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_login(): void
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

}
