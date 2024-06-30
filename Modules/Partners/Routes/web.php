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

Route::middleware('dashboard')->prefix('dashboard')->as('dashboard.')->group(function () {
    Route::resource('partners', 'PartnersController');

    Route::get('order/partners', 'PartnersController@getOrder')->name('order.form.partners');
    Route::post('order/partners', 'PartnersController@order')->name('order.partners');
});
