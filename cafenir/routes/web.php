<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'FrontendController@index');
Route::get('/about', 'FrontendController@about');
Route::get('/menu', 'FrontendController@menu');
Route::get('/reservation', 'FrontendController@reservation');
Route::get('/contact', 'FrontendController@contact');

Route::get('admin/dashboard', 'BackendController@index');
Route::get('admin/contact', 'BackendController@contact');

//Parent Category Routes
Route::get('admin/parentcategory', 'ParentCategoryController@index');
Route::get('admin/create/parentcategory', 'ParentCategoryController@create');
Route::post('admin/parentcategory-save', 'ParentCategoryController@parentcategorySave');
Route::get('admin/parentcategory-edit/{id}', 'ParentCategoryController@parentcategoryEdit');
Route::put('admin/parentcategory-update/{id}', 'ParentCategoryController@parentcategoryUpdate');
Route::get('admin/parentcategory.destroy/{id}', 'ParentCategoryController@destroy');



Route::get('admin/category', 'CategoryController@index');
Route::get('admin/create/category', 'CategoryController@create');
Route::post('admin/category-save', 'CategoryController@categorySave');
Route::get('admin/category-edit/{id}', 'CategoryController@categoryEdit'); 
Route::put('admin/category-update/{id}', 'CategoryController@categoryUpdate'); 
Route::get('admin/category.destroy/{id}', 'CategoryController@destroy');


Route::get('admin/product', 'ProductController@index');
Route::get('admin/create/product', 'ProductController@create');
Route::post('admin/product-save', 'ProductController@productSave');
Route::get('admin/product-edit/{id}', 'ProductController@productEdit');
Route::put('admin/product-update/{id}', 'ProductController@productUpdate');
Route::get('admin/product.destroy/{id}', 'ProductController@destroy');


Route::get('admin/slider', 'SliderController@index');
Route::get('admin/create/slider', 'SliderController@create');
Route::post('admin/slider-save', 'SliderController@silerSave');
Route::get('admin/slider.destroy/{id}', 'SliderController@destroy');


Route::get('admin/reservation', 'ReservationController@reservation');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
