<div class="large-12 columns">
	<h3>Edit Nama Jasa</h3>
	<hr />
	<?php validation_errors();?>
	<form name="bank" method="post" action="<?php echo base_url().'admin/upjasa';?>">
		<div class="row">
			<div class="large-4 columns">
				<label>
				Nama Jasa
				<input type="text" name="nmjasa" value="<?php echo $detail['nama'];?>" />
				<input type="hidden" name="idjasa" value="<?php echo $detail['id_jasa'];?>" />
				</label>
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<input type="reset" value="Cancel" class="button success" />
				<input type="submit" value="Edit" class="button alert" />
			</div>
		</div>
	</form>
</div>