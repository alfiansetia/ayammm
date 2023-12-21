@extends('layouts_backend.master')

@section('title','Client')
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
                        <h6>@yield('title')</h6> <a href="/client" class="badge badge-sm bg-gradient-primary">Kembali</a>
                    </div>
                    <br>

                    <div class="container">
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="row">
                                <div class="col-9">
                                    <span>Nama : {{$client->nama}}</span>
                                </div>
                                <div class="">
                                    <span>komntar :<b> {{$client->komen}} </b></span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">

                <div>
                    <img style="max-width:500px; max-height:500px" src="{{url ('foto').'/'.$client->foto}}">
                </div>
            </div>

        </div>
    </div>
</div>
<script>

</script>
@endsection