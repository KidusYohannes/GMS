<?php $this->load->view('templates/header'); ?>
    <section class="content-header">
        <h1>
            Report
            <small><?= $title ?></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Reports</li>
        </ol>
    </section>
    <section class="content">
        <div class="row container-fluid">
            <form action="<?= base_url() ?>report/<?= $form ?>" method="post" class="form-horizontal">
                <div class="box box-primary">
                    <div class="box-header">
                        <div class="box-title">Choose Time To see <?= $title ?> reports</div>
                    </div>
                    <div class="box-body">
                        <div class="col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-lg-4 col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="" class="label label-primary control-label">Start Date: </label>
                                <input type="text" name="Start" id="demo_1" class="form-control input-sm">
                            </div>
                            <div class="form-group">
                                <label for="" class="label label-primary control-label">End Date: </label>
                                <input type="text" name="End" id="demo_2" class="form-control input-sm">
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button class="btn btn-primary col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-lg-4 col-md-4 col-sm-4" style="align-content: center">Go</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
<?php $this->load->view('templates/footer'); ?>
<script type="text/javascript">
    $('#demo_1').daterangepicker({
        "singleDatePicker":true,
        "showWeekNumbers": true,
        "autoApply":true,
        "startDate":"<?= date('m/d/Y', strtotime("-6 days")) ?>",
        "endDate":"<?= date('m/d/Y') ?>"
    });
    $('#demo_2').daterangepicker({
        "singleDatePicker":true,
        "showWeekNumbers":true,
        "autoApply":true,
    });
</script>