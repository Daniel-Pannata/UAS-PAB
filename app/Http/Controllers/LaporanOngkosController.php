<?php

namespace App\Http\Controllers;

use App\Models\MuatBongkar;
use Illuminate\Http\Request;
use PDF;

class LaporanOngkosController extends Controller
{
    //
    public function index(){

        return view('laporan.ongkos.index');
    }

    public function cetak(Request $request){
        $tanggalawal = \Carbon\Carbon::parse($request->tanggalawal);
        $tanggalakhir = \Carbon\Carbon::parse($request->tanggalakhir);
        $muatbongkars = MuatBongkar::where('tanggalbongkar','>=',$tanggalawal)->where('tanggalbongkar','<=',$tanggalakhir)->get();
        return view('laporan.ongkos.cetak')->with('muatbongkars',$muatbongkars)->with('tanggalawal',$tanggalawal)->with('tanggalakhir',$tanggalakhir);
    }

    public function cetakpdf(Request $request){
        $tanggalawala = \Carbon\Carbon::parse($request->tanggalawal);
        $tanggalakhira = \Carbon\Carbon::parse($request->tanggalakhir);
        $muatbongkars = MuatBongkar::where('tanggalbongkar','>=',$tanggalawala)->where('tanggalbongkar','<=',$tanggalakhira)->get();
        return view('laporan.ongkos.cetakpdf')->with('muatbongkars',$muatbongkars)->with('tanggalawal',$tanggalawala)->with('tanggalakhir',$tanggalakhira);

    }
}
