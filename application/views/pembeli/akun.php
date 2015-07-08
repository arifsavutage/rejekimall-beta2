<h3>edit akun</h3>
<hr />
<form name="akun" id="formdft" enctype="multipart/form-data" method="post" action="<?php echo base_url().'pembeli/akun';?>">
<?php
	validation_errors();
	echo $this->session->flashdata('pesan');
?>
<div class="row">
	<div class="large-3 columns">
		<label>
		<strong>Password Lama</strong>
		<input type="password" name="passlama" value="" />
		<input type="hidden" name="passlamax" value="<?php echo $profil['password'];?>" />
		<input type="hidden" name="idmember" value="<?php echo $profil['id_member'];?>" />
		</label>
	</div>
</div>
<div class="row">
	<div class="large-3 columns">
		<label>
		<strong>Password Baru</strong>
		<input type="password" id="pass1" name="pass1" value="" />
		</label>
	</div>
</div>
<div class="row">
	<div class="large-3 columns">
		<label>
		<strong>Re-Type Password Baru</strong>
		<input type="password" id="pass2" name="pass2" value="" />
		</label>
	</div>
</div>
<div class="row">
	<div class="large-12 columns">
		<input type="submit" value="Edit" class="button small" />
	</div>
</div>
</form>