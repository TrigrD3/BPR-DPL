<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bank Permata Lestari | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="Home">LOGIN <b>ADMIN</b></a>
        </div>
        <?php
        // $session = session();
        // if ($this->session()->flashdata('message_login_error')) : 
        ?>
        <div class="invalid-feedback">
            <?php //= $this->session()->flashdata('message_login_error') 
            ?>
        </div>
        <?php //endif 
        ?>
        <!-- /.login-logo -->
        <form action="<?php echo base_url('Login/process') ?>" method="POST" style="max-width: 600px;">
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Sign in to start your session</p>
                    <div class="input-group mb-3">
                        <input type="text" name="username" class="form-control" placeholder="User Name">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class=" d-grid gap-2 col-6 mx-auto">
                            <button class="btn btn-primary btn-block" type="submit" name="submit" value="Login">Login</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </div>
                <!-- /.login-card-body -->
            </div>
        </form>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
</body>

</html>