<div class="row">
	<div class="large-12 columns">
		<ul class="tabs" data-tab>
			<li class="tab-title active"><a href="#konf1">Konfirmasi Pembayaran Registrasi Seller</a></li>
			<li class="tab-title"><a href="#konf2">Konfirmasi Pembayaran Registrasi Member</a></li>
		</ul>

		<div class="tabs-content">
			<div class="content active" id="konf1">
			<h4>Seller</h4>
			<form id="formdft" name="seller" enctype="multipart/form-data" method="post" action="<?php echo base_url().'konfirmasi/konfirmseller';?>">
				<div class="row">
					<div class="large-6 columns">
						<label>
						<strong>Email</strong>
						<input type="text" id="email" name="email" required />
						</label>
					</div>
					<div class="large-6 columns">
						
					</div>
				</div>
				<div class="row">
					<div class="large-6 columns">
						<label>
						<strong>Foto Bukti Transfer</strong>
						<input type="file" name="gbtrans1" />
						</label>
					</div>
				</div>
				<div class="row">
					<div class="large-6 columns">
						<label>
							<strong>Di Transfer Ke</strong>
							<select name="banktrans1">
							<option value="">- Pilih Bank Tujuan</option>
							<?php
							foreach($bank as $banklist){
								echo "<option value='$banklist[idbank]'>$banklist[nmbank]</option>";
							}
							?>
							</select>
						</label>
					</div>
				</div>
				<div class="row">
					<div class="large-6 columns">
						<input type="submit" value="Konfirm" class="button small"/>
					</div>
				</div>
			</form>
			</div>
			<div class="content" id="konf2">
				<h4>Member</h4>
				<form id="formdft" name="member" enctype="multipart/form-data" method="post" action="<?php echo base_url().'konfirmasi/konfirmmember';?>">
				<div class="row">
					<div class="large-6 columns">
						<label>
						<strong>Email</strong>
						<input type="text" id="email2" name="email2" required />
						</label>
					</div>
					<div class="large-6 columns">
						
					</div>
				</div>
				<div class="row">
					<div class="large-6 columns">
						<label>
						<strong>Foto Bukti Transfer</strong>
						<input type="file" name="gbtrans2" />
						</label>
					</div>
				</div>
				<div class="row">
					<div class="large-6 columns">
						<label>
							<strong>Di Transfer Ke</strong>
							<select name="banktrans2">
							<option value="">- Pilih Bank Tujuan</option>
							<?php
							foreach($bank as $banklist){
								echo "<option value='$banklist[idbank]'>$banklist[nmbank]</option>";
							}
							?>
							</select>
						</label>
					</div>
				</div>
				<div class="row">
					<div class="large-6 columns">
						<input type="submit" value="Konfirm" class="button small"/>
					</div>
				</div>
			</form>
			</div>
		</div>
	</div>
</div>