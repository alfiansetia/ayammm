<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bukti Pemesanan</title>
</head>

<body>

    <h3 style="text-align:center ;">Bukti Pemesanan</h3>
    <p style="text-align:center ;">Terima Kasih Atas Pesanan Yang Anda Buat
        <br>
        Untuk Selengkapnya silahkan Menghubungi Admin {{ $kontak->no_telp }}
    </p>

    <hr>
    <br>
    <h5 style="text-align:left " ;> No Transaksi : {{ $data->nomor }}</h5>
    <h5 style="text-align:left " ;> Tgl : {{ $data->tanggal }}</h5>
    <h5 style="text-align:left " ;> User : {{ $data->user->name ?? '-' }}</h5>
    <h5 style="text-align:left " ;> Dikirim kepada : {{ $data->nama }} ({{ $data->telp }})</h5>
    <h5 style="text-align:left " ;> Alamat : {{ $data->alamat }}</h5>
    <table border="1">
        <tr>
            <td style="text-align: center;"> Kode ayam</td>
            <td style="text-align: center;">Jenis</td>
            <td style="text-align: center;">Kategori</td>
            <td style="text-align: center;">Jumlah</td>
            <td style="text-align: center;">Harga</td>
            <td style="text-align: center;">Deskripsi</td>
        </tr>
        @foreach ($data->details as $item)
            <tr>
                <td style="text-align: center;">{{ $item->ayam->kode }}</td>
                <td style="text-align: center;">{{ $item->ayam->jenis->nama }}</td>
                <td style="text-align: center;">{{ $item->ayam->kategori->nama }}</td>
                <td style="text-align: center;"> {{ $item->qty }}</td>
                <td style="text-align: center;"> {{ $item->harga }}</td>
                <td style="text-align: center;">{{ $item->ayam->deskripsi }}</td>
            </tr>
        @endforeach


    </table>
</body>

</html>
