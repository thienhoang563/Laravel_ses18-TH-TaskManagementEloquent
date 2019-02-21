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
//tao group route tasks
Route::group(['prefix' => 'tasks'], function () {
    Route::get('/','TaskController@index')->name('tasks.index');
    Route::get('/create','TaskController@create')->name('tasks.create');
    Route::post('/create','TaskController@store')->name('tasks.store');
    Route::get('/{id}/edit','TaskController@edit')->name('tasks.edit');
    Route::post('/{id}/edit','TaskController@update')->name('tasks.update');
    Route::get('/{id}/destroy','TaskController@destroy')->name('tasks.destroy');
});