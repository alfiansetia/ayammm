@extends('layouts_backend.master')
@include('komponen/pesan')

@section('content')
<a href="/ayam" class="badge badge-sm bg-gradient-warning">Kembali </a>
<div class="container-fluid">
    <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('http://127.0.0.1:8000/backend_template/assets/img/curved-images/2.jpg'); background-position-y: 50%;">
        <span class="mask bg-gradient-primary opacity-6"></span>
    </div>

    <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">

        <div class="row">
            @section('title','Detail Ayam')
            <div class="col-mb-6">
                <div class="container">
                    <div class="card mb-3">
                        <img src="/cover/{{ $ayam->cover }}" class="card-img-top img-responsive" alt="...">

                        <div class="container">
                            <h4 class="text-center">Detail Foto</h4>
                            <div class="card-group">

                                @if (count($ayam->images)>0)
                                @foreach ($ayam->images as $img)
                                <div class="card ">

                                    <div class="gallery">
                                        <a href="/images/{{ $img->image }}" style="max-height:100px; max-width:100px">
                                            <img style="height:200px ;width:200px" src="/images/{{ $img->image }}" alt="{{ $ayam->title }}">
                                        </a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                @endforeach
                                @endif
                            </div>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title"> Jenis : {{ $ayam->jenis_ayam_id }}</h5>
                            <p class="card-text">Kode Ayam : {{ $ayam->kode_ayam }}</p>
                            <p class="card-text"><small class="text-muted"> Berat : {{ $ayam->berat }}</small></p>
                            <p class="card-text"><small class="text-muted">Usia : {{ $ayam->usia }}</small></p>
                            <p class="card-text"><small class="text-muted">Status : {{ $ayam->status }}</small></p>
                            <p class="card-text"><small class="text-muted">Kategori : {{ $ayam->kategori->jenis_ayam }}</small></p>
                            <p class="card-text"><small class="text-muted">Deskripsi : {{ $ayam->deskripsi }}</small></p>
                        </div>
                    </div>
                </div>
            </div>

            <style>
                div.gallery {
                    border: 1px solid #ccc;
                }

                div.gallery:hover {
                    border: 1px solid #777;
                }

                div.gallery img {
                    width: 100%;
                    height: auto;
                }

                div.desc {
                    padding: 15px;
                    text-align: center;
                }

                * {
                    box-sizing: border-box;
                }

                .responsive {
                    padding: 0 6px;
                    float: left;
                    width: 24.99999%;
                }

                @media only screen and (max-width: 700px) {
                    .responsive {
                        width: 49.99999%;
                        margin: 6px 0;
                    }
                }

                @media only screen and (max-width: 500px) {
                    .responsive {
                        width: 100%;
                    }
                }

                .clearfix:after {
                    content: "";
                    display: table;
                    clear: both;
                }
            </style>


        </div>

    </div>
</div>
</div>

@endsection