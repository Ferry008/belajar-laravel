@extends('layouts.main')
@section('content')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
        </div>
    @endif
    <img src="/image/Universitas Terbuka.png" class="rounded mx-auto d-block" alt="Univ Terbuka">
    <h2 class="text-center">DAFTAR TUTOR</h2>

    <div>
        <x-button-link url="/tutor/tambah" text="Tambah Data Tutor" />
    </div>
    <table class="table table-bordered border-primary">
        <thead class="table-dark">
            <tr>
                <th scope="col" class="text-center">NO</th>
                <th scope="col" class="text-center">ID TUTOR</th>
                <th scope="col" class="text-center">NAMA</th>
                <th scope="col" class="text-center">EMAIL</th>
                <th scope="col" class="text-center">MATA KULIAH</th>
                <th scope="col" class="text-center">AKSI</th>
            </tr>
        </thead>
        <tbody>{{-- Foreach --}}
            @foreach ($dataTutor as $item)
                <tr>
                    <td scope="row"> {{ $loop->index + 1 }}</td>
                    <td class="text-center"> {{ $item['id_tutor'] }} </td>
                    <td> {{ $item['nama'] }} </td>
                    <td> {{ $item['email'] }} </td>
                    <td> <a href="/mata-kuliah/detail/ {{ $item->mataKuliah->id }}" 
                        class="text-decoration-none"> {{ $item->mataKuliah->nama_mk }} </a></td>
                    <td>
                        <x-button-link text="Detail" url="/detailtutor/{{ $item['id'] }}" btnColor="info" />

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
                                            Tutor</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah Anda akan menghapus Data Tutor ini?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Batal</button>
                                        <form action="/tutor/delete/{{ $item['id'] }}" method="POST">
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
@endsection
