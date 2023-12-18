@extends('layouts.admin')
@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Realisasi Peserta</h3>
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
    <!-- success -->
    @if (Session::has('success'))
    <div class="alert alert-success alert-dismissible show fade" role="alert">
        {{ Session::get('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"aria-label="Close"></button>
    </div>
    @endif
    <!-- error -->
    @if (Session::has('error'))
    <div class="alert alert-danger alert-dismissible show fade" role="alert">
        {{ Session::get('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    <section class="section">
        <div class="card">    
            <div class="card-body">
                <div class="table-responsive">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $errorr)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{ route('store.realisasi') }}" method="POST">
                        @csrf
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
                                    <th style="min-width: 150px;">Verifikasi</th>
                                    <th style="min-width: 150px;">Kehadiran</th>
                                    <th style="min-width: 150px;">Tanggal Absensi</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                @foreach ($realisasiPeserta as $user)
                                <tr>
                                    <td class="align-middle text-center">{{ $loop->iteration }}</td>
                                    <td class="align-middle">
                                        {{ $user->nip }}
                                        <input type="hidden" name="nip[{{ $user->id }}]" value="{{ $user->nip }}">
                                    </td>
                                    <td class="align-middle">
                                        {{ $user->name }}
                                        <input type="hidden" name="name[{{ $user->id }}]" value="{{ $user->name }}">
                                    </td>
                                    <td class="align-middle">
                                        {{ date_format(date_create($arp->tanggal_mulai), 'd-m-Y') }}
                                        <input type="hidden" name="tanggal_mulai" value="{{ $arp->tanggal_mulai }}">
                                    </td>
                                    <td class="align-middle">
                                        {{ date_format(date_create($arp->tanggal_selesai), 'd-m-Y') }}
                                        <input type="hidden" name="tanggal_selesai" value="{{ $arp->tanggal_selesai }}">
                                    </td>
                                    <td class="align-middle">
                                        {{ $arp->kode }}
                                        <input type="hidden" name="kode" value="{{ $arp->kode }}">
                                    </td>
                                    <td class="align-middle">
                                        {{ $arp->judul }}
                                        <input type="hidden" name="judul" value="{{ $arp->judul }}">
                                    </td>
                                    <td class="align-middle text-center">
                                        {{ $arp->angkatan }}
                                        <input type="hidden" name="angkatan" value="{{ $arp->angkatan }}">
                                    </td>
                                    <td class="align-middle">
                                        <select name="verifikasi[{{ $user->id }}]" class="form-control" required>
                                            <option value="verif" {{ old('verifikasi') == 'verif' ? 'selected' : '' }}>Verif</option>
                                            <option value="tidak" {{ old('verifikasi') == 'tidak' ? 'selected' : '' }}>Tidak</option>
                                        </select>
                                    </td>
                                    <td class="align-middle text-center">
                                        {{ $user->absensiPeserta->absensi }}
                                        <input type="hidden" name="absensi[{{ $user->id }}]" value="{{ $user->absensiPeserta->absensi }}">
                                    </td>
                                    <!-- <td class="align-middle text-center">
                                        {{ date_format(date_create($user->absensiPeserta->tanggal_absensi), 'd-m-Y') }}
                                        <input type="hidden" name="tanggal_absensi[{{ $user->id }}]" value="{{ $user->absensiPeserta->absensi }}">
                                    </td> -->
                                    <td class="align-middle text-center">
                                        {{ date('Y-m-d', strtotime($user->absensiPeserta->tanggal_absensi)) }}
                                        <input type="hidden" name="tanggal_absensi[{{ $user->id }}]" value="{{ date('Y-m-d', strtotime($user->absensiPeserta->tanggal_absensi)) }}">
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>  
                        </table>
                        <button type="submit" class="btn btn-outline-primary">Save</button>
                        <!-- <button type="submit" id="success" class="btn btn-outline-success btn-lg btn-block">Save</button> ini contoh pakai BTN SUCCCES -->
                    </form>
                    {{-- <section class="section">
                        <div class="card">
                            <div class="card-header">
                                Daftar Hadir
                            </div>
                            <div class="card-body small">
                                <table class="table table-striped" id="table1">
                                    <thead>
                                        <tr>
                                            <th style="min-width: 50px;">No</th>
                                            <th style="min-width: 150px;">Nip</th>
                                            <th style="min-width: 150px;">Nama</th>
                                            <th style="min-width: 150px;">Judul</th>
                                            <th style="min-width: 150px;">Jenis Permintaan Diklat</th>
                                            <th style="min-width: 150px;">Tanggal Kehadiran</th>
                                            <th style="min-width: 150px;">Penggantian Kuota</th>
                                            <th style="min-width: 150px;">No HP</th>
                                            <th style="min-width: 150px;">Kehadiran</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($absensiPeserta->count() > 0)
                                        @foreach($absensiPeserta as $rs)
                                        <tr>
                                            <td class="align-middle">{{ $loop->iteration }}</td>
                                            <td class="align-middle">{{ $rs->nip }}</td>
                                            <td class="align-middle">{{ $rs->nama }}</td>
                                            <td class="align-middle">{{ $rs->judul }}</td>
                                            <td class="align-middle">{{ $rs->jenis_permintaan_diklat }}</td>
                                            <td class="align-middle">{{ $rs->tanggal_absensi }}</td>
                                            <td class="align-middle">{{ $rs->penggantian_kuota }}</td>
                                            <td class="align-middle">{{ $rs->no_hp }}</td>
                                            <td class="align-middle">{{ $rs->absensi }}</td>
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
                    </section> --}}
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
