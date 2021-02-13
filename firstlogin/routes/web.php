<?php

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

Route::get('/', function () {
    return view('welcome');
});

// uri / views
Route::get('/login', 'Authentication\LoginController@loginView');
Route::get('/register', 'Authentication\RegisterController@registerView');

// name / form submit
Route::post('login', 'Authentication\LoginController@login')->name('login');
Route::post('register', 'Authentication\RegisterController@register')->name('register');

// Logout
Route::get('/logout', function () {
    if (!session('user')) {
        return redirect('/login');
    }
    session()->forget('user');

    return redirect('/login')->with('error', 'Logout successfully');
});

// dashboard
Route::get('/dashboard', 'DashboardController@dashboard');
