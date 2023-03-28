@extends('layouts.main')
@section('content')
    <img src="/image/Universitas Terbuka.png" class="d-block" alt="Univ Terbuka">
    <h1>DATA TUTOR {{ $id }}</h1>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title text-uppercase fw-bold">{{ $datatutor['nama'] }}</h5>
        <ul class='list-group list-group-flush'>
            <li class="list-group-item">ID TUTOR : {{ $datatutor['id_tutor'] }} </li>
            <li class="list-group-item">MATA KULIAH : {{ $datatutor['mk']}} </li>
            <li class="list-group-item">Jenis Kelamin : {{ $datatutor['gender']===1 ? 'Laki-laki' : 'Perempuan' }} </li>
            <li class="list-group-item">Umur : {{ $datatutor['usia']}} </li>
            <li class="list-group-item">Alamat : {{ $datatutor['alamat']}} </li>
        </ul>
    </div>
    <div class="card-footer">
        <x-button-link url="/tutor" btnColor="primary" text="Kembali" />
    </div>
</div>
@endsection
