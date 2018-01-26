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

Route::get('/filmes/{pg}', 'FilmeController@filmes');
Route::get('/buscar/{id}', 'FilmeController@buscar');
Route::get('/shows/{id}', 'ShowController@shows');
Route::get('/search/{id}', 'ShowController@buscar');