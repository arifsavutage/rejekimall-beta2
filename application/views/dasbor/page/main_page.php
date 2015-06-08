<div class="main">
  <div class="main-inner">
    <div class="container">
		<div class="row">
		<div class="span6 offset4">
			<div class="span3 well">
				<center>
					<img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" name="aboutme" width="140" height="140" class="img-circle">
								
					<h3><?php echo $this->session->userdata('userlogin');?></h3>
					<a href="#aboutModal" data-toggle="modal" class="btn btn-large btn-primary">Detail Profile</a>
				</center>
				
				<div class="modal hide" id="aboutModal">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">?</button>
					<h3>About Joe</h3>
					</div>
					
					<div class="modal-body" style="text-align:center;">
						<div class="row-fluid">
							<div class="span10">
								<div id="modalTab">
									<div class="tab-content">
										<div class="tab-pane active" id="about">
										<center>
										<img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
										<h3 class="media-heading">Joe Sixpack <small> USA</small></h3>
										<span><strong>Skills: </strong></span>
										<span class="label label-warning">HTML5/CSS</span>
										<span class="label label-info">Adobe CS 5.5</span>
										<span class="label label-info">Microsoft Office</span>
										<span class="label label-success">Windows XP, Vista, 7</span>
										</center>
										<hr>
										
										<center>
										<p class="text-left"><strong>Bio: </strong><br>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sem dui, tempor sit amet commodo a, vulputate vel tellus.</p>
										<br>
										</center>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div><!-- Profile -->
		
		<div class="row">
		<div class="span8 offset2">
		
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
							<td> <?php echo number_format('150000',0,'.',',');?></td>
							<td> Shipped </td>
						</tr>
						
						<tr>
							<td> Agar - agar swallow </td>
							<td> 250 box </td>
							<td> <?php echo number_format('2500000',0,'.',',');?></td>
							<td> Confirmed </td>
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
							<td> <?php echo number_format('25000',0,'.',',');?></td>
							<td> Shipped </td>
						</tr>
					</tbody>
					</table>
				</div>
			</div>
		</div>
		</div>
		
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->