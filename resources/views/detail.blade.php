@extends('layouts.main')
@section('content')
    <img src="/image/Universitas Terbuka.png" class="d-block" alt="Univ Terbuka">
    <h1>DETAIL DATA MAHASISWA {{ $id }}</h1>
    <x-button-link url="/mahasiswa/edit/{{ $id }}" text="Edit" btnColor="warning" textColor="black" />

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title text-uppercase fw-bold">{{ $data['nama'] }}</h5>
            <ul class='list-group list-group-flush'>
                <li class="list-group-item">NIM : {{ $data['nim'] }} </li>
                <li class="list-group-item">Jenis Kelamin : {{ $data['gender'] === 1 ? 'Laki-laki' : 'Perempuan' }} </li>
                <li class="list-group-item">Umur : {{ $data['usia'] }} </li>
                <li class="list-group-item">Alamat : {{ $data['alamat'] }} </li>
            </ul>
        </div>
        <div class="card-footer">
            <x-button-link url="/nilai" btnColor="primary" text="Kembali" />
        </div>
    </div>
@endsection
