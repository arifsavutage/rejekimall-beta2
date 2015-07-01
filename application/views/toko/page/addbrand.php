<h2>Tambah Brand</h2>
<hr />
<?php
	echo validation_errors();
?>
<form action="<?php echo base_url();?>toko/addbrand" enctype="multipart/form-data" method="post">
	<div class="row">
		<div class="large-5 columns">
		<label>
			Nama Brand
			<input type="text" class="span6" name="nmbrand" value="">
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
		<div class="large-12 columns">
		<input type="submit" name="save" value="simpan" class="button small" />
		</div>
	</div>
</form>