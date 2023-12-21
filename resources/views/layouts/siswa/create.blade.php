@extends('layouts/master')

@section('content')

<form method="post" action="/siswa" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nomor Induk</label>
        <input type="text" class="form-control" id="nomor_induk" name="nomor_induk" value="{{Session::get('nomor_induk')}}">

    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{Session::get('nama')}}">
    </div>
    <div class=" mb-3">
        <label for="exampleInputPassword1" class="form-label">alamat</label>
        <textarea type="text" class="form-control" id="alamat" name="alamat">{{Session::get('alamat')}}</textarea>
    </div>

    <div class=" mb-3">
        <label for="exampleInputPassword1" class="form-label">Gambar</label>
        <input type="file" class="form-control" id="foto" name="foto"></input>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">jabatan_id</label>
        <select class="form-control select" name="jabatan_id" id="">
            <option disable value="pilih Jabatan">--Pilih Jabatan--</option>
            @foreach ($jabatan as $item)
            <option value="{{$item->id}}">{{"$item->jabatan"}}</option>
            @endforeach
        </select>
    </div>
    <div class=" mb-3">
        <label for="exampleInputPassword1" class="form-label">carolsel 1</label>
        <input type="file" class="form-control" id="carolsel1" name="carolsel1"></input>
    </div>
    <div class=" mb-3">
        <label for="exampleInputPassword1" class="form-label">carolsel 2</label>
        <input type="file" class="form-control" id="carolsel2" name="carolsel2"></input>
    </div>
    <div class=" mb-3">
        <label for="exampleInputPassword1" class="form-label">carolsel 3</label>
        <input type="file" class="form-control" id="carolsel3" name="carolsel3"></input>
    </div>
    <div class=" mb-3">
        <label for="exampleInputPassword1" class="form-label">background 1</label>
        <input type="file" class="form-control" id="bg1" name="bg1"></input>
    </div>
    <div class=" mb-3">
        <label for="exampleInputPassword1" class="form-label">background 2</label>
        <input type="file" class="form-control" id="bg2" name="bg2"></input>
    </div>
    <div class=" mb-3">
        <label for="exampleInputPassword1" class="form-label">background 3</label>
        <input type="file" class="form-control" id="bg3" name="bg3"></input>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection