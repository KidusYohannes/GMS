<?php $this->load->view('templates/header'); ?>
    <section class="content-header">
        <h1>
            Expense
            <small>Form</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Expense</li>
        </ol>
    </section>
    <section class="content">
        <div class="row container-fluid">
            <div class="box box-primary">
                <div class="box-header">
                    <div class="box-title">Expense Registering Form</div>
                    <div style="float: right">
                        <a href="<?= base_url() ?>expenes/report/" class="btn btn-success btn-xs"><i class="fa fa-list"></i>  View Report</a>
                    </div>
                </div>
                <div class="box-body">
                    <form action="<?= base_url() ?>expenes/add/" method="post" class="form-horizontal">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <div class="box-title">Basics</div>
                                </div>
                                <div class="box-body">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group"><input type="text" name="Catagory" id="" class="form-control input-sm" placeholder="Select Acatagory">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="Specification" id="" class="form-control input-sm" placeholder="Specification .. .">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="Client" id="" class="form-control input-sm" placeholder="Client .. .. ">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="TIN_No" id="" class="form-control input-sm" placeholder="TIN No ...">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="Date" id="demo_2" class="form-control input-sm">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <div class="box-title">Payment</div>
                                </div>
                                <div class="box-body">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group"><input type="text" name="Methos" id="" class="form-control input-sm" placeholder="Payment Method.. ">
                                        </div>
                                        <div class="form-group"><input type="text" name="Status" id="" class="form-control input-sm" placeholder="Payment Status.. ">
                                        </div>
                                        <div class="form-group"><input type="text" name="Discount" id="" class="form-control input-sm" placeholder="Discount .. ">
                                        </div>
                                        <div class="form-group"><input type="text" name="Amount" id="" class="form-control input-sm" placeholder="Amount . .">
                                        </div>
                                        <div class="form-group"><input type="text" name="Paid" id="" class="form-control input-sm" placeholder="Paid Amount .. ">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <button class="btn btn-warning col-lg-offset-5 col-md-offset-5 col-sm-offset-5 " type="reset">Clear</button>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script>
        $('#demo_2').daterangepicker({
            "singleDatePicker":true,
            "showWeekNumbers":true,
            "autoApply":true,
        });
    </script>
<?php $this->load->view('templates/footer'); ?>