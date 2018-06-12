<?php $this->load->view('templates/header'); ?>
    <section class="content-header">
        <h1>
            Income And Expense
            <small>Report for Income And Expense between <b><?= date('Y-m-d', strtotime($start)) ?></b> and <b><?= date('Y-m-d', strtotime($end)) ?></b></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Reports</li>
            <li class="active">Customers</li>
        </ol>
    </section>
    <section class="content">
        <div class="row container-fluid">
                <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="panel panel-primary">
                            <div class="nav-tabs-custom">
                                <div class="panel-heading">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#tab_1" data-toggle="tab">Income</a></li>
                                        <li><a href="#tab_2" data-toggle="tab">Expense</a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_1">
                                            <table class="table table-condensed table-bordered" id="datatable-buttons-2">
                                                <thead>
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Card No</th>
                                                    <th>Received Date</th>
                                                    <th>Release Date</th>
                                                    <th>Cost</th>
                                                    <th>Remark</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php if (isset($income)) { $count = 1;?>
                                                <?php foreach($income as $item): while (strlen($item['id']) < 4){
                                                        $item['id'] = '0'.$item['id'];
                                                    } ?>
                                                        <tr>
                                                            <td><?= $count ?></td>
                                                            <td><?= $item['id'] ?></td>
                                                            <td><?= date('Y-m-d', strtotime($item['Receive_Date'])) ?></td>
                                                            <td><?= date('Y-m-d', strtotime($item['Release_Date'])) ?></td>
                                                            <td><?= $item['Payment'] ?></td>
                                                            <td><?= $item['Status'] ?></td>
                                                        </tr>
                                                <?php $count++; endforeach; ?>
                                                <?php } ?>
                                                </tbody>
                                            </table>
                                            <!--<div class="well">
                                                <?php /*var_dump($income); */?>
                                            </div>-->
                                        </div>
                                        <div class="tab-pane" id="tab_2">
                                            <table class="table table-condensed table-bordered" id="datatable-buttons-1">
                                                <thead>
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Card No</th>
                                                    <th>Date</th>
                                                    <th>Name</th>
                                                    <th>Brand</th>
                                                    <th>Model</th>
                                                    <th>Cost</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php if (isset($expense)) {$count = 1;?>
                                                <?php foreach($expense as $item): while (strlen($item['Card_id']) < 4){
                                                        $item['Card_id'] = '0'.$item['Card_id'];
                                                    } ?>
                                                        <tr>
                                                            <td><?= $count ?></td>
                                                            <td><?= $item['Card_id'] ?></td>
                                                            <td><?= $item['date'] ?></td>
                                                            <td><?= $item['Name'] ?></td>
                                                            <td><?= $item['Brand'] ?></td>
                                                            <td><?= $item['Model'] ?></td>
                                                            <td><?= $item['Cost'] ?></td>
                                                        </tr>
                                                <?php $count++; endforeach; ?>
                                                <?php } ?>
                                                </tbody>
                                            </table>
                                            <!--<div class="well">
                                                <?php /*var_dump($expense); */?>
                                            </div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </section>
<?php $this->load->view('templates/footer'); ?>