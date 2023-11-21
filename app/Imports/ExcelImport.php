<?php

namespace App\Imports;

use App\Models\Arp;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Carbon;
use PhpOffice\PhpSpreadsheet\Shared\Date;


class ExcelImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $tanggalMulai = !empty($row[0]) ? Date::excelToDateTimeObject($row[0])->format('Y-m-d') : null;
        $tanggalSelesai = !empty($row[1]) ? Date::excelToDateTimeObject($row[1])->format('Y-m-d') : null;
        Arp::create([
            'tanggal_mulai' => $tanggalMulai,
            'tanggal_selesai' => $tanggalSelesai,
            'kode' =>$row[2],
            'judul' =>$row[3],
            'jenis_permintaan_diklat' =>$row[4],
            'jenis_pelaksanaan_diklat' =>$row[5],
            'angkatan' =>$row[6],
            'instruktur' =>$row[7],
        ]);
    }
}
