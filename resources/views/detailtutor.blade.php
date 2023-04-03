@extends('layouts.main')
@section('content')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
        </div>
    @endif

    <img src="/image/Universitas Terbuka.png" class="d-block" alt="Univ Terbuka">
    <h1>DATA TUTOR {{ $id }}</h1>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title text-uppercase fw-bold">{{ $datatutor['nama'] }}</h5>
            <ul class='list-group list-group-flush'>
                <li class="list-group-item">ID TUTOR : {{ $datatutor['id_tutor'] }} </li>
                <li class="list-group-item">MATA KULIAH : {{ $datatutor['mk'] }} </li>
                <li class="list-group-item">Jenis Kelamin : {{ $datatutor['gender'] === 1 ? 'Laki-laki' : 'Perempuan' }} </li>
                <li class="list-group-item">Umur : {{ $datatutor['usia'] }} </li>
                <li class="list-group-item">Alamat : {{ $datatutor['alamat'] }} </li>
            </ul>
        </div>
        <div class="card-footer">
            <x-button-link url="/tutor/edit/{{ $id }}" text="Edit Data" btnColor="warning" textColor="black" />
            <x-button-link url="/tutor/" btnColor="primary" text="Kembali" />
        </div>
    </div>
@endsection
