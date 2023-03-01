@extends('layouts.master')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/demos/kindergarten/kindergarten.css') }}" type="text/css" />
@endpush

@section('title')
    <title>SMKN 1 Situbondo</title>
@endsection

@section('content')
    <section id="slider" class="slider-element min-vh-md-75 py-4 include-header">
        <div id="wrapper" class="clearfix">
            <header id="header" class="transparent-header">
                <div id="header-wrap" class="">
                    <div class="container">
                        <div class="header-row justify-content-lg-between">

                            <div class="header-misc col-lg-3 justify-content-end">

                                <a href="https://wa.me/+1122233" target="_blank"
                                    class="Whatsapp-icon d-flex align-items-center me-2 text-dark h-text-color font-primary fw-bold h5 mb-0">

                                </a>
                            </div>
                            <div id="primary-menu-trigger">
                                <svg class="svg-trigger" viewBox="0 0 100 100">
                                    <path
                                        d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20">
                                    </path>
                                    <path d="m 30,50 h 40"></path>
                                    <path
                                        d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20">
                                    </path>
                                </svg>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="header-wrap-clone" style="height: 101.25px;"></div>
            </header>

            <section id="slider" class="slider-element include-header" style="background-color: rgb(253, 227, 161);">
                <div class="position-absolute top-0 start-0 w-100 h-100"
                    style="background: transparent url('demos/kindergarten/images/hero-bg-icons.svg') center center / cover; opacity: 0.04">
                </div>
                <div class="container">
                    <div class="row align-items-center min-vh-100 pt-5 pb-4">
                        <div class="col-lg-6">
                            <br><h6 class="mb-4 ls1 text-uppercase fw-normal">Bergabunglah Bersama Kami</h6>
                            <h1 class="display-3 fw-bolder">Solusi Tepat Menjawab Tantangan</h1>
                            <p class="mt-4 mb-5 fw-light">Assalamualaikum Warahmatullah Wabarakatuh <br>
                                Puji Syukur ke hadirat Allah SWT, karena berkat karunia rahmat dan hidayah-Nya, pada akhirnya website SMK Negeri 1 Situbondo dapat diluncurkan di dunia maya.
                                Mudah-mudahan dengan optimalisasi penggunaan internet dan website ini peningkatan mutu pendidikan dan komunikasi global dapat segera terwujud.<br>
                                Wassalamualaikum Warahmatullah Wabarakatuh</p>
                        </div>
                        <div class="col-lg-6 align-self-end mt-5 mt-lg-0">
                            <img src="{{ asset('assets/demos/kindergarten/images/Bu-Susiana.png') }}" alt="Hero Bg">
                        </div>
                    </div>
                </div>

                </div>
            </section>

            
            <footer id="footer" class="border-0"
                style="background-image: linear-gradient(to top, #61BFDB, #E0F2C2, #FFF);">
                <div class="position-absolute top-0 start-0 w-100 h-100"
                    style="background: transparent url('demos/kindergarten/images/footer.png') center bottom / cover;">
                </div>
                <div class="container" style="padding-bottom: 380px;">
                    <div class="footer-widgets-wrap">
                        <div class="row col-mb-50">
                            <div class="col-lg-1-5 col-4">
                                <div class="widget widget_links">
                                </div>
                            </div>
                            <div class="col-lg-1-5 col-6">
                                <div class="widget clearfix">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-auto text-center mt-4 text-smaller pb-3 font-primary">
                    Copyrights © 2014 All Rights Reserved by Canvas Inc.
                </div>
            </footer>
        </div>
    </section>
@endsection
