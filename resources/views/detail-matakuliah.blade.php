@extends('layouts.main')

@section('content')
    <h1>DETAIL MATA KULIAH | {{ $data->nama }} - {{ $data->kode }} </h1>

    <h1 class="mt-5"> List Tutor :</h1>
    <table class="table table-bordered border-primary">
        <thead class="table-dark">
            <tr>
                <th scope="col" class="text-center">ID</th>
                <th scope="col" class="text-center">NAMA</th>
                <th scope="col" class="text-center">EMAIL</th>
                <th scope="col" class="text-center">AKSI</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data->tutors as $item)
                <tr>
                    <th scope="row">{{ $item->id }} </th>
                    <td>{{ $item['nama'] }}</td>
                    <td>{{ $item['email'] }}</td>
                    <td class="d-grid">
                        <x-button-link text="Detail" url="/tutor/detail/{{ $item['id '] }}" btnColor="info" />
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
