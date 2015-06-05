<div class="row fullscreen" data-equalizer="foo" style="background:transparent;padding:0px;margin:0px;border:0px;">

  <div class="medium-2 columns" style="background:transparent;padding:0px;margin:0px;border:0px;">
    <div class="hide-for-small" data-equalizer-watch="foo" >
        <div class="row fullscreen" data-equalizer="bar" style="margin:0px;padding:0px;">
        <?php
          $this->load->view('leftbar/leftbarcategory');
          $this->load->view('leftbar/leftbarsupport');
        ?>
        </div>      
    </div>
    </div>

    <div class="medium-8 columns" style="background:transparent;border:0px;" >
      <div class="" data-equalizer-watch="foo">

        <div class="row"  style="background:transparent;padding:40px 0px 0px 0px;margin:0px;">
          <h3>Anda Ingin Tahu Apa Itu Iklan Jasa RejekiMall?</h3>
        <p style="font-family:tradegothic;text-align:justify;">Ingin Mempromosikan Usaha Anda Yang Sedang Ada Diskon? Iklankan Disini. Silakan Daftarkan Diri Sebagai Merchant. Dan Orang Yang Berhak Mendapatkan Diskon Juga Harus Mendaftar Member Diskon Card Disini.
        </p>
        </div>


          <div class="row fullscreen"  style="background:transparent;padding:20px 0px 0px 0px;margin:0px;border-bottom:solid 3px #e62f17;">        
            <div data-equalizer>
             <div class="large-6 medium-12 small-12 columns" >
              <ul class="pricing-table" data-equalizer-watch style="border:solid 1px #cccccc;">      
                <li class="price" style="font-size:1.05em;">MERCHANT</li>  
                <li class="bullet-item text-left" style="font-family:tradegothic;border:0px;min-height:60px;max-height:60px;">
                  Silakan Klik Tombol Dibawah Untuk Mendaftarkan Diri Sebagai Merchant.</li>
                  <li class="cta-button"><a class="tiny info button round expand" href="registermerchant.php">Register</a></li>
                </ul>
              </div>
              <div class="large-6 medium-12 small-12 columns">
                <ul class="pricing-table" data-equalizer-watch style="border:solid 1px #cccccc;">      
                  <li class="price" style="font-size:1.05em;">MEMBER DISKON CARD</li>  
                  <li class="bullet-item text-left" style="font-family:tradegothic;border:0px;min-height:60px;max-height:60px;">
                    Silakan Klik Tombol Dibawah Untuk Mendaftarkan Diri Sebagai Member Diskon Card.</li>
                    <li class="cta-button"><a class="tiny info button round expand" href="registermemberdiskon.php">Register</a></li>
                  </ul>
                </div>
               </div>
            </div>


          </div>
        </div>

   <div class="medium-2 columns" style="background:transparent;padding:0px;margin:0px;border-top:0px;border-bottom:0px;border-right:0px;border-left:solid 0.1em #EFEFEF;">
    <div class="" data-equalizer-watch="foo">
      <div class="row fullscreen" style="padding:0px;margin:0px;">
       <?php
	   $this->load->view('rightbar/rightbarproduct');
       ?>
     </div>
     <div class="row fullscreen" style="padding:0px;margin:0px;">
       <?php
	   $this->load->view('rightbar/rightbarbanner');
       ?>
     </div>
   </div>
 </div>


</div>