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

Route::get('login', function () {
    return view('layout.form');
});

Route::post('login', 'UserController@postLogin');
Route::get('dashboard', 'UserController@dashboard');

Route::post('like', 'UserController@postLike');

Route::get('test', 'UserController@test');
