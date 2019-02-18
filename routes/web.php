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

//list routes
Route::get('/', 'TaskListController@index')->name('home');
Route::get('/{TaskList}', 'TaskListController@show')->name('list.show');



