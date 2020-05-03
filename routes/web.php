<?php

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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

// //middleware for admin and user
Route::get('/home', 'HomeController@site');
Route::post('/logout', 'Auth\loginController@logout')->name('logout');


// //admin controller route
Route::prefix('/admin')->group(function () {
    Route::get('/', 'AdminController@index')->name('admin');
    Route::get('/login', 'Auth\AdminLoginController@create')->name('admin-login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin-login-submit');
    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin-logout');
    Route::get('/register', 'AdminController@create')->name('admin-register');
    Route::post('/store', 'AdminController@store')->name('store-admin');
//     Route::get('/list', 'AdminController@showList')->name('list-admin');

});




//site controller route
