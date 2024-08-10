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

Route::get('locale/{locale}', 'LocaleController@update')->name('frontend.locale');
Route::post('theme', 'LocaleController@change')->name('change.theme');

Route::middleware(['frontend.locales'])->group(function () {

    Route::get('/', 'FrontendController@index')->name('home');

    Route::get('/about', 'FrontendController@about')->name('about');

    Route::get('/blogs', 'FrontendController@blogs')->name('blogs');

    Route::get('/blogs/{blog}', 'FrontendController@blogDetails')->name('blog.details');

    Route::get('/destinations', 'FrontendController@destinations')->name('destinations');

    Route::get('/destinations/{destination}', 'FrontendController@destinationDetails')->name('destination.details');

    Route::get('/inquiry/{destination}', 'FrontendController@inquiry')->name('inquiry');

    Route::post('/inquiry/{destination}', 'FrontendController@inquiryPost')->name('inquiry.post');

    Route::post('/contact', 'FrontendController@contactPost')->name('contact.post');

});
