<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\BeritaController;

Route::get('/', function () {
    return view('index');
});
Route::get('/profil', function () {
    return view('profil');
});
Route::get('/berita', function () {
    return view('berita');
});
Route::get('/eskul', function () {
    return view('eskul');
});
Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('berita', [BeritaController::class, 'index'])->nama('berita.index');
