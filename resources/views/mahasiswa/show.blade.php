@extends('layout.main')
@section('title', 'Mahasiswa')
@section('content')

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <table ,border="1">
                <tr>
                    <td>NPM</td>     
                    <td>{{$mahasiswa['npm']}}<br></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>{{$mahasiswa['nama']}}<br></td>
                </tr>
                <tr>
                    <td>Program Studi</td>
                    <td>{{$mahasiswa['prodi']['nama']}}<br></td>
                </tr> 
                <tr>
                    <td>Tempat Tanggal Lahir</td>
                    <td>{{$mahasiswa['tempat_lahir']}}, {{$mahasiswa['tanggal_lahir']}}<br></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>{{$mahasiswa['alamat']}}<br></td>
                </tr>
                <tr>
                    <td>Kota</td>
                    <td>{{$mahasiswa['kota']['nama']}}<br></td>
                </tr>
                <tr>
                    <td>Foto</td>
                    <<td ><img  height="700px" width="200px" src="{{url('foto/'.$mahasiswa['url_foto'])}}" alt=""></td>
                </tr>     
            </table>
        </div>
    </div>
@endsection