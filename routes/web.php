<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\VelflixController;
use App\Http\Livewire\AdminController;
use Illuminate\Support\Facades\Route;


Route::get('/movies', [VelflixController::class, 'index'])->name('velflix.index')->middleware('auth');
Route::get('/movie/{watch}', [VelflixController::class, 'show'])->name('movies.show')->middleware('auth');
Route::view('/', 'home');

Route::post('newsletter', NewsletterController::class);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->name('login')->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::get('login/google', [LoginController::class, 'redirectToProvider']);
Route::get('login/google/callback', [LoginController::class, 'handleProviderCallback']);

Route::middleware('can:admin')->group(function () {
    Route::view('admin', 'livewire.admin-controller');
});
