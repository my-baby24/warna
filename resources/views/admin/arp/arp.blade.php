@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="btn-group dropend me-1 mb-1">
                <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Opsi Tindakan</button>
                <div class="dropdown-menu">
                    <h6 class="dropdown-header">Opsi Tindakan</h6>
                    <a class="dropdown-item" href="{{ route('arp.create') }}">Tambah Data</a>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#uploadDiklat" data-form-type="rencana">Upload Rendiklat</a>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#downloadArp">Download ARP</a>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#downloadFormModal" data-form-type="rencana">Download Form</a>
                </div>
            </div>
            
            <!-- upload rendiklat -->
            <div class="modal fade" id="uploadDiklat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-info">
                            <h5 class="modal-title white" id="myModalLabel130">
                                Upload Rencana Diklat
                            </h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <i data-feather="x"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('arp.uploadRendiklat') }}" method="POST" enctype="multipart/form-data" class="d-inline-block">
                                @csrf
                                <div class="form-group">
                                    <label for="file">Choose File:</label>
                                    <input type="file" name="file" id="file" class="form-control-file">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary" id="uploadBtn">Upload</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end upload rendiklat -->
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
                <!-- Modal Download Arp -->
                <div class="modal fade" id="downloadArp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Pilih Tipe File yang Akan Diunduh</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="text-center">
                                <a href="{{ url('/arp/download/excel') }}" class="btn btn-primary">Download Excel</a>
                                <a href="{{ url('/arp/download/pdf') }}" class="btn btn-primary">Download PDF</a>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- akhir modal download arp -->
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
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
                                <!-- Mulai form untuk setiap baris data -->
                                <!-- <form action="{{ route('arp.update', $rs->id) }}" method="POST">
                                    @csrf
                                    @method ('PUT') -->
                                    <!-- Input hidden untuk menyimpan ID dari data yang sedang diperbarui -->
                                    <input type="hidden" name="id" value="{{ $rs->id }}">
                                    <tr>
                                        <!-- Kolom No -->
                                        <td class="align-middle text-center">{{ $loop->iteration }}</td>
                                        <!-- Kolom Tanggal Mulai -->
                                        <td class="align-middle">
                                            {{ date_format(date_create($rs->tanggal_mulai), 'd-m-Y') }}
                                            <input type="hidden" name="tanggal_mulai" value="{{ date_format(date_create($rs->tanggal_mulai), 'Y-m-d') }}" readonly>
                                        </td>
                                        <!-- Kolom Tanggal Selesai -->
                                        <td class="align-middle">
                                            {{ date_format(date_create($rs->tanggal_selesai), 'd-m-Y') }}
                                            <input type="hidden" name="tanggal_selesai" value="{{ date_format(date_create($rs->tanggal_selesai), 'Y-m-d') }}" readonly>
                                        </td>
                                        <!-- Kolom Kode -->
                                        <td class="align-middle">
                                            {{ $rs->kode }}
                                            <input type="hidden" name="kode" value="{{ $rs->kode }}">
                                        </td>
                                        <!-- Kolom Judul -->
                                        <td class="align-middle">
                                            {{ $rs->judul }}
                                            <input type="hidden" name="judul" value="{{ $rs->judul }}">
                                        </td>
                                        <!-- Kolom Jenis Permintaan Diklat -->
                                        <td class="align-middle">
                                            {{ $rs->jenis_permintaan_diklat }}
                                            <input type="hidden" name="jenis_permintaan_diklat" value="{{ $rs->jenis_permintaan_diklat }}">
                                        </td>
                                        <!-- Kolom Jenis Pelaksanaan Diklat -->
                                        <td class="align-middle">
                                            {{ $rs->jenis_pelaksanaan_diklat }}
                                            <input type="hidden" name="jenis_pelaksanaan_diklat" value="{{ $rs->jenis_pelaksanaan_diklat }}">
                                        </td>
                                        <!-- Kolom Angkatan -->
                                        <td class="align-middle">
                                            {{ $rs->angkatan }}
                                            <input type="hidden" name="angkatan" value="{{ $rs->angkatan }}">
                                        </td>
                                        <!-- Kolom Instruktur -->
                                        <td class="align-middle">
                                            {{ $rs->instruktur }}
                                            <input type="hidden" name="instruktur" value="{{ $rs->instruktur }}">
                                        </td>
                                        <!-- Kolom Rencana Peserta -->
                                        <td class="align-middle">
                                            <a href="{{ route('arp.peserta', $rs->id) }}">
                                                {{ $rs->users->count() }}
                                                ({{ $rs->confirmed_count }} konfirmasi) <!-- jumlah yang sudah konfirmasi -->
                                            </a>
                                            <input type="hidden" name="rencana_peserta" value="{{ $rs->users->count() }}">
                                        </td>
                                        <!-- Kolom Realisasi Peserta (menggunakan metode di dalam model) -->
                                        <td class="align-middle text-center">
                                            <a href="{{ route('show.realisasi', $rs->id) }}">
                                                {{ $rs->hitungAbsensiCount() }}
                                                <input type="hidden" name="realisasi_peserta" value="{{ $rs->hitungAbsensiCount() }}">
                                            </a>
                                        </td>

                                        <td class="align-middle">
                                            {{ $rs->kelas }}
                                            
                                        </td>
                                        <td class="align-middle">
                                            {{ $rs->wisma }}
                                        </td>
                                        <!-- Kolom Persentase Persiapan (menggunakan fungsi pada model) -->
                                        <td class="align-middle">
                                            <a href="{{ route('persiapan.index', $rs->id) }}">
                                                {{ $rs->persentasePersiapan() }} %
                                                <input type="hidden" name="persiapan" value="{{ $rs->persentasePersiapan() }}">
                                            </a>
                                        </td>
                                        <!-- Kolom Persentase Pelaksanaan -->
                                        <td class="align-middle">
                                            <a href="{{ route('pelaksanaan.index', $rs->id) }}">
                                                {{ $rs->persentasePelaksanaan() }} %
                                                <input type="hidden" name="pelaksanaan" value="{{ $rs->persentasePelaksanaan() }}">
                                            </a>
                                        </td>
                                        <!-- Kolom Persentase Pasca -->
                                        <td class="align-middle">
                                            <a href="{{ route('pasca.index', $rs->id) }}">
                                                {{ $rs->persentasePasca() }} %
                                                <input type="hidden" name="pasca" value="{{ $rs->persentasePasca() }}">
                                            </a>
                                        </td>
                                        <!-- Kolom Total Realisasi Biaya -->
                                        <td class="align-middle">
                                            <a href="{{ route('realisasiBiaya.index', $rs->id) }}">
                                                Rp. {{ number_format($rs->totalRealisasiBiaya(), 0, ',', '.') }}
                                                <input type="hidden" name="realisasi_biaya" value="{{ number_format($rs->totalRealisasiBiaya(), 0, ',', '.') }}">
                                            </a>
                                        </td>
                                        <td class="align-middle">
                                            <div class="btn-group" role="group" aria-label="Basic example" style="white-space: nowrap;">
                                            <a href="{{ route('arp.edit', $rs->id) }}" type="button" class="btn btn-warning">Edit</a>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal{{ $rs->id }}">Simpan</button>
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{ $rs->id }}">
                                                Hapus
                                            </button>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#uploadModal" data-arpid="{{ $rs->id }}">
                                                Upload Peserta
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <!-- </form> -->
                                <!-- Modal Simpan -->
                                <div class="modal fade" id="editModal{{ $rs->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $rs->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editModalLabel{{ $rs->id }}">Edit Data</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('arp.update', $rs->id) }}" method="POST">
                                                    @csrf
                                                    @method ('PUT')
                                                    <input type="hidden" name="tanggal_mulai" value="{{ date_format(date_create($rs->tanggal_mulai), 'Y-m-d') }}" readonly>
                                                    <input type="hidden" name="tanggal_selesai" value="{{ date_format(date_create($rs->tanggal_selesai), 'Y-m-d') }}" readonly>
                                                    <input type="hidden" name="kode" value="{{ $rs->kode }}" readonly>
                                                    <input type="hidden" name="judul" value="{{ $rs->judul }}" readonly>
                                                    <input type="hidden" name="jenis_permintaan_diklat" value="{{ $rs->jenis_permintaan_diklat }}" readonly>
                                                    <input type="hidden" name="jenis_pelaksanaan_diklat" value="{{ $rs->jenis_pelaksanaan_diklat }}" readonly>
                                                    <input type="hidden" name="angkatan" value="{{ $rs->angkatan }}" readonly>
                                                    <input type="hidden" name="instruktur" value="{{ $rs->instruktur }}" readonly>
                                                    <input type="hidden" name="rencana_peserta" value="{{ $rs->users->count() }}" readonly>
                                                    <input type="hidden" name="realisasi_peserta" value="{{ $rs->hitungAbsensiCount() }}" readonly>
                                                    <input type="hidden" name="kelas" value="{{ $rs->kelas }}" readonly>
                                                    <input type="hidden" name="wisma" value="{{ $rs->wisma }}" readonly>
                                                    <input type="hidden" name="persiapan" value="{{ $rs->persentasePersiapan() }}" readonly>
                                                    <input type="hidden" name="pelaksanaan" value="{{ $rs->persentasePelaksanaan() }}" readonly>
                                                    <input type="hidden" name="pasca" value="{{ $rs->persentasePasca() }}" readonly>
                                                    <input type="hidden" name="realisasi_biaya" value="{{ number_format($rs->totalRealisasiBiaya(), 0, ',', '.') }}" readonly>

                                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Konfirmasi Penghapusan -->
                                <div class="modal fade" id="deleteModal{{ $rs->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-danger">
                                                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Penghapusan ARP ID: {{ $rs->id }}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah Anda yakin ingin menghapus ARP ini?
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
                                <!--  -->
                                <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-info">
                                                <h5 class="modal-title" id="exampleModalLabel">Upload File for ARP
                                                    ID: <span id="arpIdSpan"></span></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('arp.uploadPeserta') }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <!-- Add a hidden input to store the ARP ID -->
                                                        <input type="hidden" name="arp_id" id="arp_id" value="">
                                                        <div class="form-group">
                                                            <label for="file_peserta">Choose File:</label>
                                                            <input type="file" name="file_peserta" id="file_peserta" class="form-control-file">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-primary" id="uploadBtn">Upload</button>
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