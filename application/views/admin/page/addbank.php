<div class="large-12 columns">
	<h3>Tambah Bank</h3>
	<hr />
	<?php validation_errors();?>
	<form name="bank" method="post" action="">
		<div class="row">
			<div class="large-4 columns">
				<label>
				Nama Bank
				<input type="text" name="nmbank" value="" />
				</label>
			</div>
			<div class="large-4 columns">
				<label>
				No. Rekening
				<input type="text" name="norek" value="" />
				</label>
			</div>
			<div class="large-4 columns">
				<label>
				Atas Nama
				<input type="text" name="an" value="" />
				</label>
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<input type="reset" value="Cancel" class="button success" />
				<input type="submit" value="Simpan" class="button" />
			</div>
		</div>
	</form>
</div>