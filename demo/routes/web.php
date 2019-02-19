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
    return view('welcome');
});

Route::get('/sign-up', 'UserController@indexSignUp');

Route::get('/sign-in', 'UserController@indexSignIn');

Route::get('/users', 'UserController@indexUsers');

Route::get('/create-user', 'UserController@indexCreateUser');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
