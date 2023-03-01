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
                {{-- @foreach ($jenis as $item) --}}
                    <li><a href="#">Jurusan</a></li>
                {{-- @endforeach --}}
            </ul>

            <div class="tab-container">
                {{-- @foreach ($jenis as $content) --}}
                    <div class="tab-content clearfix" id="#">
                        <div class="col-md-12">
                            <h4 id="faq-1"><strong>A.</strong> Keahlian</h4>
                            {{-- {!! $content->informasi !!} --}}
                            <div class="line"></div>
                            <h4 id="faq-1"><strong>B.</strong> Isi</h4>
                            {{-- {!! $content->keterangan !!} --}}
                            <div class="line"></div>
                            <h4 id="faq-1"><strong>C.</strong> Foto</h4>
                            {{-- {!! $content->keterangan !!} --}}
                            <div class="line"></div>
                        </div>
                    </div>
                {{-- @endforeach --}}
            </div>

        </div>
    </div>
    </div>
    </div>
@endsection