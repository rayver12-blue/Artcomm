<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Artists/tako', function () {
    return view('Artists.tako');
})->name('Artists.tako');