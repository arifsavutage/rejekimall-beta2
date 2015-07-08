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
		<h3>Keranjang Belanja</h3>
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

		<?php echo form_open(base_url().'produk/updatecart'); ?>

		<table cellpadding="6" cellspacing="1" style="width:100%" border="0">

		<tr>
				<th>Nama Produk</th>
				<th>Harga Produk</th>
				<th>QTY</th>
				<th>Sub-Total</th>
				<th><i class="fi-widget"></i></th>
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
							<?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '1')); ?>
							
						</td>
						<td>Rp. <?php echo $this->cart->format_number($items['subtotal'],0,'.',','); ?></td>
						<td>
							<a href="<?php echo base_url();?>produk/removecart/<?php echo $items['rowid'];?> " class="button alert tiny">Hapus</a>
							<!--<a href="<?php echo base_url()."dasbor/bayar/$items[rowid]";?>" class="button tiny">Bayar</a>-->
						</td>
				</tr>

		<?php $i++; ?>

		<?php endforeach; ?>

		<tr>
				<td colspan="2">&nbsp;</td>
				<td><strong>Total Bayar</strong></td>
				<td><strong>Rp. <?php echo $this->cart->format_number($this->cart->total(),0,',','.'); ?></strong></td>
		</tr>

		</table>
		
		<ul class="button-group even-6">
			<li><input type="button" value="Hapus Semua" class='button alert small' onclick='clear_cart()'></li>
			<li><?php echo form_submit(array('name'=>'ubahcart','value'=>'Update Cart','class'=>'button small')); ?></li>
			<li>
				<input type="button" name="simpancart" value="Bayar Semua" class="button success small" onclick="window.location='<?php echo base_url().'produk/bayarbilling';?>'" />
			</li>
		</ul>
		<?php echo form_close();?>
	</div>
	</div>
</div>
