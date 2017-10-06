<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'AppController@index');
Route::get('/empleados', 'AppController@employees');
Route::get('/agendar', 'AppController@schedule');
Route::post('/agendar', 'AppController@schedule_save');
Route::get('/registrar', 'AppController@register');
Route::post('/registrar', 'AppController@register_save');
