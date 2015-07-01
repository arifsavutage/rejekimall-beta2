<div class="large-12 columns">
	<h2>Pengaturan Paket</h2>
	<hr />
	<?php echo $this->session->flashdata('pesan');?>
	<ul class="tabs" data-tab>
		<li class="tab-title active"><a href="#paket1">Paket Seller</a></li>
		<li class="tab-title"><a href="#paket2">Paket Member</a></li>
	</ul>
	
	<div class="tabs-content">
		<div class="content active" id="paket1">
			<a href="<?php echo base_url().'admin/addpaketseller';?>" class="button small"><i class="fi-plus"></i> Tambah</a>
			<hr />
			<table class="large-12 columns">
				<thead>
					<tr>
						<th>No.</th>
						<th>Nama Paket</th>
						<th>Poin</th>
						<th>Banner</th>
						<th>Iklan Baris</th>
						<th><i class="fi-widget"></i></th>
					</tr>
				</thead>
				<tbody>
				<?php
				$no=1;
				foreach($pktseller as $listpaket):
					echo"
					<tr>
						<td>$no</td>
						<td>$listpaket[nmpaket]</td>
						<td>$listpaket[poin]</td>
						<td>$listpaket[iklanbaner]</td>
						<td>$listpaket[iklanbaris]</td>
						<td>
							<a href='".base_url()."admin/upsellerpaket/$listpaket[idpkt]' class='button success tiny'><i class='fi-pencil'></i></a>
						</td>
					</tr>
					";
					$no++;
				endforeach;
				?>
				</tbody>
			</table>
		</div>
		<div class="content" id="paket2">
			<a href="<?php echo base_url().'admin/addpaketmember';?>" class="button small"><i class="fi-plus"></i> Tambah</a>
			<hr />
			<table class="large-12 columns">
				<thead>
					<tr>
						<th>No.</th>
						<th>Nama Paket</th>
						<th>Poin</th>
						<th><i class="fi-widget"></i></th>
					</tr>
					
				</thead>
				<tbody>
				<?php
				$no=1;
				foreach($pktmember as $list):
					echo "
						<tr>
							<td>$no</td>
							<td>$list[nmpaket]</td>
							<td>$list[poin]</td>
							<td>
								<a href='".base_url()."admin/uppktmember/$list[id_pkt]' class='button success tiny'><i class='fi-pencil'></i></a>
							</td>
						</tr>
					";
					$no++;
				endforeach;
				?>
				</tbody>
			</table>
		</div>
	</div>
</div>