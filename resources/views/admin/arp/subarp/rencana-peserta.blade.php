@extends('layouts.admin')
@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Rencana Peserta</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('arp.index')}}">Kembali</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Rencana Peserta</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- <a href="#" class="btn btn-info mb-3">Tambah Data</a> -->
    </div>
    <section class="section">
        <div class="card">
            
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="table1">
                        <thead>
                            <tr>
                                <th style="min-width: 150px;">No</th>
                                <th style="min-width: 150px;">Nip</th>
                                <th style="min-width: 150px;">Nama</th>
                                <th style="min-width: 150px;">Tanggal Mulai</th>
                                <th style="min-width: 150px;">Tanggal Selesai</th>
                                <th style="min-width: 150px;">Kode</th>
                                <th style="min-width: 150px;">Judul</th>
                                <th style="min-width: 150px;">Angkatan</th>
                                <th style="min-width: 150px;">Konfirmasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($peserta as $user)
                            <tr>
                                <td class="align-middle">{{ $loop->iteration }}</td>
                                <td class="align-middle">{{ $user->nip }}</td>
                                <td class="align-middle">{{ $user->name }}</td>
                                <td class="align-middle">{{ $arp->tanggal_mulai }}</td>
                                <td class="align-middle">{{ $arp->tanggal_selesai }}</td>
                                <td class="align-middle">{{ $arp->kode }}</td>
                                <td class="align-middle">{{ $arp->judul }}</td>
                                <td class="align-middle text-center">{{ $arp->angkatan }}</td>
                                <td class="align-middle text-center">
                                    @if(isset($user->udaftarHadir->konfirmasi))
                                    {{ $user->udaftarHadir->konfirmasi }}
                                    @else
                                    - <!-- apapun jika data konfirmasi tidak ada -->
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
<style>
        .table {
            width: 100%;
            max-width: none;
        }

        .table th {
            white-space: nowrap;
        }
    </style>
@endsection
