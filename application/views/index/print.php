<?php $this->load->view('templates/header',$title) ?>
<!--suppress ALL -->
<section class="content-header invoice-title">
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
<section class="content invoice">
    <div class="row container-fluid">
        <div>
            <div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="box box-primary">
                        <div class="box-body">
                            <div class="form-group col-sm-4 invoice-col">
                                <label for="" class="col-lg-8 col-md-8 col-sm-8">Job Card Number</label>
                                <div class="col-lg-4 col-md-4 col-sm-4"><?= $info['id'] ?></div>
                            </div>
                            <div class="form-group col-sm-4 invoice-col">
                                <label for="" class="col-lg-6 col-md-6 col-sm-6">Total Payment</label>
                                <div class="col-lg-4 col-md-4 col-sm-4"><?= $info['id'] ?></div>
                            </div>
                            <div class="form-group col-sm-4 invoice-col">
                                <label for="" class="col-lg-8 col-md-8 col-sm-8">Days</label>
                                <div class="col-lg-4 col-md-4 col-sm-4"><?= round((strtotime($info['Release_Date']) - strtotime($info['Receive_Date'])) / (60 * 60 * 24),0).' Days' ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="col-lg-6 col-md-6 col-sm-6 invoice-col">
                        <div id="accordion1">
                            <div class="box box-primary">
                                <div class="box-header"><a data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo">Customer ID: <?= $info['Customer_ID'] ?></a></div>
                                <div id="collapseOTwo" class="panel-collapse collapse">
                                    <div class="box-body form-horizontal">
                                        <div class="form-group">
                                            <div class="col-lg-8 col-md-8col-sm-8" id="first"><?= $info['First_Name'] .' '. $info['Last_Name'] ?></div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-8 col-md-8 col-sm-8"><?= $info['Phone'] ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 invoice-col">
                        <div id="accordion">
                            <div class="box box-primary">
                                <div class="box-header"><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Plate No: <?= $info['Plate_No'] ?></a></div>
                                <div id="collapseOne" class="panel-collapse collapse">
                                    <div class="box-body form-horizontal">
                                        <div class="col-lg-6 col-md-6 col-sm-6 form-group">
                                            <div class="col-lg-8 col-md-8 col-sm-8"><?= $info['Model'] ?></div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 form-group">
                                            <div class="col-lg-8 col-md-8 col-sm-8"><?= $info['Make'] ?></div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 form-group">
                                            <div class="col-lg-8 col-md-8 col-sm-8"><?= $info['Year'] ?></div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 form-group">
                                            <div class="col-lg-8 col-md-8 col-sm-8"><?= $info['Color'] ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $count = 1; if (!empty($services)) {  ?>
                <div class="col-lg-12">
                    <div class="box box-default">
                        <div class="box-header">
                            <div class="box-title">
                                Services
                            </div>
                        </div>
                        <div class="box-body">
                            <table class="table table-hover table-condensed">
                                <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Category</th>
                                    <th>Specification</th>
                                    <th>Requester</th>
                                    <th>Due Date</th>
                                    <th>Labor Time</th>
                                    <th>Employee</th>
                                    <th>Remark</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($services as $service) : ?>
                                        <tr>
                                            <td><?= $count ?></td>
                                            <td><?= $service['Catagory'] ?></td>
                                            <td width="15cm"><?= $service['Service'] ?></td>
                                            <td><?= $service['Type'] ?></td>
                                            <td width="10cm"><?= $service['Due_Date'] ?></td>
                                            <td><?= $service['Labor_Time'] ?></td>
                                            <td>
                                                <select class="form-control" disabled name="Employee_Service" id="">
                                                    <option></option>
                                                    <?php foreach ($employees as $employee): if ($service['Employee_id']==$employee['id']){$dis = 'selected';}else{$dis = '';} ?>
                                                        <option value="<?= $employee['id'] ?>" <?= $dis ?>><?= $employee['First_Name'].' '.$employee['Last_Name'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            <td><?= $service['Remark'] ?></td>
                                            <td id="service_status_<?= $service['id'] ?>"><?= $service['Status'] ?></td>
                                        </tr>
                                        <?php $count++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <?php $count_m = 1;  if (!empty($materials)) {  ?>
                <div class="col-lg-12">
                    <div class="box box-primary">
                        <div class="box-header"><div class="box-title">Materials</div></div>
                    </div>
                    <div class="box-body">
                        <table class="table table-hover table-condensed">
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
                </div>
                <?php } ?>
                <?php $count_i = 1; if (!empty($ins_parts)) { ?>
                <div class="col-lg-12">
                    <div class="box box-primary">
                        <div class="box-header"><div class="box-title">Inspected Parts</div></div>
                    </div>
                    <div class="box-body">
                        <table class="table table-hover table-condensed">
                            <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Name</th>
                                <th>Current Status</th>
                                <th>Operation</th>
                                <th>Remark</th>
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
                                    </tr>
                                    <?php $count_i++; ?>
                                <?php endforeach; ?>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <?php } ?>
                <?php $count_e = 1; if (!empty($est_parts)) { ?>
                <div class="col-lg-12">
                    <div class="box box-header">
                        <div class="box-header"><div class="box-title">Estimated Parts</div></div>
                    </div>
                    <div class="box-body">
                        <table class="table table-hover table-condensed">
                            <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Name</th>
                                <th>Current Status</th>
                                <th>Operation</th>
                                <th>Remark</th>
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
                                    </tr>
                                    <?php $count_e++; ?>
                                <?php endforeach; ?>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <?php } ?>
                <?php $count_t = 1; if (!empty($tools)) {  ?>
                <div class="col-lg-12">
                    <div class="box box-primary">
                        <div class="box-header"><div class="box-title">Customer Tools</div> </div>
                    </div>
                    <div class="box-body">
                        <table class="table table-hover table-condensed">
                            <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Name</th>
                                <th>Brand</th>
                                <th>Model</th>
                                <th>Size</th>
                                <th>Remark</th>
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
                                    </tr>
                                    <?php $count_t++; ?>
                                <?php endforeach; ?>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <?php } ?>
                <button class="btn btn-primary btn-sm" onclick="window.print();">Print</button>
            </div>
        </div>
    </div>
    </div>
</section>
<?php $this->load->view('templates/footer') ?>
