<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('assets/style.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('assets/css/swiper.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('assets/css/dark.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('assets/css/font-icons.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" type="text/css" />

	<!-- Date & Time Picker CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

	<!-- Kindergarten Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{ asset('assets/demos/kindergarten/kindergarten.css') }}" type="text/css" /> <!-- Kindergarten Custom Css -->
	<link rel="stylesheet" href="{{ asset('assets/demos/kindergarten/css/fonts.css') }}" type="text/css" /> <!-- Kindergarten Custom Fonts -->
	<!-- / -->

	<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="css/colors.php?color=6953A8" type="text/css" />

	<!-- Document Title
	============================================= -->
	@yield('title')
	<title>Kindergarten | Canvas</title>

</head>

<body class="stretched">

	<div class="modal-on-load" data-target="#myModal1"></div>

	<!-- Modal -->
	<div class="modal1 mfp-hide subscribe-widget" id="myModal1">
		<a href="#" class="d-flex mx-auto h-scale-sm all-ts" style="max-width: 670px">
			<img src="{{ asset('assets/demos/kindergarten/images/banner.jpg') }}" alt="Banner Image" class="rounded-4">
		</a>
	</div>

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row justify-content-lg-between">

						<!-- Logo
						============================================= -->
						<div id="logo" class="me-lg-0 col-lg-3">
							<a href="index.html" class="standard-logo"><img src="{{ asset('assets/demos/kindergarten/images/logosmkn.png') }}" alt="Canvas Logo" width="140"></a>
							<a href="index.html" class="retina-logo"><img src="{{ asset('assets/demos/kindergarten/images/logosmkn.png') }}" alt="Canvas Logo" width="140"></a>
						</div><!-- #logo end -->

						<div class="header-misc col-lg-3 justify-content-end">
							<!-- WhatsApp Icon
							============================================= -->
							<a href="https://wa.me/+1122233" target="_blank" class="Whatsapp-icon d-flex align-items-center me-2 text-dark h-text-color font-primary fw-bold h5 mb-0">
							<!--	<i class="icon-whatsapp me-2"></i> +0-11-475-1433 -->
							</a>
						</div>


						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<nav class="primary-menu">

							<ul class="menu-container">
								<li class="menu-item"><a class="menu-link" href="#">
									<div>BERANDA</div>
								</a>
								<ul class="sub-menu-container" style="">
									<li class="menu-item" style="">
										<a class="menu-link" href="{{ url('visi') }}">
											<div>BERITA</div>
										</a>
									</li>
									<li class="menu-item" style="">
										<a class="menu-link" href="{{ url('regulasi') }}">
											<div>GALERI</div>
										</a>
									</li>
									<li class="menu-item" style="">
										<a class="menu-link" href="{{ url('regulasi') }}">
											<div>VIDEO</div>
										</a>
									</li>
								</ul>
								</li>
								<li class="menu-item"><a class="menu-link" href="#">
									<div>PROFIL</div>
								</a>
								<ul class="sub-menu-container" style="">
									<li class="menu-item" style="">
										<a class="menu-link" href="{{ url('visi') }}">
											<div>TENTANG SEKOLAH</div>
										</a>
									</li>
									<li class="menu-item" style="">
										<a class="menu-link" href="{{ url('regulasi') }}">
											<div>VISI DAN MISI</div>
										</a>
									</li>
									<li class="menu-item" style="">
										<a class="menu-link" href="{{ url('strukturorg') }}">
											<div>KEPALA SEKOLAH</div>
										</a>
									</li>
									<li class="menu-item" style="">
										<a class="menu-link" href="{{ url('strukturorg') }}">
											<div>KOMPETENSI KEAHLIAN</div>
										</a>
									</li>
									<li class="menu-item" style="">
										<a class="menu-link" href="{{ url('strukturorg') }}">
											<div>PRESTASI SEKOLAH</div>
										</a>
									</li>
								</ul>
								</li>
								<li class="menu-item"><a class="menu-link" href="#">
									<div>WAKASEK</div>
								</a>
								<ul class="sub-menu-container" style="">
									<li class="menu-item" style="">
										<a class="menu-link" href="{{ url('visi') }}">
											<div>WAKA KURIKULUM</div>
										</a>
									</li>
									<li class="menu-item" style="">
										<a class="menu-link" href="{{ url('regulasi') }}">
											<div>WAKA KESISWAAN</div>
										</a>
									</li>
									<li class="menu-item" style="">
										<a class="menu-link" href="{{ url('strukturorg') }}">
											<div>WAKA SARPRAS</div>
										</a>
									</li>
									<li class="menu-item" style="">
										<a class="menu-link" href="{{ url('strukturorg') }}">
											<div>WAKA HUMAS</div>
										</a>
									</li>
								</ul>
								</li>
								<li class="menu-item"><a class="menu-link" href="#">
									<div>DATA</div>
								</a>
								<ul class="sub-menu-container" style="">
									<li class="menu-item" style="">
										<a class="menu-link" href="{{ url('visi') }}">
											<div>SARPRAS</div>
										</a>
									</li>
									<li class="menu-item" style="">
										<a class="menu-link" href="{{ url('regulasi') }}">
											<div>GURU</div>
										</a>
									</li>
									<li class="menu-item" style="">
										<a class="menu-link" href="{{ url('strukturorg') }}">
											<div>TENAGA PENDIDIK</div>
										</a>
									</li>
									<li class="menu-item" style="">
										<a class="menu-link" href="{{ url('strukturorg') }}">
											<div>SISWA</div>
										</a>
									</li>
									<li class="menu-item" style="">
										<a class="menu-link" href="{{ url('strukturorg') }}">
											<div>PRESTASI SEKOLAH</div>
										</a>
									</li>
								</ul>
								</li>
								<li class="menu-item"><a class="menu-link" href="#">
									<div>INFORMASI</div>
								</a>
								<ul class="sub-menu-container" style="">
									<li class="menu-item" style="">
										<a class="menu-link" href="{{ url('visi') }}">
											<div>PENGUMUMAN</div>
										</a>
									</li>
									<li class="menu-item" style="">
										<a class="menu-link" href="{{ url('regulasi') }}">
											<div>AGENDA KEGIATAN</div>
										</a>
									</li>
									<li class="menu-item" style="">
										<a class="menu-link" href="{{ url('strukturorg') }}">
											<div>JADWAL PELAJARAN</div>
										</a>
									</li>
									<li class="menu-item" style="">
										<a class="menu-link" href="{{ url('strukturorg') }}">
											<div>JADWAL UJIAN</div>
										</a>
									</li>
									<li class="menu-item" style="">
										<a class="menu-link" href="{{ url('strukturorg') }}">
											<div>EKSTRAKURIKULER</div>
										</a>
									</li>
								</ul>
								</li>
								<li class="menu-item"><a class="menu-link" href="#">
									<div>OSIS</div>
								</a>
								<ul class="sub-menu-container" style="">
									<li class="menu-item" style="">
										<a class="menu-link" href="{{ url('visi') }}">
											<div>TENTANG OSIS</div>
										</a>
									</li>
									<li class="menu-item" style="">
										<a class="menu-link" href="{{ url('regulasi') }}">
											<div>PENGURUS OSIS</div>
										</a>
									</li>
									<li class="menu-item" style="">
										<a class="menu-link" href="{{ url('strukturorg') }}">
											<div>TENTANG KEGIATAN</div>
										</a>
									</li>
								</ul>
								</li>
								<li class="menu-item"><a class="menu-link" href="#">
									<div>APLIKASI SEKOLAH</div>
								</a>
								<ul class="sub-menu-container" style="">
									<li class="menu-item" style="">
										<a class="menu-link" href="{{ url('visi') }}">
											<div>DAPODIK</div>
										</a>
									</li>
									<li class="menu-item" style="">
										<a class="menu-link" href="{{ url('regulasi') }}">
											<div>E-RAPOR</div>
										</a>
									</li>
								</ul>
								</li>
								<li class="menu-item"><a class="menu-link" href="#">
									<div>PPDB</div>
								</a>
								<ul class="sub-menu-container" style="">
									<li class="menu-item" style="">
										<a class="menu-link" href="{{ url('visi') }}">
											<div>JALUR ONLINE</div>
										</a>
									</li>
									<li class="menu-item" style="">
										<a class="menu-link" href="{{ url('regulasi') }}">
											<div>JALUR OFFLINE</div>
										</a>
									</li>
								</ul>
								</li>
								<li class="menu-item"><a class="menu-link" href="#">
									<div>OPINI</div>
								</a>
								<ul class="sub-menu-container" style="">
									<li class="menu-item" style="">
										<a class="menu-link" href="{{ url('visi') }}">
											<div>OPINI GURU</div>
										</a>
									</li>
									<li class="menu-item" style="">
										<a class="menu-link" href="{{ url('regulasi') }}">
											<div>OPINI SISWA</div>
										</a>
									</li>
								</ul>
								</li>
								<li class="menu-item"><a class="menu-link" href="#">
									<div>ADMIN</div>
								</a>
								<ul class="sub-menu-container" style="">
									<li class="menu-item" style="">
										<a class="menu-link" href="{{ url('visi') }}">
											<div>FORM BERITA</div>
										</a>
									</li>
									<li class="menu-item" style="">
										<a class="menu-link" href="{{ url('regulasi') }}">
											<div>FORM GALERI</div>
										</a>
									</li>
								</ul>
								</li>
							</ul>

						</nav><!-- #primary-menu end -->

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		<!-- Hero
		============================================= -->
		<section id="slider" class="slider-element include-header" style="background-color: #FDE3A1;">

			<div class="position-absolute top-0 start-0 w-100 h-100" style="background: transparent url('demos/kindergarten/images/hero-bg-icons.svg') center center / cover; opacity: 0.04"></div>

			<div class="container">
				<div class="row align-items-center min-vh-100 pt-5 pb-4">
					<div class="col-lg-6">
						<h6 class="mb-4 ls1 text-uppercase fw-normal">Bergabunglah Bersama Kami</h6>
						<h1 class="display-3 fw-bolder">Solusi Tepat Menjawab Tantangan</h1>
						<p class="mt-4 mb-5 fw-light">Rapidiously conceptualize inexpensive value through functionalized markets. Enthusiastically integrate distinctive web services vis-a-vis end-to-end ROI. Assertively fashion best-of-breed products.</p>
						<a href="#" class="btn text-white bg-color rounded-1 py-3 px-5 fw-medium">Enroll Now  <i class="icon-line-arrow-right position-relative" style="top: 2px"></i></a>
						<a href="https://www.youtube.com/watch?v=P3Huse9K6Xs" class="btn bg-white rounded-1 px-5 py-3 fw-medium ms-2" data-lightbox="iframe"><i class="icon-play-circle me-1" style="position: relative; top: 1px; margin-right: 5px;"></i> Watch Video</a>
					</div>
					<div class="col-lg-6 align-self-end mt-5 mt-lg-0">
						<img src="{{ asset('assets/demos/kindergarten/images/Bu-Susiana.png') }}" alt="Hero Bg">
					</div>
				</div>
			</div>

			<div class="shape-divider" data-shape="wave-2" data-position="bottom" data-height="80"></div>

			<div class="position-relative d-none d-sm-block">
				<img src="demos/kindergarten/images/fish2.png" alt="Fish" class="background-img pos-right float-anim" style="top: -120px">
			</div>

		</section>

		<!-- Content
		============================================= -->
        <section id="content">

            <div class="content-wrap p-0 mb-4">
                @yield('content')
            </div>
        </section>

		<!-- Footer
		============================================= -->
		<footer id="footer" class="border-0" style="background-image: linear-gradient(to top, #61BFDB, #E0F2C2, #FFF);">

			<div class="position-absolute top-0 start-0 w-100 h-100" style="background: transparent url('demos/kindergarten/images/footer.png') center bottom / cover;"></div>

			<div class="container" style="padding-bottom: 380px;">
				<div class="footer-widgets-wrap">
					<div class="row col-mb-50">
						<div class="col-lg-1-5 col-4">
							<div class="widget widget_links">

								<h3 class="ls0 mb-3 fw-bold">Features</h3>

								<ul>
									<li><a href="#" class="h-text-color">Help Center</a></li>
									<li><a href="#" class="h-text-color">Paid with Moblie</a></li>
									<li><a href="#" class="h-text-color">Status</a></li>
									<li><a href="#" class="h-text-color">Changelog</a></li>
								</ul>

							</div>
						</div>
						<div class="col-lg-1-5 col-4">
							<div class="widget widget_links">

								<h3 class="ls0 mb-3 fw-bold">Support</h3>

								<ul>
									<li><a href="#" class="h-text-color">Home</a></li>
									<li><a href="#" class="h-text-color">About</a></li>
									<li><a href="#" class="h-text-color">FAQs</a></li>
									<li><a href="#" class="h-text-color">Contact</a></li>
								</ul>

							</div>
						</div>
						<div class="col-lg-1-5 col-4">
							<div class="widget widget_links">

								<h3 class="ls0 mb-3 fw-bold">Trending</h3>

								<ul>
									<li><a href="#" class="h-text-color">Shop</a></li>
									<li><a href="#" class="h-text-color">Portfolio</a></li>
									<li><a href="#" class="h-text-color">Blog</a></li>
									<li><a href="#" class="h-text-color">Events</a></li>
								</ul>

							</div>
						</div>
						<div class="col-lg-1-5 col-6">
							<div class="widget">
								<h3 class="ls0 mb-3 fw-bold">Open Hours</h3>

								<ul class="list-unstyled iconlist ms-0">
									<li class="mb-2"><a href="#" class="text-dark h-text-color">Monday - Saturday</a></li>
									<li class="mb-2"><a href="#" class="text-dark h-text-color">6:30 - 20:00</a></li>
									<li class="mb-2"><a href="#" class="text-dark h-text-color">Sunday Closed</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-1-5 col-6">
							<div class="widget clearfix">

								<h3 class="ls0 mb-3 fw-bold">Contact</h3>

								<div>
									<address class="font-body text-dark mb-3">
										795 Folsom Ave, Suite 600<br>
										San Francisco, CA 94107<br>
									</address>
									<div class="mb-1"><i class="h6 icon-line-phone-call me-2">:</i> <a class="text-dark h-text-color" href="tel:08547632521">+(0) 8547 632521</a></div>
									<div><i class="h6 icon-whatsapp me-2">:</i> <a class="text-dark h-text-color" href="https://wa.me/01147521433">+(0) 11 4752 1433</a></div>
								</div>

							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="col-auto text-center mt-4 text-smaller pb-3 font-primary">
				Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.
			</div>

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-hand-up rounded-circle"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{ asset('assets/js/jquery.js') }}"></script>
	<script src="{{ asset('assets/js/plugins.min.js') }}"></script>

	<!-- Include Date Range Picker -->
	<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{ asset('assets/js/functions.js') }}"></script>

	<script>
		let carousels = jQuery('#kindergarten-carousel-img, #kindergarten-carousel-text');
		jQuery('.carousel-control-prev').on( 'click', function(){
			carousels.carousel('prev');
		});
		jQuery('.carousel-control-next').on( 'click', function(){
			carousels.carousel('next');
		});

		jQuery(function() {
			jQuery(".component-flatpickr").flatpickr({
				enableTime: true,
				dateFormat: "d/m/yy - H:i",
			});
		});
	</script>

</body>
</html>