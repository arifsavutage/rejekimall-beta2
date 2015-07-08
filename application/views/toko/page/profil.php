<h2>Profil Seller</h2>
<hr />
<?php 
	echo "<strong>".validation_errors()."</strong>";
	echo $this->session->flashdata('pesan');
?>
<br />
<form id="formdft" name="profil" method="post" action="<?php echo base_url().'toko/profilseller';?>">
	<div class="row">
		<div class="large-3 columns">
			<img class="th" src="<?php echo base_url().'asset/img/seller/picprofile/'.$detail['foto'];?>" />
		</div>
		<div class="large-9 columns">
			<div class="row">
				<div class="large-6 columns">
					<label>
						<strong>Nama Toko</strong>
						<input type="text" name="nmtoko" value="<?php echo $detail['nama_toko'];?>" />
						<input type="hidden" name="idseller" value="<?php echo $detail['id_seller'];?>" />
					</label>
				</div>
				<div class="large-6 columns">
					<label>
						<strong>Nama Seller</strong>
						<input type="text" name="nmseller" value="<?php echo $detail['nama'];?>" />
					</label>
				</div>
			</div>
			
			<div class="row">
				<div class="large-12 columns">
					<label>
						<strong>Alamat</strong>
						<textarea rows="1" name="alamat"><?php echo $detail['alamat'];?></textarea>
					</label>
				</div>
			</div>
			
			<div class="row">
				<div class="large-4 columns">
					<label><strong>Negara</strong></label>
					<select name="negara">
						<option value="">- Pilih Negara</option>
						<?php
						foreach($negara as $listneg){
							echo "<option value='$listneg[id_neg]'";
							if($detail['negara'] == $listneg['id_neg']) echo "selected";
							echo ">$listneg[nama_neg]</option>";
						}
						?>
					</select>
				</div>
				<div class="large-4 columns">
					<label><strong>Propinsi</strong></label>
					<select name="propinsi">
						<option value="">- Pilih Propinsi</option>
						<?php
						foreach($prop as $listprop){
							echo "<option value='$listprop[id_prop]'";
							if($detail['provinsi'] == $listprop['id_prop']) echo "selected";
							echo ">$listprop[propinsi]</option>";
						}
						?>
					</select>
				</div>
				<div class="large-4 columns">
					<label><strong>Kota / Kab.</strong></label>
					<select name="kotakab">
						<option value="">- Pilih Kota / Kab.</option>
						<?php
						foreach($kota as $kotakab){
							echo "<option value='$kotakab[id_kab]'";
							if($detail['kota'] == $kotakab['id_kab']) echo "selected";
							echo ">$kotakab[nmkab]</option>";
						}
						?>
					</select>
				</div>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="large-8 columns">
			<label>
				<strong>Kecamatan</strong>
				<input type="text" name="kec" value="<?php echo $detail['kecamatan'];?>" />
			</label>
		</div>
		<div class="large-4 columns">
			<label>
				<strong>Kode Pos</strong>
				<input type="text" name="kdpos" value="<?php echo $detail['kodepos'];?>" />
			</label>
		</div>
	</div>
	
	<div class="row">
		<div class="large-3 columns">
			<label>
				<strong>No. Handphone</strong>
				<input type="text" name="hp" value="<?php echo $detail['nohp'];?>" />
			</label>
		</div>
		<div class="large-3 columns">
			<label>
				<strong>Pin BB</strong>
				<input type="text" name="pin" value="<?php echo $detail['pin'];?>" />
			</label>
		</div>
		<div class="large-6 columns">
			<label>
				<strong>Website</strong>
				<input type="text" name="website" placeholder="http://yourweb.com" value="<?php echo $detail['website'];?>" />
			</label>
		</div>
	</div>
	<hr />
	<h4>Akun Bank</h4>
	
	<div class="row">
		<div class="large-6 medium-12 small-12 columns">
		<label>
			<strong>Nama Bank</strong>
			<input type="text" name="nmbank" value="<?php echo $detail['namabank'];?>" />
		</label>
		</div>

		<div class="large-6 medium-12 small-12 columns">
		<label>
			<strong>Nama Pemilik Rek.</strong>
			<input type="text" name="an" value="<?php echo $detail['pemilikrek'];?>" />
		</label>
		</div>
	</div>
	<div class="row">
		<div class="large-6 medium-12 small-12 columns">
		<label>
			<strong>No. Rekening</strong>
			<input type="text" name="norek" value="<?php echo $detail['norek'];?>" />
		</label>
		</div>

		<div class="large-6 medium-12 small-12 columns">
		<label>
			<strong>Cabang</strong>
			<input type="text" name="cabang" value="<?php echo $detail['cabang'];?>" />
		</label>
		</div>
	</div>
	<hr />
	
	<div class="row">
		<div class="large-3 large-offset-4 medium-12 small-12 columns">             
			<input type="submit" placeholder="" value="Edit" class="alert button expand"/> 
		</div>            
	</div>
</form>