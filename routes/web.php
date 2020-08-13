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
    'namespace' => 'Admin',
    'prefix' => 'admin'
], function () {

    Route::group(['middleware' => 'is_admin'], function () {
        /*  Dashboard */
        Route::get('/orders', 'OrderController@index')
            ->name('orders');
    });

    Route::resource('categories', 'CategoryController');
});

Route::namespace('Web')->group(function () {

    /* Home page */
    Route::get('/', 'PageHomeController@home')
        ->name('home');
});

Route::namespace('Basket')->group(function () {

    /* Add item in basket */
    Route::post('/basket/add/{id}', 'BasketController@add')
        ->name('basket-add');

    Route::group([
        'middleware' => 'basket_is_not_empty',
        'prefix' => 'basket'
    ], function () {

        /* Basket */
        Route::get('/', 'BasketController@basket')
            ->name('basket');

        /* Basket place*/
        Route::get('/place', 'BasketController@basketPlace')
            ->name('basket-place');

        /* Remove in basket */
        Route::post('/remove/{id}', 'BasketController@remove')
            ->name('basket-remove');

        /* Confirmation */
        Route::post('/confirmation', 'BasketController@confirmation')
            ->name('basket-confirmation');
    });
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