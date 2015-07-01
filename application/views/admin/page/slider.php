<div class="large-12 columns">
	<h3>Tambah Iklan Slider</h3>
	<hr />
	<a href="<?php echo base_url().'admin/addslider';?>" class="button small"><i class="fi-plus"></i> Tambah</a>
	
	<table class="large-12 columns">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama Iklan</th>
				<th>Gambar Slider</th>
				<th><i class="fi-widget"></i></th>
			</tr>
		
		</thead>
		<tbody>
			<?php
			$no=1;
			foreach($detail as $listslider):
				echo "
				<tr>
					<td>$no</td>
					<td>$listslider[nmiklan]</td>
					<td>
						<img width='150' height='90' src='".base_url()."asset/img/slider/$listslider[gbslider]'/>
					</td>
					<td>
						<a href='".base_url()."admin/editslider/$listslider[idslide]' class='button tiny success'><i class='fi-pencil'></i></a>
						<a href='".base_url()."admin/delslider/$listslider[idslide]' class='button tiny alert' onclick='return valdel()'><i class='fi-x'></i></a>
					</td>
				</tr>
				";
				
				$no++;
			endforeach;
			?>
		</tbody>
	</table>
</div>