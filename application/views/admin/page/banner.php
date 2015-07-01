<div class="large-12 columns">
	<h3>Tambah Paket Banner</h3>
	<hr />
	<ul class="tabs" data-tab>
		<li class="tab-title active"><a href="#paket1">Paket Banner</a></li>
		<li class="tab-title"><a href="#paket2">Iklan Banner</a></li>
	</ul>
	
	<div class="tabs-content">
		<div class="content active" id="paket1">
			<a href="<?php echo base_url().'admin/addpktbanner';?>" class="button small"><i class="fi-plus"></i> Tambah Paket</a>
			<hr />
			<table class="large-12 columns">
				<thead>
					<tr>
						<th>No.</th>
						<th>Nama Paket</th>
						<th>Posisi</th>
						<th>Harga Iklan</th>
						<th>Durasi</th>
						<th>Keterangan</th>
						<th><i class="fi-widget"></i></th>
					</tr>
				</thead>
				<tbody>
				<?php
				$no=1;
				foreach($pktbanner as $listpaket):
					echo"
					<tr>
						<td>$no</td>
						<td>$listpaket[nmbanner]</td>
						<td>$listpaket[posisi]</td>
						<td>Rp. ".number_format($listpaket['hrgiklan'],0,',','.')."</td>
						<td>$listpaket[durasi] hari</td>
						<td>$listpaket[ket]</td>
						<td>
							<a href='".base_url()."admin/uppktbanner/$listpaket[idpkt_baner]' class='button success tiny'><i class='fi-pencil'></i></a>
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
			<a href="<?php echo base_url().'admin/addiklanbanner';?>" class="button small"><i class="fi-plus"></i> Tambah Iklan</a>
			<hr />
			<table class="large-12 columns">
				<thead>
					<tr>
						<th>No.</th>
						<th>Nama Iklan</th>
						<th>Nama Sponsor</th>
						<th>Gambar</th>
						<th>Posisi Banner</th>
						<th>Status</th>
						<th><i class="fi-widget"></i></th>
					</tr>
					
				</thead>
				<tbody>
				<?php
				$no=1;
				foreach($iklanbanner as $listbanner):
					if($listbanner['status'] == 0){
						$status	= "<span class='label alert'>Off</span>";
					}else{
						$status	= "<span class='label'>On</span>";
					}
					echo "
						<tr>
							<td>$no</td>
							<td>$listbanner[nmiklan]</td>
							<td>$listbanner[pemesan]</td>
							<td><img src='".base_url()."asset/img/iklan/$listbanner[gbiklan]' width='30%' /></td>
							<td>
								$listbanner[nmbanner]
								<br />
								<p style='font-size:10px;color:blue;'>$listbanner[ket]</p>
							</td>
							<td>$status</td>
							<td>
								<a href='".base_url()."admin/upiklanbanner/$listbanner[id_banner]' class='button success tiny'><i class='fi-pencil'></i></a>
								<a href='".base_url()."admin/deliklanbanner/$listbanner[id_banner]' onclick ='return valdel()' class='button alert tiny'><i class='fi-x'></i></a>
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