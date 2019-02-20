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
//route fix
Route::get('/home',function(){
    return redirect('/');
});

//list routes

Route::get('/', 'TaskListController@index')->name('home');
Route::get('/create', 'TaskListController@create')->name('list.create');
Route::get('/{TaskList}', 'TaskListController@show')->name('list.show');






