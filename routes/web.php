<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PageController@index')->name('home'); 

/* Products */
Route::get('/products', 'PageController@products')->name('products');
Route::get('/products/{id}', 'PageController@show')->name('comic');


// Movies
//Route::get('/movies', 'MovieController@index')->name('movie');

/* SHOW */
Route::resource('movies', MovieController::class);
/* PRODUCTS */

/* INFO */
Route::get('/info','PageController@info')->name('info');

/* INFO */