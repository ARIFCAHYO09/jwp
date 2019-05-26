@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="font-size: 20px"><b>Input Data Laporan Kerusakan</b></div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    @if ($errors->any())
                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>
                                                        {{ $error }}
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form action="{{ route('pengaduan.store') }}" method="POST" role="form" enctype="multipart/form-data">
                                        @csrf
                                        

                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">Ruangan</label>
                                            <div class="col-md-6">
                                                <select name="ruangan" class="form-control">
                                                  <option value="5.2.1">5.2.1</option>
                                                  <option value="5.2.2">5.2.2</option>
                                                  <option value="5.2.3">5.2.4</option>
                                                  <option value="5.2.4">5.2.4</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">Jenis Kerusakan</label>
                                            <div class="col-md-6">
                                                <select name="jenis" class="form-control">
                                                  <option value="5.2.1">ringan</option>
                                                  <option value="5.2.2">sedang</option>
                                                  <option value="5.2.3">berat</option>
                                                  <option value="5.2.4">sangat berat</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">Permasalahan</label>
                                            <div class="col-md-6">
                                                <textarea rows="4" class="col-md-12" name="masalah">
                                                </textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label for="profile_image" class="col-md-4 col-form-label text-md-right">File Pendukung</label>
                                            <div class="col-md-6">
                                                <input id="file" type="file" class="form-control" name="file" onchange="readURL(this)">
                                                @if (auth()->user()->image)
                                                    <code>{{ auth()->user()->image }}</code>
                                                @endif
                                            </div>
                                        </div>
                                        <center>
                                                    <img id="img1" src="{{ asset(auth()->user()->image) }}" style="width: 250px; height: 250px;">
                                         </center>
                                                       
                                            
                                        <div class="form-group row mb-0 mt-5">
                                            <div class="col-md-8 offset-md-3">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection