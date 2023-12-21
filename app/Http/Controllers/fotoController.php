<?php

namespace App\Http\Controllers;

use App\Models\fotoModel;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

class fotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $products = Product::all();
        return view('welcome', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $foto = fotoModel::all();
        return view('layouts/foto/create', compact('foto'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {  // session flasj_data

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
    public function destroy(string $id)
    {
        $data =  fotoModel::where('id', $id)->first();
        File::delete(public_path('foto') . '/' . $data->foto);

        // masukan data
        fotoModel::where('id', $id)->delete();
        return redirect('/images')->with('success', 'berhasil hapus data');
    }
    public function delete($id)
    {
        $data =     fotoModel::find($id);
        $data->delete();
        return redirect('/images')->with('success', 'berhasil hapus data');
    }
}
