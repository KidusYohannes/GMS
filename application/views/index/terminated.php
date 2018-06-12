<?php $this->load->view('templates/header',$title) ?>
<!--suppress ALL -->
<section class="content-header">
    <h1>
        Job Card
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Vehicles</li>
        <li class="active">Job Card</li>
    </ol>
</section>
<section class="content">
    <div class="row container-fluid">
        <div class="box">
            <div class="box-body" onload="checker()">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="box box-primary">
                        <div class="box-body">
                            <div class="form-group col-lg-3 col-md-3 col-sm-3">
                                <label for="" class="label label-default col-lg-8 col-md-8 col-sm-8">Job Card Number (ካርድ ቁጥር)</label>
                                <div class="col-lg-4 col-md-4 col-sm-4"><?= $info['id'] ?></div>
                            </div>
                            <div class="form-group col-lg-3 col-md-3 col-sm-3">
                                <label for="" class="label label-default col-lg-6 col-md-6 col-sm-6">Total Payment</label>
                                <div class="col-lg-6 col-md-6 col-sm-6"><?= $info['Payment'] ?> Birr</div>
                            </div>
                            <div class="form-group col-lg-3 col-md-3 col-sm-3">
                                <label for="" class="label label-default col-lg-8 col-md-8 col-sm-8">Days</label>
                                <div class="col-lg-4 col-md-4 col-sm-4"><?= round((strtotime($info['Release_Date']) - strtotime($info['Receive_Date'])) / (60 * 60 * 24),0).' Days' ?></div>
                            </div>
                            <div class="form-group col-lg-3 col-md-3 col-sm-3">
                                <div class="btn-group">
                                    <a href="<?= base_url('pdf/?id=').$info['id'].'&target=print' ?>" target="_blank" class="btn btn-default btn-xs">Print</a>
                                    <button class="btn btn-primary btn-xs" onclick="terminate(this)" id="<?= (int)$info['id'] ?>">Restart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="box box-primary">
                        <div class="box-header">Customer Detail</div>
                        <div class="box-body form-horizontal">
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <label for="first" class="label label-default col-lg-4 col-md-4 col-sm-4">First Name</label>
                                <div class="col-lg-8 col-md-8col-sm-8" id="first"><?= $info['First_Name'] ?></div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <label for="last" class="label label-default col-lg-4 col-md-4 col-sm-4">Last Name</label>
                                <div class="col-lg-8 col-md-8 col-sm-8" id="last"><?= $info['Last_Name'] ?></div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <label for="" class="label label-default col-lg-4 col-md-4 col-sm-4">Sex</label>
                                <div class="col-lg-8 col-md-8 col-sm-8"><?= $info['Sex'] ?></div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <label for="" class="label label-default col-lg-4 col-md-4 col-sm-4">Phone</label>
                                <div class="col-lg-8 col-md-8 col-sm-8"><?= $info['Phone'] ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="box box-primary">
                        <div class="box-header">Vehicle Detail</div>
                        <div class="box-body form-horizontal">
                            <div class="col-lg-6 col-md-6 col-sm-6 form-group">
                                <label for="" class="label label-default col-lg-4 col-md-4 col-sm-4">Model</label>
                                <div class="col-lg-8 col-md-8 col-sm-8"><?= $info['Model'] ?></div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 form-group">
                                <label for="" class="label label-default col-lg-4 col-md-4 col-sm-4">Make</label>
                                <div class="col-lg-8 col-md-8 col-sm-8"><?= $info['Make'] ?></div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 form-group">
                                <label for="" class="label label-default col-lg-4 col-md-4 col-sm-4">Year</label>
                                <div class="col-lg-8 col-md-8 col-sm-8"><?= $info['Year'] ?></div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 form-group">
                                <label for="" class="label label-default col-lg-4 col-md-4 col-sm-4">Vin Number</label>
                                <div class="col-lg-8 col-md-8 col-sm-8"><?= $info['VIN_No'] ?></div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 form-group">
                                <label for="" class="label label-default col-lg-4 col-md-4 col-sm-4">Color</label>
                                <div class="col-lg-8 col-md-8 col-sm-8"><?= $info['Color'] ?></div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 form-group">
                                <label for="" class="label label-default col-lg-4 col-md-4 col-sm-4">Doors</label>
                                <div class="col-lg-8 col-md-8 col-sm-8"><?= $info['Door'] ?></div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 form-group">
                                <label for="" class="label label-default col-lg-4 col-md-4 col-sm-4">Plate No</label>
                                <div class="col-lg-8 col-md-8 col-sm-8"><?= $info['Door'] ?></div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 form-group">
                                <label for="" class="label label-default col-lg-4 col-md-4 col-sm-4">Chanssis</label>
                                <div class="col-lg-8 col-md-8 col-sm-8"><?= $info['Door'] ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="box box-primary">
                        <div class="box-header">More Detail</div>
                        <div class="box-body form-horizontal">
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <label for="" class="label label-default col-lg-5 col-md-5 col-sm-5">Millage</label>
                                <div class="col-lg-7 col-md-7 col-sm-7"><?= $info['Millage'] ?></div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <label for="" class="label label-default col-lg-5 col-md-5 col-sm-5">Fuel Tank</label>
                                <div class="col-lg-7 col-md-7 col-sm-7"><?= $info['Fuel'] ?></div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <label for="" class="label label-default col-lg-5 col-md-5 col-sm-5">Receive Date</label>
                                <div class="col-lg-7 col-md-7 col-sm-7"><?= $info['Receive_Date'] ?></div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <label for="" class="label label-default col-lg-5 col-md-5 col-sm-5">Release Date</label>
                                <div class="col-lg-7 col-md-7 col-sm-7"><?= $info['Release_Date'] ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="box box-primary">
                        <div class="nav-tabs-custom">
                            <div class="box-header">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab_1" data-toggle="tab">Services</a></li>
                                    <li><a href="#tab_2" data-toggle="tab">Material</a></li>
                                    <li><a href="#tab_3" data-toggle="tab">Inspection</a></li>
                                    <li><a href="#tab_4" data-toggle="tab">Estimation</a></li>
                                    <li><a href="#tab_5" data-toggle="tab">Tools</a></li>
                                </ul>
                            </div>
                            <div class="box-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1">
                                        <div class="table-reponsive">
                                            <table class="table table-hover table-condensed" id="example3">
                                                <thead>
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Category</th>
                                                    <th width="15cm">Specification</th>
                                                    <th>Requester</th>
                                                    <th width="10cm">Due Date</th>
                                                    <th>Labor Time</th>
                                                    <th>Employee</th>
                                                    <th>Remark</th>
                                                    <th>Status</th>
                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php $count = 1; if (isset($services)) {  ?>
                                                    <?php foreach ($services as $service) : ?>
                                                        <tr>
                                                            <td><?= $count ?></td>
                                                            <td><?= $service['Catagory'] ?></td>
                                                            <td width="15cm"><?= $service['Service'] ?></td>
                                                            <td><?= $service['Type'] ?></td>
                                                            <td width="10cm"><?= $service['Due_Date'] ?></td>
                                                            <td><?= $service['Labor_Time'] ?></td>
                                                            <td>
                                                                    <?php foreach ($employees as $employee): if ($service['Employee_id']==$employee['id']){ ?>
                                                                        <?= $employee['First_Name'].' '.$employee['Last_Name'] ?>
                                                                    <?php } endforeach; ?>
                                                                </select>
                                                            </td>
                                                            <td><?= $service['Remark'] ?></td>
                                                            <td id="service_status_<?= $service['id'] ?>"><?= $service['Status'] ?></td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button onclick="updateService(this)" id="<?= $service['id'] ?>_New" class="btn btn-primary btn-xs">New</button>
                                                                    <button onclick="updateService(this)" id="<?= $service['id'] ?>_Done" class="btn btn-success btn-xs">Done</button>
                                                                    <button onclick="updateService(this)" id="<?= $service['id'] ?>_Pending" class="btn btn-warning btn-xs">Pending</button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <?php $count++; ?>
                                                    <?php endforeach; ?>
                                                <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab_2">
                                        <table class="table table-hover table-condensed" id="datatable-buttons-1">
                                            <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Name</th>
                                                <th>Brand</th>
                                                <th>Model</th>
                                                <th>Quantity</th>
                                                <th>Condition</th>
                                                <th>Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $count_m = 1;  if (isset($materials)) {  ?>
                                                <?php foreach ($materials as $material) : ?>
                                                    <tr>
                                                        <td><?= $count_m ?></td>
                                                        <td><?= $material['Name'] ?></td>
                                                        <td><?= $material['Brand'] ?></td>
                                                        <td><?= $material['Model'] ?></td>
                                                        <td><?= $material['Quantity'] ?></td>
                                                        <td><?= $material['Material_Status'] ?></td>
                                                        <td><?= $material['Status'] ?></td>
                                                    </tr>
                                                    <?php $count_m++; ?>
                                                <?php endforeach; ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="tab_3">
                                        <div class="box box-primary">
                                            <div class="box-body">
                                                <?php if (isset($inspection)) {?>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="form-group">
                                                            <input type="text" name="ins_id" id="ins_id" hidden value="<?= $inspection['id'] ?>">
                                                            <input type="text" readonly name="Employee_i" id="Employee_i" class="form-control input-sm" placeholder="Employee" value="<?= $inspection['Employee_id'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="form-group">
                                                            <input type="Number" readonly name="Payment_i" id="Payment_i" class="form-control input-sm" placeholder="Payement ... .." value="<?= $inspection['Payment'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="input-group">
                                                            <input id="Remark_i" readonly name="Remark_i" type="text" class="form-control input-sm" placeholder="Remark .. .. " value="<?= $inspection['Remark'] ?>"><div class="input-group-btn">
                                                                <button id="ins_btn_2" class="btn btn-primary btn-sm" onclick="inspection_f()" type="button"> Update</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php }else{ ?>
                                                <div class="alert alert-info">No Inspection was performed on this card!</div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <?php $count_i = 1; if (!empty($ins_parts)) { ?>
                                        <table class="table table-hover table-condensed" id="example2">
                                            <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Name</th>
                                                <th>Current Status</th>
                                                <th>Operation</th>
                                                <th>Remark</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $count_i = 1; if (isset($ins_parts)) { ?>
                                                <?php foreach ($ins_parts as $service) : ?>
                                                    <tr>
                                                        <td><?= $count_i ?></td>
                                                        <td><?= $service['Part_Name'] ?></td>
                                                        <td><?= $service['C_Status'] ?></td>
                                                        <td><?= $service['F_Status'] ?></td>
                                                        <td><?= $service['Remark'] ?></td>
                                                        <td></td>
                                                    </tr>
                                                    <?php $count_i++; ?>
                                                <?php endforeach; ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                        <?php } ?>
                                    </div>
                                    <div class="tab-pane" id="tab_4">
                                        <div class="box box-primary">
                                            <div class="box-body">
                                                <?php if (isset($estimation)) { ?>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="form-group">
                                                            <input type="text" name="est_id" id="est_id" hidden value="<?= $estimation['id'] ?>">
                                                            <input type="text" readonly id="Employee_e" name="Employee_e" class="form-control input-sm" placeholder="Employee .. .. " value="<?= $estimation['Employee_id'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="form-group">
                                                            <input type="Number" readonly name="Payment_e" id="Payment_e" class="form-control input-sm" placeholder="Payement .. .. " value="<?= $estimation['Payment'] ?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="input-group">
                                                            <input id="Remark_e_e" readonly name="Remark_e_e" type="text" class="form-control input-sm" placeholder="Remark .. .. " value="<?= $estimation['Remark'] ?>"><div class="input-group-btn">
                                                                <button id="est_btn_2" class="btn btn-primary btn-sm" onclick="estimation_f()" type="button"> Update</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php }else{ ?>
                                                    <div class="alert alert-info">No Estimation was performed on this card!</div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <?php $count_e = 1; if (!empty($est_parts)) { ?>
                                        <table class="table table-hover table-condensed" id="example1">
                                            <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Name</th>
                                                <th>Current Status</th>
                                                <th>Operation</th>
                                                <th>Remark</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $count_e = 1; if (isset($est_parts)) { ?>
                                                <?php foreach ($est_parts as $service) : ?>
                                                    <tr>
                                                        <td><?= $count_e ?></td>
                                                        <td><?= $service['Part_Name'] ?></td>
                                                        <td><?= $service['C_Status'] ?></td>
                                                        <td><?= $service['F_Status'] ?></td>
                                                        <td><?= $service['Remark'] ?></td>
                                                        <td></td>
                                                    </tr>
                                                    <?php $count_e++; ?>
                                                <?php endforeach; ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                        <?php } ?>
                                    </div>
                                    <div class="tab-pane" id="tab_5">
                                        <table class="table table-hover table-condensed" id="datatable-buttons-2">
                                            <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Name</th>
                                                <th>Brand</th>
                                                <th>Model</th>
                                                <th>Size</th>
                                                <th>Remark</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $count_t = 1; if (isset($tools)) {  ?>
                                                <?php foreach ($tools as $service) : ?>
                                                    <tr>
                                                        <td><?= $count_t ?></td>
                                                        <td><?= $service['Name'] ?></td>
                                                        <td><?= $service['Brand'] ?></td>
                                                        <td><?= $service['Model'] ?></td>
                                                        <td><?= $service['Size'] ?></td>
                                                        <td><?= $service['Remark'] ?></td>
                                                        <td></td>
                                                    </tr>
                                                    <?php $count_t++; ?>
                                                <?php endforeach; ?>
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
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    if (window.XMLHttpRequest) {
    // code for modern browsers
        xmlhttp = new XMLHttpRequest();
    } else {
    // code for old IE browsers
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    function terminate(element)
    {
        var arr = element.id;
        xmlhttp.open("POST", "http://localhost/GMS/ajax/restart_card/", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("id="+element.id);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                alert("Card with an id "+arr+" Restarted!!");
                window.location = "<?= base_url().'vehicles/job_card/?id=' ?>"+arr;
            }
        }
    }
</script>
<?php $this->load->view('templates/footer') ?>