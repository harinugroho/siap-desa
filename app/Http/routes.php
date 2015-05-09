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

use App\Http\Controllers\TanahController;

Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

// Route Dummy
Route::get('dummy', 'DummyController@index');


// Route Pemilik Tanah
Route::resource('pemilik', 'PemilikController');

// Route Data Tanah
Route::get('tanah', 'TanahController@index');
Route::get('tanah/create', 'TanahController@createUnknown');
Route::get('tanah/{id}', 'TanahController@show');
Route::get('tanah/{id_pemilik}/create', 'TanahController@create');
Route::post('tanah/store', 'TanahController@store');
Route::get('tanah/{id}/edit', 'TanahController@edit');
Route::put('tanah/{id}', 'TanahController@update');
Route::get('tanah/riwayat/{id}', 'TanahController@riwayat_show');
Route::get('tanah/riwayat/{id}/add', 'TanahController@riwayat_create');
Route::post('tanah/riwayat/store', 'TanahController@riwayat_store');
Route::delete('tanah/riwayat/{id}/delete', 'TanahController@riwayat_destroy');
Route::get('tanah/riwayat/{id}/edit', 'TanahController@riwayat_edit');
Route::put('tanah/riwayat/{id}/update', 'TanahController@riwayat_update');

// Route Surat Pernyataan Penguasaan Fisik
Route::get('surat/sppf/{id}/create', 'DataSuratController@sppf_create');
Route::get('surat/sppf/{id}/edit', 'DataSuratController@sppf_edit');
Route::post('surat/sppf/{id}', 'DataSuratController@sppf_store');
Route::put('surat/sppf/{id}', 'DataSuratController@sppf_update');

// Route untuk generator surat
Route::get('generate/{hashed}', 'SuratGeneratorController@index');

Route::get('generate/sppf/{id}', 'SuratGeneratorController@sppf');