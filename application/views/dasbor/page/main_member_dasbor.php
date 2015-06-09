<div class="span6">
	<div class="span3 well" style="background:#CCC;">
		<center>
			<img src="<?php echo base_url();?>asset/img/member/nopic.png" name="aboutme" width="140" height="140" class="img-circle">
			<br />			
			<h3><?php echo $detail['nama'];?></h3>
		</center>
	</div>
</div>
<div class="span6">
	<div class="row">
	<div class="span6">
	
		<div class="widget widget-table action-table">
			<div class="widget-header"> <i class="icon-th-list"></i>
				<h3>Toko Cik Wuu</h3>
			</div>
			
			<!-- /widget-header -->
			<div class="widget-content">
				<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th> Nama Barang </th>
						<th> Jumlah</th>
						<th> Total Bayar</th>
						<th> Status</th>
					</tr>
				</thead>
				
				<tbody>
					<tr>
						<td> Sandal Swallow </td>
						<td> 15 pcs </td>
						<td> <?php echo "Rp. ".number_format('150000',0,',','.');?></td>
						<td> <span class="label label-info">Droped</span> </td>
					</tr>
					
					<tr>
						<td> Agar - agar swallow </td>
						<td> 250 box </td>
						<td> <?php echo "Rp. ".number_format('2500000',0,',','.');?></td>
						<td> <span class="label label-success">Shipped</span> </td>
					</tr>
				</tbody>
				</table>
			</div>
		</div>
		
		<div class="widget widget-table action-table">
			<div class="widget-header"> <i class="icon-th-list"></i>
				<h3>Toko Sebelah</h3>
			</div>
			
			<!-- /widget-header -->
			<div class="widget-content">
				<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th> Nama Barang </th>
						<th> Jumlah</th>
						<th> Total Bayar</th>
						<th> Status</th>
					</tr>
				</thead>
				
				<tbody>
					<tr>
						<td> Tongsis </td>
						<td> 1 pcs </td>
						<td> <?php echo "Rp. ".number_format('25000',0,',','.');?></td>
						<td> <span class="label label-warning">Pending</span> </td>
					</tr>
				</tbody>
				</table>
			</div>
		</div>
	</div>
	</div>
</div>