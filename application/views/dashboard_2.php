<?php $this->load->view('templates/header'); ?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="content-header">Dashboard
                    <small>Add New</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <!-- Small boxes (Stat box) -->
            <div class="row container-fluid">
                <div class="col-lg-4 col-xs-8">
                    <!-- small box -->
                    <div class="small-box bg-teal-gradient">
                        <div class="inner">
                            <h2>Add New Customer</h2>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-contact"></i>
                        </div>
                        <a href="<?= base_url('incomming') ?>" class="small-box-footer">Go!  <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-xs-8">
                    <!-- small box -->
                    <div class="small-box bg-green-gradient">
                        <div class="inner">
                            <h2>Add New Vehicle</h2>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-bus"></i>
                        </div>
                        <a href="<?= base_url('incomming/customer/') ?>" class="small-box-footer">Go!  <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-xs-8">
                    <!-- small box -->
                    <div class="small-box bg-yellow-gradient">
                        <div class="inner">
                            <h2>Add Job Card</h2>
                        </div>
                        <div class="icon">
                            <i class="ion ion-card"></i>
                        </div>
                        <a href="<?= base_url('incomming/vehicle/') ?>" class="small-box-footer">Go!  <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <!-- ./col -->
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<?php $this->load->view('templates/footer'); ?>
<script>
    if (window.XMLHttpRequest) {
        // code for modern browsers
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for old IE browsers
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    function activate(element)
    {
        var id = element.id;
        xmlhttp.open("POST", "http://localhost/GMS/ajax/activate_employee/", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("id="+id);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200)
            {
                console.log(this.responseText);
                $('#row_'+id).hide();
            }
        };
    }
</script>
