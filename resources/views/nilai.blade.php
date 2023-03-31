@extends('layouts.main')
@section('content')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
        </div>
    @endif
    <img src="/image/Universitas Terbuka.png" class="rounded mx-auto d-block" alt="Univ Terbuka">
    <h2 class="text-center">DAFTAR NILAI MAHASISWA</h2>

    <div>
        <x-button-link url="/mahasiswa/tambah" text="Tambah Data Mahasiswa" />
    </div>
    <table class="table table-bordered border-primary">
        <thead class="table-secondary">
            <tr>
                <th scope="col" class="text-center">NO</th>
                <th scope="col" class="text-center">NAMA</th>
                <th scope="col" class="text-center">NIM</th>
                <th scope="col" class="text-center">NILAI</th>
                <th scope="col" class="text-center">GRADE</th>
                <th scope="col" class="text-center">AKSI</th>
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
                        <x-button-link text="Detail" url="/detail/{{ $item['id'] }}" btnColor="primary" />
                        {{-- <x-button-link text="Delete" url="/hapus_mahasiswa" btnColor="danger" /> --}}
                        <!-- Button trigger modal -->

                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">
                            Delete
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Konfirmasi Hapus Data
                                            Mahasiswa</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah Anda akan menghapus Data Mahasiswa ini?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Batal</button>
                                        <form action="/mahasiswa/delete/{{ $item['id'] }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>


                </tr>
            @endforeach
        </tbody>
    </table>
    {{$dataMahasiswa->links()}}
@endsection
