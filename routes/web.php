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
    $userId = Auth::id();
    return view('welcome', compact('userid'));
});

Route::get('/lokasi', 'LokasiController@index')->middleware('admin');
Route::resource('kotas', 'KotasController');
Route::resource('kecamatans', 'KecamatansController');
Route::resource('kelurahans', 'KelurahansController');
Route::resource('pasiens', 'PasiensController')->middleware('auth');
Route::resource('users', 'UsersController')->middleware('admin');
Route::get('/ajax/kecamatan/{kota}', 'AjaxController@kecamatan');
Route::get('/ajax/kelurahan/{kecamatan}', 'AjaxController@kelurahan');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/admin-users/{user}', 'AdminUsersController@store');
Route::delete('/admin-users/{user}', 'AdminUsersController@destroy');
