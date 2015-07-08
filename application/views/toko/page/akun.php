<h2>Akun Seller</h2>
<hr />
<?php 
	echo validation_errors();
	echo $this->session->flashdata('pesan');
?>
<br />
<form name="akun" id="formdft" method="post" action="">
	<div class="row">
		<div class="large-4 columns">
			<label>
				<strong>E-mail</strong>
				<input type="text" id="email" name="email" value="<?php echo $detail['email'];?>" required />
				<input type="hidden" name="idseller" value="<?php echo $detail['id_seller'];?>" />
			</label>
		</div>
	</div>
	<div class="row">
		<div class="large-4 columns">
			<label>
				<strong>Password Lama</strong>
				<input type="password" name="passlama" required />
				<input type="hidden" name="passlamax" value="<?php echo $detail['password'];?>" />
			</label>
		</div>
	</div>
	<div class="row">
		<div class="large-4 columns">
			<label>
				<strong>Password Baru</strong>
				<input type="password" id="pass1" name="pass1" required />
			</label>
		</div>
	</div>
	<div class="row">
		<div class="large-4 columns">
			<label>
				<strong>Ulangi Password</strong>
				<input type="password" id="pass2" name="pass2" required />
			</label>
		</div>
	</div>
	<div class="row">
		<div class="large-4 columns">
			<label>
				<input type="submit" name="edit" value="Edit" class="button small" />
			</label>
		</div>
	</div>
</form>