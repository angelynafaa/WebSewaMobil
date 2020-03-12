<div class='row'>
	<div class= 'col md-12'>
		<form action="<?php echo base_url(). 'peminjaman/insert'; ?>" method = "post">
			
			<select class="form-control form-control-lg" name="nama_kendaraan">
				<?php foreach ($kendaraan as $data2) { ?>
					<option><?= $data2->Nama ?></option>
				<?php } ?> 

			</select>
			<br>
			<input type="text" class="form-control" name="nama_peminjam" placeholder="Nama Peminjam" required="">
			<br>
			<input type="number" class="name" name="ktp" placeholder="No.KTP" required="">
			<br>
			<input type="number" class="name" name="no_sim" placeholder="No.SIM" required="">
			<br>
			<input type="date" class="name" name="tgl_pinjam" placeholder="Tanggal Pinjam" required="">
			<br>
			<input type="date" class="name" name="tgl_kembali" placeholder="Tanggal Kembali" required="">
			<br>
			<input type="submit" value="Input Data">
		</form>
	</div>
</div>