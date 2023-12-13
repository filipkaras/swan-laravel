<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_login_redirect()
    {
        $this->get('/')->assertRedirect('/login');
    }

    public function test_login_page()
    {
        $this->get('/login')->assertSee('Please enter your email and password!');
    }

    public function test_register_page()
    {
        $this->get('/register')->assertSee('Create a new account!');
    }

    public function test_company_list()
    {
        $user = User::factory()->create();

        $this->actingAs($user)->get('/todos')->assertSee('To-do list');
    }
}
