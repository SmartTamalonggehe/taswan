<?php

use Illuminate\Support\Facades\Route;

Route::get('/','dashboardController@index');

Route::get('/laporan','laporanController@guru')
    ->name('laporanGuru');
Route::get('/laporanCetakGuru','laporanController@cetakGuru')
    ->name('lapGuruCetak');

Route::get('/laporanSiswa','laporanController@siswa')
    ->name('laporanSiswa');
Route::post('/laporanCetakSeluruhSiswa','laporanController@cetakSeluruhSiswa')
    ->name('laporanCetakSeluruhSiswa');
