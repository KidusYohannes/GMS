<?php $this->load->view('templates/header', $cls) ?>
    <section class="content-header">
        <h1>
            Employee Attendance
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Employee</li>
            <li class="active">Attendance</li>
        </ol>
    </section>
    <section class="content">
        <div class="row container-fluid">
            <div class="box box-primary">
                <div class="box-header">
                    <div class="box-title">Legend</div>
                    <div class="col-lg-12 form-inline">
                        <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                            <label for="pr" class=>Pr</label> or <label for="pr" class="label label-primary"><i class="fa fa-check"></i></label>
                            <div id="pr" class="form-control">Present</div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                            <label for="ab">Ab</label> or <label for="ab" class="label label-primary">Ab</label>
                            <div id="ab" class="form-control">Absent</div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                            <label for="o" >O</label> or <label for="o" class="label label-primary">O</label>
                            <div id="o" class="form-control">Out For Work</div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                            <label for="p">P</label> or <label for="p" class="label label-primary">P</label>
                            <div id="p" class="form-control">: Permission</div>
                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-condensed" id="example1">
                            <thead>
                            <tr style="text-align: center;">
                                <th rowspan="2">Employee</th>
                                <?php for ($i = 1 ; $i <= cal_days_in_month(CAL_GREGORIAN, (int)date('m'), (int)date('Y'));$i++){ ?>
                                    <?php if ($i == $ck) { ?>
                                        <th colspan="2" style="background:#a3a3a3;"><?= $i ?></th>
                                    <?php }else{?>
                                        <th colspan="2"><?= $i ?></th>
                                    <?php }?>
                                <?php } ?>
                            </tr>
                            <tr>
                                <?php for ($i = 1 ; $i <= cal_days_in_month(CAL_GREGORIAN, (int)date('m'), (int)date('Y'));$i++){ ?>
                                    <?php if ($i == $ck) { ?>
                                        <th style="background:#a3a3a3;">M</th>
                                        <th style="background:#a3a3a3;">A</th>
                                    <?php }else{?>
                                        <th>M</th>
                                        <th>A</th>
                                    <?php }?>
                                <?php } ?>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if(isset($Employees)){ ?>
                                <?php foreach ($Employees as $employee): ?>
                                    <tr>
                                        <td><?= $employee['First_Name'].' '.$employee['Middle_Name'] ?></td>
                                        <?php  ?>
                                        <?php for ($i = 1 ; $i <= cal_days_in_month(CAL_GREGORIAN, (int)date('m'), (int)date('Y'));$i++){ ?>
                                            <?php if ($i == $ck){ ?>
                                                <?php if ($at_ck == 'true'){  ?>
                                                    <?php foreach ($attendance as $item): $count_1 = 0; ?>
                                                        <?php if($employee['id'] == $item['Employee_id'] && $ck == $item['Day'] && $item['Day_Time'] == '1') { $pr='';$ab='';$p='';$o='';if ($item['Status'] == 'Ab'){$ab='selected';}elseif ($item['Status']=='P'){$p='selected';}elseif ($item['Status']=='O'){$o='selected';} ?>
                                                            <td style="background:#a3a3a3;"><select id="atd_<?= date('Y-m-d') ?>_<?= $employee['id'] ?>_1" onchange="attendance(this)">
                                                                    <option value="Pr" title="Present" <?= $pr ?>><i class="fa fa-check"></i> Pr</option>
                                                                    <option value="Ab" title="Absent" <?= $ab ?>><i class="fa fa-remove"></i> A</option>
                                                                    <option value="P" title="Permission" <?= $p ?> >P</option>
                                                                    <option value="O" title="Out For Work" <?= $o ?> >O</option>
                                                                </select></td>
                                                        <?php $count_1 = 1; break; } ?>
                                                    <?php endforeach; ?>
                                                    <?php if ($count_1 == 0 ){ ?>
                                                        <td style="background:#a3a3a3;"><select id="atd_<?= date('Y-m-d') ?>_<?= $employee['id'] ?>_1" onchange="attendance(this)">
                                                                <option value="Pr" title="Present"><i class="fa fa-check"></i> Pr</option>
                                                                <option value="Ab" title="Absent"><i class="fa fa-remove"></i> A</option>
                                                                <option value="P" title="Permission">P</option>
                                                                <option value="O" title="Out For Work">O</option>
                                                            </select></td>
                                                    <?php } ?>
                                                    <?php foreach ($attendance as $item): $count_2 = 0;?>
                                                        <?php if($employee['id'] == $item['Employee_id'] && $ck == $item['Day'] && $item['Day_Time'] == '2') { $pr='';$ab='';$p='';$o='';if ($item['Status'] == 'Ab'){$ab='selected';}elseif ($item['Status']=='P'){$p='selected';}elseif ($item['Status']=='O'){$o='selected';} ?>
                                                            <td style="background:#a3a3a3;"><select id="atd_<?= date('Y-m-d') ?>_<?= $employee['id'] ?>_2" onchange="attendance(this)">
                                                                    <option value="Pr" title="Present" <?= $pr ?>><i class="fa fa-check"></i> Pr</option>
                                                                    <option value="Ab" title="Absent" <?= $ab ?>><i class="fa fa-remove"></i> A</option>
                                                                    <option value="P" title="Permission" <?= $p ?> >P</option>
                                                                    <option value="O" title="Out For Work" <?= $o ?> >O</option>
                                                                </select></td>
                                                        <?php $count_2 = 1; break; }?>
                                                    <?php endforeach; ?>
                                                    <?php if ($count_2 == 0){ ?>
                                                        <td style="background:#a3a3a3;"><select id="atd_<?= date('Y-m-d') ?>_<?= $employee['id'] ?>_2" onchange="attendance(this)">
                                                                <option value="Pr" title="Present"><i class="fa fa-check"></i> Pr</option>
                                                                <option value="Ab" title="Absent"><i class="fa fa-remove"></i> A</option>
                                                                <option value="P" title="Permission">P</option>
                                                                <option value="O" title="Out For Work">O</option>
                                                            </select></td>
                                                    <?php } ?>
                                                <?php }elseif($at_ck == 'false'){ ?>
                                                    <td style="background:#a3a3a3;">
                                                        <select id="atd_<?= date('Y-m-d') ?>_<?= $employee['id'] ?>_1" onchange="attendance(this)">
                                                            <option value="Pr" title="Present"><i class="fa fa-check"></i> Pr</option>
                                                            <option value="Ab" title="Absent"><i class="fa fa-remove"></i> A</option>
                                                            <option value="P" title="Permission">P</option>
                                                            <option value="O" title="Out For Work">O</option>
                                                        </select>
                                                    </td>
                                                    <td style="background:#a3a3a3;">
                                                        <select id="atd_<?= date('Y-m-d') ?>_<?= $employee['id'] ?>_2" onchange="attendance(this)">
                                                            <option value="Pr" title="Present"><i class="fa fa-check"></i> Pr</option>
                                                            <option value="Ab" title="Absent"><i class="fa fa-remove"></i> A</option>
                                                            <option value="P" title="Permission">P</option>
                                                            <option value="O" title="Out For Work">O</option>
                                                        </select>
                                                    </td>
                                                <?php } ?>
                                            <?php }else{ ?>
                                                <?php if ($at_ck == 'true') { ?>
                                                    <?php foreach ($attendance as $item): $count_3 = 0;?>
                                                        <?php if ($item['Employee_id']==$employee['id'] && (int)$item['Day'] == $i && $item['Day_Time'] == '1') { $count_3++; ?>
                                                            <td><i class="btn btn-primary btn-xs disabled"><?= $item['Status'] ?></i></td>
                                                        <?php break; }?>
                                                    <?php endforeach; ?>
                                                    <?php if ($count_3 == 0){?>
                                                        <!--<td><i class="fa fa-xs fa-check btn btn-primary btn-xs disabled"></i></td>-->
                                                        <td><i class="btn btn-primary btn-xs disabled"><?= $i . ' - M' ?></i></td>
                                                    <?php }?>
                                                    <?php foreach ($attendance as $item): $count_4 = 0;?>
                                                        <?php if($item['Employee_id']==$employee['id'] && (int)$item['Day'] == $i && $item['Day_Time'] == '2'){ ?>
                                                            <td><i class="btn btn-primary btn-xs disabled"><?= $item['Status'] ?></i></td>
                                                        <?php $count_4 = 1;break; }?>
                                                    <?php endforeach; ?>
                                                    <?php if ($count_4 == 0){ ?>
                                                        <td><i class="btn btn-primary btn-xs disabled"><?= $i . ' - A' ?></i></td>
                                                    <?php } ?>
                                                <?php }elseif($at_ck == 'false'){ ?>
                                                    <td><i class="fa fa-xs fa-check btn btn-primary btn-xs disabled"></i></td>
                                                    <td><i class="fa fa-xs fa-check btn btn-primary btn-xs disabled"></i></td>
                                                <?php } ?>
                                            <?php } ?>
                                        <?php }?>
                                    </tr>
                                <?php endforeach; ?>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $this->load->view('templates/footer') ?>
<script>
    if (window.XMLHttpRequest) {
        // code for modern browsers
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for old IE browsers
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    function attendance(element)
    {
        var id_aar = element.id.split('_');
        var value = element.value;
        xmlhttp.open("POST", "http://localhost/GMS/ajax/attendance/", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("id="+id_aar[2]+"&date="+id_aar[1]+"&am="+id_aar[3]+"&val="+value);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200)
            {
                console.log(this.responseText);
            }
        };
    }
</script>
