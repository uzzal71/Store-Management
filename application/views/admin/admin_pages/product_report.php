<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Product Report
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
            Product Report
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
$id = 0;
foreach ($view_report as $report) {
	$id = $id + 1;

	if ($report->quantity <= 5) {
		?>
            <tr style="color:white;background-color: #f442cb;">
                                        <td><?php echo $id; ?></td>
                                        <td><?php echo $report->product_name; ?></td>
                                        <td><?php echo $report->quantity; ?></td>
                                        <td><a href="" class="btn btn-danger" title="">Product Need</a></td>
                                    </tr>
        <?php
}
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