<?php

namespace App\Http\Controllers;

use App\Models\keranjang;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MyAccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function add_to_cart($ayam_id = null)
    {

        if ($ayam_id != null) {
            $user = auth()->user();
            $data = keranjang::updateOrCreate([
                'ayam_id' => $ayam_id,
                'user_id' => $user->id,
            ], [
                'ayam_id'   => $ayam_id,
                'qty'       => 1,
                'user_id'  => $user->id,
            ]);
        }
        return redirect()->back();
    }
    public function cart()
    {
        $data = keranjang::with(['ayam'])->orderBy('created_at')->get();
        $user = keranjang::with(['User'])->orderBy('created_at')->get();
        return view('cart', compact('data', 'user'));
    }
}
