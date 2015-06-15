<div class="row fullscreen" data-equalizer="foo" style="background:transparent;padding:0px;margin:0px;border:0px;">

  <div class="medium-2 columns" style="background:transparent;padding:0px;margin:0px;border:0px;">

    <div class="hide-for-small" data-equalizer-watch="foo" >
        <div class="row fullscreen" data-equalizer="bar">
         <?php
          $this->load->view('leftbar/leftbarcategory');
          $this->load->view('leftbar/leftbarsupport');
        ?>
        </div>      
    </div>
    </div>

	<div class="medium-10 columns" style="background:transparent;border:0px;" >
    <div class="" data-equalizer-watch="foo">   
	<?php
		foreach($detail as $list){
	?>
		<div class="large-3 medium-6 small-12 columns text-center">
			<ul class="pricing-table" data-equalizer-watch>
				<li class="large-12 medium-12 small-12 columns" style="max-height:170px;min-height:170px;">
					<a href="<?php echo base_url().'produk/detail/'.$list['gid'];?>">
					<img src="<?php echo base_url();?>asset/img/seller/produk/<?php echo $list['gambar'];?>">
					</a>
				</li>       
				<li>
				<p class="description" >
					<a href="<?php echo base_url().'produk/detail/'.$list['gid'];?>" style="color:#e62f17;">
						<b><?php echo $list['nama'];?></b>
					</a>
					<br />
					<?php
						if($list['diskon'] == 0 || empty($list['diskon'])){
							echo "<b style='font-size:16px;'>Rp. ".number_format($list['harga'],0,',','.')."</b>";
						}
						else{
							$harganew	= $list['harga']-($list['harga']*($list['diskon']/100));
							
							echo "
							<strike><br> Rp. ".number_format($list['harga'],0,',','.')."</strike><br>
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

</div>

<script src="bower_components/foundation/js/foundation.min.js"></script>
<script src="js/app.js"></script>
