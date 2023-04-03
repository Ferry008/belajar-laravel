<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Models\MataKuliah;
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
});

Route::get('/coba', function () {
    return view('coba');
});

// Group Route
//home
Route::controller(HomeController::class)->group(function () {
    Route::get('/home', 'home');
    Route::get('/about', 'about');

    Route::get('/nilai', 'index');
    Route::get('/detail/{id}', 'detail');

    Route::get('/tutor', 'tutor');
    Route::get('/detailtutor/{id}', 'detailtutor');

    Route::get('/mahasiswa/tambah', 'indexAddMahasiswa');
    Route::post('/mahasiswa/tambah', 'storeMahasiswa');

    Route::get('/mahasiswa/edit/{id}', 'indexUpdateMahasiswa');
    Route::put('/mahasiswa/edit/{id}', 'storeUpdateMahasiswa');
    
    Route::delete('/mahasiswa/delete/{id}','deleteMahasiswa');

    Route::get('/tutor/tambah', 'indexAddTutor');
    Route::post('/tutor/tambah', 'storeTutor');

    Route::get('/tutor/edit/{id}', 'indexUpdateTutor');
    Route::put('/tutor/edit/{id}', 'storeUpdateTutor');
    
    Route::delete('/tutor/delete/{id}','deleteTutor');
});
// Route Model Binding
Route::get('/mata-kuliah/detail/{mataKuliah}', function (MataKuliah $mataKuliah) 
{
    return view('detail-matakuliah',
    [
        'title' => 'Detail Mata Kuliah',
        'data' => $mataKuliah
    ]);
    

});

//auth
Route::controller(AuthController::class)->group(function () {
    Route::get('/auth/login', 'login');
    // ->middleware('guest') ->name('login');
    Route::get('/auth/register', 'register');
    // ->middleware('guest');
    Route::post('/auth/register', 'storeRegister');
    Route::post('/auth/login', 'storeLogin');
    Route::post('/auth/logout', 'logout');
});

Route::get('/user', function () {
    $username = "Ferry";

    return view('user', [
        'user' => $username,
        'usia' => 20,
        'isMember' => false,
        'grade' => 100
    ]);
});
