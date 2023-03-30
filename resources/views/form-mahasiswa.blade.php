@extends('layouts.main')
@section('content')
    <h1 class="text-info">Tambah Data Mahasiswa</h1>

    <div class="card p-5 mt-5">

        <form action="/mahasiswa/tambah" method="POST">
            @csrf

            {{-- Nama --}}
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                    placeholder="Masukkan Nama Mahasiswa" name="nama" value="{{ old('nama') }}">

                @error('nama')
                    <div class='invalid-feedback'>
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- NIM --}}
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="number" class="form-control @error('nim') is-invalid @enderror" id="nim"
                    placeholder="Masukkan NIM Mahasiswa" name="nim" value="{{ old('nim') }}">

                @error('nim')
                    <div class='invalid-feedback'>
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- Nilai --}}
            <div class="mb-3">
                <label for="nilai" class="form-label">Nilai</label>
                <input type="number" class="form-control @error('nilai') is-invalid @enderror" id="nilai"
                    placeholder="Masukkan Nilai Mahasiswa" name="nilai" value="{{ old('nilai') }}">

                @error('nilai')
                    <div class='invalid-feedback'>
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- Alamat --}}
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" rows="3"
                    placeholder="Masukkan Alamat Mahasiswa">
                    {{ old('alamat') }}
                </textarea>

                @error('alamat')
                    <div class='invalid-feedback'>
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- Gender --}}
            <div class="mb-3">
                <label for="gender" class="form-label">Jenis Kelamin</label>
                <select class="form-control @error('gender') is-invalid @enderror" id="gender" name="gender">
                    <option disabled selected>Pilih Jenis Kelamin</option>
                    <option value="0">Perempuan</option>
                    <option value="1">Laki-laki</option>
                </select>

                @error('gender')
                    <div class='invalid-feedback'>
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- Usia --}}
            <div class="mb-3">
                <label for="usia" class="form-label">Usia</label>
                <input type="number" class="form-control @error('usia') is-invalid @enderror" id="usia"
                    placeholder="Masukkan Usia Mahasiswa" name="usia" value="{{ old('usia') }}">

                @error('usia')
                    <div class='invalid-feedback'>
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class='d-grid mt-2'>
                <x-button type="submit" text="Tambah Data" color="outline-primary" />
            </div>
        </form>
    </div>
@endsection
