 <div class="row">
    <div class="large-5 large-offset-3 columns" style="min-height:500px;">
	  <div class="signup-panel">
        <br />
        <br />
        <br />
		<?php validation_errors();?>
		<h2 class="welcome"> Login Admin</h2>
        <form name="loginmember" action="<?php echo base_url();?>login/authadmin" method="post">
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
              <input type="submit" class="large-12 medium-12 small-12 success button" name="login" value="Login">
            </div>
          </div>
        </form>
    </div>
    </div>
   </div>