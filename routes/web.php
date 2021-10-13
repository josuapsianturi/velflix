<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\VelflixController;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Route;


Route::get('/movies', [VelflixController::class, 'index'])->name('velflix.index');
Route::get('/movie/{watch}', [VelflixController::class, 'show'])->name('movies.show');
Route::view('/', 'dashboard');

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

