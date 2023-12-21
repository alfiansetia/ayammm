<?php

namespace App\Http\Controllers;

use App\Models\background_model;
use App\Models\foto_model;
use App\Models\kontak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

class dashboard_kontak extends Controller
{


    public function index()
    {
        $kontak = kontak::all();
        return view("layouts/kontak/index", compact('kontak'));
    }



    public function create()
    {
        $kontak = kontak::all();

        return view('layouts/kontak/create', compact('kontak'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // session flasj_data
        Session::flash('no_telp', $request->no_telp);
        Session::flash('email', $request->email);
        Session::flash('facebook', $request->facebook);
        Session::flash('twiter', $request->twiter);
        Session::flash('instagram', $request->instagram);
        Session::flash('alamat', $request->alamat);
        // validasi
        $request->validate(
            [
                'no_telp' => 'required',
                'email' => 'required',
                'facebook' => 'required',
                'twiter' => 'required',
                'instagram' => 'required',
                'alamat' => 'required',

            ],
            // merubah email valdasi menjadi bahasa indonesia
            [
                'no_telp.required' => 'Nomor Induk Wajib di isi',
                'email.required' => 'Email Wajib di isi',
                'facebook.required' => 'facebok Induk Wajib di isi',
                'twiter.required' => 'twiter ayam Wajib di isi',
                'instagram.required' => 'instagram  Wajib di isi',
                'alamat.required' => 'alamat  Wajib di isi',



            ]
        );


        // data aray yang akan dimasukan ke data base
        $data = [
            'no_telp' => $request->input('no_telp'),
            'email' => $request->input('email'),
            'facebook' => $request->input('facebook'),
            'twiter' => $request->input('twiter'),
            'instagram' => $request->input('instagram'),
            'alamat' => $request->input('alamat'),


            // 'jabatan_id' => $request->input('jabatan_id'),
        ];
        // masukan data
        kontak::create($data);
        return redirect('kontak')->with('success', 'berhasil memasukan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $data = kontak::where('id', $id)->first();
        return view('layouts/kontak/show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kontak = kontak::all();
        $kontak = kontak::where('id', $id)->first();

        return view('layouts/kontak/edit', compact('kontak'))->with('kontak', $kontak);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // data aray yang akan dimasukan ke data base
        $data = [

            'no_telp' => $request->input('no_telp'),
            'email' => $request->input('email'),
            'facebook' => $request->input('facebook'),
            'twiter' => $request->input('twiter'),
            'instagram' => $request->input('instagram'),
            'alamat' => $request->input('alamat'),
        ];
        // masukan data
        kontak::where('id', $id)->update($data);
        return redirect('kontak')->with('success', 'berhasil update data');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data =  kontak::where('id', $id)->first();
        File::delete(public_path('foto') . '/' . $data->foto);

        // masukan data
        kontak::where('id', $id)->delete();
        return redirect('kontak')->with('success', 'berhasil hapus data');
    }
    public function delete($id)
    {
        $kontak =     kontak::find($id);
        $kontak->delete();
        return redirect('kontak')->with('success', 'berhasil update data');
    }
}
