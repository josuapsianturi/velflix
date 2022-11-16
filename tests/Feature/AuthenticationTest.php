<?php

test('Test login screen can be rendered')->get('/login')->assertStatus(200);

test('Test users can authenticate using the login screen', function () {
    $response = $this->post('/login', [
        'email' => 'user@gmail.com',
        'password' => 'password',
    ]);

    $this->assertAuthenticated();
    $response->assertRedirect('/movies');
});
