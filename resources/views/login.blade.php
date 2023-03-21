@extends('layouts.main')
@section('content')
<h1>UNIVERSITAS TERBUKA YOGYAKARTA</h1>
  <h2 class="text-info">Jl. Bantul No.81 Kota Yogyakarta</h2>
  <form>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Masukkan email anda</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Ingat saya</label>
      </div>
      <button type="submit" class="btn btn-primary btn-lg">MASUK</button>
      <a type="button"href='/home' class="btn btn-primary btn-lg">HOME</a>
    </form>

@endsection
    
  