@extends('layouts.app2')
@section('title','Kontrak Beli')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Create New Kontrak Beli</div>
                    <div class="card-body">
                        <a href="{{ url('/kontrakbeli') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />
                        <form method="POST" action="{{route('kontrakbeli.store')}}" id="myForm">
                            @csrf
                            <div class="form-group">
                                <label>Tanggal:</label>
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input type="text" id="tanggal" name="tanggal" class="form-control datetimepicker-input" data-target="#reservationdate" placeholder="Masukkan Tanggal"/>
                                    <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="noinvoice">No Invoice Kontrak Beli:</label>
                                <input type="text" class="form-control" id="no_kontrak" name="no_kontrak" placeholder="Masukkan No Invoice Kontrak Beli">
                            </div>
                            <div class="form-group">
                                <label>Supplier</label>
                                <select class="form-control select2bs4" id="id_supplier" name="id_supplier" style="width: 100%;">

                                    @foreach ($suppliers as $supplier)
                                    <option value="{{$supplier->id}}">{{$supplier->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="mt">MT</label>
                                <input type="text" class="form-control" name="mt" id="mt" placeholder="Masukkan Tonase">
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="text" class="form-control" name="harga" id="harga" placeholder="Masukkan Harga">
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
