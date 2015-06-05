
		<?php include "headerproduct.php";?>

		<!-- FOTO PROFIL-->
		<div class="row fullscreen" data-equalizer="foo" style="background-image: url(<?php echo base_url().'img/etalase.jpg';?>);background-size:cover;background-repeat: no-repeat;margin:0px;border:0px;">
		 	<div class="row fullscreen " data-equalizer style="">
			  <div class="large-9 columns panel" data-equalizer-watch style="background:transparent;border:0px;margin:0px;">
			    <div class="row" style="padding:40px;">
			      <div class="large-10 medium-10 small-10 columns" >
			        <h2 style="color:#FFFFFF;">Kepercayaan anda adalah amanah bagi kami.</h2>
			      </div>
			      <div class="end"></div>
			  	</div>    
			  </div>
			  <div class="large-3 columns panel" data-equalizer-watch style="background:transparent;background-image: url(<?php echo base_url().'img/blacktransparent.png';?>);background-size:auto;background-repeat: repeat;border:0px;padding:0px;margin:0px;">
			    <ul class="pricing-table" style="background:transparent;">
			      <li class="price" style="background:transparent;"><img src="<?php echo base_url().'img/seller2.jpg';?>" style="max-height:150px;border:solid 6px #FFFFFF;"></li>
			      <li class="description" style="color:#FFFFFF;"><h4 style="color:#ffcb08;"><b>Nama Seller</b></h4><br>
			                          Nama Kota</li>      
			      <li class="cta-button" style="background:transparent;"><a class="tiny alert button round" href="#">Kirim Pesan</a> <a class="tiny alert button round" href="#">Jadikan Favorit</a></li>
			    </ul>       
			  </div> 
			</div>
		</div>

		<div class="row fullscreen" data-equalizer="foo" style="background:transparent;padding:0px;margin:0px;border:0px;">
			<div class="medium-2 columns" style="background:transparent;padding:0px;margin:0px;border:0px;">
		    <div class="hide-for-small" data-equalizer-watch="foo" >
		        <div class="row fullscreen" data-equalizer="bar" style="margin:0px;padding:0px;">
		        <?php
		          include "leftbarcategory.php";
		          include "leftbarsupport.php";
		        ?>
		        </div>      
		    </div>
		  </div>

			<div class="medium-8 columns" style="background:transparent;border:0px;" >
		    <div class="" data-equalizer-watch="foo">

			      <div class="row fullscreen" style="margin:0px;padding:25px 0 0 0px;">
			          <div class="large-12 medium-12 small-12 columns" >
			            <h3>Tambah Produk</h3>
			          </div>     
			      </div> 

			      <div class="row fullscreen" style="padding-top:15px;margin:0px;">
			          <div class="large-12 medium-12 small-12 columns">  
				          <form name="" id="" action="<?php echo base_url().'index.php/crud/simpan_produk' ?>" method="post">
					           <div class="row">
					            <div class="large-7 medium-12 small-12 columns">
					              <label>Nama Produk
					                <input type="text" placeholder="" name="nama_barang" />
					              </label>
					            </div>            
					          </div>

					          <div class="row">
					            <div class="large-7 medium-12 small-12 columns">
					              <label>Harga
					                <input type="text" placeholder="" name="harga" />
					              </label>
					            </div>            
					          </div>
					          <div class="row">
					            <div class="large-7 medium-12 small-12 columns">
					              <label>Harga Promo
					                <input type="text" placeholder="" name="harga_promo" />
					              </label>
					            </div>            
					          </div>
					          <div class="row">
					            <div class="large-7 medium-12 small-12 columns">
					              <label>Stok
					                <input type="text" placeholder="" name="stok" />
					              </label>
					            </div>            
					          </div>
					          <div class="row">
					            <div class="large-7 medium-12 small-12 columns">
					              <label>Tanggal Reg
					                <input type="text" placeholder="" name="tgl_reg" />
					              </label>
					            </div>            
					          </div>         
					          <div class="row">
					            <div class="large-7 medium-12 small-12 columns">
					              <label>Masa
					                <input type="text" placeholder="" name="masa" />
					              </label>
					            </div>            
					          </div>
					          
					          <div class="row">
					            <div class="large-7 medium-12 small-12 columns">             
					                <input type="submit" placeholder="" class="alert button"/>             
					            </div>            
					          </div>
			          	</form>
			          </div>
			   		</div>
			   </div>
			 </div>

			 <div class="medium-2 columns" style="background:transparent;padding:0px;margin:0px;border-top:0px;border-bottom:0px;border-right:0px;border-left:solid 0.1em #EFEFEF;">
			    <div class="" data-equalizer-watch="foo">
			      <div class="row fullscreen" style="padding:0px;margin:0px;">
			       <?php
			       //include "rightbarproduct.php";
			       ?>
			     </div>
			     <div class="row fullscreen" style="padding:0px;margin:0px;">
			       <?php
			       //include "rightbarbanner.php";
			       ?>
			     </div> 
			   </div>
			 </div>
		</div>

		<div style="background:#EEEEEE;padding-top:10px;">
			<?php
			include "footer.php";
			?>
		</div>
