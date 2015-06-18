<div class='widget widget-table action-table'>
	<div class='widget-header'> <i class='icon-th-list'></i>
	<h3>Member Baru</h3>
	</div>
	
	<div class='widget-content'>
	<?php
		echo $this->session->flashdata('member');
	?>
		<table class='table table-striped table-bordered'>
		<thead>
			<tr>
				<th> NO. </th>
				<th> Nama Member</th>
				<th> Email Member</th>
				<th> Username</th>
				<th class='td-actions'> </th>
			</tr>
		</thead>
		<tbody>
		<?php
		$no=1;
		foreach($member as $listmember){
			echo "
			<tr>
			<td> $no </td>
			<td> $listmember[nama] </td>
			<td> $listmember[email]</td>
			<td> $listmember[user_id]</td>
			<td class='td-actions'>
				<a href='".base_url()."admin/konfmember/$listmember[id_member]' class='btn btn-small btn-success'>
				<i class='btn-icon-only icon-ok'> </i>
				</a>
				<a href='".base_url()."admin/delmember/$listmember[id_member]' class='btn btn-danger btn-small'>
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