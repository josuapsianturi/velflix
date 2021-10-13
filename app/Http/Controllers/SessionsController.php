<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function destroy()
    {
        // ddd('log the use out');
        auth()->logout();

        return redirect('/')->with('success', 'you\'re out');
    }
}
