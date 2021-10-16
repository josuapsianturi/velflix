<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\VelflixController;
use Illuminate\Support\Facades\Route;

Route::post('newsletter', function () {
    request()->validate(['email' => 'required|email']);

    $mailchimp = new \MailchimpMarketing\ApiClient();

    $mailchimp->setConfig([
        'apiKey' => config('services.mailchimp.key'),
        'server' => 'us5'
    ]);
    // $response = $mailchimp->ping->get();
    // $response = $mailchimp->lists->getListMembersInfo('9fd0cf36ce');
     // ddd($response);

    try{
        $response = $mailchimp->lists->addListMember('9fd0cf36ce', [
            'email_address' => request('email'),
            'status' => 'subscribed'
        ]);
        } catch (\Exception $e) {
            throw \Illuminate\Validation\ValidationException::withMessages([
                'email' => 'This email coulld not be edded to our newsletter.'
        ]);
    }

    return redirect('/')->with('success', 'You are now signed up to our newsletter!');
});


Route::get('/movies', [VelflixController::class, 'index'])->name('velflix.index')->middleware('auth');
Route::get('/movie/{watch}', [VelflixController::class, 'show'])->name('movies.show')->middleware('auth');
Route::view('/', 'home');

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->name('login')->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

