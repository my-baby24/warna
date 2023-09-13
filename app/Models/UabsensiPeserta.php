<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UabsensiPeserta extends Model
{
    use HasFactory;
    protected $fillable =[
        'nip',
        'nama',
        'judul',
        'jenis_permintaan_diklat',
        'tanggal_absensi',
        'penggantian_kuota',
        'no_hp',
        'absensi',
        'user_id',
    ];

    //relasi
}
