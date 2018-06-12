<?php $this->load->view('templates/header'); ?>
<section class="content-header">
    <h1>
        Job Cards
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Vehicles</li>
        <li class="active">cards</li>
    </ol>
</section>
<section class="content">
    <div class="row container-fluid">
        <div class="box box-primary">
            <div class="box-header"></div>
            <div class="box-body">
                <table class="table table-hover table-condensed" id="datatable-buttons-2">
                    <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Customer Name</th>
                        <th>Vehicle</th>
                        <th>Card Number</th>
                        <th>Services</th>
                        <th>Receive Date</th>
                        <th>Release Date</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if (isset($cards)) { $count = 1; ?>
                        <?php foreach ($cards as $card): ?>
                            <tr>
                                <td><?= $count ?></td>
                                <td><?= $customer['First_Name'].' '.$customer['Last_Name'] ?></td>
                                <td><?= $vehicle['Model'].' '.$vehicle['Make'].' '.$vehicle['Year'] ?></td>
                                <td><?= $card['id'] ?></td>
                                <td>
                                    <select name="" id="" class="form-control input sm">
                                        <option></option>
                                        <?php $count = 0; foreach ($services as $service): ?>
                                            <?php if ($card['id'] == $service['Card_id']) {?>
                                                <option value=""><?= $service['Catagory'].' '.$service['Service'] ?></option>
                                            <?php }?>
                                        <?php endforeach; ?>
                                    </select>
                                </td>
                                <td><?= $card['Receive_Date'] ?></td>
                                <td><?= $card['Release_Date'] ?></td>
                                <td><a href="<?= base_url().'vehicles/job_card/?id='.$card['id'] ?>">View Card...</a></td>
                            </tr>
                            <?php $count++; endforeach; ?>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('templates/footer'); ?>