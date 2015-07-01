<h2>Edit Produk</h2>
<hr />
	
		<?php
			echo validation_errors();
			echo $this->session->flashdata('pesan');
		?>
		<br />
		<?php echo form_open_multipart(base_url().'toko/edit_produk');?>
			
			<div class="row">
				<div class="large-3 columns">
				<label><strong>Kategori Produk</strong>
					<select name="katproduk">
					<option value="">- Pilih Kategori</option>
					<?php
						foreach($kategori as $listkat){
							echo "<option value='$listkat[cid]'";
							if($list['cid'] == $listkat['cid']) echo 'selected';
							echo ">$listkat[nama]</option>";
						}
					?>
					</select>
				</label>
				</div>
			</div>
			
			<div class="row">
				<div class="large-6 columns">
				<label><strong>Nama Produk</strong>
					<input type="text" name="nmproduk" value="<?php echo $list['nama'];?>">
					<input type="hidden" name="gid" value="<?php echo $list['gid'];?>">
				</label>
				</div>
			</div>
			
			<div class="row">
				<div class="large-3 columns">
				<label><strong>Jenis Satuan</strong>
					<input type="text" name="satuan" value="<?php echo $list['satuan'];?>">
				</label>
				</div>
			</div>
			
			<div class="row">
				<div class="large-3 columns">
				<label><strong>Harga Produk</strong>
					<input type="text" name="harga" value="<?php echo $list['harga'];?>">
				</label>
				</div>
			</div>
			
			<div class="row">
				<div class="large-6 columns">
				<label><strong>Ukuran</strong>
					<input type="text" name="ukuran" value="<?php echo $list['ukuran'];?>">
					<p>Pisahkan dengan koma jika lebih dari satu</p>
				</label>
				</div>
			</div>
			
			<div class="row">
				<div class="large-6 columns">
				<label><strong>Warna</strong>
					<input type="text" name="warna" value="<?php echo $list['warna'];?>">
					<p>Pisahkan dengan koma jika lebih dari satu</p>
				</label>
				</div>
			</div>
			
			<div class="row">
				<div class="large-6 columns">
				<label><strong>Stok</strong>
					<input type="text" name="stok" value="<?php echo $list['stok'];?>">
				</label>
				</div>
			</div>
			
			<div class="row">
				<div class="large-6 columns">
				<label><strong>Gambar Produk</strong>
					<input type="file" name="gambar" />
					<input type="hidden" name="gbrlama" value="<?php echo $list['gambar'];?>" />
				</label>
				<img class="th" src="<?php echo base_url().'asset/img/seller/produk/'.$list['gambar'];?>" width="100" height="120" />
				</div>
			</div>
			
			<div class="row">
				<div class="large-7 columns">
				<label><strong>Keterangan Produk</strong>
					<textarea name="keterangan" rows="5"><?php echo $list['keterangan'];?></textarea>
				</label>
				</div>
			</div>
			
			<div class="row">
				<div class="large-2 columns">
				<label><strong>Diskon (%)</strong>
					<input type="text" name="diskon" value="<?php echo $list['diskon'];?>">
				</label>
				</div>
			</div>
			
			<div class="row">
				<div class="large-3 columns">
				<label>
					<input type="submit" name="save" value="Edit" class="button success" />
				</label>
				</div>
			</div>
		</form>
	</div>
</div>