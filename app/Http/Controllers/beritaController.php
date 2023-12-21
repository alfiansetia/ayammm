<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Models\berita;
use App\Models\news;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class beritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = berita::orderBy('id', 'desc')->paginate(5);
        return view("layouts/berita/index", compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = berita::orderBy('id', 'desc')->paginate(10);
        return view('layouts/berita/create')->with('data', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // session flasj_data
        Session::flash('user', $request->user);
        Session::flash('judul', $request->judul);
        Session::flash('tanggal', $request->tanggal);
        Session::flash('isi', $request->isi);

        // validasi
        $request->validate(
            [
                'user' => 'required',
                'judul' => 'required',
                'tanggal' => 'required',
                'isi' => 'required',


                'foto' => 'required|mimes:jpeg,jpg,png,gif',
                'foto.mimes' => 'Foto Hanya Boleh ber extensi Jpg,jpeg,Png,Gif'
            ],
            // merubah tanggal valdasi menjadi bahasa indonesia
            [
                'user.required' => 'user Wajib di isi',
                'tanggal.required' => 'tanggal  Wajib di isi',
                'isi.required' => 'isi  Wajib di isi',

            ]
        );
        // input file gambar
        $foto_file = $request->file('foto');
        $foto_extensi = $foto_file->extension();
        $foto_nama = date('ymdhis') . "." . $foto_extensi;
        $foto_file->move(public_path('berita'), $foto_nama);

        // data aray yang akan dimasukan ke data base
        $data = [
            'user' => $request->input('user'),
            'judul' => $request->input('judul'),
            'tanggal' => $request->input('tanggal'),
            'isi' => $request->input('isi'),

            'foto' => $foto_nama,
            // 'jabatan_id' => $request->input('jabatan_id'),
        ];
        // masukan data
        berita::create($data);
        return redirect('info')->with('success', 'berhasil memasukan data');
    }


    // if ($request->hasFile("foto")) {
    //     $files = $request->file("foto");
    //     foreach ($files as $file) {
    //         $imageName = time() . '_' . $file->getClientOriginalName();

    //         $request['foto'] = $imageName;
    //         $file->move(\public_path("/images"), $imageName);

    //         $berita = new berita([
    //             "user" => $request->user,
    //             "tanggal" => $request->tanggal,
    //             "isi" => $request->isi,
    //             "foto" => $imageName,
    //         ]);
    //         $berita->save();
    //     }
    // }

    // return redirect("/berita");

    public function show(string $id)
    {

        $berita = berita::where('id', $id)->first();
        $data = berita::orderBy('id', 'desc')->get();
        return view('layouts/berita/show', compact('data', 'berita'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $berita = berita::where('id', $id)->first();

        return view('layouts/berita/edit', compact('berita'))->with('berita', $berita);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $berita = berita::find($id);
        $berita->update($request->except(['_token', 'submit']));
        // validasi
        $request->validate(
            [

                'user' => 'required',
                'judul' => 'required',
                'tanggal' => 'required',
                'isi' => 'required',

            ],
            // merubah nama valdasi menjadi bahasa indonesia
            [

                'user.required' => 'User  Wajib di isi',
                'judul.required' => 'Judul  Wajib di isi',
                'tanggal.required' => 'tanggal  Wajib di isi',
                'isi.required' => 'tanggal  Wajib di isi',


            ]
        );
        // data aray yang akan dimasukan ke data base
        $data = [
            'user' => $request->input('user'),
            'judul' => $request->input('judul'),
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
            $foto_file->move(public_path('berita'), $foto_nama);

            // hapus foto lama akan dihapus setelah diupdate
            $data_foto = berita::where('id', $id)->first();
            File::delete(public_path('berita') . '/' . $data_foto->foto);

            // $data = [
            //     'foto' => $foto_nama
            // ];

            $data['foto'] = $foto_nama;
        }


        // masukan data
        berita::where('id', $id)->update($data);
        return redirect('info')->with('success', 'berhasil update data');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data =  berita::where('id', $id)->first();
        File::delete(public_path('foto') . '/' . $data->foto);

        // masukan data
        berita::where('id', $id)->delete();
        return redirect('info')->with('success', 'berhasil hapus data');
    }
    public function delete($id)
    {
        $berita =     berita::find($id);
        $berita->delete();
        return redirect('info')->with('success', 'berhasil update data');
    }
}
