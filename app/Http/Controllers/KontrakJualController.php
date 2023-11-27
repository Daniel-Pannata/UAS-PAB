<?php

namespace App\Http\Controllers;

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
        return view('transaksi.kontrak.jual.create');
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
