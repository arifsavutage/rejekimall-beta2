<div class="widget">
	<div class="widget-header">
		<i class="icon-file"></i>
		<h3>Tambah Kategori</h3>
	</div>
	<div class="widget-content">
		<?php
			echo validation_errors();
		?>
		<form class="form-horizontal" action="<?php echo base_url();?>toko/tambah_kategori" method="post">
			<div class="control-group">											
				<label class="control-label" for="namakat">Nama Kategori</label>
				
				<div class="controls">
					<input type="text" class="span6" name="namakat" value="">
					<p class="help-block"></p>
				</div>				
			</div>
			
			<div class="control-group">											
				<div class="controls">
					<input type="submit" name="save" value="simpan" />
				</div>				
			</div>
		</form>
	</div>
</div>