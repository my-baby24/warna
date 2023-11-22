@extends ('layouts.appUser')
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header fw-bold">
                    Berikut Informasi Pembelajaran Anda
                </div>

                <div class="card-body small">
                    <div class="table-responsive">
                        <!-- success -->
                        @if (Session::has('success'))
                            <div class="alert alert-success alert-dismissible show fade" role="alert">
                                {{ Session::get('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    // Mendapatkan pengguna yang sedang login
                                    $loggedInUser = Auth::user();
                                    // Mendapatkan data ARP yang terkait dengan pengguna yang sedang login
                                    $arp = $loggedInUser->arp;
                                @endphp

                                <!-- Menampilkan informasi ARP -->
                                @if ($arp)
                                    <tr>
                                        <td class="align-middle text-center">1</td>
                                        <td class="align-middle">{{ date_format(date_create($arp->tanggal_mulai), 'd-m-Y') }}</td>
                                        <td class="align-middle">{{ date_format(date_create($arp->tanggal_selesai), 'd-m-Y') }}</td>
                                        <td class="align-middle">{{ $arp->kode }}</td>
                                        <td class="align-middle">{{ $arp->judul }}</td>
                                        <td class="align-middle">{{ $arp->jenis_permintaan_diklat }}</td>
                                        <td class="align-middle">{{ $arp->jenis_pelaksanaan_diklat }}</td>
                                        <td class="align-middle">{{ $arp->angkatan }}</td>
                                        <td class="align-middle">{{ $arp->instruktur }}</td>
                                        <td class="align-middle">
                                            <a href="{{ route('arp.peserta', $arp->id) }}">
                                                {{ $arp->users->count() }}
                                            </a>
                                        </td>
                                        <td class="align-middle text-center">
                                            <a href="{{ route('show.realisasi', $arp->id) }}">
                                                {{ $arp->hitungAbsensiCount() }}
                                            </a>
                                        </td>
                                        <td class="align-middle">{{ $arp->kelas }}</td>
                                        <td class="align-middle">{{ $arp->wisma }}</td>
                                    </tr>
                                @else
                                    <!-- Menampilkan pesan jika data ARP tidak ditemukan -->
                                    <tr>
                                        <td class="text-center" colspan="13"> Data Tidak Ditemukan</td>
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
            // ... (bagian skrip JavaScript lainnya)
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

        {{-- Gaya lainnya --}}
    </style>

    <!-- Menambahkan skrip dan gaya untuk menu sirkular (tidak terkait langsung dengan tugas yang diberikan) -->
    <script src="{{ asset('assets/js/circular-menu/menu.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.5.1/snap.svg-min.js"></script>
@endsection
