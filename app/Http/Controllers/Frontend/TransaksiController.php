<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\DetailTransaksi;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TransaksiController extends Controller
{

    public function index(Request $request)
    {
        // 
    }

    public function store(Request $request)
    {
        $user = User::with('keranjang')->withCount('keranjang')->find(auth()->id());
        if ($user->keranjang_count < 1) {
            return redirect()->back()->with('message', 'Keranjang Kosong!');
        }
        $total = 0;
        $trx = Transaksi::create([
            'user_id'   => $user->id,
            'tanggal'   => now(),
            'nomor'     => Str::random(10),
            'total'     => $total,
            'nama'      => $request->nama,
            'alamat'    => $request->alamat,
            'telp'      => $request->telp,
        ]);
        foreach ($user->keranjang as $key => $value) {
            DetailTransaksi::create([
                'trnsaksi_id'   => $trx->id,
                'ayam_id'       => $value->ayam_id,
                'qty'           => 1,
                'harga'         => 0,
            ]);
        }
        return redirect()->back()->with('message', 'Success Buat Pesanan !');
    }
}
