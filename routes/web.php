<?php

use App\Http\Controllers\BeritaController; 
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\EskulController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('index');
});
Route::get('/profil', function () {
    return view('profil');
});

// berita
Route::get('/berita1', function () {
    return view('berita1');
});
Route::get('/berita2', function () {
    return view('berita2');
});
Route::get('/berita3', function () {
    return view('berita3');
});
Route::get('/berita4', function () {
    return view('berita4');
});
Route::get('/berita5', function () {
    return view('berita5');
});



Route::get('berita', [BeritaController::class, 'index'])->name('berita');
// Route::get('eskul', [EskulController::class, 'index'])->name('eskul');
Route::get('galeri', [GaleriController::class, 'index'])->name('galeri');

//Rute Ekskul
// Route::resource('ekskul', EkskulController::class);
Route::get('/eskul', [EskulController::class, 'index'])->name('eskul');
