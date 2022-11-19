<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
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

    /**
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function destroy()
    {
        // ddd('log the use out');
        auth()->logout();

        return redirect('/')->with('success', 'you\'re out');
    }
}
