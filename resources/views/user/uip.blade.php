@extends ('layouts.appUser')
@section('content')
<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Informasi Pembelajaran
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                        @endif
                        <table class="table table-striped table-bordered mb-0" id="table1">
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
                                    <th style="min-width: 150px;">Kelas</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($arp->count() > 0)
                                    @foreach($arp as $rs)
                               
                                        <tr>
                                            <td class="align-middle">{{ $loop->iteration }}</td>
                                            <td class="align-middle">{{ $rs->tanggal_mulai }}</td>
                                            <td class="align-middle">{{ $rs->tanggal_selesai }}</td>
                                            <td class="align-middle">{{ $rs->kode }}</td>
                                            <td class="align-middle">{{ $rs->judul }}</td>
                                            <td class="align-middle">{{ $rs->jenis_permintaan_diklat }}</td>
                                            <td class="align-middle">{{ $rs->jenis_pelaksanaan_diklat }}</td>
                                            <td class="align-middle">{{ $rs->angkatan }}</td>
                                            <td class="align-middle">{{ $rs->instruktur }}</td>
                                            <td class="align-middle">{{ $rs->users->count() }}</td>
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