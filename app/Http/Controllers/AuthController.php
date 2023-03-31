<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
    public function storeRegister(Request $request)
    {
        $validatedData = $request->validate([
            "name" => "required|min:3|max:30",
            "email" => "required|min:3|email:dns|unique:users",
            "password" => "required|min:8|confirmed",
            "password_confirmation" => "required",
        ], [
            "name.required" => "Nama tidak boleh kosong",
            "email.required" => "Email tidak boleh kosong",
            "email.unique" => "Email sudah digunakan",
            "password.required" => "Kata sandi tidak boleh kosong",
            "password_confirmation" => "Kata sandi harus sama",
            "password.min" => "Kata sandi terdiri dari minimal 8 karakter",
            "password_confirmation.required" => "Ulangi kata sandi tidak boleh kosong",

        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        // mengisi manual jika tida sesuai DB
        /*User::create([
            "name => $validatedData["name"],
            "password" => $validatedData['Password'],
        ]); */

        User::create($validatedData);
        return redirect("/auth/login");
    }

    public function storeLogin(Request $request)
    {
        // Validation
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        // Check Credentials
        if (Auth::attempt($credentials)) {
            // regenerate session
            $request->session()->regenerate();
            
            return redirect()->intended('/home');
        }

        // if error back with eror
        return back()->with("login-error", "Email atau Kata Sandi Salah!!");
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('auth/login');
    }
}
