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

        // 
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaksi $tran)
    {
        $message = Message::where('link', route('trans.show', $tran->id))
            ->where('is_read', 'no')->first();
        if ($message) {
            $message->update([
                'is_read' => 'yes',
            ]);
        }
        return response()->json($tran->load('details'));
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
