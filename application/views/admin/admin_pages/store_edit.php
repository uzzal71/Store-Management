<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Store Header
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
        <div class="panel-heading">Store Include</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-4">
                    <img src="<?php echo base_url(); ?>./assets/back_end_assets/images/store.jpg" width="100%" />
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
                        <form name="edit_store" action="<?php echo base_url('Store-Update'); ?>" method="post">
                            <div class="form-group">
                                <label for="sel1">Product Name:</label>
                                <select class="form-control" name="product_name">
                                    <option value="<?php echo $single_store->product_name ?>"><?php echo $single_store->product_name ?></option>
                                    <?php
foreach ($product_view as $product) {
	?>
                                      <option value="<?php echo $product->product_name; ?>"><?php echo $product->product_name; ?></option>
                                     <?php
}
?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="email">Product Quantity:</label>
                                <input type="number" class="form-control" name="quantity" value="<?php echo $single_store->quantity; ?>">
                                <input type="hidden" class="form-control" name="id" value="<?php echo $single_store->id; ?>">
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
<script type="text/javascript">
  document.forms['edit_store'].elements['product_name'].value = <?php echo $single_store->product_name; ?>
</script>