<?php

namespace App\Http\Controllers;

use App\Models\KontrakBeli;
use App\Models\KontrakJual;
use App\Models\MuatBongkar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MuatBongkarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $muatbongkars = MuatBongkar::all();
        return view("transaksi.muatbongkar.index")->with('muatbongkars', $muatbongkars);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $kontrakbelis = KontrakBeli::all();
        $kontrakjuals = KontrakJual::all();

        return view('transaksi.muatbongkar.create')->with('kontrakbelis',$kontrakbelis)->with('kontrakjuals',$kontrakjuals);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $susut = ($request->bongkar - $request->muat)*-1;
        $tanggalmuat = \Carbon\Carbon::parse($request->tanggalmuat);
        $tanggalbongkar = \Carbon\Carbon::parse($request->tanggalbongkar);
        $totalongkos = $request->bongkar * $request->ongkos;
        $potongan = $susut * $request->potongansusut;
        $totalhargaongkos = $totalongkos - $potongan ;
        MuatBongkar::insert([
            'id_kontrakbeli' => $request->id_kontrakbeli,
            'id_kontrakjual' => $request->id_kontrakjual,
            'truk' => $request->truk,
            'tanggalmuat' => $tanggalmuat,
            'tanggalbongkar' => $tanggalbongkar,
            'muat' => $request->muat,
            'bongkar' => $request->bongkar,
            'susut' => $susut,
            'ongkos' => $request->ongkos,
            'totalongkos' => $totalongkos,
            'potongan' => $potongan,
            'totalhargaongkos' => $totalhargaongkos
        ]);

        DB::table('kontrak_belis')->where('id',$request->id_kontrakbeli)->decrement('stock',$request->muat);
        DB::table('kontrak_juals')->where('id',$request->id_kontrakjual)->decrement('stock',$request->bongkar);

        return redirect('/muatbongkar');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $muatbongkar = MuatBongkar::findOrFail($id);
        return view('transaksi.muatbongkar.show')->with('muatbongkar',$muatbongkar);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $muatbongkar = MuatBongkar::findOrFail($id);
        $kontrakbelis = KontrakBeli::all();
        $kontrakjuals = KontrakJual::all();
        return view('transaksi.muatbongkar.edit')->with('muatbongkar',$muatbongkar)->with('kontrakbelis',$kontrakbelis)->with('kontrakjuals',$kontrakjuals);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id, Request $request)
    {
        //

        $muatbongkarbefore = MuatBongkar::findOrFail($id);
        $id_kontrakbelibefore = $muatbongkarbefore->id_kontrakbeli;
        $id_kontrakjualbefore = $muatbongkarbefore->id_kontrakjual;
        $muatbefore = $muatbongkarbefore->muat;
        $bongkarbefore = $muatbongkarbefore->bongkar;


        $susut = ($request->bongkar - $request->muat)*-1;
        $tanggalmuat = \Carbon\Carbon::parse($request->tanggalmuat);
        $tanggalbongkar = \Carbon\Carbon::parse($request->tanggalbongkar);
        $totalongkos = $request->bongkar * $request->ongkos;
        $potongan = $susut * $request->potongansusut;
        $totalhargaongkos = $totalongkos - $potongan ;
        MuatBongkar::findOrFail($id)->update([
            'id_kontrakbeli' => $request->id_kontrakbeli,
            'id_kontrakjual' => $request->id_kontrakjual,
            'truk' => $request->truk,
            'tanggalmuat' => $tanggalmuat,
            'tanggalbongkar' => $tanggalbongkar,
            'muat' => $request->muat,
            'bongkar' => $request->bongkar,
            'susut' => $susut,
            'ongkos' => $request->ongkos,
            'totalongkos' => $totalongkos,
            'potongan' => $potongan,
            'totalhargaongkos' => $totalhargaongkos
        ]);

        DB::table('kontrak_belis')->where('id',$id_kontrakbelibefore)->increment('stock',$muatbefore);
        DB::table('kontrak_juals')->where('id',$id_kontrakjualbefore)->increment('stock',$bongkarbefore);

        DB::table('kontrak_belis')->where('id',$request->id_kontrakbeli)->decrement('stock',$request->muat);
        DB::table('kontrak_juals')->where('id',$request->id_kontrakjual)->decrement('stock',$request->bongkar);

        return redirect('/muatbongkar');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        $muatbongkar = MuatBongkar::findOrFail($id);
        $id_kontrakbeli = $muatbongkar->id_kontrakbeli;
        $id_kontrakjual = $muatbongkar->id_kontrakjual;
        $muat = $muatbongkar->muat;
        $bongkar = $muatbongkar->bongkar;
        $muatbongkar->delete();

        DB::table('kontrak_belis')->where('id',$id_kontrakbeli)->increment('stock',$muat);
        DB::table('kontrak_juals')->where('id',$id_kontrakjual)->increment('stock',$bongkar);

        return redirect('/muatbongkar');
    }
}
