<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Ayam;
use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{

    public function index()

    {
        // $postGaleri = Ayam::orderBy('id', 'asc')->paginate(8);
        $berita = Berita::orderBy('id', 'desc')->paginate(3);
        return view('frontend.berita', compact('berita'));
    }


    public function show(Request $request, Berita $berita)
    {
        $list_berita = berita::orderBy('id', 'desc')->paginate(3);
        $data = $berita;
        return view('frontend.berita_detail', compact('data', 'list_berita'));
    }
}
