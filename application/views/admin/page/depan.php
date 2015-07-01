<div class="large-12 columns">
	<h2>Dashbor Admin</h2>
	<hr />
	
	<ul class="tabs" data-tab>
		<li class="tab-title active"><a href="#panel1">Seller <span class="label round alert"><?php echo $jmlseller;?></span></a></li>
		<li class="tab-title"><a href="#panel2">Member <span class="label round alert"><?php echo $jmlmember;?></span></a></li>
	</ul>
	
	<div class="tabs-content">
		<div class="content active" id="panel1">
			<?php
				$this->load->view('admin/page/sellerbaru');
			?>
		</div>
		<div class="content" id="panel2">
			<?php
				$this->load->view('admin/page/memberbaru');
			?>
		</div>
	</div>
</div>