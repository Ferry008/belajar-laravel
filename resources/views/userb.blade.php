@extends('layouts.main')
@section('content')

<img src="/image/Universitas Terbuka.png" class="rounded mx-auto d-block" alt="Univ Terbuka">
<h2 class="text-center">DAFTAR NILAI MAHASISWA</h2>


<table class="table table-bordered border-primary">
    <thead class="table-dark">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">NIM</th>
        <th scope="col">Nilai</th>
        <th scope="col">Grade</th>
      </tr>
    </thead>
    <tbody>{{-- Foreach --}}
        @Foreach ($dataMahasiswa as $item)
        <tr>
            <th scope="row"> {{$loop->index +1}}</th>  
    <td> {{ $item['nama']}} </td>
    <td> {{ $item['nim']}} </td>
    <td> {{ $item['nilai']}} </td>
    @switch($item['nilai'])
@case($item['nilai']>= 90)
<td>  A </td>
@break
@case($item['nilai']>= 80)
<td>  B </td>
@break
@default
<td>  C </td>
@endswitch
        </tr>
@endforeach
    </tbody>
</table>


@endsection
