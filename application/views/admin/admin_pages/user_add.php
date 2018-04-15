<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        User Header
        <small>Optional description</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
    </ol>
</section>

<!-- Main content -->
<section class="content container-fluid">
    <!-- my code -->
    <div class="panel panel-primary">
        <div class="panel-heading">User Include</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-4">
                    <img src="<?php echo base_url(); ?>./assets/back_end_assets/images/User.png" width="100%" style="margin-top: 70px;" />
                </div>
                <div class="col-sm-1">
                    <div style="border-left: 1px solid green;padding: 2px;height: 300px"></div>
                </div>
                <div class="col-sm-7">
                    <div>
                        <span style="color:blue;font-size: 18px;">
                            <?php
$message = $this->session->userdata('message');
if (isset($message)) {
	echo $message;
	$this->session->set_userdata('message');
}
?>
                        </span>
                        <form action="<?php echo base_url('User-Create'); ?>" method="post">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail:</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="text" class="form-control" name="password" required>
                            </div>
                            <div class="form-group">
                                <label for="sel1">Status:</label>
                                <select class="form-control" name="status">
                                    <option>Select status</option>
                                    <option value="1">published</option>
                                    <option value="0">unpublished</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->