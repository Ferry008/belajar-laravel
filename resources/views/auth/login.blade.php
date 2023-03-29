@extends('layouts.main')
@section('content')
{{-- Alert Massage --}}
@if (session('login-error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>{{ session('login-error') }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

    <h1>Login</h1>
    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card p-5 mt-5">
                <div class="card-body card-center">
                    <img src="/image/All.png" class="card-img-center" alt="...">
                    <form action="/auth/login" method="POST">
                        @csrf
                        {{-- Email --}}
                        <div class="row mb-3">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email"
                                    class="form-control form-control-sm @error('email') is-invalid @enderror" id="email"
                                    placeholder="Masukkan Email Anda" name="email" value="{{ old('email') }}">
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
                                <input type="password"
                                    class="form-control form-control-sm @error('password') is-invalid @enderror"
                                    id="password" placeholder="Masukkan Kata Sandi Anda" name="password">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-text">
                            Sudah Punya Akun ? <a href="/auth/login" class="text-decoration-none">Daftar</a>

                        </div>
                        <div class="d-grid mt-1">
                            <x-button type="submit" text="Masuk" color="outline-primary" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
