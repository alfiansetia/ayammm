@extends('layouts/master')

@section('content')

<a href="/siswa" class="btn btn-secondary">kembali</a>
<form method="post" action="{{ '/siswa/'.$data->id }}" enctype="multipart/form-data">
    @csrf
    @method('put');
    <div class="mb-3">
        <h1>nomor induk : {{$data->nomor_induk}}</h1>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{$data->nama}}">
    </div>
    <div class=" mb-3">
        <label for="exampleInputPassword1" class="form-label">alamat</label>
        <textarea type="text" class="form-control" id="alamat" name="alamat">{{$data->nama}}</textarea>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">jabatan_id</label>
        <select class="form-control select" name="jabatan_id" id="">
            <option value="pilih Jabatan">{{$data->jabatan->jabatan}}</option>

            @foreach ($jabatan as $item)
            <option value="{{$item->id}}">{{"$item->jabatan"}}</option>
            @endforeach
        </select>
    </div>

    @if($data->foto)
    <div class="mb-3">
        <!-- mengambil data gambar yang terdapat pada direktori foto -->
        <img style="max-width:150px ; max-height:150px" src="{{url('foto').'/'.$data->foto}}">
    </div>

    @endif
    <div class=" mb-3">
        <label for="exampleInputPassword1" class="form-label">Gambar</label>
        <input type="file" class="form-control" id="foto" name="foto"></input>
    </div>

    <button type="submit" class="btn btn-primary">update </button>
</form>

@endsection