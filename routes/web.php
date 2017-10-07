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

Route::get('toys', 'ToysController@index');

Route::get('edit/{id}', 'ToysController@edit');
Route::post('edit/{id}', 'ToysController@update');

Route::get('create', 'ToysController@create');
Route::post('create', 'ToysController@insert');

Route::get('delete/{id}', 'ToysController@delete');

Route::get('show/{id}', 'ToysController@show');
