<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\EskulController;
use App\Http\Controllers\GaleriController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('index');
});
Route::get('/profil', function () {
    return view('profil');
});



Route::get('berita', [BeritaController::class, 'index'])->name('berita');
Route::get('eskul', [EskulController::class, 'index'])->name('eskul');
Route::get('galeri', [GaleriController::class, 'index'])->name('galeri');
