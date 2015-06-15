<div class="row fullscreen" style="padding-bottom:20px;">
	<div data-equalizer="foo">
		<?php
			$this->load->view('home/allproduk');
		?>
	</div>

	<!-- IKLAN BARIS -->
	<div class="medium-4 columns">
		<div  data-equalizer-watch="foo">
			<div>
				<div class="row fullscreen">
					<div class="large-12 medium-12 small-12 columns" 
					style="
					background-image: url(<?php echo base_url();?>asset/img/iklan/spaceiklan3.jpg);
					background-repeat:no-repeat;
					background-size:cover;
					min-height:150px;
					">
					</div >
				</div>
				
				<br>
			
				<div class="row fullscreen" >
					<div class="large-12 medium-12 small-12 columns" style="padding:0px;">
					<ul class="example-orbit"  data-orbit 
					data-options="animation:slide;
					pause_on_hover:false;
					animation_speed:680;
					navigation_arrows:true;
					timer_speed: 3500;
					bullets:false;">
						<li style="
						background-image: url(<?php echo base_url();?>asset/img/iklan/bigbanner.jpg);
						background-repeat:no-repeat;
						background-size:cover;
						min-height:475px;
						">   
						</li>
						<li style="
						background-image: url(<?php echo base_url();?>asset/img/iklan/bigbanner1.jpg);
						background-repeat:no-repeat;
						background-size:cover;
						min-height:475px;
						">   
						</li>
						<li style="
						background-image: url(<?php echo base_url();?>asset/img/iklan/bigbanner2.jpg);
						background-repeat:no-repeat;
						background-size:cover;
						min-height:475px;
						">   
						</li>
					</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>