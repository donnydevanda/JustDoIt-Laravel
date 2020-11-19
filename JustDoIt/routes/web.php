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

Route::get('/', 'ShoeController@index');

Route::get('/detail/{slug}', 'ShoeController@detail')->name("detail");

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/cart/add/{slug}', 'ShoeController@cart')->name("cartAdd");

Route::get('/cart/edit', function () {
    return view('cart-edit');
});

Route::get('/transaction', function () {
    return view('transaction');
});

Route::get('/add', function () {
    return view('shoes-add');
});

Route::post('/add', 'ShoeController@insert');

Route::post('/update', 'ShoeController@update');

Route::get('/edit', function () {
    return view('shoes-edit');
});
