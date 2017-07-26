<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::group(['middleware' => 'reseller.session'], function () {
    Route::get('/', 'ResellerController@dashboard');

    
});
Route::post('/login', 'ResellerController@auth');
Route::get('/login', 'ResellerController@login');

Route::get('/register', 'RegisterController@form');
Route::post('/register', 'RegisterController@submit');