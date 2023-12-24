@extends('layouts_frontend.template')
@section('content')
    <main id="MainContent" class="content-for-layout">
        <div class="contact-page">
            <table class="table">
                <thead>
                    <th class="text-center">#</th>
                    <th>Tgl</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th class="text-center">Total</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Aksi</th>
                </thead>
                <tbody>
                    @foreach ($data as $key => $item)
                        <tr>
                            <td class="text-center">{{ $key + 1 }}</td>
                            <td>{{ $item->tanggal }}</td>
                            <td>{{ $item->nomor }}</td>
                            <td>{{ $item->nama }}</td>
                            <td class="text-center">{{ $item->total }}</td>
                            <td class="text-center">{{ $item->status }}</td>
                            <td class="text-center"><a class="btn btn-primary"
                                    href="{{ route('index.transaksi.show', $item->id) }}">Detail</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </main>
@endsection
<!-- breadcrumb end -->
