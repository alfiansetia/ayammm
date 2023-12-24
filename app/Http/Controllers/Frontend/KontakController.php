<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{

    public function index()
    {
        $data = Kontak::first();
        return view('frontend.kontak', compact('data'));
    }
}
