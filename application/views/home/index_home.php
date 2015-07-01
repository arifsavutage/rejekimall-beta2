<div id="body">

	<!-- SLIDER-->
	<?php require_once "slider.php";?>
	<br>

	<!--  PROUK DAN IKLAN BARIS -->
	<?php $this->load->view("home/produk_dan_iklan");?>


	<!-- WELLCOME RESSELER -->
	<div class="row fullscreen">
		<div class="large columns text-center" style="padding:0px;"  >
			<a class="" href="#">
				<img src="<?php echo base_url();?>asset/img/iklan/WELCOME.jpg" >
			</a>
		</div>
	</div>

	<div style="background:#DDDDDD;padding: 20px 0px 20px 0px;">
	<?php require_once "brand.php";?>
	</div> <!-- ABU2 -->
	<br>

	<!-- BEST SELLER -->
	<?php require_once "bestseller.php";?>
	<br>
	 

	<!-- RECOMENDED SELLER  -->
	<?php require_once "recomen_seller.php";?>

	<!-- RECOMENDED ITEMS -->
	<?php require_once "recomen_item.php";?>
	<br>


	<!-- IKLAN BAWAH -->
	<div class="row fullscreen">
	  <div class="large-12 columns text-center" style="padding:0px;"  >
		<a href="#">
		  <img width="100%" src="<?php echo base_url().'asset/img/iklan/'.$banner6['gbiklan'];?>" >
		</a>
	  </div>
	</div>
	<br>

	<div style="background:#FFFFFF;">
		<div class="row text-center">
		   <a href="index.php">
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
</div>