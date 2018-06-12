<?php $this->load->view('templates/header') ?>
<section class="content-header">
    <h1>
        Incoming
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">New Vehicle</li>
    </ol>
    <div class="btn-group">
        <a class="btn btn-primary btn-sm" href="<?= base_url() ?>incomming/vehicle/">New Incoming</a>
        <a class="btn btn-primary btn-sm" href="<?= base_url() ?>incomming/customer/">Old Customer but New Vehicle</a>
    </div>
</section>
<section class="content">
    <div class="row container-fluid">
    	<div class="box box-primary">
    		<div class="box-body">
    			<div class="form-horizontal">
    				<div class="col-lg-3 col-md-3 col-sm-3"></div>
    				<div class="col-lg-1 col-md-1 col-sm-1">
    					Search:
    				</div>
    				<div class="col-lg-5 col-md-5 col-sm-5">
    					<div class="input-group">
							<input type="text" id="id" class="form-control input-sm col-sm-10 col-lg-10 col-md-10" name="" placeholder="Enter Vehicle id here ... .. ..">
							<div class="input-group-btn">
								<button type="button" class="btn btn-primary btn-sm" onclick="search()"><i class="fa fa-search"></i></button>
							</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
        <form action="<?= base_url() ?>incomming/old_vehicle/" class="form-horizontal" method="post">
            <input type="text" name="id" id="v_id" hidden>
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active" id="1"><a href="#tab_1" data-toggle="tab">Basic Info</a></li>
                    <li id="2"><a href="#tab_2" data-toggle="tab">Customer Requests & More Info</a></li>
                    <li id="3"><a href="#tab_3" data-toggle="tab">Customer tools</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="box box-solid">
                                    <div class="box-header with-border label label-primary">
                                        <h3 class="box-title">Customer Information</h3>
                                    </div>
                                    <div class="box-body">
                                        <div class="box-group" id="accordion">
                                            <div class="panel box box-primary">
                                                <div class="box-header with-border">
                                                    <h6 class="box-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                            Basic Info
                                                        </a>
                                                    </h6>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse in">
                                                    <div class="box-body">
                                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                            <input type="text" disabled name="Company" id="Company" class="form-control input-sm" placeholder="Company Name">
                                                        </div>
                                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                            <input type="text" disabled name="First_Name" id="First_Name" class="form-control input-sm" placeholder="First Name">
                                                        </div>
                                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                            <input type="text" disabled name="Last_Name" id="Last_Name" class="form-control input-sm" placeholder="Last Name">
                                                        </div>
                                                        <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                                            <input type="text" disabled name="Sex" id="Sex" class="form-control input-sm" placeholder="Sex">
                                                        </div>
                                                        <div class="form-group col-lg-7 col-md-7 col-sm-7">
                                                            <input type="date" disabled name="DOB" id="DOB" class="form-control input-sm" placeholder="Date Of Birth" value="<?= date('Y-m-d') ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel box box-primary">
                                                <div class="box-header with-border">
                                                    <h6 class="box-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                            Address
                                                        </a>
                                                    </h6>
                                                </div>
                                                <div id="collapseTwo" class="panel-collapse collapse">
                                                    <div class="box-body">
                                                        <div class="form-group col-lg-7 col-md-7 col-sm-7">
                                                            <input type="text" disabled name="Region" id="Region" class="form-control input-sm" placeholder="Region">
                                                        </div>
                                                        <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                                            <input type="text" disabled name="Subcity" id="Subcity" class="form-control input-sm" placeholder="Subcity">
                                                        </div>
                                                        <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                                            <input type="text" disabled name="Wereda" id="Wereda" class="form-control input-sm" placeholder="Wereda .. ">
                                                        </div>
                                                        <div class="form-group col-lg-7 col-md-7 col-sm-7">
                                                            <input type="tel" disabled name="Phone" id="Phone" class="form-control input-sm" placeholder="Phone">
                                                        </div>
                                                        <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                                            <input type="tel" disabled name="Phone_O" id="Phone_O" class="form-control input-sm" placeholder="Office Phone">
                                                        </div>
                                                        <div class="form-group col-lg-7 col-md-7 col-sm-7">
                                                            <input type="email" disabled name="Email" id="Email" class="form-control input-sm" placeholder="Email">
                                                        </div>
                                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                            <input type="text" disabled name="Web" id="Web" class="form-control input-sm" placeholder="website">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="box box-solid">
                                    <div class="box-header with-border label label-primary">
                                        <h3 class="box-title">Vehicle Information</h3>
                                    </div>
                                    <div class="box-body">
                                        <div class="box-group" id="accordion1">
                                            <div class="panel box box-primary">
                                                <div class="box-header with-border">
                                                    <h6 class="box-title">
                                                        <a data-toggle="collapse" data-parent="#accordion1" href="#collapsefour">
                                                            Vehicle Information
                                                        </a>
                                                    </h6>
                                                </div>
                                                <div id="collapsefour" class="panel-collapse collapse in">
                                                    <div class="box-body">
                                                        <div class="form-group col-lg-7  col-md-7 col-sm-7">
                                                            <input type="text" disabled name="Model" id="Model" class="form-control input-sm" placeholder="Vehicle Model">
                                                        </div>
                                                        <div class="form-group col-lg-6  col-md-6 col-sm-6">
                                                            <input type="text" disabled name="Make" id="Make" class="form-control input-sm" placeholder="Make">
                                                        </div>
                                                        <div class="form-group col-lg-7  col-md-7 col-sm-7">
                                                            <select name="Year" disabled id="Year" id="" class="form-control input-sm" placeholder="Year">
                                                                <option> choose year</option>
                                                                <?php $year = (int)date('Y'); for ($i = 100; $i > 0; $i--){ ?>
                                                                    <option value="<?= $year ?>"><?= $year ?></option>
                                                                    <?php $year--; }?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-lg-6  col-md-6 col-sm-6">
                                                            <input type="text" disabled name="Color" id="Color" class="form-control input-sm" placeholder="Color">
                                                        </div>
                                                        <div class="form-group col-lg-7 col-md-7 col-sm-7">
                                                            <input type="text" disabled name="Door" id="Door" class="form-control input-sm" placeholder="Door">
                                                        </div>
                                                        <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                                            <input type="text" disabled name="VIN_No" id="VIN_No" class="form-control input-sm" placeholder="VIN Number">
                                                        </div>
                                                        <div class="form-group col-lg-7 col-md-7 col-sm-7">
                                                            <input type="text" disabled name="Plate_No" id="Plate_No" class="form-control input-sm" placeholder="Plate Number">
                                                        </div>
                                                        <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                                            <input type="text" disabled name="Chanssis" id="Chanssis" class="form-control input-sm" placeholder="Chanssis">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel box box-primary">
                                                <div class="box-header with-border">
                                                    <h6 class="box-title">
                                                        <a data-toggle="collapse" data-parent="#accordion1" href="#collapsefive">
                                                            Mechanical Detail
                                                        </a>
                                                    </h6>
                                                </div>
                                                <div id="collapsefive" class="panel-collapse collapse">
                                                    <div class="box-body">
                                                        <div class="input-group col-lg-12 col-md-12 col-sm-12">
                                                            <div class="form-group col-lg-3 col-md-3 col-sm-3">
                                                                <input type="text" name="Engine" class="form-control input-sm" placeholder="Engine Model">
                                                            </div>
                                                            <div class="form-group col-lg-4 col-md-4 col-sm-4">
                                                                <input type="text" name="Drive" class="form-control input-sm" placeholder="Drive Model">
                                                            </div>
                                                            <div class="form-group col-lg-3 col-md-3 col-sm-3">
                                                                <input type="text" name="Transmission" class="form-control input-sm" placeholder="Transmission Type">
                                                            </div>
                                                            <div class="form-group col-lg-4 col-md-4 col-sm-4">
                                                                <input type="text" name="Injection" class="form-control input-sm" placeholder="Injection System">
                                                            </div>
                                                        </div>
                                                        <div class="input-group col-lg-12 col-md-12 col-sm-12">
                                                            <div class="form-group col-lg-3 col-md-3 col-sm-3">
                                                                <input type="text" name="Millage" class="form-control input-sm" placeholder="Millage">
                                                            </div>
                                                            <div class="form-group col-lg-4 col-md-4 col-sm-4">
                                                                <input type="text" name="Fuel_Type" class="form-control input-sm" placeholder="Fuel Type">
                                                            </div>
                                                            <div class="form-group col-lg-3 col-md-3 col-sm-3">
                                                                <input type="text" name="Fuel" class="form-control input-sm" placeholder="Fuel Tank">
                                                            </div>
                                                            <div class="form-group col-lg-4 col-md-4 col-sm-4">
                                                                <input type="text" name="Tier" class="form-control input-sm" placeholder="Tier Size">
                                                            </div>
                                                        </div>
                                                        <div class="input-group col-lg-12 col-md-12 col-sm-12">
                                                            <div class="form-group col-lg-2 col-md-2 col-sm-2">
                                                                <input type="text" name="CC" class="form-control input-sm" placeholder="CC">
                                                            </div>
                                                            <div class="form-group col-lg-3 col-md-2 col-sm-3">
                                                                <input type="text" name="HP" class="form-control input-sm" placeholder="HP">
                                                            </div>
                                                            <div class="form-group col-lg-3 col-md-3 col-sm-3">
                                                                <input type="number" name="Cylinders" class="form-control input-sm" placeholder="Cylinders">
                                                            </div>
                                                            <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                                                <input type="number" name="Dig" class="form-control input-sm" placeholder="Dig Socket">
                                                            </div>
                                                        </div>
                                                        <div class="input-group col-lg-12 col-md-12 col-sm-12">
                                                            <div class="form-group col-lg-5 col-md-5 col-sm-5">
                                                                <input type="text" name="Oddo" class="form-control input-sm" placeholder="Current Oddo meter">
                                                            </div>
                                                            <div class="form-group col-lg-4 col-md-4 col-sm-4">
                                                                <input type="date" name="Received_Date" class="form-control input-sm" placeholder="Received Date" value="<?= date('Y-m-d') ?>">
                                                            </div>
                                                            <div class="form-group col-lg-4 col-md-4 col-sm-4">
                                                                <input type="date" name="Release_Date" class="form-control input-sm" placeholder="Release Date">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-lg-offset-4 col-md-offset-4 col-sm-offset-4">
                                <a class="btn btn-primary col-lg-4 col-md-4 col-sm-4" href="#tab_2" data-toggle="tab" name="first" onclick="change(this)">Next</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab_2">
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#cus" data-toggle="tab">Customer Request</a></li>
                                <li><a href="#pro" data-toggle="tab">Professional Requests</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="cus">
                                    <div class="row ">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div>
                                                <div class="header btn-group">
                                                    <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal_1" type="button">Add New Category</button>
                                                    <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal_2" type="button">Add New Work to do</button>
                                                </div>
                                            </div>
                                            <table class="table table-condensed table-striped table-hover table-bordered" id="table_1">
                                                <thead>
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Category</th>
                                                    <th>Specification</th>
                                                    <th>Employee</th>
                                                    <th>Due Date</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php for ($i = 1; $i < 21 ; $i++){ ?>
                                                    <tr>
                                                        <td><?= $i ?></td>
                                                        <td>
                                                            <select name="Cat_<?= $i ?>" id="Cat_<?= $i ?>" class="form-control" onchange="select_options(this)">
                                                                <option>Choose Category</option>
                                                                <?php foreach ($services as $service): ?>
                                                                    <option value="<?= $service['Content'] ?>"><?= $service['Content'] ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </td>
                                                        <td><select class="form-control" name="Spec_<?= $i ?>" id="Spec_<?= $i ?>">
                                                            </select></td>
                                                        <td><select class="form-control select2" name="Employee_<?= $i ?>" id="">
                                                                <option value=""></option>
                                                                <?php foreach ($employees as $employee): ?>
                                                                    <option value="<?= $employee['id'] ?>"><?= $employee['First_Name'].' '.$employee['Last_Name'] ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </td>
                                                        <td><input type="date" class="form-control" name="Due_Date_<?= $i ?>" value="<?= date('Y-m-d') ?>"></td>
                                                    </tr>
                                                <?php } ?>
                                                </tbody>
                                            </table>
                                            <button class="btn btn-success btn-xs add_1" style="float: right;" id="bttn" type="button"><i class="fa fa-plus"></i> Add New Row</button>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-lg-offset-3 col-md-offset-3 col-sm-offset-3 ">
                                            <a class="btn btn-warning col-lg-4 col-md-4 col-sm-4" href="#tab_1" data-toggle="tab" name="second_Back" onclick="change(this)">Back</a>
                                            <a class="btn btn-primary col-lg-4 col-md-4 col-sm-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1" href="#tab_3" data-toggle="tab" name="second" onclick="change(this)">Next</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="pro">
                                    <div class="row ">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div>
                                                <div class="header btn-group">
                                                    <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal" type="button">Add New Category</button>
                                                </div>
                                            </div>
                                            <table class="table table-condensed table-striped table-hover table-bordered" id="table_5">
                                                <thead>
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Category</th>
                                                    <th>Specification</th>
                                                    <th>Employee</th>
                                                    <th>Due Date</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php for ($i = 1; $i < 21 ; $i++){ ?>
                                                    <tr>
                                                        <td><?= $i ?></td>
                                                        <td>
                                                            <select name="Cat_<?= $i ?>_Pro" id="" class="form-control">
                                                                <option>Choose Category</option>
                                                                <?php foreach ($services as $service): ?>
                                                                    <option value="<?= $service['Content'] ?>"><?= $service['Content'] ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </td>
                                                        <td><input type="text" class="form-control" name="Spec_<?= $i ?>_Pro"></td>
                                                        <td><select class="form-control select2" name="Employee_<?= $i ?>_Pro" id="">
                                                                <option value=""></option>
                                                                <?php foreach ($employees as $employee): ?>
                                                                    <option value="<?= $employee['id'] ?>"><?= $employee['First_Name'].' '.$employee['Last_Name'] ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </td>
                                                        <td><input type="date" class="form-control" name="Due_Date_<?= $i ?>_Pro" value="<?= date('Y-m-d') ?>"></td>
                                                    </tr>
                                                <?php } ?>
                                                </tbody>
                                            </table>
                                            <button class="btn btn-success btn-xs add_5" style="float: right;" id="bttn" type="button"><i class="fa fa-plus"></i> Add New Row</button>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-lg-offset-3 col-md-offset-3 col-sm-offset-3 ">
                                            <a class="btn btn-warning col-lg-4 col-md-4 col-sm-4" href="#tab_1" data-toggle="tab" name="second_Back" onclick="change(this)">Back</a>
                                            <a class="btn btn-primary col-lg-4 col-md-4 col-sm-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1" href="#tab_3" data-toggle="tab" name="second" onclick="change(this)">Next</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab_3">
                        <div class="row container-fluid">
                            <table class="table table-condensed table-striped table-hover table-bordered" id="table_2">
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
                                <?php for ($i = 1; $i < 21 ; $i++){ ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><input type="text" class="form-control" name="Name_<?= $i ?>"></td>
                                        <td><input type="text" class="form-control" name="Brand_<?= $i ?>"></td>
                                        <td><input type="text" class="form-control" name="Model_<?= $i ?>"></td>
                                        <td><input type="text" class="form-control" name="Size_<?= $i ?>"></td>
                                        <td><input type="text" class="form-control" name="Remark_<?= $i ?>"></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                            <button class="btn btn-success btn-xs add_2" style="float: right;" id="bttn" type="button"><i class="fa fa-plus"></i> Add New Row</button>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
                                <a class="btn btn-warning col-lg-4 col-md-4 col-sm-4" href="#tab_2" data-toggle="tab" name="third_Back" onclick="change(this)">Back</a>
                                <button class="btn btn-success col-lg-4 col-md-4 col-sm-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<script>
    function change(element)
    {
        if (element.name == 'first'){
            document.getElementById('1').setAttribute('Class','');
            document.getElementById('2').setAttribute('Class','active');
        }else if (element.name == 'second'){
            document.getElementById('1').setAttribute('Class','');
            document.getElementById('2').setAttribute('Class','');
            document.getElementById('3').setAttribute('Class','active');
        }else if(element.name == 'second_Back'){
            document.getElementById('3').setAttribute('Class','');
            document.getElementById('2').setAttribute('Class','');
            document.getElementById('1').setAttribute('Class','active');
        }else if (element.name == 'third_Back')
        {
            document.getElementById('1').setAttribute('Class','');
            document.getElementById('3').setAttribute('Class','');
            document.getElementById('2').setAttribute('Class','active');
        }
    }
    $(document).ready(function(){
        var max_1 = 5;
        var max_2 = 5;
        $("#table_1 > tbody > tr").hide().slice(0,max_1).show();
        $(".add_1").on("click",function () {
            max_1 = max_1 + 1;
            $("tbody > tr", $(this).prev()).slice(0,max_1).show();
        });
        $("#table_2 > tbody > tr").hide().slice(0,max_2).show();
        $(".add_2").on("click",function () {
            max_2 = max_2 + 1;
            $("tbody > tr", $(this).prev()).slice(0,max_2).show();
        });
    });
</script>
<?php $this->load->view('templates/footer') ?>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <input type="text" name="" class="form-control input-sm" placeholder="Enter Catagory .. .. .. " id="cat_new">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="submit" onclick="insert()" data-dismiss="modal">Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<script type="text/javascript">
    $('#myModal').model();
</script>
<script type="text/javascript">
    if (window.XMLHttpRequest) {
        // code for modern browsers
            xmlhttp = new XMLHttpRequest();
        } else {
        // code for old IE browsers
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
    function insert()
    {
        xmlhttp.open("POST", "http://localhost/GMS/ajax/recieving_catagory/", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("content="+document.getElementById('cat_new').value);
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            $('#table_1').DataTable().ajax.reload();
          }
        };
    }
    function search()
    {
        var id = document.getElementById('id').value;
        xmlhttp.open("POST", "http://localhost/GMS/ajax/search_vehicle/", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("id="+id);
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            /*console.log(this.responseText);*/
            var arr = this.responseText.split('_');
            console.log(arr);
            document.getElementById('Company').value = arr[4];
            document.getElementById('First_Name').value = arr[0];
            document.getElementById('Last_Name').value = arr[1];
            document.getElementById('DOB').value = arr[2];
            document.getElementById('Sex').value = arr[3];
            document.getElementById('Phone').value = arr[8];
            document.getElementById('Phone_O').value = arr[9];
            document.getElementById('Email').value = arr[10];
            document.getElementById('Web').value = arr[11];
            document.getElementById('Region').value = arr[5];
            document.getElementById('Subcity').value = arr[6];
            document.getElementById('Wereda').value = arr[7];
            document.getElementById('Model').value = arr[12];
            document.getElementById('Make').value = arr[13];
            document.getElementById('Year').value = arr[14];
            document.getElementById('Color').value = arr[15];
            document.getElementById('Door').value = arr[16];
            document.getElementById('VIN_No').value = arr[17];
            document.getElementById('Plate_No').value = arr[18];
            document.getElementById('Chanssis').value = arr[19];
            document.getElementById('v_id').value = arr[20];
          }
        };
    }
</script>
