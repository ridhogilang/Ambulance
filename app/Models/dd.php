<?php

namespace App\Models;

class Relawan 
{
    private static $relawan_post =  [
        [
            "nama" => "Ambulance Gratis Jogja",
            "slug" => "ambulance-pertama",
            "nomor" => "081326310779",
            "alamat" => "Jl. Raya Piyungan No.RT 09, Mungur, Srimartani, Kec. Piyungan, Bantul, Daerah Istimewa Yogyakarta 55792"
        ],
        [
            "nama" => "AmbulanceMu DIY",
            "slug" => "ambulance-kedua",
            "nomor" => "081328669857",
            "alamat" => "Jl. Gedongkuning No.108, Rejowinangun, Kec. Kotagede, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55171"
        ],
    ];

    public static function all()
    {
        return collect (self::$relawan_post);
    }

    public static function find($slug)
    {
        $relawan = static::all();
        return $relawan->firstWhere('slug', $slug);
    }
}
