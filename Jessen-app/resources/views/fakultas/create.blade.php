@extends('layout.main')

    @section('title','Tambah Fakultas')
    
    @section('content')
    <h2>Tambah Fakultas</h2>
    <p>ini Halaman Tambah Fakultas MDP</p>
    <form action="{{route('fakultas.store')}}" method="post">
    @csrf
    Nama Fakultas
    <input type="text" name="nama" id="" value="{{old('nama')}}">
    @error('nama')
            {{$message}}
    @enderror
    <br>
    Singkatan
    <input type="text" name="singkatan" id="" value="{{old('singkatan')}}">
    @error('singkatan')
            {{$message}}
    @enderror
    <br>
    <button type="submit">Simpan</button>
    </form>

    <p>©2024</p>
    @endsection