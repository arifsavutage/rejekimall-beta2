<h2>Tambah Produk</h2>
<hr />
<a href="<?php echo base_url();?>toko/tambah_produk" class="button small"><i class="fi-plus"></i> Tambah</a>
<br />
<br />
<table class="large-12 columns">
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
			<th><i class="fi-widget"></i></th>
		</tr>
	</thead>
	<tbody>
	<?php
		$no=1;
		foreach($detail as $listproduk){
			
			echo "
			<tr>
			<td valign='top'>$no</td>
			<td>
				$listproduk[nama]
				<br />
				<span style='font-size:6;color:red;'>$listproduk[nmbrand]</span>
			</td>
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
				<a href='".base_url()."toko/edit_produk/$listproduk[gid]' class='button tiny success'><i class='fi-pencil'> </i></a>
				<a href='' class='button tiny alert'><i class='fi-trash'> </i></a>
			</td>
			</tr>
			";
			$no++;
		}
	?>
	
	</tbody>
</table>