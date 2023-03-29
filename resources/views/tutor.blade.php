@extends('layouts.main')
@section('content')
    <img src="/image/Universitas Terbuka.png" class="rounded mx-auto d-block" alt="Univ Terbuka">
    <h2 class="text-center">DAFTAR TUTOR</h2>


    <table class="table table-bordered border-primary">
        <thead class="table-dark">
            <tr>
                <th scope="col" class="text-center">NO</th>
                <th scope="col" class="text-center">ID TUTOR</th>
                <th scope="col" class="text-center">NAMA</th>
                <th scope="col" class="text-center">ACTION</th>
            </tr>
        </thead>
        <tbody>{{-- Foreach --}}
            @foreach ($dataTutor as $item)
                <tr>
                    <td scope="row"> {{ $loop->index + 1 }}</td>
                    <td class="text-center"> {{ $item['id_tutor'] }} </td>
                    <td> {{ $item['nama'] }} </td>
                    <td>
                        <x-button-link text="Detail" url="/detailtutor/{{ $item['id'] }}" btnColor="info" />
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
