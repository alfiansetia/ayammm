<?php

namespace App\Http\Controllers;

use App\Models\jenis_ayam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Jenis_ayam_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = jenis_ayam::orderBy('jenis_ayam', 'desc')->paginate(10);
        return view('layouts/jenis_ayam/index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $data = jenis_ayam::all();
        return view('layouts/jenis_ayam/create', compact('data'));
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
        jenis_ayam::create($data);
        return redirect('jenis_ayam')->with('success', 'berhasil memasukan data');
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
        //
    }
}
