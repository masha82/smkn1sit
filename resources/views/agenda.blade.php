@extends('layouts.master')
@section('title')
    <title>Galeri</title>
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="container topmargin bottommargin-lg">
            <div class="mx-auto" style="max-width: 700px">
                <h2 class="mb-2 nott center ls0 gradient-text gradient-horizon">AGENDA SMKN 1 SITUBONDO</h2>
            </div>
        </div>
    </div>
</div>
<div class="row posts-md col-mb-30">
    <div class="masonry-thumbs grid-container grid-4 has-init-isotope" data-big="3" data-lightbox="gallery"
         style="position: relative; height: 295.664px;">
    </div>
</div>
@endsection