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

Route::get('/', function () {
    return view('home');
})->name('home');

/* Products */
Route::get('/products', function () {
    $comics = config('comics.data');
    return view('products.index', compact('comics'));
})->name('products');
Route::get('/products/{id}', function($id){
    $comics = config('comics.data');

    if(is_numeric($id) &&  $id < count($comics) && $id >= 0){
        $comic = $comics[$id];
        return view('products.show', compact('comic'));
    }else{
        abort(404);
    }
})->name('comic');
/* PRODUCTS */


Route::get('/info', function () {
    return view('info');
})->name('info');

