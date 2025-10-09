<?php

namespace App\Models;

use App\Model\Berita;
use Illuminate\Database\Eloquent\Model;


class Berita extends Model
{
    private static $data_berita = [
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

    public static function ambildata() 
    {
        return self::$data_berita;
    }

    public static function caridata($slug)
    {
        $data_beritas = Self:: $data_berita;

         $new_berita = [];
        foreach($data_berita as $berita) 
        {
            if($berita["slug"] === $slug) {
                $new_berita = $berita;
            }
        }

    return $new_berita;
    }
}
