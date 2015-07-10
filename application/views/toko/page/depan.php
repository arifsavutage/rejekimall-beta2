<h2>Dashbor Seller</h2>
<hr />

<ul class="tabs" data-tab>
	<li class="tab-title active"><a href="#panel1">Order <span class="label round"><?php echo $jmlorder;?></span></a></li>
	<li class="tab-title"><a href="#panel2">Transfer <span class="label round"><?php echo $transjml;?></span></a></li>
	<li class="tab-title"><a href="#panel3">Packing <span class="label round"><?php echo $jmlpacking;?></span></a></li>
	<li class="tab-title"><a href="#panel4">Shipping <span class="label round"><?php echo $jmlkirim;?></span></a></li>
	<li class="tab-title"><a href="#panel5">Droping <span class="label round success"><?php echo $jmldrop;?></span></a></li>
	<li class="tab-title"><a href="#panel6">Retur <span class="label round alert"><?php echo $jmlretur;?></span></a></li>
</ul>

<div class="tabs-content">
	<div class="content active" id="panel1">
		<table class="large-12 columns">
			<thead>
				<tr>
					<th> NO. </th>
					<th> Kode Order</th>
					<th> Nama Pembeli</th>
					<th> Tanggal Beli</th>
					<th> Total Bayar</th>
				</tr>
			</thead>
			<tbody>
			<?php
			$no=1;
			foreach($order as $listorder){
				echo "
				<tr>
					<td>$no</td>
					<td>".$listorder['idpesan']."</td>
					<td>".$listorder['nm_member']."</td>
					<td>".date('d / m / Y', strtotime($listorder['waktu']))."</td>
					<td>Rp. ".number_format($listorder['totalbayar'],0,',','.')."</td>
				</tr>
				";
				
				$no++;
			}
			?>
			</tbody>
		</table>
	</div>
	
	<div class="content" id="panel2">
		<table class="large-12 columns">
			<thead>
				<tr>
					<th> NO. </th>
					<th> Kode Order</th>
					<th> Nama Pembeli</th>
					<th> Tanggal Beli</th>
					<th> Total Bayar</th>
				</tr>
			</thead>
			<tbody>
			<?php
			$no=1;
			foreach($ordertrans as $translist){
				echo "
				<tr>
					<td>$no</td>
					<td><a href='".base_url()."toko/packing/$translist[idpesan]'>".$translist['idpesan']."</a></td>
					<td>".$translist['nm_member']."</td>
					<td>".date('d / m / Y', strtotime($translist['waktu']))."</td>
					<td>Rp. ".number_format($listorder['totalbayar'],0,',','.')."</td>
				</tr>
				";
				
				$no++;
			}
			?>
			</tbody>
		</table>
	</div>
	
	<div class="content" id="panel3">
		<table class="large-12 columns">
			<thead>
				<tr>
					<th> NO. </th>
					<th> Kode Order</th>
					<th> Nama Pembeli</th>
					<th> Tanggal Beli</th>
					<th> Total Bayar</th>
				</tr>
			</thead>
			<tbody>
			<?php
			$no=1;
			foreach($packing as $packinglist){
				echo "
				<tr>
					<td>$no</td>
					<td>".$packinglist['idpesan']."</td>
					<td>".$packinglist['nm_member']."</td>
					<td>".date('d / m / Y', strtotime($packinglist['waktu']))."</td>
					<td>Rp. ".number_format($packinglist['totalbayar'],0,',','.')."</td>
				</tr>
				";
				
				$no++;
			}
			?>
			</tbody>
		</table>
	</div>
	
	<div class="content" id="panel4">
		<table class="large-12 columns">
			<thead>
				<tr>
					<th> NO. </th>
					<th> Kode Order</th>
					<th> Nama Pembeli</th>
					<th> Tanggal Beli</th>
					<th> Total Bayar</th>
				</tr>
			</thead>
			<tbody>
			<?php
			$no=1;
			foreach($kirim as $kirimlist){
				echo "
				<tr>
					<td>$no</td>
					<td>".$kirimlist['idpesan']."</td>
					<td>".$kirimlist['nm_member']."</td>
					<td>".date('d / m / Y', strtotime($kirimlist['waktu']))."</td>
					<td>Rp. ".number_format($kirimlist['totalbayar'],0,',','.')."</td>
				</tr>
				";
				
				$no++;
			}
			?>
			</tbody>
		</table>
	</div>
	
	<div class="content" id="panel5">
		<table class="large-12 columns">
			<thead>
				<tr>
					<th> NO. </th>
					<th> Kode Order</th>
					<th> Nama Pembeli</th>
					<th> Tanggal Beli</th>
					
					<th> Total Bayar</th>
				</tr>
			</thead>
			<tbody>
			<?php
			$no=1;
			foreach($droping as $dropinglist){
				echo "
				<tr>
					<td>$no</td>
					<td>".$dropinglist['idpesan']."</td>
					<td>".$dropinglist['nm_member']."</td>
					<td>".date('d / m / Y', strtotime($dropinglist['waktu']))."</td>
					<td>Rp. ".number_format($dropinglist['totalbayar'],0,',','.')."</td>
				</tr>
				";
				
				$no++;
			}
			?>
			</tbody>
		</table>
	</div>
	
	<div class="content" id="panel6">
		<table class="large-12 columns">
			<thead>
				<tr>
					<th> NO. </th>
					<th> Kode Order</th>
					<th> Nama Pembeli</th>
					<th> Tanggal Beli</th>
					<th> Total Bayar</th>
				</tr>
			</thead>
			<tbody>
			<?php
			$no=1;
			foreach($retur as $returlist){
				echo "
				<tr>
					<td>$no</td>
					<td>".$returlist['idpesan']."</td>
					<td>".$returlist['nm_member']."</td>
					<td>".date('d / m / Y', strtotime($returlist['waktu']))."</td>
					<td>Rp. ".number_format($returlist['totalbayar'],0,',','.')."</td>
				</tr>
				";
				
				$no++;
			}
			?>
			</tbody>
		</table>
	</div>
</div>