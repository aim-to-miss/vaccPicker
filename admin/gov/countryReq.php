<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <?php
    require "../navbar.php";
    require "sidebar.php";
    ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          <div class="row">
              <div class="col-12">
                  <div class="card">
                      <div class="card-header">
                          <h3 class="card-title">
                              <i class="far fa-map"></i>
                              All Bangladesh
                          </h3>

                          <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                          class="fas fa-minus"></i>
                              </button>
                              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                              </button>
                          </div>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                          <div class="row">
                              <div class="col-6 col-md-3 text-center">
                                  <input type="text" class="knob" value="80" data-skin="tron" data-thickness="0.2" data-width="120"
                                         data-height="120" data-fgColor="red" readonly disabled>
                                  <div class="knob-label">Dhaka Division</div>
                              </div>
                              <div class="col-6 col-md-3 text-center">
                                  <input type="text" class="knob" value="70" data-skin="tron" data-thickness="0.2" data-width="120"
                                         data-height="120" data-fgColor="Orange" readonly disabled>

                                  <div class="knob-label">Barishal Division</div>
                              </div>
                              <div class="col-6 col-md-3 text-center">
                                  <input type="text" class="knob" value="60" data-skin="tron" data-thickness="0.2" data-width="120"
                                         data-height="120" data-fgColor="yellow">

                                  <div class="knob-label">Khulna Division</div>
                              </div>
                              <div class="col-6 col-md-3 text-center">
                                  <input type="text" class="knob" value="60" data-skin="tron" data-thickness="0.2" data-width="120"
                                         data-height="120" data-fgColor="green">

                                  <div class="knob-label">Sylhet Division</div>
                              </div>
                              <div class="col-6 col-md-3 text-center">
                                  <input type="text" class="knob" value="60" data-skin="tron" data-thickness="0.2" data-width="120"
                                         data-height="120" data-fgColor="green">

                                  <div class="knob-label">Rajshahi Division</div>
                              </div>
                              <div class="col-6 col-md-3 text-center">
                                  <input type="text" class="knob" value="60" data-skin="tron" data-thickness="0.2" data-width="120"
                                         data-height="120" data-fgColor="green">

                                  <div class="knob-label">Mymensingh Division</div>
                              </div>
                              <div class="col-6 col-md-3 text-center">
                                  <input type="text" class="knob" value="60" data-skin="tron" data-thickness="0.2" data-width="120"
                                         data-height="120" data-fgColor="green">

                                  <div class="knob-label">Chottogram Division</div>
                              </div>
                              <div class="col-6 col-md-3 text-center">
                                  <input type="text" class="knob" value="60" data-skin="tron" data-thickness="0.2" data-width="120"
                                         data-height="120" data-fgColor="green">

                                  <div class="knob-label">Rangpur Division</div>
                              </div>
                          </div>
                          <!-- /.row -->
                      </div>
                      <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
              </div>
              <!-- /.col -->
          </div>

          <div class="row">
              <div class="col-md-12">
                  <!-- BAR CHART -->
                  <div class="card card-success">
                      <div class="card-header">
                          <h3 class="card-title">Predicted Required Vaccine - Per Division</h3>

                          <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                              </button>
                              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                          </div>
                      </div>
                      <div class="card-body">
                          <div class="chart">
                              <canvas id="barChart" style="min-height: 250px; height: 500px; max-height: 500px; max-width: 100%;"></canvas>
                          </div>
                      </div>
                      <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
              </div>
          </div>

          <div class="row">
              <div class="col-12">
                  <div class="card">
                      <div class="card-header">
                          <h3 class="card-title">All District Info</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                          <table id="example1" class="table table-bordered table-striped">
                              <thead>
                              <tr>
                                  <th>District Name</th>
                                  <th>Land Area</th>
                                  <th>Total Population</th>
                                  <th>Population Density</th>
                                  <th>Estimated Number of Patient</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td>Trident</td>
                                  <td>Internet
                                      Explorer 4.0
                                  </td>
                                  <td>Win 95+</td>
                                  <td> 4</td>
                                  <td>X</td>
                              </tr>
                              <tr>
                                  <td>Trident</td>
                                  <td>Internet
                                      Explorer 5.0
                                  </td>
                                  <td>Win 95+</td>
                                  <td>5</td>
                                  <td>C</td>
                              </tr>
                              <tr>
                                  <td>Trident</td>
                                  <td>Internet
                                      Explorer 5.5
                                  </td>
                                  <td>Win 95+</td>
                                  <td>5.5</td>
                                  <td>A</td>
                              </tr>
                              <tr>
                                  <td>Trident</td>
                                  <td>Internet
                                      Explorer 6
                                  </td>
                                  <td>Win 98+</td>
                                  <td>6</td>
                                  <td>A</td>
                              </tr>
                              <tr>
                                  <td>Trident</td>
                                  <td>Internet Explorer 7</td>
                                  <td>Win XP SP2+</td>
                                  <td>7</td>
                                  <td>A</td>
                              </tr>
                              <tr>
                                  <td>Trident</td>
                                  <td>AOL browser (AOL desktop)</td>
                                  <td>Win XP</td>
                                  <td>6</td>
                                  <td>A</td>
                              </tr>
                              <tr>
                                  <td>Gecko</td>
                                  <td>Firefox 1.0</td>
                                  <td>Win 98+ / OSX.2+</td>
                                  <td>1.7</td>
                                  <td>A</td>
                              </tr>
                              <tr>
                                  <td>Gecko</td>
                                  <td>Firefox 1.5</td>
                                  <td>Win 98+ / OSX.2+</td>
                                  <td>1.8</td>
                                  <td>A</td>
                              </tr>
                              <tr>
                                  <td>Gecko</td>
                                  <td>Firefox 2.0</td>
                                  <td>Win 98+ / OSX.2+</td>
                                  <td>1.8</td>
                                  <td>A</td>
                              </tr>
                              <tr>
                                  <td>Gecko</td>
                                  <td>Firefox 3.0</td>
                                  <td>Win 2k+ / OSX.3+</td>
                                  <td>1.9</td>
                                  <td>A</td>
                              </tr>
                              <tr>
                                  <td>Gecko</td>
                                  <td>Camino 1.0</td>
                                  <td>OSX.2+</td>
                                  <td>1.8</td>
                                  <td>A</td>
                              </tr>
                              <tr>
                                  <td>Gecko</td>
                                  <td>Camino 1.5</td>
                                  <td>OSX.3+</td>
                                  <td>1.8</td>
                                  <td>A</td>
                              </tr>
                              <tr>
                                  <td>Gecko</td>
                                  <td>Netscape 7.2</td>
                                  <td>Win 95+ / Mac OS 8.6-9.2</td>
                                  <td>1.7</td>
                                  <td>A</td>
                              </tr>
                              <tr>
                                  <td>Gecko</td>
                                  <td>Netscape Browser 8</td>
                                  <td>Win 98SE+</td>
                                  <td>1.7</td>
                                  <td>A</td>
                              </tr>
                              <tr>
                                  <td>Gecko</td>
                                  <td>Netscape Navigator 9</td>
                                  <td>Win 98+ / OSX.2+</td>
                                  <td>1.8</td>
                                  <td>A</td>
                              </tr>
                              <tr>
                                  <td>Gecko</td>
                                  <td>Mozilla 1.0</td>
                                  <td>Win 95+ / OSX.1+</td>
                                  <td>1</td>
                                  <td>A</td>
                              </tr>
                              <tr>
                                  <td>Gecko</td>
                                  <td>Mozilla 1.1</td>
                                  <td>Win 95+ / OSX.1+</td>
                                  <td>1.1</td>
                                  <td>A</td>
                              </tr>
                              <tr>
                                  <td>Gecko</td>
                                  <td>Mozilla 1.2</td>
                                  <td>Win 95+ / OSX.1+</td>
                                  <td>1.2</td>
                                  <td>A</td>
                              </tr>
                              <tr>
                                  <td>Gecko</td>
                                  <td>Mozilla 1.3</td>
                                  <td>Win 95+ / OSX.1+</td>
                                  <td>1.3</td>
                                  <td>A</td>
                              </tr>
                              <tr>
                                  <td>Gecko</td>
                                  <td>Mozilla 1.4</td>
                                  <td>Win 95+ / OSX.1+</td>
                                  <td>1.4</td>
                                  <td>A</td>
                              </tr>
                              <tr>
                                  <td>Gecko</td>
                                  <td>Mozilla 1.5</td>
                                  <td>Win 95+ / OSX.1+</td>
                                  <td>1.5</td>
                                  <td>A</td>
                              </tr>
                              <tr>
                                  <td>Gecko</td>
                                  <td>Mozilla 1.6</td>
                                  <td>Win 95+ / OSX.1+</td>
                                  <td>1.6</td>
                                  <td>A</td>
                              </tr>
                              <tr>
                                  <td>Gecko</td>
                                  <td>Mozilla 1.7</td>
                                  <td>Win 98+ / OSX.1+</td>
                                  <td>1.7</td>
                                  <td>A</td>
                              </tr>
                              <tr>
                                  <td>Gecko</td>
                                  <td>Mozilla 1.8</td>
                                  <td>Win 98+ / OSX.1+</td>
                                  <td>1.8</td>
                                  <td>A</td>
                              </tr>
                              <tr>
                                  <td>Gecko</td>
                                  <td>Seamonkey 1.1</td>
                                  <td>Win 98+ / OSX.2+</td>
                                  <td>1.8</td>
                                  <td>A</td>
                              </tr>
                              <tr>
                                  <td>Gecko</td>
                                  <td>Epiphany 2.20</td>
                                  <td>Gnome</td>
                                  <td>1.8</td>
                                  <td>A</td>
                              </tr>
                              <tr>
                                  <td>Webkit</td>
                                  <td>Safari 1.2</td>
                                  <td>OSX.3</td>
                                  <td>125.5</td>
                                  <td>A</td>
                              </tr>
                              <tr>
                                  <td>Webkit</td>
                                  <td>Safari 1.3</td>
                                  <td>OSX.3</td>
                                  <td>312.8</td>
                                  <td>A</td>
                              </tr>
                              <tr>
                                  <td>Webkit</td>
                                  <td>Safari 2.0</td>
                                  <td>OSX.4+</td>
                                  <td>419.3</td>
                                  <td>A</td>
                              </tr>
                              <tr>
                                  <td>Webkit</td>
                                  <td>Safari 3.0</td>
                                  <td>OSX.4+</td>
                                  <td>522.1</td>
                                  <td>A</td>
                              </tr>
                              <tr>
                                  <td>Webkit</td>
                                  <td>OmniWeb 5.5</td>
                                  <td>OSX.4+</td>
                                  <td>420</td>
                                  <td>A</td>
                              </tr>
                              <tr>
                                  <td>Webkit</td>
                                  <td>iPod Touch / iPhone</td>
                                  <td>iPod</td>
                                  <td>420.1</td>
                                  <td>A</td>
                              </tr>
                              <tr>
                                  <td>Webkit</td>
                                  <td>S60</td>
                                  <td>S60</td>
                                  <td>413</td>
                                  <td>A</td>
                              </tr>
                              <tr>
                                  <td>Presto</td>
                                  <td>Opera 7.0</td>
                                  <td>Win 95+ / OSX.1+</td>
                                  <td>-</td>
                                  <td>A</td>
                              </tr>
                              <tr>
                                  <td>Presto</td>
                                  <td>Opera 7.5</td>
                                  <td>Win 95+ / OSX.2+</td>
                                  <td>-</td>
                                  <td>A</td>
                              </tr>
                              <tr>
                                  <td>Presto</td>
                                  <td>Opera 8.0</td>
                                  <td>Win 95+ / OSX.2+</td>
                                  <td>-</td>
                                  <td>A</td>
                              </tr>
                              <tr>
                                  <td>Presto</td>
                                  <td>Opera 8.5</td>
                                  <td>Win 95+ / OSX.2+</td>
                                  <td>-</td>
                                  <td>A</td>
                              </tr>
                              <tr>
                                  <td>Presto</td>
                                  <td>Opera 9.0</td>
                                  <td>Win 95+ / OSX.3+</td>
                                  <td>-</td>
                                  <td>A</td>
                              </tr>
                              <tr>
                                  <td>Presto</td>
                                  <td>Opera 9.2</td>
                                  <td>Win 88+ / OSX.3+</td>
                                  <td>-</td>
                                  <td>A</td>
                              </tr>
                              <tr>
                                  <td>Presto</td>
                                  <td>Opera 9.5</td>
                                  <td>Win 88+ / OSX.3+</td>
                                  <td>-</td>
                                  <td>A</td>
                              </tr>
                              <tr>
                                  <td>Presto</td>
                                  <td>Opera for Wii</td>
                                  <td>Wii</td>
                                  <td>-</td>
                                  <td>A</td>
                              </tr>
                              <tr>
                                  <td>Presto</td>
                                  <td>Nokia N800</td>
                                  <td>N800</td>
                                  <td>-</td>
                                  <td>A</td>
                              </tr>
                              <tr>
                                  <td>Presto</td>
                                  <td>Nintendo DS browser</td>
                                  <td>Nintendo DS</td>
                                  <td>8.5</td>
                                  <td>C/A<sup>1</sup></td>
                              </tr>
                              <tr>
                                  <td>KHTML</td>
                                  <td>Konqureror 3.1</td>
                                  <td>KDE 3.1</td>
                                  <td>3.1</td>
                                  <td>C</td>
                              </tr>
                              <tr>
                                  <td>KHTML</td>
                                  <td>Konqureror 3.3</td>
                                  <td>KDE 3.3</td>
                                  <td>3.3</td>
                                  <td>A</td>
                              </tr>
                              <tr>
                                  <td>KHTML</td>
                                  <td>Konqureror 3.5</td>
                                  <td>KDE 3.5</td>
                                  <td>3.5</td>
                                  <td>A</td>
                              </tr>
                              <tr>
                                  <td>Tasman</td>
                                  <td>Internet Explorer 4.5</td>
                                  <td>Mac OS 8-9</td>
                                  <td>-</td>
                                  <td>X</td>
                              </tr>
                              <tr>
                                  <td>Tasman</td>
                                  <td>Internet Explorer 5.1</td>
                                  <td>Mac OS 7.6-9</td>
                                  <td>1</td>
                                  <td>C</td>
                              </tr>
                              <tr>
                                  <td>Tasman</td>
                                  <td>Internet Explorer 5.2</td>
                                  <td>Mac OS 8-X</td>
                                  <td>1</td>
                                  <td>C</td>
                              </tr>
                              <tr>
                                  <td>Misc</td>
                                  <td>NetFront 3.1</td>
                                  <td>Embedded devices</td>
                                  <td>-</td>
                                  <td>C</td>
                              </tr>
                              <tr>
                                  <td>Misc</td>
                                  <td>NetFront 3.4</td>
                                  <td>Embedded devices</td>
                                  <td>-</td>
                                  <td>A</td>
                              </tr>
                              <tr>
                                  <td>Misc</td>
                                  <td>Dillo 0.8</td>
                                  <td>Embedded devices</td>
                                  <td>-</td>
                                  <td>X</td>
                              </tr>
                              <tr>
                                  <td>Misc</td>
                                  <td>Links</td>
                                  <td>Text only</td>
                                  <td>-</td>
                                  <td>X</td>
                              </tr>
                              <tr>
                                  <td>Misc</td>
                                  <td>Lynx</td>
                                  <td>Text only</td>
                                  <td>-</td>
                                  <td>X</td>
                              </tr>
                              <tr>
                                  <td>Misc</td>
                                  <td>IE Mobile</td>
                                  <td>Windows Mobile 6</td>
                                  <td>-</td>
                                  <td>C</td>
                              </tr>
                              <tr>
                                  <td>Misc</td>
                                  <td>PSP browser</td>
                                  <td>PSP</td>
                                  <td>-</td>
                                  <td>C</td>
                              </tr>
                              <tr>
                                  <td>Other browsers</td>
                                  <td>All others</td>
                                  <td>-</td>
                                  <td>-</td>
                                  <td>U</td>
                              </tr>
                              </tbody>
                              <tfoot>
                              <tr>
                                  <th>Rendering engine</th>
                                  <th>Browser</th>
                                  <th>Platform(s)</th>
                                  <th>Engine version</th>
                                  <th>CSS grade</th>
                              </tr>
                              </tfoot>
                          </table>
                      </div>
                      <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
              </div>
              <!-- /.col -->
          </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    <?php require"../footer.php";?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- page script -->
<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>


<script>
    $(function () {
        /* ChartJS
         * -------
         * Here we will create a few charts using ChartJS
         */


        var areaChartData = {
            labels  : ['Dhaka', 'Barishal', 'Khulna', 'Sylhet', 'Rajshahi', 'Mymensingh', 'Chottogram','Rangpur'],
            datasets: [
                {
                    label               : 'Required Vaccine - Thousands (Per Day)',
                    backgroundColor     : 'rgba(60,141,188,0.9)',
                    borderColor         : 'rgba(60,141,188,0.8)',
                    pointRadius          : false,
                    pointColor          : '#3b8bba',
                    pointStrokeColor    : 'rgba(60,141,188,1)',
                    pointHighlightFill  : '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data                : [611.44, 52.83, 40, 19, 86, 27, 90,23]
                }
            ]
        }

        //-------------
        //- BAR CHART -
        //-------------
        var barChartCanvas = $('#barChart').get(0).getContext('2d')
        var barChartData = jQuery.extend(true, {}, areaChartData)
        var temp0 = areaChartData.datasets[0]
        barChartData.datasets[0] = temp0
        var barChartOptions = {
            responsive              : true,
            maintainAspectRatio     : false,
            datasetFill             : false
        }

        var barChart = new Chart(barChartCanvas, {
            type: 'bar',
            data: barChartData,
            options: barChartOptions
        })

    })
</script>
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
</body>
</html>
