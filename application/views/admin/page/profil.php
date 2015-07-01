<div class="large-12 columns">
<h3>Profil</h3>
<hr />
<?php 
	validation_errors();
	echo $this->session->flashdata('pesan');
?>
<form name="profil" method="post" action="">
	<div class="row">
		<div class="large-12 columns">
			<label>
			No. Hp
			<input type="text" name="hp" value="<?php echo $detail['hp'];?>"/>
			<input type="hidden" name="id" value="<?php echo $detail['id'];?>"/>
			<p>Pisah dengan koma jika lebih dari satu</p>
			</label>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns">
			<label>
			Pin BB
			<input type="text" name="pin" value="<?php echo $detail['pin'];?>"/>
			<p>Pisah dengan koma jika lebih dari satu</p>
			</label>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns">
			<label>
			E-mail
			<input type="text" name="email" maxlength="50" value="<?php echo $detail['email'];?>"/>
			</label>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns">
			<label>
			Facebook Group
			<input type="text" placeholder="Nama Group" name="fb" maxlength="50" value="<?php echo $detail['fb'];?>"/>
			<p>Contoh : http://facebook.com/groups/<span style="color:red;">nama_group</span></p>
			</label>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns">
			<label>
			Twitter
			<input type="text" placeholder="Nama Twitter" name="twit" maxlength="50" value="<?php echo $detail['twitter'];?>"/>
			<p>Contoh : http://twitter.com/<span style="color:red;">nama_twitter</span></p>
			</label>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns">
			<label>
			Google Plus
			<input type="text" placeholder="username" name="plus" maxlength="50" value="<?php echo $detail['gplus'];?>"/>
			<p>Contoh : http://plus.google.com/+<span style="color:red;">username</span></p>
			</label>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns">
			<label>
			Instagram
			<input type="text" placeholder="username" name="insta" maxlength="50" value="<?php echo $detail['insta'];?>"/>
			<p>Contoh : http://instagram.com/<span style="color:red;">username</span></p>
			</label>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns">
			<label>
			Youtube
			<input type="text" placeholder="username" name="youtube" maxlength="50" value="<?php echo $detail['youtube'];?>"/>
			<p>Contoh : http://youtube.com/user/<span style="color:red;">username</span></p>
			</label>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns">
			<input type="submit" value="Simpan" class="button">
		</div>
	</div>
</form>
</div>