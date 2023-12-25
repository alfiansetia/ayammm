@extends('layouts_frontend.template')
@section('content')
    <main id="MainContent" class="content-for-layout">
        <div class="contact-page">
            <div class="container mt-3">
                <div class="row mt-2 mb-3">
                    <div class="col-lg-3">Tanggal Transaksi</div>
                    <div class="col-lg-6">: {{ $data->tanggal }}</div>
                </div>
                <div class="row mt-2 mb-3">
                    <div class="col-lg-3">Kode Transaksi</div>
                    <div class="col-lg-6">: {{ $data->nomor }}</div>
                </div>
                <div class="row mt-2 mb-3">
                    <div class="col-lg-3">Status Transaksi</div>
                    <div class="col-lg-6">
                        : {{ $data->status }}
                        @if ($data->status === 'pending')
                            <a class="btn btn-secondary"
                                href="https://api.whatsapp.com/send?phone={{ $kontak->no_telp }}&text=Halo, konfirmasi pesanan dengan nomot TRX : {{ $data->nomor }}">Chat
                                Admin</a>
                        @endif
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <th class="text-center">#</th>
                        <th>Kode Ayam</th>
                        <th>Jenis Ayam</th>
                        <th class="text-center">Qty</th>
                        <th class="text-center">Harga</th>
                    </thead>
                    <tbody>
                        @foreach ($data->details as $key => $item)
                            <tr>
                                <td class="text-center">{{ $key + 1 }}</td>
                                <td>{{ $item->ayam->kode }}</td>
                                <td>{{ $item->ayam->jenis->nama }}</td>
                                <td class="text-center">{{ $item->qty }}</td>
                                <td class="text-center">{{ $item->harga }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </main>
@endsection
<!-- breadcrumb end -->
