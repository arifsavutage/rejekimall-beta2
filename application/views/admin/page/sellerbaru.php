<div class='widget widget-table action-table'>
	<div class='widget-header'> <i class='icon-th-list'></i>
	<h3>Seller Baru</h3>
	</div>
	
	<div class='widget-content'>
		<?php
			echo $this->session->flashdata('pesan');
		?>
		<table class='table table-striped table-bordered'>
		<thead>
			<tr>
				<th> NO. </th>
				<th> Nama Toko</th>
				<th> Nama Seller</th>
				<th> Tgl Registrasi</th>
				<th class='td-actions'> </th>
			</tr>
		</thead>
		<tbody>
		<?php
		$no=1;
		foreach($seller as $listseller){
			echo "
			<tr>
			<td> $no </td>
			<td> $listseller[nama_toko] </td>
			<td> $listseller[nama]</td>
			<td> ".date('d/m/Y', strtotime($listseller['tgl_registrasi']))."</td>
			<td class='td-actions'>
				<a href='".base_url()."admin/confseller/$listseller[id_seller]' class='btn btn-small btn-success'>
				<i class='btn-icon-only icon-ok'> </i>
				</a>
				<a href='".base_url()."admin/delseller/$listseller[id_seller]' class='btn btn-danger btn-small'>
				<i class='btn-icon-only icon-remove'> </i>
				</a>
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