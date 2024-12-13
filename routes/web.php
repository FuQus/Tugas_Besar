<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

Route::post('/register', [RegisterController::class, 'register']);

Route::get('/', function () { return view('welcome');});

Route::get('/register', function () {
    return view('auth.register'); // Menampilkan form registrasi
});