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
    // destinations
    Route::resource('destinations', 'DestinationsController');

    // destination's places
    Route::resource('destinations/{destination}/places', 'PlacesController');

    // destination's bookings
    Route::resource('destinations/{destination}/bookings', 'BookingsController')->only(['show']);
});
