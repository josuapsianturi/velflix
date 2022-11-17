<?php

namespace App\Http\Controllers;

use App\Models\User;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function handleProviderCallback()
    {
        $googleUser = Socialite::driver('google')->user();
        // dd($googleuser);

        $user = User::firstOrCreate(
            [
                'provider_id' => $googleUser->getId(),
            ],
            [
                'email' => $googleUser->getEmail(),
                'name' => $googleUser->getName(),
            ]
        );

        // Log the user in
        auth()->login($user);

        // Redirect to movies
        return redirect('/movies')->with('success', 'Your account has been created');
    }
}
