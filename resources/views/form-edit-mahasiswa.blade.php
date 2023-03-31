@extends('layouts.main')
@section('content')
    <h1 class="text-info">Edit Data Mahasiswa</h1>

    <div class="card p-5 mt-5">

        <form action="/mahasiswa/edit/{{ $data->id }}" method="POST">

            @csrf
            @method('PUT')

            {{-- Nama --}}
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                    placeholder="Masukkan Nama Mahasiswa" name="nama" value="{{ old('nama', $data['nama']) }}">

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
                    placeholder="Masukkan NIM Mahasiswa" name="nim" value="{{ old('nim', $data['nim']) }}" readonly>

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
                    placeholder="Masukkan Nilai Mahasiswa" name="nilai" value="{{ old('nilai', $data['nilai']) }}">

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
                    placeholder="Masukkan Alamat Mahasiswa"> {{ old('alamat', $data['alamat']) }}
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
                    {{-- <option value="{{ $data['gender'] }}" disabled selected>
                        {{ $data['gender'] === 0 ? 'Perempuan' : 'Laki-laki' }}
                    </option> --}}
                    <option disable selected>{{ old('gender', $data['gender']) }}</option>
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
                    placeholder="Masukkan Usia Mahasiswa" name="usia" value="{{ old('usia', $data['usia']) }}">

                @error('usia')
                    <div class='invalid-feedback'>
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class='d-grid mt-2'>
                <x-button-link url="/detail/$id" btnColor="primary" text="Batal Ubah Data" />
                <x-button type="submit" text="Ubah Data" color="outline-primary" />
            </div>
        </form>
    </div>
@endsection
