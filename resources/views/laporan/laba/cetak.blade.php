
@extends('layouts.app2')

@section('title','Laporan Laba')
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-12">

        <!-- Main content -->
        <div class="invoice p-3 mb-3">
          <!-- title row -->
          <div class="row">
            <div class="col-12">
              <h4>
                <i class="fas fa-globe"></i> Laporan Laba
                <small class="float-right">Tanggal Awal: {{$tanggalawal}}</small>
              </h4>
            </div>
            <div class="col-12">
                <h4>
                  <small class="float-right">Tanggal Akhir: {{$tanggalakhir}}</small>
                </h4>
              </div>
              <div class="col-12">
                <h2>
                    CV. Putra Makmur
                </h2>
              </div>
            <!-- /.col -->
          </div>
          <!-- info row -->
          <!-- /.row -->

          <!-- Table row -->
          <div class="row">
            <div class="col-12 table-responsive">
              <table class="table table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Supplier</th>
                  <th>Customer</th>
                  <th>Truk</th>
                  <th>Tanggal Muat</th>
                  <th>Tanggal Bongkar</th>
                  <th>Total Beli</th>
                  <th>Total Jual</th>
                  <th>Total Harga Ongkos</th>
                  <th>Laba</th>
                </tr>
                </thead>
                <tbody>
                    @php
                        $id=1;
                        $totalharga = 0;
                    @endphp
                @foreach ($muatbongkars as $muatbongkar)
                    <tr>
                        <td>{{$id}}</td>
                        <td>{{$muatbongkar['kontrakbeli']['supplier']['nama']}}</td>
                        <td>{{$muatbongkar['kontrakjual']['customer']['nama']}}</td>
                        <td>{{$muatbongkar->truk}}</td>
                        <td>{{$muatbongkar->tanggalmuat}}</td>
                        <td>{{$muatbongkar->tanggalbongkar}}</td>
                        <td>Rp. {{$muatbongkar->muat * $muatbongkar['kontrakbeli']['harga']}}</td>
                        <td>Rp. {{$muatbongkar->bongkar * $muatbongkar['kontrakjual']['harga']}}</td>
                        <td>Rp. {{$muatbongkar->totalhargaongkos}}</td>
                        <td>Rp. {{$muatbongkar->muat * $muatbongkar['kontrakbeli']['harga'] - $muatbongkar->bongkar * $muatbongkar['kontrakjual']['harga'] - $muatbongkar->totalhargaongkos}}</td>
                    </tr>
                    @php
                        $id++;
                        $totalharga+=($muatbongkar->muat * $muatbongkar['kontrakbeli']['harga'] - $muatbongkar->bongkar * $muatbongkar['kontrakjual']['harga'] - $muatbongkar->totalhargaongkos)
                    @endphp
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

          <div class="row">
            <!-- accepted payments column -->
            <div class="col-6">

            </div>
            <!-- /.col -->
            <div class="col-6">
              <p class="lead"></p>

              <div class="table-responsive">
                <table class="table">
                  <tr>
                    <th style="width:50%">Total:</th>
                    <td>{{$totalharga}}</td>
                  </tr>
                </table>
              </div>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

          <!-- this row will not appear when printing -->
          <div class="row no-print">
            <div class="col-12">
                <a href="">
                    <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button>
                </a>

            </div>
          </div>
        </div>
        <!-- /.invoice -->
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div>
@endsection
