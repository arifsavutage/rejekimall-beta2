<form name="akunctrl" method="post" enctype="multipart/form-data" action="<?php echo base_url();?>member/member/editakun" id="akunctrl" class="form-horizontal">
	<fieldset>			
		<div class="control-group">											
			<label class="control-label" for="passlama">Password Lama</label>
			<div class="controls">
				<input type="password" class="span4" id="paslama" name="passlama">
				<input type="hidden" value="<?php echo $detail['password'];?>" name="passlamax"/>
				<input type="hidden" value="<?php echo $detail['id_member'];?>" name="idmember"/>
			</div>			
		</div>
		
		<div class="control-group">											
			<label class="control-label" for="passbaru">Password Baru</label>
			<div class="controls">
				<input type="password" class="span4" id="passbaru" name="passbaru">
			</div>				
		</div>		
		
		<div class="control-group">											
			<label class="control-label" for="passbaru2">Re-type Password</label>
			<div class="controls">
				<input type="password" class="span4" id="passbaru2" name="passbaru2">
			</div>				
		</div>
					
		<div class="form-actions">
			<button type="submit" class="btn btn-primary">Save</button> 
			<button class="btn">Cancel</button>
		</div> <!-- /form-actions -->
	</fieldset>
</form>