<table class="large-12 columns">
	<thead>
		<tr>
			<th> NO. </th>
			<th> Nama Member</th>
			<th> Email Member</th>
			<th> Username</th>
			<th> <i class="fi-widget"></i></th>
		</tr>
	</thead>
	<tbody>
	<?php
	$no=1;
	foreach($member as $listmember):
		echo "
		<tr>
			<td> $no </td>
			<td> $listmember[nama] </td>
			<td> $listmember[email]</td>
			<td> $listmember[user_id]</td>
			<td class='td-actions'>
				<a href='".base_url()."admin/konfmember/$listmember[id_member]' class='button tiny'>
				<i class='fi-check'> </i>
				</a>
				<a href='".base_url()."admin/delmember/$listmember[id_member]' class='button tiny alert' onclick='return valdel()'>
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