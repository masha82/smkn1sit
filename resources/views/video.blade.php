@extends('layouts.master')
@section('title')
    <title>Video SMKN 1 Situbondo</title>
@endsection
@section('content')
    <section id="page-title">
        <div class="container clearfix">
            <h1>Video SMKN 1 Situbondo</h1>
        </div>
    </section>
    <video poster="images/videos/explore-poster.jpg" preload="auto" controls="" style="display: block; width: 100%;">
        <source src="images/videos/explore.webm" type="video/webm">
        <source src="images/videos/explore.mp4" type="video/mp4">
    </video>
@endsection
