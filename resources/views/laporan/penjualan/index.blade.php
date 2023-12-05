@extends('layouts.app2')
@section('title','Penjualan')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Laporan Penjualan</div>
                    <div class="card-body">
                        <a href="{{ url('/') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />
                        <form method="POST" action="{{route('laporanpdf.penjualan')}}">
                            <div class="form-group">
                                <label>Tanggal Awal:</label>
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input type="text" id="tanggalmuat" name="tanggalmuat" class="form-control datetimepicker-input" data-target="#reservationdate" placeholder="Masukkan Tanggal Awal"/>
                                    <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Akhir:</label>
                                <div class="input-group date" id="reservationdate2" data-target-input="nearest">
                                    <input type="text" id="tanggalbongkar" name="tanggalbongkar" class="form-control datetimepicker-input" data-target="#reservationdate2"placeholder="Masukkan Tanggal Akhir"/>
                                    <div class="input-group-append" data-target="#reservationdate2" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="Create">
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
