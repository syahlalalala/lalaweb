<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\EskulController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('index');
});
Route::get('/profil', function () {
    return view('profil');
});
Route::get('/eskul', function () {
    return view('eskul');
});
Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('berita', [BeritaController::class, 'index'])->name('berita');
Route::get('eskul', [EskulController::class, 'index'])->name('eskul');
