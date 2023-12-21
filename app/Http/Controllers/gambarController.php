<?php

namespace App\Http\Controllers;

use App\Models\ayam;
use App\Models\Image;
use App\Models\kategori;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class gambarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ayam = ayam::all();


        return view('layouts/foto/index')->with('ayam', $ayam);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = kategori::all();
        $ayam = ayam::all();
        return view('layouts/foto/create', compact('kategori', 'ayam'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile("cover")) {
            $file = $request->file("cover");
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(\public_path("cover/"), $imageName);

            $ayam = new ayam([
                "jenis_ayam" => $request->jenis_ayam,
                "kode_ayam" => $request->kode_ayam,
                "berat" => $request->berat,
                "status" => $request->status,
                "usia" => $request->usia,
                "kategori_id" => $request->kategori_id,
                "deskripsi" => $request->deskripsi,
                "cover" => $imageName,
            ]);
            $ayam->save();
        }

        if ($request->hasFile("images")) {
            $files = $request->file("images");
            foreach ($files as $file) {
                $imageName = time() . '_' . $file->getClientOriginalName();
                $request['ayam_id'] = $ayam->id;
                $request['image'] = $imageName;
                $file->move(\public_path("/images"), $imageName);
                Image::create($request->all());
            }
        }

        return redirect("/gambar");
    }

    public function show(string $id)
    {

        $ayam = ayam::where('id', $id)->first();
        return view('layouts/foto/show')->with('ayam', $ayam);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ayam = ayam::findOrFail($id);
        return view('layouts/foto/edit')->with('ayam', $ayam);
    }

    /**
     * Update the specified resource in storage.
     */
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
            "title" => $request->title,
            "author" => $request->author,
            "body" => $request->body,
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

        return redirect("/gambar");
    }

    public function destroy($id)
    {
        $ayam = ayam::findOrFail($id);

        if (File::exists("cover/" . $ayam->cover)) {
            File::delete("cover/" . $ayam->cover);
        }
        $images = Image::where("post_id", $ayam->id)->get();
        foreach ($images as $image) {
            if (File::exists("images/" . $image->image)) {
                File::delete("images/" . $image->image);
            }
        }
        $ayam->delete();
        return back();
    }

    public function deleteimage($id)
    {
        $images = Image::findOrFail($id);
        if (File::exists("images/" . $images->image)) {
            File::delete("images/" . $images->image);
        }

        Image::find($id)->delete();
        return back();
    }

    public function deletecover($id)
    {
        $cover = ayam::findOrFail($id)->cover;
        if (File::exists("cover/" . $cover)) {
            File::delete("cover/" . $cover);
        }
        return back();
    }
}
