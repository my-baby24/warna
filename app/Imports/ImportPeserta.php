<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ImportPeserta implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    protected $request;

    public function __construct($request)
    {
        $this->request = $request;
    }

    // ... (kode lainnya)

    public function model(array $row)
    {
        $arpId = $this->request->input('arp_id');
        $defaultPassword = Hash::make('12345678');
        return new User([
            'name' => $row[0],
            'email' => $row[1],
            'password' => $defaultPassword,
            'nip' => $row[2],
            'jabatan' => $row[3],
            'unit_induk' => $row[4],
            'unit_pelaksana' => $row[5],
            'no_hp' => $row[6],
            'arp_id' => $arpId,
        ]);
    }
}
