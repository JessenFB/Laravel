    @extends('layout.main')

    @section('title','Daftar Fakultas')

    
    @section('content')
    <h2>Daftar Fakultas</h2>
    <p>Ini Adalah Halaman Daftar Fakultas MDP</p>

    @foreach ($fakultas as $item)
    {{$item['nama']}} {{$item['singkatan'] }} 
    @endforeach
    @endsection