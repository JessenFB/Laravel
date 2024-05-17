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
            <a href="{{url('fakultas/create')}}" class="btn btn-dark btn-rounded btn-fw">Tambah</a>
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
    @endsection