<div class="large-12 columns">
	<h3>Daftar Bank</h3>
	<hr />
	<a href="<?php echo base_url().'admin/addbank';?>" class="button small"><i class="fi-plus"></i> Tambah Bank</a>
	<br />
	<table class="large-12 columns">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama Bank</th>
				<th>No. Rekening</th>
				<th>Atas Nama</th>
				<th><i class="fi-widget"></i></th>
			</tr>
		</thead>
		<tbody>
		<?php
			$no=1;
			foreach($detail as $listbank){
				echo "
				<tr>
					<td>$no</td>
					<td>$listbank[nmbank]</td>
					<td>$listbank[norek]</td>
					<td>$listbank[an]</td>
					<td>
						<a href='".base_url()."admin/updatebank/$listbank[idbank]' class='button tiny success'><i class='fi-pencil'></i></a>
						<a href='".base_url()."admin/deletebank/$listbank[idbank]' class='button tiny alert' onclick='return valdel()'><i class='fi-x'></i></a>
					</td>
				</tr>
				";
				$no++;
			}
		?>
		</tbody>
	</table>
</div>