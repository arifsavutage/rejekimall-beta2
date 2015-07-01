<h2>Edit Brand</h2>
<hr />
<?php
	echo validation_errors();
?>
<form action="<?php echo base_url();?>toko/editbrand" enctype="multipart/form-data" method="post">
	<div class="row">
		<div class="large-5 columns">
		<label>
			Nama Brand
			<input type="text" class="span6" name="nmbrand" value="<?php echo $detail['nmbrand'];?>">
			<input type="hidden" name="idbrand" value="<?php echo $detail['idbrand'];?>">
			<input type="hidden" name="brandlama" value="<?php echo $detail['gb_brand'];?>">
		</label>
		</div>
	</div>
	<div class="row">
		<div class="large-5 columns">
		<label>
			Gambar Brand
			<input type="file" class="span6" name="brand">
		</label>
		</div>
	</div>
	<div class="row">
		<div class="large-5 columns">
		<label>
			<img class="th" width="160" height="210" src="<?php echo base_url().'asset/img/brand/'.$detail['gb_brand'];?>" />
		</label>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns">
		<input type="submit" name="save" value="Edit" class="button small success" />
		</div>
	</div>
</form>