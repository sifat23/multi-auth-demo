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

//middleware for admin and user
Route::get('/home', 'HomeController@site');
Route::post('/logout', 'Auth\loginController@logout')->name('logout');
Route::get('/test', 'TestController@index')->name('test.show');
Route::get('/test/{id}', 'TestController@show');



//admin controller route
Route::prefix('/admin')->group(function () {
    Route::get('/', 'AdminController@index')->name('admin');
    Route::get('/login', 'Auth\AdminLoginController@create')->name('admin-login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin-login-submit');
    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin-logout');
    Route::get('/register', 'AdminController@create')->name('admin-register');
    Route::post('/store', 'AdminController@store')->name('store-admin');


    Route::get('/classes/add' , 'ClassroomController@create')->name('admin-class-create');
    Route::post('/classes/store' , 'ClassroomController@store')->name('admin-class-store');
    

    Route::get('/lessons/add' , 'LessonController@create')->name('admin-lesson-create');
    Route::post('/lessons/store' , 'LessonController@store')->name('admin-lesson-store');
    Route::get('/lesson/list', 'LessonController@show')->name('admin-lesson-list');

    Route::get('/exam/add', 'ExamController@create')->name('admin-exam-create');
    Route::post('/exam/add', 'ExamController@store')->name('admin-exam-store');
    Route::get('/exams', 'ExamController@index')->name('admin-exam-list');

    Route::get('/exams/{id}', 'QuestionController@index')->name('admin-exam-questions');
    Route::post('/exams/questions/add', 'QuestionController@store')->name('admin-exam-questions-store');

});


Route::get('/storage/{link}','LessonController@test');

//site controller route
