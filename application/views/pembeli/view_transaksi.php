<h3>Data Transaksi Terakhir</h3>
<hr />
<table class="large-12 columns">
	<thead>
		<tr>
			<th>No.</th>
			<th>Kode Transaksi</th>
			<th>Tanggal</th>
			<th>Total Bayar Item</th>
			<th>Ongkir</th>
			<th>Total Transfer</th>
			<th><i class="fi-widget"></i></th>
		</tr>
	</thead>
	<tbody>
	<?php
		$no=1;
		foreach($order as $list){
			echo "
			<tr>
				<td>$no</td>
				<td>$list[idpesan]</td>
				<td>".date('d / m / Y', strtotime($list['waktu']))."</td>
				<td>Rp. ".number_format($list['totalbayar'],0,',','.')."</td>
				<td>Rp. ".number_format($list['ongkoskirim'],0,',','.')."</td>
				<td>";
				$total	= $list['totalbayar']+$list['ongkoskirim'];
				echo "Rp. ".number_format($total,0,',','.');
			echo "</td>
				<td>";
				if($list['status'] == 0){
					$status	= "<a href='".base_url()."pembeli/konfirm/$list[idpesan]' class='button tiny'>Konfirmasi</a>";
				}
				else if($list['status'] == 1)
				{
					$status = "<a href='#' class='button disabled tiny' title='Menunggu Verifikasi Admin'>Menunggu</a>";
				}
				else if($list['status'] == 2)
				{
					$status = "<a href='#' class='button disabled tiny'>Packing</a>";
				}
				else if($list['status'] == 3)
				{
					$status = "<a href='#' class='button disabled tiny secondary'>Shipping</a>";
				}
			echo "
					$status
					<a href='".base_url()."pembeli/detailtrans/$list[idpesan]' class='button tiny alert'>Detail</a>
				</td>
			</tr>
			";
			$no++;
		}
	?>
	</tbody>
</table>