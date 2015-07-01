<h2>Daftar Brand</h2>
<hr />
<a href="<?php echo base_url();?>toko/addbrand" class="button small"><i class="fi-plus"></i> Tambah</a>
<br />
<br />
<table>
	<thead>
		<tr>
			<th width="100"> No. </th>
			<th width="300"> Nama Brand</th>
			<th width="300"> Gambar Brand</th>
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
			<td>$list[nmbrand]</td>
			<td class=' text-center'><img src='".base_url()."asset/img/brand/$list[gb_brand]' width='50' height='75' class='th'></td>
			<td class='td-actions'>
				<a href='".base_url()."toko/editbrand/$list[idbrand]' class='button tiny success'><i class='fi-pencil'></i></a>
				<a href='".base_url()."toko/delbrand/$list[idbrand]' onclick='return valdel()' class='button tiny alert'><i class='fi-trash'></i></a>
			</td>
			</tr>
			";
			$no++;
		}
	?>
	
	</tbody>
</table>