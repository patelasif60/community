<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;


class QuestionControllerTest extends TestCase
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
    public function test_questions()
    {
        $payload = [
            "title"=>'asif',
            "content"=>'patel'
        ];
        $user = User::where('email', env('API_USER_EMAIL'))->first();
        $this->actingAs($user, 'api');
        
        $response = $this->json('POST', 'api/insertdata', $payload, ['Accept' => 'application/json']);
        $response->assertStatus(200);
    }
}
