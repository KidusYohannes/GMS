<?php $this->load->view('templates/header'); ?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="content-header">Dashboard
                    <small>Status Check</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <!-- Small boxes (Stat box) -->
            <div class="row container-fluid">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-teal-gradient">
                        <div class="inner">
                            <h3><?= count($materials) ?></h3>

                            <p>Materials Order</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a name="1" onclick="change(this)" href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green-gradient">
                        <div class="inner">
                            <h3><?= count($done_vehicles) ?></h3>

                            <p>Done Vehicles</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-bus"></i>
                        </div>
                        <a name="2" onclick="change(this)" href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow-gradient">
                        <div class="inner">
                            <h3><?= count($due_vehicles) ?></h3>

                            <p>Due Vehicles</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-bus"></i>
                        </div>
                        <a name="3" onclick="change(this)" href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3><?= count($past_vehicles) ?></h3>

                            <p>Past Due Vehicles</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-bus"></i>
                        </div>
                        <a name="4" onclick="change(this)" href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
    <div class="row container-fluid">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="box box-primary">
                <div class="nav-tabs-custom">
                    <div class="box-header">
                        <ul class="nav nav-tabs">
                            <li id="1" class="active"><a href="#tab_1" data-toggle="tab">Materials</a></li>
                            <li id="2"><a href="#tab_2" data-toggle="tab">Done Vehicles</a></li>
                            <li id="3"><a href="#tab_3" data-toggle="tab">Due Vehicles</a></li>
                            <li id="4"><a href="#tab_4" data-toggle="tab">Past Vehicles</a></li>
                        </ul>
                    </div>
                    <div class="box-body form-inline">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_1">
                                <table class="table table-condensed table-stripped" id="datatable-buttons-1">
                                    <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Name</th>
                                        <th>Brand</th>
                                        <th>Model</th>
                                        <th>Quantity</th>
                                        <th>Condition</th>
                                        <th>Cost</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if (isset($materials)){$count = 1; ?>
                                    <?php  foreach ($materials as $material):?>
                                            <tr>
                                                <td><?= $count ?></td>
                                                <td><?= $material['Name'] ?></td>
                                                <td><?= $material['Brand'] ?></td>
                                                <td><?= $material['Model'] ?></td>
                                                <td><?= $material['Quantity'] ?></td>
                                                <td><?= $material['Material_Status'] ?></td>
                                                <td><input type="text" name="mat_<?= $material['id'] ?>" id="mat_<?= $material['id'] ?>" class="form-control input-sm"></td>
                                                <td><button class="btn btn-primary btn-xs" id="<?= $material['id'] ?>_reg" onclick="register(this)">Register</button></td>
                                            </tr>
                                    <?php $count++; endforeach;?>
                                    <?php  } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane" id="tab_2">
                                <table class="table table-condensed table-stripped" id="example1">
                                    <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Customer Name</th>
                                        <th>Vehicle</th>
                                        <th>Status</th>
                                        <th>Job Cards</th>
                                        <th>Estimation</th>
                                        <th>Inspection</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if (isset($done_vehicles)) { $count = 1; ?>
                                        <?php foreach ($done_vehicles as $vehicle): ?>
                                            <tr>
                                                <td><?= $count ?></td>
                                                <td><?= $vehicle['First_Name'].' '.$vehicle['Last_Name'] ?></td>
                                                <td><?= $vehicle['Model'].' '.$vehicle['Make'].' '.$vehicle['Year'] ?></td>
                                                <td><?= "Unidentified" ?></td>
                                                <td>
                                                    <?php $count = 0; foreach ($cards as $card): ?>
                                                        <?php if ($vehicle['id'] == $card['Vehicle_id']) {
                                                            $count++;
                                                        }?>
                                                    <?php endforeach; ?>
                                                    <a href="<?= base_url('vehicles/job_cards_list') ?>?id=<?= $vehicle['id'] ?>"><?= $count ?> Job Cards</a>
                                                </td>
                                                <td><?= $vehicle['Insp'] ?></td>
                                                <td><?= $vehicle['Estm'] ?></td>
                                                <td><a href="<?= base_url().'vehicles/vehicle_history/?id='.$vehicle['id'] ?>">View History...</a></td>
                                            </tr>
                                            <?php $count++; endforeach; ?>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane" id="tab_3">
                                <table class="table table-hover table-condensed" id="datatable-buttons-3">
                                    <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Customer Name</th>
                                        <th>Vehicle</th>
                                        <th>Status</th>
                                        <th>Job Cards</th>
                                        <th>Estimation</th>
                                        <th>Inspection</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if (isset($due_vehicles)) { $count = 1; ?>
                                        <?php foreach ($due_vehicles as $vehicle): ?>
                                            <tr>
                                                <td><?= $count ?></td>
                                                <td><?= $vehicle['First_Name'].' '.$vehicle['Last_Name'] ?></td>
                                                <td><?= $vehicle['Model'].' '.$vehicle['Make'].' '.$vehicle['Year'] ?></td>
                                                <td><?= "Unidentified" ?></td>
                                                <td>
                                                    <?php $count = 0; foreach ($cards as $card): ?>
                                                        <?php if ($vehicle['id'] == $card['Vehicle_id']) {
                                                            $count++;
                                                        }?>
                                                    <?php endforeach; ?>
                                                    <a href="<?= base_url('vehicles/job_cards_list') ?>?id=<?= $vehicle['id'] ?>"><?= $count ?> Job Cards</a>
                                                </td>
                                                <td><?= $vehicle['Insp'] ?></td>
                                                <td><?= $vehicle['Estm'] ?></td>
                                                <td><a href="<?= base_url().'vehicles/vehicle_history/?id='.$vehicle['id'] ?>">View History...</a></td>
                                            </tr>
                                            <?php $count++; endforeach; ?>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane" id="tab_4">
                                <table class="table table-condensed table-stripped" id="example3">
                                    <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Customer Name</th>
                                        <th>Vehicle</th>
                                        <th>Status</th>
                                        <th>Job Cards</th>
                                        <th>Estimation</th>
                                        <th>Inspection</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if (isset($past_vehicles)) { $count = 1; ?>
                                        <?php foreach ($past_vehicles as $vehicle): ?>
                                            <tr>
                                                <td><?= $count ?></td>
                                                <td><?= $vehicle['First_Name'].' '.$vehicle['Last_Name'] ?></td>
                                                <td><?= $vehicle['Model'].' '.$vehicle['Make'].' '.$vehicle['Year'] ?></td>
                                                <td><?= "Unidentified" ?></td>
                                                <td>
                                                    <?php $count = 0; foreach ($cards as $card): ?>
                                                        <?php if ($vehicle['id'] == $card['Vehicle_id']) {
                                                            $count++;
                                                        }?>
                                                    <?php endforeach; ?>
                                                    <a href="<?= base_url('vehicles/job_cards_list') ?>?id=<?= $vehicle['id'] ?>"><?= $count ?> Job Cards</a>
                                                </td>
                                                <td><?= $vehicle['Insp'] ?></td>
                                                <td><?= $vehicle['Estm'] ?></td>
                                                <td><a href="<?= base_url().'vehicles/vehicle_history/?id='.$vehicle['id'] ?>">View History...</a></td>
                                            </tr>
                                            <?php $count++; endforeach; ?>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    function register(element)
    {
        var id = element.id;
        arr = id.split('_');
        var cost = document.getElementById('mat_'+arr[0]).value;
        if (cost == '') {
            alert("insert some value fisrt");
        }else{
            xmlhttp.open("POST", "http://localhost/GMS/ajax/reg_cost/", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("id="+arr[0]+"&cost="+cost);
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200)
                {
                    console.log(this.responseText);
                    $('#row_'+id).hide();
                }
            };
        }
    }
    function change(element)
    {
        reseter();
        document.getElementById(element.name).setAttribute('Class','active');
        document.getElementById("tab_" +element.name).setAttribute('Class','tab-pane active');
    }
    function reseter()
    {
        document.getElementById('1').setAttribute('Class','');
        document.getElementById('2').setAttribute('Class','');
        document.getElementById('3').setAttribute('Class','');
        document.getElementById('4').setAttribute('Class','');
        document.getElementById('tab_1').setAttribute('Class','tab-pane');
        document.getElementById('tab_2').setAttribute('Class','tab-pane');
        document.getElementById('tab_3').setAttribute('Class','tab-pane');
        document.getElementById('tab_4').setAttribute('Class','tab-pane');
    }
</script>
