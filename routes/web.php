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

Route::get('/', 'HeisController@index');
Route::get('/heis/{hei}', 'HeisController@show');
Route::get('/contacts', 'ContactsController@index');
Route::get('/heilistings', 'HeiListingsController@index');