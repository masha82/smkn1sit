@extends('layouts.master')
@push('css')
    <link rel="stylesheet" href="{{ url('https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.min.css" rel="stylesheet">
@endpush
@section('title')
    <title>Form Data Siswa</title>
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
                        <form class="row" action="{{ route('siswasekolah.store') }}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="col-12 form-group">
                                <label for="sel1">Tahun Ajaran:</label>
                                <select class="form-control" name="thn_ajaran" id="thn_ajaran">
                                    <option><label>-- Pilih Salah Satu --</label></option>
                                    <option value="1">2022 / 2023</option>
                                    <option value="2">2023 / 2024</option>
                                </select>
                            </div>
                            <div class="col-12 form-group">
                                <label for="sel1">Kelas:</label>
                                <select class="form-control" name="kelas" id="kelas">
                                    <option><label>-- Pilih Salah Satu --</label></option>
                                    <option value="1">Kelas X</option>
                                    <option value="2">Kelas XI</option>
                                    <option value="3">Kelas XII</option>
                                </select>
                            </div>
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
                                <label>Jumlah Siswa:</label>
                                <input type="text" name="jumlah" id="jumlah" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label >Link untuk download data:</label>
                                <input type="text" class="form-control" name="link" id="link"/>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="row">
                    <h6 class="text-center">Daftar Siswa</h6>
                    <div>
                        <table class="table table-striped" id="myTable">
                            <thead>
                            <tr>
                                <th>Tahun Ajaran</th>
                                <th>Kelas</th>
                                <th>Keahlian/Jurusan</th>
                                <th>Jumlah Siswa</th>
                                <th>Link Download</th>
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
                ajax: "{{ route('siswasekolah.data') }}",
                columns: [{
                    data: 'thn_ajaran',
                    name: 'thn_ajaran'
                    },
                    {
                        data: 'kelas',
                        name: 'kelas'
                    },
                    {
                        data: 'id_keahlian',
                        name: 'id_keahlian'
                    },
                    {
                        data: 'jumlah',
                        name: 'jumlah'
                    },
                    {
                        data: 'link',
                        name: 'link'
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
                            url: "{{ route('siswasekolah.index') }}/" + id,
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
