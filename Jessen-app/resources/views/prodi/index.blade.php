@extends('layout.main')
@section('title', 'Daftar Prodi')
@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Daftar Program Studi</h4>
            <p class="card-description">
              List Data Program Studi
            </p>
            <a href="{{url('prodi/create')}}" class="btn btn-dark btn-rounded btn-fw">Tambah</a>
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Nama Program Studi</th>
                    <th>Nama Fakultas</th>
                    <th>Singkatan</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach ($prodi as $item)
                 <tr>
        <td>{{  $item['nama'] }}</td> 
        <td>{{  $item['fakultas'] ['nama'] }}</td>  
        <td>{{  $item['fakultas'] ['singkatan'] }} <br></td>
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