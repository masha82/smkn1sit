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
						<div id="logo" class="me-lg-0 col-lg-2">
							<a href="index.html" class="standard-logo"><img src="{{ asset('assets/demos/kindergarten/images/logosmkn.png') }}" alt="Canvas Logo" width="140"></a>
						</div><!-- #logo end -->

							
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
										<a class="menu-link" href="{{ url('galeri') }}">
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

		<!-- Content
		============================================= -->
        <section id="content">

            <div class="content-wrap p-0 mb-4">
                @yield('content')
            </div>
        </section>

		<!-- Footer
		============================================= -->
		<footer id="footer" class="border-0">
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