<?php $pag = $this->uri->segment(1); ?>
<?php $page = $this->uri->segment(2); ?>
<?php $pages = $this->uri->segment(3); ?>
<div class="sidebar-menu">
	<header class="logo-env">
		<!-- logo -->
		<!-- <div class="logo">
				<a href="index.html">
					<img src="<?= base_url() ?>assets/images/logo-light.jpg" width="120" alt="" />
				</a>
			</div> -->


		<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
		<div class="sidebar-mobile-menu visible-xs">
			<a href="#" class="with-animation">
				<!-- add class "with-animation" to support animation -->
				<i class="entypo-menu"></i>
			</a>
		</div>
	</header>

	<ul id="main-menu" class="">
		<!-- add class "multiple-expanded" to allow multiple submenus to open -->
		<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
		<li><a href=" <?php echo base_url() ?> " target="_blank"><i class="entypo-monitor"></i><span>Halaman Depan</span></a></li>
		<li <?php if ($page == "Dashboard") echo 'class="active opened active" '; ?>><?= anchor('admin/Dashboard', '<i class=entypo-gauge></i><span>Dashboard</span>'); ?></li>
		
		<!-- Data Mobil -->
		<li <?php if ($pag == "Liatcar" || $pag == "liatcar" || $page == "Tambahcar" || $page == "tambahcar" || $page == "Hapuscar" || $page == "hapuscar") echo 'class="active opened active multiple-expanded" '; ?>>
			<a href="ui-panels.html">
				<i class="entypo-book"></i>
				<span>Data Mobil</span>
			</a>
			<ul>
				<li <?php if ($pag == "Liatcar" || $pag == "liatcar") echo 'class="active opened active multiple-expanded" '; ?>><?= anchor('Kendaraan', '<span class=entypo-direction>Data Mobil</span>'); ?></li>
				<li <?php if ($page == "Tambahcar" || $page == "tambahcar") echo 'class="active opened active multiple-expanded" '; ?>><?= anchor('Kendaraan/masukan', '<span class=entypo-plus>Tambah Data</span>'); ?></li>
				<li <?php if ($page == "Hapuscar" || $page == "hapus") echo 'class="active opened active multiple-expanded" '; ?>><?= anchor('Kendaraan/delete', '<span class=entypo-minus>Hapus Data</span>'); ?></li>
			</ul>
		</li>
		<!-- Akhir Data Mobil -->
		
		<!-- Data Pemesanan -->
		<li <?php if ($pag == "Rental" || $pag == "rental" || $page == "Tambahrental" || $page == "tambahrental" || $page == "Hapusrental" || $page == "hapurental") echo 'class="active opened active multiple-expanded" '; ?>>
			<a href="ui-panels.html">
				<i class="entypo-book"></i>
				<span>Data Peminjaman</span>
			</a>
			<ul>
				<li <?php if ($pag == "Rental" || $pag == "rental") echo 'class="active opened active multiple-expanded" '; ?>><?= anchor('Peminjaman', '<span class=entypo-direction>Data Peminjaman</span>'); ?></li>
				<li <?php if ($page == "Tambahrental" || $page == "tambahrental") echo 'class="active opened active multiple-expanded" '; ?>><?= anchor('Peminjaman/masukan', '<span class=entypo-plus>Tambah Peminjaman</span>'); ?></li>
				<li <?php if ($page == "Hapusrental" || $page == "hapusrental") echo 'class="active opened active multiple-expanded" '; ?>><?= anchor('Kendaraan/delete', '<span class=entypo-minus>Hapus Data</span>'); ?></li>
			</ul>
		</li>
		<!-- Akhir Data Pemesanan -->

		<!-- Pengaturan -->
		
<?php if ($this->ion_auth->is_admin()) { ?>

		<li <?php if ($page == "Auth" || $page == "auth") echo 'class="active opened active multiple-expanded" '; ?>>
			<a href="ui-panels.html">
				<i class="entypo-tools"></i>
				<span>Pengaturan</span>
			</a>
			<ul>
				<li <?php if ($page == "Auth" || $page == "auth") echo 'class="active opened active multiple-expanded" '; ?>><?= anchor('admin/Auth', '<span class=entypo-user> Users</span>'); ?></li>
			</ul>
		</li>

		<?php } ?>

		<li>
			<a href="javascript:;" onclick="jQuery('#modal-1').modal('show');"><i class="entypo-help"></i><span>Tentang</span></a>
		</li>

	</ul>

</div>
<!-- Modal 1 (Basic)-->
<div class="modal fade" id="modal-1">
	<div class="modal-dialog">
		<div class="modal-content">

			<div class="modal-header">
				<h4 class="modal-title">Tentang Website</h4>
			</div>

			<div class="modal-body">
				<strong>Tentang Website</strong><br>
				<i class="glyphicon glyphicon-ok"></i> Created at 2019<br>
				<i class="glyphicon glyphicon-ok"></i> Raka Iqbal Sy<br>
				<i class="glyphicon glyphicon-ok"></i> Teknik Informatika 2016<br>
				<i class="glyphicon glyphicon-ok"></i> UIN BANDUNG<br>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>