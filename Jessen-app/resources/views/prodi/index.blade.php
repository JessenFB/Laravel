@extends('layout.main')
@section('title', 'Daftar Prodi')
@section('content')
    <h2>Daftar Program Studi</h2>
    <p>Ini halaman daftar Program Studi</p>

    @foreach ($prodi as $item)
        {{  $item['nama'] }} {{  $item['fakultas'] ['nama'] }}  {{  $item['fakultas'] ['singkatan'] }} <br>
    @endforeach
@endsection