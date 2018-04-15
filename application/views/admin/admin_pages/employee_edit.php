<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Employee Header
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
        <div class="panel-heading">Employee Edit</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-4">
                    <img src="<?php echo base_url(); ?>./assets/back_end_assets/images/employee.jpg" width="100%" />
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
                        <form name="edit_employee" action="<?php echo base_url('Employee-Update'); ?>" method="post">
                            <div class="form-group">
                                <label for="customer_name">Customer Name:</label>
                                <input type="text" class="form-control" name="employee_name" value="<?php echo $single_employee->employee_name; ?>" required>
                                <input type="hidden" name="id" value="<?php echo $single_employee->id; ?>">
                            </div>
                            <div class="form-group">
                                <label for="mobile">Mobile:</label>
                                <input type="text" class="form-control" name="mobile" value="<?php echo $single_employee->mobile; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="address">Address:</label>
                                <input type="text" class="form-control" name="address" value="<?php echo $single_employee->address; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="sel1">Employee Status:</label>
                                <select class="form-control" name="status">
                                    <option value="<?php echo $single_employee->status; ?>">
                                        <?php echo $single_employee->status; ?></option>
                                    <option value="Salesman">Salesman</option>
                                    <option value="Manager">Manager</option>
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