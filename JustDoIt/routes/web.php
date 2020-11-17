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
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/cart/add/1', function () {
    return view('cart-add');
});

Route::get('/cart/edit', function () {
    return view('cart-edit');
});

Route::get('/transaction', function () {
    return view('transaction');
});

Route::get('/add', function () {
    return view('shoes-add');
});

Route::get('/edit', function () {
    return view('shoes-edit');
});
