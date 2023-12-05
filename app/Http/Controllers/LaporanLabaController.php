<?php

namespace App\Http\Controllers;

use App\Models\MuatBongkar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;
class LaporanLabaController extends Controller
{
    //
    public function index(){
        return view('laporan.laba.index');
    }

    public function cetak(Request $request){
        $tanggalawal = \Carbon\Carbon::parse($request->tanggalawal);
        $tanggalakhir = \Carbon\Carbon::parse($request->tanggalakhir);
        $muatbongkars = MuatBongkar::where('tanggalbongkar','>=',$tanggalawal)->where('tanggalbongkar','<=',$tanggalakhir)->get();
        return view('laporan.laba.cetak')->with('muatbongkars',$muatbongkars)->with('tanggalawal',$tanggalawal)->with('tanggalakhir',$tanggalakhir);
    }

    public function cetak_pdf(String $tanggalawal, String $tanggalakhir){
        $tanggalawala = \Carbon\Carbon::parse($tanggalawal);
        $tanggalakhira = \Carbon\Carbon::parse($tanggalakhir);
        $muatbongkars = MuatBongkar::where('tanggalbongkar','>=',$tanggalawala)->where('tanggalbongkar','<=',$tanggalakhira)->get();
        $pdf = PDF::loadView('laporan/laba/cetakpdf',['muatbongkars'=>$muatbongkars]);
        return $pdf->download('laporan-ongkos');
    }
}
