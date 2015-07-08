<div class="large-12 columns">
	<h3>Tambah Paket Seller</h3>
	<hr />
	
	<?php validation_errors();?>
	<form name="pktseller" method="post" action="<?php echo base_url().'admin/addpaketseller';?>">
	<div class="row">
		<div class="large-6 columns">
			<label>
			<strong>Nama Paket</strong>
			<input type="text" name="nmpaket" maxlength="30" value="">
			</label>
		</div>
		<div class="large-6 columns">
			<label>
			<strong>Harga Paket</strong>
			<input type="text" name="harga" maxlength="10" value="">
			</label>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns">
			<div class="row">
				<div class="large-4 columns">
					<label>
					<strong>Jumlah Poin</strong>
					<input type="text" name="poin" maxlength="3" value="">
					</label>
				</div>
				<div class="large-4 columns">
					<label>
					<strong>Jumlah Banner</strong>
					<input type="text" name="banner" maxlength="3" value="">
					</label>
				</div>
				<div class="large-4 columns">
					<label>
					<strong>Jumlah Baris Iklan</strong>
					<input type="text" name="brsiklan" maxlength="3" value="">
					</label>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns">
			<input type="reset" value="Cancle" class="button success">
			<input type="submit" name="simpan" value="Simpan" class="button">
		</div>
	</div>
	</form>
</div>