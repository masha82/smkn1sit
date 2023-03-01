@extends('layouts.master')
@section('title')
    <title>Ekstrakurikuler</title>
@endsection
@section('content')
    <section id="page-title">
        <div class="container clearfix">
            <h1>Ekstrakurikuler SMKN 1 Situbondo</h1>
        </div>
    </section>
    <div class="container clearfix">
        <div class="row gutter-40 col-mb-80">
            <div class="postcontent col-lg-12">
                <div id="posts" class="row gutter-40 mb-0">
                    {{-- @foreach ($data as $item)
                        <div class="entry col-12 mt-0 mb-0">
                            <div class="grid-inner row g-0">
                                <div class="col-md-4">
                                    <a class="entry-image" href="#" data-lightbox="image"><img
                                            src="{{ asset('gambar/' . $item->file) }}"
                                            alt="Standard Post with Image"></a>
                                </div>
                                <div class="col-md-8 ps-md-4">
                                    <div class="entry-title title-sm">
                                        <h2><a href="{{route('news.show',$item->id)}}">{{ $item->judul }}</a></h2>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><i class="icon-calendar3"></i>
                                                {{ \Carbon\Carbon::parse($item->created_at)->isoFormat('dddd, D MMMM Y') }}
                                            </li>
                                            <li><i class="icon-user"></i> {{ $item->editor }}</li>
                                            <li><i class="icon-folder-open"></i> <a
                                                    href="#">{{ $item->kategori }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="entry-content">
                                        <a href="#" class="button button-border button-rounded">Baca selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                    @endforeach --}}
                </div>
                {{-- <div class="row mb-3">
                    <div class="col-12">
                        {{ $data->links('layouts.paginate') }}
                    </div>
                </div> --}}
    
@endsection