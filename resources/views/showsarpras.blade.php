@extends('layouts.master')
@section('title')
    <title>Detail Sarpras</title>
@endsection
@section('content') 
    <section id="page-title">
        <div class="container clearfix">
            <h1>Detail Sarana Prasarana</h1><br>
            <h2>Nama Sarana Prasarana</h2>
        </div>
    </section>
    <div>
        <div class="container topmargin bottommargin-lg clearfix">
            <div class="row col-mb-50 mb-0">
                <div class="col-lg-8">
                    <table class="table table-striped" id="myTable">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Jenis Ruang</th>
                                <th>Panjang</th>
                                <th>Lebar</th>
                                <th>Kondisi</th>
                                <th>Foto</th>
                                <th>Sarana</th>
                                <th>Prasarana</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
@endsection