<h2>Daftar Kategori</h2>
<hr />
<a href="<?php echo base_url();?>toko/tambah_kategori" class="button small"><i class="fi-plus"></i> Tambah</a>
<br />
<br />
<table>
	<thead>
		<tr>
			<th width="100"> No. </th>
			<th width="600"> Nama Kategori</th>
			<th width="200"><i class="fi-widget" </th>
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
				<a href='".base_url()."toko/editkat/$list[cid]' class='button tiny success'><i class='fi-pencil'></i></a>
				<a href='".base_url()."toko/delkat/$list[cid]' onclick='return valdel()' class='button tiny alert'><i class='fi-trash'></i></a>
			</td>
			</tr>
			";
			$no++;
		}
	?>
	
	</tbody>
</table>