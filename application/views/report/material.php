<?php $this->load->view('templates/header'); ?>
    <section class="content-header">
        <h1>
            Materials
            <small>Report for customers between <b><?= date('Y-m-d', strtotime($start)) ?></b> and <b><?= date('Y-m-d', strtotime($end)) ?></b></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Reports</li>
            <li class="active">Customers</li>
        </ol>
    </section>
    <section class="content">
        <div class="row container-fluid">
            <div class="box box-primary">
                <div class="box-header">

                </div>
                <div class="box-body">
                    <table class="table table-hover table-condensed" id="datatable-buttons-2">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Job Card</th>
                            <th>Name</th>
                            <th>Brand</th>
                            <th>Model</th>
                            <th>Quantity</th>
                            <th>Condition</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if (isset($materials)) {  $count = 1;?>
                            <?php foreach ($materials as $material): ?>
                                <tr>
                                    <td><?= $count ?></td>
                                    <td><?= $material['Card_id']?></td>
                                    <td><?= $material['Name'] ?></td>
                                    <td><?= $material['Brand'] ?></td>
                                    <td><?= $material['Model'] ?></td>
                                    <td><?= $material['Quantity'] ?></td>
                                    <td><?= $material['Material_Status'] ?></td>
                                    <td><?= $material['Status'] ?></td>
                                </tr>
                                <?php $count++; endforeach; ?>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="box-footer">

                </div>
            </div>
        </div>
    </section>
<?php $this->load->view('templates/footer'); ?>