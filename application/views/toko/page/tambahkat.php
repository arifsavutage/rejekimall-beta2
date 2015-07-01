<h2>Tambah Kategori</h2>
<hr />
<?php
	echo validation_errors();
?>
<form action="<?php echo base_url();?>toko/tambah_kategori" method="post">
	<div class="row">
		<div class="large-5 columns">
		<label>
			Nama Kategori
			<input type="text" class="span6" name="namakat" value="">
		</label>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns">
		<input type="submit" name="save" value="simpan" class="button small" />
		</div>
	</div>
</form>