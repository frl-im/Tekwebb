<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\MahasiswaController;
use App\Models\Berita;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        "title" => "welcome"
    ]);
});

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile",
        "nama" => "Farel Imam ",
        "nohp" => "088888888",
        "foto" => "img/download.png"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]); 
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact"
    ]);
});

Route::get('/berita',[BeritaController::class, 'index'] );

Route::get('/berita/{slug}', [BeritaController::class, 'tampildata'] );

Route::get('/mahasiswa',[MahasiswaController::class, 'index'] );
