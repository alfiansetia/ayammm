<?php

namespace App\Http\Controllers;

use App\Models\Ayam;
use App\Models\Berita;
use App\Models\Kategori;
use App\Models\Keranjang;
use App\Models\Kontak;
use Illuminate\Support\Facades\Session;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class frontendController extends Controller
{


    public function detail(string $id)
    {
        $kontak = Kontak::all();
        $kategori = kategori::all();
        $post = ayam::all();
        $post = ayam::where('kategori_id', $id)->get();
        $getCartList = $this->getCartList();
        $getCartNumber = $this->getCartNumber();
        $data = keranjang::with(['ayam'])->orderBy('created_at')->get();
        $users = keranjang::with(['User'])->orderBy('created_at')->get();
        if (Auth::check()) {
            $query = keranjang::where('users_id', Auth::user()->id)->get();
            return view('detail', compact('query', 'data', 'users', 'getCartList', 'getCartNumber', 'kontak', 'post', 'kategori', 'berita'))->with('post', $post);
        } else {
            return view('detail', compact('data', 'users', 'getCartList', 'getCartNumber', 'kontak', 'post', 'kategori', 'berita'))->with('post', $post);
        }
        return view('detail', compact('data', 'users', 'getCartList', 'getCartNumber', 'kontak', 'post', 'kategori', 'berita'))->with('post', $post);
    }

    public function showKeranjang()
    {

        $berita = berita::all();
        $post = ayam::orderBy('id', 'desc')->paginate(8);
        $data = keranjang::with(['ayam'])->orderBy('created_at')->get();
        $users = keranjang::with(['User'])->orderBy('created_at')->get();
        return view('keranjang', compact('data', 'users', 'post', 'berita'));
    }

    public function exportlaporan()
    {
        $kontak = kontak::all();
        $kategori = kategori::all();
        $ayam = ayam::with(['kategori'])->orderBy('created_at')->get();
        $data = keranjang::with(['ayam'])->orderBy('created_at')->get();
        $query = keranjang::where('user_id', Auth::user()->id)->get();
        $pdf = PDF::loadview('laporan_pdf', [
            'data' => $data,
            'kontak' => $kontak,
            'query' => $query,
            'kategori' => $kategori,
            'ayam' => $ayam,
        ]);
        //mendownload laporan.pdf

        return $pdf->download('laporan.pdf');
    }


    public function cartsalah($id)
    {
        $Pagination = ayam::orderBy('id', 'desc')->paginate(8);
        $Post = ayam::where('kategori_id', $id)->get();
        return view('cart', compact('Pagination'))->with('Post', $Post);
    }
    public function create()
    {
        return view('layouts/berita/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // session flasj_data
        Session::flash('user', $request->user);
        Session::flash('tanggal', $request->tanggal);
        Session::flash('isi', $request->isi);

        // validasi
        $request->validate(
            [
                'user' => 'required',
                'tanggal' => 'required',
                'isi' => 'required',

                'foto' => 'required|mimes:jpeg,jpg,png,gif',
                'foto.mimes' => 'Foto Hanya Boleh ber extensi Jpg,jpeg,Png,Gif'
            ],
            // merubah tanggal valdasi menjadi bahasa indonesia
            [
                'user.required' => 'Use Wajib di isi',
                'tanggal.required' => 'Tanggal Wajib di isi',
                'isi.required' => 'Isi  Wajib di isi',
                'foto.required' => 'foto  Wajib di isi'

            ]
        );
        // input file gambar
        $foto_file = $request->file('foto');
        $foto_extensi = $foto_file->extension();
        $foto_nama = date('ymdhis') . "." . $foto_extensi;
        $foto_file->move(public_path('foto'), $foto_nama);

        // data aray yang akan dimasukan ke data base
        $data = [
            'user' => $request->input('user'),
            'tanggal' => $request->input('tanggal'),
            'isi' => $request->input('isi'),
            'foto' => $foto_nama,

        ];
        // masukan data
        berita::create($data);
        return redirect('berita')->with('success', 'berhasil memasukan data');
    }



    public function destroy(string $id)
    {
        $data =  Berita::where('id', $id)->first();
        File::delete(public_path('foto') . '/' . $data->foto);
        // masukan data
        berita::where('id', $id)->delete();
        return redirect('berita')->with('success', 'berhasil hapus data');
    }
    public function delete($id)
    {
        $berita = Berita::find($id);
        $berita->delete();
        return redirect('berita')->with('success', 'berhasil update data');
    }


    public function getCartNumber()
    {
        if (Auth::user()) {
            $d = DB::select("SELECT sum(qty) _qty FROM keranjang WHERE 1 and users_id=" . Auth::user()->id);
            return $d[0]->_qty;
        } else {
            return "";
        }
    }


    public function getCartList()
    {
        if (Auth::user()) {
            $d = DB::select("SELECT p.*,c.qty cart_qty FROM keranjang c INNER JOIN posts p on p.id=c.ayam_id
            WHERE c.status=1 and c.users_id=" . Auth::user()->id);
            $str = '';
            $total = 0;
            foreach ($d as $v) {
                $str .= '<div class="offcanvas-header border-btm-black">
                <h5 class="cart-drawer-heading text_16">Your Cart (04)</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body p-0">
                <div class="cart-content-area d-flex justify-content-between flex-column">
                    <div class="minicart-loop custom-scrollbar">
                        <!-- minicart item -->
                        <div class="minicart-item d-flex">
                            <div class="mini-img-wrapper">
                                <img class="mini-img" src="' . asset('frontend_template/landingPage') . '/assets/img/products/furniture/1.jpg" alt="img">
                            </div>
                            <div class="product-info">
                                <h2 class="product-title"><a href="#">' . $v->jenis_ayam_id . '</a></h2>
                                <p class="product-vendor">XS / Dove Gray</p>
                                <div class="misc d-flex align-items-end justify-content-between">
                                    <div class="quantity d-flex align-items-center justify-content-between">
                                        <button class="qty-btn dec-qty"><img src="' . asset('frontend_template/landingPage') . '/assets/img/icon/minus.svg" alt="minus"></button>
                                        <input class="qty-input" type="number" name="qty" value="1" min="0">
                                        <button class="qty-btn inc-qty"><img src="' . asset('frontend_template/landingPage') . '/assets/img/icon/plus.svg" alt="plus"></button>
                                    </div>
                                    <div class="product-remove-area d-flex flex-column align-items-end">
                                        <div class="product-price">200</div>
                                        <a href="#" class="product-remove">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                    </div>
                    <div class="minicart-footer">
                        <div class="minicart-calc-area">
                            <div class="minicart-calc d-flex align-items-center justify-content-between">
                                <span class="cart-subtotal mb-0">Subtotal</span>
                                <span class="cart-subprice">$1548.00</span>
                            </div>
                            <p class="cart-taxes text-center my-4">Taxes and shipping will be calculated at checkout.
                            </p>
                        </div>
                        <div class="minicart-btn-area d-flex align-items-center justify-content-between">
                            <a href="cart.html" class="minicart-btn btn-secondary">View Cart</a>
                            <a href="checkout.html" class="minicart-btn btn-primary">Checkout</a>
                        </div>
                    </div>
                </div>
                <div class="cart-empty-area text-center py-5 d-none">
                    <div class="cart-empty-icon pb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M16 16s-1.5-2-4-2-4 2-4 2"></path>
                            <line x1="9" y1="9" x2="9.01" y2="9"></line>
                            <line x1="15" y1="9" x2="15.01" y2="9"></line>
                        </svg>
                    </div>
                    <p class="cart-empty">You have no items in your cart</p>
                </div>
            </div>';
                // $total += ($v->current_price) * $v->cart_qty;
            }
            // return ["str" => $str, "total" => $total];
        } else {
            // return ["str" => '', "total" => ''];
        }
    }
    public function add_to_cart($id)
    {
        $produk = ayam::findOrFail($id);
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "jenis_ayam_id" => $produk->jenis_ayam_id,
                "kode_ayam" => $produk->kode_ayam,
                "berat" => $produk->berat,
                "status" => $produk->status,
                "usia" => $produk->usia,
                "kategori_id" => $produk->kategori_id,
                "cover" => $produk->cover,
                "quantity" => 1
            ];
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Produk berhasil ditambahkan');
    }
    public function cart()
    {
        return view('cart');
    }

    public function update(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart successfully updated!');
        }
    }
    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('welcome');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('welcome', $cart);
            }
            session()->flash('success', 'Produk berhasil dihapus');
        }
    }
    public function tes()
    {
        $users = keranjang::with(['User'])->orderBy('created_at')->get();
        $data = keranjang::with(['ayam'])->orderBy('created_at')->get();
        return view('tes', compact('users', 'data'));
    }
}
