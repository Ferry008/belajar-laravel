<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $listMahasiswa = [
            [
                "nama" => "Ferry",
                "nim" => "045123456",
                "nilai" => 70
            ],
            [
                "nama" => "Budi",
                "nim" => "041112345",
                "nilai" => 90
            ],
            [
                "nama" => "Udin",
                "nim" => "857543234",
                "nilai" => 100
            ],
            [
                "nama" => "Abdul",
                "nim" => "042897654",
                "nilai" => 60
            ],
            [
                "nama" => "Bono",
                "nim" => "042789456",
                "nilai" => 90
            ]
        ];
        return view('userb', [
            'title' => 'Nilai',

            'dataMahasiswa' => $listMahasiswa
        ]);
    }
    public function login()
    {
        return view('login', [
            'title' => 'Login',
        ]);
    }
    public function home()
    {
        return view('home', [
            'title' => 'Home',
        ]);
    }
    public function about()
    {
        return view('about', [
            'title' => 'About',
        ]);
    }
}