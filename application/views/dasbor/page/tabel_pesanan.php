<div class="span12">
<div class="widget">
	<div class="widget-header"> <i class="icon-th-list"></i>
		<h3>Cart Barang</h3>
	</div>

	<!-- /widget-header -->
	<div class="widget-content">
		<div class="row">
		<div class="span11">
		<ul class="breadcrumb">
			<li><a href="#">Transfer</a> <span class="divider">/</span></li>
			<li><a href="#">Library</a> <span class="divider">/</span></li>
			<li class="active">Data</li>
		</ul>
		</div>
		</div>
		<div class="row">
		<div class="span11">
		<br />
		<form class="form-horizontal" action="<?php echo base_url().'dasbor/bayar/tambah/all'?>" method="post">
			<table class="table table-bordered">
			<thead>
				<tr>
					<th> Nama Produk</th>
					<th> Harga Produk</th>
					<th> QTY</th>
					<th> Sub Total</th>
					<!--<th> &nbsp;</th>-->
				</tr>
			</thead>

			<tbody>
			<?php
				$allcart	= $this->cart->contents();
				
				$x=1;
				foreach($allcart as $items):
				echo "
				<tr>
					
					<td>
						<strong>$items[name]</strong>
					</td>
					<td>
						<input type='hidden' name='harga' value='$items[price]'/>
						Rp. ".number_format($items['price'],0,',','.')."
					</td>
					<td>
						<input type='hidden' name='rowid' value='$items[rowid]'/>
						<input type='hidden' name='id' value='$items[id]'/>
						<input type='hidden' name='qty' value='$items[qty]'/>
						$items[qty]
					</td>
					<td>
						<input type='hidden' name='subtotal' value='$items[subtotal]'/>
						Rp. ".number_format($items['subtotal'],0,',','.')."
					</td>
					<!--
					<td>
						<a href='#' class='btn btn-info'>Bayar</a>
					</td>
					-->
				</tr>
				";
				
				$x++;
				endforeach;
			?>
			</tbody>
			</table>
			<br />
			<fieldset>
			<legend>Data Pengiriman</legend>
			<div class="control-group">
				<label class="control-label" for="tujuan">Tujuan</label>
				<div class="controls">
					<label class="inline">
						<select name="ongkir1">
							<option value="">- Propinsi</option> 
							<option value="jabar">Jawa Barat</option> 
							<option value="jateng">Jawa Tengah</option> 
							<option value="jatim">Jawa Timur</option> 
						</select>

						<select name="ongkir2">
							<option value="">- Kota / Kab.</option> 
							<option value="SMG">SEMARANG</option> 
							<option value="PKL">PEKALONGAN</option> 
							<option value="BDG">BANDUNG</option> 
							<option value="SBY">SURABAYA</option> 
						</select>
					</label>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="tujuan">Alamat</label>
				<div class="controls">
					<textarea class="span5" name="alamat"></textarea>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="tujuan">Kode Pos</label>
				<div class="controls">
					<input type="text" name="kdpos" class="input-small"/>
				</div>
			</div>
			
			<div class="control-group">
				<div class="controls">
					<input type="submit" name="bayar" class="btn btn-large btn-danger" value="Bayar" />
				</div>
			</div>
			</fieldset>
			
			
			
			
			<!--<a href="<?php echo base_url().'dasbor/bayar/tambah/all';?>" class="btn">Semua</a>-->
		</form>
		</div>
		</div>
		
		<script type="text/javascript">
			function payall() {
				var result = confirm('Anda akan membayar semua?');

				if (result) {
					window.location = "<?php echo base_url(); ?>dasbor/bayar/tambah/all";
				} else {
					return false; // cancel button
				}
			}
		</script>
		
	</div>
</div>
</div>