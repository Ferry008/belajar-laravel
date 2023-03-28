@extends('layouts.main')
@section('content')
    <img src="/image/Universitas Terbuka.png" class="rounded mx-auto d-block" alt="Univ Terbuka">
    <h1 class="text-center">UNIVERSITAS TERBUKA YOGYAKARTA</h1>
    <h2 class="text-center text-info">Jl. Bantul No.81 Kota Yogyakarta</h2>
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/image/1.png" class="rounded mx-auto d-block" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/image/2.png" class="rounded mx-auto d-block" alt="...">
            </div>
            <div class="carousel-item active">
                <img src="/image/3.png" class="rounded mx-auto d-block" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/image/All.png" class="rounded mx-auto d-block" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="d-grid gap-2 col-6 mx-auto">
        <a type="button"href='/auth/login' class="btn btn-primary btn-lg">MASUK</a>
    @endsection
