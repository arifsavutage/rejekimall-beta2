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
      
      <!-- ALL PRODUCT -->
      <div class="row fullscreen" style="padding-top:30px;font-size:1.5em;border-bottom:solid 1px #EFEFEF;">
        <div class="large-12 medium-12 small-12 columns" >
        <h4><?php echo $detail['nama'];?></h4>
        </div>
      </div>

      <div class="row fullscreen" data-equalizer="foo" style="background:transparent;padding:0px;margin:0px;border:0px;">
      <div class="medium-6 columns" style="background:transparent;border:0px;">
        <div class="" data-equalizer-watch="foo" >
          <center>      

            <ul class="clearing-thumbs clearing-feature" data-clearing>
              <li class="clearing-featured-img">
				<a href="#">
					<img style="width:475px;height:350px;" src="<?php echo base_url().'asset/img/seller/produk/'.$detail['gambar'];?>">
				</a>
			  </li>
            </ul>
</center>
      </div>
      </div>

      <div class="medium-3 columns" style="background:transparent;border:0px;">
        <div class="" data-equalizer-watch="foo" >
			<?php
			if($detail['diskon'] > 0){
				$harganew	= $detail['harga']-($detail['harga']*($detail['diskon']/100));
								
				echo "<h5 style='color:#e62f17;'><strike>Rp. ".number_format($detail['harga'],0,',','.')."</strike></h5>";
				echo "<h3>Rp. ".number_format($harganew,0,',','.')."</h3>";
			}
			else{
				echo "<h3>Rp. ".number_format($detail['harga'],0,',','.')."</h3>";
			}
			?>
			
			<!--<table style="width:100%;border:0px;">
				<tr>
					<td>Shop</td>
					<td>:</td>
					<td>Rejeki Shop</td>                 
				</tr>
				<tr>
					<td>Grade</td>
					<td>:</td>
					<td>Starter Seller</td>                 
				</tr>
				<tr>
					<td>Lokasi</td>
					<td>:</td>
					<td>Semarang</td>                 
				</tr>
				<tr>
					<td>Berat</td>
					<td>:</td>
					<td>1 Kg</td>                 
				</tr>
			</table>-->

         
      </div>
      </div>

     

      <div class="medium-3 columns" style="background:transparent;border:0px;">
        <div class="" data-equalizer-watch="foo" >
        
           <!--<label>Jasa Pengiriman</label>
           <span>
                  <select name="couriers">
                  <option value="jne">JNE</option>
                   <option value="pos">Pos Indonesia</option>
                  </select>
          </span>



          <form>
            <div class="row">
              <div class="large-12 medium-12 small-12 columns">
                <label>Tujuan
                  <input type="text" placeholder="kota" />
                   <input type="submit" class="large-12 medium-12 small-12 columns info button" value="Cek Ongkir" />
                </label>
              </div>
            </div>
          </form>
   


            <label>Ukuran</label>
           <span>
                  <select name="couriers">
                  <option value="stok">S = stok : 127</option>
                   <option value="pos">M = stok : 25</option>
                  </select>
          </span>-->
           
          <form name="addtocart" method="post" action="<?php echo base_url();?>produk/addcart">
            <div class="row">
              <div class="large-12 medium-12 small-12 columns">
                <label>Jumlah
					<input type="text" name="jumlah" value="1" />
					<input type="hidden" name="kdbrg" value="<?php echo $detail['gid'];?>"/>
					<input type="hidden" name="nmbrg" value="<?php echo $detail['nama'];?>"/>
                </label>
				<label>Ukuran
				<select name="ukuran">
				<?php
					if(strlen($detail['ukuran']>1 || !empty($detail['ukuran']))){
						$pecah	= explode(',',$detail['ukuran']);
						
						for($x=0;$x<count($pecah);$x++){
							echo "<option value='$pecah[$x]'>$pecah[$x]</option>";
						}
					}
				?>
				</select>
				</label>
				<label>Stok
					<input type="text" name="stok" value="<?php echo $detail['stok'];?>" readonly="true" />
					<?php
					if($detail['diskon'] > 0){
						$harganew	= $detail['harga']-($detail['harga']*($detail['diskon']/100));
										
						echo "<input type='hidden' name='harga' value='$harganew'>";
					}
					else{
						echo "<input type='hidden' name='harga' value='$detail[harga]'>";
					}
					?>
				</label>
				<input type="submit" class="large-12 medium-12 small-12 columns alert button" value="Add to cart" />
              </div>
            </div>
          </form>
      </div>
      </div>
      </div>

    </div>



    <!-- tab review -->
<div class="row">
  <ul class="tabs" data-tab >
  <li class=" tab-title active"><a href="#deskripsi" style="font-size:13px;">Deskripsi</a></li>
  <li class=" tab-title"><a href="#infotoko" style="font-size:13px;">Informasi Toko</a></li>
  <li class=" tab-title"><a href="#review" style="font-size:13px;">Review</a></li>
</ul>
<div class="tabs-content">
  <div class="content active" id="deskripsi" >
    <p style="font-size:15px;font-family:tradegothic;">
		<?php echo $detail['keterangan'];?>
    </p>
  </div>
  <div class="content" id="infotoko">
	<table>
		<tr>
			<th>Nama Toko</th>
			<td>:</td>
			<td><?php echo ucwords($detail['nama_toko']);?></td>
		</tr>
		<tr>
			<th>Bergabung Sejak</th>
			<td>:</td>
			<td><?php echo date('d M Y', strtotime($detail['tgl_registrasi']));?></td>
		</tr>
		<tr>
			<th>Alamat Toko</th>
			<td>:</td>
			<td><?php echo $detail['alamat'];?></td>
		</tr>
	</table>
    <!--<p style="font-size:15px;font-family:tradegothic;">
		Username : rejekishop<br>
		Nama Toko : rejekishop<br>
		Nama Pemilik Toko : Rejeki<br>
		Grade Seller : Starter Seller<br>
		Bergabung Sejak : 2015-02-07<br>
		Kota Seller : Solo
      </p>-->
  </div>
  <div class="content" id="review">
    <p style="font-size:15px;font-family:tradegothic;">
      ASUS Notebook A455LN – WX016D merupakan notebook yang memberikan keseimbangan antara performa yang cepat dan lancar dengan kualitas multimedia yang impresif & memukau. Dari segi prosesor, dengan Intel Core i3-4030U berkecepatan 1.90 GHz, serta RAM 2GB DDR3, notebook ini dapat menjalankan aplikasi umum seperti Microsoft Office, game casual serta multitasking cukup lancar. Untuk multimedia, ASUS menyertakan teknologi Audio SonicMaster yang dapat menghasilkan kualitas suara seperti bioskop untuk keperluan multimedia seperti music, film atau game.
    </p>
  </div>
</div>
</div>


  </div>

</div>

<script src="bower_components/foundation/js/foundation.min.js"></script>
<script src="js/app.js"></script>
