<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php if (isset($title)){ ?>
        <title><?= $title ?></title>
    <?php }else{ ?>
        <title>Garage Management System</title>
    <?php } ?>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <script src="<?php echo base_url(); ?>assets/jquery-2.2.4.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font-awesome-4.7.0/css/font-awesome.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/ionicons-2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
    <!--<link rel="stylesheet" href="<?php /*echo base_url(); */?>assets/dist/print.min.js">-->
    <script src="<?= base_url() ?>assets/dist/print.min.js"></script>
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/skins/_all-skins.min.css'; ?>">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?= base_url() ?>assets/date/daterangepicker.css" />
    <script type="text/javascript" src="<?= base_url() ?>assets/date/moment.js"></script>
    <!--<script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>-->
    <!--<script type="text/javascript" src="<?/*= base_url() */?>assets/date/jquery.min.js"></script>-->
    <script type="text/javascript" src="<?= base_url() ?>assets/date/moment.min.js"></script>
    <!-- Include Date Range Picker -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/date/daterangepicker.css" />
    <link href="<?= base_url() ?>assets/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<?php if (isset($cls)) { ?>
<body class="hold-transition skin-blue sidebar-mini <?= $cls ?>">
<?php }else{ ?>
<body class="hold-transition skin-blue sidebar-mini">
<?php }?>
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="<?= base_url() ?>" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>G</b>MS</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">['<b>Garage_Name</b>']</span>
        </a>
        <nav class="navbar navbar-static-top">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li><a href="<?= base_url() ?>common/tabs">Logout <i class="fa fa-fw fa-lock"></i></a></li>
                </ul>
            </div>
        </nav>
    </header>
    <aside class="main-sidebar">
        <section class="sidebar">
            <ul class="sidebar-menu">
                <li class="header" style="background-color: #bebebe; text-align: center; color: #fff"><h5>Garage Management System</h5></li>
            </ul>
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?php echo base_url(); ?>assets/dist/img/profile.png" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Kidus Yohannes</p>
                </div>
            </div>
            <ul class="sidebar-menu"><li class="header">MAIN NAVIGATION</li>
                <li><a href="#"><i class="fa fa-dashboard"></i><span> Dashboard</span></a>
                    <ul class="treeview-menu">
                        <li><a href="<?= base_url() ?>/"><i class="fa fa-dashboard"> </i> Status</a></li>
                        <li><a href="<?= base_url() ?>incomming/"><i class="fa fa-plus"> </i> Add New</a></li>
                    </ul>
                </li>
                <li><a href="<?= base_url() ?>job_cards/"><i class="fa fa-list"></i><span> Active Job Cards</span></a></li>
                <li><a href="#"><i class="fa fa-cab"></i><span> Vehicles</span></a>
                    <ul class="treeview-menu">
                        <li><a href="<?= base_url() ?>incomming/"><i class="fa fa-plus"></i><span> Incoming</span></a>
                            <!--<ul class="treeview-menu">
                                <li><a href="<?/*= base_url() */?>incomming/"><i class="fa fa-plus"> </i> New Customer</a></li>
                                <li><a href="<?/*= base_url() */?>incomming/customer/"><i class="fa fa-plus"> </i> New Vehicle</a></li>
                                <li><a href="<?/*= base_url() */?>incomming/vehicle/"><i class="fa fa-plus"> </i> new Job Card</a></li>
                            </ul>-->
                        </li>
                        <li><a href="<?= base_url() ?>vehicles/"><i class="fa fa-cab"></i><span> Vehicle</span></a></li>
                    </ul>
                </li>
                <li><a href="<?= base_url() ?>customers/"><i class="fa fa-users"></i><span> All Customers</span></a></li>
                <li><a href="#"><i class="fa fa-user"></i> <span>Employee</span></a>
                    <ul class="treeview-menu">
                        <li><a href="<?= base_url() ?>employee/"><i class="fa fa-users"></i> Employees</a></li>
                        <li><a href="<?= base_url() ?>employee/attendance/"><i class="fa fa-calendar-check-o"></i> Attendance</a></li>
                        <li><a href="<?= base_url() ?>employee/payroll/"><i class="fa fa-money"></i> Payroll</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="fa fa-list-alt"></i> <span> Report</span></a>
                    <ul class="treeview-menu">
                        <li><a href="<?= base_url() ?>report/customer/"><i class="fa fa-user"></i> Customers</a></li>
                        <li><a href="<?= base_url() ?>report/vehicles/"><i class="fa fa-cab"></i> Vehicles</a></li>
                        <li><a href="<?= base_url() ?>report/material/"><i class="fa fa-cogs"></i> Material</a></li>
                        <li><a href="<?= base_url('report/income_and_expense') ?>"><i class="fa fa-bar-chart"></i> Income & Expense</a>
                            <!--<ul class="treeview-menu">
                                <li><a href="<?/*= base_url() */?>report/income/"><i class="fa fa-arrow-circle-o-left"></i> Income</a></li>
                                <li><a href="<?/*= base_url() */?>report/expense/"><i class="fa fa-arrow-circle-right"></i> Expense</a></li>
                            </ul>-->
                        </li>
                    </ul>
                </li>
                <li><a href="<?= base_url() ?>income/"><i class="fa fa-arrow-circle-left"></i> <span>Income</span></a></li>
                <li><a href="<?= base_url() ?>expenes/"><i class="fa fa-arrow-circle-right"></i> <span>Expense</span></a></li>
            </ul>
        </section>
    </aside>
    <div class="content-wrapper">
