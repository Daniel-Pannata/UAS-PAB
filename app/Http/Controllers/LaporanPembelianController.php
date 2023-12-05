<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanPembelianController extends Controller
{
    //
    public function index(){

        return view('laporan.pembelian');
    }

    public function cetak(){

    }

    public function cetak_pdf(){

    }
}
