@extends('layouts_backend.master')
@include('komponen/pesan')
@section('title','Ayam')
@section('content')
<div class="container-fluid">
    <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('http://127.0.0.1:8000/backend_template/assets/img/curved-images/2.jpg'); background-position-y: 50%;">
        <span class="mask bg-gradient-primary opacity-6"></span>
    </div>
    <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">

        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>@yield('title')</h6> <a href="/info" class="badge badge-sm bg-gradient-warning">Kembali </a>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <form method="post" action="/info/{{ $berita->id }}" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">user </label>
                                    <input type="text" class="form-control" name="user" value="{{$berita->user}}">

                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Judul </label>
                                    <input type="text" class="form-control" name="user" value="{{$berita->judul}}">

                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">tanggal</label>
                                    <input type="date" class="form-control" id="" name="tanggal" value="{{$berita->tanggal}}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Isi</label>
                                    <input type="text" class="form-control" id="isi" name="isi" value="{{$berita->isi}}">
                                </div>


                                <div class=" mb-3">
                                    <label for="exampleInputPassword1" class="form-label">foto</label>
                                    <input type="file" class="form-control" id="foto" name="foto" value="{{url('berita').'/'.$berita->foto}}"></input>
                                </div>


                                <button type="submit" class="btn btn-primary">Submit</button>
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