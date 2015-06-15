<div class="widget">
	<div class="widget-header">
		<i class="icon-file"></i>
		<h3>Data Kategori</h3>
	</div>
	<div class="widget-content">
		<a href="<?php echo base_url();?>toko/tambah_kategori" class="btn btn-success">Tambah</a>
		<br />
		<br />
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th> No. </th>
					<th> Nama Kategori</th>
					<th class="td-actions"> </th>
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
					<td class='td-actions'>
						<a href='' class='btn btn-small btn-success'><i class='btn-icon-only icon-ok'> </i></a>
						<a href='' class='btn btn-danger btn-small'><i class='btn-icon-only icon-remove'> </i></a>
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