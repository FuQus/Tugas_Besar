<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DistributionController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\ProgrammerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;

// Rute untuk halaman beranda
Route::get('/', function () {
    return view('index'); // Pastikan nama file sesuai dengan nama file Blade Anda
});

// Rute untuk distribusi
Route::get('/distributions', [DistributionController::class, 'index'])->name('distributions.index');

// Rute untuk donasi
Route::get('/donations', [DonationController::class, 'index'])->name('donations.index');

// Rute untuk programmer
Route::get('/programmers', [ProgrammerController::class, 'index'])->name('programmers.index');

// Rute untuk registrasi
Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [UserController::class, 'register']);

// Rute untuk sign in
Route::get('/signin', [LoginController::class, 'showLoginForm'])->name('signin');
Route::post('/signin', [LoginController::class, 'login'])->name('login');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rute untuk halaman home yang dilindungi
Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rute untuk logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');