<div class="row fullscreen" style="padding-bottom:20px;">
	<!--PRODUK RAND-->
	<div class="medium-8 columns">
		<?php
			$this->load->view('home/allproduk');
		?>
	</div>

	<!-- IKLAN BARIS -->
	<div class="medium-4 columns">
		<div  data-equalizer-watch="foo">
			<div>
				<div class="row fullscreen">
					<div class="large-12 medium-12 small-12 columns" style="padding:0px;">
					<img style="width:100%;" src="<?php echo base_url().'asset/img/iklan/'.$banner1['gbiklan'];?>"/>
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
					<?php
					foreach($banner2 as $listbanner2){
						echo "
						<li>
							<img src='".base_url()."asset/img/iklan/$listbanner2[gbiklan]' />
						</li>
						";
					}
					?>
					</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>