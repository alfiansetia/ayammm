<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\DetailTransaksi;
use App\Models\Keranjang;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KeranjangController extends Controller
{
    public function index()
    {
        return view('frontend.keranjang');
    }

    public function show(Keranjang $keranjang)
    {
        abort(404);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'ayam'  => 'required|integer|exists:ayam,id'
        ]);
        Keranjang::create([
            'user_id'   => auth()->id(),
            'ayam_id'   => $request->ayam,
        ]);
        return redirect()->back()->with('message', 'Sukses Tambah ke keranjang');
    }

    public function destroy(Keranjang $keranjang)
    {
        $keranjang->delete();
        return redirect()->back()->with('message', 'Sukses Hapus Item di keranjang');
    }
}
