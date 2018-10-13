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

// LISTS

Route::get('/lists', 'ListController@index')->name('lists.index');
Route::get('/lists/create', 'ListController@create')->name('lists.create');
Route::post('/store-list', 'ListController@store')->name('lists.store');
Route::get('/lists/{list}', 'ListController@show')->name('lists.show');
Route::get('/lists/{list}/edit', 'ListController@edit')->name('lists.edit');
Route::put('/update-list/{list}', 'ListController@update')->name('lists.update');
Route::get('/delete/{list}', 'ListController@destroy')->name('lists.destroy');

// TASKS

Route::get('/tasks', 'TaskController@index')->name('tasks.index');
Route::get('/tasks/{task}', 'TaskController@show')->name('tasks.show');
Route::get('/tasks/create', 'TaskController@create')->name('tasks.create');
Route::post('/store', 'TaskController@store')->name('tasks.store');
Route::get('/tasks/{task}/edit', 'TaskController@edit')->name('tasks.edit');
Route::put('/update-task/{task}', 'TaskController@update')->name('tasks.update');
Route::get('/delete/{task}', 'TaskController@destroy')->name('tasks.destroy');

// AUTH

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
