<h3>Ubah Paket Member</h3>
<hr />
<?php validation_errors();?>
<form name="pktmember" method="post" action="<?php echo base_url().'admin/uppktmember';?>">
<div class="row">
	<div class="large-12 columns">
		<div class="row">
			<div class="large-4 columns">
				<label>
				<strong>Nama Paket</strong>
				<input type="text" name="nmpaket" maxlength="30" value="<?php echo $detail['nmpaket'];?>">
				<input type="hidden" name="idpkt" value="<?php echo $detail['id_pkt'];?>">
				</label>
			</div>
			<div class="large-4 columns">
				<label>
				<strong>Harga Paket</strong>
				<input type="text" name="harga" maxlength="10" value="<?php echo $detail['harga'];?>">
				</label>
			</div>
			<div class="large-4 columns">
				<label>
				<strong>Jumlah Poin</strong>
				<input type="text" name="poin" maxlength="3" value="<?php echo $detail['poin'];?>">
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