@extends('layout.main')
@section('title', 'Tambah Prodi')
@section('content')
    <h2>Tambah Prodi</h2>
    <p>Ini halaman tambah prodi</p>
    <form action="{{  route('prodi.store') }}" method="post">
        @csrf
        Nama Program Studi
        <input type="text" name="nama" id="" value="{{ old('nama') }}" >
        @error('nama')
            {{ $message }}
        @enderror <br>
        Fakultas
        <select name="fakultas_id" id="">
            @foreach ($fakultas as $item)
                <option value="{{ $item['id'] }}">{{ $item['nama'] }}</option>
            @endforeach
        </select>
        @error('fakultas_id')
            {{ $message }}
        @enderror <br>
        <button type="submit">Simpan</button>
    </form>
@endsection