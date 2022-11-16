<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        // Validate the request
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // attempt to authenticate and log in the user
        // based on the provided credentials
        if (auth()->attempt($attributes)) {
            session()->regenerate();

            return redirect('/movies')->with('success', 'Welcome ');
        }

        // auth filed
        throw ValidationException::withMessages([
            'email' => 'Your provieded credentials could not be verified.',
        ]);
    }

    public function destroy()
    {
        // ddd('log the use out');
        auth()->logout();

        return redirect('/')->with('success', 'you\'re out');
    }
}
