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
}
