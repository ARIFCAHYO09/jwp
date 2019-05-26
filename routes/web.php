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
    return view('welcome');
});

//Auth::routes();
Auth::routes(['verify' => true]);
Route::get('/home', 'pengaduans@index')->name('home');
Route::post('pengaduan/store', 'pengaduans@store')->name('pengaduan.store');
Route::get('/pengaduan', 'pengaduans@lapor')->name('pengaduan');

Route::post('/pengaduan/editsave', 'pengaduans@editsave')->name('pengaduan.editsave');
Route::get('/pengaduan/hapus/{id}', 'pengaduans@hapus');
Route::get('/pengaduan/edit/{id}', 'pengaduans@edit');
Route::get('/uploadfile', 'UploadfileController@index');
Route::post('/uploadfile', 'UploadfileController@upload');

Route::get('/profile', 'ProfileController@index')->name('profile')->middleware('verified');
Route::post('/profile/update', 'ProfileController@updateProfile')->name('profile.update')->middleware('verified');

