<?php $this->load->view('templates/header',$title) ?>
<!--suppress ALL -->
<style>
    #img img {
        margin-left:auto;
        margin-right: auto;
    }
</style>
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
                                <label for="" class="label label-primary col-lg-8 col-md-8 col-sm-8">Job Card Number (ካርድ ቁጥር)</label>
                                <div class="col-lg-4 col-md-4 col-sm-4"><?= $info['id'] ?></div>
                            </div>
                            <div class="form-group col-lg-3 col-md-3 col-sm-3">
                                <label for="" class="label label-primary col-lg-6 col-md-6 col-sm-6">Total Payment</label>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <?php if($info['Payment'] == '0'){ ?>
                                        <input type="number" name="" id="payment"
                                               class="form-control input-sm" value="0.00" onchange="payment(this);">
                                    <?php }else{  ?>
                                        <input type="number" name="" id="payment"
                                               class="form-control input-sm" value="<?= $info['Payment'] ?>" onchange="payment(this);">
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="form-group col-lg-3 col-md-3 col-sm-3">
                                <label for="" class="label label-primary col-lg-8 col-md-8 col-sm-8">Days</label>
                                <div class="col-lg-4 col-md-4 col-sm-4"><?= round((strtotime($info['Release_Date']) - strtotime($info['Receive_Date'])) / (60 * 60 * 24),0).' Days' ?></div>
                            </div>
                            <div class="form-group col-lg-3 col-md-3 col-sm-3">
                                <div class="btn-group">
                                    <a href="<?= base_url('image/?id='.$info['id']) ?>" target="_blank" class="btn btn-success btn-xs">Upload Images</a>
                                    <button class="btn btn-primary btn-xs" onclick="terminate(this)" id="<?= (int)$info['id'] ?>">Terminate Card</button>
                                    <a href="<?= base_url('pdf/?id=').$info['id'].'&target=print' ?>" target="_blank" class="btn btn-success btn-xs"><i class="fa fa-print"></i> Print</a>
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
                                    <li><a href="#tab_6" data-toggle="tab">Pictures</a></li>
                                </ul>
                            </div>
                            <div class="box-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover table-condensed" id="example3">
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
                                                <?php $count = 1; $stat_counter = count($services); if (isset($services)) { ?>
                                                    <?php foreach ($services as $service) : ?>
                                                        <tr>
                                                            <td><?= $count ?></td>
                                                            <td><?= $service['Catagory'] ?></td>
                                                            <td width="15cm"><?= $service['Service'] ?></td>
                                                            <td><?= $service['Type'] ?></td>
                                                            <td width="10cm"><?= $service['Due_Date'] ?></td>
                                                            <td>
                                                                <div class="input-group input-group-sm">
                                                                    <input type="text" name="Labor_Time" id="<?= $service['id'] ?>"
                                                                           class="form-control" value="<?= $service['Labor_Time'] ?>" onchange="labout_update(this)">
                                                                    <span class="input-group-addon">hrs</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                    <?php $counter = 0; foreach ($employees as $employee): if ($service['Employee_id']==$employee['id']){$dis = 'selected'; ?>
                                                                        <?= $employee['First_Name'].' '.$employee['Last_Name'] ?>
                                                                    <?php $counter = 1; } ?>
                                                                    <?php endforeach; ?>
                                                                <?php if($counter == 0){ ?>
                                                                        <b>Not Selected</b>
                                                                <?php } ?>
                                                            </td>
                                                            <td><?= $service['Remark'] ?></td>
                                                            <td id="service_status_<?= $service['id'] ?>"><?= $service['Status'] ?>
                                                                <?php if($service['Status'] === 'Finished' or $service['Status'] ===  'Canceled')
                                                                {
                                                                    $stat_counter--;
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <select class="form-control" id="<?= $service['id'] ?>" onchange="updateService(this)">
                                                                    <option value="New">New</option>
                                                                    <option value="Started">Started</option>
                                                                    <option value="Pending">Pending</option>
                                                                    <option value="Under Process">Under Process</option>
                                                                    <option value="Suspended">Suspended</option>
                                                                    <option value="Finishing">Finishing</option>
                                                                    <option value="Finished">Finished</option>
                                                                    <option value="Canceled">Canceled</option>
                                                                </select>
                                                                <!-- <div class="btn-group">
                                                                    <button onclick="updateService(this)" id="<?= $service['id'] ?>_New" class="btn btn-primary btn-xs">New</button>
                                                                    <button onclick="updateService(this)" id="<?= $service['id'] ?>_Done" class="btn btn-success btn-xs">Done</button>
                                                                    <button onclick="updateService(this)" id="<?= $service['id'] ?>_Pending" class="btn btn-warning btn-xs">Pending</button>
                                                                </div> -->
                                                            </td>
                                                        </tr>
                                                        <?php $count++; ?>
                                                    <?php endforeach; ?>
                                                <?php } ?>
                                                <tr class="input-group-sm">
                                                    <td></td>
                                                    <td><select id="service_catagory"  class="form-control input-sm" onchange="select_options(this)">
                                                            <option>Select Catagory .. </option>
                                                            <?php if (isset($cats)) { ?>
                                                                <?php foreach($cats as $item): ?>
                                                                    <option value="<?= $item['Content'] ?>"><?= $item['Content'] ?></option>
                                                                <?php endforeach; ?>
                                                            <?php } ?>
                                                        </select></td>
                                                    <td width="15cm"><select id="service_spec" type="text" class="form-control input-sm"></select></td>
                                                    <td><select name="" id="requester" class="form-control input-sm">
                                                            <option></option>
                                                            <option value="Customer">Customer</option>
                                                            <option value="Professional">Professional</option>
                                                        </select>
                                                    </td>
                                                    <td width="10cm"><input id="due_date" type="text" class="form-control input-sm"><span>
                                                    <td><input id="labor_time" type="text" class="form-control input-sm" placeholder="time duration in hrs.. .. "></td>
                                                    <td><select class="form-control select2" name="Employee" id="service_employee">
                                                            <option></option>
                                                            <?php foreach ($employees as $employee): ?>
                                                                <option value="<?= $employee['id'] ?>"><?= $employee['First_Name'].' '.$employee['Last_Name'] ?></option>
                                                            <?php endforeach; ?>
                                                        </select></td>
                                                    <td><textarea name="Remark" id="Remark_S" cols="20"
                                                                  rows="2"></textarea></td>
                                                    <td></td>
                                                    <td><button class="btn btn-primary btn-sm" onclick="service()"><i class="fa fa-plus"><span>Add</span></i></button></td>
                                                </tr>
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
                                            <tr>
                                                <td></td>
                                                <td><input id="name_m" type="text" class="form-control input-sm"></td>
                                                <td><input id="brand" type="text" class="form-control input-sm"></td>
                                                <td><input id="model" type="text" class="form-control input-sm"></td>
                                                <td><input id="quantity" type="text" class="form-control input-sm"><span>
                                                <td><input id="condition" type="text" class="form-control input-sm"></td>
                                                <td><button class="btn btn-primary btn-sm" onclick="material()"><i class="fa fa-plus"><span>Add</span></i></button></td>
                                            </tr>
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
                                                            <!--<input type="text" name="Employee_i" id="Employee_i" class="form-control input-sm" placeholder="Employee" value="<?/*= $inspection['Employee_id'] */?>">-->
                                                            <select class="form-control select2" name="Employee_i" id="Employee_i">
                                                                <option></option>
                                                                <?php foreach ($employees as $employee): ?>
                                                                    <option style="width: 250px" value="<?= $employee['id'] ?>"><?= $employee['First_Name'].' '.$employee['Last_Name'] ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="form-group">
                                                            <input type="Number" name="Payment_i" id="Payment_i" class="form-control input-sm" placeholder="Payement ... .." value="<?= $inspection['Payment'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="input-group">
                                                            <input id="Remark_i" name="Remark_i" type="text" class="form-control input-sm" placeholder="Remark .. .. " value="<?= $inspection['Remark'] ?>"><div class="input-group-btn">
                                                                <button id="ins_btn_2" class="btn btn-primary btn-sm" onclick="inspection_f()" type="button"> Update</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php }else{ ?>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class="form-group">
                                                        <input type="text" name="ins_id" id="ins_id" hidden>
                                                        <input type="text" name="Employee_i" id="Employee_i" class="form-control input-sm" placeholder="Employee">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class="form-group">
                                                        <input type="Number" name="Payment_i" id="Payment_i" class="form-control input-sm" placeholder="Payement ... ..">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class="input-group">
                                                        <input id="Remark_i" name="Remark_i" type="text" class="form-control input-sm" placeholder="Remark .. .. "><div class="input-group-btn">
                                                            <button id="ins_btn_2" class="btn btn-primary btn-sm" onclick="inspection_f()" type="button"> Go</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
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
                                            <tr>
                                                <td></td>
                                                <td><input id="name" type="text" class="form-control input-sm" ></td>
                                                <td><input id="c_status" type="text" class="form-control input-sm" ></td>
                                                <td><input id="f_status" type="text" class="form-control input-sm" ></td>
                                                <td><input id="remark" type="text" class="form-control input-sm "></td>
                                                <td><button id="ins_btn" class="btn btn-primary btn-sm" <?= $ins_status ?> onclick="inspection()" type="button"><i class="fa fa-plus"><span>Add</span></i></button></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="tab_4">
                                        <div class="box box-primary">
                                            <div class="box-body">
                                                <?php if (isset($estimation)) { ?>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="form-group">
                                                            <input type="text" name="est_id" id="est_id" hidden value="<?= $estimation['id'] ?>">
                                                            <!--<input type="text" id="Employee_e" name="Employee_e" class="form-control input-sm" placeholder="Employee .. .. " value="<?/*= $estimation['Employee_id'] */?>">-->
                                                            <select class="form-control select2" name="Employee_e" id="Employee_e">
                                                                <option></option>
                                                                <?php foreach ($employees as $employee): ?>
                                                                    <option style="width: 250px" value="<?= $employee['id'] ?>"><?= $employee['First_Name'].' '.$employee['Last_Name'] ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="form-group">
                                                            <input type="Number" name="Payment_e" id="Payment_e" class="form-control input-sm" placeholder="Payement .. .. " value="<?= $estimation['Payment'] ?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="input-group">
                                                            <input id="Remark_e_e" name="Remark_e_e" type="text" class="form-control input-sm" placeholder="Remark .. .. " value="<?= $estimation['Remark'] ?>"><div class="input-group-btn">
                                                                <button id="est_btn_2" class="btn btn-primary btn-sm" onclick="estimation_f()" type="button"> Update</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php }else{ ?>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="form-group">
                                                            <input type="text" name="est_id" id="est_id" hidden>
                                                            <input type="text" id="Employee_e" name="Employee_e" class="form-control input-sm" placeholder="Employee .. .. ">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="form-group">
                                                            <input type="Number" name="Payment_e" id="Payment_e" class="form-control input-sm" placeholder="Payement .. .. ">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="input-group">
                                                            <input id="Remark_e_e" name="Remark_e_e" type="text" class="form-control input-sm" placeholder="Remark .. .. "><div class="input-group-btn">
                                                                <button id="est_btn_2" class="btn btn-primary btn-sm" onclick="estimation_f()" type="button"> Go</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
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
                                            <tr>
                                                <td></td>
                                                <td><input id="name_e" type="text" class="form-control input-sm"></td>
                                                <td><input id="c_status_e" type="text" class="form-control input-sm"></td>
                                                <td><input id="f_status_e" type="text" class="form-control input-sm"></td>
                                                <td><input id="remark_e" type="text" class="form-control input-sm"></td>
                                                <td><button id="est_btn" class="btn btn-primary btn-sm" <?= $est_status ?> onclick="estimation()" type="button"><i class="fa fa-plus"><span>Add</span></i></button></td>
                                            </tr>
                                            </tbody>
                                        </table>
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
                                            <tr>
                                                <td></td>
                                                <td><input id="name_t" type="text" class="form-control input-sm"></td>
                                                <td><input id="brand_t" type="text" class="form-control input-sm"></td>
                                                <td><input id="model_t" type="text" class="form-control input-sm"></td>
                                                <td><input id="size_t" type="text" class="form-control input-sm"></td>
                                                <td><input id="remark_t" type="text" class="form-control input-sm"></td>
                                                <td><button class="btn btn-primary btn-sm" type="button" onclick="tools()">Add</button></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="tab_6">
                                        <?php if (!empty($pics)) { $count = 'active';?>
                                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <?php foreach($pics as $pic): ?>
                                                        <div class="item <?= $count ?>" id="img">
                                                            <img src="<?= base_url('uploads').'/'.$pic['picture'] ?>" alt="<?= $pic['type'] ?>" style="height:250px; position: relative; width: auto; ">
                                                        </div>
                                                <?php $count = ''; endforeach; ?>
                                            </div>
                                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                        <?php }else{ ?>
                                            <div class="alert alert-info alert-dismissible">
                                                <h2>No Images were Found <small>you can upload images if you want right
                                                        <a href="<?= base_url('image/?id='.$info['id']) ?>" target="_blank">Here!</a></small></h2>
                                            </div>
                                        <?php } ?>
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
<?php $this->load->view('templates/footer') ?>
<script type="text/javascript">
    var e = <?= (int)$count_e - 1 ?>;
    var i = <?= (int)$count_i - 1 ?>;
    var m = <?= (int)$count_m - 1 ?>;
    var t = <?= (int)$count_t - 1 ?>;
    var s = <?= (int)$count - 1 ?>;
    var old = document.getElementById('payment').value;
    var stat = <?= (int)$stat_counter ?>;
    if (window.XMLHttpRequest) {
        // code for modern browsers
            xmlhttp = new XMLHttpRequest();
        } else {
        // code for old IE browsers
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
    function tools()
    {
        var table = $('#datatable-buttons-2').DataTable();
        var input1 = document.getElementById('name_t').value;
        var input2 = document.getElementById('brand_t').value;
        var input3 = document.getElementById('model_t').value;
        var input4 = document.getElementById('size_t').value;
        var input5 = document.getElementById('remark_t').value;
        document.getElementById('name_t').value = '';
        document.getElementById('brand_t').value = '';
        document.getElementById('model_t').value = '';
        document.getElementById('size_t').value = '';
        document.getElementById('remark_t').value = '';
        xmlhttp.open("POST", "http://localhost/GMS/ajax/new_tool/", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("name="+input1+"&brand="+input2+"&model="+input3+"&size="+input4+"&remark="+input5+"&card_id="+<?= $info['id'] ?>);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200)
            {
                var arr = this.responseText.split('_#_');
                table.row.add([
                    t,
                    arr[0],
                    arr[1],
                    arr[2],
                    arr[3],
                    arr[4],
                    ''
                ]).draw(false);
            }
        };
        t++;
    }
    function inspection()
    {
        var table = $('#example2').DataTable();
        var input1 = document.getElementById('name').value;
        var input2 = document.getElementById('c_status').value;
        var input3 = document.getElementById('f_status').value;
        var input4 = document.getElementById('remark').value;
        var input5 = document.getElementById('ins_id').value;
        document.getElementById('name').value = '';
        document.getElementById('c_status').value = '';
        document.getElementById('f_status').value = '';
        document.getElementById('remark').value = '';
        xmlhttp.open("POST", "http://localhost/GMS/ajax/new_inspection/", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("name="+input1+"&status="+input2+"&f_status="+input3+"&remark="+input4+"&card_id="+<?= $info['id'] ?>+"&ins_id="+input5);
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
              var arr = this.responseText.split('_#_');
              console.log(arr);
              table.row.add([
                  i,
                  arr[0],
                  arr[1],
                  arr[2],
                  arr[3],
                  ''
              ]).draw(false);
          }
        };
        i++;
    }
    function estimation()
    {
        var table = $('#example1').DataTable();
        var input1 = document.getElementById('name_e').value;
        var input2 = document.getElementById('c_status_e').value;
        var input3 = document.getElementById('f_status_e').value;
        var input4 = document.getElementById('remark_e').value;
        var input5 = document.getElementById('est_id').value;
        document.getElementById('name_e').value = '';
        document.getElementById('c_status_e').value = '';
        document.getElementById('f_status_e').value = '';
        document.getElementById('remark_e').value = '';
        xmlhttp.open("POST", "http://localhost/GMS/ajax/new_estimation/", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("name="+input1+"&status="+input2+"&f_status="+input3+"&remark="+input4+"&card_id="+<?= $info['id'] ?>+"&est_id="+input5);
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            var arr = this.responseText.split('_#_');
            console.log(arr);
            table.row.add([
                e,
                arr[0],
                arr[1],
                arr[2],
                arr[3],
                ''
            ]).draw(false);
          }
        };
        e++;
    }
    function material()
    {
        var table = $('#datatable-buttons-1').DataTable();
        var input1 = document.getElementById('name_m').value;
        var input2 = document.getElementById('brand').value;
        var input3 = document.getElementById('model').value;
        var input4 = document.getElementById('quantity').value;
        var input5 = document.getElementById('condition').value;
        document.getElementById('name_m').value = '';
        document.getElementById('brand').value = '';
        document.getElementById('model').value = '';
        document.getElementById('quantity').value = '';
        document.getElementById('condition').value = '';
        xmlhttp.open("POST", "http://localhost/GMS/ajax/new_material/", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("Name="+input1+"&Brand="+input2+"&Model="+input3+"&Quantity="+input4+"&Material_Status="+input5+"&card_id="+<?= $info['id'] ?>);
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
              var arr = this.responseText.split('_#_');
              console.log(arr);
              table.row.add([
                  m,
                  arr[0],
                  arr[1],
                  arr[2],
                  arr[3],
                  arr[4],
                  'Pending'
              ]).draw(false);
          }
        };
        m++;
    }
    function estimation_f()
    {
        var input1 = document.getElementById('Employee_e').value;
        var input2 = document.getElementById('Payment_e').value;
        var input3 = document.getElementById('Remark_e_e').value;
        xmlhttp.open("POST", "http://localhost/GMS/ajax/start_est/", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("employee="+input1+"&payment="+input2+"&remark="+input3+"&card_id="+<?= $info['id']?> );
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var arr = this.responseText;
                /*document.getElementById('est_btn').setAttribute('disabled',false);*/
                $('#est_btn').prop('disabled', false);
                console.log(arr);
            }
        }
    }
    function inspection_f()
    {
        var input1 = document.getElementById('Employee_i').value;
        var input2 = document.getElementById('Payment_i').value;
        var input3 = document.getElementById('Remark_i').value;
        console.log(input1);
        xmlhttp.open("POST", "http://localhost/GMS/ajax/start_ins/", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("employee="+input1+"&payment="+input2+"&remark="+input3+"&card_id="+<?= $info['id'] ?>);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var arr = this.responseText.split('_#_');
                /*document.getElementById('ins_btn').setAttribute('disabled',false);*/
                $('#ins_btn').prop('disabled', false);
                console.log(arr);
            }
        }
    }
    function updateService(element)
    {
        var arr = element.id.split('_');
        /*console.log(window.stat);*/
        var pre_stat = document.getElementById('service_status_'+ element.id).textContent;
        console.log(pre_stat);
        console.log(element.value);
        console.log(stat+' this is the before');
        xmlhttp.open("POST", "http://localhost/GMS/ajax/update_service/", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("id="+element.id+"&status="+element.value);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById('service_status_'+ element.id).innerHTML = this.responseText;
                /*console.log(this.responseText);*/
                if (element.value == 'Finished' || element.value === 'Canceled' )
                {
                    if (pre_stat != 'Finished' && pre_stat != 'Canceled')
                    {
                        if(stat > 0)
                        {
                            stat = stat - 1;
                        }
                        /*console.log(stat);*/
                    }
                }
                if (pre_stat === 'Finished' || pre_stat === 'Canceled')
                {
                    if (element.value != 'Finished' && element.value != 'Canceled')
                    {
                        stat = stat + 1;
                    }
                }
            }
        }
        console.log(stat + ' this is the after');
    }
    function service()
    {
        var employee = new Array();
        employee = <?php echo json_encode($employees); ?>;
        console.log(employee);
        var table = $('#example3').DataTable();
        var service_catagory = document.getElementById('service_catagory').value;
        var labor_time = document.getElementById('labor_time').value;
        var employee_id = document.getElementById('service_employee').value;
        var service_spec = document.getElementById('service_spec').value;
        var requester = document.getElementById('requester').value;
        var due_date = document.getElementById('due_date').value;
        var remark = document.getElementById('Remark_S').value;
        document.getElementById('service_catagory').value= '';
        document.getElementById('labor_time').value = '';
        document.getElementById('service_employee').value = '';
        document.getElementById('service_spec').value = '';
        document.getElementById('requester').value = '';
        document.getElementById('due_date').value = '';
        document.getElementById('Remark_S').value = '';
        xmlhttp.open("POST", "http://localhost/GMS/ajax/new_service/", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("Catagory="+service_catagory+"&Spec="+service_spec+"&Labor_Time="+labor_time+"&Type="+requester+"&Due_Date="+due_date+"&remark="+remark+"&Employee_id="+employee_id+"&card_id="+<?= $info['id'] ?>);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var arr = this.responseText.split('_');
                for (i = 0; i < employee.length; i++)
                {
                    if (employee[i]['id'] == arr[5]){
                        var name = employee[i]['First_Name']+' '+employee[i]['Last_Name'];
                    }
                }
                table.row.add([
                    s,
                    arr[0],
                    arr[1],
                    arr[2],
                    arr[3],
                    "<input class=\"form-control\" type=\"text\" value=\""+arr[4]+"\">",
                    name,
                    arr[6],
                    'New',
                    "<select class=\"form-control\" onchange=\"updateService(this)\">\n" +
                    "    <option value=\"New\">New</option>\n" +
                    "    <option value=\"Started\">Started</option>\n" +
                    "    <option value=\"Pending\">Pending</option>\n" +
                    "    <option value=\"Finishing\">Finishing</option>\n" +
                    "    <option value=\"Finished\">Finished</option>\n" +
                    "    <option value=\"Cancled\">Cancle</option>\n" +
                    "</select>"
                ]).draw(false);
            }
        };
        s++;
    }
    function labout_update(element)
    {
        var arr = element.id;
        xmlhttp.open("POST", "http://localhost/GMS/ajax/update_labor/", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("id="+arr+"&labor="+element.value);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById('service_status_'+ arr[0]).innerHTML = this.responseText;
                console.log(this.responseText);
            }
        }
    }
    function terminate(element)
    {
        var arr = element.id;
        if (window.stat == 0) {
            xmlhttp.open("POST", "http://localhost/GMS/ajax/terminate_card/", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("id="+element.id);
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    alert("Card with an id "+arr+" Terminated!!");
                    window.location = "<?= base_url().'vehicles/job_card/?id=' ?>"+arr;
                }
            }
        }else{
            alert("There is an unfinished service on this card !!");
        }
    }
    function payment(element)
    {
        var new_val = element.value;
        var r = confirm("You are gonna update the cost to " + new_val+" ETB");
        if (r == true) {
            xmlhttp.open("POST", "http://localhost/GMS/ajax/update_payment/", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("payment="+new_val+"&card_id="+<?= $info['id'] ?>);
            xmlhttp.onreadystatechange = function() {

            }
            old = new_val;
        }else{
             element.value = old;
        }
    }
    function select_options(element)
    {
        var val = element.value;
        var $option = $('#service_spec');
        $option.find('option').remove().end();
        $option.append($("<option />").val('').text('Select '+ val));
        xmlhttp.open("POST", "http://localhost/GMS/ajax/select_options/", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("val="+val);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var arr1 = this.responseText.split('*#*');
                for (i = 0; i < arr1.length; i++)
                {
                    var arr2 = arr1[i].split('_#_');
                    $option.append($("<option />").val(arr2[1]).text(arr2[1]));
                }
            }
        };
    }
</script>
<script type="text/javascript">
    for (var i = 1; i < 21; i++) {
    $('#demo_'+i).daterangepicker({
        "singleDatePicker":true,
        "showWeekNumbers":true,
        "autoApply":true,
    });
    }/*due_date*/
    $('#due_date').daterangepicker({
        "singleDatePicker":true,
        "showWeekNumbers":true,
        "autoApply":true,
    });
</script>
