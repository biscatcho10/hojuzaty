<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(
    ['middleware' => 'auth:sanctum'],
    function () {
        // notifications
        Route::get('notifications', 'Api\NotificationsController@index');
        // read notification
        Route::post('/read/notifications', 'Api\NotificationsController@read');
    }
);

Route::middleware('auth:sanctum')->group(
    function () {
        // delivery notifications
        Route::get('/delivery/notifications', 'Api\NotificationsController@index');
        // read notification
        Route::post('/read/notifications', 'Api\NotificationsController@read');
    }
);

Route::middleware('auth:sanctum')->group(
    function () {
        // delivery notifications
        Route::get('/vendor/notifications', 'Api\NotificationsController@index');
        // read notification
        Route::post('/read/notifications', 'Api\NotificationsController@read');
    }
);
