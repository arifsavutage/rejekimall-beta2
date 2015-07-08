<div class="large-12">
	<h3>Paket & Sponsoran</h3>
	<hr />
	<form name="paketan" method="post" action="">
		<div class="row">
			<div class="large-4 columns">
				<label>
					<strong>Nama Paket</strong>
					<input type="text" name="nmpaket" value="" />
					<!--<input type="hidden" name="idpaketan" value="<?php echo $detail['ids'];?>" />-->
				</label>
			</div>
		</div>
		<div class="row">
			<div class="large-4 columns">
				<label>
					<strong>Jumlah Poin Sponsor</strong>
					<input type="text" name="poinspon" value="" />
				</label>
			</div>
		</div>
		
		<div class="row">
			<div class="large-4 columns">
				<label>
					<strong>Harga Paket</strong>
					<input type="text" name="hrgpaket" value="" />
				</label>
			</div>
		</div>
		
		<div class="row">
			<div class="large-4 columns">
				<label>
					<strong>Untuk</strong>
					<select name="untuk">
						<option value="">- Pilih</option>
						<option value="seller">SELLER</option>
						<option value="member">MEMBER</option>
					</select>
				</label>
			</div>
		</div>
		
		<div class="row">
			<div class="large-4 columns">
				<input type="submit" value="Simpan" class="button small alert" />
			</div>
		</div>
	</form>
	<hr />
	<br />
	<div class="row">
		<div class="large-12 columns">
			<table class="large-12 columns">
				<thead>
					<tr>
						<th>No.</th>
						<th>Nama Paket</th>
						<th>Poin Sponsoran</th>
						<th>Harga Paket</th>
						<th>Untuk</th>
						<th><i class="fi-widget"></i></th>
					</tr>
				</thead>
				<tbody>
				<?php
					$no=1;
					foreach($detail as $listpaket){
						echo "
						<tr>
							<td>$no</td>
							<td>$listpaket[nmpaket]</td>
							<td>$listpaket[poinspon]</td>
							<td>Rp. ".number_format($listpaket['hrgpkt'],0,',','.')."</td>
							<td>".strtoupper($listpaket['untuk'])."</td>
							<td>
								<a href='".base_url()."admin/delpaketan/".$listpaket['ids']."' class='button tiny alert' onclick='return valdel()'><i class='fi-trash'></i></a>
								<a href='".base_url()."admin/editpaketan/".$listpaket['ids']."' class='button tiny'><i class='fi-pencil'></i></a>
							</td>
						</tr>
						";
						
						$no++;
					}
				?>
				</tbody>
			</table>
		</div>
	</div>
</div>