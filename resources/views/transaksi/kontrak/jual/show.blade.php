@extends('layouts.app2')

@section('title','Kontrak Jual')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-header">Kontrak Jual {{ $kontrakjual->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/kontrakjual') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ route('kontrakjual.edit',$kontrakjual->id) }}" title="Edit Kontrak Jual"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        <a href="{{route('kontrakjual.delete',$kontrakjual->id)}}">
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Kontrak Jual" "><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </a>

                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $kontrakjual->id }}</td>
                                    </tr>
                                    <tr><th> No Kontrak </th><td> {{ $kontrakjual->no_kontrak }} </td></tr>
                                    <tr><th> Customer </th><td> {{ $kontrakjual['customer']['nama']}} </td></tr>
                                    <tr><th> MT </th><td> {{ $kontrakjual->mt }} Kg</td></tr>
                                    <tr><th> Harga </th><td>Rp. {{ $kontrakjual->harga }} </td></tr>
                                    <tr><th> Total Harga </th><td>Rp. {{ $kontrakjual->total_harga }} </td></tr>
                                    <tr><th> Stock </th><td> {{ $kontrakjual->stock }} Kg</td></tr>


                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
