<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Artists/tako', function () {
    return view('Artists.tako');
})->name('Artists.tako');

Route::get('/Artists/ashen', function () {
    return view('Artists.ashen');
})->name('Artists.ashen');

Route::get('/Artists/artur', function () {
    return view('Artists.artur');
})->name('Artists.artur');