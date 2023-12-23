<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Ayam;
use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $ayam_populer = Ayam::orderBy('id', 'desc')->paginate(8);
        $berita = Berita::with('user')->orderBy('id', 'desc')->paginate(3);
        return view('frontend.index', compact('berita', 'ayam_populer'));
    }
}
