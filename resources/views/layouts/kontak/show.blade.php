@extends('layouts_backend.master')

@section('title','Detail Berita')
@section('content')
<div class="container-fluid">
    <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('http://127.0.0.1:8000/backend_template/assets/img/curved-images/2.jpg'); background-position-y: 50%;">
        <span class="mask bg-gradient-primary opacity-6"></span>
    </div>
    <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">

        <div class="row">
            <div class="col-8">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>@yield('title')</h6> <a href="/kontak" class="badge badge-sm bg-gradient-primary">Kembali</a>
                    </div>
                    <br>

                    <div class="container">
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="row">
                                <div class="col-9">
                                    <span>No Telepon : {{$data->no_telp}}</span>
                                </div>
                                <div class="col-9">
                                    <span>Facebook : <b>{{$data->facebook}} </b></span>
                                </div>
                                <div class="">
                                    <span>Twiter :<b> {{$data->twiter}} </b></span>
                                </div>
                                <div class="">
                                    <span>instagram :<b> {{$data->instagram}} </b></span>
                                </div>
                                <div class="">
                                    <span>Alamat :<b> {{$data->alamat}} </b></span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">

                <div>
                    <iframe src=" {{$data->peta}}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>

        </div>
    </div>
</div>
<script>

</script>
@endsection