@extends('layouts.main')
@section('content')
    <h1>Selamat Datang, {{ auth()->user()->name }} </h1>
    <x-button-link url="/mahasiswa/tambah" text="Tambah Data Mahasiswa" />
    <img src="/image/Universitas Terbuka.png" class="rounded mx-auto d-block" alt="Univ Terbuka">
    <h2 class="text-center">DAFTAR NILAI MAHASISWA</h2>


    <table class="table table-bordered border-primary">
        <thead class="table-dark">
            <tr>
                <th scope="col" class="text-center">NO</th>
                <th scope="col" class="text-center">NAMA</th>
                <th scope="col" class="text-center">NIM</th>
                <th scope="col" class="text-center">NILAI</th>
                <th scope="col" class="text-center">GRADE</th>
                <th scope="col" class="text-center">ACTION</th>
            </tr>
        </thead>
        <tbody>{{-- Foreach --}}
            @foreach ($dataMahasiswa as $item)
                <tr>
                    <td scope="row"> {{ $loop->index + 1 }}</td>
                    <td> {{ $item['nama'] }} </td>
                    <td class="text-center"> {{ $item['nim'] }} </td>
                    <td class="text-center"> {{ $item['nilai'] }} </td>
                    @switch($item['nilai'])
                        @case($item['nilai'] >= 90)
                            <td class="text-center"> A </td>
                        @break

                        @case($item['nilai'] >= 70)
                            <td class="text-center"> B </td>
                        @break

                        @default
                            <td class="text-center"> C </td>
                    @endswitch
                    <td>
                        <x-button-link text="Detail" url="/detail/{{ $item['id'] }}" btnColor="info" />
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
