<div class="large-12 columns">
	<h3>Data Ongkos Kirim</h3>
	<hr />
	
	<a href="<?php echo base_url().'admin/addongkir';?>" class="button small"><i class="fi-plus"></i> Tambah Ongkir</a>
	<br />
	
	<table class="large-12 columns">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama Jasa</th>
				<th>Negara</th>
				<th>Propinsi</th>
				<th>Kota / Kab.</th>
				<th>Harga Ongkir</th>
				<th><i class="fi-widget"></i></th>
			</tr>
		</thead>
		<tbody>
		<?php
		$no=1;
		foreach($detail as $listongkir){
			echo "
				<tr>
					<td>$no</td>
					<td>$listongkir[nama]</td>
					<td>$listongkir[nama_neg]</td>
					<td>$listongkir[propinsi]</td>
					<td>$listongkir[nmkab]</td>
					<td>Rp. ".number_format($listongkir['harga'],0,',','.')."</td>
					<td>
						<a href='".base_url()."admin/upongkir/$listongkir[id_ongkir]' class='button tiny success'><i class='fi-pencil'></i></a>
					</td>
				</tr>
			";
			
			$no++;
		}
		?>
		</tbody>
	</table>
</div>