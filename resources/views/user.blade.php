<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    <img src="/image/Universitas Terbuka.png" class="rounded mx-auto d-block" alt="Univ Terbuka">
    <h1 class="text-center"> Selamat Datang {{ $user }}</h1>
    <h2 class="text-center"> Usia {{ $usia }}</h2>
{{-- For Loop --}}
@for ($i = 1; $i < 10; $i++)
item ke-{{ $i}}
@endfor
    {{-- switch --}}
    @switch($grade)
    @case($grade >= 90)
    <h1 class="text-center">Grade : A</h1>
    @break
    @case($grade >= 80)
    <h1 class="text-center">Grade : B</h1>
    @break
    @default
    <h1 class="text-center">Grade : C</h1>
    @endswitch

    @if ($usia >= 21)
    <h2 class="text-center text-info">Anda sudah dewasa</h2>
    @elseif ($usia >= 13)
    <h2 class="text-center text-info">Anda memasuki masa remaja</h2>
    @else
    <h2 class="text-center text-info">Anda masih anak</h2>
    @endif

    @if ($isMember)
    <h2 class="text-center text-info">Anda sudah registrasi</h2>
    @else
    <h2 class="text-center text-info">Anda belum registrasi</h2>        
    @endif
       <p class="text-primary-emphasis text-center" >Copyright {{ date('Y')}} Universitas Terbuka</p>
    
       <h2 class="text-center text-info"> Data Mahasiswa {{ $listMahasiswa }}</h2>
</body>
</html>