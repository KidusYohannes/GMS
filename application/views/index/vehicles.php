<section class="content-header">
    <h1>
        Vehicles
        <small>Control panel</small>
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
                        <th>Visited</th>
                        <th>Services Provided</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if (isset($vehicles)) { $count = 1; ?>
                        <?php foreach ($vehicles as $vehicle): ?>
                            <tr>
                                <td><?= $count ?></td>
                                <td><?= $vehicle['First_Name'].' '.$vehicle['Last_Name'] ?></td>
                                <td><?= $vehicle['Model'].' '.$vehicle['Make'].' '.$vehicle['Year'] ?></td>
                                <td><a href="<?= base_url('vehicles/job_cards_list') ?>?id=<?= $vehicle['id'] ?>" title="View Cards"><?= $vehicle['Card_Count'] ?> Times</a></td>
                                <td><select class="form-control input-sm">
                                    <?php foreach ($services as $item) : if ($item['V_ID'] == $vehicle['id']) { ?>
                                        <option><?= $item['Catagory']. ' - ' . $item['Service'] ?></option>
                                    <?php } endforeach; ?>
                                </select></td>
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