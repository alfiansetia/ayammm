@extends('layouts_backend.master')

@section('title','Data Ayam')
@section('content')
<div class="container-fluid">
    <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('http://127.0.0.1:8000/backend_template/assets/img/curved-images/2.jpg'); background-position-y: 50%;">
        <span class="mask bg-gradient-primary opacity-6"></span>
    </div>
    <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
        @include('komponen/pesan')
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>@yield('title')</h6> <a href="/ayam/create" class="badge badge-sm bg-gradient-primary">Tambah Data</a>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">id</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">jenis ayam</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kode Ayam</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Berat</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Usia Ayam</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kategori</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Deskripsi</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cover</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" colspan="3" style="text-align:center ;">Aksi</th>

                                    </tr>
                                </thead>
                                <tbody style="text-align: center;">

                                    @foreach ($data as $key => $ayam)
                                    <tr>
                                        <th scope="row">{{ $data->firstItem()+ $key }}</th>


                                        <td> {{$ayam->jenis_ayam_id}}</td>

                                        </td>
                                        <td>{{ $ayam->kode_ayam }}</td>
                                        <td>{{ $ayam->berat }}</td>
                                        <td>{{ $ayam->status }}</td>
                                        <td>{{ $ayam->usia }}</td>
                                        <td>
                                            @if ($ayam->kategori)
                                            {{ $ayam->kategori->jenis_ayam }}
                                            @endif
                                        </td>
                                        <td>{{ $ayam->deskripsi }}</td>
                                        <td><img src="cover/{{ $ayam->cover }}" class="img-responsive" style="max-height:100px; max-width:100px" alt="" srcset=""></td>
                                        <td><a href="{{ url ('/ayam/' . $ayam->id.'/edit')}}" class="btn btn-outline-primary">Update</a></td>

                                        <td class="">
                                            <a href="{{ url ('/ayam/' . $ayam->id.'/show')}}" class="btn btn-outline-info" data-toggle="tooltip" data-original-title="Edit user">
                                                <i class="fa fa-trash"> Detail</i>
                                            </a>
                                        </td>


                                        <td>
                                            <form onsubmit=" return confirm('Yakin menghapus data')" class="d-inline" action="{{'/ayam/'.$ayam->id}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-outline-danger" type="submit">Hapus</button>
                                            </form>
                                        </td>

                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {{ $data->links() }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection