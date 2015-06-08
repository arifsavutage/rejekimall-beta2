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
	
	<div id="registerpembeli">
		<div class="medium-8 columns" style="background:transparent;border:0px;" >
			<div class="" data-equalizer-watch="foo">
				<div class="row fullscreen" style="margin:0px;padding:25px 0 0 0px;">
					<div class="large-12 medium-12 small-12 columns" >
						<h3>Pendaftaran Reseller Buletin</h3>
					</div>
				</div> 
				<?php
				if(!empty($error)){
					echo "
					<div data-alert class='alert-box alert radius' style='font-size:25px;'>
					  $error
					  <a href='#' class='close'>&times;</a>
					</div>
					";
				}
				?>
				<div class="row fullscreen" style="padding-top:15px;margin:0px;">
					<div class="large-12 medium-12 small-12 columns">
						Silakan lengkapi form dibawah ini untuk mendaftar sebagai pembeli
						<hr /><br />
						<form name="memberform" id="" enctype="multipart/form-data" action="<?php echo base_url();?>member/member/tambah" method="post">
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
										<strong>Jenis Kelamin <span style="color:red;">*</span></strong>
										  <input type="radio" name="jk" value="Laki-laki" checked="checked" ><label for="laki-laki">Laki-laki</label>
										  <input type="radio" name="jk" value="perempuan" ><label for="perempuan">Perempuan</label>
									</label>
								</div>            
							</div>
							<hr />
							<div class="row">
								<div class="large-12 medium-12 small-12 columns">
									<div class="row">
										<div class="large-6 medium-12 small-12 columns">
										<label>
											<strong>User Name <span style="color:red;">*</span></strong>
											<input name="username" type="text" placeholder="ex: johnmcfee" required/>
										</label>
										</div>
										<div class="large-6 medium-12 small-12 columns">
										<label>
											<strong>E-mail <span style="color:red;">*</span></strong>
											<input name="email" type="text" placeholder="ex: john@domain.com" required />
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
							
							<hr />
							<!-- Will be use this later
							<div class="row">
							<div class="large-7 medium-12 small-12 columns">
							<label>Nama Lengkap
							<textarea placeholder=""></textarea>
							</label>
							</div>            
							</div>
							<div class="row">
							<div class="large-7 medium-12 small-12 columns">
							<label>Alamat
							<textarea placeholder=""></textarea>
							</label>
							</div>            
							</div>
							<div class="row">
							<div class="large-7 medium-12 small-12 columns">
							<label>Negara
							<select name="negara">
							<?php
							foreach($negara as $list){
								echo "<option value=".$list['id_neg'].">".$list['nama_neg']."</option>";
							}
							?>
							</select>
							</label>
							</div>            
							</div>
							<div class="row">
							<div class="large-7 medium-12 small-12 columns">
							<label>Provinsi
							<select name>
							<option value="">...</option>
							<option value="">...</option>
							<option value="">...</option>
							<option value="">...</option>
							</select>
							</label>
							</div>            
							</div>
							<div class="row">
							<div class="large-7 medium-12 small-12 columns">
							<label>Kota
							<select>
							<option value="">...</option>
							<option value="">...</option>
							<option value="">...</option>
							<option value="">...</option>
							</select>
							</label>
							</div>            
							</div>
							<div class="row">
							<div class="large-7 medium-12 small-12 columns">
							<label>Kecamatan
							<select>
							<option value="">...</option>
							<option value="">...</option>
							<option value="">...</option>
							<option value="">...</option>
							</select>
							</label>
							</div>            
							</div>
							<div class="row">
							<div class="large-7 medium-12 small-12 columns">
							<label>Kode Pos
							<input type="text" placeholder="" />
							</label>
							</div>            
							</div>
							<div class="row">
							<div class="large-7 medium-12 small-12 columns">
							<label>No HP
							<input type="text" placeholder="" />
							</label>
							</div>            
							</div>
							<div class="row">
							<div class="large-7 medium-12 small-12 columns">
							<label>Referensi
							<input type="text" placeholder="Rejekimall" />
							</label>
							</div>            
							</div>
							<div class="row">
							<div class="large-12 medium-12 small-12 columns">             
							<input type="radio" name="" value="" id=""><label>Saya Telah Setuju dengan <a href="">Syarat dan Ketentuan</a> dari RejekiMall</label>             
							</div>            
							</div>
							-->
							<div class="row">
								<div class="large-6 large-offset-4 medium-12 small-12 columns">             
									<input type="submit" placeholder="" value="Register" class="alert button expand"/> 
									<br />
									<center>atau</center>
									<br />
									<button class="button expand"><i class="fi-social-facebook"> </i>Login With facebook</button>
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
</div>