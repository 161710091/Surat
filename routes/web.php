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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// Route::group(['prefix'=>'Super Admin', 'middleware'=>['auth', 'role:Super Admin']],
// function() {
	Route::resource('surat_masuk', 'SuratMasukController');
	Route::resource('surat_keluar', 'SuratKeluarController');
	Route::resource('user', 'UserController');
	Route::resource('disposisi', 'DisposisiController');
	Route::resource('instansi', 'InstansiController');
// });

// Route::group(['prefix'=>'Admin', 'middleware'=>['auth', 'role:Admin']],
// function() {
// 	Route::resource('surat_masuk', 'SuratMasukController');
// 	Route::resource('surat_keluar', 'SuratKeluarController');
// 	Route::resource('user', 'UserController');
// 	Route::resource('disposisi', 'DisposisiController');
// 	Route::resource('instansi', 'InstansiController');
// });