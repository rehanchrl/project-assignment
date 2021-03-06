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

Route::get('dd', function () {
    return dd(Auth::user());
})->middleware('guest')->name('dd');
Route::get('haha', 'TestController@index')->middleware('auth')->name('test');

Route::group(['middleware' => ['guest']], function () {
    Route::get('/register', 'AuthController@getRegister');
    Route::post('/register', 'AuthController@postRegister')->name('register');

    Route::get('/login', 'AuthController@getLogin');
    Route::post('/login', 'AuthController@postLogin')->name('login');
});


Route::group(['middleware' => ['role:admin'], 'prefix' => 'admin'], function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin');
});

Route::group(['middleware' => ['role:pm'], 'prefix' => 'pm'], function () {
    Route::get('/', function () {
        return view('pm.dashboard');
    })->name('pm');
});

Route::group(['middleware' => ['role:engineer'], 'prefix' => 'engineer'], function () {
    Route::get('/', function () {
        return view('engineer.dashboard');   
    })->name('engineer');
});

Route::get('/logout', 'AuthController@getLogout')->middleware('auth')->name('logout');