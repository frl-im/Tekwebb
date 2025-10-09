<?php

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

         $data_berita = [
        [
            "judul" => "Hot News", 
            "slug" => "hot-news", 
            "penulis" => "Saya",
            "konten" => "MU TIM KALAHAN"
        ],
        [
            "judul" => "Hot News 2",
            "slug" => "hot-news-2",
            "penulis" => "Kamu",
            "konten" => "BARCA TIM KALAHAN"
        ],
        [
            "judul" => "Berita 3",
            "slug" => "berita-3",
            "penulis" => "Dia",
            "konten" => "REMONTADA"
        ]
        ];

       
});

