<div class="row fullscreen" style="min-height:800px;">
	<div class="large-3 columns">
	<?php
		$this->load->view('admin/page/panel');
	?>
	</div>
	<div class="large-9 columns">
	<div class="row">
	<?php
		if($page){
			$this->load->view($page);
		}
	?>
	</div>
	<script>
		function valdel(){
			var cek	= confirm("Yakin akan dihapus ?");
			
			if(cek == true){
				return true;
			}
			else{
				return false;
			}
		}
	</script>
	</div>
</div>
<div style="background:#FFFFFF;">
	<div class="row text-center">
	   <a href="#">
		<img src="<?php echo base_url();?>asset/img/logobawah.png" style="height:50px;">
	  </a>
	  <p style="color:#333333;font-size:14px;">
		   <?php
			if(preg_match("/,/", $profil['hp'])){
				$pecah	= explode(',',$profil['hp']);
				
				for($x=0;$x<count($pecah);$x++){
					echo "Telp : $pecah[$x] | ";
				}
			}else{
				echo "Telp : $profil[hp]";
			}
		   ?>
		   <br>
		   <?php
			if(preg_match("/,/", $profil['pin'])){
				$split	= explode(',',$profil['pin']);
				
				for($x=0;$x<count($split);$x++){
					echo "Pin BB : $split[$x] | ";
				}
			}else{
				echo "Pin BB : $profil[pin]";
			}
		   ?>
		   <br>
		   <?php echo "E-mail : ".$profil['email'];?>
		 </p>
	</div>
</div>
