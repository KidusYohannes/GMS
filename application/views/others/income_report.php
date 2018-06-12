<?php $this->load->view('templates/header'); ?>
    <section class="content-header">
        <h1>
            Income
            <small>Report</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Report</li>
            <li class="active">Income</li>
        </ol>
    </section>
    <section class="content">
        <div class="row container-fluid">
            <div class="box box-primary">
                <div class="box-header">
                    <div class="box-title">Income Report</div>
                    <div style="float: right">
                        <button class="btn btn-success" id="add" data-toggle="modal" data-target="#myModal_2"><i class="fa fa-list"></i>  Add New Report</button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <table class="table table-condensed table-bordered table-stripped" id="datatable-buttons-1">
                            <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Date</th>
                                <th>Client</th>
                                <th>TIN</th>
                                <th>Reason</th>
                                <th>Payment</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $count = 1; if (isset($reports)) { ?>
                                <?php foreach ($reports as $report): ?>
                                    <tr>
                                        <td><?= $count ?></td>
                                        <td><?= $report['Date'] ?></td>
                                        <td><?= $report['Client'] ?></td>
                                        <td><?= $report['TIN_No'] ?></td>
                                        <td><?= $report['Reason_Cat'] ?> <a  href="#" data-placement="auto" data-toggle="popover" data-html="true" data-trigger="focus"
                                                data-content="Specification - <?= $report['Specification'] ?><br>Remark - <?= $report['Spec_Remark'] ?>"
                                            > <i class="fa fa-plus-circle" style="font-size: 1.5em"></i></a></td>
                                        <td><?= $report['Paid_Amount'] ?> <a href="#" data-placement="auto" data-toggle="popover" data-html="true" data-trigger="focus"
                                               data-content="Method - <?= $report['Payment_Method'] ?><br>Status - <?= $report['Payment_Status'] ?><br>
                                                          Discount - <?= $report['Discount'] ?><br>Actual Amount - <?= $report['amount'] ?>"
                                            > <i class="fa fa-plus-circle" style="font-size: 1.5em"></i></a> </td>
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
    <div id="myModal_2" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <form action="<?= base_url() ?>income/add/" method="post" role="form" class="form-horizontal">
                 <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add New Income Report</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="container-fluid">
                                <div class="">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label for="" class="control-label col-lg-2">Date:</label>
                                                <div class="col-lg-10">
                                                    <input type="text" name="Date" id="demo_2" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="control-label col-lg-2">Ref No:</label>
                                                <div class="col-lg-10">
                                                    <input type="text" name="Ref_No" placeholder="Enter the Ref No" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="control-label col-lg-2">Client:</label>
                                                <div class="col-lg-10">
                                                    <input type="text" name="Client" placeholder="Enter Client" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="control-label col-lg-2">TIN:</label>
                                                <div class="col-lg-10">
                                                    <input type="text" name="TIN_No" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="control-label col-lg-2">Reason:</label>
                                                <div class="col-lg-10">
                                                    <input type="text" name="Reason_Cat" id="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-2" style="float: right;"><a href="#Reason" class="btn btn-default btn-xs" data-toggle="collapse">More</a></div>
                                            <br><br>
                                            <div id="Reason" class="collapse">
                                                <div class="panel panel-default">
                                                    <div class="panel-body">
                                                        <div class="form-group">
                                                            <label for="" class="control-label col-lg-2">Specification:</label>
                                                            <div class="col-lg-10">
                                                                <input type="text" name="Specification" placeholder="Enter some details here" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" class="control-label col-lg-2">Remark:</label>
                                                            <div class="col-lg-10">
                                                                <input type="text" name="Spec_Remark" placeholder="Remark" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="control-label col-lg-2">Cost:</label>
                                                <div class="col-lg-10">
                                                    <input type="text" name="Paid_Amount" placeholder="Enter the cost here.." class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-2" style="float: right;"><a href="#Payment" class="btn btn-default btn-xs" data-toggle="collapse">More</a></div>
                                            <br><br>
                                            <div  id="Payment" class="collapse">
                                                <div class="form-group">
                                                    <label for="" class="control-label col-lg-2">Method:</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="Payment_Method" placeholder="Enter Payment method" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="control-label col-lg-2">Status:</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="Payment_Status" id="Enter Payment Status .. ." class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="control-label col-lg-2">Discount:</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="Discount" id="Enter if there is any discount .. ." class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="control-label col-lg-2">Actual Amount:</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="amount" id="demo_2" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
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
                </div>
            </form>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#demo_2').daterangepicker({
                "singleDatePicker":true,
                "showWeekNumbers":true,
                "autoApply":true,
            });
            $('[data-toggle="popover"]').popover();
        });
    </script>


<?php $this->load->view('templates/footer'); ?>