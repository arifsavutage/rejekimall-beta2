<form name="ktpup" method="post" enctype="multipart/form-data" action="<?php echo base_url();?>member/member/uploadktp" id="ktpup" class="form-horizontal">
	<fieldset>			
		
		<div class="control-group">											
			<label class="control-label" for="ktp">File Ktp</label>
			<div class="controls">
				<input type="file" class="span4" id="ktp" name="ktp" required>
				<input type="hidden" class="span4" id="idmember" name="idmember" value="<?php echo $detail['id_member'];?>">
				<input type="hidden" class="span4" id="ktplama" name="ktplama" value="<?php echo $detail['gbr_ktp'];?>">
			</div>				
		</div>
		
		<div class="control-group">											
			<label class="control-label" for="foto">KTP Saat Ini</label>
			<div class="controls">
			<?php
			if(!empty($detail['gbr_ktp']))
			{
				echo "<img src='".base_url()."asset/img/member/ktp/$detail[gbr_ktp]' width='140' height='60'>";
			}
			else{
				echo "<img src='".base_url()."asset/img/member/nopic.png' width='140' height='140'>";
			}
			?>
			</div>				
		</div>		
		
		<div class="form-actions">
			<button type="submit" class="btn btn-primary">Upload</button>
		</div> <!-- /form-actions -->
	</fieldset>
</form>