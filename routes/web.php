<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'BookController@indexPage');
Route::get('/get-books', 'BookController@index');
Route::get('/get-book/{book}', 'BookController@getBook');
Route::post('/edit/{book}', 'BookController@update');

Route::get('/edit', 'BookController@editPage');

/** 
 * creating genre should be straight forward.
 * The endpoint requires a 'name' which will be set to newly created genre
 */
Route::post('/genre', 'GenreController@create');

/**
 * This endpoint requires an array of genres ids needed to be attached to a book.
 */
Route::post('/add-genres', 'BookController@addGenres');


