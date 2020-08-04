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

Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false
]);

Route::namespace('Auth')->group(function () {
    /* Logout */
    Route::get('/logout', 'LoginController@logout')
        ->name('logout');
});

Route::group([
    'middleware' => 'auth',
    'namespace' => 'Admin'
], function () {

    /*  Dashboard */
    Route::get('/orders', 'OrderController@index')
        ->name('orders');
});

Route::namespace('Web')->group(function () {

    /* Home page */
    Route::get('/', 'PageHomeController@home')
        ->name('home');
});

Route::namespace('Basket')->group(function () {

    /* Basket */
    Route::get('/basket', 'BasketController@basket')
        ->name('basket');

    /* Basket place*/
    Route::get('/basket/place', 'BasketController@basketPlace')
        ->name('basket-place');

    /* Add item in basket */
    Route::post('/basket/add/{id}', 'BasketController@add')
        ->name('basket-add');

    /* Remove in basket */
    Route::post('/basket/remove/{id}', 'BasketController@remove')
        ->name('basket-remove');

    /* Confirmation */
    Route::post('/basket/confirmation', 'BasketController@confirmation')
        ->name('basket-confirmation');
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

Route::namespace('Order')->group(function () {

    /* Order */
    Route::get('/order', 'OrderController@order')
        ->name('order');
});