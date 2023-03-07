@extends('layouts.master')
@section('title')
    <title>Tentang OSIS</title>
@endsection
@section('content')
<section id="page-title">
    <div class="container clearfix">
        <div class="container clearfix">
            <div class="row col-mb-50">
                <div class="col-md-6 d-none d-md-flex align-self-end">
                    <img src="{{asset('foto_osis/'.$abtosis->foto)}}" alt="Image" class="mb-0">
                </div>
                <div class="col-md-6 mb-5 subscribe-widget">
                    <div class="heading-block">
                        <h3><strong>Tentang OSIS SMKN 1 Situbondo</strong></h3>
                    </div>
                    {!! $abtosis->tentang !!}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection