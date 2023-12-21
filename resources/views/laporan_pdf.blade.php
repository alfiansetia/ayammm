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
        Untuk Selengkapnya silahkan Menghubungi Admin
        @foreach ($kontak as $item)
        {{ $item->no_telp }}
        @endforeach
    </p>

    <!-- <img style="height:80px ; width:80px" src="cover/ayam_logo.png" alt="img"></td> -->
    <hr>
    <br>
    <h5 style="text-align:left " ;> User : {{ Auth::user()->name }}</h5>
    <table border="1">
        <tr>
            <td style="text-align: center;"> Kode ayam</td>
            <td style="text-align: center;">Kategori</td>
            <td style="text-align: center;">Jumlah Pembelian</td>
            <td style="text-align: center;">Deskripsi</td>

            <td style="text-align: center;">Foto</td>
        </tr>
        @foreach($query as $item)
        <tr>
            <td style="text-align: center;">{{$item->ayam->kode_ayam}}</td>
            <td style="text-align: center;">{{$item->ayam->jenis_ayam_id}}</td>
            <td style="text-align: center;"> {{ $item->qty }}</td>
            <td style="text-align: center;">{{$item->ayam->deskripsi}}</td>
            <!-- @if($item->$ayam)
            <td style="text-align: center;">{{ $item->kategori->implode('jenis_ayam') }}</td>
            @endif -->
            <td style="text-align: center;"> <img style="height:80px ; width:80px" src="cover/{{ $item->ayam->cover }}" alt="img"></td>

        </tr>
        @endforeach


    </table>
</body>

</html>