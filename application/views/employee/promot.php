<?php $this->load->view('templates/header') ?>
<section class="content-header">
    <h1>
        Promote Employee
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Employee</li>
        <li class="active">Promote Employee</li>
    </ol>
</section>
<section class="content">
    <div class="row container-fluid">
        <form action="<?= base_url() ?>employee/pro_update/" method="post" class="form-horizontal">
            <div class="box box-primary">
                <div class="box-header">
                    <div class="box-title">Promotion Form</div>
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
                                        <input type="text" name="First_Name" class="form-control input-sm" placeholder="First Name *" value="<?= $employee['First_Name'] ?>"  readonly>
                                    </div>
                                    <div class="form-group col-lg-5 col-md-5 col-sm-5">
                                        <input type="text" name="Middle_Name" class="form-control input-sm" placeholder="Middle Name *" value="<?= $employee['Middle_Name'] ?>"  readonly>
                                    </div>
                                    <div class="form-group col-lg-4 col-md-4 col-sm-4">
                                        <input type="text" name="Last_Name" class="form-control input-sm" placeholder="Last Name *" value="<?= $employee['Last_Name'] ?>"  readonly>
                                    </div>
                                </div>
                                <div class="input-group col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group col-lg-7 col-md-7 col-sm-7">
                                        <input type="tel" name="Phone" class="form-control input-sm" placeholder="Phone *" value="<?= $employee['Phone'] ?>"  readonly>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                        <input type="email" name="Email" class="form-control input-sm" placeholder="Email" value="<?= $employee['Email'] ?>" readonly>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <div class="form-group">
                                        <label for="" class="label label-default">Entry Date *</label>
                                        <input type="date" name="Entry_Date" class="form-control input-sm" value="<?= $employee['Entry_Date'] ?>"  readonly>
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
                                        <input type="text" name="Position" class="form-control input-sm" placeholder="Position *" value="<?= $employee['Position'] ?>" required>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <div class="form-group">
                                        <input type="text" name="Salary" class="form-control input-sm" placeholder="Salary * " value="<?= $employee['Salary'] ?>" required>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <div class="form-group">
                                        <label for="" class="label label-default">Start Date</label>
                                        <input type="date" name="Start_Date" class="form-control input-sm" placeholder="Start Date" value="<?= date('Y-m-d') ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="box box-primary">
                            <div class="box-header">
                                <div class="box-title">Educational Background</div>
                            </div>
                            <div class="box-body">
                                <table class="table table-condensed table-stripped" id="table_1">
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
                                                <td><input type="text" name="Educational_Level_<?= $count ?>" id="" class="form-control input-sm" placeholder="Educational Level * " value="<?= $item['Level'] ?>" readonly></td>
                                                <td><input type="text" name="Field_Study_<?= $count ?>" id="" class="form-control input-sm" placeholder="Field of Study * " value="<?= $item['Field'] ?>" readonly></td>
                                                <td><input type="text" name="Educational_Intitute_<?= $count ?>" id="" class="form-control input-sm" placeholder="Educational Institute * " value="<?= $item['Institution'] ?>" readonly></td>
                                                <td><input type="text" name="Final_Grade_<?= $count ?>" id="" class="form-control input-sm" placeholder="Final Grade * " value="<?= $item['Final_Grade'] ?>" readonly></td>
                                            </tr>
                                            <?php $count++; endforeach; ?>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <div class="col-lg-offset-4 col-md-offset-4 col-sm-offset-4">
                        <button class="btn btn-warning col-lg-2 col-md-2 col-sm-2" type="reset">Clear</button>
                        <button class="btn btn-success col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-2 col-md-2 col-sm-2" type="submit">Promote</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<?php $this->load->view('templates/footer') ?>
<script>
    var max_1 = <?= (int)$count - 1 ?>;
    $("#table_1 > tbody > tr").hide().slice(0,max_1).show();
    $(".add_1").on("click",function () {
        max_1 = max_1 + 1;
        $("tbody > tr", $(this).prev()).slice(0,max_1).show();
    });
</script>
