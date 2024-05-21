@extends('layout.main')

    @section('title','Tambah Fakultas')
    
    @section('content')
    <h2>Tambah Fakultas</h2>
    <p>ini Halaman Tambah Fakultas MDP</p>
    <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah Fakultas</h4>
            <p class="card-description">
              Formulir Tambah Fakultas
            </p>
            <form class="forms-sample" action="{{route('fakultas.store')}}" method="post">
              @csrf
              <div class="form-group">
                <label for="nama">Nama Fakultas</label>
                <input type="text" name="nama" id="" value="{{old('nama')}}">
                <div class ="form-control"> 
                @error('nama')
                {{$message}}
                @enderror
              </div>
              <div class="form-group ">
                <label for="singkatan">Singkatan</label>
                <input type="text" name="singkatan" id="" value="{{old('singkatan')}}">
              <div class="form-control">
              @error('singkatan')
                {{$message}}
                @enderror
              </div>
              <button type="submit" class="btn btn-primary mr-2">Simpan</button>
              <a href="{{url('fakultas')}}" class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
    </div>
      <p>©2024</p>
      @endsection