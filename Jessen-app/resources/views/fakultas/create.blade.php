@extends('layout.main')

    @section('title','Daftar Prodi')
    
    
    @section('content')
    <h2>Daftar Prodi</h2>
    <p>Daftar Program Studi MDP</p>

    @foreach ($prodi as $item)
    {{$item['nama']}}
    @endforeach
    <p>©2024</p>
    @endsection