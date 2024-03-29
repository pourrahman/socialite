<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();

Route::get('/', function(){
	return view('welcome');
});

Route::get('/home', 'HomeController@index');

Route::get('auth/{driver}', 'Auth\OauthController@redirectToProvider');
Route::get('auth/{driver}/callback', 'Auth\OauthController@handleProviderCallback');

