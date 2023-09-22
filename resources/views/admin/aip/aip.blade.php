@extends('layouts.admin')
@section('content')              
    <div class="row">
        <div class="col-12">
        <a href="#" class="btn btn-info mb-2">Download</a>
            <div class="card bg-info">
                <div class="card-header">
                    Informasi Pembelajaran
                </div>
                <div class="card-body small">
                    <div class="table-responsive">
                        @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                        @endif
                        <table class="table table-bordered table-striped mb-0" id="table1">
                            <thead>
                                <tr>
                                <th style="min-width: 70px;">No</th>
                                    <th style="min-width: 150px;">Tanggal Mulai</th>
                                    <th style="min-width: 150px;">Tanggal Selesai</th>
                                    <th style="min-width: 150px;">Kode</th>
                                    <th style="min-width: 150px;">Judul</th>
                                    <th style="min-width: 200px;">Jenis Permintaan Diklat</th>
                                    <th style="min-width: 200px;">Jenis Pelaksanaan Diklat</th>
                                    <th style="min-width: 150px;">Angkatan</th>
                                    <th style="min-width: 150px;">Instruktur</th>
                                    <th style="min-width: 150px;">Rencana Peseta</th>
                                    <th style="min-width: 150px;">Realisasi Peserta</th>
                                    <th style="min-width: 150px;">Kelas</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($arp->count() > 0)
                                    @foreach($arp as $rs)
                               
                                        <tr>
                                            <td class="align-middle text-center">{{ $loop->iteration }}</td>
                                            <td class="align-middle">{{ date_format(date_create($rs->tanggal_mulai), 'd-m-Y') }}</td>
                                            <td class="align-middle">{{ date_format(date_create($rs->tanggal_selesai), 'd-m-Y') }}</td>
                                            <td class="align-middle">{{ $rs->kode }}</td>
                                            <td class="align-middle">{{ $rs->judul }}</td>
                                            <td class="align-middle">{{ $rs->jenis_permintaan_diklat }}</td>
                                            <td class="align-middle">{{ $rs->jenis_pelaksanaan_diklat }}</td>
                                            <td class="align-middle text-center">{{ $rs->angkatan }}</td>
                                            <td class="align-middle">{{ $rs->instruktur }}</td>
                                            <td class="align-middle">{{ $rs->rencana_peserta }}</td>
                                            <td class="align-middle">{{ $rs->realisasi_peserta }}</td>
                                            <td class="align-middle">{{ $rs->kelas }}</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td class="text-center" colspan="5"> Data Tidak Ditemukan</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

<style>
        .table-responsive {
            overflow-x: auto;
        }

        .table {
            width: 100%;
            max-width: none;
        }

        .table th,
        .table td {
            white-space: nowrap;
        }
    </style>

    <script src="{{ asset('assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

@endsection