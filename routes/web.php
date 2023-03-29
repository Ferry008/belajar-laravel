<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
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
});

//auth
Route::controller(AuthController::class)->group(function () {
    Route::get('/auth/login', 'login');
    Route::get('/auth/register', 'register');
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
