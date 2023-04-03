@extends('layouts.main')
@section('content')
    <h1 class="text-info">Tambah Data Tutor</h1>

    <div class="card p-5 mt-5">

        <form action="/tutor/tambah" method="POST">
            @csrf

            {{-- Nama --}}
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                    placeholder="Masukkan Nama Tutor" name="nama" value="{{ old('nama') }}">

                @error('nama')
                    <div class='invalid-feedback'>
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- ID Tutor --}}
            <div class="mb-3">
                <label for="id_tutor" class="form-label">ID Tutor</label>
                <input type="number" class="form-control @error('id_tutor') is-invalid @enderror" id="id_tutor"
                    placeholder="Masukkan ID Tutor" name="id_tutor" value="{{ old('id_tutor') }}">

                @error('id_tutor')
                    <div class='invalid-feedback'>
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- Mata Kuliah --}}
            <div class="mb-3">
                <label for="mk" class="form-label">Mata Kuliah</label>
                <input type="text" class="form-control @error('mk') is-invalid @enderror" id="mk"
                    placeholder="Masukkan Mata Kuliah Ampuan" name="mk" value="{{ old('mk') }}">

                @error('mk')
                    <div class='invalid-feedback'>
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- Email --}}
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                    placeholder="Masukkan Email Tutor" name="email" value="{{ old('email') }}">

                @error('email')
                    <div class='invalid-feedback'>
                        {{ $message }}
                    </div>
                @enderror
            </div>


            {{-- Alamat --}}
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" rows="3"
                    placeholder="Masukkan Alamat Tutor">
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
                    placeholder="Masukkan Usia Tutor" name="usia" value="{{ old('usia') }}">

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
