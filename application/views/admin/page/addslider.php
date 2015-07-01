<div class="large-12 columns">
	<h3>Tambah Iklan Slider</h3>
	<hr />
	<?php
		validation_errors();
		echo $this->session->flashdata('pesan');
	?>
	<form name="slider" enctype="multipart/form-data" method="post" action="">
		<div class="row">
			<div class="large-6 columns">
				<label>
					<strong>Nama Iklan</strong>
					<input type="text" name="nmiklan" maxlength="30" value="" />
				</label>
			</div>
		</div>
		<div class="row">
			<div class="large-6 columns">
				<label>
					<strong>Gambar</strong>
					<input type="file" name="gbslide" />
					<p>Max 1000x400 pixel</p>
				</label>
			</div>
		</div>
		<div class="row">
			<div class="large-6 columns">
				<label>
					<input type="reset" value="Cancle" class="button success"/>
					<input type="submit" value="Simpan" class="button"/>
				</label>
			</div>
		</div>
	</form>
</div>