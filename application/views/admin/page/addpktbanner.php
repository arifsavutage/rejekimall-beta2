<div class="large-12 columns">
	<h3>Tambah Paket Banner</h3>
	<hr />
	<?php validation_errors();?>
	<form name="banner" method="post" action="">
		<div class="row">
			<div class="large-12 columns">
				<label>
					Nama Banner
					<input type="text" name="nmbanner" value="" />
				</label>
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<label>
					Posisi Banner
					<select name="posisi">
					<option value="">- Pilih Posisi</option>
					<option value="1-Atas Kanan 1">Atas Kanan 1</option>
					<option value="2-Atas Kanan 2 (Slider)">Atas Kanan 2 (Slider)</option>
					<option value="3-Tengah 1">Tengah 1</option>
					<option value="4-Tengah 2">Tengah 2</option>
					<option value="5-Tengah 3">Tengah 3</option>
					<option value="6-Bawah">Bawah</option>
					</select>
				</label>
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<label>
					Harga Iklan
					<input type="text" name="harga" value="" />
				</label>
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<label>
					Durasi Iklan (Hari)
					<input type="text" maxlength="3" name="durasi" value="" />
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