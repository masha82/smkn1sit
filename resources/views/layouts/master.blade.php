<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="SemiColonWeb"/>

    <!-- Stylesheets
    ============================================= -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/dark.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/font-icons.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" type="text/css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

    <!-- Date & Time Picker CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- Kindergarten Demo Specific Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/demos/kindergarten/kindergarten.css') }}" type="text/css"/>
    <!-- Kindergarten Custom Css -->
    <link rel="stylesheet" href="{{ asset('assets/demos/kindergarten/css/fonts.css') }}" type="text/css"/>
    <!-- Kindergarten Custom Fonts -->
    <!-- / -->

    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link rel="stylesheet" href="css/colors.php?color=6953A8" type="text/css"/>
    @stack('css')
    <!-- Document Title
	============================================= -->
    @yield('title')
    <title>Kindergarten | Canvas</title>

</head>

<body class="stretched">

<div class="modal-on-load" data-target="#myModal1"></div>

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
                        <a href="index.html" class="standard-logo"><img src="{{asset('logosmkn.png')}}"
                                                                        style="height: 50px!important;"></a>
                        <a href="index.html" class="retina-logo"><img src="{{asset('logosmkn.png')}}"
                                                                      style="height: 50px!important; "></a>
                    </div><!-- #logo end -->


                    <div id="primary-menu-trigger">
                        <svg class="svg-trigger" viewBox="0 0 100 100">
                            <path
                                d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path>
                            <path d="m 30,50 h 40"></path>
                            <path
                                d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path>
                        </svg>
                    </div>
                    <nav class="primary-menu">

                        <ul class="menu-container">
                            @guest
                                <li class="menu-item"><a class="menu-link" href="{{ url('/') }}">
                                        <div>BERANDA</div>
                                    </a>
                                    <ul class="sub-menu-container" style="">
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ url('berita') }}">
                                                <div>BERITA</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ url('gallery') }}">
                                                <div>GALERI</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ url('video') }}">
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
                                            <a class="menu-link" href="{{ url('tentangsekolah') }}">
                                                <div>TENTANG SEKOLAH</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ url('visidanmisi') }}">
                                                <div>VISI DAN MISI</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ url('pejabat') }}">
                                                <div>KEPALA SEKOLAH</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ url('pejabat') }}">
                                                <div>WAKIL KEPALA SEKOLAH</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ url('kompetensi') }}">
                                                <div>KOMPETENSI KEAHLIAN</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ url('achievement') }}">
                                                <div>PRESTASI SEKOLAH</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="menu-item"><a class="menu-link" href="#">
                                        <div>DATA</div>
                                    </a>
                                    <ul class="sub-menu-container" style="">
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ url('sarana') }}">
                                                <div>SARPRAS</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ url('gurusekolah') }}">
                                                <div>GURU</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ url('tenagapendidik') }}">
                                                <div>TENAGA PENDIDIK</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ url('siswasekolah') }}">
                                                <div>SISWA</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item"><a class="menu-link" href="#">
                                        <div>INFORMASI</div>
                                    </a>
                                    <ul class="sub-menu-container" style="">
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ url('infosekolah') }}">
                                                <div>PENGUMUMAN</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ url('agendasekolah') }}">
                                                <div>AGENDA KEGIATAN</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ url('jadwalmapel') }}">
                                                <div>JADWAL PELAJARAN</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ url('jadwalujian') }}">
                                                <div>JADWAL UJIAN</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ url('ekskul') }}">
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
                                            <a class="menu-link" href="{{ url('tentangosis') }}">
                                                <div>TENTANG OSIS</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ url('pengurus') }}">
                                                <div>PENGURUS OSIS</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ url('kegosis') }}">
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
                                            <a class="menu-link" href="{{ url('appschool') }}">
                                                <div>DAPODIK</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ url('appschool') }}">
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
                                            <a class="menu-link" href="{{ url('ppdb') }}">
                                                <div>JALUR ONLINE</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ url('ppdb') }}">
                                                <div>JALUR OFFLINE</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item"><a class="menu-link" href="{{ route('pendapat.create') }}">
                                        <div>OPINI</div>
                                    </a>
                                    {{-- <ul class="sub-menu-container" style="">
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ url('pendapat') }}">
                                                <div>OPINI GURU</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ url('pendapat') }}">
                                                <div>OPINI SISWA</div>
                                            </a>
                                        </li>
                                    </ul> --}}
                                </li>
                            @endguest
                            @auth
                                <li class="menu-item"><a class="menu-link" href="#">
                                        <div>BERANDA</div>
                                    </a>
                                    <ul class="sub-menu-container" style="">
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('berita.create') }}">
                                                <div>FORM BERITA</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('gallery.create') }}">
                                                <div>FORM GALERI</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('video.create') }}">
                                                <div>FORM VIDEO</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item"><a class="menu-link" href="#">
                                        <div>PROFIL</div>
                                    </a>
                                    <ul class="sub-menu-container" style="">
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('tentangsekolah.create') }}">
                                                <div>FORM TENTANG SEKOLAH</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('visidanmisi.create') }}">
                                                <div>FORM VISI & MISI SEKOLAH</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('pejabat.create') }}">
                                                <div>FORM PEJABAT SEKOLAH</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('jurusan.create') }}">
                                                <div>FORM KEAHLIAN/JURUSAN</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('kompetensi.create') }}">
                                                <div>FORM KOMPETENSI KEAHLIAN</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('achievement.create') }}">
                                                <div>FORM PRESTASI SEKOLAH</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item"><a class="menu-link" href="#">
                                        <div>DATA</div>
                                    </a>
                                    <ul class="sub-menu-container" style="">
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('sarana.create') }}">
                                                <div>FORM DATA SARPRAS</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('matapelajaran.create') }}">
                                                <div>FORM DATA MATA PELAJARAN</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('gurusekolah.create') }}">
                                                <div>FORM DATA GURU</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('bidangpendidik.create') }}">
                                                <div>FORM DATA BIDANG PENDIDIK</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('tenagapendidik.create') }}">
                                                <div>FORM DATA TENAGA PENDIDIK</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('siswasekolah.create') }}">
                                                <div>FORM DATA SISWA</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item"><a class="menu-link" href="#">
                                        <div>INFORMASI</div>
                                    </a>
                                    <ul class="sub-menu-container" style="">
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('infosekolah.create') }}">
                                                <div>FORM PENGUMUMAN</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('agendasekolah.create') }}">
                                                <div>FORM AGENDA KEGIATAN</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('jadwalmapel.create') }}">
                                                <div>FORM JADWAL PELAJARAN</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('jadwalexam.create') }}">
                                                <div>FORM JADWAL UJIAN</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('ekskul.create') }}">
                                                <div>FORM EKSTRAKURIKULER</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                </li>
                                <li class="menu-item"><a class="menu-link" href="#">
                                        <div>OSIS</div>
                                    </a>
                                    <ul class="sub-menu-container" style="">
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('tentangosis.create') }}">
                                                <div>FORM TENTANG OSIS</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('pengurus.create') }}">
                                                <div>FORM PENGURUS OSIS</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('kegosis.create') }}">
                                                <div>FORM TENTANG KEGIATAN OSIS</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item" style="">
                                    <a class="menu-link" href="{{ route('appschool.create') }}">
                                        <div>FORM APLIKASI</div>
                                    </a>
                                </li>
                                <li class="menu-item" style="">
                                    <a class="menu-link" href="{{ route('infoppdb.create') }}">
                                        <div>FORM PPDB</div>
                                    </a>
                                </li>
                                <li class="menu-item" style="">
                                    <a class="menu-link" href="{{ route('pendapat.create') }}">
                                        <div>FORM OPINI</div>
                                    </a>
                                </li>
                            @endauth
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
</body>
</html>
<!-- Go To Top
	============================================= -->
<div id="gotoTop" class="icon-hand-up rounded-circle"></div>

<!-- JavaScripts
============================================= -->

<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/plugins.min.js') }}"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<!-- Footer Scripts
============================================= -->
<script src="{{ asset('assets/js/functions.js') }}"></script>
@stack('js')
