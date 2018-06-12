<?php $this->load->view('templates/header') ?>
    <section class="content-header">
        <h1>
            Payroll
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Employee</li>
            <li class="active">Payroll</li>
        </ol>
    </section>
    <section class="content">
        <div class="row container-fluid">
            <div class="box box-primary">
                        <div class="box-header">
                            <div class="box-title">All Employee's List</div>
                            <div style="float: right;">
                                <a href="<?= base_url() ?>employee/add/" class="btn btn-primary btn-sm">Add New Employee <i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <table class="table table-condensed" id="datatable-buttons-1">
                                    <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Full Name</th>
                                        <th>Phone</th>
                                        <th>Position</th>
                                        <th>Salary</th>
                                        <th>Absents</th>
                                        <th>Salary After Attendance</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $count = 1; if (isset($employees)) { ?>
                                        <?php foreach ($employees as $employee): ?>
                                            <tr>
                                                <td><?= $count ?></td>
                                                <td><?= $employee['First_Name'].' '.$employee['Middle_Name']. ' '.$employee['Last_Name'] ?></td>
                                                <td><?= $employee['Phone'] ?></td>
                                                <td><?= $employee['Position'] ?></td>
                                                <td><?= $employee['Salary'] ?></td>
                                                <td><?= (int)$employee['Counter'] / 2 ?></td>
                                                <td><?= (int)$employee['Salary'] - (round(((int)$employee['Salary'] / 56), 2) * (int)$employee['Counter'])  ?></td>
                                            </tr>
                                            <?php $count++; endforeach;?>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
        </div>
    </section>
<?php $this->load->view('templates/footer') ?>