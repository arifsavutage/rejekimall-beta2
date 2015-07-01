<div class="large-12 columns">
	<h3>Edit Paket Seller</h3>
	<hr />
	
	<?php validation_errors();?>
	<form name="pktseller" method="post" action="<?php echo base_url().'admin/upsellerpaket';?>">
	<div class="row">
		<div class="large-12 columns">
			<label>
			<strong>Nama Paket</strong>
			<input type="text" name="nmpaket" maxlength="30" value="<?php echo $detail['nmpaket'];?>">
			<input type="hidden" name="idpkt" value="<?php echo $detail['idpkt'];?>">
			</label>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns">
			<div class="row">
				<div class="large-4 columns">
					<label>
					<strong>Jumlah Poin</strong>
					<input type="text" name="poin" maxlength="3" value="<?php echo $detail['poin'];?>">
					</label>
				</div>
				<div class="large-4 columns">
					<label>
					<strong>Jumlah Banner</strong>
					<input type="text" name="banner" maxlength="3" value="<?php echo $detail['iklanbaner'];?>">
					</label>
				</div>
				<div class="large-4 columns">
					<label>
					<strong>Jumlah Baris Iklan</strong>
					<input type="text" name="brsiklan" maxlength="3" value="<?php echo $detail['iklanbaris'];?>">
					</label>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns">
			<input type="reset" value="Cancle" class="button success">
			<input type="submit" name="edit" value="Edit" class="button alert">
		</div>
	</div>
	</form>
</div>