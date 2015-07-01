<h2>Tambah Produk</h2>
<hr />
	
		<?php
			echo validation_errors();
			echo $this->session->flashdata('pesan');
		?>
		<br />
		<?php echo form_open_multipart(base_url().'toko/tambah_produk');?>
			
			<div class="row">
				<div class="large-3 columns">
				<label><strong>Kategori Produk</strong>
					<select name="katproduk">
					<option value="">- Pilih Kategori</option>
					<?php
						foreach($kategori as $listkat){
							echo "<option value='$listkat[cid]'>$listkat[nama]</option>";
						}
					?>
					</select>
				</label>
				</div>
			</div>
			
			<div class="row">
				<div class="large-6 columns">
				<label><strong>Nama Produk</strong>
					<input type="text" name="nmproduk" value="">
				</label>
				</div>
			</div>
			
			<div class="row">
				<div class="large-3 columns">
				<label><strong>Jenis Satuan</strong>
					<input type="text" name="satuan" value="">
				</label>
				</div>
			</div>
			
			<div class="row">
				<div class="large-3 columns">
				<label><strong>Harga Produk</strong>
					<input type="text" name="harga" value="">
				</label>
				</div>
			</div>
			
			<div class="row">
				<div class="large-6 columns">
				<label><strong>Ukuran</strong>
					<input type="text" name="ukuran" value="">
					<p>Pisahkan dengan koma jika lebih dari satu</p>
				</label>
				</div>
			</div>
			
			<div class="row">
				<div class="large-6 columns">
				<label><strong>Warna</strong>
					<input type="text" name="warna" value="">
					<p>Pisahkan dengan koma jika lebih dari satu</p>
				</label>
				</div>
			</div>
			
			<div class="row">
				<div class="large-6 columns">
				<label><strong>Stok</strong>
					<input type="text" name="stok" value="">
				</label>
				</div>
			</div>
			
			<div class="row">
				<div class="large-6 columns">
				<label><strong>Gambar Produk</strong>
					<input type="file" name="gambar" />
				</label>
				</div>
			</div>
			
			<div class="row">
				<div class="large-7 columns">
				<label><strong>Keterangan Produk</strong>
					<textarea name="keterangan" rows="5"></textarea>
				</label>
				</div>
			</div>
			
			<div class="row">
				<div class="large-2 columns">
				<label><strong>Diskon (%)</strong>
					<input type="text" name="diskon" value="">
				</label>
				</div>
			</div>
			
			<div class="row">
				<div class="large-3 columns">
				<label>
					<input type="submit" name="save" value="simpan" class="button" />
				</label>
				</div>
			</div>
		</form>
	</div>
</div>