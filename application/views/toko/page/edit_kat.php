<h2>Edit Kategori</h2>
<hr />
<?php
	echo validation_errors();
?>
<form action="<?php echo base_url();?>toko/editkat" method="post">
	<div class="row">
		<div class="large-5 columns">
		<label>
			Nama Kategori
			<input type="text" class="span6" name="namakat" value="<?php echo $detail['nama']?>">
			<input type="hidden" name="cid" value="<?php echo $detail['cid']?>">
		</label>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns">
		<input type="submit" name="save" value="Ubah" class="button small success" />
		</div>
	</div>
</form>