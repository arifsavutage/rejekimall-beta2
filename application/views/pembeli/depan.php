<h3>Profil Member</h3>
<hr />
<form id="formdft" name="profil" enctype="multipart/form-data" method="post" action="<?php echo base_url().'pembeli';?>">
	<?php validation_errors();?>
	<div class="row">
		<div class="large-4 columns">
			<img src="<?php echo base_url().'asset/img/member/pp/'.$profil['foto'];?>" class="th" />
			<br />
			<br />
			<a href="<?php echo base_url().'pembeli/foto'?>" class="button tiny alert">Unggah Foto</a>
		</div>
		
		<div class="large-8 columns">
			<div class="row">
				<div class="large-12 columns">
					<label>
					<strong>Nama Lengkap</strong>
					<input type="text" name="nmlengkap" value="<?php echo $profil['nama'];?>" />
					<input type="text" name="id_member" value="<?php echo $profil['id_member'];?>" />
					</label>
				</div>
			</div>
			<div class="row">
				<div class="large-12 columns">
					<label>
						<strong>Jenis Kelamin</strong>
					</label>
					<input type="radio" name="jk" value="Laki-laki" <?php if($profil['jk']=="Laki-laki") echo "checked='checked'";?>/><label>Laki-laki</label>
					<input type="radio" name="jk" value="Perempuan" <?php if($profil['jk']=="Perempuan") echo "checked='checked'";?>/><label>Perempuan</label>
					
				</div>
			</div>
			<div class="row">
				<div class="large-12 columns">
					<label>
						<strong>Alamat
						<textarea name="alamat" rows="3"><?php echo $profil['alamat'];?></textarea>
						</strong>
					</label>
				</div>
			</div>
			
		</div>
	</div>
	<br />
	<div class="row">
		<div class="large-3 columns">
			<label>
				<strong>Kode Pos</strong>
			</label>
			<input type="text" name="kdpos" value="<?php echo $profil['kdpos'];?>" />
		</div>
		<div class="large-3 columns">
			<label>
				<strong>Negara</strong>
			</label>
			<select name="negara">
				<option value="">- Pilih Negara</option>
				<?php
				foreach($negara as $listnegara){
					echo "<option value='$listnegara[id_neg]'";
					if($profil['negara'] == $listnegara['id_neg']) echo "selected";
					echo ">$listnegara[nama_neg]</option>";
				}
				?>
			</select>
		</div>
		<div class="large-3 columns">
			<label>
				<strong>Propinsi</strong>
			</label>
			<select name="propinsi">
				<option value="">- Pilih Propinsi</option>
				<?php
				foreach($prop as $listprop){
					echo "<option value='$listprop[id_prop]'";
					if($profil['propinsi'] == $listprop['id_prop']) echo "selected";
					echo ">$listprop[propinsi]</option>";
				}
				?>
			</select>
		</div>
		<div class="large-3 columns">
			<label>
				<strong>Kota / Kab.</strong>
			</label>
			<select name="kotakab">
				<option value="">- Pilih Kota / Kab.</option>
				<?php
				foreach($kota as $listkota){
					echo "<option value='$listkota[id_kab]'";
					if($profil['kota'] == $listkota['id_kab']) echo "selected";
					echo ">$listkota[nmkab]</option>";
				}
				?>
			</select>
		</div>
	</div>
	
	<div class="row">
		<div class="large-4 columns">
			<label>
				<strong>Email</strong>
			</label>
			<input type="text" id="email" name="email" value="<?php echo $profil['email'];?>" />
		</div>
		<div class="large-4 columns">
			<label>
				<strong>No. Hp</strong>
			</label>
			<input type="text" name="hp" value="<?php echo $profil['no_hp'];?>" />
		</div>
		<div class="large-4 columns">
			<label>
				<strong>Tlp. Rumah</strong>
			</label>
			<input type="text" name="tlp" value="<?php echo $profil['no_tlprmh'];?>" />
		</div>
	</div>
	
	<div class="row">
		<div class="large-3 columns">
			<label>
				<strong>Ktp</strong>
			</label>
			<img src="<?php echo base_url().'asset/img/member/ktp/'.$profil['gbr_ktp'];?>" class="th">
			<br />
			<br />
			<a href="<?php echo base_url().'pembeli/ktp'?>" class="button tiny alert">Unggah Ktp</a>
		</div>
	</div>
	
	<hr />
	
	<div class="row">
		<div class="large-12 columns">
			<input type="submit" value="Ubah Profil" class="button" />
		</div>
	</div>
	<hr />
</form>