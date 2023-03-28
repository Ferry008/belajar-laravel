<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mahasiswa::insert([
            [
                "nama" => "Tami",
                "nim" => "041112345",
                "nilai" => 90,
                "alamat" => "Sleman, Yogyakarta, Indonesia",
                "gender" => 2,
                "usia" => 20
            ], [
                "nama" => "Ferry",
                "nim" => "045123456",
                "nilai" => 70,
                "alamat" => "Bantul, Yogyakarta, Indonesia",
                "gender" => 1,
                "usia" => 18,
            ], [
                "nama" => "Udin",
                "nim" => "857543234",
                "nilai" => 100,
                "alamat" => "Magelang, Jawa Tengah, Indonesia",
                "gender" => 1,
                "usia" => 21,
            ], [
                "nama" => "Abdul",
                "nim" => "042897654",
                "nilai" => 60,
                "alamat" => "Temanggung, Jawa Tengah, Indonesia",
                "gender" => 1,
                "usia" => 22,
            ], [
                "nama" => "Bono",
                "nim" => "042789456",
                "nilai" => 90,
                "alamat" => "Kota Yogyakarta, Yogyakarta, Indonesia",
                "gender" => 1,
                "usia" => 18,
            ]

        ]);
    }
}
