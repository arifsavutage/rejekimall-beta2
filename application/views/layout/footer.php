<div id="footer">
	<!-- start plugin footer (EXTERNAL SOURCE FROM JQUERY)--> 
	<script src="<?php echo base_url().'asset/plugin/jQueryStickyFooter1.1/jQuery Sticky Footer 1.1.js'?>"></script>
	<link rel="stylesheet" href="<?php echo 
	base_url().'asset/plugin/jQueryStickyFooter1.1/footerConfigProrief.css'?>" />
	<!-- end plugin footer (EXTERNAL SOURCE FROM JQUERY)-->

	<!-- start plugin footer (EXTERNAL SOURCE FROM JQUERY)--> 
	<script src="<?php echo base_url().'asset/plugin/jQueryStickyFooter1.1/jQuery Sticky Footer 1.1.js'?>"></script>
	<link rel="stylesheet" href="<?php echo base_url().'asset/plugin/jQueryStickyFooter1.1/footerConfigProrief.css'?>" />
	<!-- end plugin footer (EXTERNAL SOURCE FROM JQUERY)-->
	
	<script src="<?php echo base_url().'asset/js/jquery.validate.js';?>"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		$('#formdft').validate({
			rules:{
				pass1:{
					minlength:6
				},
				pass2:{
					equalTo : "#pass1"
				},
				email:{
					email : true
				},
				email2:{
					email2 : true
				},
				tlp:{
					digits: true
				},
				hp:{
					digits: true
				}
			},
			messages: {
				pass1:{
					minlength:"Minimal 6 karakter"
				},
				email: {
					email: "Format email tidak valid"
				},
				email2: {
					email2: "Format email tidak valid"
				},
				pass2: {
					required: "Ulangi password di atas",
					equalTo: "Password tidak sama"
				},
				tlp:{
					digits: "Harus berupa angka"
				},
				hp:{
					digits: "Harus berupa angka"
				}
			}
		});
	});
	</script>
	<footer>
		<div style="background:#EEEEEE;">
			<div class="row" data-equalizer>
			<div class="large-2 medium-3 small-3 columns" data-equalizer-watch>
			
				<div class="linkfooter" >
					<b style="font-size:12px;">PEMBELI</b>
					<div>
						<ul class="no-bullet" >
						<li ><a href="#" >Cara Pendaftaran</a></li>
						<li><a href="#">Paduan Belanja</a></li>
						<li><a href="#">Ketentuan Member</a></li>
						<li><a href="#">Metode Pembayaran</a></li>
						<li><a href="#">Faq</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="large-2 medium-3 small-3 columns" data-equalizer-watch>
			<div class="linkfooter" >
			<b style="font-size:12px;">PENJUAL</b>
			<div  >
			<ul class="no-bullet" >
			<li><a href="#" >Cara Pendaftaran</a></li>
			<li><a href="#">Cara Berjualan</a></li>
			<li><a href="#">Ketentuan Seller</a></li>
			<li><a href="#">Faq</a></li>
			</ul>
			</div>
			</div>
			</div>

			<div class="large-2 medium-3 small-3 columns" data-equalizer-watch>
			<div class="linkfooter" >
			<b style="font-size:12px;">REJEKIMALL</b>
			<div>
			<ul class="no-bullet">
			<li><a href="<?php echo base_url(); ?>page/about">Tentang Kami</a></li>
			<li><a href="<?php echo base_url(); ?>page/komplain">Laporan Komplain</a></li>
			</ul>
			</div>
			</div>
			</div>

			<div class="large-2 medium-3 small-3 columns" data-equalizer-watch>
			<div class="linkfooter" >
			<b style="font-size:12px;">BANTUAN</b>
			<ul class="no-bullet">
			<li><a href="#">Syarat & Ketentuan</a></li>
			<li><a href="#">Kebijakan Privasi</a></li>
			<li><a href="#">Kritik & Saran</a></li>
			</ul>
			</div>      
			</div>


			<div class="large-2 medium-3 small-12 columns" data-equalizer-watch>
			<div class="linkfooter " >
			<b  style="font-size:12px;">TEMUKAN KAMI</b>
			<ul class="no-bullet">
			<li>
			<div class="row fullscreen text-center">
			<a class="large-4 medium-4 small-4 columns fi-social-facebook" style="font-size:40px;color:#41669d;" href="#"></a>
			<a class="large-4 medium-4 small-4 columns fi-social-twitter" style="font-size:40px;color:#40bded;" href="#"></a>
			<a class="large-4 medium-4 small-4 columns fi-social-youtube" style="font-size:40px;color:#da3227;" href="#"></a>
			</div>
			<div class="row fullscreen text-center">
			<a class="large-4 medium-4 small-4 columns fi-social-instagram" style="font-size:40px;color:#944e22;" href="#"></a>
			<a class="large-4 medium-4 small-4 columns fi-social-pinterest" style="font-size:40px;color:#d32434;" href="#"></a>
			<a class="large-4 medium-4 small-4 columns fi-social-google-plus" style="font-size:40px;color:#e04a38;" href="#"></a>
			</div>
			</li>
			</ul>
			</div>
			</div>

			<div class="large-2 medium-3 small-12 columns" data-equalizer-watch>
			<div class="linkfooter" >
			<b style="font-size:12px;">DOWNLOAD</b>
			<div class="text-center">
			<div class="row">
			<a class="large-12 medium-12 small-12 columns" href="index.php">
			<img src="<?php echo base_url().'asset/img/googleplay.png'?>" >
			</a>
			</div>
			<br>
			<div class="row">
			<a class="large-12 medium-12 small-12 columns" href="index.php">
			<img src="<?php echo base_url().'asset/img/appstore.png'?>" >
			</a>
			</div>
			</div>
			</div>
			</div>

			</div>
			<br>

			<div style="background:#FDFDFD;padding-top:10px;padding-bottom:20px;">

			<div class="row" style="font-size:11px;color:#AAAAAA;">
			<div class="large-12 medium-2 small-12 show-for-small hide-for-large hide-for-medium columns">Pembayaran & Jasa Pengiriman</div> 
			<div class="large-2 medium-2 small-12 hide-for-small columns">Pembayaran Instan</div> 
			<div class="large-2 medium-2 small-12 hide-for-small columns">Pembayaran ATM</div>
			<div class="large-5 medium-6 small-12 hide-for-small columns">Bank Transfer</div>
			<div class="large-3 medium-2 small-12 hide-for-small columns">Jasa Pengiriman</div>
			</div>
			<div class="row" data-equalizer>
			<div class="large-2 medium-2 small-12 columns" data-equalizer-watch><img src="<?php echo base_url().'asset/img/f1.png'?>" style="max-height:40px;"></div> 
			<div class="large-2 medium-2 small-12 columns" data-equalizer-watch><img src="<?php echo base_url().'asset/img/f2.png'?>"  style="max-height:40px;"></div> 
			<div class="large-5 medium-6 small-12 columns" data-equalizer-watch><img src="<?php echo base_url().'asset/img/f8.png'?>"  style="max-height:40px;"></div> 
			<div class="large-3 medium-2 small-12 columns" data-equalizer-watch><img src="<?php echo base_url().'asset/img/f5.png'?>"  style="max-height:40px;"></div> 
			</div>
			<div class="row"></div>
			<div class="row" style="font-size:11px;color:#AAAAAA;">
			<div class="large-4 medium-4 small-12 hide-for-small columns" >Bank Transfer Cepat</div> 
			<div class="large-3 medium-4 small-12 hide-for-small columns" >Kartu Kredit</div> 
			<div class="large-4 medium-4 small-12 hide-for-small columns" ></div>
			<div class="end"></div>
			</div>

			<div class="row" data-equalizer>
			<div class="large-4 medium-4 small-12 columns" data-equalizer-watch><img src="<?php echo base_url().'asset/img/f6.png'?>" style="max-height:40px;"></div> 
			<div class="large-3 medium-4 small-12 columns" data-equalizer-watch><img src="<?php echo base_url().'asset/img/f7.png'?>"  style="max-height:40px;"></div> 
			<div class="large-4 medium-4 small-12 columns" data-equalizer-watch></div> 
			<div class="end"></div>
			</div>

			</div>

			<p class="text-center" style='background:#333333;color:#888888;font-size:0.8em;min-height:50px;padding:20px;'>
				&copy; 2015 - REJEKIMALL 
			</p>
		</div>
	</footer>
</div>
</body>
</html>