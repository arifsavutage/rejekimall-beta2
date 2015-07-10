<h2>Konfirmasi : Packing</h2>
<hr />
<?php 
	echo "<strong>".validation_errors()."</strong>";
	echo $this->session->flashdata('pesan');
?>
<br />
<form name="packing" method="post" action="<?php echo base_url().'konfirmasi/packing';?>">
	<div class="row">
		<div class="large-12 columns">
			<table class="large-12 columns">
				<thead>
					<tr>
						<th>NO.</th>
						<th>Nama Produk</th>
						<th>Gambar Produk</th>
						<th>QTY</th>
						<th>Sub ToTal</th>
					</tr>
				</thead>
				<tbody>
				<?php
				$no=1;
				foreach($detail as $list){
					echo "
					<tr>
						<td>$no</td>
						<td>$list[nm_produk]</td>
						<td>
							<img width='100' src='".base_url()."asset/img/seller/produk/".$list['gambar']."'/>
						</td>
						<td>$list[jml]</td>
						<td>$list[subtotal]</td>
					</tr>
					";
					$no++;
				}
				?>
				</tbody>
			</table>
			<input type="hidden" name="status" value="2"/>
			<input type="hidden" name="idpesan" value="<?php echo $idpesan;?>"/>
			<input type="submit" value="Packing" class="button small"/>
		</div>
	</div>
</form>