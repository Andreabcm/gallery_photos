<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_register_path_confirmation()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_confirmation_of_user_registrations()
    {
        $response = $this->post('/register', [
            'name' => 'Andrea',
            'email' => 'andrea@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect('/home');
    }
}
