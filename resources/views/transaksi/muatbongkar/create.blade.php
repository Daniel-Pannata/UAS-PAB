@extends('layouts.app2')
@section('title','Muat Bongkar')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Create New Muat Bongkar</div>
                    <div class="card-body">
                        <a href="{{ url('/muatbongkar') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />
                        <form method="POST" action="{{route('muatbongkar.store')}}">
                            @csrf
                            <div class="form-group">
                                <label>No Kontrak Beli</label>
                                <select class="form-control select2bs4" id="id_kontrakbeli" name="id_kontrakbeli" style="width: 100%;">
                                   @foreach ($kontrakbelis as $kontrakbeli)
                                        <option value="{{$kontrakbeli->id}}">{{$kontrakbeli->no_kontrak}}</option>
                                   @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>No Kontrak Jual</label>
                                <select class="form-control select2bs4" id="id_kontrakjual" name="id_kontrakjual" style="width: 100%;">
                                    @foreach ($kontrakjuals as $kontrakjual)
                                        <option value="{{$kontrakjual->id}}">{{$kontrakjual->no_kontrak}}</option>
                                   @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="truk">Truk:</label>
                                <input type="text" class="form-control" id="truk" name="truk" placeholder="Masukkan Truk">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Muat:</label>
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input type="text" id="tanggalmuat" name="tanggalmuat" class="form-control datetimepicker-input" data-target="#reservationdate" placeholder="Masukkan Tanggal Muat"/>
                                    <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Bongkar:</label>
                                <div class="input-group date" id="reservationdate2" data-target-input="nearest">
                                    <input type="text" id="tanggalbongkar" name="tanggalbongkar" class="form-control datetimepicker-input" data-target="#reservationdate2"placeholder="Masukkan Tanggal Bongkar"/>
                                    <div class="input-group-append" data-target="#reservationdate2" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="truk">Muat:</label>
                                <input type="text" class="form-control" id="muat" name="muat" placeholder="Masukkan Tonase Muat">
                            </div>
                            <div class="form-group">
                                <label for="truk">Bongkar:</label>
                                <input type="text" class="form-control" id="bongkar" name="bongkar" placeholder="Masukkan Tonase Bongkar">
                            </div>
                            <div class="form-group">
                                <label for="truk">Ongkos:</label>
                                <input type="text" class="form-control" id="ongkos" name="ongkos" placeholder="Masukkan Harga Ongkos/Kg">
                            </div>
                            <div class="form-group">
                                <label for="truk">Potongan Susut:</label>
                                <input type="text" class="form-control" id="potongansusut" name="potongansusut" placeholder="Masukkan Harga Potongan Susut/Kg">
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
