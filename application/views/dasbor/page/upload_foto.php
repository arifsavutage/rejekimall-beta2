<!--
<form name="fotoup" method="post" enctype="multipart/form-data" action="<?php echo base_url();?>member/member/uploadfoto" id="fotoup" class="form-horizontal">
-->
<?php echo form_open_multipart(base_url().'member/member/uploadfoto');?>	
	<fieldset>			
		
		<div class="control-group">											
			<label class="control-label" for="foto">File Foto</label>
			<div class="controls">
				<input type="file" class="span4" id="foto" name="foto" required>
				<input type="hidden" class="span4" id="idmember" name="idmember" value="<?php echo $detail['id_member'];?>">
				<input type="hidden" class="span4" id="fotolama" name="fotolama" value="<?php echo $detail['foto'];?>">
			</div>				
		</div>
		
		<div class="control-group">											
			<label class="control-label" for="foto">Foto Saat Ini</label>
			<div class="controls">
			<?php 
			
			if(!empty($detail['foto']))
			{
				echo "<img src='".base_url()."asset/img/member/pp/$detail[foto]' width='140' height='60'>";
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