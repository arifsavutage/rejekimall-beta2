<h3>Unggah Foto</h3>
<hr />
<form name="foto" enctype="multipart/form-data" method="post" action="<?php echo base_url().'pembeli/konfirmexe';?>">
<?php
	echo validation_errors();
	echo $this->session->flashdata('pesan');
?>
<div class="row">
	<div class="large-3 columns">
		<label><strong>Kode Transaksi</strong></label>
		<input type="text" name="idpesan" value="<?php echo $detail['idpesan']?>" readonly="true" />
	</div>
</div>
<div class="row">
	<div class="large-6 columns">
		<label><strong>Pilih Bank Tujuan</strong></label>
		<select name="bank" required>
			<option value="">- Pilih Bank</option>
		<?php
			foreach($bank as $listbank)
			echo "<option value='$listbank[nmbank] / $listbank[norek] / $listbank[an]'>$listbank[nmbank] / $listbank[norek] / $listbank[an]</option>";
		?>
		</select>
	</div>
</div>
<div class="row">
	<div class="large-12 columns">
		<label><strong>Bukti Transfer</strong></label>
		<input type="file" name="bukti" required />
	</div>
</div>
<div class="row">
	<div class="large-12 columns">
		<?php
		if(!empty($detail['bukti'])){
			echo "<img src='".base_url()."asset/img/member/bukti/".$detail['bukti']."' width='50%' class='th'>";
		}
		?>
	</div>
</div>
<div class="row">
	<div class="large-12 columns">
		<input type="submit" value="Upload" class="button small" />
	</div>
</div>
</form>