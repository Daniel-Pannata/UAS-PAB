<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanOngkosController extends Controller
{
    //
    public function index(){

        return view('laporan.ongkos');
    }

    public function cetak(){

    }

    public function cetak_pdf(){

    }
}
