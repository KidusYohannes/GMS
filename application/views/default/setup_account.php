
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        h3  {
            background: #f0f0f0;
            display: block;
            padding: 10px;
            width: auto;
            text-align: center;
        }
        .box{
            background: #f0f0f0;
            margin: 175px 0 0;
            width: auto;
            text-align: center;
        }
    </style>
</head>
<body class="hold-transition login-page">
<div class="col-lg-6 col-lg-offset-3">
    <div class="box">
        <div class="box-header">
            <h1><a href="<?= base_url() ?>">TRANSSION</a></h1>
            <small><h5 class="alert alert-info">Insert your security question and answer which will<br>be used incase you forgot your password</h5></small>
        </div>
        <!-- /.login-logo -->
        <div class="box-body">
            <form action="<?= base_url() ?>setup_account/setup" method="post" class="form-horizontal">
                <input type="text" name="User_Id" value="<?= $User_Id ?>" hidden id="">
                <div class="form-group">
                    <label for="first_name" class="control-label col-lg-3">Question</label>
                    <div class="col-lg-8">
                        <input type="text" name="question" required id="pass1" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="first_name" class="control-label col-lg-3">Answer</label>
                    <div class="col-lg-8">
                        <input type="text" name="answer" required id="pass1" class="form-control">
                    </div>
                </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
                <?php if (isset($msg) && $msg == "err"){?>
                    <div class="alert alert-danger">
                        Wrong answer !!!
                    </div>
                <?php } ?>
        </div>
        <!-- /.login-box-body -->
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.0 -->
<script src="<?= base_url() ?>assets/plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?= base_url() ?>assets/plugins/iCheck/icheck.min.js"></script>
</body>
</html>
