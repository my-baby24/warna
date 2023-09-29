@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                Informasi Lainnya
            </div>
            <div class="card-body small">
                <div class="table-responsive">
                    @if (Session::has('success'))
                    <div class="alert alert-success alert-dismissible show fade" role="alert">
                            {{ Session::get('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"aria-label="Close"></button>
                        </div>
                    @endif
                    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#formTambah">Tambah Data</button>
                    <!-- desain modal -->
                    <div class="modal fade text-left" id="formTambah" tabindex="-1"
                        role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                            role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel33">Tambah Informasi </h4>
                                    <button type="button" class="close" data-bs-dismiss="modal"
                                        aria-label="Close">
                                        <i data-feather="x"></i>
                                    </button>
                                </div>
                                <form action="{{ route('informasiadmin.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <label>Judul: </label>
                                        <div class="form-group">
                                            <input type="text" placeholder="Masukkan Judul" class="form-control" name="judul">
                                        </div>

                                        <label>Foto: </label>
                                        <div class="form-group">
                                            <input type="file" class="form-control" name="foto">
                                        </div>

                                        <label>Keterangan: </label>
                                        <div class="form-group">
                                            <textarea placeholder="Keterangan" class="form-control" name="keterangan"></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light-secondary"
                                            data-bs-dismiss="modal">
                                            <i class="bx bx-x d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Batal</span>
                                        </button>
                                        <button type="submit" class="btn btn-primary ml-1">
                                            <i class="bx bx-check d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Tambah</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- end desain modal -->
                    <table class="table table-bordered table-striped mb-0" id="table1">
                        <thead>
                            <tr>
                                <th style="min-width: 70px;">No</th>
                                <th style="min-width: 150px;">Judul</th>
                                <th style="min-width: 150px;">Foto</th>
                                <th style="min-width: 150px;">Keterangan</th>
                                <th style="min-width: 150px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($informasis as $informasi)
                            <tr>
                                <td class="align-middle">{{ $loop->iteration }}</td>
                                <td class="align-middle">{{ $informasi->judul }}</td>
                                <td class="align-middle">
                                    <img src="{{ asset('storage/' . $informasi->foto) }}" alt="{{ $informasi->judul }}" width="100">
                                </td>

                                <td class="align-middle">{{ $informasi->keterangan }}</td>
                                <td class="align-middle">
                                    <button type="button" class="btn btn-primary">Edit</button>
                                    <button type="button" class="btn btn-danger">Hapus</button>
                                </td>
                            </tr>
                            @endforeach
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
