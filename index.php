<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>VaccPicker | Login</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <style rel="stylesheet">
        #login-card {
            border-radius: 35px;
            padding: 10px;


        }

    </style>
</head>

<body class="hold-transition login-page" style="background-image:url('dist/img/logo.png'); background-size:cover; background-position:center; background-repeat: no-repeat;">
    <div class="login-box">
        <div class="login-logo">
            <img src="dist/img/logonobg.png" height="200px" width="200px">
            <br>
            <a href="#"><b>Vacc</b>Picker</a>
        </div>
        <!-- /.login-logo -->
        <div class="card" id="login-card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="email" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-phone"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" id="password" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!--
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
-->
                    <!-- /.col -->
                    <div class="col-8" style="margin:auto;">
                        <button onclick="login();" style="cursor:pointer" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>

                <!--
                <div class="social-auth-links text-center mb-3">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                    </a>
                </div>
-->
                <!-- /.social-auth-links -->

                <p class="mb-1 text-center col-md-12" style="padding:20px;">
                    <a href="#">I forgot my password</a>
                </p>

            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="application/javascript">
        function login() {
            var email = $('#email').val();
            var password = $('#password').val();

            if (email == "lle" && password == "lle") {
                window.location.href = "LLE/vaccpicker-user.php"
            } else if (email == "mla" && password == "mla") {
                window.location.href = "MLA/dashboard.php"
            } else if (email == "tla" && password == "lle") {
                window.location.href = "TLA/dashboard.php"
            } else {
                swal("Email or Password did not match!", "", "error");
            }

        }

    </script>

</body>

</html>
