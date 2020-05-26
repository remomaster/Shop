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


Route::post('/shop/cart/buy', 'ShoppingCartController@buy')->name('buy');
Route::get('/shop/cart', 'ShoppingCartController@cart')->name('shoppingcart.index');
Route::put('/shop/cart/add/{product}', 'ShoppingCartController@addToCart')->name('addProduct');
Route::get('/shop', 'ShoeController@index')->name('shop.all');
Route::get('/shop/{product}', 'ShoeController@show')->name('shop.product');