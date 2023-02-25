@extends('layouts.master')
@push('css')
    <link rel="stylesheet" href="{{ url('https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.min.css" rel="stylesheet">
@endpush
@section('title')
    <title>Form Kompetensi Keahlian</title>
@endsection
@section('content')
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <div class="row">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="col-lg-6">
                        <form class="row" action="{{ route('kompetensi.store') }}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="col-12 form-group">
                                <label for="sel1">Nama Keahlian/Jurusan:</label>
                                <select class="form-control" name="id_keahlian" id="id_keahlian">
                                    <option><label>-- Pilih Salah Satu --</label></option>
                                    <option value="1">Kriya Kreatif logam dan Perhiasan (DPKL)</option>
                                    <option value="2">Teknik Elektronika Industri (TEI)</option>
                                    <option value="3">Teknik Komputer dan Jaringan (TKJ)</option>
                                    <option value="4">Desain Pemodelan dan Informasi Bangunan (TGB)</option>
                                    <option value="5">Teknik dan Bisnis Sepeda Motor (TSM)</option>
                                    <option value="6">Perbankan Syariah (PBS)</option>
                                    <option value="7">Teknik Instalasi Tenaga Listrik (TITL)</option>
                                    <option value="8">Teknik Kendaraan Ringan Otomotif (TKRO)</option>
                                </select>
                            </div>
                            <div class="col-12 form-group">
                                <label>Tentang Keahlian/Jurusan:</label>
                                <input type="text" name="isi" id="isi" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label class="form-label" for="customFile">Upload Foto:</label>
                                <input type="file" class="form-control" name="foto" id="foto"/>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="row">
                    <h6 class="text-center">Daftar Kompetensi Keahlian/Jurusan</h6>
                    <div>
                        <table class="table table-striped" id="myTable">
                            <thead>
                            <tr>
                                <th>Nama Keahlian/Jurusan</th>
                                <th>Tentang</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('js')
    <script src="{{ url('https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js"></script>
    <script>
        $(document).ready(function () {
            var table = $('#myTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('kompetensi.data') }}",
                columns: [{
                    data: 'id_keahlian',
                    name: 'id_keahlian'
                    },
                    {
                        data: 'isi',
                        name: 'isi'
                    },
                    {
                        data: 'foto',
                        name: 'foto'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });
            var del = function (id) {
                Swal.fire({
                    title: 'Apakah anda yakin?',
                    text: "Data yang sudah terhapus tidak bisa dikembalikan lagi!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "{{ route('kompetensi.index') }}/" + id,
                            method: "DELETE",
                            success: function (response) {
                                table.ajax.reload();
                                Swal.fire(
                                    'Terhapus!',
                                    'File sudah dihapus',
                                    'sukses'
                                )
                            },
                            failure: function (response) {
                                swal(
                                    "Internal Error",
                                    "Oops, your note was not saved.", // had a missing comma
                                    "error"
                                )
                            }
                        });
                    }
                })
            };
            $('body').on('click', '.hapus-data', function () {
                del($(this).attr('data-id'));
            });
        });
    </script>
@endpush
