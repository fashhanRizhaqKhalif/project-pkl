<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

// Rute untuk halaman utama
Route::get('/', function () {
    return view('home');
})->name('home'); // Menambahkan nama rute

// Rute untuk halaman about
Route::get('/about', function () {
    return view('about');
});

// Rute untuk menampilkan formulir
Route::get('/form', function () {
    return view('form'); 
})->name('form'); // Menambahkan nama rute untuk formulir

// Rute untuk menyimpan data mahasiswa
Route::post('/insertform', [MahasiswaController::class, 'insertform'])->name('insertform');

// Rute untuk menampilkan semua data mahasiswa
Route::get('/data', [MahasiswaController::class, 'index'])->name('mahasiswa');
Route::get('/data', [MahasiswaController::class, 'index'])->name('data');
Route::get('/tampilform/{nim}', [MahasiswaController::class, 'tampilform'])->name('tampilform');
Route::post('/updateform/{nim}', [MahasiswaController::class, 'updateform'])->name('updateform');
Route::delete('/delete/{nim}', [MahasiswaController::class, 'delete'])->name('delete');