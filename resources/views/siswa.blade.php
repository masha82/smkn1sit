@extends('layouts.master')
@section('title')
    <title>Siswa</title>
@endsection
@section('content') 
    <section id="page-title">
        <div class="container clearfix">
            <h1>Siswa SMKN 1 Situbondo</h1>
        </div>
    </section>
            
    <div>
        <div class="container topmargin bottommargin-lg clearfix">
            <div class="row col-mb-50 mb-0">
                <div class="col-lg-8">
                    <table class="table table-striped" id="myTable">
                        <thead>
                        <tr>
                            <th>Tahun Pelajaran</th>
                            <th>Kelas</th>
                            <th>Jurusan</th>
                            <th>Jumlah</th>
                            <th>Link</th>
                            <th>Unduh</th>
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
@push('js')
    {{-- <script src="{{ url('https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js') }}"></script> --}}
    <script>
        $(document).ready(function () {
            var table = $('#myTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('siswasekolah.index') }}",
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
        });
    </script>
@endpush