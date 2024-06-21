    @extends('layout.main')

    @section('title','Daftar Fakultas')

    
    @section('content')
    <h2>Daftar Fakultas</h2>
    <p>Ini Adalah Halaman Daftar Fakultas MDP</p>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Daftar Fakultas</h4>
            <p class="card-description">
              List Data Fakultas
            </p>
            @can('create',App\models\Fakultas::class)
            <a href="{{url('fakultas/create')}}" class="btn btn-dark btn-rounded btn-fw">Tambah</a>
            @endcan
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Nama Fakultas</th>
                    <th>Singkatan</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($fakultas as $item)
    <tr>
        <td>{{  $item['nama'] }} </td>
        <td> {{ $item['singkatan'] }} <br></td>
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
        text:"{{session('success')}}",
        icon:"success"
      })
    </script>    
    @endif
    @endsection