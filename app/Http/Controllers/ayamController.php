<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ayam;
use App\Models\kategori;
use App\Models\Post;
use App\Models\Image;
use App\Models\jenis_ayam;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Expr\PostDec;

class ayamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {


        if ($request->has('search')) {
            $data = ayam::where('jenis_ayam_id', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $data = kategori::all();

            $ayam = ayam::all();
            $data = Post::all();
            $data = ayam::with('kategori', 'jenis_ayam')->paginate(2);
            $data = ayam::orderBy('id', 'desc')->paginate(5);
        }

        return view("layouts/ayam/index", compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jenis_ayam = jenis_ayam::all();
        $kategori = kategori::all();
        $ayam = ayam::all();
        // Kode Otomatis
        // $tanggal = Carbon::now()->format('Y-m-d');
        $now = Carbon::now();
        $thnbulan = $now->year . $now->month;
        $cek = ayam::count();
        if ($cek == 0) {
            $urut = 100001;
            $nomor = 'KD' . $thnbulan . $urut;
        } else {
            $ambildata = ayam::all()->last();
            $urut = (int)substr($ambildata->kode_ayam, -8) + 1;
            $nomor = 'KD' . $thnbulan . $urut;
        }
        return view('layouts/ayam/create', compact('kategori', 'ayam', 'jenis_ayam', 'nomor'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $now = Carbon::now();
        $thnbulan = $now->year . $now->month;
        $cek = ayam::count();
        if ($cek == 0) {
            $urut = 100001;
            $nomor = 'KD' . $thnbulan . $urut;
            // dd($nomor);
        } else {
            $ambildata = ayam::all()->last();
            $urut = (int)substr($ambildata->kode_ayam, -8) + 1;
            $nomor = 'KD' . $thnbulan . $urut;
        }
        if ($request->hasFile("cover")) {
            $file = $request->file("cover");
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(\public_path("cover/"), $imageName);

            $ayam = new ayam([
                "jenis_ayam_id" => $request->jenis_ayam_id,
                "kode_ayam" => $nomor,
                "berat" => $request->berat,
                "status" => $request->status,
                "usia" => $request->usia,
                "kategori_id" => $request->kategori_id,
                "deskripsi" => $request->deskripsi,
                "cover" => $imageName,
            ]);
            $ayam->save();
        };

        if ($request->hasFile("images")) {
            $files = $request->file("images");
            foreach ($files as $file) {
                $imageName = time() . '_' . $file->getClientOriginalName();
                $request['ayam_id'] = $ayam->id;
                $request['image'] = $imageName;
                $file->move(\public_path("/images"), $imageName);
                Image::create($request->all());
            }
        };

        return redirect("/ayam")->with('success', 'berhasil memasukan data');;
    }

    public function detail(string $id)
    {
        $data = ayam::where('id', $id)->first();
        return view('layouts/ayam/show')->with('data', $data);

        // $ayam = ayam::find($id);
        // return view('layouts/ayam/show', compact('ayam'));
    }

    public function show(string $id)
    {
        $ayam = ayam::where('id', $id)->first();
        return view('layouts/ayam/show')->with('ayam', $ayam);
    }

    public function edit(string $id)
    {
        $kategori = kategori::all();
        $jenis_ayam = jenis_ayam::all();
        $ayam = ayam::where('id', $id)->get();
        $posts = ayam::where('id', $id)->get();

        return view('layouts/ayam/edit', compact('posts', 'ayam', 'kategori', 'jenis_ayam'))->with('posts', $posts, 'ayam', $ayam, 'kategori', $kategori, 'jenis_ayam', $jenis_ayam);
    }


    public function update(Request $request, string $id)
    {
        $posts = ayam::findOrFail($id);
        if ($request->hasFile("cover")) {
            if (File::exists("cover/" . $posts->cover)) {
                File::delete("cover/" . $posts->cover);
            }
            $file = $request->file("cover");
            $posts->cover = time() . "_" . $file->getClientOriginalName();
            $file->move(\public_path("/cover"), $posts->cover);
            $request['cover'] = $posts->cover;
        }

        $posts->update([
            "jenis_ayam_id" => $request->jenis_ayam_id,
            "kode_ayam" => $request->kode_ayam,
            "berat" => $request->berat,
            "cover" => $posts->cover,
            "status" => $request->status,
            "usia" => $request->usia,
            "kategori_id" => $request->kategori_id,
            "deskripsi" => $request->deskripsi,
            "cover" => $posts->cover,
        ]);

        if ($request->hasFile("images")) {
            $files = $request->file("images");
            foreach ($files as $file) {
                $imageName = time() . '_' . $file->getClientOriginalName();
                $request["ayam_id"] = $id;
                $request["image"] = $imageName;
                $file->move(\public_path("images"), $imageName);
                Image::create($request->all());
            }
        }

        return redirect("/ayam");
    }


    public function destroy($id)
    {
        $ayam = ayam::findOrFail($id);

        if (File::exists("cover/" . $ayam->cover)) {
            File::delete("cover/" . $ayam->cover);
        }
        $images = Image::where("ayam_id", $ayam->id)->get();
        foreach ($images as $image) {
            if (File::exists("images/" . $image->image)) {
                File::delete("images/" . $image->image);
            }
        }
        $ayam->delete();
        return back()->with('success', 'berhasil hapus data');
    }

    public function deleteimage($id)
    {
        $ayam = Image::findOrFail($id);
        if (File::exists("images/" . $ayam->image)) {
            File::delete("images/" . $ayam->image);
        }

        Image::find($id)->delete();
        return back()->with('success', 'berhasil hapus data');
    }

    public function deletecover($id)
    {
        $posts = ayam::findOrFail($id)->cover;
        if (File::exists("cover/" . $posts)) {
            File::delete("cover/" . $posts);
        }
        return back()->with('success', 'berhasil hapus data');
    }
}
