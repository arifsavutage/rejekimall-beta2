<div class="large-12 columns">
	<h3>Daftar Jasa</h3>
	<hr />
	<a href="<?php echo base_url().'admin/addjasa';?>" class="button small"><i class="fi-plus"></i> Tambah Jasa</a>
	<br />
	<table class="large-12 columns">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama Jasa</th>
				<th><i class="fi-widget"></i></th>
			</tr>
		</thead>
		<tbody>
		<?php
			$no=1;
			foreach($detail as $listjasa){
				echo "
				<tr>
					<td>$no</td>
					<td>$listjasa[nama]</td>
					<td>
						<a href='".base_url()."admin/upjasa/$listjasa[id_jasa]' class='button tiny success'><i class='fi-pencil'></i></a>
					</td>
				</tr>
				";
				$no++;
			}
		?>
		</tbody>
	</table>
</div>