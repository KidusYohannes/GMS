
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
            margin: 150px 0 0;
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
            <h4>Factory Management System</h4>
        </div>
        <!-- /.login-logo -->
        <div class="box-body">
            <?php if ($ctr == 'forget_password'){ ?>
                <form action="<?= base_url() ?>forget_password/change_Password" method="post" class="form-horizontal">
                <input type="text" name="id" value="<?= $id ?>" hidden id="">
            <?php }elseif($ctr == 'setup_account'){?>
                    <form action="<?= base_url() ?>setup_account/change_password" method="post" class="form-horizontal">
                        <input type="text" name="id" value="<?= $id ?>" hidden id="">
            <?php }else{ ?>
                <form action="<?= base_url() ?>profile" method="post" class="form-horizontal">
            <?php } ?>
                <h5><i class="glyphicon glyphicon-info-sign"></i> Enter matching passwords and make sure it has a length of 6 <i class="glyphicon glyphicon-info-sign"></i></h5>
                <div class="form-group">
                    <label for="first_name" class="control-label col-lg-3">Password</label>
                    <div class="col-lg-8">
                        <input type="password" name="Password" pattern="[A-Za-z0-9]+" minlength="6" required id="pass1" class="form-control" title="Password must be at least 6 characters" onkeyup="myFunction()">
                    </div>
                </div>
                <div class="form-group">
                    <label for="first_name" class="control-label col-lg-3">Confirm:</label>
                    <div class="col-lg-8">
                        <input type="password" name="Confirm" pattern="[A-Za-z0-9]+" minlength="6" required id="pass2" class="form-control" onkeyup="myFunction()" >
                        <!--<span id="msg" class="alert alert-danger"></span>-->
                    </div>
                </div>
                <button class="col-lg-offset-4 col-lg-6 btn btn-primary" type="submit" id="submit" disabled>Submit</button>
            </form>
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
<script>
    function myFunction() {
        var pass1 = document.getElementById("pass1").value;
        var pass2 = document.getElementById("pass2").value;
        var ok = true;
        if (pass1 != pass2) {
            //alert("Passwords Do not match");
            /*document.getElementById("pass1").style.borderColor = "#E34234";*/
            document.getElementById("pass2").disabled =false;
            document.getElementById("submit").disabled = true;
            document.getElementById("pass2").style.borderColor = "#E34234";
            ok = false;
        }
        else {
            document.getElementById("submit").disabled = false;
            document.getElementById("pass1").style.borderColor = "#00ff00";
            document.getElementById("pass2").style.borderColor = "#00ff00";
        }
    }
</script>
</body>
</html>
