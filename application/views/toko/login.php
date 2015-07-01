 <div class="row">
    <div class="large-5 large-offset-3 columns" style="min-height:500px;">
	  <div class="signup-panel">
        <br />
        <br />
        <br />
		<?php validation_errors();?>
		<h2 class="welcome"> Login Seller</h2>
        <form name="loginmember" id="formdft" action="<?php echo base_url();?>login/authseller" method="post">
          <div class="row collapse">
            <div class="small-2  columns">
              <span class="prefix"><i class="fi-mail"></i></span>
            </div>
            <div class="small-10  columns">
              <input type="text" name="email" id="email" placeholder="ex : yourmail@domain.com">
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
		
		<?php echo $this->session->flashdata('error');?>
    </div>
    </div>
   </div>