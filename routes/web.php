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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/taskRegister', 'TaskController@register');



Route::get('/task', 'TaskController@index');
Route::get('/task/{id}', 'TaskController@index');
Route::post('/task', 'TaskController@store')->name('taskregister');
Route::delete('/task/{id}', 'TaskController@delete');