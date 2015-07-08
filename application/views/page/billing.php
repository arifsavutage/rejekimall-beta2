<br />
<div class="row fullscreen" data-equalizer="foo" style="background:transparent;padding:0px;margin:0px;border:0px;">
	<div class="medium-2 columns" style="background:transparent;padding:0px;margin:0px;border:0px;">
		<div class="row fullscreen" data-equalizer="bar">
         <?php
          $this->load->view('leftbar/leftbarcategory');
          $this->load->view('leftbar/leftbarsupport');
        ?>
        </div>  
	</div>
	<div class="medium-10 columns" style="background:transparent;border:0px;" >
	<div class="row fullscreen" data-equalizer="bar">
		<h3>Bayar Billing</h3>
		<hr />
		<script type="text/javascript">
			// To conform clear all data in cart.
			function clear_cart() {
				var result = confirm('Anda yakin akan mengosongkan keranjang belanja?');

				if (result) {
					window.location = "<?php echo base_url(); ?>produk/removecart/all";
				} else {
					return false; // cancel button
				}
			}
			
			function bayar(){
				window.location.assign("<?php echo base_url().'dasbor/bayar/tambah/all';?>");
			}
		</script>
		
		<!--<ul class="breadcrumbs">
			<li><a href="#"><i class="fi-shopping-cart"></i> Cart</a></li>
			<li><a href="#"><i class="fi-dollar-bill"></i> Pembayaran</a></li>
			<li><a href="#"><i class="fi-star"></i> Packing</a></li>
		</ul>-->
<?php
	$pesan = $this->session->flashdata('pesan');
	
	if(!empty($pesan)){
		
		echo $pesan;
	}
	else{
?>
		<?php echo form_open(base_url().'produk/bayarbilling'); ?>

		<table cellpadding="6" cellspacing="1" style="width:100%" border="0">

		<tr>
				<th>Nama Produk</th>
				<th>Harga Produk</th>
				<th>QTY</th>
				<th>Sub-Total</th>
		</tr>

		<?php $i = 1; ?>

		<?php foreach ($this->cart->contents() as $items): ?>

				<?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>

				<tr>
						<td>
								<?php echo $items['name']; ?>

								<?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

										<p>
												<?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

														<strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

												<?php endforeach; ?>
										</p>

								<?php endif; ?>

						</td>
						<td>Rp. <?php echo $this->cart->format_number($items['price'],0,'.',','); ?></td>
						<td>
							<?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '1', 'readonly'=>true)); ?>
							
						</td>
						<td>Rp. <?php echo $this->cart->format_number($items['subtotal'],0,'.',','); ?></td>
				</tr>

		<?php $i++; ?>

		<?php endforeach;?>

		<tr>
				<td colspan="2">&nbsp;</td>
				<td><strong>Total Bayar</strong></td>
				<td><strong>Rp. <?php echo $this->cart->format_number($this->cart->total(),0,',','.'); ?></strong></td>
		</tr>

		</table>
		<hr />
		<br />
		<div class="row">
			<div class="large-12 columns">
				<label>
					<strong>To :</strong>
					<input type="text" name ="to" id="to" placeholder="Nama Penerima" required />
					
					<input type="hidden" name="totbayar" value="<?php echo $this->cart->total();?>"/>
				</label>
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<label>
					<strong>Alamat Penerima</strong>
					<textarea name="alamat" id="alamat" rows="2"></textarea>
				</label>
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<label>
					<strong>Kodepos</strong>
					<input type="text" name ="kdpos" id="kdpos" placeholder="Kode Pos" maxlength="10" required />
				</label>
			</div>
		</div>
		<div class="row">
			<div class="large-4 columns">
				<label>
					<strong>Negara</strong>
					<select name="negara" id="negara" required>
						<option value="">- Pilih Negara</option>
						<?php
							foreach($negara as $listneg){
								echo "<option value='$listneg[id_neg]'>$listneg[nama_neg]</option>";
							}
						?>
					</select>
				</label>
			</div>
			<div class="large-4 columns">
				<label>
					<strong>Propinsi</strong>
					<select name="propinsi" id="propinsi" required>
						<option value="">- Pilih Propinsi</option>
						<?php
							foreach($propinsi as $listprop){
								echo "<option value='$listprop[id_prop]'>$listprop[propinsi]</option>";
							}
						?>
					</select>
				</label>
			</div>
			<div class="large-4 columns">
				<label>
					<strong>Kota / Kab.</strong>
					<select name="kota" id="kota" required>
						<option value="">- Pilih Kota / Kab.</option>
						<?php
							foreach($kota as $listkota){
								echo "<option value='$listkota[id_kab]'>$listkota[nmkab]</option>";
							}
						?>
					</select>
				</label>
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<label>
					<strong>No. Kontak Penerima</strong>
					<input type="text" name ="kontak" id="kontak" placeholder="No. Hp / Telp Rumah" required />
				</label>
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<label>
					<input type="submit" name="bayar" value="Bayar billing" class="button small" />
				</label>
			</div>
		</div>
		<?php 
			echo form_close();
		}
		?>
		
	</div>
	</div>
</div>