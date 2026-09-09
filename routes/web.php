<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('halaman_satu');
});

Route::get('/rekomendasi', function () {
    return view('halaman_dua');
});