@extends('layouts_backend.master')

@section('title', 'Data Pesanan')
@section('content')
    <div class="container-fluid">
        <div class="page-header min-height-300 border-radius-xl mt-4"
            style="background-image: url('http://127.0.0.1:8000/backend_template/assets/img/curved-images/2.jpg'); background-position-y: 50%;">
            <span class="mask bg-gradient-primary opacity-6"></span>
        </div>
        <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
            @include('komponen/pesan')
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>@yield('title')</h6> <a href="/trans/create"
                                class="badge badge-sm bg-gradient-primary">Tambah Data</a>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                id</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Nomor</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Nama Pemesan</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Alamat</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Status</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                                colspan="3" style="text-align:center ;">Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody style="text-align: center;">

                                        @foreach ($trans as $key => $item)
                                            <tr>
                                                <td scope="row">{{ $trans->firstItem() + $key }}</td>
                                                <td>{{ $item->nomor }}</td>
                                                <td> {{ $item->nama }}</td>
                                                <td>{{ $item->alamat }}</td>
                                                <td>{{ $item->status }}</td>
                                                <td><a href="{{ url('/trans/' . $item->id . '/edit') }}"
                                                        class="btn btn-outline-primary">Update</a></td>

                                                <td class="">
                                                    <a href="{{ url('/trans/' . $item->id . '/show') }}"
                                                        class="btn btn-outline-info" data-toggle="tooltip"
                                                        data-original-title="Edit user">
                                                        <i class="fa fa-trash"> Detail</i>
                                                    </a>
                                                </td>


                                                <td>
                                                    <form onsubmit=" return confirm('Yakin menghapus data')"
                                                        class="d-inline" action="{{ '/trans/' . $item->id }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-outline-danger" type="submit">Hapus</button>
                                                    </form>
                                                </td>

                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                {{ $trans->links() }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
