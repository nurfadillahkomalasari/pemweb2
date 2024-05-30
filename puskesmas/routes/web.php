<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\kelurahanController;
use App\Http\Controllers\PasienController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda', function () {
    return "Halaman Beranda";
});

Route::get('/salam', function () {
    return "Selamat Datang nurfadillah di Laravel 11";
});

Route::get('/profile', function () {
    return "Halaman Profile";
});


// Praktikum Laravel 2
Route::get('/dashboard', [AdminController::class, 'index']);
Route::get('/contact', [AdminController::class, 'index']);

// Praktikum Laravel 3
Route::get('/dashboard/kelurahan', [KelurahanController::class, 'index']);
Route::get('/dashboard/pasien', [PasienController::class, 'index']);

