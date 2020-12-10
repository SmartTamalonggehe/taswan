<?php

use Illuminate\Support\Facades\Route;


Route::get('/','dashboardController@index')
    ->name('dashboard');

Route::resource('golongan', 'golonganController');
Route::resource('mkGol', 'mkGolController');
Route::resource('jabatan', 'jabatanController');
Route::resource('pelajaran', 'pelajaranController');
Route::resource('guru', 'guruController');
Route::resource('jadwal', 'jadwalController');
Route::resource('siswa', 'siswaController');
Route::resource('kelas', 'kelasController');
Route::resource('kelasDetail', 'kelasDetailController');
Route::resource('User', 'registerController');

