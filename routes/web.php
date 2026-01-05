<?php

use Illuminate\Support\Facades\Route;

// Kita pakai Closure function saja biar cepat (tanpa Controller terpisah untuk demo ini)
// Tapi kalau mau rapi bisa dipindah ke Controller seperti penjelasan sebelumnya

Route::get('/', function () {
    return view('beranda');
})->name('beranda');

Route::get('/tambah-data', function () {
    return view('tambah');
})->name('tambah');

Route::get('/upload-data', function () {
    return view('upload');
})->name('upload');

// Halaman Upload Lanjutan (Target tombol lanjutkan)
Route::get('/upload-data/lanjutan', function () {
    return view('tambah'); // Kita reuse halaman tambah saja karena desainnya sama
})->name('upload.lanjutan');

Route::get('/konfirmasi', function () {
    return view('popup_konfirmasi');
})->name('konfirmasi');