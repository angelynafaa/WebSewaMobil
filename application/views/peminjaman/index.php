<div class ="row">
	<div class="col md-12">

		<table style="margin:20px auto;" border="1">
			<tr>
				<th>NO</th>
				<th>Nama Peminjam</th>
				<th>Nama Kendaraan</th>
				<th>KTP</th>
				<th>No SIM</th>
				<th>Tanggal Pinjam</th>
				<th>Tanggal Kembali</th>
			</tr>
			<?php
			$no = 1;
			foreach ($peminjaman as $u) {
			?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $u->nama_peminjam ?></td>
				<td><?php echo $u->nama_Kendaraan?></td>
				<td><?php echo $u->ktp?></td>
				<td><?php echo $u->no_sim?></td>
				<td><?php echo $u->tgl_pinjam?></td>
				<td><?php echo $u->tgl_kembali?></td>
				<td>
				</td>
			</tr>
		<?php } ?>
	</table>
	</div>
</div>