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
            <a href="{{ url('mahasiswa/create') }}" class="btn btn-primary btn-rounded btn-fw">Tambah</a>
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                      <th class="text-center">NPM</th>
                      <th class="text-center">Nama Mahasiswa</th>
                      <th class="text-center">Kota Lahir</th>
                      <th class="text-center">Prodi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($mahasiswa as $item)
                    <tr>
                        <td class="text-center">{{ $item['npm'] }}</td>
                        <td class="text-center">{{ $item['nama'] }}</td>
                        <td class="text-center">{{ $item['kota'] ['nama'] }}</td>
                        <td class="text-center">{{ $item['prodi'] ['nama'] }}</td>
                        <td> <a href="{{route('mahasiswa.show',$item ['id'])}}" class="btn btn-sm btn-dark btn-rounded">Show</a></td>
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
     title: "Good job!",
     text: "You clicked the button!",
     icon: "success"
   });
   </script>

@endif
@endsection