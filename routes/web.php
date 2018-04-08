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

Route::get('/', 'PagesController@homepage');

Route::get('peminjaman', 'PagesController@peminjaman');

Route::get('datapeminjam', 'PeminjamController@datapeminjam');

Route::post('peminjaman','PeminjamController@store');

Route::get('datapeminjam/{datapeminjam}', 'PeminjamController@show');

Route::get('datapeminjam/{datapeminjam}/edit', 'PeminjamController@edit');
Route::patch('datapeminjam/{datapeminjam}', 'PeminjamController@update');

Route::delete('datapeminjam/{datapeminjam}', 'PeminjamController@destroy');
