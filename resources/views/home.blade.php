@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>Melihat Data Laporan Kerusakan</b></div>

                <nav aria-label="Page navigation example">
                  <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                  </ul>
                </nav>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th>tgl</th>
                          <th scope="col">Ruang</th>
                          <th scope="col">Jenis Kerusakan</th>
                          <th scope="col">Permasalahan</th>
                          <th scope="col">Pelapor</th>
                          <th scope="col">Gambar</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($pengaduan as $p)
                        <tr>
                          <td scope="row">{{ $loop->iteration }}</td>
                          <td>{{ $p->created_at }}</td>
                          <td>{{ $p->ruang }}</td>
                          <td>{{ $p->jenis_kerusakan }}</td>
                          <td>{{ $p->keterangan }}</td>
                          <td>{{ $p->email }}</td>
                          <td>
                            <img src="{{ $p->gambar }}" width="100px" height="100px">
                            <br>
                            <center>
                            <a href="{{ $p->gambar }}" download="">Downloads</a>
                            </center>
                          </td>
                          <td><a href="/pengaduan/edit/{{ $p->id }}">Edit<a>&nbsp;<a href="/pengaduan/hapus/{{ $p->id }}" style="color: red;">Hapus<a></td>
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
