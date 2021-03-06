<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>Login - Seller</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
    
<link href="<?php echo base_url();?>code/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>code/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

<link href="<?php echo base_url();?>code/css/font-awesome.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    
<link href="<?php echo base_url();?>code/css/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>code/css/pages/signin.css" rel="stylesheet" type="text/css">

</head>

<body>
	
	<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			<a class="brand" href="#">
				Dashboard Seller Rejeki Mall				
			</a>		
			
			<div class="nav-collapse">
				<ul class="nav pull-right">
					
					<li class="">						
						<a href="<?php echo base_url();?>register" target="_blank" class="">
							Don't have an account?
						</a>
						
					</li>
					
					<li class="">						
						<a href="<?php echo base_url();?>" target="_blank" class="">
							<i class="icon-chevron-left"></i>
							Back to Homepage
						</a>
						
					</li>
				</ul>
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->



<div class="account-container">
	
	<?php echo $this->session->flashdata('error');?>
	
	<div class="content clearfix">
		
		<form action="<?php echo base_url()?>penjual/login/loginauth" method="post">
		
			<h1>Seller Login</h1>		
			
			<div class="login-fields">
				
				<p>Please provide your details</p>
				
				<div class="field">
					<label for="email">Email</label>
					<input type="text" id="email" name="email" value="" placeholder="yourmail@domain.com" class="login username-field" />
				</div> <!-- /field -->
				
				<div class="field">
					<label for="password">Password:</label>
					<input type="password" id="password" name="password" value="" placeholder="Password" class="login password-field"/>
				</div> <!-- /password -->
				
				<div class="field">
					
				</div> <!-- /password -->
			</div> <!-- /login-fields -->
			<input type="submit" name="login" value="Login" class="btn btn-success" />
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->


<script src="<?php echo base_url();?>code/js/jquery-1.7.2.min.js"></script>
<script src="<?php echo base_url();?>code/js/bootstrap.js"></script>

<script src="<?php echo base_url();?>code/js/signin.js"></script>

</body>

</html>
