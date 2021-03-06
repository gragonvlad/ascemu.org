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
    Route::get('/', 'FilesController@index');
});

Route::group(['prefix' => 'forums'], function() {
    Route::get('/', 'ForumsController@index');
});

Route::group(['prefix' => 'tracker'], function () {
    Route::get('/', 'TrackerController@index');
});

Route::get('/', 'HomeController@index');
