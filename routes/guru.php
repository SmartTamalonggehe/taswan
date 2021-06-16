<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'dashboardController@index');

Route::resource('nilai', 'nilaiController');

Route::get('/cetak', 'LaporanController@index')->name('cetak');
Route::get('/tampilRaport', 'LaporanController@tampilRaport')->name('tampilRaport');
Route::get('/cetakRaport', 'LaporanController@cetakRaport')->name('cetakRaport');
