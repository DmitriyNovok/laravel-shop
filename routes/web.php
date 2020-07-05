<?php

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

Route::namespace('Web')->group(function () {

    /* Home page */
    Route::get('/', 'PageHomeController@home')
        ->name('home');
});

Route::namespace('Products')->group(function () {

    /* Page categories */
    Route::get('/categories', 'ProductsController@viewCategories')
        ->name('categories');

    /* Category */
    Route::get('/{category}', 'ProductsController@viewCategory')
        ->name('category');

    /* Page product item */
    Route::get('/{category}/{product?}', 'ProductsController@viewProduct')
        ->name('product');
});

Route::namespace('Basket')->group(function () {

    /* Basket */
    Route::get('/basket', 'BasketController@home')
        ->name('basket');
});

Route::namespace('Order')->group(function () {

    /* Order */
    Route::get('/order', 'OrderController@order')
        ->name('order');
});