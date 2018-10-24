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

Route::resource('pelicula', 'PeliculaController');

Route::get('/', 'FrontController@index');

Route::get('index', 'FrontController@index');

Route::get('contacto', 'FrontController@contacto');

Route::get('reviews', 'FrontController@reviews');
