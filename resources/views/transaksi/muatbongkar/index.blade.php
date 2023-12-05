
@extends('layouts.app2')

@section('title','Muat Bongkar')
@section('content')
<div class="container-fluid"><div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Muat Bongkar</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <a href="{{ route('muatbongkar.create') }}" class="btn btn-success btn-sm" title="Add New Kontrak Beli">
                <i class="fa fa-plus" aria-hidden="true"></i> Add New
            </a>

            <br/>
            <br/>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>ID</th>
                <th>Truk</th>
                <th>Tanggal Muat</th>
                <th>Tanggal Bongkar</th>
                <th>PKS</th>
                <th>Customer</th>
                <th>Muat</th>
                <th>Bongkar</th>
                <th>Susut</th>
                <th style="width: 20%">Action</th>
              </tr>
              </thead>
              <tbody>
                @foreach ($muatbongkars as $muatbongkar)
                <tr>
                    <td>{{$muatbongkar->id}}</td>
                    <td>{{$muatbongkar->truk}}</td>
                    <td>{{$muatbongkar->tanggalmuat}}</td>
                    <td>{{$muatbongkar->tanggalbongkar}}</td>
                    <td>{{$muatbongkar['kontrakbeli']['supplier']['nama']}}</td>
                    <td>{{$muatbongkar['kontrakjual']['customer']['nama']}}</td>
                    <td>{{$muatbongkar->muat}}</td>
                    <td>{{$muatbongkar->bongkar}}</td>
                    <td>{{$muatbongkar->susut}}</td>

                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="{{route('muatbongkar.show',$muatbongkar->id)}}">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="{{route('muatbongkar.edit',$muatbongkar->id)}}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="{{route('muatbongkar.delete',$muatbongkar->id)}}">
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
