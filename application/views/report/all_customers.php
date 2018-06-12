<?php $this->load->view('templates/header'); ?>
    <section class="content-header">
        <h1>
            Customers
            <small>Report for customers between </small>
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
                                    <td>
                                        <a href="#" id="<?= $customer['id'] ?>" class="btn btn-success btn-xs edit">Edit</a>
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
<script>
    $(document).ready(function(){
        if (window.XMLHttpRequest) {
            // code for modern browsers
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for old IE browsers
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        $('.edit').click(function(){
            $('#myModal_1').modal();
            xmlhttp.open("POST", "http://localhost/GMS/customers/edit/", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("id="+this.id);
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200)
                {
                    var arr = this.responseText.split('__#__');
                    var customer = JSON.parse(arr[0]);
                    var address = JSON.parse(arr[1]);
                    console.log(customer);
                    $('#id').val(customer['id']);
                    $('#First_Name').val(customer['First_Name']);
                    $('#Last_Name').val(customer['Last_Name']);
                    $('#Company_Name').val(customer['Company_Name']);
                    $('#Sex').val(customer['Sex']);
                    console.log(address);
                    $('#Region').val(address['Region']);
                    $('#Subcity').val(address['Subcity']);
                    $('#Wereda').val(address['Wereda']);
                    $('#Phone').val(address['Phone']);
                    $('#Phone_O').val(address['Phone_O']);
                    $('#Email').val(address['Email']);
                    $('#Web').val(address['Web']);
                }
            }

        });
    });
</script>
<div id="myModal_1" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="col-lg-12">
            <div class="row">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                    </div>
                    <form action="<?= base_url() ?>customers/update" role="form" method="post" class="form-horizontal">
                        <div class="modal-body col-lg-12">
                            <div class="col-lg-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">Basic Info</div>
                                    <div class="panel-body">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="text" name="First_Name"  id="First_Name"  class="form-control input-sm" placeholder="Enter Catagory .. .. .. " >
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="Last_Name" id="Last_Name" class="form-control input-sm" placeholder="Enter Catagory .. .. .. " >
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="Company_Name" id="Company_Name" class="form-control input-sm" placeholder="Enter Catagory .. .. .. " >
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="Sex" id="Sex" class="form-control input-sm" placeholder="Enter Catagory .. .. .. " >
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="id" id="id" hidden class="form-control input-sm" placeholder="Enter Catagory .. .. .. " >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">Customer Address</div>
                                    <div class="panel-body">
                                        <div class="col-lg-12">
                                           <div class="input-group">
                                               <div class="col-lg-4">
                                                   <div class="form-group">
                                                       <input type="text" name="Region" id="Region" class="form-control input-sm" placeholder="Enter Region .. .. .. " >
                                                   </div>
                                               </div>
                                               <div class="col-lg-4">
                                                   <div class="form-group">
                                                       <input type="text" name="Subcity" id="Subcity" class="form-control input-sm" placeholder="Enter Catagory .. .. .. " >
                                                   </div>
                                               </div>
                                               <div class="col-lg-4">
                                                   <div class="form-group">
                                                       <input type="text" name="Wereda" id="Wereda" class="form-control input-sm" placeholder="Enter Wereda .. .. .. " >
                                                   </div>
                                               </div>
                                           </div>
                                            <div class="form-group">
                                                <input type="tel" name="Phone" id="Phone" class="form-control input-sm" placeholder="Enter Phone .. .. .. " >
                                            </div>
                                            <div class="form-group">
                                                <input type="tel" name="Phone_O" id="Phone_O" class="form-control input-sm" placeholder="Enter office Phone .. .. .. " >
                                            </div>
                                            <div class="form-group">
                                                <input type="email" name="Email" id="Email" class="form-control input-sm" placeholder="Enter Email .. .. .. " >
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="Web" id="Web" class="form-control input-sm" placeholder="Enter Website .. .. .. " >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
