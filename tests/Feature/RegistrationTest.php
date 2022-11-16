<?php

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('test registration screen can berendered')->get('/register')->assertStatus(200);

test('test new users can register', function () {
    $response = $this->post('/register', [
        'name' => 'User Test',
        'username' => 'userTest',
        'email' => 'test@example.com',
        'password' => 'testpassword',
    ]);

    $this->assertAuthenticated();
    $response->assertRedirect('/movies');
});
