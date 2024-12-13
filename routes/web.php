<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('auth.login'); // Pastikan file auth/login.blade.php ada
})->name('login');