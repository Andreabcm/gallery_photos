<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthorizeTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_login_path_confirmation()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_confirmation_of_user_login()  
    {
        $user = User::factory()->create();
        $response = $this->post('/login', 
        [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect('/home');
    }

    public function test_invalid_email_confirmation()
    {
        $user = User::factory()->create();

        $this->post('/login',
        [
            'email' => 'wrong-$user->email',
            'password' => 'password',
        ]);

        $this->assertGuest();
    }

    public function test_invalid_password_confirmation()
    {
        $user = User::factory()->create();

        $this->post('/login',
        [
            'email' => $user->email,
            'password' => 'wrong-password',
        ]);

        $this->assertGuest();
    }
    
}
