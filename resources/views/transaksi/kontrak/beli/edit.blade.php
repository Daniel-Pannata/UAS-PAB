@extends('layouts.app2')
@section('title','Kontrak Beli')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Edit Kontrak Beli {{$kontrakbeli->id}}</div>
                    <div class="card-body">
                        <a href="{{ url('/kontrakbeli') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />
                        <form method="POST" action="{{route('kontrakbeli.update')}}">
                            <div class="form-group">
                                <label>Tanggal:</label>
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input type="text"  class="form-control datetimepicker-input" id="tanggal" data-target="#reservationdate" placeholder="Masukkan Tanggal"/>
                                    <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="noinvoice">No Invoice Kontrak Beli:</label>
                                <input type="text" value="{{$kontrakbeli->no_kontrak}}" class="form-control" id="truk" placeholder="Masukkan No Invoice Kontrak Beli">
                            </div>
                            <div class="form-group">
                                <label>Supplier</label>
                                <select class="form-control select2bs4" style="width: 100%;">
                                    <option selected="selected" value="{{$kontrakbeli['supplier']['id']}}">{{$kontrakbeli['supplier']['nama']}}</option>
                                    @foreach ($suppliers as $supplier)
                                    <option value="{{$supplier->id}}">{{$supplier->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="mt">MT</label>
                                <input type="text" value="{{$kontrakbeli->mt}}" class="form-control" id="mt" placeholder="Masukkan Tonase">
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="text" value="{{$kontrakbeli->harga}}"class="form-control" id="harga" placeholder="Masukkan Harga">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="Edit">
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
