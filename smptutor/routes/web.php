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

Route::get('/', function () {
    return view('index');
});

Route::group(['middleware' => 'auth'], function () {
    // All my routes that needs a logged in user
    Route::get('/tutor', 'TutorController@tutor')->name('tutor');
    Route::get('/students', 'TutorController@students')->name('students');
    Route::get('/student', 'StudentController@student')->name('student');
    Route::get('/modules', 'TutorController@modules')->name('modules');

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/message/{id}', 'HomeController@getMessage')->name('message');
    Route::post('message', 'HomeController@sendMessage');

    Route::resource('courses', 'CoursesController');
});


// Authentication routes
Auth::routes();



