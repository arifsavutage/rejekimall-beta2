 <div class="row">
    <div class="large-5 large-offset-3 columns" style="min-height:500px;">
	  <div class="signup-panel">
        <br />
        <br />
        <br />
		<h2 class="welcome"> Login</h2>
        <form name="loginmember" action="<?php echo base_url();?>member/login/validate_login" method="post">
          <div class="row collapse">
            <div class="small-2  columns">
              <span class="prefix"><i class="fi-torso-female"></i></span>
            </div>
            <div class="small-10  columns">
              <input type="text" name="username" placeholder="username">
            </div>
          </div>
		  
          <div class="row collapse">
            <div class="small-2 columns ">
              <span class="prefix"><i class="fi-lock"></i></span>
            </div>
            <div class="small-10 columns ">
              <input type="password" name="password" placeholder="password">
            </div>
          </div>
		  
		  <div class="row collapse">
            <div class="small-12 columns ">
              <input type="submit" class="large-12 medium-12 small-12 alert button" name="login" value="Login">
            </div>
          </div>
        </form>
        <p>Belum menjadi member? <a href="<?php echo base_url();?>register/pembeli">daftar disini &raquo;</a></p>
      </div>
	  
		<?php
			
			if(!empty($error)){
				echo $quer;
				echo "
				<div data-alert class='alert-box alert radius' style='font-size:25px;'>
				  $error
				  <a href='#' class='close'>&times;</a>
				</div>
				";
			}
		?>
    </div>
   </div>