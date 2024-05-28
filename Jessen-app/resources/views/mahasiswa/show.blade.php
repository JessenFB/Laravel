@extends('layout.main')
@section('title', 'Mahasiswa')
@section('content')

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            {{$mahasiswa['npm']}}<br>
            {{$mahasiswa['nama']}}<br>
            {{$mahasiswa['prodi']['nama']}}<br>
        </div>
    </div>
@endsection