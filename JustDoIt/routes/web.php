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

Route::group(['middleware' => 'admin:USER'], function(){
    Route::get('/cart', 'TransactionController@index')->name("cart");
    Route::get('/cart/add/{slug}', 'ShoeController@cart')->name("cartAdd");
    Route::post('/cart/add/success', 'TransactionController@insert')->name("cartAddItem");
    Route::get('/cart/edit/{slug}', 'TransactionController@cartEditView')->name("cartEdit");
    Route::post('/cartEdit', 'TransactionController@cartEdit');
    Route::post('/cartDelete', 'TransactionController@cartDelete');
    Route::post('/cartCheckout', 'TransactionController@cartCheckout')->name("cartCheckout");
});

Route::group(['middleware' => 'admin:ADMIN'], function(){
    Route::get('/add', 'ShoeController@insertView');
    Route::post('/add', 'ShoeController@insert')->name("add");
    Route::get('/update/{slug}', 'ShoeController@updateView')->name("updateShoes");
    Route::post('/update', 'ShoeController@update');
});

Route::get('/', 'ShoeController@index')->name("home");
Route::get('/detail/{slug}', 'ShoeController@detail')->name("detail");
Route::get('/transaction', 'TransactionController@transaction')->middleware("myAuth");
