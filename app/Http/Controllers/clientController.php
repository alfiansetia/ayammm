<?php

namespace App\Http\Controllers;

use App\Models\client;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class clientController extends Controller
{

    public function index()
    {
        $data = client::orderBy('id', 'desc')->paginate(10);
        return view('layouts/client/index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts/client/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // session flasj_data
        Session::flash('nama', $request->nama);
        Session::flash('komen', $request->komen);

        // validasi
        $request->validate(
            [
                'nama' => 'required',
                'komen' => 'required',


                'foto' => 'required|mimes:jpeg,jpg,png,gif',
                'foto.mimes' => 'Foto Hanya Boleh ber extensi Jpg,jpeg,Png,Gif'
            ],
            // merubah tanggal valdasi menjadi bahasa indonesia
            [
                'nama.required' => 'Nama Wajib di isi',
                'komen.required' => 'Komen  Wajib di isi',

            ]
        );
        // input file gambar
        $foto_file = $request->file('foto');
        $foto_extensi = $foto_file->extension();
        $foto_nama = date('ymdhis') . "." . $foto_extensi;
        $foto_file->move(public_path('foto'), $foto_nama);

        // data aray yang akan dimasukan ke data base
        $data = [
            'nama' => $request->input('nama'),
            'komen' => $request->input('komen'),

            'foto' => $foto_nama,
            // 'jabatan_id' => $request->input('jabatan_id'),
        ];
        // masukan data
        client::create($data);
        return redirect('client')->with('success', 'berhasil memasukan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $client = client::where('id', $id)->first();
        return view('layouts/client/show')->with('client', $client);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $client = client::where('id', $id)->first();

        return view('layouts/client/edit', compact('client'))->with('client', $client);
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $client = client::find($id);
        $client->update($request->except(['_token', 'submit']));
        // validasi
        $request->validate(
            [

                'nama' => 'required',
                'komen' => 'required',

            ],
            // merubah nama valdasi menjadi bahasa indonesia
            [

                'nama.required' => 'Nama  Wajib di isi',
                'komen.required' => 'komen  Wajib di isi',


            ]
        );
        // data aray yang akan dimasukan ke data base
        $data = [
            'nama' => $request->input('nama'),

            'komen' => $request->input('komen'),

        ];

        // cek kondisi jika ada file gambar ada maka lakukan validasi update foto
        if ($request->hasFile('foto')) {
            $request->validate(
                [
                    'foto' => 'mimes:jpeg,jpg,png,gif'
                ],
                [
                    'foto.mimes' => 'Foto Hanya Boleh ber extensi Jpg,jpeg,Png,Gif'
                ]
            );
            // input file gambar 
            $foto_file = $request->file('foto');
            $foto_extensi = $foto_file->extension();
            $foto_nama = date('ymdhis') . "." . $foto_extensi;
            $foto_file->move(public_path('foto'), $foto_nama);

            // hapus foto lama akan dihapus setelah diupdate
            $data_foto = client::where('id', $id)->first();
            File::delete(public_path('foto') . '/' . $data_foto->foto);

            // $data = [
            //     'foto' => $foto_nama
            // ];

            $data['foto'] = $foto_nama;
        }


        // masukan data
        client::where('id', $id)->update($data);
        return redirect('client')->with('success', 'berhasil update data');
    }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data =  client::where('id', $id)->first();


        // masukan data
        client::where('id', $id)->delete();
        return redirect('client')->with('success', 'berhasil hapus data');
    }
    public function delete($id)
    {
        $data =     client::find($id);
        $data->delete();
        return redirect('client')->with('success', 'berhasil hapus data');
    }
}
