<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
echo "
<div class='main'>
  <div class='main-inner'>
    <div class='container'>
		<div class='row'>";
if($isi){
	$this->load->view($isi);
}
echo "</div>
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->
";
