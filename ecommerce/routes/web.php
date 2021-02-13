<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Backend\DashboardController;

use Backend\CategoryController;
use Backend\ParentcategoryController;

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
    return view('backend.layouts.master');
});

// login and register
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('/parent-category', ParentcategoryController::class);
    Route::resource('/category', CategoryController::class);
});



// |        | GET|HEAD  | admin/category                 | admin.category.index   | App\Http\Controllers\Backend\CategoryController@index   | web        |
// |        | POST      | admin/category                 | admin.category.store   | App\Http\Controllers\Backend\CategoryController@store   | web        |
// |        | GET|HEAD  | admin/category/create          | admin.category.create  | App\Http\Controllers\Backend\CategoryController@create  | web        |
// |        | GET|HEAD  | admin/category/{category}      | admin.category.show    | App\Http\Controllers\Backend\CategoryController@show    | web        |
// |        | PUT|PATCH | admin/category/{category}      | admin.category.update  | App\Http\Controllers\Backend\CategoryController@update  | web        |
// |        | DELETE    | admin/category/{category}      | admin.category.destroy | App\Http\Controllers\Backend\CategoryController@destroy | web        |
// |        | GET|HEAD  | admin/category/{category}/edit | admin.category.edit    | App\Http\Controllers\Backend\CategoryController@edit    | web