<div class="large-12 columns">
	<h3>Tambah Iklan Banner</h3>
	<hr />
	<?php validation_errors();?>
	<form name="banner" method="post" enctype="multipart/form-data" action="<?php echo base_url().'admin/addiklanbanner';?>">
		<div class="row">
			<div class="large-12 columns">
				<label>
					Nama Iklan
					<input type="text" name="nmiklan" value="" />
				</label>
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<label>
					Pilih Paket
					<select name="pkt">
						<option value="">- Pilih Paket</option>
						<?php
							foreach($posisi as $listposisi){
								
								echo "<option value='$listposisi[idpkt_baner]'>$listposisi[nmbanner] - $listposisi[ket]</option>";
							}
						?>
					</select>
				</label>
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<label>
					Nama Pemesan
					<input type="text" name="nmpemesan" value="" />
				</label>
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<label>
					Gambar Iklan
					<input type="file" name="gbiklan" />
				</label>
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<label>
					Status
				</label>
				<input type="radio" name="status" value="1" checked="checked" /> <label>Publish</label>
				<input type="radio" name="status" value="0" /> <label>Un Publish</label>
				
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