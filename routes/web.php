<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/redirect', function () {
    return Socialite::driver('trakt')->redirect();
})->name('authRedirect');

Route::get('/auth/callback', function () {
    $user = Socialite::driver('trakt')->user();

    dd($user);
});
