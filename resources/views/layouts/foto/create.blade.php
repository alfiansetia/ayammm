@extends('layouts_backend.master')

@section('title','Berita')
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
                        <h6>@yield('title')</h6> <a href="/gambar" class="badge badge-sm bg-gradient-warning">Kembali </a>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <div class="col-md-5">
                                <h3>Tambah Data</h3>
                                <form action="/post" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="text" name="jenis_ayam" class="form-control m-2" placeholder="Jenis Ayam">
                                    <input type="text" name="kode_ayam" class="form-control m-2" placeholder="Kode Ayam">
                                    <input type="text" name="berat" class="form-control m-2" placeholder="Berat Ayam">
                                    <input type="text" name="status" class="form-control m-2" placeholder="status Ayam">
                                    <input type="text" name="usia" class="form-control m-2" placeholder="usia Ayam">
                                    <select class="form-control select" name="kategori_id" id="" value="{{Session::get('kategori_id')}}">
                                        <option style="text-align:center ;" disable value="pilih Kategori">--Pilih Kategori--</option>
                                        @foreach ($kategori as $item)
                                        <option value="{{$item->id}}">{{$item->jenis_ayam}}</option>
                                        @endforeach
                                    </select>
                                    <Textarea name="deskripsi" cols="20" rows="4" class="form-control m-2" placeholder="Deskripsi"></Textarea>
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
</div>

@endsection