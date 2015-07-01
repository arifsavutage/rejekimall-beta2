<div class="row fullscreen" style="min-height:800px;">
	<div class="large-3 columns">
	<?php
		$this->load->view('toko/page/panel');
	?>
	</div>
	<div class="large-9 columns">
	<div class="row">
		<div class="large-12 columns">
		<?php
		if($page){
			$this->load->view($page);
		}
		?>
		</div>
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
	   Telp : 087836325580  |  081226020880  |  085799468880
	   <br>
	   BB: 529E1E94  |  528873CE  |  52284348
	   <br>
	   admin@rejekimall.com
	 </p>
	</div>
</div>