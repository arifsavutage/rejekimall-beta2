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

      <div class="row" style="margin:0px;padding:0 15px 0 15px;">
       <?php
          include "menubuletin.php";
        ?>
      </div>

      <div class="row fullscreen" style="margin:0px;padding:0px;">
          <div class="large-7 medium-7 small-4 columns" >
            <h3>Buletin</h3>
          </div>
          <div class="large-3 small-3 columns text-right">

            <div class="row collapse postfix-round">
              <div class="large-9 small-9 columns">
                <input type="text" placeholder="Bulan Tahun">
              </div>
              <div class="large-3 small-3 columns">
                <a href="#" class="fi-magnifying-glass alert button postfix"></a>
              </div>
            </div>
             
          </div>
          <div class="large-2 small-2 columns text-right">
            <select name="kota" onchange="submit()">
            <option value="">Pilih Kota</option>
            <option value="solo">Solo</option>
            <option value="karanganyar">Karanganyar</option>
            <option value="sragen">Sragen</option>
            <option value="sukoharjo">Sukoharjo</option>
            <option value="wonogiri">Wonogiri</option>
            <option value="yogyakarta">Yogyakarta</option>
            <option value="semarang">Semarang</option>
            <option value="magelang">Magelang</option>
            <option value="kudus">Kudus</option>
            <option value="pati">Pati</option>
            <option value="jepara">Jepara</option>
            <option value="cilacap">Cilacap</option>
            <option value="jakarta">Jakarta</option>
            <option value="bogor">Bogor</option>
            <option value="depok">Depok</option>
            <option value="tangerang">Tangerang</option>
            <option value="bekasi">Bekasi</option>
            <option value="bandung">Bandung</option>
            <option value="cirebon">Cirebon</option>
            <option value="garut">Garut</option>
            <option value="tasikmalaya">Tasikmalaya</option>
            <option value="surabaya">Surabaya</option>
            <option value="kediri">Kediri</option>
            <option value="madiun">Madiun</option>
            <option value="malang">Malang</option>
            <option value="gresik">Gresik</option>
            <option value="sidoarjo">Sidoarjo</option>
            <option value="blitar">Blitar</option>
            <option value="jombang">Jombang</option>
            <option value="ngawi">Ngawi</option>
            <option value="mojokerto">Mojokerto</option>
            <option value="medan">Medan</option>
            <option value="palembang">Palembang</option>
            <option value="lampung">Lampung</option>
            <option value="makassar">Makassar</option>
            <option value="banjarmasin">Banjarmasin</option>
            <option value="manado">Manado</option>
            <option value="bali">Bali</option>
          </select>       
          </div>
      </div> 

      <div class="row " style="padding-top:15px;">

          <div class="large-6 medium-6 small-12 columns" style="padding:20px;">
            <div class="row" >
              <div class="large-4 medium-4 small-4 columns" style="max-height:60px;min-height:60px;">
                <a href="product.php"><img src="<?php echo base_url().'asset/img/b1.jpg'?>"></a>
              </div>
              <div class="large-8 medium-8 small-8 columns">
                <ul class="no-bullet"  style="font-size:14px;">
                  <li>NAMA BULETIN</li>
                  <li>Kota</li>
                  <li>0823848248</li>
                </ul>
              </div>
            </div>
           </div>

            <div class="large-6 medium-6 small-12 columns" style="padding:20px;">
            <div class="row">
              <div class="large-4 medium-4 small-4 columns" style="max-height:60px;min-height:60px;">
                <a href="product.php"><img src="<?php echo base_url().'asset/img/b2.jpg'?>"></a>
              </div>
              <div class="large-8 medium-8 small-8 columns">
                <ul class="no-bullet"  style="font-size:14px;">
                  <li>NAMA BULETIN</li>
                  <li>Kota</li>
                  <li>0823848248</li>
                </ul>
              </div>
            </div>
           </div>


           <div class="large-6 medium-6 small-12 columns" style="padding:20px;">
            <div class="row">
              <div class="large-4 medium-4 small-4 columns" style="max-height:60px;min-height:60px;">
                <a href="product.php"><img src="<?php echo base_url().'asset/img/b3.jpg'?>"></a>
              </div>
              <div class="large-8 medium-8 small-8 columns">
                <ul class="no-bullet"  style="font-size:14px;">
                  <li>NAMA BULETIN</li>
                  <li>Kota</li>
                  <li>0823848248</li>
                </ul>
              </div>
            </div>
           </div>

            <div class="large-6 medium-6 small-12 columns" style="padding:20px;">
            <div class="row">
              <div class="large-4 medium-4 small-4 columns" style="max-height:60px;min-height:60px;">
                <a href="product.php"><img src="<?php echo base_url().'asset/img/b4.jpg'?>"></a>
              </div>
              <div class="large-8 medium-8 small-8 columns">
                <ul class="no-bullet"  style="font-size:14px;">
                  <li>NAMA BULETIN</li>
                  <li>Kota</li>
                  <li>0823848248</li>
                </ul>
              </div>
            </div>
           </div>


           <div class="large-6 medium-6 small-12 columns" style="padding:20px;">
            <div class="row">
              <div class="large-4 medium-4 small-4 columns" style="max-height:60px;min-height:60px;">
                <a href="product.php"><img src="<?php echo base_url().'asset/img/b5.jpg'?>"></a>
              </div>
              <div class="large-8 medium-8 small-8 columns">
                <ul class="no-bullet"  style="font-size:14px;">
                  <li>NAMA BULETIN</li>
                  <li>Kota</li>
                  <li>0823848248</li>
                </ul>
              </div>
            </div>
           </div>

            <div class="large-6 medium-6 small-12 columns" style="padding:20px;">
            <div class="row">
              <div class="large-4 medium-4 small-4 columns" style="max-height:60px;min-height:60px;">
                <a href="product.php"><img src="<?php echo base_url().'asset/img/b2.jpg'?>"></a>
              </div>
              <div class="large-8 medium-8 small-8 columns">
                <ul class="no-bullet"  style="font-size:14px;">
                  <li>NAMA BULETIN</li>
                  <li>Kota</li>
                  <li>0823848248</li>
                </ul>
              </div>
            </div>
           </div>


           <div class="large-6 medium-6 small-12 columns" style="padding:20px;">
            <div class="row">
              <div class="large-4 medium-4 small-4 columns" style="max-height:60px;min-height:60px;">
                <a href="product.php"><img src="<?php echo base_url().'asset/img/b1.jpg'?>"></a>
              </div>
              <div class="large-8 medium-8 small-8 columns">
                <ul class="no-bullet"  style="font-size:14px;">
                  <li>NAMA BULETIN</li>
                  <li>Kota</li>
                  <li>0823848248</li>
                </ul>
              </div>
            </div>
           </div>

            <div class="large-6 medium-6 small-12 columns" style="padding:30px;">
            <div class="row">
              <div class="large-4 medium-4 small-4 columns" style="max-height:60px;min-height:60px;">
                <a href="product.php"><img src="<?php echo base_url().'asset/img/b3.jpg'?>"></a>
              </div>
              <div class="large-8 medium-8 small-8 columns">
                <ul class="no-bullet"  style="font-size:14px;">
                  <li>NAMA BULETIN</li>
                  <li>Kota</li>
                  <li>0823848248</li>
                </ul>
              </div>
            </div>
           </div>


      </div> 


        <div class="row fullscreen" style="padding:0px;margin:0px;">
    <div class="pagination">
      <ul class="pagination">
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