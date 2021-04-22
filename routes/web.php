<?php

use App\Http\Controllers\VelflixController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [VelflixController::class, 'index'])->name('velflix.index');
Route::get('/movie/{watch}', [VelflixController::class, 'show'])->name('movies.show');
Route::view('/dashboard', 'dashboard');
