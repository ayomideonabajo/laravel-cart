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

Route::get('/', 'PagesController@index' )->name('home');

Route::get('/shop', 'ProductController@index')->name('shop');
Route::get('/shop/{id}', 'ProductController@show')->name('product');

Route::get('/cart', 'CartController@cart')->name('cart');
Route::get('/add-to-cart/{id}', 'CartController@addToCart')->name('add.to.cart');
Route::get('/delete-from-cart/{id}', 'CartController@delete')->name('delete.from.cart');
