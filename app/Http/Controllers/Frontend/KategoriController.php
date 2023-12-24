<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function show(Request $request, Kategori $kategori)
    {
        $data = $kategori;
        return view('frontend.kategori_detail', compact('data'));
    }
}
