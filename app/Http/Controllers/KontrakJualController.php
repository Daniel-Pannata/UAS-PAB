<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\KontrakJual;
use Illuminate\Http\Request;

class KontrakJualController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $kontrakjuals = KontrakJual::all();

        return view("transaksi.kontrak.jual.index")->with('kontrakjuals', $kontrakjuals);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $customers = Customer::all();
        return view('transaksi.kontrak.jual.create')->with('customers',$customers);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $totalharga = $request->mt * $request->harga;
        $tanggal = \Carbon\Carbon::parse($request->tanggal);
        KontrakJual::insert([
            'tanggal' => $tanggal,
            'no_kontrak' => $request->no_kontrak,
            'id_customer' => $request->id_customer,
            'mt' => $request->mt,
            'harga' => $request->harga,
            'total_harga' => $totalharga,
            'stock' => $request->mt
        ]);

        return redirect('/kontrakjual');

    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $kontrakjual = KontrakJual::findOrFail($id);
        return view('transaksi.kontrak.jual.show')->with('kontrakjual',$kontrakjual);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $kontrakjual = KontrakJual::findOrFail($id);
        $customers = Customer::all();
        return view('transaksi.kontrak.jual.edit')->with('customers',$customers)->with('kontrakjual',$kontrakjual);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        return redirect('/kontrakjual');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        KontrakJual::findOrfail($id)->delete();

        return redirect('/kontrakjual');
    }
}
