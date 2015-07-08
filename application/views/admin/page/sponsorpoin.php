<div class="large-12">
	<h3>Sponsor Poin</h3>
	<hr />
	<form name="paketan" method="post" action="">
		<div class="row">
			<div class="large-4 columns">
				<label>
					<strong>Sponsoring Seller</strong>
					<input type="text" name="sponseller" maxlength="2" value="<?php echo $detail['psponseller'];?>" />
					<input type="hidden" name="idpaketan" value="<?php echo $detail['ids'];?>" />
				</label>
			</div>
		</div>
		<div class="row">
			<div class="large-4 columns">
				<label>
					<strong>Sponsoring Member</strong>
					<input type="text" name="sponmember" maxlength="2" value="<?php echo $detail['psponmember'];?>" />
				</label>
			</div>
		</div>
		<div class="row">
			<div class="large-4 columns">
				<input type="submit" value="Simpan" class="button small alert" />
			</div>
		</div>
	</form>
</div>