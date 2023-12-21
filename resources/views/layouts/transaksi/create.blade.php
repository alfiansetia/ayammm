@extends('layouts_backend.master')

@section('title','Tambah Data Pemesan')
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
                        <h6>@yield('title')</h6> <a href="/trans" class="badge badge-sm bg-gradient-warning">Kembali </a>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <div class="col-md-5">
                                <h3>Tambah Data</h3>
                                <form action="/post" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <input type="text" name="nama" class="form-control m-2" placeholder="Nama Pemesan">
                                    <input type="textarea" name="alamat" class="form-control m-2" placeholder="Alamat">
                                    <input type="number" name="no_telp" class="form-control m-2" placeholder="No Telepon">

                                    <select class="form-control select m-2 text-center" name="status" id="">
                                        <option disable value="">--Pilih Status Ayam--</option>
                                        <option value="Ready Stok">Ready Stok</option>
                                        <option value="Sold Out">Sold Out</option>
                                    </select>

                                    <input type="number" name="h_jual" class="form-control m-2" placeholder="Harga ">
                                    <input type="text" name="kode_ayam" class="form-control m-2" placeholder="Kode Ayam ">



                                    <label class="m-2">Cover Image</label>
                                    <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="cover">

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