
@extends('layouts.app')

@section('title','Kontrak Beli')
@section('content')
<div class="container-fluid"><div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Kontrak Beli</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <a href="{{ url('/transaksi/kontrakbeli/create') }}" class="btn btn-success btn-sm" title="Add New Kontrak Beli">
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
                <th>Supplier</th>
                <th>MT</th>
                <th>Harga</th>
                <th>Total Harga</th>
                <th style="width: 20%">Action</th>
              </tr>
              </thead>
              <tbody>
                @foreach($kontrakbelis as $kontrakbeli)
                <tr>
                    <td>{{$kontrakbeli->id}}</td>
                    <td>{{$kontrakbeli->tanggal}}</td>
                    <td>{{$kontrakbeli->no_kontrak}}</td>
                    <td>{{$kontrakbeli['supplier']['nama']}}</td>
                    <td>{{$kontrakbeli->mt}}</td>
                    <td>Rp. {{$kontrakbeli->harga}}</td>
                    <td>Rp. {{$kontrakbeli->total_harga}}</td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
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
