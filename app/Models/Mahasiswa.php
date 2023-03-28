<?php

namespace App\Models;

class Mahasiswa
{
    private static $listMahasiswa = [
        [
            "id" => 1,
            "nama" => "Ferry",
            "nim" => "045123456",
            "nilai" => 70,
            "personal" => [
                "alamat" => "Bantul, Yogyakarta, Indonesia",
                "gender" => 1,
                "usia" => 18,
            ]
        ],
        [
            "id" => 2,
            "nama" => "Tami",
            "nim" => "041112345",
            "nilai" => 90,
            "personal" => [
                "alamat" => "Sleman, Yogyakarta, Indonesia",
                "gender" => 2,
                "usia" => 20,
            ]
        ],
        [
            "id" => 3,
            "nama" => "Udin",
            "nim" => "857543234",
            "nilai" => 100,
            "personal" => [
                "alamat" => "Magelang, Jawa Tengah, Indonesia",
                "gender" => 1,
                "usia" => 21,
            ]
        ],
        [

            "id" => 4,
            "nama" => "Abdul",
            "nim" => "042897654",
            "nilai" => 60,
            "personal" => [
                "alamat" => "Temanggung, Jawa Tengah, Indonesia",
                "gender" => 1,
                "usia" => 22,
            ]
        ],
        [
            "id" => 5,
            "nama" => "Bono",
            "nim" => "042789456",
            "nilai" => 90,
            "personal" => [
                "alamat" => "Kota Yogyakarta, Yogyakarta, Indonesia",
                "gender" => 1,
                "usia" => 18,
            ]
        ]
    ];
    // Static Method
    // Return all data mahasiswa
    public static function all()
    {
        return collect(self::$listMahasiswa);
    }

    public static function find($id)
    {
        // dapat id
        // loop array, cari id yang sama
        $dataMahasiswa = self::all();

        return $dataMahasiswa->firstWhere('id', $id);
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
