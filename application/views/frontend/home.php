<!-- about -->
<div class="jarallax w3ls-about agile-section" id="about">
	<div class="container">
		<div class="w3-agileits-about-grids">
			<div class="col-md-6 agile-about-left">
				<h2><font color="white">Selamat Datang di SYADIA RENTAL</font></h2>
	
				<script language="JavaScript">
					var text="<font color=white>Rental Mobil";
					var delay=20;
					var currentChar=1;
					var destination="[none]";
					function type() {
						{
							var dest=document.getElementById(destination);
							if (dest) {
								dest.innerHTML=text.substr(0, currentChar)+"<blink>_</blink></font>";
								currentChar++;
								if (currentChar>text.length) {
									currentChar=1;
									setTimeout("type()", 5000);
								}
								else{
									setTimeout("type()", delay);
								}
							}
						}
					}
					function startTyping(textParam, delayParam, destinationParam){
						text=textParam;
						delay=delayParam;
						currentChar=1;
						destination=destinationParam;
						type();
					}
					</script> <h5><div 0px="" 9px="" arial="" color:="" ff0000="" font:="" id="textDestination" margin:="" style="background-color: none;"></div></h5> <script language="JavaScript">
					javascript:startTyping(text, 50, "textDestination");
				</script>

				<p>SYADIA Rental melayani penyewaan mmobil untuk memudakan anda dalam berpergian
				<br>
				</p>
			</div>
			<div class="col-md-6 agile-about-right"></div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //about -->
<!-- team -->
<div class="jarallax agileits-team agile-section" id="team">
	<h3 class="agileits-title">Pengembang</h3>
	<div class="grid">
		<figure class="col-md-3 effect-kira">
			<img src="<?php echo base_url() ?>frontend/web/images/front/blog-img1.jpg" alt="t1" class="img-responsive" />
			<figcaption>
				<h4>Angelyna <span></span></h4>
				<p>
					<a href="#" target="_blank" class="fa fa-facebook icon-border facebook"></a>
					<a href="#" class="fa fa-twitter  icon-border twitter"></a>
					<a href="#" class="fa fa-google-plus  icon-border googleplus"></a>
					<a href="#" class="fa fa-linkedin icon-border linkedin"></a>
				</p>
			</figcaption>
		</figure>
		<figure class="col-md-3 effect-kira">
			<img src="<?php echo base_url() ?>frontend/web/images/front/blog-img7.jpg" alt="t2" class="img-responsive" />
			<figcaption>
				<h4>Dinda <span>Meysya Rochma</span></h4>
				<p>
					<a href="#" target="_blank" class="fa fa-facebook icon-border facebook"></a>
					<a href="#" class="fa fa-twitter  icon-border twitter"></a>
					<a href="#" class="fa fa-google-plus  icon-border googleplus"></a>
					<a href="#" class="fa fa-linkedin icon-border linkedin"></a>
				</p>
			</figcaption>
		</figure>
		<figure class="col-md-3 effect-kira">
			<img src="<?php echo base_url() ?>frontend/web/images/front/t3.jpg" alt="t3" class="img-responsive" />
			<figcaption>
				<h4>Syafti <span>Dhanusafitri</span></h4>
				<p>
					<a href="#" target="_blank" class="fa fa-facebook icon-border facebook"></a>
					<a href="#" class="fa fa-twitter  icon-border twitter"></a>
					<a href="#" class="fa fa-google-plus  icon-border googleplus"></a>
					<a href="#" class="fa fa-linkedin icon-border linkedin"></a>
				</p>
			</figcaption>
		</figure>
		
		<div class="clearfix"></div>
	</div>
</div>
<!-- //team-->
<!--testimonials-->
<div class="jarallax agileits-testimonials agile-section" id="testimonials">
	<div class="container">
		<!--screen-gallery-->
		<div class="col-md-5 col-sm-12 wthree-testimonials-left">
			<h3 class="agileits-title">testimonials</h3>
			<p>Lihat apa yang mereka katakan tentang Web Rumah Konsultasi Hukum Islam</p>
		</div>
		<div class="col-md-7 col-sm-12 wthree-testimonials-right">
			<div class="sreen-gallery-cursual">
				<!-- required-js-files-->
				<link href="<?php echo base_url() ?>frontend/web/css/owl.carousel.css" rel="stylesheet">
				<script src="<?php echo base_url() ?>frontend/web/js/owl.carousel.js"></script>
				<script>
					$(document).ready(function() {
						$("#owl-demo").owlCarousel({
							items: 1,
							lazyLoad: true,
							autoPlay: false,
							navigation: true,
							navigationText: false,
							pagination: true,
						});
					});
				</script>
				<!--//required-js-files-->
				<div id="owl-demo" class="owl-carousel">
					<div class="item-owl">
						<div class="customer-say">
							<div class="col-md-6 col-sm-6 col-xs-6 customer-grid">
								<div class="de_testi">
									<div class="de_testi_by">
										<h5 class="w3l">"Webnya sangat menarik"</h5>
										<p> Web Rumah Konsultasi Hukum Islam ini membantu saya untuk menyelesaikan suatu masalah.</p>
										<div class="quotes">
											<img src="<?php echo base_url() ?>frontend/web/images/front/p1.jpg" alt="">
											<a href="#">Nurwahidin</a>
											<p>, Konsultasi</p>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 customer-grid">
								<div class="de_testi">
									<div class="de_testi_by">
										<h5 class="w3l">"Sangat Memuaskan"</h5>
										<p> Dengan adanya situs ini, membantu saya dalam kehidupan yang lebih menenangkan.</p>
										<div class="quotes">
											<img src="<?php echo base_url() ?>frontend/web/images/front/p2.jpg" alt="">
											<a href="#">Ahmad Zainal </a>
											<p>, Konsultasi</p>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>

							<div class="clearfix"></div>
						</div>
					</div>
					<div class="item-owl">
						<div class="customer-say">
							<div class="col-md-6 col-sm-6 col-xs-6 customer-grid">
								<div class="de_testi">
									<div class="de_testi_by">
										<h5 class="w3l">"Sangat membantu.."</h5>
										<p> Semoga terus ditingkatkan pelanannya.</p>
										<div class="quotes">
											<img src="<?php echo base_url() ?>frontend/web/images/front/p3.jpg" alt="">
											<a href="#">Fajar Raihansyah</a>
											<p>, Konsultasi</p>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 customer-grid">
								<div class="de_testi">
									<div class="de_testi_by">
										<h5 class="w3l">"Mantap !"</h5>
										<p> Webnya keren. terus tingkatkan</p>
										<div class="quotes">
											<img src="<?php echo base_url() ?>frontend/web/images/front/p4.jpg" alt="">
											<a href="#">Rizky Wibiantoro</a>
											<p>, Konsultasi</p>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>

							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
			<!--//screen-gallery-->
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--//testimonials-->
<!-- contact -->
<div class="jarallax agileits-contact agile-section" id="contact">
	<div class="container">
		<h3 class="agileits-title"><font color="white">Mulai Boking</font></h3>
		<div class="w3agile-contact">
			<div class="col-md-5 col-sm-5 col-xs-6 w3_agileits-contact-left">
				<div class="wthree-address">
					<div class="col-md-2 col-sm-1 col-xs-1 agile-icon">
						<span class="fa fa-map-signs" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 col-sm-11 col-xs-11 w3_agile-contact-text">
						<h5>Alamat</h5>
						<p>Jalan A.H. Nasution No. 105, Cipadung, Cibiru, Kota Bandung, Jawa Barat 40614</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="wthree-address">
					<div class="col-md-2 col-sm-1 col-xs-1 agile-icon">
						<span class="fa fa-phone" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 col-sm-11 col-xs-11 w3_agile-contact-text">
						<h5>telepon</h5>
						<p>082196977703</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="wthree-address">
					<div class="col-md-2 col-sm-1 col-xs-1 agile-icon">
						<span class="fa fa-envelope" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 col-sm-11 col-xs-11  w3_agile-contact-text">
						<h5>email</h5>
						<a href="mailto:rkhi_develop@gmail.com">SYADIA@gmail.com</a>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-7 col-sm-7 col-xs-6 contact-right-w3l">
				<form action="<?php echo base_url(). 'frontend/insert'; ?>" method = "post">
					<br>
					<select class="form-control form-control-lg" name="nama_kendaraan">
						<?php foreach ($kendaraan as $data2) { ?>
							<option><?= $data2->Nama ?></option>
						<?php } ?> 

			</select>
					<br>
					<input type="text" class="form-control" name="nama_peminjam" placeholder="Nama Peminjam" required="">
					<br>
					<input type="number" class="form-control" name="ktp" placeholder="No.KTP" required="">
					<br>
					<br>
					<input type="number" class="form-control" name="no_sim" placeholder="No.SIM" required="">
					<br>
					<br>
					<input type="date" class="form-control" name="tgl_pinjam" placeholder="" required="">
					<br>
					<br>
					<input type="date" class="form-control" name="tgl_kembali" placeholder="" required="">
					<br>
					<br>
					<textarea placeholder="Catatan Kami" required="" name="pesan"></textarea>
					<br>
					<input type="submit" value="Input Data">
				</form>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //contact -->
