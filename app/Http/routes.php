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

Route::get('/', 'WelcomeController@index');

Route::get('testpdf', 'PdfController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


// Route Pemilik Tanah
Route::resource('pemilik', 'PemilikController');

// Route Data Tanah
//Route::resource('tanah', 'TanahController');
Route::get('tanah', 'TanahController@index');
Route::get('tanah/{id}', 'TanahController@show');
Route::get('tanah/{id_pemilik}/create', 'TanahController@create');
Route::post('tanah/store', 'TanahController@store');
Route::get('tanah/{id}/edit', 'TanahController@edit');
Route::put('tanah/{id}', 'TanahController@update');