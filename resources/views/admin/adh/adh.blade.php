@extends('layouts.admin')
@section('content')
<div class="page-heading">
<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <a href="#" class="btn btn-info mb-2">Download</a>
        </div>
    </div>
</div>

    <section class="section">
        <div class="card">
            <div class="card-header">
                Daftar Hadir
            </div>
            <div class="card-body small">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Kode</th>
                            <th>Judul</th>
                            <th>Nama</th>
                            <th>Nip</th>
                            <th>Tanggal Absen</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if($adhs->count() > 0)
                                    @foreach($adhs as $rs)
                               
                                        <tr>
                                            <td class="align-middle">{{ $loop->iteration }}</td>
                                            <td class="align-middle">{{ $rs->tanggal_mulai }}</td>
                                            <td class="align-middle">{{ $rs->tanggal_selesai }}</td>
                                            <td class="align-middle">{{ $rs->kode }}</td>
                                            <td class="align-middle">{{ $rs->judul }}</td>
                                            <td class="align-middle">{{ $rs->nama }}</td>
                                            <td class="align-middle">{{ $rs->nip }}</td>
                                            <td class="align-middle">{{ $rs->tanggal_absen }}</td>
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
    </section>
</div>
@endsection