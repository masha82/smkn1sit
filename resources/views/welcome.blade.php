@extends('layouts.master')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/demos/kindergarten/kindergarten.css') }}" type="text/css"/>
    <style>
        .img-fit {
            display: block;
            max-width: 400px;
            max-height: 200px;
            width: auto;
            height: auto;
            object-fit: cover !important;
        }
    </style>
@endpush

@section('title')
    <title>SMKN 1 Situbondo</title>
@endsection

@section('content')
    <section id="slider" class="slider-element include-header"
             style="background-color: rgb(253, 227, 161);">
        <div class="position-absolute top-0 start-0 w-100 h-100"
             style="background: transparent url('demos/kindergarten/images/hero-bg-icons.svg') center center / cover; opacity: 0.04">
        </div>
        <div class="container">
            <div class="row align-items-center min-vh-100 pt-5 pb-4">
                <div class="col-lg-6">
                    <h6 class="mb-4 ls1 text-uppercase fw-normal">Bergabunglah Bersama Kami</h6>
                    <h1 class="display-3 fw-bolder">Solusi Tepat Menjawab Tantangan</h1>

                    <!--
            <a href="#" class="btn text-white bg-color rounded-1 py-3 px-5 fw-medium">Enroll Now  <i class="icon-line-arrow-right position-relative" style="top: 2px"></i></a>
            <a href="https://www.youtube.com/watch?v=P3Huse9K6Xs" class="btn bg-white rounded-1 px-5 py-3 fw-medium ms-2" data-lightbox="iframe"><i class="icon-play-circle me-1" style="position: relative; top: 1px; margin-right: 5px;"></i> Watch Video</a>
            -->
                </div>
                <div class="col-lg-6 align-self-end mt-5 mt-lg-0">
                    <br><br>
                    <img src="{{ asset('assets/demos/kindergarten/images/Bu-Susiana.png') }}" alt="Hero Bg">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container clearfix mt-5">
            <div class="row clearfix">
                <!-- Second Posts Area
                ============================================= -->
                <div class="col-lg-12">
                    <!-- Gallery Slider
                    ============================================= -->
                    <div class="clearfix">
                        <h4 style="background: #9ADCFF" class="ls1 text-uppercase fw-bold">
                            BERITA/INFORMASI</h4>
                        <!-- Flex Thumbs Slider
                        ============================================= -->
                        <div class="row col-mb-50 mb-0">
                            @foreach($berita as $post)
                                <div class="col-md-6 mt-0">
                                    <!-- Post Article -->
                                    <div class="posts-md">
                                        <div class="entry">
                                            <div class="entry-image">
                                                <a href="#"><img class="img-fit"
                                                                 src="{{asset('gambar_berita/'.$post->foto)}}"
                                                                 alt="Image 3"></a>
                                                <div class="entry-categories"><a href="#"
                                                                                 class="bg-lifestyle">berita</a>
                                                </div>
                                            </div>
                                            <div class="entry-title title-sm nott">
                                                <h3 class="mb-0"><a
                                                        href="#">{{$post->judul}}</a>
                                                </h3>
                                            </div>
                                            <div class="entry-meta">
                                                <ul>
                                                    <li><span>penyunting: </span> <a href="#">{{$post->editor}}</a>
                                                    </li>
                                                    <li><i class="icon-time"></i><a
                                                            href="#">{{$post->created_at}}</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{ $berita->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container clearfix mt-5 mb-4">
            <div class="row clearfix">
                <h4 style="background: #6ed19c" class="ls1 text-uppercase fw-bold">
                    PRESTASI</h4>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @php($no = 1)
                            <table class="table table-bordered">
                                <thead>
                                <th>Nomor</th>
                                <th>Nama Prestasi</th>
                                <th>Keterangan</th>
                                </thead>
                                <tbody>
                                @foreach($prestasi as $item)
                                    <tr>
                                        <td>{{$no}}</td>
                                        <td>{{$item->nama_prestasi}}</td>
                                        <td><img src="{{asset('gambar_prestasi/'.$item->foto)}}" style="height: 80px"
                                                 alt="">
                                        </td>
                                    </tr>
                                    @php($no++)
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            {{ $berita->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mb-4">
        <div class="container clearfix mt-5 mb-4">
            <div class="row clearfix">
                <!-- Second Posts Area
                ============================================= -->
                <div class="col-lg-12 mb-4">
                    <!-- Gallery Slider
                    ============================================= -->
                    <h4 style="background: #9ADCFF" class="ls1 text-uppercase fw-bold">
                        Video</h4>
                    <!-- Flex Thumbs Slider
                    ============================================= -->
                    <div class="row col-mb-50">
                        @foreach($videos as $video)
                            <div class="col-md-6 mt-0">
                                <!-- Post Article -->
                                <div class="posts-md">
                                    <div class="entry">
                                        <div class="entry-title title-sm nott">
                                            <h3 class="mb-0"><a
                                                    href="#">{{$video->keterangan}}</a>
                                            </h3>
                                        </div>
                                        <div class="entry-image img-fit">
                                            {!! $video->link !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{ $videos->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <footer id="footer" class="mt-4 border-0"
                style="background-image: linear-gradient(to top, #61BFDB, #E0F2C2, #FFF);">
            <div class="position-absolute top-0 start-0 w-100 h-100"
                 style="background: transparent url('demos/kindergarten/images/footer.png') center bottom / cover;">
            </div>

            <div class="col-auto text-center mt-4 text-smaller pb-3 font-primary">
                SMKN 1 Situbondo - Solusi Tepat Menjawab Tantangan 
            </div>
        </footer>
    </section>
@endsection
