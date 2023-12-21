@extends('layouts/master')

@section('content')

<a href="/ayam" class="btn btn-secondary">kembali</a>

<form method="post" action="/ayam/{{ $ayam->id }}" enctype="multipart/form-data">
    @csrf
    @method('put')


    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Jenis Ayam</label>
        <input type="text" class="form-control" id="jenis_ayam" name="jenis_ayam" value="{{$ayam->jenis_ayam}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">kode ayam</label>
        <input type="text" class="form-control" id="kode_ayam" name="kode_ayam" value="{{$ayam->kode_ayam}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">kode ayam</label>
        <input type="text" class="form-control" id="berat" name="berat" value="{{$ayam->berat}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Stok</label>
        <input type="text" class="form-control" id="stok" name="stok" value="{{$ayam->stok}}">
    </div>

    @if($ayam->foto)
    <div class="mb-3">
        <!-- mengambil item gambar yang terdapat pada direktori foto -->
        <img style="max-width:150px ; max-height:150px" src="{{url('foto').'/'.$ayam->foto}}">
    </div>

    @endif
    <div class=" mb-3">
        <label for="exampleInputPassword1" class="form-label">Gambar</label>
        <input type="file" class="form-control" id="foto" name="foto"></input>
    </div>

    <button type="submit" class="btn btn-primary">update </button>
</form>

@endsection