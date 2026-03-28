<?php

use Illuminate\Support\Facades\Route;

// Langsung panggil file yang ada di folder components
Route::get('/', function () {
    return view('components.admin-layout');
});