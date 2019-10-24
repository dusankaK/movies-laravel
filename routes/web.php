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

use App\Http\Controllers\GenresController;
use App\Http\Controllers\MoviesController;

Route::get('/', 'MoviesController@index');

Route::get('/movies', 'MoviesController@index')->name('movies.index');
Route::get('/movies/{id}', 'MoviesController@show')->name('movies.single-movie');
Route::get('/create', 'MoviesController@create')->name('movies.create');

Route::post('/movies', 'MoviesController@store')->name('store.movie'); 
Route::post('/comment/add/', 'CommentsController@store')->name('store.comment');

Route::get('genres/{genres}', 'GenresController@show');
