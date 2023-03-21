<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
}) ;

Route::get('/coba', function () {
    return view('coba');
}) ;

Route::get('/login', function () {
    return view('login', [
        'title' => 'Login',
    ]);
}) ;

Route::get('/home', function () {
    return view('home', [
        'title' => 'Home',
    ]);
}) ;

Route::get('/userb', function () {
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
]);});

Route::get('/user', function () {
$username = "Ferry";

    return view('user', [
        'user' => $username,
        'usia' => 20,
        'isMember' => false,
        'grade' => 100
    ]);
}) ;

