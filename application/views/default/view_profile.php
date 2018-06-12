<section class="content-header">
    <h1>
        User Profile
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">User profile</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-lg-3">
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive img-circle" src="<?= base_url() ?>assets/dist/img/<?= $user['profile'] ?>.png" alt="User profile picture">
                    <h3 class="profile-username text-center"><?= $user['First_Name'] . ' ' .$user['Last_Name'] ?></h3>
                    <p class="text-muted text-center"><?= $user['User_Type'] ?></p>
                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>User Name</b> <a class="pull-right"><?= $user['User_Name']?></a>
                        </li>
                        <li class="list-group-item">
                            <b>Position</b> <a class="pull-right"><?= $user['User_Type'] ?></a>
                        </li>
                    </ul>
                    <a href="<?= base_url() ?>profile/check_security_answer" class="btn btn-primary btn-block"><b>Change Password</b></a>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="box box-primary">
                <div class="box-header">
                    <h3>User Information</h3>
                </div>
                <div class="box-body">
                    <form action="<?= base_url() ?>profile/update" method="post" class="form-horizontal">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="user_name" class="control-label col-lg-4">User Name</label>
                                <div class="col-lg-7">
                                    <input type="text" name="User_Name" value="<?= $user['User_Name'] ?>" required id="user_name" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="first_name" class="control-label col-lg-4">First Name</label>
                                <div class="col-lg-7">
                                    <input type="text" name="First_Name" value="<?= $user['First_Name'] ?>" pattern="[A-Za-z]+" required title="only alphabetical characters" id="first_name" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="last_name" class="control-label col-lg-4">Last Name</label>
                                <div class="col-lg-7">
                                    <input type="text" name="Last_Name" value="<?= $user['Last_Name'] ?>" pattern="[A-Za-z]+" required title="only alphabetical characters" id="Last_name" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="phone" class="control-label col-lg-4">Phone</label>
                                <div class="col-lg-7">
                                    <input type="text" name="Phone" value="<?= $user['Phone'] ?>"pattern="[0-9]+" required title="only numerical characters" id="phone" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="control-label col-lg-4">Email</label>
                                <div class="col-lg-7">
                                    <input type="email" name="Email" value="<?= $user['Email'] ?>" required  id="email" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button class="btn btn-success" type="submit" style="float: right;">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php if ($msg == 'updated') {?>
            <div class="col-lg-12">
                <div class="alert alert-info alert-dismissable"><i class="glyphicon glyphicon-info-sign"></i> Your Update Will be available on the next login</div>
            </div>
        <?php }?>
    </div>
</section>