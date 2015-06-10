<form name="profilcontrol" method="post" enctype="multipart/form-data" action="<?php echo base_url();?>member/member/edit" id="profilcontrol" class="form-horizontal">
	<fieldset>			
		<div class="control-group">											
			<label class="control-label" for="nama">Nama Lengkap</label>
			<div class="controls">
				<input type="text" class="span4" id="nama" name="nama" value="<?php echo $detail['nama'];?>">
				<input type="hidden" name="idmember" value="<?php echo $detail['id_member'];?>">
			</div>			
		</div>
		
		<div class="control-group">											
			<label class="control-label">Jenis Kelamin</label>
			<div class="controls">
			<label class="radio inline">
			  <input type="radio"  name="jk" <?php if($detail['jk']=="Laki-laki") echo "checked";?> value="Laki-laki"> Laki-laki
			</label>
			
			<label class="radio inline">
			  <input type="radio" name="jk" <?php if($detail['jk']=="Perempuan") echo "checked";?>value="Perempuan"> Perempuan
			</label>
		  </div>			
		</div>		
		
		<div class="control-group">											
			<label class="control-label" for="email">E-mail</label>
			<div class="controls">
				<input type="text" class="span4" id="email" name="email" value="<?php echo $detail['email'];?>">
			</div>				
		</div>
		
		<div class="control-group">											
			<label class="control-label" for="alamat">Alamat Lengkap</label>
			<div class="controls">
				<textarea class="span4" id="alamat" name="alamat"><?php echo $detail['alamat'];?></textarea>
			</div>				
		</div>
		
		<div class="control-group">											
			<label class="control-label" for="kota">Kode Pos</label>
			<div class="controls">
				<input type="text" name="kdpos" id="kdpos" value="<?php echo $detail['kdpos'];?>" />
				<!--<select name="kota">
					<option value=""></option>
				</select>-->
			</div>				
		</div>
		
		<div class="control-group">											
			<label class="control-label" for="kota">Kota / Kab.</label>
			<div class="controls">
				<input type="text" name="kota" id="kota" value="<?php echo $detail['kota'];?>" />
				<!--<select name="kota">
					<option value=""></option>
				</select>-->
			</div>				
		</div>
		
		
		<div class="control-group">											
			<label class="control-label" for="propinsi">Propinsi</label>
			<div class="controls">
				<input type="text" name="propinsi" id="propinsi" value="<?php echo $detail['propinsi'];?>" />
				<!--<select name="propinsi">
					<option value=""></option>
				</select>-->
			</div>				
		</div>
		
		<div class="control-group">											
			<label class="control-label" for="negara">Negara</label>
			<div class="controls">
				<input type="text" name="negara" id="negara" value="<?php echo $detail['negara'];?>" />
				<!--<select name="negara">
					<option value=""></option>
				</select>-->
			</div>				
		</div>
		
		<div class="control-group">											
			<label class="control-label" for="hp">No. HP</label>
			<div class="controls">
				<input type="text" name="hp" id="hp" value="<?php echo $detail['no_hp'];?>" />
			</div>				
		</div>
		
		<div class="control-group">											
			<label class="control-label" for="tlp">No. Tlp</label>
			<div class="controls">
				<input type="text" name="tlp" id="tlp" value="<?php echo $detail['no_tlprmh'];?>" />
			</div>				
		</div>
		<!--
		<div class="control-group">											
			<label class="control-label" for="ktp">Scan KTP</label>
			<div class="controls">
				<input type="file" name="ktp" id="ktp"/>
			</div>
		</div>
		
		<div class="control-group">
			<div class="controls">
				<?php
					if(empty($detail['gbr_ktp'])){
						echo "<img class='img-polaroid' width='64px' height='30px' src='".base_url()."asset/img/member/nopic.png' />";
					}
					else{
						echo "<img class='img-polaroid' width='64px' height='30px' src='".base_url()."asset/img/member/ktp/$data[gbr_ktp]' />";
					}
				?>
			</div>
		</div>
		
		<div class="control-group">											
			<label class="control-label" for="foto">Foto Profil</label>
			<div class="controls">
				<input type="file" name="foto" id="foto" />
			</div>				
		</div>
		
		<div class="control-group">
			<div class="controls">
				<?php
					if(empty($detail['foto'])){
						echo "<img class='img-polaroid' width='64px' height='30px' src='".base_url()."asset/img/member/nopic.png' />";
					}
					else{
						echo "<img class='img-polaroid' width='64px' height='30px' src='".base_url()."asset/img/member/pp/$data[foto]' />";
					}
				?>
			</div>
		</div>-->
			
		<div class="form-actions">
			<button type="submit" class="btn btn-primary">Save</button> 
			<button class="btn">Cancel</button>
		</div> <!-- /form-actions -->
	</fieldset>
</form>