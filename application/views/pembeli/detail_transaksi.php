<h3>Detail Transaksi <?php echo $this->uri->segment(3);?></h3>
<hr />
<a href="<?php echo base_url().'pembeli/view_transaksi';?>" class="button small">Kembali</a>
<table class="large-12 columns">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama Barang</th>
			<th>Jumlah Order</th>
			<th>Subtotal</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$no=1;
		foreach($detail as $list){
			echo "
			<tr>
				<td>$no</td>
				<td>$list[nama]</td>
				<td>$list[jml]</td>
				<td>Rp. ".number_format($list['subtotal'],0,',','.')."</td>
			</tr>
			";
			$no++;
		}
	?>
	</tbody>
</table>