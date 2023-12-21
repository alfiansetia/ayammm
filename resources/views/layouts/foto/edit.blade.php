@extends('layouts_backend.master')
@include('komponen/pesan')

@section('content')
<div class="container-fluid">
    <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('http://127.0.0.1:8000/backend_template/assets/img/curved-images/2.jpg'); background-position-y: 50%;">
        <span class="mask bg-gradient-primary opacity-6"></span>
    </div>
    <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">

        <div class="row">
            @section('title','gambar')
            <div class="row">
                <div class="col-8">
                    <div class="col-lg-3">
                        <p>Cover:</p>
                        <form action="/deletecover/{{ $posts->id }}" method="post">
                            <button class="btn text-danger">X</button>
                            @csrf
                            @method('delete')
                        </form>
                        <img src="/cover/{{ $posts->cover }}" class="img-responsive" style="max-height: 500px; max-width: 500px;" alt="" srcset="">
                        <br>
                    </div>
                </div>
                <div class="col-4">

                    @if (count($posts->images)>0)
                    <p>Images:</p>
                    @foreach ($posts->images as $img)
                    <form action="/deleteimage/{{ $img->id }}" method="post">
                        <button class="btn text-danger">X</button>
                        @csrf
                        @method('delete')
                    </form>
                    <div>
                        <img src="/images/{{ $img->image }}" class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                    </div>
                    @endforeach
                    @endif

                </div>
            </div>
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>@yield('title')</h6> <a href="/ayam" class="badge badge-sm bg-gradient-warning">Kembali </a>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <form action="/update/{{ $posts->id }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method("put")
                                <input type="text" name="jenis_ayam" class="form-control m-2" placeholder="title" value="{{ $posts->jenis_ayam }}">
                                <input type="text" name="kode_ayam" class="form-control m-2" placeholder="kode_ayam" value="{{ $posts->kode_ayam }}">
                                <input type="text" name="berat" class="form-control m-2" placeholder="berat" value="{{ $posts->berat }}">
                                <input type="text" name="status" class="form-control m-2" placeholder="status" value="{{ $posts->status }}">
                                <input type="text" name="usia" class="form-control m-2" placeholder="usia" value="{{ $posts->usia }}">
                                <input type="text" name="kategori_id" class="form-control m-2" placeholder="kategori_id" value="{{ $posts->kategori_id }}">
                                <Textarea name="deskripsi" cols="20" rows="4" class="form-control m-2" placeholder="deskripsi">{{ $posts->deskripsi }}</Textarea>
                                <label class="m-2">Cover Image</label>
                                <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="cover">

                                <label class="m-2">Images</label>
                                <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="images[]" multiple>

                                <button type="submit" class="btn btn-danger mt-3 ">Submit</button>
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