<div class="widget">
	<div class="widget-header">
		<i class="icon-file"></i>
		<h3>Tambah Produk</h3>
	</div>
	<div class="widget-content">
		<a href="<?php echo base_url();?>toko/tambah_produk" class="btn btn-success">Tambah</a>
		<br />
		<br />
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th> No. </th>
					<th> Nama Produk</th>
					<th> Satuan</th>
					<th> Harga Produk</th>
					<th> Gambar Produk</th>
					<!--
					<th class="span4"> Keterangan Produk</th>
					-->
					<th> Diskon (%)</th>
					<th> Best Seller</th>
					<th class="td-actions"> </th>
				</tr>
			</thead>
			<tbody>
			<?php
				$no=1;
				foreach($detail as $listproduk){
					
					echo "
					<tr>
					<td valign='top'>$no</td>
					<td>$listproduk[nama]</td>
					<td>$listproduk[satuan]</td>
					<td>Rp. ".number_format($listproduk['harga'],0,',','.')."</td>
					<td><img width='80' height='80' src='".base_url()."asset/img/seller/produk/$listproduk[gambar]'></td>
					<!--
					<td>$listproduk[keterangan]</td>
					-->
					<td>$listproduk[diskon]</td>
					<td>";
					if($listproduk['bes_seller'] == 0){
						echo "<span class='label label-warning'>Tidak</span>";
					}
					else{
						echo "<span class='label label-info'>Ya</span>";
					}
					echo "</td>
					<td class='td-actions'>
						<a href='' class='btn btn-small btn-success'><i class='btn-icon-only icon-ok'> </i></a>
						<a href='' class='btn btn-danger btn-small'><i class='btn-icon-only icon-remove'> </i></a>
					</td>
					</tr>
					";
					$no++;
				}
			?>
			
			</tbody>
		</table>
	</div>
</div>