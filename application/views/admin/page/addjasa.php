<div class="large-12 columns">
	<h3>Tambah Jasa</h3>
	<hr />
	<?php validation_errors();?>
	<form name="bank" method="post" action="<?php echo base_url().'admin/addjasa';?>">
		<div class="row">
			<div class="large-4 columns">
				<label>
				Nama Jasa
				<input type="text" name="nmjasa" value="" />
				</label>
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<input type="reset" value="Cancel" class="button success" />
				<input type="submit" value="Simpan" class="button" />
			</div>
		</div>
	</form>
</div>