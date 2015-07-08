<div class="row fullscreen text-center" style="background:#faf9f9;margin:0px; padding:10px 0 10px 0;border-top:0px;border-bottom:solid 5px #e62f17;">
  KATEGORI
</div>
<div class="row fullscreen sidebar" style="margin:0px; padding:0 0 30px 0px;background:#EEEEEE;">
   <ul class="no-bullet" style="padding-left:40px;">
   <?php
   foreach($kategori as $listkat){
	   echo "<li style='border-bottom:solid 1px #f9f9f9;'><a href='".base_url()."produk/kategori/$listkat[slugkat]'  data-orbit-link='newarrivals' style='font-size:0.9em;color:#333333;'>$listkat[nama]</a></li>";
   }
   ?>
  </ul>
</div>
<?php
$seller	= $this->session->userdata('userseller');
if(!empty($seller)){
?>
<!--<div class="row">-->
  <?php
  $this->load->view('toko/page/panel');
  ?>
<!--</div>-->
<?php
}
?>

<script src="<?php echo base_url().'asset/bower_components/foundation/js/foundation.min.js'?>"></script>
<script src="<?php echo base_url().'asset/bower_components/foundation/js/foundation/foundation.orbit.js'?>"></script>
<script src="<?php echo base_url().'asset/js/app.js'?>"></script>
</body></html>



