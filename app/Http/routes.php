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

Route::get('/', 'pageController@index');

Route::get('about', 'pageController@about');

Route::get('user', 'userController@index');

Route::get('user/{id}', 'userController@profile');

Route::get('room', 'roomController@index');

Route::get('room/{slug}', 'roomController@room');

Route::post('updatechat', 'chatController@update');
