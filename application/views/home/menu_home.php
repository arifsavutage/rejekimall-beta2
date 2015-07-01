<!--MENU HOME-->
<div class="menu" >
  <div class="row collapse" style="font-size:13px;padding:0px"> 
  <div class="large-12 medium-12 small-12 columns text-center" style="background:transparent;margin:0px;padding:0px;">
      <nav class="top-bar" data-topbar role="navigation" style="background:#cccccc;">
  <section class="top-bar-section">
    <ul class="title-area show-for-small hide-for-large hide-for-medium">
    <li class="name">
      <center><h3><a href="#">KATEGORI</a></h3></center>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
  </ul>
    

    <!-- Left Nav Section -->
    <ul class="left">
      <li class="has-dropdown">
        <a href="#" style="background:#EEEEEE;color:#e62f17;"> 
			<b>PILIH KATEGORI</b>
        </a>
        <ul class="dropdown">
        <?php
		foreach($kategori as $listkat){
			echo "<li><a href='".base_url()."produk/kategori/$listkat[slugkat]' style='background:#f8f5f5;color:#333333;'>$listkat[nama]</a></li>";
		}
		?>
        </ul>
      </li>
    </ul>

    <ul class="right" style="background:transparent;">
      <li class="" ><a href="<?php echo base_url();?>page/network" style="background:#cccccc;color:#333333;border-left:solid 1px #dddddd;">Rejeki Network</a></li>
      <li class=""><a href="<?php echo base_url();?>page/buletin" style="background:#cccccc;color:#333333;border-left:solid 1px #dddddd;">Buletin Rejekimall</a></li>
      <li class=""><a href="<?php echo base_url();?>page/iklanbaris" style="background:#cccccc;color:#333333;border-left:solid 1px #dddddd;">Iklan Baris</a></li>
      <li class=""><a href="<?php echo base_url();?>page/iklanjasa" style="background:#cccccc;color:#333333;border-left:solid 1px #dddddd;">Iklan Jasa</a></li>
      <li class=""><a href="<?php echo base_url();?>page/support" style="background:#cccccc;color:#333333;border-left:solid 1px #dddddd;">Support</a></li>
      
    </ul>
  </section>
</nav>

</div>
</div>
</div>