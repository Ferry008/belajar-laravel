<?php

namespace Database\Seeders;

use App\Models\MataKuliah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       MataKuliah::insert([
        ["kode" => "MKWU4101",
        "nama_mk" => "Pendidikan Agama Islam"],

        ["kode" => "MKWI4201",
        "nama_mk" => "Bahasa Inggris"],

        ["kode" => "MKWU4108",
        "nama_mk" => "Bahasa Indonesia"],

        ["kode" => "BING4102",
        "nama_mk" => "Reading I"],

       ]);
    }
}
