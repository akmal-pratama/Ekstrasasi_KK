<?php

use Illuminate\Support\Facades\Route;

// Halaman Landing Page
Route::get('/', function () {
    return view('landing');
})->name('landing');

// Simulasi Route Login (Bawaan Laravel Breeze/Jetstream biasanya sudah ada)
Route::get('/login', function () {
    return view('auth.login'); // Mengarah ke halaman login
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Group Route yang butuh Login (Middleware Auth)
// Route::middleware(['auth'])->group(function () {
    
//     // Halaman Utama / Dashboard
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');

//     // Halaman Tambah Manual
//     Route::get('/keluarga/tambah', function () {
//         return view('tambah');
//     })->name('keluarga.create');

//     // Halaman Tambah Via Upload (Awal)
//     Route::get('/keluarga/upload', function () {
//         return view('keluarga.upload-start');
//     })->name('keluarga.upload');

//     // Halaman Upload Akhir (Preview)
//     Route::get('/keluarga/upload/preview', function () {
//         return view('upload');
//     })->name('keluarga.preview');

//     // Halaman Edit (Manual 2) - Mengambil ID
//     Route::get('/keluarga/{id}/edit', function ($id) {
//         return view('keluarga.edit', ['id' => $id]);
//     })->name('keluarga.edit');
// });

// Halaman Utama / Dashboard
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