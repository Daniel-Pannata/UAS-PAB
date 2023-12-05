@extends('layouts.app2')

@section('title','Muat Bongkar')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-header">Muat Bongkar {{ $muatbongkar->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/muatbongkar') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ route('muatbongkar.edit',$muatbongkar->id) }}" title="Edit Muat Bongkar"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        <a href="{{route('muatbongkar.delete',$muatbongkar->id)}}">
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Muat Bongkar" "><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </a>

                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $muatbongkar->id }}</td>
                                    </tr>
                                    <tr>
                                        <th>Kontrak Beli</th><td>{{$muatbongkar['kontrakbeli']['no_kontrak']}}</td>
                                    </tr>
                                    <tr>
                                        <th>Kontrak Jual</th><td>{{$muatbongkar['kontrakjual']['no_kontrak']}}</td>
                                    </tr>
                                    <tr>
                                        <th>Supplier</th><td>{{$muatbongkar['kontrakbeli']['supplier']['nama']}}</td>
                                    </tr>
                                    <tr>
                                        <th>Customer</th><td>{{$muatbongkar['kontrakjual']['customer']['nama']}}</td>
                                    </tr>
                                    <tr>
                                        <th>Truk</th><td>{{$muatbongkar->truk}}</td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Muat</th><td>{{$muatbongkar->tanggalmuat}}</td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Bongkar</th><td>{{$muatbongkar->tanggalbongkar}}</td>
                                    </tr>
                                    <tr>
                                        <th>Muat</th><td>{{$muatbongkar->muat}}</td>
                                    </tr>
                                    <tr>
                                        <th>Bongkar</th><td>{{$muatbongkar->bongkar}}</td>
                                    </tr>
                                    <tr>
                                        <th>Susut</th><td>{{$muatbongkar->susut}}</td>
                                    </tr>
                                    <tr>
                                        <th>Ongkos</th><td>{{$muatbongkar->ongkos}}</td>
                                    </tr>
                                    <tr>
                                        <th>Total Ongkos</th><td>{{$muatbongkar->totalongkos}}</td>
                                    </tr>
                                    <tr>
                                        <th>Potongan</th><td>{{$muatbongkar->potongan}}</td>
                                    </tr>
                                    <tr>
                                        <th>Total Harga Ongkos</th><td>{{$muatbongkar->totalhargaongkos}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
