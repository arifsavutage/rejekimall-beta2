<!--  SLIDE   -->
<div class="row fullscreen">
	<div class="large-12 columns text-center" style="padding:0px;"  >
		<ul class="example-orbit"  data-orbit 
		data-options="animation:slide;
				  pause_on_hover:false;
				  animation_speed:700;
				  navigation_arrows:true;
				  timer_speed: 4000;
				  bullets:false;">
		<?php
		$x	= 1;
		foreach($slider as $listslide):
			echo "
			<li>
				<img src='".base_url()."asset/img/slider/$listslide[gbslider]' alt='slide $x' />   
			</li>
			";
			
			$x++;
		endforeach;
		?>
		</ul>
	</div> 
</div>