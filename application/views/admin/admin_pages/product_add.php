<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Product Header
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
        <div class="panel-heading">Product Include</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-4">
                    <img src="<?php echo base_url(); ?>./assets/back_end_assets/images/product.jpg" />
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
                        <form action="<?php echo base_url('Product-Create'); ?>" method="post">
                            <div class="form-group">
                                <label for="email">Product Name:</label>
                                <input type="text" class="form-control" name="product_name">
                            </div>
                            <div class="form-group">
                                <label for="sel1">Product Category:</label>
                                <select class="form-control" name="product_category">
                                    <option>Select Category</option>
                                    <?php foreach ($category_view as $category) {
	?>
                                    <option value="<?php echo $category->category_name ?>"><?php echo $category->category_name ?></option>
                                    <?php
}?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="pwd">Product Description:</label>
                                <textarea class="form-control" name="product_description" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="sel1">Publication Status:</label>
                                <select class="form-control" name="status">
                                    <option>Select Status</option>
                                    <option value="1">Published</option>
                                    <option value="0">Unpublished</option>
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