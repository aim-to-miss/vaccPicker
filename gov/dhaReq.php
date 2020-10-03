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
            <h1 class="m-0 text-dark">Dhaka</h1>
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
              <div class="col-lg-3 col-6">
                  <!-- small card -->
                  <div class="small-box bg-info">
                      <div class="inner">
                          <h3>Dhaka</h3>
                          <p><b>10</b> Districts</p>
                      </div>
                      <div class="icon">
                          <i class="fas fa-users"></i>
                      </div>
                      <a href="#" class="small-box-footer">
                          More info <i class="fas fa-arrow-circle-right"></i>
                      </a>
                  </div>
              </div>
              <div class="col-lg-3 col-6">
                  <!-- small card -->
                  <div class="small-box bg-success">
                      <div class="inner">
                          <h3>Barishal</h3>
                          <p><b>6</b> Districts</p>
                      </div>
                      <div class="icon">
                          <i class="fa fa-fish"></i>
                      </div>
                      <a href="#" class="small-box-footer">
                          More info <i class="fas fa-arrow-circle-right"></i>
                      </a>
                  </div>
              </div>
              <div class="col-lg-3 col-6">
                  <!-- small card -->
                  <div class="small-box bg-warning">
                      <div class="inner">
                          <h3>Khulna</h3>
                          <p><b>10</b> Districts</p>
                      </div>
                      <div class="icon">
                          <i class="fas fa-tree"></i>
                      </div>
                      <a href="#" class="small-box-footer">
                          More info <i class="fas fa-arrow-circle-right"></i>
                      </a>
                  </div>
              </div>
              <div class="col-lg-3 col-6">
                  <!-- small card -->
                  <div class="small-box bg-danger">
                      <div class="inner">
                          <h3>Sylhet</h3>
                          <p><b>4</b> Districts</p>
                      </div>
                      <div class="icon">
                          <i class="fas fa-mountain"></i>
                      </div>
                      <a href="#" class="small-box-footer">
                          More info <i class="fas fa-arrow-circle-right"></i>
                      </a>
                  </div>
              </div>
              <div class="col-lg-3 col-6">
                  <!-- small card -->
                  <div class="small-box bg-danger">
                      <div class="inner">
                          <h3>Rajshashi</h3>

                          <p><b>8</b> Districts</p>
                      </div>
                      <div class="icon">
                          <i class="fas fa-sun"></i>
                      </div>
                      <a href="#" class="small-box-footer">
                          More info <i class="fas fa-arrow-circle-right"></i>
                      </a>
                  </div>
              </div>
              <div class="col-lg-3 col-6">
                  <!-- small card -->
                  <div class="small-box bg-warning">
                      <div class="inner">
                          <h3>Mymensingh</h3>
                          <p><b>6</b> Districts</p>
                      </div>
                      <div class="icon">
                          <i class="fas fa-building"></i>
                      </div>
                      <a href="#" class="small-box-footer">
                          More info <i class="fas fa-arrow-circle-right"></i>
                      </a>
                  </div>
              </div>
              <div class="col-lg-3 col-6">
                  <!-- small card -->
                  <div class="small-box bg-success">
                      <div class="inner">
                          <h3>Chottogram</h3>
                          <p><b>11</b> Districts</p>
                      </div>
                      <div class="icon">
                          <i class="fa fa-umbrella-beach"></i>
                      </div>
                      <a href="#" class="small-box-footer">
                          More info <i class="fas fa-arrow-circle-right"></i>
                      </a>
                  </div>
              </div>
              <div class="col-lg-3 col-6">
                  <!-- small card -->
                  <div class="small-box bg-info">
                      <div class="inner">
                          <h3>Rangpur</h3>
                          <p><b>8</b> Districts</p>
                      </div>
                      <div class="icon">
                          <i class="fas fa-magic"></i>
                      </div>
                      <a href="#" class="small-box-footer">
                          More info <i class="fas fa-arrow-circle-right"></i>
                      </a>
                  </div>
              </div>
          </div>

          <div class="row">
              <div class="col-12">
                  <div class="card">
                      <div class="card-header">
                          <h3 class="card-title">
                              <i class="far fa-map"></i>
                              District Health Index
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
                                  <div class="knob-label">Dhaka</div>
                              </div>
                              <div class="col-6 col-md-3 text-center">
                                  <input type="text" class="knob" value="20" data-skin="tron" data-thickness="0.2" data-width="120"
                                         data-height="120" data-fgColor="green" readonly disabled>

                                  <div class="knob-label">Gazipur</div>
                              </div>
                              <div class="col-6 col-md-3 text-center">
                                  <input type="text" class="knob" value="40" data-skin="tron" data-thickness="0.2" data-width="120"
                                         data-height="120" data-fgColor="orange" readonly disabled>

                                  <div class="knob-label">Faridpur</div>
                              </div>
                              <div class="col-6 col-md-3 text-center">
                                  <input type="text" class="knob" value="100" data-skin="tron" data-thickness="0.2" data-width="120"
                                         data-height="120" data-fgColor="red" readonly disabled>

                                  <div class="knob-label">Goplagonj</div>
                              </div>
                              <div class="col-6 col-md-3 text-center">
                                  <input type="text" class="knob" value="100" data-skin="tron" data-thickness="0.2" data-width="120"
                                         data-height="120" data-fgColor="red" readonly disabled>

                                  <div class="knob-label">Madaripur</div>
                              </div>
                              <div class="col-6 col-md-3 text-center">
                                  <input type="text" class="knob" value="100" data-skin="tron" data-thickness="0.2" data-width="120"
                                         data-height="120" data-fgColor="red" readonly disabled>

                                  <div class="knob-label">Manikgonj</div>
                              </div>
                              <div class="col-6 col-md-3 text-center">
                                  <input type="text" class="knob" value="40" data-skin="tron" data-thickness="0.2" data-width="120"
                                         data-height="120" data-fgColor="orange" readonly disabled>

                                  <div class="knob-label">Munshiganj</div>
                              </div>
                              <div class="col-6 col-md-3 text-center">
                                  <input type="text" class="knob" value="60" data-skin="tron" data-thickness="0.2" data-width="120"
                                         data-height="120" data-fgColor="blue" readonly disabled>

                                  <div class="knob-label">Narayanganj</div>
                              </div>
                              <div class="col-6 col-md-3 text-center">
                                  <input type="text" class="knob" value="40" data-skin="tron" data-thickness="0.2" data-width="120"
                                         data-height="120" data-fgColor="orange" readonly disabled>

                                  <div class="knob-label">Narsingdi</div>
                              </div>
                              <div class="col-6 col-md-3 text-center">
                                  <input type="text" class="knob" value="100" data-skin="tron" data-thickness="0.2" data-width="120"
                                         data-height="120" data-fgColor="red" readonly disabled>

                                  <div class="knob-label">Rajbari</div>
                              </div>
                              <div class="col-6 col-md-3 text-center">
                                  <input type="text" class="knob" value="100" data-skin="tron" data-thickness="0.2" data-width="120"
                                         data-height="120" data-fgColor="red" readonly disabled>

                                  <div class="knob-label">Shariatpur</div>
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
                          <h3 class="card-title">Predicted Required Vaccine - Per District</h3>

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
                          <h3 class="card-title">All Hospitals Info</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                          <table id="example1" class="table table-bordered table-striped">
                              <thead>
                              <tr>
                                  <th>Hospital Name</th>
                                  <th>District</th>
                                  <th>Employee (Vaccine Related)</th>
                                  <th>Max Service Capacity Per Day</th>
                                  <th>Total Request Served</th>
                                  <th>Service Status</th>
                                  <th>Predicted Patent Per Day</th>
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
                                  <td>X</td>
                                  <td>X</td>
                              </tr>
                              </tbody>
                              <tfoot>
                              <tr>
                                  <th>Hospital Name</th>
                                  <th>District</th>
                                  <th>Employee (Vaccine Related)</th>
                                  <th>Max Service Capacity Per Day</th>
                                  <th>Total Request Served</th>
                                  <th>Service Status</th>
                                  <th>Predicted Patent Per Day</th>
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
            labels  : ['Dhaka', 'Gazipur', 'Faridpur', 'Gopalgonj', 'Madaripur', 'Manikganj', 'Munshigannj','Narayanganj','Narsingdi', 'Rajbari','Shariatpur'],
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
                    data                : [20.21, 6.13, 5.28, 25.60, 6.40, 15.72, 5.61, 18.17, 7.173 , 13.23,13.80]
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
