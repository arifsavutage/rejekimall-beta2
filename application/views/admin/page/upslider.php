<div class="large-12 columns">
	<h3>Edit Iklan Slider</h3>
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
					<input type="text" name="nmiklan" maxlength="30" value="<?php echo $detail['nmiklan'];?>" />
					<input type="hidden" name="idslide" value="<?php echo $detail['idslide'];?>" />
					<input type="hidden" name="slidelama" value="<?php echo $detail['gbslider'];?>" />
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
					<img width="180" height="110" src="<?php echo base_url().'asset/img/slider/'.$detail['gbslider'].'';?>" class="th" />
				</label>
				<br />
			</div>
		</div>
		<div class="row">
			<div class="large-6 columns">
				<label>
					<input type="reset" value="Cancle" class="button success"/>
					<input type="submit" value="Edit" class="button alert"/>
				</label>
			</div>
		</div>
	</form>
</div>