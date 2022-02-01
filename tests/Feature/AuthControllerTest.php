<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_register()
    {
        $payload = [
            "email"=>'admin@gmail.com',
            "password"=>'password'
        ];
        
        $response = $this->json('POST', 'api/auth/login', $payload, ['Accept' => 'application/json']);
        $response->assertStatus(200);
    }
}
