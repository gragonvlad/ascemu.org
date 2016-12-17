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

Route::group(['prefix' => 'files'], function() {
    // File routes go here
});

Route::group(['prefix' => 'forums'], function() {
    // Forum routes go here
});

Route::get('/', 'HomeController@index');
