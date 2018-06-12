<?php $this->load->view('templates/header') ?>
<section class="content-header">
    <h1>
        Vehicle History
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Vehicles</li>
        <li class="active">History</li>
    </ol>
</section>
<section class="content">
    <div class="row container-fluid">
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
            </div>
        </div>
        <div class="box box-primary">
            <div class="nav-tabs-custom">
                <div class="box-header">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab">Services</a></li>
                        <li><a href="#tab_2" data-toggle="tab">Estimation</a></li>
                        <li><a href="#tab_3" data-toggle="tab">Inspection</a></li>
                    </ul>
                </div>
                <div class="box-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                            <table class="table table-hover table-condensed" id="datatable-buttons-2">
                                <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Job Card</th>
                                    <th>Category</th>
                                    <th>Services</th>
                                    <th>Due Date</th>
                                    <th>Labor Time</th>
                                    <th>Employee</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if (isset($services)) { $count = 1; ?>
                                    <?php foreach ($services as $service) : ?>
                                        <tr>
                                            <td><?= $count ?></td>
                                            <td><?= $service['Card_id'] ?></td>
                                            <td><?= $service['Catagory'] ?></td>
                                            <td><?= $service['Service'] ?></td>
                                            <td><?= $service['Due_Date'] ?></td>
                                            <td><?= $service['Labor_Time'] ?></td>
                                            <td><?= $service['Employee_id'] ?></td>
                                            <td><?= $service['Status'] ?></td>
                                        </tr>
                                        <?php $count++; ?>
                                    <?php endforeach; ?>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="tab_2">
                            <?php if(isset($estimations)){$count = 1; ?>
                                <table style="width: 100%" class="table table-hover table-condensed table-bordered" id="datatable-buttons">
                                    <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Card No</th>
                                        <th>Part</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        <th>Employee</th>
                                        <th>Remark</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                            <?php foreach ($estimations as $item): ?>
                                <tr>
                                    <td><?= $count ?></td>
                                    <td><?= $item['Card'] ?></td>
                                    <td><?= $item['Part'] ?></td>
                                    <td><?= $item['C_Status'] ?></td>
                                    <td><?= $item['C_Action'] ?></td>
                                    <td><?= $item['F_name'].' '.$item['L_name'] ?></td>
                                    <td><?= $item['C_Remark'] ?></td>
                                </tr>
                            <?php $count++; endforeach; ?>
                                    </tbody>
                                </table>
                            <?php } ?>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_3">
                            <?php if(isset($inspections)){ $count = 1; ?>
                                <div class="table-responsive">
                                    <table style="width: 100%" class="table table-condensed table-hover table-bordered" id="datatable-buttons-1">
                                        <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Card No</th>
                                            <th>Part</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                            <th>Employee</th>
                                            <th>Remark</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($inspections as $item): ?>
                                            <tr>
                                                <td><?= $count ?></td>
                                                <td><?= $item['Card'] ?></td>
                                                <td><?= $item['Part'] ?></td>
                                                <td><?= $item['C_Status'] ?></td>
                                                <td><?= $item['C_Action'] ?></td>
                                                <td><?= $item['F_name'].' '.$item['L_name'] ?></td>
                                                <td><?= $item['C_Remark'] ?></td>
                                            </tr>
                                            <?php $count++; endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('templates/footer') ?>