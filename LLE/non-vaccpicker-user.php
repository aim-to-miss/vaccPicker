<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
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
                            <h1 class="m-0 text-dark">Non Vaccpicker Users</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Non Vaccpicker Users</li>
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
                                    <h5 class="m-0 text-center">Add Non-Vaccpicker User Information</h5>
                                </div>
                                <div class="card-body" style="margin:20px;">

                                    <label>Full Name</label>
                                    <div class="input-group input-group">
                                        <input type="text" id="user_id" placeholder="Enter Patients Full Name Here" class="form-control">
                                    </div>
                                    <br>
                                    <label>Phone Number</label>
                                    <div class="input-group input-group">
                                        <input type="text" id="phone" placeholder="Enter Patients Phone Number Here" class="form-control">
                                    </div>
                                    <br>
                                    <label>National ID Card (NID)</label>
                                    <div class="input-group input-group">
                                        <input type="text" id="nid" placeholder="Enter Patients NID  Here" class="form-control">
                                    </div>
                                    <br>
                                    <label>Age</label>
                                    <div class="input-group input-group">
                                        <input type="text" id="age" placeholder="Enter Patients Age Here" class="form-control">
                                    </div>
                                    <br>
                                    <label>Vaccine Name</label>
                                    <select id="vaccine_name" class="col-md-12 form-control">
                                        <option id="1" selected>Covid-19</option>
                                        <option id="2">Vaxchora</option>
                                        <option id="3">HepA (Havrix, Vaqta)</option>
                                        <option id="4">HepA-HepB (Twinrix)</option>
                                        <option id="5">Polio (Ipol)</option>
                                        <option id="6">Typhoid Oral (Vivotif)</option>
                                        <option id="7">Typhoid Polysaccharide (Typhim Vi)</option>
                                    </select>

                                </div>
                                <div class="col-md-12 text-center">
                                    <button class="btn btn-info col-md-4" onclick="done();" style="margin-left:auto;">Submit</button>
                                </div>
                                <div class="text-right col-md-12 mb-4">
                                    <span style="margin-right:30px;"><b>Vacc</b>Picker</span>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>


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
        $('#non_vaccpicker_users').addClass('active');

        function done() {
            swal("Submission Success!", "Your Submission has been successfully submitted", "success");
            //            location.reload();
        }

    </script>
</body>

</html>
