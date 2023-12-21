@extends('layouts_backend.master')
@include('komponen/pesan')

@section('content')
<a href="/gambar" class="badge badge-sm bg-gradient-warning">Kembali </a>
<div class="container-fluid">
    <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('http://127.0.0.1:8000/backend_template/assets/img/curved-images/2.jpg'); background-position-y: 50%;">
        <span class="mask bg-gradient-primary opacity-6"></span>
    </div>

    <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">

        <div class="row">
            @section('title','gambar')

            <div class="container">
                <div class="card mb-3">
                    <img src="/cover/{{ $posts->cover }}" class="card-img-top img-responsive" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> Jenis : {{ $posts->jenis_ayam }}</h5>
                        <p class="card-text">Kode Ayam : {{ $posts->kode_ayam }}</p>
                        <p class="card-text"><small class="text-muted"> Berat : {{ $posts->berat }}</small></p>
                        <p class="card-text"><small class="text-muted">Usia : {{ $posts->usia }}</small></p>
                        <p class="card-text"><small class="text-muted">Status : {{ $posts->status }}</small></p>
                        <p class="card-text"><small class="text-muted">Kategori : {{ $posts->kategori->jenis_ayam }}</small></p>
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

            <div class="container">
                <div class="card-group">
                    @if (count($posts->images)>0)
                    @foreach ($posts->images as $img)
                    <div class="card ">

                        <div class="gallery">
                            <a href="/images/{{ $img->image }}" style="max-height:1000px; max-width:1000px">
                                <img src="/images/{{ $img->image }}" alt="{{ $posts->title }}">
                            </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>



        </div>

    </div>
</div>
</div>

@endsection