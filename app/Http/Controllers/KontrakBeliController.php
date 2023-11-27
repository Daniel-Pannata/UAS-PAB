<?php

namespace App\Http\Controllers;

use App\Models\KontrakBeli;
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
        return view('transaksi.kontrak.beli.create');
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
