<?php $this->load->view('templates/header') ?>
<section class="content-header">
    <h1>
        Vehicles
        <small>Report for vehicles between <b><?= date('Y-m-d', strtotime($start)) ?></b> and <b><?= date('Y-m-d', strtotime($end)) ?></b></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Vehicles</li>
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
                        <th>Customer Name</th>
                        <th>Vehicle</th>
                        <th>Status</th>
                        <th>Job Cards</th>
                        <th>Estimation</th>
                        <th>Inspection</th>
                        <th>History</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if (isset($vehicles)) { $count = 1; ?>
                        <?php foreach ($vehicles as $vehicle): ?>
                            <tr>
                                <td><?= $count ?></td>
                                <td><?= $vehicle['First_Name'].' '.$vehicle['Last_Name'] ?></td>
                                <td><?= $vehicle['Model'].' '.$vehicle['Make'].' '.$vehicle['Year'] ?></td>
                                <td><?= "Unidentified" ?></td>
                                <td>
                                        <?php $count = 0; foreach ($cards as $card): ?>
                                            <?php if ($vehicle['id'] == $card['Vehicle_id']) {
                                                $count++;
                                            }?>
                                        <?php endforeach; ?>
                                    <a href="<?= base_url('vehicles/job_cards_list') ?>?id=<?= $vehicle['id'] ?>"><?= $count ?> Job Cards</a>
                                </td>
                                <td><?= $vehicle['Insp'] ?></td>
                                <td><?= $vehicle['Estm'] ?></td>
                                <td><a href="<?= base_url().'vehicles/vehicle_history/?id='.$vehicle['id'] ?>">View History...</a></td>
                            </tr>
                        <?php $count++; endforeach; ?>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('templates/footer') ?>