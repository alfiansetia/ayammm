<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\ayam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class kategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = kategori::orderBy('jenis_ayam', 'desc')->paginate(10);
        return view('layouts/kategori/index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ayam = ayam::all();
        $kategori = kategori::all();
        return view('layouts/kategori/create', compact('kategori', 'ayam'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('jenis_ayam', $request->jenis_ayam);
        $request->validate(
            [
                'jenis_ayam' => 'required',

            ],
            [
                'jenis_ayam.required' => 'Jenis Ayam Wajib di isi',


            ]
        );
        $data = [
            'jenis_ayam' => $request->input('jenis_ayam'),


        ];
        // masukan data
        kategori::create($data);
        return redirect('kategori')->with('success', 'berhasil memasukan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        $data =  kategori::where('id', $id)->first();


        // masukan data
        kategori::where('id', $id)->delete();
        return redirect('kategori')->with('success', 'berhasil hapus data');
    }
    public function delete($id)
    {
        $data =     kategori::find($id);
        $data->delete();
        return redirect('kategori')->with('success', 'berhasil hapus data');
    }
}
