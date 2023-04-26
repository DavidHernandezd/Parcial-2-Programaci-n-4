<?php

use App\Http\Controllers\CancionesController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('canciones', 'App\Http\Controllers\CancionesController');
