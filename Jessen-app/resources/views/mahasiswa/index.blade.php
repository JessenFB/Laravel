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
                      <th class="text-center">Foto</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($mahasiswa as $item)
                    <tr>
                        <td class="text-center">{{ $item['npm'] }}</td>
                        <td class="text-center">{{ $item['nama'] }}</td>
                        <td class="text-center">{{ $item['kota'] ['nama'] }}</td>
                        <td class="text-center">{{ $item['prodi'] ['nama'] }}</td>
                        <td class="text-center" ><img src="{{url('foto/'.$item['url_foto'])}}" alt=""></td>
                        <td> <a href="{{route('mahasiswa.show',$item ['id'])}}" class="btn btn-sm btn-dark btn-rounded">Show</a></td>
                        <td> <a href="{{route('mahasiswa.edit',$item ['id'])}}" class="btn btn-sm btn-dark btn-rounded">Edit</a></td>
                        <td><form action="{{route('mahasiswa.destroy', $item->id)}}" method="post" style="display: inline">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-sm btn-dark btn-rounded btn-danger btn-flat show_confirm"
                          data-toggle ="tooltip" data-nama = "{{$item['nama']}}" title="Hapus">Hapus</button>
                        </form></td>
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
     text: "{{session (' success ')}}",
     icon: "success"
   });
   </script>
@endif

<script src="https://code.jquery.com/jquery-3.7.1.js" 
integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script type="text/javascript">
  $('.show_confirm').click(function(event) {
       var form =  $(this).closest("form");
       var name = $(this).data("nama");
       event.preventDefault();
       Swal.fire({
         title:`Kamu Yakin Inggin Menghapus Data ${name}?`,
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ya, Hapus!"
        }).then((result) => {
        if (result.isConfirmed) {
          form.submit();
       }
      });
   });

</script>

@endsection