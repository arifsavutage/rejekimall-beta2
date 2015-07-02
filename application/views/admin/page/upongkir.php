<div class="large-12 columns">
	<h3>Edit Ongkos Kirim</h3>
	<hr />
	<?php validation_errors();?>
	<form name="ongkir" method="post" action="">
		<div class="row">
			<div class="large-12 columns">
			<label>
			Nama Jasa
			<select name="idjasa">
				<option value="">- Pilih Jasa Kirim</option>
				<?php
				foreach($jasa as $listjasa){
					echo "<option value='$listjasa[id_jasa]'";
					if($listjasa['id_jasa'] == $detail['id_jasa']) echo "selected";
					echo ">$listjasa[nama]</option>";
				}
				?>
			</select>
			</label>
			</div>
		</div>
		
		<div class="row">
			<div class="large-12 columns">
			<label>
			Negara
			<select name="negara">
				<option value="">- Pilih Negara</option>
				<?php
				foreach($negara as $listnegara){
					echo "<option value='$listnegara[id_neg]'";
					if($listnegara['id_neg'] == $detail['id_neg']) echo "selected";
					echo ">$listnegara[nama_neg]</option>";
				}
				?>
			</select>
			</label>
			</div>
		</div>
		
		<div class="row">
			<div class="large-12 columns">
			<label>
			Propinsi
			<select name="prop">
				<option value="">- Pilih Propinsi</option>
				<?php
				foreach($prop as $listprop){
					echo "<option value='$listprop[id_prop]'";
					if($listprop['id_prop'] == $detail['id_prop']) echo "selected";
					echo ">$listprop[propinsi]</option>";
				}
				?>
			</select>
			</label>
			</div>
		</div>
		
		<div class="row">
			<div class="large-12 columns">
			<label>
			Kabupaten / Kota
			<select name="idkab">
				<option value="">- Pilih Kota / Kab.</option>
				<?php
				foreach($kab as $listkab){
					echo "<option value='$listkab[id_kab]'";
					if($listkab['id_kab'] == $detail['id_kab']) echo "selected";
					echo ">$listkab[nmkab]</option>";
				}
				?>
			</select>
			</label>
			</div>
		</div>
		
		<div class="row">
			<div class="large-12 columns">
			<label>
			Harga Ongkos
			<input type="text" name="harga" value="<?php echo $detail['harga'];?>" />
			<input type="hidden" name="idongkir" value="<?php echo $detail['id_ongkir'];?>" />
			</label>
			</div>
		</div>
		
		<div class="row">
			<div class="large-12 columns">
				<input type="reset" class="button success" value="Cancel" />
				<input type="submit" class="button alert" value="Edit" />
			</div>
		</div>
	</form>
</div>