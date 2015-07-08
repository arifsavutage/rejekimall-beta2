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
		<h3>By Kategori <?php echo $this->uri->segment(3);?></h3>
		<hr />
		<?php
			$kolom	= 3;
			$count	= 0;
			
			echo "<table style='border:none;' class='large-12 medium-12 small-12 columns'><tr>";
			foreach($detail as $list){
				if($count > $kolom){
					echo "</tr><tr>";					
					$count = 0;
				}
			
				$count++;
				
				echo "<td>
				<ul class='pricing-table'>
					<li>
						<a href='".base_url()."produk/detail/".$list['gid']."'>
							<center>
							<img class='th' width='125' height='150' src='".base_url()."asset/img/seller/produk/".$list['gambar']."'>
							</center>
						</a>
					</li>
					<li>
					<p class='description'>
							<a href='".base_url()."produk/detail/".$list['gid']."' style='color:#e62f17;'>
								<b>$list[nama]</b>
							</a>
							<br>
							<br>";
							
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
					echo "		
						</p>
					</li>
				</ul>
				</td>";
			}
			echo "</tr></table>";
		?>
		<!--PAGING-->
		<div class="row fullscreen" style="padding:0px;margin:0px;">
		  <div class="pagination">
			<!--<ul class="pagination">
			  <li class="arrow unavailable"><a href="">&laquo;</a></li>
			  <li class="current"><a href="">1</a></li>
			  <li><a href="">2</a></li>
			  <li><a href="">3</a></li>
			  <li><a href="">4</a></li>
			  <li class="unavailable"><a href="">&hellip;</a></li>
			  <li><a href="">12</a></li>
			  <li><a href="">13</a></li>
			  <li class="arrow"><a href="">&raquo;</a></li>
			</ul>
			<br />-->
			<?php echo $paging;?>
		  </div>
		  
		</div>
		</div>
	</div>

</div>

<script src="bower_components/foundation/js/foundation.min.js"></script>
<script src="js/app.js"></script>
