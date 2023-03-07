@extends('layouts.master')
@section('title')
    <title>Guru SMKN 1 Situbondo</title>
@endsection
@section('content') 
    <section id="page-title">
        <div class="container clearfix">
            <h1>Guru SMKN 1 Situbondo</h1>
        </div>
    </section>

    <div class="container clearfix">
        <div class="heading-block topmargin-sm center">
    </div>
    <div class="row">
            <div class="col-lg-3 col-md-6 bottommargin">
                <div class="team">
                    <div class="team-image">
                        <img src="{{asset('foto_guru/'.$guruschool->foto)}}" alt="Image" class="mb-0">
                    </div>
                <div class="team-desc team-desc-bg">
                    <div class="team-title">
                        <h4>   {!! $guruschool->nama_guru !!}</h4>
                        {{-- <span>{!! $guruschool->id_mapel !!}</span> --}}
                    </div>
                </div>
                </div>
            </div>
        <div class="col-lg-3 col-md-6 bottommargin">
            <div class="team">
                <div class="team-image">
                    <img src="images/team/2.jpg" alt="Foto Guru">
                </div>
            <div class="team-desc team-desc-bg">
                <div class="team-title">
                    <h4>Nama Guru</h4>
                    <span>Mapel</span>
                </div>
                </div>
            </div>
        </div>
    </div>
            
@endsection