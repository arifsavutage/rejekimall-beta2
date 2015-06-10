<div class="widget">
	<div class="widget-header">
		<i class="icon-user"></i>
		<h3>Akun Anda</h3>
	</div> <!-- /widget-header -->
	
	<div class="widget-content">
		<div class="tabbable">
		<ul class="nav nav-tabs">
		  <li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
		  <li><a href="#ktp" data-toggle="tab">Upload KTP</a></li>
		  <li><a href="#foto" data-toggle="tab">Upload Foto</a></li>
		  <li><a href="#akun" data-toggle="tab">Akun Login</a></li>
		</ul>
	
		<br>
	
		<div class="tab-content">
			<div class="tab-pane active" id="profile">
				<?php $this->load->view('dasbor/page/profile');?>
			</div>
			
			<div class="tab-pane" id="ktp">
				<?php $this->load->view('dasbor/page/upload_ktp');?>
			</div>
			
			<div class="tab-pane" id="foto">
				<?php $this->load->view('dasbor/page/upload_foto');?>
			</div>
			
			<div class="tab-pane" id="akun">
				<?php $this->load->view('dasbor/page/akun');?>
			</div>
		</div>
	</div>
	
	</div> <!-- /widget-content -->
</div>