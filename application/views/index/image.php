<?php $this->load->view('templates/header'); ?>
    <!--suppress ALL -->
    <section class="content-header">
        <h1>
            Image Upload
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Vehicles</li>
            <li class="active">Image Upload</li>
        </ol>
    </section>
    <section class="content">
        <div class="row container-fluid">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form action="<?= base_url('image/do_upload') ?>" method="post" enctype="multipart/form-data" role="form" class="form-horizontal">
                    <div class="panel box box-primary">
                        <div class="box-header with-border">
                            <h6 class="box-title">
                                <h4>
                                    Picture for Customers
                                </h4>
                            </h6>
                            <?php if (isset($error)){ ?>
                                <div class="alert alert-danger"><?= $error ?></div>
                            <?php } ?>
                        </div>
                        <div id="collapseThree" class="">
                            <div class="box-body">
                                <input type="text" name="v_id" id="" value="<?= $v_id ?>" hidden>
                                <input type="text" name="c_id" id="" value="<?= $c_id ?>" hidden>
                                <input type="text" name="id" id="" value="<?= $id ?>" hidden>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <select name="Type" id="" class="input-sm form-control">
                                        <option>select type .. .. .. </option>
                                        <option value="Customer">Customer</option>
                                        <option value="Vehicle">Vehicle</option>
                                    </select>
                                </div>
                                <br>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <input type="file" name="input_img" class="form-control input-sm" onchange="readURL(event, this)">
                                    <button class="btn btn-primary btn-sm" type="submit">Upload</button>
                                </div>

                                <br>
                                <?php if (isset($upload_data)){ ?>
                                    <img src="<?= base_url() ?>uploads/<?= $upload_data ?>" id="img" alt="Image Place Holder" />
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
<?php $this->load->view('templates/footer'); ?>