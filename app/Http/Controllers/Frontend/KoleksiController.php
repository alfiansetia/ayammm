<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Ayam;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KoleksiController extends Controller
{

    public function koleksi()
    {
        $kategori = Kategori::all();
        $ayam = Ayam::with('jenis')->orderBy('id', 'desc')->paginate(9);
        return view('frontend.koleksi', compact('ayam', 'kategori'));
    }

    public function show(Ayam $ayam)
    {
        $data_ayam_carosel = Ayam::orderBy('id', 'desc')->paginate(8);
        $post = Ayam::with('images')->where('id', $id)->first();
        return view('detail', compact('post', 'data_ayam_carosel'));
    }
}
