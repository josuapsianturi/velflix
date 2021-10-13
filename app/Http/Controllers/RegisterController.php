<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        // return request()->all();

        // create the user
       User::create(request()->validate([
            'name' => ['required','max:255'],
            'username' => ['required','min:3', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required','min:7','max:255'],
        ]));

        // dd('success validation succeded');
        return redirect('/');
    }
}
