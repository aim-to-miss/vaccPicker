<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>VaccPicker | VaccPicker User</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">



        <?php 
        require "../navbar.php";
        require "sidebar.php";
        ?>
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Vaccpicker Users</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Vaccpicker Users</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-10" style="margin:auto; padding:20px;">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h5 class="m-0 text-center">Search VaccPicker User ID Here</h5>
                                </div>
                                <div class="card-body" style="margin:20px;">
                                    <label>User ID</label>

                                    <div class="input-group input-group">
                                        <input type="text" id="user_id" placeholder="Enter Vaccpicker User ID Here" class="form-control">
                                        <span class="input-group-append">
                                            <button onclick="showResult()" class="btn btn-info btn-flat"><i class="fa fa-search"></i> Search</button>
                                        </span>
                                    </div>


                                </div>
                                <div class="text-right col-md-12 mb-4">
                                    <span style="margin-right:30px;"><b>Vacc</b>Picker</span>
                                    <!--                                    <img src="dist/img/logonobg.png" height="100px" width="100px">-->

                                </div>
                            </div>
                            <div id="searchResult" class="col-md-12" style="display: none" >
                                <!-- Widget: user widget style 2 -->
                                <div class="card card-widget widget-user-2 text-center">
                                    <!-- Add the bg color to the header using any of the bg-* classes -->
                                    <div class="widget-user-header bg-warning">
                                        <!-- /.widget-user-image -->
                                        <h3 class="widget-user-username">Md Rafiquzzaman</h3>
                                        <h5 class="widget-user-desc">Covid-19</h5>
                                    </div>
                                    <div class="card-footer p-0">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <b class="text-primary">ID: </b> ae123143
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <b class="text-primary">Patient Name: </b> Md Rafiqzzaman
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <b class="text-primary">Relation: </b> Own
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <b class="text-primary">Age: </b> 35
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <b class="text-primary">Vaccine Name: </b> Covid-19
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <b class="text-primary">Dose Number: </b> ae123143
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <b class="text-success">Validity: </b> Valid
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <b class="text-primary">Status: </b> Pending
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-footer">
                                    <div class="input-group col-md-4" style="margin: auto">
                                        <input type="text" name="message" placeholder="Enter patients Secret Key" class="form-control">
                                        <span class="input-group-append">
                                            <button  onclick="done();" class="btn btn-primary">Submit</button>
                                        </span>
                                    </div>
                                    </div>
                                </div>
                                <!-- /.widget-user -->
                            </div>
                        </div>
                        <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->
                </div>
            </div>






            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <!--
        <aside class="control-sidebar control-sidebar-dark">
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
-->
        <!-- /.control-sidebar -->

        <?php require"../footer.php";?>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="application/javascript">
        $('#vaccpicker_users').addClass('active');
        function showResult(){
            $('#searchResult').css("display","block");
        }
        function done() {
            swal("Submission Success!", "Your Submission has been successfully submitted", "success");
            $('#searchResult').css("display","none");
        }
    </script>



</body>

</html>
