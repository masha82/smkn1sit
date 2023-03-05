@extends('layouts.master')
@section('title')
    <title>Kompetensi Keahlian</title>
@endsection
@section('content')
    <section id="page-title">
        <div class="container clearfix">
            <h1>Kompetensi Keahlian/Jurusan di SMKN 1 Situbondo</h1>
        </div>
    </section>

    <div class="row">
        {{-- @if (!empty($layanan->file))
            <img src="{{ asset('layanan/' . $layanan->file) }}" alt="FAQs" class="px-5 mt-4">
        @endif --}}
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="container topmargin bottommargin-lg">
                <div class="tabs side-tabs responsive-tabs clearfix" id="tab-4">

                    <ul class="tab-nav clearfix">
                        @foreach ($keahlian as $item)
                            <li><a href="#tabs-{{ $item->id }}">{{ $item->nama_keahlian }}</a></li>
                        @endforeach
                    </ul>

                    <div class="tab-container">
                        @foreach ($kompetensi as $content)
                            <div class="tab-content clearfix" id="tabs-{{ $content->id_keahlian }}">
                                <div class="col-md-12">
                                    <h4 id="faq-1"><strong>A.</strong> Nama Keahlian</h4>
                                    {!! $content->keahlian->nama_keahlian !!}
                                    <div class="line"></div>
                                    <h4 id="faq-1"><strong>B.</strong> ISI</h4>
                                    {!! $content->isi !!}
                                    <div class="line"></div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
