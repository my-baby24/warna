@extends('layouts.dashboard.header')
@section('content')
<div class="row">
    <div class="col-12">
        <!-- Formulir Pencarian Tanggal -->
        <form id="dateSearchForm">
            <div class="form-row align-items-center">
                <div class="col-md-3">
                    <label for="startDate">Tanggal Mulai:</label>
                    <input type="date" id="startDate" class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="endDate">Tanggal Selesai:</label>
                    <input type="date" id="endDate" class="form-control">
                </div>
                <div class="col-md-3">
                    <button type="button" class="btn btn-primary" onclick="searchByDate()">Cari</button>
                </div>
            </div>
        </form>

        <!-- Tabel Anda -->
        <div class="card">
            <div class="card-header" style="background-color: #007bff; color: #fff;">
                <marquee behavior="scroll" direction="left" style="animation: marquee-text 20s linear infinite; cursor: pointer;" onclick="showPopup()">
                    Silahkan Lihat Informasi Pembelajaran Anda di sini!!!
                </marquee>
            </div>
            <div class="card-body">
                <!-- Tombol Kembali -->
                <a href="{{ route('wlcm') }}" class="btn btn-primary">
                    <i class="fas fa-arrow-left"></i> Kembali ke Halaman Utama
                </a><p>
                <div class="table-responsive scrolling-table">
                    @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    <table class="table table-hover">
                        <thead>
                            <tr style="background-color: #f8f9fa; color: #333;">
                                <th style="min-width: 70px; text-align: center;">No</th>
                                <th style="min-width: 120px; text-align: center;">Tanggal Mulai</th>
                                <th style="min-width: 120px; text-align: center;">Tanggal Selesai</th>
                                <th style="min-width: 300px; text-align: center;">Judul</th>
                                <th style="min-width: 150px;">Angkatan</th>
                                <th style="min-width: 200px; text-align: center;">Jenis Pelaksanaan Diklat</th>
                            </tr>
                        </thead>
                        <tbody class="scrolling-content">
                            @if($arp->count() > 0)
                                @foreach($arp as $key => $rs)
                                    <tr style="transition: background-color 0.3s ease; cursor: pointer;">
                                        <td class="align-middle text-center" style="font-size: 1.2rem; font-weight: bold;">{{ $key + 1 }}</td>
                                        <td class="align-middle text-center">{{ date_format(date_create($rs->tanggal_mulai), 'Y-m-d') }}</td>
                                        <td class="align-middle text-center">{{ date_format(date_create($rs->tanggal_selesai), 'Y-m-d') }}</td>
                                        <td class="align-middle" style="max-width: 500px; overflow: hidden; text-overflow: ellipsis;">{{ $rs->judul }}</td>
                                        <td class="align-middle text-center">{{ $rs->angkatan }}</td>
                                        <td class="align-middle text-center">{{ $rs->jenis_pelaksanaan_diklat }}</td>
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
    .scrolling-table {
        max-height: 500px; /* Ganti dengan tinggi yang sesuai */
        overflow: auto;
    }

    .scrolling-content {
        animation: scroll-up 600s linear infinite; /* Animasi bergerak ke atas */
    }

    /* Keyframes untuk animasi */
    @keyframes scroll-up {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(calc(-100% - 10px)); /* 10px adalah tinggi header */
        }
    }

    .table {
        width: 100%;
        border-collapse: collapse; /* Tambahkan border-collapse untuk menghilangkan garis antar sel */
    }

    .table th, .table td {
        padding: 10px;
        text-align: center;
    }

    .table th {
        white-space: nowrap;
        position: sticky;
        top: 0;
        background-color: #f8f9fa;
        z-index: 2;
        padding: 10px; /* Atur padding atas dan bawah */
        margin: 0; /* Hapus margin */
        font-weight: bold;
    }

    .table td {
        white-space: nowrap;
        vertical-align: middle;
    }

    /* Efek Hover pada Baris Tabel */
    .table tbody tr:hover {
        background-color: #cce5ff; /* Warna latar belakang saat hover */
        transition: background-color 0.3s ease;
    }
</style>

<script>
    function searchByDate() {
        var startDate = document.getElementById("startDate").value;
        var endDate = document.getElementById("endDate").value;
        var table = document.querySelector(".table tbody");
        var rows = table.querySelectorAll("tr");

        rows.forEach(function(row) {
            var startDateCell = row.querySelector("td:nth-child(2)").textContent;
            var endDateCell = row.querySelector("td:nth-child(3)").textContent;

            if (startDateCell >= startDate && endDateCell <= endDate) {
                row.style.display = "";
            } else {
                row.style.display = "none";
            }
        });
    }
</script>
@endsection
