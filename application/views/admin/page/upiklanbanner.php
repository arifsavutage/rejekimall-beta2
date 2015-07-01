<div class="large-12 columns">
	<h3>Edit Iklan Banner</h3>
	<hr />
	<?php validation_errors();?>
	<form name="banner" method="post" enctype="multipart/form-data" action="<?php echo base_url().'admin/upiklanbanner';?>">
		<div class="row">
			<div class="large-12 columns">
				<label>
					Nama Iklan
					<input type="text" name="nmiklan" value="<?php echo $detail['nmiklan'];?>" />
					<input type="hidden" name="idbanner" value="<?php echo $detail['id_banner'];?>" />
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
								
								echo "<option value='$listposisi[idpkt_baner]'";
								if($listposisi['idpkt_baner'] == $detail['idpkt_baner']) echo "selected";
								echo ">$listposisi[nmbanner] - $listposisi[ket]</option>";
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
					<input type="text" name="nmpemesan" value="<?php echo $detail['pemesan'];?>" />
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
			<img src="<?php echo base_url().'asset/img/iklan/'.$detail['gbiklan'];?>" class="th" width="30%" />
			<input type="hidden" name="gblama" value="<?php echo $detail['gbiklan'];?>" />
			<br />
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<label>
					Status
				</label>
				<input type="radio" name="status" value="1" <?php if($detail['status'] == 1) echo "checked=checked";?> /> <label>Publish</label>
				<input type="radio" name="status" value="0" <?php if($detail['status'] == 0) echo "checked=checked";?>/> <label>Un Publish</label>
				
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