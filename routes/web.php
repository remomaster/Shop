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
    return redirect()->route('shop.all');
});

Route::get('/shop', 'SchuheController@index')->name('shop.all');
Route::get('/shop/{product}', 'SchuheController@show')->name('shop.product');