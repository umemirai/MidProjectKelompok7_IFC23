<?php

use Illuminate\Support\Facades\Route;

// Biarkan halaman utama memanggil dashboard.blade.php
Route::get('/', function () {
    return view('dashboard'); 
});