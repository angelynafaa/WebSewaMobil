<div class ="row">
	<div class="col md-12">

		<table style="margin:20px auto;" border="1">
			<tr>
				<th>NO</th>
				<th>Nama Kendaraan</th>
				<th>Jenis Kendaraan</th>
				<th>Harga</th>
				<th>Action</th>
			</tr>
			<?php
			$no = 1;
			foreach ($kendaraan as $u) {
			?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $u->Nama ?></td>
				<td><?php echo $u->Jenis ?></td>
				<td><?php echo $u->Harga ?></td>
				<td>
					<?php echo anchor('Kendaraan/edit/'.$u->id_kendaraan,'Edit');?>
					<?php echo anchor('Kendaraan/hapus/'.$u->id_kendaraan,'Hapus');?>
				</td>
			</tr>
		<?php } ?>
	</table>
	</div>
</div>