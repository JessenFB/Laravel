@extends('layout.main')

    @section('title','Tambah Fakultas')
    
    @section('content')
    <h2>Tambah Fakultas</h2>
    <p>ini Halaman Tambah Fakultas MDP</p>
    <form action="{{route('prodi.store')}}" method="post">
    @csrf
    Nama Fakultas
    <input type="text" name="nama" id="" value="{{old('nama')}}">
    @error('nama')
            {{$message}}
    @enderror
    <br>
    Fakultas
    <select name="fakultas_id" id="">
        @foreach ($fakultas as $item)
        <option value="{{$item["id"]}}">{{$item["nama"]}}</option>
    @endforeach
    </select>
    @error('fakultas id')
            {{$message}}
    @enderror
    <br>
    <button type="submit">Simpan</button>
    </form>

    <p>©2024</p>
    @endsection