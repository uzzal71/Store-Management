<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Management Header
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
        <div class="panel-heading">
            Category Management
        </div>
                    <span style="color:red;font-size: 18px;text-align: center;margin-left: 500px;">
                <?php
$message = $this->session->userdata('message');
if (isset($message)) {
	echo $message;
	$this->session->set_userdata('message');
}
?>
            </span>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Category Name</th>
                                    <th>Category Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
$id = 0;
foreach ($view_category as $category) {
	$id = $id + 1;
	?>
                                    <tr>
                                        <td><?php echo $id; ?></td>
                                        <td><?php echo $category->category_name; ?></td>
                                        <td><?php echo $category->category_description; ?></td>
                                        <td>
                                            <?php
if ($category->status == 1) {
		?>
                                                <p class="btn btn-info">Active</p>
                                                <?php
} else {
		?>
                                                <p class="btn btn-danger">Inactive</p>
                                                <?php
}
	?>
                                        </td>
                                        <td>
                                            <?php
if ($category->status == 1) {
		?>
                                                <a href="<?php echo base_url("unpublished-category/$category->id/0") ?>" class="btn btn-warning"><span class="glyphicon glyphicon-thumbs-down"></span></a>
                                                <?php
} else {
		?>
                                                <a href="<?php echo base_url("published-category/$category->id/1") ?>" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span></a>
                                                <?php
}
	?>
                                                <a href="<?php echo base_url("edit-category/$category->id") ?>" class="btn btn-info"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="<?php echo base_url("delete-category/$category->id") ?>" onclick="return confirmDelete()" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                                        </td>
                                    </tr>
                                    <?php
}
?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->