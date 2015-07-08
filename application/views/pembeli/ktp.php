<h3>Unggah Ktp</h3>
<hr />
<form name="ktp" enctype="multipart/form-data" method="post" action="<?php echo base_url().'pembeli/upktp';?>">
<?php
	validation_errors();
	echo $this->session->flashdata('pesan');
?>
<div class="row">
	<div class="large-12 columns">
		<label><strong>Ktp</strong></label>
		<input type="file" name="gbktp" required />
		<input type="hidden" name="idmember" value="<?php echo $profil['id_member'];?>" />
	</div>
</div>
<div class="row">
	<div class="large-12 columns">
		<input type="submit" value="Upload" class="button small" />
	</div>
</div>
</form>