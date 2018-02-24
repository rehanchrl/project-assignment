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

Route::get('admin', function () {
    return view('admin_template');
});
Route::get('test', 'TestController@index')->middleware('auth')->name('test');

Route::get('/register', 'AuthController@getRegister')->middleware('guest');
Route::post('/register', 'AuthController@postRegister')->middleware('guest')->name('register');

Route::get('/login', 'AuthController@getLogin')->middleware('guest');
Route::post('/login', 'AuthController@postLogin')->middleware('guest')->name('login');

Route::get('/logout', 'AuthController@getLogout')->middleware('auth')->name('logout');