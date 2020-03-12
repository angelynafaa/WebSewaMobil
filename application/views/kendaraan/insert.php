<div class='row'>
	<div class= 'col md-12'>
		<form action="<?php echo base_url(). 'kendaraan/insert'; ?>" method = "post">
			<input type="text" class="name" name="Nama" placeholder="Nama Kendaraan" required="">
			<br>
			<input type="text" class="name" name="Jenis" placeholder="Jenis" required="">
			<br>
			<input type="text" class="name" name="Harga" placeholder="Harga" required="">
			<br>
			<input type="submit" value="Input Data">
		</form>
	</div>
</div>