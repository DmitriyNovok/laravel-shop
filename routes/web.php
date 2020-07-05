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
    Route::get('/', 'PageHomeController@home');
});

Route::namespace('Products')->group(function () {

    /* Page categories */
    Route::get('/categories', 'ProductsController@viewCategories');

    /* Category */
    Route::get('/{category}', 'ProductsController@viewCategory');

    /* Page product item */
    Route::get('/mobiles/{product}', 'ProductsController@viewProduct');
});

