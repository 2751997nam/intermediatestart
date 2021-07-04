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
    return redirect()->route('tasks.index');
    // return redirect()->route('login');
});

Route::resource('/tasks', 'TaskController');
Route::get('/lang', 'LangController@switch')->name('lang.switch');
Route::post('register/verify/{token}', 'Auth\RegisterController@verify')->name('register.verify');
Auth::routes();
