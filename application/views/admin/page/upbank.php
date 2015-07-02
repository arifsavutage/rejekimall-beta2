<div class="large-12 columns">
	<h3>Edit Bank</h3>
	<hr />
	<?php validation_errors();?>
	<form name="bank" method="post" action="">
		<div class="row">
			<div class="large-4 columns">
				<label>
				Nama Bank
				<input type="text" name="nmbank" value="<?php echo $detail['nmbank'];?>" />
				<input type="hidden" name="idbank" value="<?php echo $detail['idbank'];?>" />
				</label>
			</div>
			<div class="large-4 columns">
				<label>
				No. Rekening
				<input type="text" name="norek" value="<?php echo $detail['norek'];?>" />
				</label>
			</div>
			<div class="large-4 columns">
				<label>
				Atas Nama
				<input type="text" name="an" value="<?php echo $detail['an'];?>" />
				</label>
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<input type="reset" value="Cancel" class="button success" />
				<input type="submit" value="Edit" class="button alert" />
			</div>
		</div>
	</form>
</div>