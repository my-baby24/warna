@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-12">
            <a href="{{ route('arp.create') }}" class="btn btn-info mb-3">Tambah Data</a>
            <!-- upload rendiklat -->
            <a href="#" class="btn btn-info mb-3" data-toggle="modal" data-target="#uploadDiklat" data-form-type="rencana">Upload Rendiklat</a>
            <div class="modal fade" id="uploadDiklat" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header bg-info">
                                                                    <h5 class="modal-title white" id="myModalLabel130">
                                                                        Upload Rencana Diklat
                                                                    </h5>
                                                                    <button type="button" class="close"
                                                                        data-bs-dismiss="modal" aria-label="Close">
                                                                        <i data-feather="x"></i>
                                                                    </button>
                                                                </div>
                                                    <div class="modal-body">
                                                    <form action="{{ route('arp.uploadRendiklat') }}" method="POST" enctype="multipart/form-data"
                                                                class="d-inline-block">
                                                                @csrf
                                                                <!-- <label for="file" class="btn btn-secondary mb-3">Upload Rendiklat:</label>
                                                                <input type="file" name="file" id="file" class="d-none form-control-file" accept=".csv,.xls,.xlsx"
                                                                    onchange="this.form.submit()"> -->
                                                                    <div class="form-group">
                                                                <label for="file">Choose File:</label>
                                                                <input type="file" name="file"
                                                                    id="file" class="form-control-file">
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
            <!-- end upload rendiklat -->
            
            <a href="#" class="btn btn-info mb-3">Download</a>
            <a href="#" class="btn btn-info mb-3" data-toggle="modal" data-target="#downloadFormModal" data-form-type="rencana">Download Form</a>
            <div class="card">
                 <!-- Modal untuk download form -->
                 <div class="modal fade" id="downloadFormModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Pilih Jenis Form yang Akan Diunduh</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="text-center">
                                    <a href="{{ route('download.form', ['type' => 'rencana']) }}" class="btn btn-primary">Download Form Rencana Diklat</a>
                                    <a href="{{ route('download.form', ['type' => 'peserta']) }}" class="btn btn-primary">Download Form Peserta</a>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Akhir modal untuk download form -->
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
                                    <!-- <th style="min-width: 70px;">No</th> -->
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
                                    <form action="{{ route('arp.save', $rs->id) }}" method="POST">
                                        @csrf
                                        @method('POST')
                                        <td class="align-middle">
                                            <input type="text" class="form-control" name="tanggal_mulai" value="{{ date_format(date_create($rs->tanggal_mulai), 'd-m-Y') }}" readonly>
                                        </td>
                                        <td class="align-middle">
                                            <input type="text" class="form-control" value="{{ date_format(date_create($rs->tanggal_selesai), 'd-m-Y') }}" name="tanggal_selesai" readonly>
                                        </td>
                                        <td class="align-middle">
                                            <input type="text" name="kode" value="{{ $rs->kode }}" readonly> 
                                        </td>
                                        <td class="align-middle">
                                            <input type="text" name="judul" value="{{ $rs->judul }}" readonly>
                                        </td>
                                        <td class="align-middle">
                                            <input type="text" name="jenis_permintaan_diklat" value="{{ $rs->jenis_permintaan_diklat }}" readonly>
                                        </td>
                                        <td class="align-middle">
                                            <input type="text" name="jenis_perlaksanaan_diklat" value="{{ $rs->jenis_pelaksanaan_diklat }}" readonly>
                                        </td>
                                        <td class="align-middle">
                                            <input type="text" name="angkatan" value="{{ $rs->angkatan }}" readonly>
                                        </td>
                                        <td class="align-middle">
                                            <input type="text" name="Instruktur" value="{{ $rs->instruktur }}">
                                        </td>
                                        <td class="align-middle text-center">
                                            <input type="text" name="rencana_peserta" value="{{ $rs->users->count() }}" readonly>
                                            <a href="{{ route('arp.peserta', $rs->id) }}">
                                                ({{ $rs->confirmed_count }} konfirmasi) <!-- jumlah yang sudah konfirmasi -->	
                                            </a>
                                        </td>
                                        <td class="align-middle text-center">
                                            <input type="text" name="realisasi_peserta" value="{{ $rs->absensi_count }}" readonly>
                                            <a href="{{ route('show.realisasi', $rs->id) }}"> </a>
                                        </td>
                                        <td class="align-middle">
                                            <input type="text" name="kelas" value="{{ $rs->kelas }}" readonly>
                                        </td>
                                        <td class="align-middle">
                                            <input type="text" name="wisma" value="{{ $rs->wisma }}" readonly>
                                        </td>
                                        <td class="align-middle">
                                            <input type="text" name="persiapan" value="{{ $rs->persentasePersiapan() }} " readonly>
                                            <a href="{{ route('persiapan.index', $rs->id) }}"> </a>
                                        </td>
                                        <td class="align-middle">
                                            <input type="text" name="pelaksanaan" value="{{ $rs->persentasePelaksanaan() }}" readonly>
                                            <a href="{{ route('pelaksanaan.index', $rs->id) }}"> </a>
                                        </td>
                                        <td class="align-middle">
                                            <input type="text" name="pasca" value="{{ $rs->persentasePasca() }} " readonly>
                                            <a href="{{ route('pasca.index', $rs->id) }}">go to pasca</a>
                                        </td>
                                        <td class="align-middle">
                                            <input type="decimal" name="realisasi_biaya" value="{{ number_format($rs->totalRealisasiBiaya()) }}" readonly>
                                            <a href="{{ route('realisasiBiaya.index', $rs->id) }}">  </a>
                                        </td>
                                        <td class="align-middle">
                                            <div class="btn-group" role="group" aria-label="Basic example" style="white-space: nowrap;">
                                                <a href="{{ route('arp.edit', $rs->id) }}" type="button" class="btn btn-warning">Edit</a>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteConfirmation{{ $rs->id }}">Delete</button>
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#uploadModal" data-arpid="{{ $rs->id }}">Upload Peserta</button>
                                                <button type="submit" class="btn btn-success" >Simpan</button>
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                        <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-info">
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
                                        <!-- Modal for delete confirmation -->
                                        <div class="modal fade" id="deleteConfirmation{{ $rs->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmationLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="deleteConfirmationLabel">Konfirmasi Hapus</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah Anda yakin ingin menghapus data {{ $rs->id }}?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                        <form action="{{ route('arp.destroy', $rs->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Hapus</button>
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