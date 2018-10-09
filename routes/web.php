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

Route::get('/tasks', 'TaskController@index')->name('tasks');
Route::get('/tasks/{task}', 'TaskController@showOneTask')->name('show');
Route::get('/create', 'TaskController@createTask')->name('create');
Route::post('/performance-create', 'TaskController@performanceCreateTask')->name('performance-create');
Route::get('/edit/{task}', 'TaskController@edit')->name('edit');
Route::post('/update-task/{task}', 'TaskController@updateTask')->name('update-task');
Route::get('/delete-task/{task}', 'TaskController@deleteTask')->name('delete-task');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
