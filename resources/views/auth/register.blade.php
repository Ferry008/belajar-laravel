@extends('layouts.main')
@section('content')
    <h1>UNIVERSITAS TERBUKA YOGYAKARTA</h1>
    <h2 class="text-info">Jl. Bantul No.81 Kota Yogyakarta</h2>
    <form>
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"></label>
                <input type="email" class="form-control" placeholder="Email" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"></label>
                <input type="password" class="form-control" placeholder="Kata Sandi" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"></label>
                <input type="password" class="form-control" placeholder="Ulangi Kata Sandi" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary btn-lg">DAFTAR</button>
    </form>
@endsection
