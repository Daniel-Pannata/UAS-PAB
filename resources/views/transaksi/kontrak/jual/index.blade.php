
@extends('layouts.app2')

@section('title','Kontrak Jual')
@section('content')
<div class="container-fluid"><div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Kontrak Jual</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <a href="{{ route('kontrakjual.create') }}" class="btn btn-success btn-sm" title="Add New Kontrak Beli">
                <i class="fa fa-plus" aria-hidden="true"></i> Add New
            </a>
            <br/>
            <br/>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>ID</th>
                <th>Tanggal</th>
                <th>No Kontrak</th>
                <th>Customer</th>
                <th>KG</th>
                <th>Harga</th>
                <th>Total Harga</th>
                <th>Stock</th>

                <th style="width: 20%">Action</th>
              </tr>
              </thead>
              <tbody>
                @foreach ($kontrakjuals as $kontrakjual)

                <tr>
                    <td>{{$kontrakjual->id}}</td>
                    <td>{{$kontrakjual->tanggal}}</td>
                    <td>{{$kontrakjual->no_kontrak}}</td>
                    <td>{{$kontrakjual['customer']['nama']}}</td>
                    <td>{{$kontrakjual->mt}} Kg</td>
                    <td>Rp. {{$kontrakjual->harga}}</td>
                    <td>Rp. {{$kontrakjual->total_harga}}</td>
                    <td>{{$kontrakjual->stock}} Kg</td>

                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="{{route('kontrakjual.show',$kontrakjual->id)}}">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="{{route('kontrakjual.edit',$kontrakjual->id)}}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="{{route('kontrakjual.delete',$kontrakjual->id)}}">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>

                </tr>
                @endforeach

            </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
@endsection
