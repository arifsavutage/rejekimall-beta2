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

				<div class="row fullscreen" style="padding-top:15px;margin:0px;">
					<div class="large-12 medium-12 small-12 columns">
						Silakan lengkapi form dibawah ini untuk mendaftar sebagai pembeli
						
						<form name="" id="" enctype="multipart/form-data" action="" method="post">
							<div class="row">
								<div class="large-7 medium-12 small-12 columns">
									<label>Username
										<input type="text" placeholder="ex: johnmcfee" />
									</label>
								</div>            
							</div>
							
							<div class="row">
								<div class="large-7 medium-12 small-12 columns">
									<label>Email
										<input type="text" placeholder="ex: john@domain.com" />
									</label>
								</div>            
							</div>
							
							<div class="row">
								<div class="large-7 medium-12 small-12 columns">
									<label>Password
										<input type="password" placeholder="" />
									</label>
								</div>            
							</div>
							
							<div class="row">
								<div class="large-7 medium-12 small-12 columns">
									<label>Re-Password
										<input type="password" placeholder="" />
									</label>
								</div>            
							</div>
							
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
								<div class="large-7 medium-12 small-12 columns">             
									<input type="submit" placeholder="" value="Register" class="alert button"/> 
									OR
									<button class="button"><i class="fi-social-facebook"> </i>Login With facebook</button>
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