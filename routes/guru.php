<?php

use Illuminate\Support\Facades\Route;

Route::get('/','dashboardController@index');

Route::resource('nilai', 'nilaiController');