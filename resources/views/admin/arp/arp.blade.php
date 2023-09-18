@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-12">
            <a href="{{ route('arp.create') }}" class="btn btn-info mb-3">Tambah Data</a>
            <!-- upload rendiklat -->
            <form action="{{ route('arp.uploadRendiklat') }}" method="POST" enctype="multipart/form-data"
                class="d-inline-block">
                @csrf
                <label for="file" class="btn btn-info mb-3">Upload Rendiklat</label>
                <input type="file" name="file" id="file" class="d-none" accept=".csv,.xls,.xlsx"
                    onchange="this.form.submit()">
            </form>
            <!-- end upload rendiklat -->
            <!-- upload peserta -->

            <!-- end upload peserta -->
            <a href="#" class="btn btn-info mb-3">Download</a>
            <a href="#" class="btn btn-info mb-3">Download From</a>
            <div class="card">
                <div class="card-header fw-bold">
                    Rencana dan Realisasi Pembelajaran
                </div>
                <div class="card-body small">
                    <div class="table-responsive">
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
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <table class="table table-bordered table-hover" id="table1">
                            <thead class="table-light">
                                <tr>
                                    <th style="min-width: 70px;">No</th>
                                    <th style="min-width: 150px;">Tanggal Mulai</th>
                                    <th style="min-width: 150px;">Tanggal Selesai</th>
                                    <th style="min-width: 150px;">Kode</th>
                                    <th style="min-width: 250px;">Judul</th>
                                    <th style="min-width: 200px;">Jenis Permintaan Diklat</th>
                                    <th style="min-width: 200px;">Jenis Pelaksanaan Diklat</th>
                                    <th style="min-width: 150px;">Angkatan</th>
                                    <th style="min-width: 150px;">Instruktur</th>
                                    <th style="min-width: 150px;">Rencana Peserta</th>
                                    <th style="min-width: 150px;">Realisasi Peserta</th>
                                    <th style="min-width: 150px;">Kelas</th>
                                    <th style="min-width: 150px;">Wisma</th>
                                    <th style="min-width: 150px;">Persiapan</th>
                                    <th style="min-width: 150px;">Pelaksanaan</th>
                                    <th style="min-width: 150px;">Pasca</th>
                                    <th style="min-width: 150px;">Realisasi Biaya</th>
                                    <th style="min-width: 150px;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($arp->count() > 0)
                                    @foreach ($arp as $rs)
                                        <tr>
                                            <td class="align-middle text-center">{{ $loop->iteration }}</td>
                                            <td class="align-middle">
                                                {{ date_format(date_create($rs->tanggal_mulai), 'd-m-Y') }}</td>
                                            <td class="align-middle">
                                                {{ date_format(date_create($rs->tanggal_selesai), 'd-m-Y') }}</td>
                                            <td class="align-middle">{{ $rs->kode }}</td>
                                            <td class="align-middle">{{ $rs->judul }}</td>
                                            <td class="align-middle">{{ $rs->jenis_permintaan_diklat }}</td>
                                            <td class="align-middle">{{ $rs->jenis_pelaksanaan_diklat }}</td>
                                            <td class="align-middle">{{ $rs->angkatan }}</td>
                                            <td class="align-middle">{{ $rs->instruktur }}</td>
                                            <td class="align-middle text-center">
                                                <a href="{{ route('arp.peserta', $rs->id) }}">
                                                    {{ $rs->users->count() }}
                                                    ({{ $rs->confirmed_count }} konfirmasi) <!-- jumlah yang sudah konfirmasi -->
                                                </a>
                                            </td>
                                            <td class="align-middle text-center"><a href="{{ route('show.realisasi', $rs->id) }}"> {{ $rs->absensi_count }} </a>
                                            </td>
                                            <td class="align-middle">{{ $rs->kelas }}</td>
                                            <td class="align-middle">{{ $rs->wisma }}</td>
                                            <!-- <td class="align-middle"><a href="#"> {{ $rs->persiapan }} </a></td> -->
                                            <td class="align-middle"><a href="{{ route('persiapan.index', $rs->id) }}"> {{ $rs->persentasePersiapan() }} % </a></td>
                                            <td class="align-middle"><a href="{{ route('pelaksanaan.index', $rs->id) }}"> {{ $rs->persentasePelaksanaan() }} % </a></td>
                                            <td class="align-middle"><a href="{{ route('pasca.index', $rs->id) }}"> {{ $rs->persentasePasca() }} % </a></td>
                                            <td class="align-middle">{{ $rs->realisasi_biaya }}</td>
                                            <td class="align-middle">
                                                <div class="btn-group" role="group" aria-label="Basic example"
                                                    style="white-space: nowrap;">
                                                    <a href="{{ route('arp.edit', $rs->id) }}" type="button"
                                                        class="btn btn-warning">Edit</a>
                                                    <form action="{{ route('arp.destroy', $rs->id) }}" method="POST"
                                                        type="button" class="btn btn-danger">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger m-0"
                                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                                    </form>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#uploadModal" data-arpid="{{ $rs->id }}">
                                                        Upload File
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Upload File for ARP
                                                            ID: <span id="arpIdSpan"></span></h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('arp.uploadPeserta') }}" method="POST"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <!-- Add a hidden input to store the ARP ID -->
                                                            <input type="hidden" name="arp_id" id="arp_id"
                                                                value="">
                                                            <div class="form-group">
                                                                <label for="file_peserta">Choose File:</label>
                                                                <input type="file" name="file_peserta"
                                                                    id="file_peserta" class="form-control-file">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary"
                                                                    id="uploadBtn">Upload</button>
                                                            </div>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
    <script>
        $(document).ready(function() {
            var filePesertaInput = document.getElementById('file_peserta');
            var arpIdInput = document.getElementById('arp_id');
            var originalFilePesertaValue = filePesertaInput.value;
            $('#arpIdSpan').text(arpIdInput);
            filePesertaInput.addEventListener('change', function() {

            });

            $('#uploadModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget);
                var arpId = button.data('arpid');
                arpIdInput.value = arpId;
                $('#arpIdSpan').text(arpId);
            });

            $('#uploadModal').on('hidden.bs.modal', function() {
                filePesertaInput.value = originalFilePesertaValue;
                arpIdInput.value = '';
            });

            $('#uploadBtn').click(function() {
                $('#uploadModal').modal('hide');
            });
        });
    </script>
    <style>
        .table-responsive {
            overflow-x: auto;
        }

        .table {
            width: 100%;
            max-width: none;
        }

        .table th {
            white-space: nowrap;
        }
    </style>
@endsection