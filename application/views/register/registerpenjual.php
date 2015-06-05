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
          <h3>Ingin Berjualan di RejekiMall?</h3>
        Silakan daftar menjadi Seller.
        </div>


          <div class="row fullscreen"  style="background:transparent;padding:20px 0px 0px 0px;margin:0px;border-bottom:solid 3px #e62f17;">        
            <div data-equalizer>
             <div class="large-4 medium-12 small-12 columns" >
              <ul class="pricing-table" data-equalizer-watch style="border:solid 1px #cccccc;">      
                <li class="price" style="font-size:1.05em;">PERORANGAN</li>  
                <li class="bullet-item text-left" style="font-family:tradegothic;border:0px;min-height:60px;max-height:60px;">
                  Penjual yang tidak terdaftar sebagai perusahaan / Penjual Perorangan.</li>
                  <li class="cta-button"><a class="tiny info button round expand" href="<?php echo base_url();?>register/seller">Daftar</a></li>
                </ul>
              </div>
              <div class="large-4 medium-12 small-12 columns">
                <ul class="pricing-table" data-equalizer-watch style="border:solid 1px #cccccc;">      
                  <li class="price" style="font-size:1.05em;">BADAN USAHA</li>  
                  <li class="bullet-item text-left" style="font-family:tradegothic;border:0px;min-height:60px;max-height:60px;">
                    Penjual Pemegang Ijin Usaha.</li>
                    <li class="cta-button"><a class="tiny info button round expand" 
                    href="<?php echo base_url();?>register/pengusaha">Daftar</a></li>
                  </ul>
                </div>
                <div class="large-4 medium-12 small-12 columns">
                 <ul class="pricing-table" data-equalizer-watch style="border:solid 1px #cccccc;">      
                  <li class="price" style="font-size:1.05em;">GLOBAL</li>  
                  <li class="bullet-item text-left" style="font-family:tradegothic;border:0px;min-height:60px;max-height:60px;">
                    Penjual Yang Berasal Dari Luar Indonesia.</li>
                    <li class="cta-button"><a class="tiny info button round expand" href="<?php echo base_url();?>register/asing">Daftar</a></li>
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