<div class="row fullscreen" data-equalizer="foo" style="background-image: url('<?php echo base_url();?>asset/img/etalase.jpg');background-size:cover;background-repeat: no-repeat;margin:0px;border:0px;">
	<div class="row fullscreen " data-equalizer style="">
		<div class="large-9 columns panel" data-equalizer-watch style="background:transparent;border:0px;margin:0px;">
			<div class="row" style="padding:40px;">
				<div class="large-10 medium-10 small-10 columns" >
					<h1 style="color:#000;font-size:50px;">Tentang Kami</h1>
				</div>
				<div class="end"></div>
			</div>
		</div>
		
		<!--<div class="large-3 columns panel" data-equalizer-watch style="background:transparent;background-image: url('img/blacktransparent.png');background-size:auto;background-repeat: repeat;border:0px;padding:0px;margin:0px;">
			<ul class="pricing-table" style="background:transparent;">
				<li class="price" style="background:transparent;">
					<img src="<?php base_url();?>asset/img/seller2.jpg" style="max-height:150px;border:solid 6px #FFFFFF;">
				</li>
				<li class="description" style="color:#FFFFFF;">
					<h4 style="color:#ffcb08;"><b>Nama Seller</b></h4><br>
					Nama Kota
				</li>      
				<li class="cta-button" style="background:transparent;"><a class="tiny alert button round" href="#">Kirim Pesan</a> <a class="tiny alert button round" href="#">Jadikan Favorit</a></li>
			</ul>
		</div>-->
	</div>
</div>

<div class="row fullscreen" data-equalizer="foo" style="background:transparent;padding:0px;margin:0px;border:0px;">
	<div class="large-2 medium-2 columns" style="background:transparent;padding:0px;margin:0px;border:0px;">
		<div class="hide-for-small" data-equalizer-watch="foo" >
			<div class="row fullscreen" data-equalizer="bar">
			<?php
			  $this->load->view('leftbar/leftbarcategory');
			  $this->load->view('leftbar/leftbarsupport');
			?>
			</div>      
		</div>
    </div>

    <div class="large-10 medium-10 columns" style="background:transparent;border:0px;" >
		<div class="hide-for-small" data-equalizer-watch="foo" style="padding-top:20px;">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. In fringilla posuere sem nec blandit. Nulla molestie varius ligula, vitae pellentesque dolor. Ut mollis id magna nec luctus. Nam efficitur tortor at mattis pharetra. Nam sagittis egestas fermentum. Integer ac orci in nisl porta aliquet. Nam laoreet egestas fermentum. Phasellus ac risus nibh.
Etiam vel feugiat tortor, nec ornare massa. Vestibulum hendrerit felis ligula, lacinia efficitur nunc mattis nec. Aenean eu quam tellus. Quisque nec magna in elit interdum accumsan in auctor quam. Nunc eget fermentum augue. Curabitur vehicula augue nisl, a consequat massa tincidunt ut. Proin lorem quam, lobortis et iaculis eu, convallis quis lectus. Integer sed neque porta, pellentesque purus eu, ullamcorper tortor. Cras vitae libero sed sapien sollicitudin condimentum. Cras eu auctor nisi. Phasellus facilisis magna at diam aliquam consequat. Nullam maximus tristique tellus vel dapibus. Nulla vel ex eu diam aliquam blandit quis id augue. Pellentesque et pulvinar quam. Sed imperdiet sed quam non convallis.
Proin tempus vel mauris quis semper.
			</p>
		</div>
    </div>
</div>