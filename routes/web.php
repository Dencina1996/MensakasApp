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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/adminPanel', function () {
    return view('adminPanel');
});

Route::get('users', 'UsersController@getAllUsers')->name('users');

Route::get('users/{id}', 'UsersController@getUser');

Route::post('users/update/{id}', 'UsersController@updateUser');

Route::post('users/delete/{id}', 'UsersController@deleteUser');

Route::get('new/user', function () {
	return view('users.user_create');
});

Route::post('new/user', 'UsersController@createUser');