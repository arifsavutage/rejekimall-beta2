<table class="large-12 columns">
	<thead>
		<tr>
			<th> NO. </th>
			<th> Nama Toko</th>
			<th> Nama Seller</th>
			<th> Tgl Registrasi</th>
			<th><i class="fi-widget"></i></th>
		</tr>
	</thead>
	<tbody>
	<?php
	$no=1;
	foreach($seller as $listseller):
		echo "
		<tr>
			<td>$no</td>
			<td>$listseller[nama_toko]</td>
			<td> $listseller[nama]</td>
			<td> ".date('d/m/Y', strtotime($listseller['tgl_registrasi']))."</td>
			<td class='td-actions'>
				<a href='".base_url()."admin/confseller/$listseller[id_seller]' class='button tiny'>
				<i class='fi-check'> </i>
				</a>
				<a href='".base_url()."admin/delseller/$listseller[id_seller]' class='button tiny alert' onclick='return valdel()'>
				<i class='fi-x'> </i>
				</a>
			</td>
		</tr>
		";
		
		$no++;
	endforeach;
	?>
	</tbody>
</table>