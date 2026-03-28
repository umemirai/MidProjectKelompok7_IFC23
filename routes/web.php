<?php

use Illuminate\Support\Facades\Route;

// Langsung memanggil halaman dashboard saat project dijalankan
Route::get('/', function () {
    return view('pages.admin.dashboard');
});