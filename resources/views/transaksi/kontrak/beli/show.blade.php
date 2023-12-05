@extends('layouts.app2')

@section('title','Kontrak Beli')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-header">Kontrak Beli {{ $kontrakbeli->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/kontrakbeli') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ route('kontrakbeli.edit',$kontrakbeli->id) }}" title="Edit Kontrak Beli"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        <a href="{{route('kontrakbeli.delete',$kontrakbeli->id)}}">
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Kontrak Beli" "><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </a>

                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $kontrakbeli->id }}</td>
                                    </tr>
                                    <tr><th> Tanggal </th><td> {{ $kontrakbeli->tanggal }} </td></tr>
                                    <tr><th> No Kontrak </th><td> {{ $kontrakbeli->no_kontrak }} </td></tr>
                                    <tr><th> Supplier </th><td> {{ $kontrakbeli['supplier']['nama']}} </td></tr>
                                    <tr><th> MT </th><td> {{ $kontrakbeli->mt }} Kg</td></tr>
                                    <tr><th> Harga </th><td>Rp. {{ $kontrakbeli->harga }} </td></tr>
                                    <tr><th> Total Harga </th><td>Rp. {{ $kontrakbeli->total_harga }} </td></tr>
                                    <tr><th> Stock </th><td> {{ $kontrakbeli->stock }} Kg</td></tr>


                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
