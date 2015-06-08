<div class="widget">
	<div class="widget-header">
		<i class="icon-user"></i>
		<h3>Akun Anda</h3>
	</div> <!-- /widget-header -->
	
	<div class="widget-content">
		<form name="profilcontrol" method="post" id="profilcontrol" class="form-horizontal">
			<fieldset>			
				<div class="control-group">											
					<label class="control-label" for="nama">Nama Lengkap</label>
					<div class="controls">
						<input type="text" class="span4" id="nama" name="nama" value="<?php echo $detail['nama'];?>">
					</div>			
				</div>
				
				<div class="control-group">											
					<label class="control-label">Jenis Kelamin</label>
					<div class="controls">
					<label class="radio inline">
					  <input type="radio"  name="jk" value="Laki-laki"> Laki-laki
					</label>
					
					<label class="radio inline">
					  <input type="radio" name="jk" value="Perempuan"> Perempuan
					</label>
				  </div>			
				</div>		
				
				<div class="control-group">											
					<label class="control-label" for="email">E-mail</label>
					<div class="controls">
						<input type="text" class="span4" id="email" name="email" value="">
					</div>				
				</div>
				
				<div class="control-group">											
					<label class="control-label" for="alamat">Alamat Lengkap</label>
					<div class="controls">
						<textarea class="span4" id="alamat" name="alamat"></textarea>
					</div>				
				</div>
				
				<div class="control-group">											
					<label class="control-label" for="kota">Kota / Kab.</label>
					<div class="controls">
						<input type="text" name="kota" id="kota" value="" />
						<!--<select name="kota">
							<option value=""></option>
						</select>-->
					</div>				
				</div>
				
				
				<div class="control-group">											
					<label class="control-label" for="propinsi">Propinsi</label>
					<div class="controls">
						<input type="text" name="propinsi" id="propinsi" value="" />
						<!--<select name="propinsi">
							<option value=""></option>
						</select>-->
					</div>				
				</div>
				
				<div class="control-group">											
					<label class="control-label" for="negara">Negara</label>
					<div class="controls">
						<input type="text" name="negara" id="negara" value="" />
						<!--<select name="negara">
							<option value=""></option>
						</select>-->
					</div>				
				</div>
				
				<div class="control-group">											
					<label class="control-label" for="hp">No. HP</label>
					<div class="controls">
						<input type="text" name="hp" id="hp" value="" />
					</div>				
				</div>
				
				<div class="control-group">											
					<label class="control-label" for="tlp">No. Tlp</label>
					<div class="controls">
						<input type="text" name="tlp" id="tlp" value="" />
					</div>				
				</div>
				
				<div class="control-group">											
					<label class="control-label" for="ktp">Scan KTP</label>
					<div class="controls">
						<input type="file" name="ktp" id="ktp"/>
					</div>				
				</div>
				
				<div class="control-group">											
					<label class="control-label" for="foto">Foto Profil</label>
					<div class="controls">
						<input type="file" name="foto" id="foto" />
					</div>				
				</div>
					
				<div class="form-actions">
					<button type="submit" class="btn btn-primary">Save</button> 
					<button class="btn">Cancel</button>
				</div> <!-- /form-actions -->
			</fieldset>
		</form>
				
	</div> <!-- /widget-content -->
</div>