<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Ayam;
use App\Models\DetailTransaksi;
use App\Models\Kategori;
use App\Models\Keranjang;
use App\Models\Kontak;
use App\Models\Message;
use App\Models\Transaksi;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class TransaksiController extends Controller
{

    public function index(Request $request)
    {
        $data = Transaksi::where('user_id', auth()->id())->with('details')->get();
        return  view('frontend.transaksi', compact('data'));
    }

    public function show(Transaksi $transaksi)
    {
        $data = $transaksi->load('details.ayam.jenis');
        return view('frontend.transaksi_detail', compact('data'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama'      => 'required|max:50',
            'telp'      => 'required|max:15',
            'alamat'    => 'required|max:250',
        ]);

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
                'transaksi_id'  => $trx->id,
                'ayam_id'       => $value->ayam_id,
                'qty'           => 1,
                'harga'         => 0,
            ]);
            $value->delete();
        }
        Message::create([
            'date'      => now(),
            'message'   => 'Pesanan baru, Nomor TRX : ' . $trx->nomor,
            'link'      => route('transaksi.show', $trx->id),
        ]);
        return redirect()->back()->with('message', 'Success Buat Pesanan !');
    }

    public function download(Transaksi $transaksi)
    {
        $kontak = Kontak::first();
        $data = $transaksi->load('details', 'user');
        $pdf = Pdf::loadview('laporan_pdf', [
            'data' => $data,
            'kontak' => $kontak,
        ]);
        $newName = 'trx_' . $transaksi->nomor . '.pdf';
        return $pdf->download($newName);
    }
}
