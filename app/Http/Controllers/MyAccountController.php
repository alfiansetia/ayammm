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
    public function add_to_cart($id_ayam = null)
    {

        if ($id_ayam != null) {
            $user = auth()->user();
            $data = keranjang::updateOrCreate([
                'ayam_id' => $id_ayam,
                'users_id' => $user->id,
            ], [
                'ayam_id'   => $id_ayam,
                'qty'       => 1,
                'users_id'  => $user->id,
                'status'    => 1
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
