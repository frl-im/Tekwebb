<?php

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

Route::get('/berita', function () {

    
    return view('berita', [
        "title" => "Berita",
        "beritas" => Berita::ambildata(),
    ]);   
});

Route::get('/berita/{slug}', function ($slug) {

    return view('halamanberita', [
        "title" => "Berita",
        "new_berita" => Berita::caridata($slug),
    ]);
       
});

