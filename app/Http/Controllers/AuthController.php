<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login', [
            'title' => 'Login',
        ]);
    }
    public function Register()
    {
        return view('auth.register', [
            'title' => 'Register',
        ]);
    }
}