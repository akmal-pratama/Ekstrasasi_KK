<?php

use Illuminate\Support\Facades\Route;

// Halaman Landing Page
Route::get('/', function () {
    return view('landing');
})->name('landing');


use App\Http\Controllers\AuthController;

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', [AuthController::class, 'register']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Halaman Tambah Manual
Route::get('/tambah', function () {
    return view('tambah');
})->name('tambah');

// Halaman Tambah Via Upload (Awal)
Route::get('/keluarga/upload', function () {
    return view('keluarga.upload-start');
})->name('keluarga.upload');

// Halaman Upload Akhir (Preview)
Route::get('/keluarga/upload/preview', function () {
    return view('upload');
})->name('keluarga.preview');

// Halaman Edit (Manual 2) - Mengambil ID
Route::get('/keluarga/{id}/edit', function ($id) {
    return view('keluarga.edit', ['id' => $id]);
})->name('keluarga.edit');