@extends('layouts.main')
@section('content')
    <h1>UNIVERSITAS TERBUKA YOGYAKARTA</h1>
    <h2 class="text-info">Jl. Bantul No.81 Kota Yogyakarta</h2>
    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
                <div class="card-body">
                    <img src="/image/All.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Selamat Datang</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label"></label>
                                <input type="email" class="form-control" placeholder="Email" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputPassword1" class="form-label"></label>
                                <input type="password" class="form-control" placeholder="Kata Sandi"
                                    id="exampleInputPassword1">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Ingat saya</label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg">MASUK</button>
                            <a type="button"href='/auth/register' class="btn btn-primary btn-lg">DAFTAR</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
