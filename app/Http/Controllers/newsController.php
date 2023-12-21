<?php

namespace App\Http\Controllers;

use App\Models\news;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

class newsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = news::all();
        return view("layouts/berita/index", compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     */
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
                'user.required' => 'Nomor Induk Wajib di isi',
                'tanggal.required' => 'kode ayam Wajib di isi',
                'isi.required' => 'Berat  Wajib di isi',
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
            // 'jabatan_id' => $request->input('jabatan_id'),
        ];
        // masukan data
        news::create($data);
        return redirect('news')->with('success', 'berhasil memasukan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $news = news::where('id', $id)->first();
        return view('layouts/berita/show')->with('news', $news);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $news = news::where('id', $id)->first();

        return view('layouts/berita/edit', compact('news'))->with('news', $news);
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $news = news::find($id);
        $news->update($request->except(['_token', 'submit']));
        // validasi
        $request->validate(
            [

                'user' => 'required',
                'tanggal' => 'required',
            ],
            // merubah nama valdasi menjadi bahasa indonesia
            [

                'user.required' => 'Nama Induk Wajib di isi',
                'tanggal.required' => 'Alamat Induk Wajib di isi'

            ]
        );
        // data aray yang akan dimasukan ke data base
        $data = [
            'user' => $request->input('user'),
            'tanggal' => $request->input('tanggal'),
            'isi' => $request->input('isi'),

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
            $data_foto = news::where('id', $id)->first();
            File::delete(public_path('foto') . '/' . $data_foto->foto);

            // $data = [
            //     'foto' => $foto_nama
            // ];

            $data['foto'] = $foto_nama;
        }


        // masukan data
        news::where('id', $id)->update($data);
        return redirect('news')->with('success', 'berhasil update data');
    }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data =  news::where('id', $id)->first();
        File::delete(public_path('foto') . '/' . $data->foto);

        // masukan data
        news::where('id', $id)->delete();
        return redirect('news')->with('success', 'berhasil hapus data');
    }
    public function delete($id)
    {
        $news =     news::find($id);
        $news->delete();
        return redirect('news')->with('success', 'berhasil update data');
    }
}
