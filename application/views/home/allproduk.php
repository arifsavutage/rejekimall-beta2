<div class="medium-8 columns" >
	<div class="" data-equalizer-watch="foo">

		<div class="large-12 medium-12 small-12 text-center" data-equalizer style="margin-bottom:25px;">
		  <img src="<?php echo base_url();?>asset/img/allpoducts.png" style="height:60px">
		</div>

		<div class="row" data-equalizer>
		<?php
			foreach($randproduk as $randlist){
		?>
			<div class="large-3 medium-6 small-12 columns text-center">
				<ul class="pricing-table" data-equalizer-watch>
					<li class="large-12 medium-12 small-12 columns" style="max-height:170px;min-height:170px;">
						<a href="<?php echo base_url().'produk/detail/'.$randlist['gid'];?>">
						<img src="<?php echo base_url();?>asset/img/seller/produk/<?php echo $randlist['gambar'];?>">
						</a>
					</li>       
					<li>
					<p class="description" >
						<a href="<?php echo base_url().'produk/detail/'.$randlist['gid'];?>" style="color:#e62f17;">
							<b><?php echo $randlist['nama'];?></b>
						</a>
						<br />
						<?php
							if($randlist['diskon'] == 0 || empty($randlist['diskon'])){
								echo "<b style='font-size:16px;'>Rp. ".number_format($randlist['harga'],0,',','.')."</b>";
							}
							else{
								$harganew	= $randlist['harga']-($randlist['harga']*($randlist['diskon']/100));
								
								echo "
								<strike><br> Rp. ".number_format($randlist['harga'],0,',','.')."</strike><br>
								<b style='font-size:16px;'>Rp. ".number_format($harganew,0,',','.')."</b>
								";
							}
						?>
						
					</p>
					</li>     
				</ul>
			</div>
		<?php
			}
		?>
			

		</div>
	</div>

	<!-- MORE LINK -->
	<div class="row fullscreen">
	  <div class="large-2-right medium-2-right small-2-right columns text-right" >      
		  <a href="<?php echo base_url();?>etalase" style="color:#e62f17;font-size:12px;">
			 MORE&nbsp;<i class="fi-fast-forward "></i></a>     
	  </div>
	</div>
</div>