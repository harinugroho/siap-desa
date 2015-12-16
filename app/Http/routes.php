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
Route::get('tanah/ubah_pemilik/{id}', 'TanahController@pindah_pemilik_create');
Route::post('tanah/ubah_pemilik/{id}/store', 'TanahController@pindah_pemilik_store');
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
Route::get('tanah/{id}/status/masalah', 'TanahController@masalah_update');
Route::get('tanah/{id}/status/keberatan', 'TanahController@keberatan_update');
Route::get('tanah/{tanah_id}/koordinat/delete/{id}', 'KoordinatController@destroy');
Route::get('tanah/{id}/koordinat', 'KoordinatController@index');
Route::post('tanah/{id}/koordinat', 'KoordinatController@store');

// Route Surat Pernyataan Penguasaan Fisik
Route::get('surat/sppf/{id}/create', 'DataSuratController@sppf_create');
Route::get('surat/sppf/{id}/edit', 'DataSuratController@sppf_edit');
Route::post('surat/sppf/{id}', 'DataSuratController@sppf_store');
Route::put('surat/sppf/{id}', 'DataSuratController@sppf_update');

// Route Surat Keterangan Riwayat Pemilik
Route::get('surat/riwayat/{id}/create', 'DataSuratController@surat_riwayat_create');
Route::get('surat/riwayat/{id}/edit', 'DataSuratController@surat_riwayat_edit');
Route::post('surat/riwayat/{id}', 'DataSuratController@surat_riwayat_store');
Route::put('surat/riwayat/{id}', 'DataSuratController@surat_riwayat_update');

// Route untuk generator surat
Route::get('generate/{hashed}', 'SuratGeneratorController@index');

Route::get('generate/sppf/{id}', 'SuratGeneratorController@sppf');
Route::get('generate/riwayat/{id}', 'SuratGeneratorController@riwayat');

// Route public file
Route::get('public/{folder}/{file}', 'DownloadController@folderFile');

// Route untuk peta
Route::get('peta/tanah/{id}', 'PetaController@render');

// Route pemohon surat
Route::get('surat/pemohon', 'PemohonController@index');

// Route Kepala Desa
Route::get('konflik/all', 'KepalaDesaController@getAllKonflik');
Route::get('konflik/setuju/{id}', 'KepalaDesaController@setuju');
Route::get('konflik/tolak/{id}', 'KepalaDesaController@tolak');

// Route Konflik
Route::get('konflik/solve/{id}', 'KonflikController@solve');
Route::post('konflik/solve/{id}', 'KonflikController@storeSolve');
Route::get('konflik/batal/{id}', 'KonflikController@batal');
Route::get('konflik/{id}/create', 'KonflikController@create');
Route::post('konflik/{id}', 'KonflikController@store');
Route::get('konflik/{id}', 'KonflikController@getKonflikById');

// Route Administrasi
Route::post('administrasi/bayar/{surat}/{id}', 'PemohonController@bayarSurat');
