<?php

namespace App\Models;

class Tutor
{
    private static $listTutor = [
        [
            "id" => 45001,
            "nama" => "Mahfud",
            "personal" => [
                "alamat" => "Bantul, Yogyakarta, Indonesia",
                "gender" => 1,
                "mk" => "PDGK4500",
                "usia" => 48,
            ]
        ],
        [
            "id" => 45002,
            "nama" => "Sarwono",
            "personal" => [
                "alamat" => "Sleman, Yogyakarta, Indonesia",
                "gender" => 1,
                "mk" => "MKDU4401",
                "usia" => 36,
            ]
        ],
        [
            "id" => 45003,
            "nama" => "Maryatun",
            "personal" => [
                "alamat" => "Wonosobo, Jawa Tengah, Indonesia",
                "gender" => 2,
                "mk" => "HKUM4500",
                "usia" => 36,
            ]
        ],
        [

            "id" => 45004,
            "nama" => "Siti",
            "personal" => [
                "alamat" => "Magelang, Jawa Tengah, Indonesia",
                "gender" => 2,
                "mk" => "IDIK4500",
                "usia" => 40,
            ]
        ],
        [
            "id" => 45005,
            "nama" => "Subono",
            "personal" => [
                "alamat" => "Temanggung, Jawa Tengah, Indonesia",
                "gender" => 2,
                "mk" => "IPEM4500",
                "usia" => 50,
            ]
        ]
    ];
    // Static Method
    // Return all data tutor
    public static function all()
    {
        return collect(self::$listTutor);
    }

    public static function find($id)
    {
        // dapat id
        // loop array, cari id yang sama
        $dataTutor = self::all();

        return $dataTutor->firstWhere('id', $id);
    }
    // Tutor
    /*
    ID
    Nama
    Gender
    Email
    Bidang Keahlian (mata kuliah)
    Periode pengajar (masa)
    */

}
