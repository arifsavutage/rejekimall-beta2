<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li><a href="<?php echo base_url();?>toko"><i class="icon-dashboard"></i><span>Dashboard</span> </a> </li>
        
		<li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> 
		<i class="icon-file"></i><span>Kategori</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url();?>toko/tampil_kat">Daftar Kategori</a></li>
            <li><a href="<?php echo base_url();?>toko/tambah_kategori">Tambah Kategori</a></li>
            
          </ul>
        </li>
		
		<li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> 
		<i class="icon-file"></i><span>Produk</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url();?>toko/tampil_produk">Daftar Produk</a></li>
            <li><a href="<?php echo base_url();?>toko/tambah_produk">Tambah Produk</a></li>
            
          </ul>
        </li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->