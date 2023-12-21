@extends('layouts_backend.master')
@include('komponen/pesan')

@section('content')
<div class="container-fluid">
    <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('http://127.0.0.1:8000/backend_template/assets/img/curved-images/2.jpg'); background-position-y: 50%;">
        <span class="mask bg-gradient-primary opacity-6"></span>
    </div>
    <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">

        <div class="row">
            @section('title','Client')
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>@yield('title')</h6> <a href="/client" class="badge badge-sm bg-gradient-warning">Kembali </a>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <form action="/client/{{ $client->id }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nama</label>
                                    <input class="form-control" type="text" id="example-text-input" name="nama" value="{{$client->nama}}">
                                </div>
                                <div class="form-group">
                                    <label for="example-search-input" class="form-control-label">Komen</label>
                                    <input class="form-control" type="search" id="example-search-input" name="komen" value="{{$client->komen}}">
                                </div>
                                <div class="form-group">
                                    <label for="example-search-input" class="form-control-label">tanggal</label>
                                    <input class="form-control" type="date" id="example-search-input" name="tanggal" value="{{$client->tanggal}}">
                                </div>


                                <div class=" mb-3">
                                    <label for="exampleInputPassword1" class="form-label">foto</label>
                                    <input type="file" class="form-control" name="foto" value="{{url('foto').'/'.$client->foto}}"></input>
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