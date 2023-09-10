<!-- @extends('layouts.admin')
@section('content')
                    
    <div class="row">
        <div class="col-12">
        <a href="{{ route('Arp.create') }}" class="btn btn-info mb-2">Tambah Data</a>
            <div class="card">
                <div class="card-header">
                    Rencana dan Realisasi Pembelajaran
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                        @endif
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Selesai</th>
                                    <th>Kode</th>
                                    <th>Judul</th>
                                    <th>Jenis Permintaan Diklat</th>
                                    <th>Jenis Pelaksanaan Diklat</th>
                                    <th>Angkatan</th>
                                    <th>Instruktur</th>
                                    <th>Rencana Peseta</th>
                                    <th>Realisasi Peserta</th>
                                    <th>Kelas</th>
                                    <th>Wisma</th>
                                    <th>Persiapan</th>
                                    <th>Pelaksanaan</th>
                                    <th>Pasca</th>
                                    <th>Realisasi Biaya</th>
                                    <th>Aksi</th>
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
                                            <td class="align-middle">{{ $rs->rencana_peserta }}</td>
                                            <td class="align-middle">{{ $rs->realisasi_peserta }}</td>
                                            <td class="align-middle">{{ $rs->kelas }}</td>
                                            <td class="align-middle">{{ $rs->wisma }}</td>
                                            <td class="align-middle">{{ $rs->persiapan }}</td>
                                            <td class="align-middle">{{ $rs->pelaksanaan }}</td>
                                            <td class="align-middle">{{ $rs->pasca }}</td>
                                            <td class="align-middle">{{ $rs->realisasi_biaya }}</td>
                                            <td class="align-middle">
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="#" type="button" class="btn btn-secondary">Details</a>
                                                    <a href="#" type="button" class="btn btn-warning">Edit</a>
                                                    <button class="btn btn-danger m-0">Delete</button>
                                                </div>
                                            </td>
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

@endsection -->