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

Auth::routes();

Route::get('/', 'ShoeController@index')->name("home");

Route::get('/detail/{slug}', 'ShoeController@detail')->name("detail");

Route::get('/cart/{slug}', 'TransactionController@index')->name("cart");

Route::get('/cart/add/{slug}', 'ShoeController@cart')->name("cartAdd");

Route::post('/cart/add/success', 'TransactionController@insert')->name("cartAddItem");

Route::get('/cart/edit', function () {
    return view('cart-edit');
});

Route::get('/transaction', function () {
    return view('transaction');
});

Route::get('/add', 'ShoeController@insertView');

Route::post('/add', 'ShoeController@insert');

Route::get('/update/{slug}', 'ShoeController@updateView');

Route::post('/update', 'ShoeController@update');

Route::get('/home', 'HomeController@index')->name('home');
