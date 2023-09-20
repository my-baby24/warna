<?php

namespace App\Imports;

use App\Models\Arp; 
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ArpImport implements ToCollection, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach ($collection as $row) {
            Arp::create([
                'tanggal_mulai' => date('Y-m-d', strtotime($row['TANGGAL MULAI'])),
                'tanggal_selesai' => date('Y-m-d', strtotime($row['TANGGAL SELESAI'])),
                'kode' => $row['KODE'],
                'judul' => $row['JUDUL'],
                'jenis_permintaan_diklat' => $row['JENIS PERMINTAAN DIKLAT'],
                'jenis_pelaksanaan_diklat' => $row['JENIS PELAKSANAAN DIKLAT'],
                'angkatan' => $row['ANGKATAN'],
                'instruktur' => $row['INSTRUKTUR'],

            ]);
        }
    }

    // public function model(array $row)
    // {
    //     return new Arp([

    //                 'tanggal_mulai' => date('Y-m-d', strtotime($row['TANGGAL MULAI'])),
    //                 'tanggal_selesai' => date('Y-m-d', strtotime($row['TANGGAL SELESAI'])),
    //                 'kode' => $row['KODE'],
    //                 'judul' => $row['JUDUL'],
    //                 'jenis_permintaan_diklat' => $row['JENIS PERMINTAAN DIKLAT'],
    //                 'jenis_pelaksanaan_diklat' => $row['JENIS PELAKSANAAN DIKLAT'],
    //                 'angkatan' => $row['ANGKATAN'],
    //                 'instruktur' => $row['INSTRUKTUR'],
    //         ]);
    // }
}
