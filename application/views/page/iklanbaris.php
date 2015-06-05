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
          <h3>Anda Ingin Tahu Apa Itu Iklan Baris di Rejekimall?</h3>
          <p style="font-family:tradegothic;">Ingin Mempromosikan Usaha Anda? Iklankan Disini. Silakan Hubungi Admin RejekiMall atau Sales RejekiMall. Terima Kasih. </p>
        
        </div>


         <div class="row fullscreen" style="padding:0px;margin:0px;font-size:1.5em;">
        <div class="large-4 small-4 columns text-right" style="padding-top:15px;">
          
        </div>

        <div class="large-4 small-4 columns text-right" style="padding-top:15px;">
          <div class="row fullscreen collapse">
            <div class="small-9 columns">
              <input type="text" placeholder="Cari" />
            </div>
            <div class="small-3 columns">
              <span class="postfix">cari</span>
            </div>
          </div>
        </div>

        <div class="large-4 small-4 columns text-right" style="padding-top:10px;">
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