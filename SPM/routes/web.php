<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Info', function () {
    return view('Qual');
})->name('rutaInfo');
