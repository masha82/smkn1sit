@extends('layouts.master')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/demos/kindergarten/kindergarten.css')}}" type="text/css" />
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
    
    <a href="https://wa.me/+1122233" target="_blank" class="Whatsapp-icon d-flex align-items-center me-2 text-dark h-text-color font-primary fw-bold h5 mb-0">

    </a>
    </div>
    <div id="primary-menu-trigger">
    <svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
    </div>

    </div>
    </div>
    </div>
    <div class="header-wrap-clone" style="height: 101.25px;"></div>
    </header>
    
    <section id="slider" class="slider-element include-header" style="background-color: rgb(253, 227, 161);">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: transparent url('demos/kindergarten/images/hero-bg-icons.svg') center center / cover; opacity: 0.04"></div>
    <div class="container">
        <div class="row align-items-center min-vh-100 pt-5 pb-4">
            <div class="col-lg-6">
                <h6 class="mb-4 ls1 text-uppercase fw-normal">Bergabunglah Bersama Kami</h6>
                <h1 class="display-3 fw-bolder">Solusi Tepat Menjawab Tantangan</h1>
                <p class="mt-4 mb-5 fw-light">Rapidiously conceptualize inexpensive value through functionalized markets. Enthusiastically integrate distinctive web services vis-a-vis end-to-end ROI. Assertively fashion best-of-breed products.</p>
                <!--
                <a href="#" class="btn text-white bg-color rounded-1 py-3 px-5 fw-medium">Enroll Now  <i class="icon-line-arrow-right position-relative" style="top: 2px"></i></a>
                <a href="https://www.youtube.com/watch?v=P3Huse9K6Xs" class="btn bg-white rounded-1 px-5 py-3 fw-medium ms-2" data-lightbox="iframe"><i class="icon-play-circle me-1" style="position: relative; top: 1px; margin-right: 5px;"></i> Watch Video</a>
                -->
            </div>
            <div class="col-lg-6 align-self-end mt-5 mt-lg-0">
                <img src="{{ asset('assets/demos/kindergarten/images/Bu-Susiana.png') }}" alt="Hero Bg">
            </div>
        </div>
    </div>
    <div class="shape-divider" data-shape="wave-2" data-position="bottom" data-height="80" id="shape-divider-2633"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 283.5 27.8" preserveAspectRatio="none" class="op-ts op-1"><path class="shape-divider-fill" d="M283.5,9.7c0,0-7.3,4.3-14,4.6c-6.8,0.3-12.6,0-20.9-1.5c-11.3-2-33.1-10.1-44.7-5.7	s-12.1,4.6-18,7.4c-6.6,3.2-20,9.6-36.6,9.3C131.6,23.5,99.5,7.2,86.3,8c-1.4,0.1-6.6,0.8-10.5,2c-3.8,1.2-9.4,3.8-17,4.7 c-3.2,0.4-8.3,1.1-14.2,0.9c-1.5-0.1-6.3-0.4-12-1.6c-5.7-1.2-11-3.1-15.8-3.7C6.5,9.2,0,10.8,0,10.8V0h283.5V9.7z M260.8,11.3 c-0.7-1-2-0.4-4.3-0.4c-2.3,0-6.1-1.2-5.8-1.1c0.3,0.1,3.1,1.5,6,1.9C259.7,12.2,261.4,12.3,260.8,11.3z M242.4,8.6 c0,0-2.4-0.2-5.6-0.9c-3.2-0.8-10.3-2.8-15.1-3.5c-8.2-1.1-15.8,0-15.1,0.1c0.8,0.1,9.6-0.6,17.6,1.1c3.3,0.7,9.3,2.2,12.4,2.7	C239.9,8.7,242.4,8.6,242.4,8.6z M185.2,8.5c1.7-0.7-13.3,4.7-18.5,6.1c-2.1,0.6-6.2,1.6-10,2c-3.9,0.4-8.9,0.4-8.8,0.5	c0,0.2,5.8,0.8,11.2,0c5.4-0.8,5.2-1.1,7.6-1.6C170.5,14.7,183.5,9.2,185.2,8.5z M199.1,6.9c0.2,0-0.8-0.4-4.8,1.1 c-4,1.5-6.7,3.5-6.9,3.7c-0.2,0.1,3.5-1.8,6.6-3C197,7.5,199,6.9,199.1,6.9z M283,6c-0.1,0.1-1.9,1.1-4.8,2.5s-6.9,2.8-6.7,2.7	c0.2,0,3.5-0.6,7.4-2.5C282.8,6.8,283.1,5.9,283,6z M31.3,11.6c0.1-0.2-1.9-0.2-4.5-1.2s-5.4-1.6-7.8-2C15,7.6,7.3,8.5,7.7,8.6	C8,8.7,15.9,8.3,20.2,9.3c2.2,0.5,2.4,0.5,5.7,1.6S31.2,11.9,31.3,11.6z M73,9.2c0.4-0.1,3.5-1.6,8.4-2.6c4.9-1.1,8.9-0.5,8.9-0.8 c0-0.3-1-0.9-6.2-0.3S72.6,9.3,73,9.2z M71.6,6.7C71.8,6.8,75,5.4,77.3,5c2.3-0.3,1.9-0.5,1.9-0.6c0-0.1-1.1-0.2-2.7,0.2	C74.8,5.1,71.4,6.6,71.6,6.7z M93.6,4.4c0.1,0.2,3.5,0.8,5.6,1.8c2.1,1,1.8,0.6,1.9,0.5c0.1-0.1-0.8-0.8-2.4-1.3	C97.1,4.8,93.5,4.2,93.6,4.4z M65.4,11.1c-0.1,0.3,0.3,0.5,1.9-0.2s2.6-1.3,2.2-1.2s-0.9,0.4-2.5,0.8C65.3,10.9,65.5,10.8,65.4,11.1 z M34.5,12.4c-0.2,0,2.1,0.8,3.3,0.9c1.2,0.1,2,0.1,2-0.2c0-0.3-0.1-0.5-1.6-0.4C36.6,12.8,34.7,12.4,34.5,12.4z M152.2,21.1 c-0.1,0.1-2.4-0.3-7.5-0.3c-5,0-13.6-2.4-17.2-3.5c-3.6-1.1,10,3.9,16.5,4.1C150.5,21.6,152.3,21,152.2,21.1z"></path><path class="shape-divider-fill" d="M269.6,18c-0.1-0.1-4.6,0.3-7.2,0c-7.3-0.7-17-3.2-16.6-2.9c0.4,0.3,13.7,3.1,17,3.3	C267.7,18.8,269.7,18,269.6,18z"></path><path class="shape-divider-fill" d="M227.4,9.8c-0.2-0.1-4.5-1-9.5-1.2c-5-0.2-12.7,0.6-12.3,0.5c0.3-0.1,5.9-1.8,13.3-1.2	S227.6,9.9,227.4,9.8z"></path><path class="shape-divider-fill" d="M204.5,13.4c-0.1-0.1,2-1,3.2-1.1c1.2-0.1,2,0,2,0.3c0,0.3-0.1,0.5-1.6,0.4	C206.4,12.9,204.6,13.5,204.5,13.4z"></path><path class="shape-divider-fill" d="M201,10.6c0-0.1-4.4,1.2-6.3,2.2c-1.9,0.9-6.2,3.1-6.1,3.1c0.1,0.1,4.2-1.6,6.3-2.6	S201,10.7,201,10.6z"></path><path class="shape-divider-fill" d="M154.5,26.7c-0.1-0.1-4.6,0.3-7.2,0c-7.3-0.7-17-3.2-16.6-2.9c0.4,0.3,13.7,3.1,17,3.3	C152.6,27.5,154.6,26.8,154.5,26.7z"></path><path class="shape-divider-fill" d="M41.9,19.3c0,0,1.2-0.3,2.9-0.1c1.7,0.2,5.8,0.9,8.2,0.7c4.2-0.4,7.4-2.7,7-2.6	c-0.4,0-4.3,2.2-8.6,1.9c-1.8-0.1-5.1-0.5-6.7-0.4S41.9,19.3,41.9,19.3z"></path><path class="shape-divider-fill" d="M75.5,12.6c0.2,0.1,2-0.8,4.3-1.1c2.3-0.2,2.1-0.3,2.1-0.5c0-0.1-1.8-0.4-3.4,0	C76.9,11.5,75.3,12.5,75.5,12.6z"></path><path class="shape-divider-fill" d="M15.6,13.2c0-0.1,4.3,0,6.7,0.5c2.4,0.5,5,1.9,5,2c0,0.1-2.7-0.8-5.1-1.4	C19.9,13.7,15.7,13.3,15.6,13.2z"></path></svg></div>
    <div class="position-relative d-none d-sm-block">
    </div>
    </section>
    
    <section id="content">
    <div class="content-wrap">
    <div class="container">
    <h2 class="color h1 fw-bold mb-5">What services we provide:</h2>
    <div class="row col-mb-50">
    <div class="col-lg-8">
    <div class="row col-mb-50">
    <div class="col-md-6">
    <div class="feature-box">
    <div class="fbox-icon">
    <img src="demos/kindergarten/images/icons/puzzle.svg" alt="Icon" class="p-2 rounded" style="background-color: #BDE0E0">
    </div>
    <div class="fbox-content">
    <h3 class="nott ls0">Fun Games</h3>
    <p>Energistically negotiate effective web services after installed base sources. Conveniently productivate.</p>
    </div>
    </div>
    </div>
    <div class="col-md-6">
    <div class="feature-box">
    <div class="fbox-icon mb-4">
    <img src="demos/kindergarten/images/icons/meal.svg" alt="Icon" class="p-2 rounded" style="background-color: #F9E8DF">
    </div>
    <div class="fbox-content">
    <h3 class="nott ls0">Healthy Meal</h3>
    <p>Conveniently evolve cross-platform initiatives and interdependent technology dynamically reliable.</p>
    </div>
    </div>
    </div>
    <div class="col-md-6">
    <div class="feature-box">
    <div class="fbox-icon mb-4">
    <img src="demos/kindergarten/images/icons/teacher.svg" alt="Icon" class="p-2 rounded" style="background-color: #DEE6ED">
    </div>
    <div class="fbox-content">
    <h3 class="nott ls0">Professional Teachers</h3>
    <p>Enthusiastically mesh reliable products without sustainable resources rapidiously seize.</p>
    </div>
    </div>
    </div>
    <div class="col-md-6">
    <div class="feature-box">
    <div class="fbox-icon mb-4">
    <img src="demos/kindergarten/images/icons/soap.svg" alt="Icon" class="p-2 rounded" style="background-color: #d6ECCD">
    </div>
    <div class="fbox-content">
    <h3 class="nott ls0">Clean and Sanitized</h3>
    <p>Enthusiastically disseminate granular schemas vis-a-vis timely collaboration and idea-sharing evisculate.</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-4 mt-5 mt-lg-0">
    <div class="card border-0 p-3 rounded-6" style="background-color: #eddee6;">
    <div class="card-body">
    <img src="demos/kindergarten/images/card-img.png" alt="Card Image" style="margin-top: -80px;">
    <h3 class="card-title mt-4">How we care for your child?</h3>
    <h5 class="fw-normal font-body h6 lh-base mb-0 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus mollitia nemo</h5>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="section py-6" style="background-color: #F6F3EE;">
    <div class="shape-divider" data-shape="wave-5" data-height="50" id="shape-divider-2179"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1280 140" preserveAspectRatio="none" class="op-ts op-1"><path class="shape-divider-fill" d="M0 0v100c20 17.3 40 29.51 80 29.51 51.79 0 74.69-48.57 151.75-48.57 73.72 0 91 54.88 191.56 54.88C543.95 135.8 554 14 665.69 14c109.46 0 98.85 87 188.2 87 70.37 0 69.81-33.73 115.6-33.73 55.85 0 62 39.62 115.6 39.62 58.08 0 57.52-46.59 115-46.59 39.8 0 60 22.48 79.89 39.69V0z"></path></svg></div>
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: url('demos/kindergarten/images/hero-bg-icons.svg') center center / cover; opacity: 0.04"></div>
    <div class="container py-5">
    <ul class="nav nav-pills justify-content-around mx-auto mw-sm mb-3 flex-column flex-md-row" role="tablist">
    <li class="nav-item " role="presentation">
    <button class="nav-link color1 active" id="age-toddler-tab" data-bs-toggle="pill" data-bs-target="#age-toddler" type="button" role="tab" aria-controls="age-toddler" aria-selected="true">Toddler<span>1.5 - 3 years</span></button>
    </li>
    <li class="nav-item " role="presentation">
    <button class="nav-link color2" id="age-preschool-tab" data-bs-toggle="pill" data-bs-target="#age-preschool" type="button" role="tab" aria-controls="age-preschool" aria-selected="false" tabindex="-1">Preschool<span>2 - 3 years</span></button>
    </li>
    <li class="nav-item " role="presentation">
    <button class="nav-link color3" id="age-kindergarten-tab" data-bs-toggle="pill" data-bs-target="#age-kindergarten" type="button" role="tab" aria-controls="age-kindergarten" aria-selected="false" tabindex="-1">Kindergarten<span>3 - 4 years</span></button>
    </li>
    <li class="nav-item " role="presentation">
    <button class="nav-link color4" id="age-prekindergarten-tab" data-bs-toggle="pill" data-bs-target="#age-prekindergarten" type="button" role="tab" aria-controls="age-prekindergarten" aria-selected="false" tabindex="-1">Pre-Kindergarten <span>4 - 5 years</span></button>
    </li>
    </ul>
    <div class="clear"></div>
    <div class="tab-content topmargin-sm">
    <div class="tab-pane fade show active" id="age-toddler" role="tabpanel" aria-labelledby="age-toddler-tab">
    <div class="row col-mb-30">
    <div class="col-lg-4 col-md-6">
    <div class="card border-0 h-100 shadow-sm">
    <h3 class="card-header font-primary p-4 color1">ABC's of Learning</h3>
    <div class="card-body p-4">
    Our curriculum is specifically designed to assist your toddler in developing the essentials for early.
    <ul class="ps-3 mt-4 mb-0">
    <li class="mb-3">Globally whiteboard visionary bandwidth and interactive catalysts for change. Globally repurpose.</li>
    <li class="mb-3">Professionally revolutionize standardized infomediaries via business methods of empowerment. Collaboratively cultivate.</li>
    <li class="mb-3">Distinctively parallel task functional internal or "organic" sources and front-end best.</li>
    <li class="mb-3">Rapidiously customize worldwide channels via accurate e-tailers. Monotonectally re-engineer premium scenarios.</li>
    <li class="mb-3">Synergistically disseminate plug-and-play manufactured products without alternative e-tailers. Conveniently pontificate interoperable.</li>
    </ul>
    <a href="#" class="more-link fst-normal ms-3">Learn More <i class="icon-line-arrow-right"></i></a>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-6">
    <div class="card border-0 h-100 shadow-sm">
    <h3 class="card-header font-primary p-4 color1">Brain Development</h3>
    <div class="card-body p-4">
    Conveniently benchmark flexible human capital for optimal deliverables. Collaboratively fabricate market-driven.
    <ul class="ps-3 mt-4 mb-0">
    <li class="mb-3">Globally whiteboard visionary bandwidth and interactive catalysts for change. Globally repurpose.</li>
    <li class="mb-3">Professionally revolutionize standardized infomediaries via business methods of empowerment. Collaboratively cultivate.</li>
    <li class="mb-3">Distinctively parallel task functional internal or "organic" sources and front-end best.</li>
    <li class="mb-3">Rapidiously customize worldwide channels via accurate e-tailers. Monotonectally re-engineer premium scenarios.</li>
    <li class="mb-3">Synergistically disseminate plug-and-play manufactured products without alternative e-tailers. Conveniently pontificate interoperable.</li>
    </ul>
    <a href="#" class="more-link fst-normal ms-3">Learn More <i class="icon-line-arrow-right"></i></a>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-6">
    <div class="card border-0 h-100 shadow-sm">
    <h3 class="card-header font-primary p-4 color1">General Learning</h3>
    <div class="card-body p-4">
    Conveniently benchmark flexible human capital for optimal deliverables. Collaboratively fabricate market-driven.
    <ul class="ps-3 mt-4 mb-0">
    <li class="mb-3">Globally whiteboard visionary bandwidth and interactive catalysts for change. Globally repurpose.</li>
    <li class="mb-3">Professionally revolutionize standardized infomediaries via business methods of empowerment. Collaboratively cultivate.</li>
    <li class="mb-3">Distinctively parallel task functional internal or "organic" sources and front-end best.</li>
    <li class="mb-3">Rapidiously customize worldwide channels via accurate e-tailers. Monotonectally re-engineer premium scenarios.</li>
    </ul>
    <a href="#" class="more-link fst-normal ms-3">Learn More <i class="icon-line-arrow-right"></i></a>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="tab-pane fade" id="age-preschool" role="tabpanel" aria-labelledby="age-preschool-tab">
    <div class="row col-mb-30">
    <div class="col-lg-4 col-md-6">
    <div class="card border-0 h-100 shadow-sm">
    <h3 class="card-header font-primary p-4 color2">ABC's of Learning</h3>
    <div class="card-body p-4">
    Our curriculum is specifically designed to assist your toddler in developing the essentials for early.
    <ul class="ps-3 mt-4 mb-0">
    <li class="mb-3">Globally whiteboard visionary bandwidth and interactive catalysts for change. Globally repurpose.</li>
    <li class="mb-3">Professionally revolutionize standardized infomediaries via business methods of empowerment. Collaboratively cultivate.</li>
    <li class="mb-3">Distinctively parallel task functional internal or "organic" sources and front-end best.</li>
    <li class="mb-3">Rapidiously customize worldwide channels via accurate e-tailers. Monotonectally re-engineer premium scenarios.</li>
    <li class="mb-3">Synergistically disseminate plug-and-play manufactured products without alternative e-tailers. Conveniently pontificate interoperable.</li>
    </ul>
    <a href="#" class="more-link fst-normal ms-3">Learn More <i class="icon-line-arrow-right"></i></a>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-6">
    <div class="card border-0 h-100 shadow-sm">
    <h3 class="card-header font-primary p-4 color2">Brain Development</h3>
    <div class="card-body p-4">
    Conveniently benchmark flexible human capital for optimal deliverables. Collaboratively fabricate market-driven.
    <ul class="ps-3 mt-4 mb-0">
    <li class="mb-3">Globally whiteboard visionary bandwidth and interactive catalysts for change. Globally repurpose.</li>
    <li class="mb-3">Professionally revolutionize standardized infomediaries via business methods of empowerment. Collaboratively cultivate.</li>
    <li class="mb-3">Distinctively parallel task functional internal or "organic" sources and front-end best.</li>
    <li class="mb-3">Rapidiously customize worldwide channels via accurate e-tailers. Monotonectally re-engineer premium scenarios.</li>
    <li class="mb-3">Synergistically disseminate plug-and-play manufactured products without alternative e-tailers. Conveniently pontificate interoperable.</li>
    </ul>
    <a href="#" class="more-link fst-normal ms-3">Learn More <i class="icon-line-arrow-right"></i></a>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-6">
    <div class="card border-0 h-100 shadow-sm">
    <h3 class="card-header font-primary p-4 color2">General Learning</h3>
    <div class="card-body p-4">
    Conveniently benchmark flexible human capital for optimal deliverables. Collaboratively fabricate market-driven.
    <ul class="ps-3 mt-4 mb-0">
    <li class="mb-3">Globally whiteboard visionary bandwidth and interactive catalysts for change. Globally repurpose.</li>
    <li class="mb-3">Professionally revolutionize standardized infomediaries via business methods of empowerment. Collaboratively cultivate.</li>
    <li class="mb-3">Distinctively parallel task functional internal or "organic" sources and front-end best.</li>
    <li class="mb-3">Rapidiously customize worldwide channels via accurate e-tailers. Monotonectally re-engineer premium scenarios.</li>
    </ul>
    <a href="#" class="more-link fst-normal ms-3">Learn More <i class="icon-line-arrow-right"></i></a>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="tab-pane fade" id="age-kindergarten" role="tabpanel" aria-labelledby="age-kindergarten-tab">
    <div class="row col-mb-30">
    <div class="col-lg-4 col-md-6">
    <div class="card border-0 h-100 shadow-sm">
    <h3 class="card-header font-primary p-4 color3">ABC's of Learning</h3>
    <div class="card-body p-4">
    Our curriculum is specifically designed to assist your toddler in developing the essentials for early.
    <ul class="ps-3 mt-4 mb-0">
    <li class="mb-3">Globally whiteboard visionary bandwidth and interactive catalysts for change. Globally repurpose.</li>
    <li class="mb-3">Professionally revolutionize standardized infomediaries via business methods of empowerment. Collaboratively cultivate.</li>
    <li class="mb-3">Distinctively parallel task functional internal or "organic" sources and front-end best.</li>
    <li class="mb-3">Rapidiously customize worldwide channels via accurate e-tailers. Monotonectally re-engineer premium scenarios.</li>
    <li class="mb-3">Synergistically disseminate plug-and-play manufactured products without alternative e-tailers. Conveniently pontificate interoperable.</li>
    </ul>
    <a href="#" class="more-link fst-normal ms-3">Learn More <i class="icon-line-arrow-right"></i></a>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-6">
    <div class="card border-0 h-100 shadow-sm">
    <h3 class="card-header font-primary p-4 color3">Brain Development</h3>
    <div class="card-body p-4">
    Conveniently benchmark flexible human capital for optimal deliverables. Collaboratively fabricate market-driven.
    <ul class="ps-3 mt-4 mb-0">
    <li class="mb-3">Globally whiteboard visionary bandwidth and interactive catalysts for change. Globally repurpose.</li>
    <li class="mb-3">Professionally revolutionize standardized infomediaries via business methods of empowerment. Collaboratively cultivate.</li>
    <li class="mb-3">Distinctively parallel task functional internal or "organic" sources and front-end best.</li>
    <li class="mb-3">Rapidiously customize worldwide channels via accurate e-tailers. Monotonectally re-engineer premium scenarios.</li>
    <li class="mb-3">Synergistically disseminate plug-and-play manufactured products without alternative e-tailers. Conveniently pontificate interoperable.</li>
    </ul>
    <a href="#" class="more-link fst-normal ms-3">Learn More <i class="icon-line-arrow-right"></i></a>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-6">
    <div class="card border-0 h-100 shadow-sm">
    <h3 class="card-header font-primary p-4 color3">General Learning</h3>
    <div class="card-body p-4">
    Conveniently benchmark flexible human capital for optimal deliverables. Collaboratively fabricate market-driven.
    <ul class="ps-3 mt-4 mb-0">
    <li class="mb-3">Globally whiteboard visionary bandwidth and interactive catalysts for change. Globally repurpose.</li>
    <li class="mb-3">Professionally revolutionize standardized infomediaries via business methods of empowerment. Collaboratively cultivate.</li>
    <li class="mb-3">Distinctively parallel task functional internal or "organic" sources and front-end best.</li>
    <li class="mb-3">Rapidiously customize worldwide channels via accurate e-tailers. Monotonectally re-engineer premium scenarios.</li>
    </ul>
    <a href="#" class="more-link fst-normal ms-3">Learn More <i class="icon-line-arrow-right"></i></a>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="tab-pane fade" id="age-prekindergarten" role="tabpanel" aria-labelledby="age-prekindergarten-tab">
    <div class="row col-mb-30">
    <div class="col-lg-4 col-md-6">
    <div class="card border-0 h-100 shadow-sm">
    <h3 class="card-header font-primary p-4 color4">ABC's of Learning</h3>
    <div class="card-body p-4">
    Our curriculum is specifically designed to assist your toddler in developing the essentials for early.
    <ul class="ps-3 mt-4 mb-0">
    <li class="mb-3">Globally whiteboard visionary bandwidth and interactive catalysts for change. Globally repurpose.</li>
    <li class="mb-3">Professionally revolutionize standardized infomediaries via business methods of empowerment. Collaboratively cultivate.</li>
    <li class="mb-3">Distinctively parallel task functional internal or "organic" sources and front-end best.</li>
    <li class="mb-3">Rapidiously customize worldwide channels via accurate e-tailers. Monotonectally re-engineer premium scenarios.</li>
    <li class="mb-3">Synergistically disseminate plug-and-play manufactured products without alternative e-tailers. Conveniently pontificate interoperable.</li>
    </ul>
    <a href="#" class="more-link fst-normal ms-3">Learn More <i class="icon-line-arrow-right"></i></a>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-6">
    <div class="card border-0 h-100 shadow-sm">
    <h3 class="card-header font-primary p-4 color4">Brain Development</h3>
    <div class="card-body p-4">
    Conveniently benchmark flexible human capital for optimal deliverables. Collaboratively fabricate market-driven.
    <ul class="ps-3 mt-4 mb-0">
    <li class="mb-3">Globally whiteboard visionary bandwidth and interactive catalysts for change. Globally repurpose.</li>
    <li class="mb-3">Professionally revolutionize standardized infomediaries via business methods of empowerment. Collaboratively cultivate.</li>
    <li class="mb-3">Distinctively parallel task functional internal or "organic" sources and front-end best.</li>
    <li class="mb-3">Rapidiously customize worldwide channels via accurate e-tailers. Monotonectally re-engineer premium scenarios.</li>
    <li class="mb-3">Synergistically disseminate plug-and-play manufactured products without alternative e-tailers. Conveniently pontificate interoperable.</li>
    </ul>
    <a href="#" class="more-link fst-normal ms-3">Learn More <i class="icon-line-arrow-right"></i></a>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-6">
    <div class="card border-0 h-100 shadow-sm">
    <h3 class="card-header font-primary p-4 color4">General Learning</h3>
    <div class="card-body p-4">
    Conveniently benchmark flexible human capital for optimal deliverables. Collaboratively fabricate market-driven.
    <ul class="ps-3 mt-4 mb-0">
    <li class="mb-3">Globally whiteboard visionary bandwidth and interactive catalysts for change. Globally repurpose.</li>
    <li class="mb-3">Professionally revolutionize standardized infomediaries via business methods of empowerment. Collaboratively cultivate.</li>
    <li class="mb-3">Distinctively parallel task functional internal or "organic" sources and front-end best.</li>
    <li class="mb-3">Rapidiously customize worldwide channels via accurate e-tailers. Monotonectally re-engineer premium scenarios.</li>
    </ul>
    <a href="#" class="more-link fst-normal ms-3">Learn More <i class="icon-line-arrow-right"></i></a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="shape-divider" data-shape="wave-5" data-position="bottom" data-height="60" id="shape-divider-2825"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1280 140" preserveAspectRatio="none" class="op-ts op-1"><path class="shape-divider-fill" d="M0 0v100c20 17.3 40 29.51 80 29.51 51.79 0 74.69-48.57 151.75-48.57 73.72 0 91 54.88 191.56 54.88C543.95 135.8 554 14 665.69 14c109.46 0 98.85 87 188.2 87 70.37 0 69.81-33.73 115.6-33.73 55.85 0 62 39.62 115.6 39.62 58.08 0 57.52-46.59 115-46.59 39.8 0 60 22.48 79.89 39.69V0z"></path></svg></div>
    </div>
    <div class="position-relative d-none d-sm-block">
    <img src="demos/kindergarten/images/fish1.png" alt="Fish" class="background-img float-anim">
    </div>
    <div class="container z-2">
    <div class="row align-items-center justify-content-center col-mb-30">
    <div class="col-xl">
    <h6 class="mb-4 ls2 text-uppercase fw-normal">Testimonials</h6>
    <h1 class="display-3 fw-bolder">Just watch what <span class="color">Parents</span> say.</h1>
    <p class="mb-5 fw-light">Rapidiously conceptualize inexpensive value through functionalized markets. Enthusiastically integrate distinctive web services vis-a-vis end-to-end ROI. Assertively fashion best-of-breed products.</p>
    <a href="#" class="btn btn-outline-dark rounded py-2 px-3">View Full Testimonials</a>
    </div>
    <div class="col-auto">
    <img src="demos/kindergarten/images/kindergarten-tv.svg" alt="Image TV" class="kindergarder-mockup-tv">
    <div class="kindergarten-carousel-wrap">
    <div id="kindergarten-carousel-img" class="carousel kindergarten-tv-carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
    <div class="carousel-item">
    <img class="d-block position-relative w-100" src="demos/kindergarten/images/carousel/1.jpg" alt="First slide">
    </div>
    <div class="carousel-item active">
    <img class="d-block position-relative w-100" src="demos/kindergarten/images/carousel/2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
    <img class="d-block position-relative w-100" src="demos/kindergarten/images/carousel/3.jpg" alt="Third slide">
    </div>
    </div>
    </div>
    <div id="kindergarten-carousel-text" class="carousel kindergarten-tv-carousel slide" data-bs-ride="carousel">
     <div class="carousel-inner h-100">
    <div class="carousel-item h-100">
    <div class="carousel-caption">
    <h3 class="text-white mb-4 h2">Elon Gated</h3>
    <a href="https://www.youtube.com/watch?v=P3Huse9K6Xs" data-lightbox="iframe"><i class="icon-line-play ps-1 bg-white rounded-circle text-dark position-relative icon-stacked h4 m-0" style="top: 4px"></i></a>
    </div>
    </div>
    <div class="carousel-item h-100 active">
    <div class="carousel-caption">
    <h3 class="text-white mb-4 h2">Quiche Hollandaise</h3>
    <a href="https://www.youtube.com/watch?v=P3Huse9K6Xs" data-lightbox="iframe"><i class="icon-line-play ps-1 bg-white rounded-circle text-dark position-relative icon-stacked h4 m-0" style="top: 4px"></i></a>
    </div>
    </div>
    <div class="carousel-item h-100">
    <div class="carousel-caption">
    <h3 class="text-white mb-4 h2">Eleanor Fant</h3>
    <a href="https://www.youtube.com/watch?v=P3Huse9K6Xs" data-lightbox="iframe"><i class="icon-line-play ps-1 bg-white rounded-circle text-dark position-relative icon-stacked h4 m-0" style="top: 4px"></i></a>
    </div>
    </div>
    </div>
    <a class="carousel-control-prev op-09 h-op-1" role="button">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next op-09 h-op-1" role="button">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
    </a>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="section" style="padding: 100px 0; background-color: #ECF4F1">
    <div class="shape-divider" data-shape="wave-5" data-height="50" id="shape-divider-1091"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1280 140" preserveAspectRatio="none" class="op-ts op-1"><path class="shape-divider-fill" d="M0 0v100c20 17.3 40 29.51 80 29.51 51.79 0 74.69-48.57 151.75-48.57 73.72 0 91 54.88 191.56 54.88C543.95 135.8 554 14 665.69 14c109.46 0 98.85 87 188.2 87 70.37 0 69.81-33.73 115.6-33.73 55.85 0 62 39.62 115.6 39.62 58.08 0 57.52-46.59 115-46.59 39.8 0 60 22.48 79.89 39.69V0z"></path></svg></div>
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: url('demos/kindergarten/images/hero-bg-icons.svg') center center / cover; opacity: 0.04"></div>
    <div class="container z-3">
    <h2 class="color text-center h1 fw-bold mb-5 pb-2">Latest News:</h2>
    <div class="row gutter-50">
    <div class="col-lg-4">
    
    <div class="posts-md">
    <div class="entry">
    <div class="entry-image position-relative mb-md-4">
    <a href="#">
    <img src="demos/kindergarten/images/news/1.jpg" alt="Image 3" class="rounded-5">
    <div class="shape-divider" data-shape="wave-5" data-position="bottom" data-width="110" data-height="30" data-fill="#ECF4F1" id="shape-divider-8101"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1280 140" preserveAspectRatio="none" class="op-ts op-1"><path class="shape-divider-fill" d="M0 0v100c20 17.3 40 29.51 80 29.51 51.79 0 74.69-48.57 151.75-48.57 73.72 0 91 54.88 191.56 54.88C543.95 135.8 554 14 665.69 14c109.46 0 98.85 87 188.2 87 70.37 0 69.81-33.73 115.6-33.73 55.85 0 62 39.62 115.6 39.62 58.08 0 57.52-46.59 115-46.59 39.8 0 60 22.48 79.89 39.69V0z"></path></svg></div>
    </a>
    <div class="entry-date">Mar<span>27</span></div>
    </div>
    <div class="entry-title nott">
    <h3><a class="ls0 h3" href="#">Teaching Reading With Online Families</a></h3>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-4">
    
    <div class="posts-md">
    <div class="entry">
    <div class="entry-image position-relative mb-md-4">
    <a href="#">
    <img src="demos/kindergarten/images/news/2.jpg" alt="Image 3" class="rounded-5">
    <div class="shape-divider" data-shape="wave-5" data-position="bottom" data-width="110" data-height="30" data-fill="#ECF4F1" id="shape-divider-7901"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1280 140" preserveAspectRatio="none" class="op-ts op-1"><path class="shape-divider-fill" d="M0 0v100c20 17.3 40 29.51 80 29.51 51.79 0 74.69-48.57 151.75-48.57 73.72 0 91 54.88 191.56 54.88C543.95 135.8 554 14 665.69 14c109.46 0 98.85 87 188.2 87 70.37 0 69.81-33.73 115.6-33.73 55.85 0 62 39.62 115.6 39.62 58.08 0 57.52-46.59 115-46.59 39.8 0 60 22.48 79.89 39.69V0z"></path></svg></div>
    </a>
    <div class="entry-date">Apr<span>03</span></div>
    </div>
    <div class="entry-title nott">
    <h3><a class="ls0 h3" href="#">Mother’s Day and Father’s Day Gift Ideas</a></h3>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-4">
    
    <div class="posts-md">
    <div class="entry">
    <div class="entry-image position-relative mb-md-4">
    <a href="#">
    <img src="demos/kindergarten/images/news/3.jpg" alt="Image 3" class="rounded-5">
    <div class="shape-divider" data-shape="wave-5" data-position="bottom" data-width="110" data-height="30" data-fill="#ECF4F1" id="shape-divider-2219"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1280 140" preserveAspectRatio="none" class="op-ts op-1"><path class="shape-divider-fill" d="M0 0v100c20 17.3 40 29.51 80 29.51 51.79 0 74.69-48.57 151.75-48.57 73.72 0 91 54.88 191.56 54.88C543.95 135.8 554 14 665.69 14c109.46 0 98.85 87 188.2 87 70.37 0 69.81-33.73 115.6-33.73 55.85 0 62 39.62 115.6 39.62 58.08 0 57.52-46.59 115-46.59 39.8 0 60 22.48 79.89 39.69V0z"></path></svg></div>
    </a>
    <div class="entry-date">Jun<span>11</span></div>
    </div>
    <div class="entry-title nott">
    <h3><a class="ls0 h3" href="#">Developing Fine Motor Skills With Crafts</a></h3>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="shape-divider" data-shape="wave-5" data-position="bottom" data-height="60" id="shape-divider-6723"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1280 140" preserveAspectRatio="none" class="op-ts op-1"><path class="shape-divider-fill" d="M0 0v100c20 17.3 40 29.51 80 29.51 51.79 0 74.69-48.57 151.75-48.57 73.72 0 91 54.88 191.56 54.88C543.95 135.8 554 14 665.69 14c109.46 0 98.85 87 188.2 87 70.37 0 69.81-33.73 115.6-33.73 55.85 0 62 39.62 115.6 39.62 58.08 0 57.52-46.59 115-46.59 39.8 0 60 22.48 79.89 39.69V0z"></path></svg></div>
    </div>
    <div class="section bg-transparent">
    <div class="container">
    <div class="row gutter-50">
    <div class="col-lg-6">
    <img src="demos/kindergarten/images/contact.svg" alt="Image">
    <div class="row justify-content-between mt-5">
    <div class="col d-flex">
    <i class="h6 icon-line-map-pin"></i>:
    <div class="fw-medium ms-3 font-primary h5 lh-sm">
    <a class="text-dark h-text-color" href="https://map.google.com" target="_blank">
    795 Folsom Ave,<br>Suite 600<br>
    San Francisco, <br>CA 94107<br>
    </a>
    <div class="mt-3">
    <a href="https://facebook.com/semicolonweb" class="social-icon si-small border-default rounded-circle si-facebook" title="Facebook" target="_blank">
    <i class="icon-facebook"></i>
    <i class="icon-facebook"></i>
    </a>
    <a href="https://instagram.com/semicolonweb" class="social-icon si-small border-default rounded-circle si-instagram" title="instagram" target="_blank">
    <i class="icon-instagram"></i>
    <i class="icon-instagram"></i>
    </a>
    <a href="https://youtube.com/__semicolonweb" class="social-icon si-small border-default rounded-circle si-google" title="google" target="_blank">
    <i class="icon-google"></i>
    <i class="icon-google"></i>
    </a>
    </div>
    </div>
    </div>
    <div class="col col-lg-auto">
    <div class="mb-2 font-primary h5"><i class="h6 icon-line-phone-call me-2">:</i> <a class="text-dark h-text-color" href="tel:08547632521">+(0) 8547 632521</a></div>
    <div class="mb-2 font-primary h5"><i class="h6 icon-whatsapp me-2">:</i> <a class="text-dark h-text-color" href="https://wa.me/01147521433">+(0) 11 4752 1433</a></div>
    <div class="mb-2 font-primary h5"><i class="h6 icon-line-mail me-2">:</i> <a class="text-dark h-text-color" href="mailto:noreply@canvas.com">info@canvas.com</a></div>
    <div class="font-primary h5"><i class="h6 icon-line-link me-2">:</i> <a class="text-dark h-text-color" href="#">canvaskindergarten.com</a></div>
    </div>
    </div>
    </div>
    <div class="col-lg-6">
    <h2 class="color display-4 mb-3 fw-bold">Come and visit us.</h2>
    <p>Tell us a little bit about your family to get started. Come learn about the Scole experience!</p>
    <div class="form-widget">
    <div class="form-result"></div>
    <form class="mb-0" id="template-contactform" name="template-contactform" action="include/form.php" method="post" novalidate="novalidate">
    <div class="form-process">
    <div class="css3-spinner">
    <div class="css3-spinner-scaler"></div>
    </div>
    </div>
    <div class="row">
    <div class="col-md-6 form-group mb-4">
    <input type="text" id="kindergarten-contactform-first-name" name="kindergarten-contactform-first-name" value="" placeholder="First Name" class="form-control required">
    </div>
    <div class="col-md-6 form-group mb-4">
    <input type="text" id="kindergarten-contactform-last-name" name="kindergarten-contactform-last-name" value="" placeholder="Last Name" class="form-control required">
    </div>
    <div class="w-100"></div>
    <div class="col-12 form-group mb-4">
    <input type="email" id="kindergarten-contactform-email" name="kindergarten-contactform-email" value="" placeholder="Email" class="required email form-control">
    </div>
    <div class="w-100"></div>
    <div class="col-md-6 form-group mb-4">
    <input type="text" id="kindergarten-contactform-phone" name="kindergarten-contactform-phone" value="" placeholder="Phone" class="form-control">
    </div>
    <div class="col-md-6 form-group mb-4">
    <select id="kindergarten-contactform-subject" name="kindergarten-contactform-subject" class="form-select">
    <option value="" disabled="" selected="">Select Program</option>
    <option value="Toddler">Toddler</option>
    <option value="Pre-School">Pre-School</option>
    <option value="Kindergarten">Kindergarten</option>
    <option value="Pre-Kindergarten">Pre-Kindergarten</option>
    <option value="Others">Others</option>
    </select>
    </div>
    <div class="w-100"></div>
    <div class="col-md-6 form-group mb-4">
    <input type="text" class="form-control component-flatpickr flatpickr-input" name="kindergarten-contactform-date" placeholder="Date - Time" value="" data-time="true" data-dateformat="d/m/yy - H:i" readonly="readonly">
    </div>
    <div class="col-md-6 form-group mb-4">
    <input type="text" id="kindergarten-contactform-location" name="kindergarten-contactform-location" value="" placeholder="Location" class="required form-control">
    </div>
    <div class="w-100"></div>
    <div class="col-12 form-group mb-4">
    <textarea class="required form-control py-2" id="kindergarten-contactform-message" placeholder="Write your Message" name="kindergarten-contactform-message" rows="5" cols="30"></textarea>
    </div>
    <div class="col-12 form-group d-none">
    <input type="text" id="kindergarten-contactform-botcheck" name="kindergarten-contactform-botcheck" value="" class="form-control">
    </div>
    <div class="col-12 form-group">
    <button class="btn text-white bg-color rounded-1 py-3 px-5 fw-medium float-end" type="submit" id="kindergarten-contactform-submit" name="kindergarten-contactform-submit" value="submit">Send Message <i class="icon-line-arrow-right position-relative" style="top: 2px"></i></button>
    </div>
    </div>
    <input type="hidden" name="prefix" value="kindergarten-contactform-">
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="container mw-md mb-3 bg-primary" style="background: url('demos/kindergarten/images/subscribe-bg.svg') repeat center center / cover; padding: 80px; border-radius: 2.6rem">
    <div class="text-center dark">
    <h3 class="mb-4 h1 fw-bold">Sign up for Updates &amp; Newsletters.</h3>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br>Quo aliquid earum tenetur corrupti ea ducimus.</p>
    </div>
    <div class="widget subscribe-widget mw-xs mx-auto" data-loader="button">
    <div class="widget-subscribe-form-result"></div>
    <form id="widget-subscribe-form" action="include/subscribe.php" method="post" class="mb-0 input-group" novalidate="novalidate">
    <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control form-control-lg not-dark required email ps-4 border-bottom-0" placeholder="Your Email Address">
    <button class="btn btn-dark" type="submit">Subscribe Now</button>
    </form>
    </div>
    </div>
    </div>
    </section>
    
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
    Copyrights © 2014 All Rights Reserved by Canvas Inc.
    </div>
    </footer>
    </div>
</section>
@endsection