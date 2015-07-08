<div class="large-12 columns">
	<h3>Edit Paket & Sponsoran</h3>
	<hr />
	<form name="paketan" method="post" action="">
		<div class="row">
			<div class="large-4 columns">
				<label>
					<strong>Nama Paket</strong>
					<input type="text" name="nmpaket" value="<?php echo $detail['nmpaket'];?>" />
					<input type="hidden" name="ids" value="<?php echo $detail['ids'];?>" />
				</label>
			</div>
		</div>
		<div class="row">
			<div class="large-4 columns">
				<label>
					<strong>Jumlah Poin Sponsor</strong>
					<input type="text" name="poinspon" value="<?php echo $detail['poinspon'];?>" />
				</label>
			</div>
		</div>
		
		<div class="row">
			<div class="large-4 columns">
				<label>
					<strong>Harga Paket</strong>
					<input type="text" name="hrgpaket" value="<?php echo $detail['hrgpkt'];?>" />
				</label>
			</div>
		</div>
		
		<div class="row">
			<div class="large-4 columns">
				<label>
					<strong>Untuk</strong>
					<select name="untuk">
						<option value="">- Pilih</option>
						<option value="seller" <?php if($detail['untuk']=="seller")echo "selected";?>>SELLER</option>
						<option value="member" <?php if($detail['untuk']=="member")echo "selected";?>>MEMBER</option>
					</select>
				</label>
			</div>
		</div>
		
		<div class="row">
			<div class="large-4 columns">
				<input type="submit" value="Edit" class="button small alert" />
			</div>
		</div>
	</form>
</div>