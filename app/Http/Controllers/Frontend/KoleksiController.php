<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Ayam;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KoleksiController extends Controller
{

    public function index()
    {
        $kategori = Kategori::all();
        $ayam = Ayam::with('jenis')->orderBy('id', 'desc')->paginate(9);
        return view('frontend.koleksi', compact('ayam', 'kategori'));
    }

    public function show(Ayam $ayam)
    {
        $data_ayam_carosel = Ayam::orderBy('id', 'desc')->paginate(8);
        $data = $ayam->load('kategori', 'jenis', 'images');
        return view('frontend.detail', compact('data', 'data_ayam_carosel'));
    }
}
