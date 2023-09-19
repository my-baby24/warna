@php
use App\Models\Admin;
@endphp
@extends('layouts.admin')

@section('content')
<div class="page-heading">
    <section class="section">
        <div class="card">    
            <div class="card-body">
                <div class="table-responsive">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3>Kegiatan Realisasi Biaya untuk ARP ID: {{ $arp->id }}</h3>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{route('arp.index')}}">Kembali</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Realisasi Biaya</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th style="min-width: 150px;">N0</th>
                                <th style="min-width: 150px;">Kegiatan</th>
                                <th style="min-width: 150px;">PIC</th>
                                <th style="min-width: 150px;">Ceklist</th>
                                <th style="min-width: 150px;">Keterangan</th>
                                <th style="min-width: 150px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kegiatans as $kegiatan)
                            <tr>
                                <form action="{{ route('realisasi.update', [$arp->id, $kegiatan->id]) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <td class="align-middle">{{ $loop->iteration }}</td>
                                    <td class="align-middle">{{ $kegiatan->kegiatan }}</td>
                                    <td class="align-middle">{{ $kegiatan->pic }}</td>
                                    <td class="align-middle">
                                        <select name="ceklist" class="form-control" required>
                                            <option value="Selesai" {{ $kegiatan->ceklist == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                                            <option value="Belum Selesai" {{ $kegiatan->ceklist == 'Belum Selesai' ? 'selected' : '' }}>Belum Selesai</option>
                                        </select>
                                    </td>
                                    <td class="align-middle">
                                        <textarea class="form-control form-control" type="text" name="keterangan">{{ $kegiatan->keterangan }}</textarea>
                                    </td>
                                    <td class="align-middle"><button type="submit" class="btn btn-primary">Update</button></td>
                                </form>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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
                    <form action="{{ route('pelaksanaan.store', $arp->id) }}" method="POST">
                        @csrf
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th style="min-width: 150px;">N0</th>
                                    <th style="min-width: 150px;">Kegiatan</th>
                                    <th style="min-width: 150px;">PIC</th>
                                    <th style="min-width: 150px;">Ceklist</th>
                                    <th style="min-width: 150px;">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($kegiatans as $kegiatan)
                                <tr>
                                    <td class="align-middle">{{ $loop->iteration }}</td>
                                    <td class="align-middle">{{ $kegiatan->kegiatan }}</td>
                                    <td class="align-middle">{{ $kegiatan->pic }}</td>
                                    <td class="align-middle">{{ $kegiatan->ceklist }}</td>
                                    <td class="align-middle">{{ $kegiatan->keterangan }}</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td class="align-middle">{{ $kegiatans->count() + 1 }}</td>
                                    <td class="align-middle">
                                        <input type="text" name="kegiatan[]" placeholder="Kegiatan Baru">
                                    </td>
                                    <td class="align-middle">
                                    <select name="pic[]" class="form-control" required>
                                        <option value="{{ App\Models\Admin::ROLE_SUPERADMIN }}">Super Admin</option>
                                        <option value="{{ App\Models\Admin::ROLE_AdminJar }}">Admin Pengajar</option>
                                        <option value="{{ App\Models\Admin::ROLE_AdminPelayanan }}">Admin Pelayanan</option>
                                        <option value="{{ App\Models\Admin::ROLE_AdminKeuangan }}">Admin Keuangan</option>
                                        <option value="{{ App\Models\Admin::ROLE_AdminPmk }}">Admin PMK</option>
                                    </select>
                                    </td>

                                    <td class="align-middle">
                                        <select name="ceklist[]" class="form-control" required>
                                            <option value="Selesai">Selesai</option>
                                            <option value="Belum Selesai">Belum Selesai</option>
                                        </select>
                                    </td>
                                    <td class="align-middle">
                                        <input type="text" name="keterangan[]" placeholder="Keterangan Baru">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
</section>
</div>



@endsection 