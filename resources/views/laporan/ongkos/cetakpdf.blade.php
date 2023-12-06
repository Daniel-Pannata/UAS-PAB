<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CV. Putra Makmur | Laporan Ongkos</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="/AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/AdminLTE/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/AdminLTE/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/AdminLTE/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/AdminLTE/plugins/summernote/summernote-bs4.min.css">
  <style type="text/css" media="print">
    @page { size: landscape; }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="container-fluid">
    <div class="row">
      <div class="col-12">

        <!-- Main content -->
        <div class="invoice p-3 mb-3">
          <!-- title row -->
          <div class="row">
            <div class="col-12">
              <h2 class="page-header">
                <i class="fas fa-globe"></i> Laporan Ongkos
                <small class="float-right">Tanggal Awal: {{$tanggalawal}}</small>
              </h2>
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
                  <th>Muat</th>
                  <th>Bongkar</th>
                  <th>Susut</th>
                  <th>Ongkos</th>
                  <th>Total Ongkos</th>
                  <th>Potongan</th>
                  <th>Total Harga Ongkos</th>

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
                        <td>{{$muatbongkar->muat}} Kg</td>
                        <td>{{$muatbongkar->bongkar}} Kg</td>
                        <td>{{$muatbongkar->susut}} Kg</td>
                        <td>Rp. {{$muatbongkar->ongkos}}</td>
                        <td>Rp. {{$muatbongkar->totalongkos}}</td>
                        <td>Rp. {{$muatbongkar->potongan}}</td>
                        <td>Rp. {{$muatbongkar->totalhargaongkos}}</td>
                    </tr>
                    @php
                        $id++;
                        $totalharga+=$muatbongkar->totalhargaongkos
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
                    <td>Rp. {{$totalharga}}</td>
                  </tr>
                </table>
              </div>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

          <!-- this row will not appear when printing -->
        </div>
        <!-- /.invoice -->
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div>
</body>
  <script src="/AdminLTE/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="/AdminLTE/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="/AdminLTE/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="/AdminLTE/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="/AdminLTE/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="/AdminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="/AdminLTE/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="/AdminLTE/plugins/moment/moment.min.js"></script>
  <script src="/AdminLTE/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="/AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="/AdminLTE/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="/AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="/AdminLTE/dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="/AdminLTE/dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="/AdminLTE/dist/js/pages/dashboard.js"></script>
  <script src="/AdminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="/AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="/AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="/AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="/AdminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="/AdminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="/AdminLTE/plugins/jszip/jszip.min.js"></script>
  <script src="/AdminLTE/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="/AdminLTE/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="/AdminLTE/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="/AdminLTE/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="/AdminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <script src="/AdminLTE/plugins/moment/moment.min.js"></script>
  <script src="/AdminLTE/plugins/inputmask/jquery.inputmask.min.js"></script>
  <script src="/AdminLTE/plugins/daterangepicker/daterangepicker.js"></script>
  <script src="/AdminLTE/plugins/select2/js/select2.full.min.js"></script>

  <script>
    window.addEventListener("load", window.print());
  </script>
  <script>

      $(function () {
        $("#example1").DataTable({
          "responsive": true, "lengthChange": false, "autoWidth": false,
          "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true,
        });
        $('.select2').select2();

        $('#reservationdate').datetimepicker({
          format: 'L'
      });
      $('#reservationdate2').datetimepicker({
          format: 'L'
      });
      });

    </script>
  </body>
  </html>
