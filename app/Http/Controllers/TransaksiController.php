<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trans = Transaksi::orderBy('id', 'desc')->paginate(10);
        return view('layouts/transaksi/index')->with('trans', $trans);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Transaksi::orderBy('id', 'desc')->paginate(10);
        return view('layouts/transaksi/create')->with('data', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Session::flash('nama', $request->nama);
        $request->validate(
            [
                'nama' => 'required',

            ],
            [
                'nama.required' => 'Nama Wajib di isi',


            ]
        );
        if ($request->hasFile("cover")) {
            $file = $request->file("cover");
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(\public_path("cover/"), $imageName);

            $transaksi = [
                "nama" => $request->nama,

                "alamat" => $request->alamat,
                "no_telp" => $request->no_telp,
                "status" => $request->status,
                "h_jual" => $request->h_jual,
                "kode_ayam" => $request->kode_ayam,
                "cover" => $imageName,
            ];
        }

        // masukan data
        transaksi::create($transaksi);
        return redirect('trans')->with('success', 'berhasil memasukan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaksi $transaksi)
    {
        $message = Message::where('link', route('transaksi.show', $transaksi->id))
            ->where('is_read', 'no')->first();
        if ($message) {
            $message->update([
                'is_read' => 'yes',
            ]);
        }
        return response()->json($transaksi->load('details'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
