@extends('layouts/master')

@section('content')

<div>
    <a href="/siswa" class="btn btn-secondary">Kembali</a>
    <h1>{{$data->nama}}</h1>
    <p>
        <b>nomor_induk</b> {{ $data->nomor_induk }}
    </p>
    <p>
        <b>Alamat</b> {{ $data->alamat }}
    </p>
</div>

@endsection