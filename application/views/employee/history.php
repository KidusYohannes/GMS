<?php $this->load->view('templates/header') ?>
<section class="content-header">
    <h1>
        Employee History
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Employee</li>
        <li class="active">Employee History</li>
    </ol>
</section>
<section class="content">
    <div class="row container-fluid">
        <form class="form-horizontal">
            <div class="box box-primary">
                <div class="box-header">
                    <div class="box-title">Employee History</div>
                </div>
                <div class="box-body">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="box box-primary">
                            <div class="box-header">
                                <div class="box-title">Basic Info</div>
                            </div>
                            <div class="box-body">
                                <div class="input-group col-lg-12 col-md-12 col-sm-12 container-fluid">
                                    <div class="form-group col-lg-5 col-md-5 col-sm-5">
                                        <input type="text" name="id" id="" value="<?= $employee['id'] ?>" hidden>
                                        <input type="text" name="First_Name" class="form-control input-sm" placeholder="First Name *" value="<?= $employee['First_Name'] ?>" readonly>
                                    </div>
                                    <div class="form-group col-lg-5 col-md-5 col-sm-5">
                                        <input type="text" name="Middle_Name" class="form-control input-sm" placeholder="Middle Name *" value="<?= $employee['Middle_Name'] ?>" readonly>
                                    </div>
                                    <div class="form-group col-lg-4 col-md-4 col-sm-4">
                                        <input type="text" name="Last_Name" class="form-control input-sm" placeholder="Last Name *" value="<?= $employee['Last_Name'] ?>" readonly>
                                    </div>
                                </div>
                                <div class="input-group col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group col-lg-7 col-md-7 col-sm-7">
                                        <input type="tel" name="Phone" class="form-control input-sm" placeholder="Phone *" value="<?= $employee['Phone'] ?>" readonly>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                        <input type="email" name="Email" class="form-control input-sm" placeholder="Email" value="<?= $employee['Email'] ?>"readonly>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <div class="form-group">
                                        <label for="" class="label label-default">Entry Date *</label>
                                        <input type="date" name="Entry_Date" class="form-control input-sm" value="<?= $employee['Entry_Date'] ?>" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="box box-primary">
                            <div class="box-header">
                                <div class="box-title">Position Info</div>
                            </div>
                            <div class="box-body">
                                <div class="container-fluid">
                                    <div class="form-group">
                                        <input type="text" name="Position" class="form-control input-sm" placeholder="Position *" value="<?= $employee['Position'] ?>"  readonly>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <div class="form-group">
                                        <input type="text" name="Salary" class="form-control input-sm" placeholder="Salary * " value="<?= $employee['Salary'] ?>"  readonly>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <div class="form-group">
                                        <label for="" class="label label-default">Start Date</label>
                                        <input type="date" name="Start_Date" class="form-control input-sm" placeholder="Start Date" value="<?= $history['Start_Date'] ?>" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="box box-primary">
                            <div class="nav-tabs-custom">
                                <div class="box-header">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#tab_1" data-toggle="tab">Employee History</a></li>
                                        <li><a href="#tab_2" data-toggle="tab">Educational Background</a></li>
                                        <li><a href="#tab_3" data-toggle="tab">Perivious Work Eperience</a></li>
                                    </ul>
                                </div>
                                <div class="box-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_1">
                                            <table class="table-condensed table-stripped" id="example2">
                                                <thead>
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Position</th>
                                                    <th>Salary</th>
                                                    <th>Start Date</th>
                                                    <th>Status</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php if (isset($histor)){ $count = 1; ?>
                                                <?php foreach ($histor as $item): ?>
                                                        <tr>
                                                            <td><?= $count ?></td>
                                                            <td><?= $item['Position'] ?></td>
                                                            <td><?= $item['Salary'] ?></td>
                                                            <td><?= $item['Start_Date'] ?></td>
                                                            <td><?= $item['Status'] ?></td>
                                                        </tr>
                                                <?php $count++; endforeach; ?>
                                                <?php }?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="tab_2">
                                            <table class="table table-condensed table-stripped" id="example2">
                                                <thead>
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Educational Level</th>
                                                    <th>Field Of Study</th>
                                                    <th>Educational Institute</th>
                                                    <th>Final Grade</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php  $count = 1; if (isset($edus)) {?>
                                                    <?php foreach ($edus as $item): ?>
                                                        <tr>
                                                            <input type="text" name="Edu_id_<?= $count ?>" id="" value="<?= $item['id'] ?>" hidden>
                                                            <td><?= $count ?></td>
                                                            <td><?= $item['Level'] ?></td>
                                                            <td><?= $item['Field'] ?></td>
                                                            <td><?= $item['Institution'] ?></td>
                                                            <td><?= $item['Final_Grade'] ?></td>
                                                        </tr>
                                                        <?php $count++; endforeach; ?>
                                                <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="tab_3">
                                            <table class="table table-condensed table-stripped" id="table_2">
                                            <thead>
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Organization Name</th>
                                                    <th>Position</th>
                                                    <th>Period of Time</th>
                                                    <th>Remark</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php  $count = 1; if (isset($exps)) {?>
                                                    <?php foreach ($exps as $item): ?>
                                                        <tr>
                                                            <td><?= $count ?></td>
                                                            <td><?= $item['Organization'] ?></td>
                                                            <td><?= $item['Position'] ?></td>
                                                            <td><?= $item['Period'] ?></td>
                                                            <td><?= $item['Remark'] ?></td>
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
            </div>
        </form>
    </div>
</section>
<?php $this->load->view('templates/footer') ?>
