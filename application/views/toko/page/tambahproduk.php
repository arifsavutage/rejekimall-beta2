<div class="widget">
	<div class="widget-header">
		<i class="icon-file"></i>
		<h3>Tambah Produk</h3>
	</div>
	<div class="widget-content">
		<?php
			echo validation_errors();
			echo $this->session->flashdata('pesan');
		?>
		<br />
		<?php echo form_open_multipart(base_url().'toko/tambah_produk');?>
			<div class="control-group">											
				<label class="control-label" for="katproduk">Kategori Produk</label>
				
				<div class="controls">
					<select name="katproduk">
					<option value="">- Pilih Kategori</option>
					<?php
						foreach($kategori as $listkat){
							echo "<option value='$listkat[cid]'>$listkat[nama]</option>";
						}
					?>
					</select>
				</div>				
			</div>
			
			<div class="control-group">											
				<label class="control-label" for="nmproduk">Nama Produk</label>
				
				<div class="controls">
					<input type="text" class="span6" name="nmproduk" value="">
					<p class="help-block"></p>
				</div>				
			</div>
			
			<div class="control-group">											
				<label class="control-label" for="satuan">Satuan</label>
				
				<div class="controls">
					<input type="text" class="span6" name="satuan" value="">
					<p class="help-block"></p>
				</div>				
			</div>
			
			<div class="control-group">											
				<label class="control-label" for="harga">Harga Produk</label>
				
				<div class="controls">
					<input type="text" class="span6" name="harga" value="">
					<p class="help-block"></p>
				</div>				
			</div>
			
			<div class="control-group">											
				<label class="control-label" for="gambar">Gambar Produk</label>
				
				<div class="controls">
					<input type="file" name="gambar" />
					<p class="help-block">pastikan dimensi gambar 600x400 pixel</p>
				</div>				
			</div>
			
			<div class="control-group">											
				<label class="control-label" for="ket">Keterangan</label>
				
				<div class="controls">
					<textarea name="keterangan" rows="8" class="span6"></textarea>
				</div>				
			</div>
			
			<div class="control-group">											
				<label class="control-label" for="diskon">Diskon (%)</label>
				
				<div class="controls">
					<input type="text" class="span6" name="diskon" value="">
					<p class="help-block">untuk pecahab gunakan koma contoh : 2.5</p>
				</div>				
			</div>
			
			<div class="control-group">											
				<label class="control-label" for="best">Best Seller</label>
				
				<div class="controls">
					<label class="radio inline">
						<input type="radio" name="best" value="1"> Ya
					</label>
					
					<label class="radio inline">
						<input type="radio" name="best" value="0" checked> Tidak
					</label>
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