<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $title;?></title>
  <link rel="stylesheet" href="<?php echo base_url().'asset/css/app.css'?>" />
  <link rel="stylesheet" href="<?php echo base_url().'asset/css/modifstyle.css'?>" />
  <link rel="stylesheet" href="<?php echo base_url().'asset/bower_components/foundation-icons/foundation-icons.css'?>" />
  <script src="<?php echo base_url().'asset/bower_components/modernizr/modernizr.js'?>"></script>  
  <script src="<?php echo base_url().'asset/bower_components/jquery/dist/jquery.min.js'?>"></script>
  <script src="<?php echo base_url().'asset/bower_components/foundation/js/foundation.min.js'?>"></script>
  <script src="<?php echo base_url().'asset/js/app.js'?>"></script>
  <script>
  $(document).ready(function () {
    $(document).foundation();   
 });
  </script>
</head>

<body>
<div id="header">

  <!-- NAVBAR -->
  <div class="topbarcolor">
    <div class="row">
      <!-- TOPBAR HIDE KETIKA SMALL M
      EDIA-->
      <nav class="top-bar hide-for-small" data-topbar role="navigation" style="font-size:12px;">  
        <ul class="title-area" style="padding-top:1px;">
         <li><a class="name fi-telephone" href="#" style="color:#FFFFFF;padding-right:20px;"><b> 087836325580</b> </a></li> 
       </li> 
       <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
       <li class="toggle-topbar menu-icon" style="color:#FFFFFF;"><a href="#"><span>Menu</span></a></li>
     </ul>

     <section class="top-bar-section" >
       <!-- Left Nav Section -->
       <ul class="left" >
        <li><a href="#" style="font-size:12px;">Cicilan 0%</a></li>
        <li><a href="#" style="font-size:12px;">Tracking</a></li>
        <li><a href="#" style="font-size:12px;">Konfirmasi Pembayaran</a></li>
      </ul>
      <!-- Right Nav Section -->
      <ul class="right">   
        <li >
          <a href="" 
           data-dropdown="downlinelogin" aria-controls="downline11" aria-expanded="false" style="font-size:12px;">Login</a>
        </li>
        <li>
        <a href="<?php echo base_url();?>register/pembeli" style="font-size:12px;">Register Pembeli</a>
        <li>
        <a href="<?php echo base_url(); ?>register" style="font-size:12px;">Register Penjual</a></li> 
      </ul>
    </section>
  </nav>
</div>
</div>

<!-- DROPDOWN LOGIN -->
<div class="row colapse">
  <div id="downlinelogin" data-dropdown-content class="small f-dropdown content text-center" aria-hidden="true" tabindex="-1" >
    <input type="text" placeholder="username" name="username"/> 
    <input type="text" placeholder="password" password="password"/>
    <input type="submit" class="large-12 medium-12 small-12 alert button" value="Login"/>
    <div class="large-12 medium-12 small-12 fi-social-facebook button" style="background:#3b5998"> | Login with Facebook</div>
    <a href="" style="color:#888888;">Lupa Password ?</a>
  </div>  
</div>

<!-- TOPBAR SHOW KETIKA SMALL MEDIA-->

<div class="row fullscreen show-for-small hide-for-large hide-for-medium accordion" data-accordion style="background:#333333;">
 <div class="accordion-navigation left "> 
  <a class="text-center" href="#datatopbar" style="background:#333333;color:#FFFFFF;">
    <i class="fi-list"></i>
    <img src="<?php echo base_url().'asset/img/logo.png'?>" style="max-height:50px;">
  </a>
  <div id="datatopbar" class="content" style="background:#333333;">
    <ul class="side-nav">
      <li>
        <div class="row accordion" data-accordion>
          <div class="accordion-navigation">
            <a href="#datalogin" style="color:#e72f17;padding-left:30px;font-size:14px;background:#333333;">Login </a>
            <div id="datalogin" class="content" style="background:#FFFFFF;">
              <div class="row">
                <div class="large-11-centered medium-11-centered small-11-centered columns">
                  <input type="text" placeholder="username" /> 
                  <input type="text" placeholder="password" />
                  <input type="submit" class="large-11-centered medium-11-centered small-11-centered columns alert button" value="Login"/>
                  <div class="large-11-centered medium-11-centered small-11-centered columns fi-social-facebook button" style="background:#3b5998"> | Login with Facebook</div>
                  <a href="" style="color:#888888;">Lupa Password ?</a>
                </div> 
              </div>
            </div>
          </div>
        </li>
        <li><a href="#" style="color:#e72f17;"> Register Pembeli </a></li>
        <li><a href="#" style="color:#e72f17;"> Register Penjual </a></li>      
      </ul>
    </div>
    
  </div>
</div>


<!-- LOGO SEARCH & KERANJANG BELANJA -->
<div class="logo">
  <div class="row">
    <div class="large-3 medium-4 small-12 large-uncentered medium-centered hide-for-small columns">
     <a class="" href="<?php echo base_url() ?>">
      <img src="<?php echo base_url().'asset/img/logo.png'?>" style="max-height:65px;">
    </a>
  </div>
  <div class="large-8 medium-11 small-10 columns" style="padding-top:20px;">
    <div class="row collapse postfix-round">
      <div class="large-11 small-9 columns">
        <input type="text" >
      </div>
      <div class="large-1 small-3 columns">
        <a href="#" class="fi-magnifying-glass alert button postfix"></a>
      </div>
    </div>

  </div>
  <!-- KERANJANG --BELANJA -->
  <div class="large-1 medium-1 small-2 columns  " data-dropdown="downlinecart" aria-controls="downlinecart" aria-expanded="false" style="padding-top:15px;">
    <a class="fi-shopping-cart" href="" style="color: #FFFFFF;font-size:30px;">

    </a>
  </div>
  <div class="row">
    <div id="downlinecart" data-dropdown-content class="small f-dropdown content" aria-hidden="true" tabindex="-1">

      <a href="index.php" style="color: #000000;">
        <!--POPUP keranjang belanja-->
		Keranjang Belanja Anda Kosong
      </a>

    </div>
  </div>

</div>
</div>

</div>