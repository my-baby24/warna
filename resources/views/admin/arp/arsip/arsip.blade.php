@extends('layouts.admin')
@section('content')

<form action="" method="POST">
    @csrf
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
                <th style="min-width: 150px;">ID ARP</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($arsip as $item )
            <tr>
                <td class="align-middle">{{ $loop->iteration }}</td>
                <td class="align-middle">{{ date_format(date_create($item->tanggal_mulai), 'd-m-Y') }}
                    <input type="text" name="tanggal_mulai" value="{{ date_format(date_create($item->tanggal_mulai), 'Y-m-d') }}">
                </td>
                <td class="align-middle">{{ date_format(date_create($item->tanggal_selesai), 'd-m-Y') }}
                    <input type="text" name="tanggal_selesai" value="{{ date_format(date_create($item->tanggal_selesai), 'Y-m-d') }}">
                </td>
                <td class="align-middle">{{ $item->kode }}
                    <input type="text" name="kode" value="{{ $item->kode }}">
                </td>
                <td class="align-middle">{{ $item->judul }}
                    <input type="text" name="judul" value="{{ $item->judul }}">
                </td>
                <td class="align-middle">{{ $item->jenis_permintaan_diklat }}
                    <input type="text" name="jenis_permintaan_diklat" value="{{ $item->jenis_permintaan_diklat }}">
                </td>
                <td class="align-middle">{{ $item->jenis_pelaksanaan_diklat }}
                    <input type="text" name="jenis_pelaksanaan_diklat" value="{{ $item->jenis_pelaksanaan_diklat }}">
                </td>
                <td class="align-middle">{{ $item->angkatan }}
                    <input type="text" name="angkatan" value="{{ $item->angkatan }}">
                </td>
                <td class="align-middle">{{ $item->instruktur }}
                    <input type="text" name="instruktur" value="{{ $item->instruktur }}">
                </td>
                <td class="align-middle">
                    <a href="{{ route('index.arsipuser', ['arp_id' => $item->arp_id]) }}">
                        {{ $item->rencana_peserta }}
                    </a>
                    <input type="text" name="rencana_peserta" value="{{ $item->rencana_peserta }}">
                </td>
                <td class="align-middle">{{ $item->realisasi_peserta }}
                    <input type="text" name="realisasi_peserta" value="{{ $item->realisasi_peserta }}">
                </td>
                <td class="align-middle">{{ $item->kelas }}
                    <input type="text" name="kelas" value="{{ $item->kelas }}">
                </td>
                <td class="align-middle">{{ $item->wisma }}
                    <input type="text" name="wisma" value="{{ $item->wisma }}">
                </td>
                <td class="align-middle">{{ $item->persiapan }}
                    <input type="text" name="persiapan" value="{{ $item->persiapan }}">
                </td>
                <td class="align-middle">{{ $item->pelaksanaan }}
                    <input type="text" name="pelaksanaan" value="{{ $item->pelaksanaan }}">
                </td>
                <td class="align-middle">{{ $item->pasca }}
                    <input type="text" name="pasca" value="{{ $item->pasca }}">
                </td>
                <td class="align-middle">{{ $item->realisasi_biaya }}
                    <input type="text" name="realisasi_biaya" value="{{ $item->realisasi_biaya }}">
                </td>
                <td class="align-middle">{{ $item->arp_id }}
                    <input type="text" name="arp_id" value="{{ $item->arp_id }}">
                </td>
            </tr>
                
            @endforeach
        </tbody>
    </table>
</form>
@endsection