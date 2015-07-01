<div class="" data-equalizer-watch="foo">
	<div class="row">
		<div class="large-12 medium-12 small-12 text-center" data-equalizer style="margin-bottom:25px;">
		  <img src="<?php echo base_url();?>asset/img/allpoducts.png" style="height:60px">
		</div>
	</div>
		
	<div class="row">
		<div class="large-12 medium-12 small-12 columns text-center" data-equalizer>
		<?php
			$kolom	= 3;
			$count	= 0;
			
			echo "<table style='border:none;'><tr>";
			foreach($randproduk as $randlist){
				if($count > $kolom){
					echo "</tr><tr>";					
					$count = 0;
				}
			
				$count++;
				
				echo "<td>
				<ul class='pricing-table'>
					<li  class='large-12 medium-12 small-12 columns' style='max-height:170px;min-height:170px;'>
						<a href='".base_url()."produk/detail/".$randlist['gid']."'>
							<center>
							<img class='th' width='100' height='125' src='".base_url()."asset/img/seller/produk/".$randlist['gambar']."'>
							</center>
						</a>
					</li>
					<li>
					<p class='description'>
							<a href='".base_url()."produk/detail/".$randlist['gid']."' style='color:#e62f17;'>
								<b>$randlist[nama]</b>
							</a>
							<br>
							<br>";
							
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
					echo "		
						</p>
					</li>
				</ul>
				</td>";
			}
			echo "</tr></table>";
		?>
		</div>
	</div>
</div>
<!-- MORE LINK -->
<div class="row fullscreen">
  <div class="large-2-right medium-2-right small-2-right columns text-right" >      
	  <a href="<?php echo base_url();?>produk/all" style="color:#e62f17;font-size:12px;">
		 MORE&nbsp;<i class="fi-fast-forward "></i></a>     
  </div>
</div>