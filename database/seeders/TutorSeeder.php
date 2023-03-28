<?php

namespace Database\Seeders;

use App\Models\Tutor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tutor::insert([
            [
                "id_tutor" => 45005,
                "nama" => "Subono",
                "email" => "45005@ecampus.ut.ac.id",
                "alamat" => "Temanggung, Jawa Tengah, Indonesia",
                "gender" => 2,
                "mk" => "IPEM4500",
                "usia" => 50
            ], [
                "id_tutor" => 45004,
                "nama" => "Siti",
                "email" => "45004@ecampus.ut.ac.id",
                "alamat" => "Magelang, Jawa Tengah, Indonesia",
                "gender" => 2,
                "mk" => "IDIK4500",
                "usia" => 40
            ], [
                "id_tutor" => 45003,
                "nama" => "Maryatun",
                "email" => "45003@ecampus.ut.ac.id",
                "alamat" => "Wonosobo, Jawa Tengah, Indonesia",
                "gender" => 2,
                "mk" => "HKUM4500",
                "usia" => 36
            ], [
                "id" => 45002,
                "nama" => "Sarwono",
                "email" => "45002@ecampus.ut.ac.id",
                "alamat" => "Sleman, Yogyakarta, Indonesia",
                "gender" => 1,
                "mk" => "MKDU4401",
                "usia" => 36
            ], [
                "id_tutor" => 45001,
                "nama" => "Mahfud",
                "email" => "45001@ecampus.ut.ac.id",
                "alamat" => "Bantul, Yogyakarta, Indonesia",
                "gender" => 1,
                "mk" => "PDGK4500",
                "usia" => 48
            ]
        ]);
    }
}
