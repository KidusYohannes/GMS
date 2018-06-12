<?php $this->load->view('templates/header'); ?>
<section class="content-header">
    <h1>
        Customers
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
                        <th>Full Name</th>
                        <th>DOB</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Vehicles</th>
                        <th>Status</th>
                        <th>Operation</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if (isset($customers)) {  $count = 1;?>
                    <?php foreach ($customers as $customer): ?>
                            <tr>
                                <td><?= $count ?></td>
                                <td><?= $customer['First_Name'].' '.$customer['Last_Name'] ?></td>
                                <td><?= $customer['R_Date'] ?></td>
                                <td><?= $customer['Phone'] ?></td>
                                <td><?= $customer['R_Date'] ?></td>
                                <td><?= $customer['Counter'] ?></td>
                                <td>Active</td>
                                <td class="btn-group btn-xs">
                                    <a href="<?= base_url() ?>" class="btn btn-primary btn-xs">Add Vehicle</a>
                                    <a href="<?= base_url() ?>" class="btn btn-success btn-xs">Edit</a>
                                    <a href="<?= base_url() ?>" class="btn btn-warning btn-xs">Deactivate</a>
                                    <a href="<?= base_url() ?>" class="btn btn-danger btn-xs">Delete</a>
                                </td>
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