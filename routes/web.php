<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', 'App\Http\Controllers\UserController@viewLogin')->name('login');
Route::post('/login', 'App\Http\Controllers\UserController@loginUser')->name('login');
Route::get('/register', 'App\Http\Controllers\UserController@viewRegister')->name('register');
Route::post('/register', 'App\Http\Controllers\UserController@createUser')->name('register');
Route::get('/logout', 'App\Http\Controllers\UserController@logoutUser')->name('logout')->middleware('auth');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@viewDashboard')->name('dashboard');
    Route::get('/profile', 'App\Http\Controllers\ProfileController@viewProfile')->name('profile');
    Route::post('/profile', 'App\Http\Controllers\ProfileController@updateProfile')->name('profile');
    Route::get('/addcard', 'App\Http\Controllers\CardController@addCard')->name('card');
});