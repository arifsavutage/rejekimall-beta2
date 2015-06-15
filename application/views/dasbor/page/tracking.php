<div class="widget widget-table action-table">
	<div class="widget-header"> <i class="icon-th-list"></i>
		<h3>Tracking Barang</h3>
	</div>

	<!-- /widget-header -->
	<div class="widget-content">
		<div class="row">
			<div class="span8 offset2 well well-small" style="margin-top:20px;">
			
			<form>
				<label>Kode Pengiriman</label>
				<input type="text" placeholder="" class="span8">
				<span class="help-block">isikan kode pengiriman barang anda</span>
				
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
			</div>
		</div>
		
		<div class="row">
			<div class="span8 offset2 well well-small">
			
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
	
	</div>
</div>