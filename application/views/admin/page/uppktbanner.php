<div class="large-12 columns">
	<h3>Edit Paket Banner</h3>
	<hr />
	<?php validation_errors();?>
	<form name="banner" method="post" action="<?php echo base_url().'admin/uppktbanner';?>">
		<div class="row">
			<div class="large-12 columns">
				<label>
					Nama Banner
					<input type="text" name="nmbanner" value="<?php echo $detail['nmbanner'];?>" />
					<input type="hidden" name="idpktbaner" value="<?php echo $detail['idpkt_baner'];?>" />
				</label>
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<label>
					Posisi Banner
					<select name="posisi">
						<option value="">- Pilih Posisi</option>
					<?php
						$pos	= array(
							'1'=>'Atas Kanan 1',
							'2'=>'Atas Kanan 2 (Slider)',
							'3'=>'Tengah 1',
							'4'=>'Tengah 2',
							'5'=>'Tengah 3',
							'6'=>'Bawah'
						);
						
						foreach($pos as $list=>$item){
							echo "<option value='$list-$item'";
							if($list == $detail['posisi']) echo "selected";
							echo ">$item</option>";
						}
					?>
					</select>
				</label>
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<label>
					Harga Iklan
					<input type="text" name="harga" value="<?php echo $detail['hrgiklan'];?>" />
				</label>
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<label>
					Durasi Iklan (Hari)
					<input type="text" maxlength="3" name="durasi" value="<?php echo $detail['durasi'];?>" />
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