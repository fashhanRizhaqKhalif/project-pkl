<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/form', function () {
    return view('form');
});
Route::get('/divisi', function () {
    return view('divisi');
});
Route::get('/login', function () {
    return view('login');
});
