@extends('layout.main')

@section('title', 'Tambah Mahasiswa')

@section('content')

    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah Mahasiswa</h4>
            <p class="card-description">
              Formulir Tambah Mahasiswa
            </p>
          <form class="forms-sample" action="{{ route('mahasiswa.store') }}" method="post" enctype="multipart/form-data">
            @csrf
              <div class="form-group">
                <label for="npm">NPM</label>
                <input type="text" name="npm" id="" value="{{ old('npm') }}" class="form-control" >
                <div class="form-group">
                @error('npm')
                    <span class="text-danger">{{ $message }}</span>
                @enderror <br>
              </div>
              <div class="form-group">
                <label for="nama">Nama Mahasiswa</label>
                <input type="text" name="nama" id="" value="{{ old('nama') }}" class="form-control" >
                <div class="form-group">
                @error('nama')
                 <span class="text-danger">{{ $message }}</span>
                @enderror <br>
              </div>
              <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" id="" value="{{ old('tanggal_lahir') }}" class="form-control" >
                @error('tanggal_lahir')
                    <span class="text-danger">{{ $message }}</span>
                @enderror <br>
              </div>
              <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" id="" value="{{ old('tempat_lahir') }}" class="form-control" >
                @error('tempat_lahir')
                    <span class="text-danger">{{ $message }}</span>
                @enderror <br>
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="" value="{{ old('alamat') }}" class="form-control" >
                <div class="form-group">
                @error('alamat')
                    <span class="text-danger">{{ $message }}</span>
                @enderror <br>
              </div>
              <div class="form-group">
                <label for="kota_id">Kota</label>
                <select name="kota_id" id="" class="form-control">
                    @foreach ($kota as $item)
                        <option value="{{ $item['id'] }}">{{ $item['nama'] }}</option>
                    @endforeach
                </select>
                <div class="form-control">
                @error('kota_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror <br>
              </div>
              <div class="form-group">
                <label for="prodi_id">Program Studi</label>
                <select name="prodi_id" id="" class="form-control">
                    @foreach ($prodi as $item)
                        <option value="{{ $item['id'] }}">{{ $item['nama'] }}</option>
                    @endforeach
                </select>
                <div class="form-control">
                @error('prodi_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror <br>
              </div>
              <div class="form-group">
                <label for="url_foto">File Foto</label>
                <input type="file" name="url_foto" id=""class="form-control" >
                @error('url_foto')
                    <span class="text-danger">{{ $message }}</span>
                @enderror <br>
              </div>
            
             <button type="submit" class="btn btn-primary mr-2">Simpan</button>
             <a href="{{ url('mahasiswa')}}"class="btn btn-light">Cancel</a>
            </form>
          </div>
        </div>
      </div>
    </div>
    <p>©2024</p>
@endsection