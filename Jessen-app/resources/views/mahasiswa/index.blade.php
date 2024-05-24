@extends('layout.main')

@section('title', 'Daftar Mahasiswa')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Daftar Mahasiswa</h4>
            <p class="card-description">
              List Data Mahasiswa
            </p>
            <a href="{{url('mahasiwa/create')}}" class="btn btn-dark btn-rounded btn-fw">Tambah</a>
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>NPM </th>
                    <th>Nama Mahasiswa</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Kota Lahir</th>
                    <th>Program Studi</th>
                    <th>Foto</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach ($mahasiswa as $item)
                <tr>
        <td>{{  $item['npm'] }}</td>
        <td>{{  $item['nama'] }}</td> 
        <td>{{  $item['tempat_lahir'] }}</td> 
        <td>{{  $item['tanggal_lahir'] }}</td> 
        <td>{{  $item['alamat'] }}</td> 
        <td>{{  $item['kota'] ['nama'] }}</td>  
        <td>{{  $item['prodi'] ['nama'] }} <br></td>
        <td>{{  $item['npm'] }}</td> 
    </tr>
    @endforeach   
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('success'))
    <script>
      Swal.fire({
        title:"good job!",
        text:"  {{session('success')}}",
        icon:"success"
      })
    </script>
    @endif
    @endsection