@extends('layouts.main')
@section('content')
    {{-- Alert Massage --}}
    @if (session('login-error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session('login-error') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <h1 class="text-info">Login</h1>
    <div class="card border-primary p-5 mt-5">
        <div class="row g-0">
            <div class="col-md-4 mt-3">
                <img src="/image/All.png" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">

                    <p class="card-text">
                    <form action="/auth/login" method="POST">
                        @csrf
                        {{-- Email --}}
                        <div class="row mb-3">
                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
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
                            <label for="password" class="col-sm-3 col-form-label">Kata Sandi</label>
                            <div class="col-sm-9">
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
                            Belum Punya Akun ? <a href="/auth/register" class="text-decoration-none">Daftar</a>

                        </div>
                        <div class="d-grid mt-1">
                            <x-button type="submit" text="Masuk" color="outline-primary" />
                        </div>
                    </form>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
