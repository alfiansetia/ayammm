@extends('layouts_backend.master')

@section('title','Kontak')
@section('content')
<div class="container-fluid">
    <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('http://127.0.0.1:8000/backend_template/assets/img/curved-images/2.jpg'); background-position-y: 50%;">
        <span class="mask bg-gradient-primary opacity-6"></span>
    </div>
    <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">

        <div class="row">
            @include('komponen/pesan')
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>@yield('title')</h6> <a href="/kontak" class="badge badge-sm bg-gradient-warning">Kembali </a>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <form action="/kontak" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">no telp</label>
                                    <input class="form-control" type="text" id="example-text-input" name="no_telp">
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Email</label>
                                    <input class="form-control" type="text" id="example-text-input" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">facebook</label>
                                    <input class="form-control" type="text" id="example-text-input" name="facebook">
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">twiter</label>
                                    <input class="form-control" type="text" id="example-text-input" name="twiter">
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Instagram</label>
                                    <input class="form-control" type="text" id="example-text-input" name="instagram">
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">alamat</label>
                                    <input class="form-control" type="text" id="example-text-input" name="alamat">
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