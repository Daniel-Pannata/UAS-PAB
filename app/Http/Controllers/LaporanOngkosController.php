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

    public function cetak_pdf(Request $request){
        $tanggalawal = \Carbon\Carbon::parse($request->tanggalawal);
        $tanggalakhir = \Carbon\Carbon::parse($request->tanggalakhir);
        $muatbongkars = MuatBongkar::where('tanggalbongkar','>=',$tanggalawal)->where('tanggalbongkar','<=',$tanggalakhir)->get();
        $pdf = PDF::loadView('laporan/ongkos/cetakpdf',['muatbongkars'=>$muatbongkars]);
        return $pdf->download('laporan-ongkos');

    }
}
