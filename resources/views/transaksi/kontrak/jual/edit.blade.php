@extends('layouts.app2')
@section('title','Kontrak Jual')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Edit Kontrak Jual {{$kontrakjual->id}}</div>
                    <div class="card-body">
                        <a href="{{ url('/kontrakjual') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />
                        <form method="POST" action="{{route('kontrakjual.update')}}">
                            <div class="form-group">
                                <label>Tanggal:</label>
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" placeholder="Masukkan Tanggal Muat"/>
                                    <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="noinvoice">No Invoice Kontrak Jual:</label>
                                <input type="text" value="{{$kontrakjual->no_kontrak}}" class="form-control" id="truk" placeholder="Masukkan No Invoice Kontrak Jual">
                            </div>
                            <div class="form-group">
                                <label>Customer</label>
                                <select class="form-control select2bs4" style="width: 100%;">
                                        <option selected="selected" value="{{$kontrakjual['customer']['id']}}">{{$kontrakjual['customer']['nama']}}</option>
                                    @foreach ($customers as $customer )
                                        <option value="{{$customer->id}}">{{$customer->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="mt">MT</label>
                                <input type="text" class="form-control" value="{{$kontrakjual->mt}}" id="mt" placeholder="Masukkan Tonase">
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="text" class="form-control" value="{{$kontrakjual->harga}}" id="harga" placeholder="Masukkan Harga">
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
