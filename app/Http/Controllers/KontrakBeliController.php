<?php

namespace App\Http\Controllers;

use App\Models\KontrakBeli;
use App\Models\Supplier;
use Illuminate\Http\Request;

class KontrakBeliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $kontrakbelis = KontrakBeli::all();
        return view("transaksi.kontrak.beli.index")->with('kontrakbelis', $kontrakbelis);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $suppliers = Supplier::all();
        return view('transaksi.kontrak.beli.create')->with('suppliers',$suppliers);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $totalharga = $request->mt * $request->harga;
        $tanggal = \Carbon\Carbon::parse($request->tanggal);
        KontrakBeli::insert([
            'tanggal' => $tanggal,
            'no_kontrak' => $request->no_kontrak,
            'id_supplier' => $request->id_supplier,
            'mt' => $request->mt,
            'harga' => $request->harga,
            'total_harga' => $totalharga,
            'stock' => $request->mt
        ]);

        return redirect('/kontrakbeli');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $kontrakbeli = KontrakBeli::findOrFail($id);
        return view('transaksi.kontrak.beli.show')->with('kontrakbeli',$kontrakbeli);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $kontrakbeli = KontrakBeli::findOrFail($id);
        $suppliers = Supplier::all();
        return view('transaksi.kontrak.beli.edit')->with('kontrakbeli',$kontrakbeli)->with('suppliers',$suppliers);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        return redirect('/kontrakbeli');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        KontrakBeli::findOrfail($id)->delete();

        return redirect('/kontrakbeli');
    }
}
