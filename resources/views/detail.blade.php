@extends('layouts.main')
@section('content')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
        </div>
    @endif

    <img src="/image/Universitas Terbuka.png" class="d-block" alt="Univ Terbuka">
    <h5 class="text-info">DETAIL DATA MAHASISWA {{ $id }}</h5>


    <div class="card" style="width: 30rem;">
        <div class="card-body">
            <h2 class="card-title text-uppercase fw-bold">{{ $data['nama'] }}</h2>
            <ul class='list-group list-group-flush'>
                <li class="list-group-item">NIM : {{ $data['nim'] }} </li>
                <li class="list-group-item">Jenis Kelamin : {{ $data['gender'] === 1 ? 'Laki-laki' : 'Perempuan' }} </li>
                <li class="list-group-item">Umur : {{ $data['usia'] }} </li>
                <li class="list-group-item">Alamat : {{ $data['alamat'] }} </li>
            </ul>
        </div>
        <div class="card-footer">
            <x-button-link url="/mahasiswa/edit/{{ $id }}" text="Edit Data" btnColor="warning"
                textColor="black" />
            <x-button-link url="/nilai" btnColor="primary" text="Kembali" />
        </div>
    </div>
@endsection
