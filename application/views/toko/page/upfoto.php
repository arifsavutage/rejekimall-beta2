<h2>Upload Foto Profil</h2>
<hr />
<?php 
	#echo validation_errors();
	echo $this->session->flashdata('pesan');
?>
<br />
<form name="foto" enctype="multipart/form-data" method="post" action="<?php echo base_url().'toko/upfotoexe'?>">
	<div class="row">
		<div class="large-4 columns">
			<label>
				<strong>Pilih Foto</strong>
				<input type="file" name="pp" required />
			</label>
		</div>
	</div>
	
	<div class="row">
		<div class="large-4 columns">
			<label>
				<input type="submit" value="Upload" class="button small" />
			</label>
		</div>
	</div>
</form>