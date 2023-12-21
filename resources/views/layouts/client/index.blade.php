@extends('layouts_backend.master')

@section('title','Client')
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
                        <h6>@yield('title')</h6> <a href="/client/create" class="badge badge-sm bg-gradient-primary">Tambah Data</a>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Client</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Komen</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">tanggal</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">foto</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                    <tr>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{$item->nama}}</p>

                                        </td>

                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{$item->komen}}</p>

                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{$item->tanggal}}</p>

                                        </td>

                                        <td>
                                            <div>

                                                @if ($item->foto)
                                                <img style="width:50px; height:50px" src="{{url ('foto').'/'.$item->foto}}" />

                                                @endif
                                            </div>
                                        <td class="">
                                            <a href="{{ url ('/client/' . $item->id.'/show')}}" class="btn btn-warning font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                                <i class="fa fa-trash"> Detail</i>
                                            </a>
                                        </td>
                                        <td class="">
                                            <a href="{{ url ('/client/' . $item->id.'/edit')}}" class="btn btn-info font-weight-bold text-xs btn" data-toggle="tooltip" data-original-title="Edit user">
                                                Edit
                                            </a>
                                        </td>
                                        <td>
                                            <form onsubmit=" return confirm('Yakin menghapus data')" class="d-inline" action="{{'/client/'.$item->id}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                                            </form>
                                        </td>
                                        @endforeach
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection