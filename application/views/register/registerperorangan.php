<div class="row fullscreen" data-equalizer="foo" style="background:transparent;padding:0px;margin:0px;border:0px;">

	<div class="medium-2 columns" style="background:transparent;padding:0px;margin:0px;border:0px;">
		<div class="hide-for-small" data-equalizer-watch="foo" >
			<div class="row fullscreen" data-equalizer="bar" style="margin:0px;padding:0px;">
			<?php
				$this->load->view('leftbar/leftbarcategory');
				$this->load->view('leftbar/leftbarsupport');
			?>
			</div>      
		</div>
	</div>

	<div class="medium-8 columns" style="background:transparent;border:0px;" >
		<div class="" data-equalizer-watch="foo">

			<div class="row fullscreen" style="margin:0px;padding:25px 0 0 0px;">
				<div class="large-12 medium-12 small-12 columns" >
					<h3>Pendaftaran Penjual Perorangan</h3>
				</div>
			</div> 

			<div class="row fullscreen" style="padding-top:15px;margin:0px;">
				<div class="large-12 medium-12 small-12 columns">
				Silakan lengkapi form dibawah ini untuk mendaftar sebagai Penjual Perorangan.
				<hr />
					<?php echo validation_errors();?>
					<form name="penjual" id="penjual" enctype="multipart/form-data" action="<?php echo base_url();?>penjual/seller/tambah" method="post">
					
					<div class="row">
						<div class="large-12 medium-12 small-12 columns">
						<label>
							<strong>Emali <span style="color:red;">*</span></strong>
							<input name="email" maxlength="100" type="text" placeholder="ex: yourmail@domain.com" required />
							<p>Email akan digunakan sebagai username secara permanen, silahkan isi alamat email yang masih aktif</p>
						</label>
						</div>            
					</div>
					
					<div class="row">
						<div class="large-12 medium-12 small-12 columns">
							<div class="row">
								<div class="large-6 medium-12 small-12 columns">
								<label>
									<strong>Password <span style="color:red;">*</span></strong>
									<input name="pass1" type="password" placeholder="" required />
								</label>
								</div>

								<div class="large-6 medium-12 small-12 columns">
								<label>
									<strong>Re-Password <span style="color:red;">*</span></strong>
									<input name="pass2" type="password" placeholder="" required />
								</label>
								</div>
							</div>
						</div>            
					</div>
					
					<div class="row">
						<div class="large-12 medium-12 small-12 columns">
						<label>
							<strong>Nama Lengkap <span style="color:red;">*</span></strong>
							<input name="nama" type="text" placeholder="ex: john mcfee" required />
						</label>
						</div>            
					</div>
					
					<div class="row">
						<div class="large-12 medium-12 small-12 columns">
						<label>
							<strong>Nama Toko <span style="color:red;">*</span></strong>
							<input name="toko" type="text" placeholder="ex: antique store" required />
						</label>
						</div>            
					</div>
					
					<div class="row">
						<div class="large-12 medium-12 small-12 columns">
							<div class="row">
								<div class="large-6 medium-12 small-12 columns">
								<label>
									<strong>No. HP <span style="color:red;">*</span></strong>
									<input name="hp" type="text" placeholder="Hp. Ex : 081325xxxxxx" required />
								</label>
								</div>

								<div class="large-6 medium-12 small-12 columns">
								<label>
									<strong>Pin BB</span></strong>
									<input name="pin" type="text" placeholder="Ex : 78AB67A" />
								</label>
								</div>
							</div>
						</div>             
					</div>
					
					<div class="row">
						<div class="large-12 medium-12 small-12 columns">
						<label>
							<strong>Alamat <span style="color:red;">*</span></strong>
							<input name="alamat" type="text" placeholder="" required />
						</label>
						</div>            
					</div>
					
					<div class="row">
						<div class="large-12 medium-12 small-12 columns">
							<div class="row">
								<div class="large-4 medium-12 small-12 columns">
								<label>
									<strong>&nbsp;</strong>
									<select name="negara" required>
										<option value="">- Pilih Negara</option>
										<?php
										foreach($negara as $listneg){
											echo "<option value='$listneg[id_neg]'>$listneg[nama_neg]</option>";
										}
										?>
									</select>
								</label>
								</div>

								<div class="large-4 medium-12 small-12 columns">
								<label>
									<strong>&nbsp;</strong>
									<select name="propinsi" required>
										<option value="">- Pilih Propinsi</option>
										<?php
										foreach($prop as $listprop){
											echo "<option value='$listprop[id_prop]'>$listprop[propinsi]</option>";
										}
										?>
									</select>
								</label>
								</div>
								
								<div class="large-4 medium-12 small-12 columns">
								<label>
									<strong>&nbsp;</strong>
									<select name="kota">
										<option value="" required>- Pilih Kab/Kota</option>
										<?php
										foreach($kota as $listkota){
											echo "<option value='$listkota[id_kab]'>$listkota[nmkab]</option>";
										}
										?>
									</select>
								</label>
								</div>
							</div>
						</div>             
					</div>
					
					<div class="row">
						<div class="large-12 medium-12 small-12 columns">
							<div class="row">
								<div class="large-8 medium-12 small-12 columns">
								<label>
									<strong>Kecamatan <span style="color:red;">*</span></strong>
									<input type="text" name="kec" required />
								</label>
								</div>

								<div class="large-4 medium-12 small-12 columns">
								<label>
									<strong>Kode Pos <span style="color:red;">*</span></strong>
									<input type="text" name="kdpos" required />
								</label>
								</div>
								
							</div>
						</div>             
					</div>
					
					<hr />
					<strong>Data Bank</strong>
					<hr />
					
					<div class="row">
						<div class="large-12 medium-12 small-12 columns">
							<div class="row">
								<div class="large-4 medium-12 small-12 columns">
								<label>
									<strong>Nama Bank <span style="color:red;">*</span></strong>
									<input type="text" name="nmbank" required />
								</label>
								</div>

								<div class="large-8 medium-12 small-12 columns">
								<label>
									<strong>Nama Pemilik Rek. <span style="color:red;">*</span></strong>
									<input type="text" name="an" required />
								</label>
								</div>
								
							</div>
						</div>             
					</div>
					
					<div class="row">
						<div class="large-12 medium-12 small-12 columns">
							<div class="row">
								<div class="large-6 medium-12 small-12 columns">
								<label>
									<strong>No. Rekening <span style="color:red;">*</span></strong>
									<input type="text" name="norek" required />
								</label>
								</div>

								<div class="large-6 medium-12 small-12 columns">
								<label>
									<strong>Nama Cabang <span style="color:red;">*</span></strong>
									<input type="text" name="cabang" required />
									<p>cabang tempat anda membuka rekening</p>
								</label>
								</div>
								
							</div>
						</div>             
					</div>
					<hr />
					<div class="row">
						<div class="large-6 large-offset-3 medium-12 small-12 columns">             
							<input type="submit" placeholder="" value="Register" class="alert button expand"/> 
						</div>            
					</div>
					</form>
				</div>
			</div> 
		</div>
	</div>

	<div class="medium-2 columns" style="background:transparent;padding:0px;margin:0px;border-top:0px;border-bottom:0px;border-right:0px;border-left:solid 0.1em #EFEFEF;">
		<div class="" data-equalizer-watch="foo">
			<div class="row fullscreen" style="padding:0px;margin:0px;">
			<?php
			$this->load->view('rightbar/rightbarproduct');
			?>
			</div>
			<div class="row fullscreen" style="padding:0px;margin:0px;">
			<?php
			$this->load->view('rightbar/rightbarbanner');
			?>
			</div>
		</div>
	</div>

</div>
