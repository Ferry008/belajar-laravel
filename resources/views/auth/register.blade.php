@extends('layouts.main')
@section('content')
    <h1 class="text-info">Register</h1>

    <div class="card p-5 mt-5">
        <form action="/auth/register" method="POST">
            @csrf
            {{-- generated --}}
            {{-- <input type="hidden" name"_token value={{csrf_token()}}> --}}

            {{-- Nama --}}
            <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-sm @error('name') is-invalid @enderror"
                        id="name" placeholder="Masukkan Nama Anda" name="name" value="{{ old('name')}}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            {{-- Email --}}
            <div class="row mb-3">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control form-control-sm @error('email') is-invalid @enderror"
                        id="email" placeholder="Masukkan Email Anda" name="email" value="{{ old('email')}}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            {{-- Password --}}
            <div class="row mb-3">
                <label for="password" class="col-sm-2 col-form-label">Kata Sandi</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control form-control-sm @error('password') is-invalid @enderror"
                        id="password" placeholder="Masukkan Kata Sandi Anda" name="password">
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            {{-- Confirm Password --}}
            <div class="row mb-3">
                <label for="password_confirmation" class="col-sm-2 col-form-label">Ulangi Kata Sandi</label>
                <div class="col-sm-10">
                    <input type="password"
                        class="form-control form-control-sm @error('password_confirmation') is-invalid @enderror"
                        id="password_confirmation" placeholder="Ulangi Kata Sandi Anda" name="password_confirmation">
                    @error('password_confirmation')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-text">
                Sudah Punya Akun ? <a href="/auth/login" class="text-decoration-none">Login</a>

            </div>
            <div class="d-grid mt-1">
                <x-button type="submit" text="Daftar" color="outline-primary" />
        </form>
    </div>
@endsection
