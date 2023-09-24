<?php

namespace App\Models;

use App\Models\ArpRencanaPe;
use App\Models\User;
use App\Models\Persiapan;
use App\Models\Pelaksanaan;
use App\Models\Kelas;
use App\Models\Wisma;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arp extends Model
{
    use HasFactory;
    protected $table = 'arp';

    protected $fillable = [
        'tanggal_mulai',
        'tanggal_selesai',
        'kode',
        'judul',
        'jenis_permintaan_diklat',
        'jenis_pelaksanaan_diklat',
        'angkatan',
        'instruktur',
        'rencana_peserta',
        'realisasi_peserta',
        'kelas',
        'wisma',
        'persiapan',
        'pelaksanaan',
        'pasca',
        'realisasi_biaya',
        'aksi',
    ];


     // Relasi One-to-Many ke model User
     public function users()
     {
         return $this->hasMany(User::class, 'arp_id', 'id');
     }
     public function Persiapans()
     {
        return $this->hasMany(Persiapan::class);
    }

    public function persentasePersiapan()
    {
        $totalKegiatan = $this->Persiapans->count();
        $totalCeklist = $this->Persiapans->where('ceklist', 'Selesai')->count();
        if ($totalKegiatan == 0) {
            return 0;
        }
        return round(($totalCeklist / $totalKegiatan) * 100);
    }

    public function Pelaksanaans()
     {
        return $this->hasMany(Pelaksanaan::class);
    }

    public function persentasePelaksanaan()
    {
        $totalKegiatan = $this->Pelaksanaans->count();
        $totalCeklist = $this->Pelaksanaans->where('ceklist', 'Selesai')->count();
        if ($totalKegiatan == 0) {
            return 0;
        }
        return round(($totalCeklist / $totalKegiatan) * 100);
    }

    public function Pascas()
     {
        return $this->hasMany(Pasca::class);
    }

    public function persentasePasca()
    {
        $totalKegiatan = $this->Pascas->count();
        $totalCeklist = $this->Pascas->where('ceklist', 'Selesai')->count();
        if ($totalKegiatan == 0) {
            return 0;
        }
        return round(($totalCeklist / $totalKegiatan) * 100);
    }
    
    public function RealisasiBiayas()
     {
        return $this->hasMany(RealisasiBiaya::class);
    }

    
    public function totalRealisasiBiaya()
    {
        return $this->RealisasiBiayas->sum('ceklist');
    }

    // Di dalam model Arp.php

public function hitungAbsensiCount()
{
    return $this->users->filter(function ($user) {
        return isset($user->absensiPeserta->absensi) && $user->absensiPeserta->absensi == 'hadir';
    })->count();
}


// Di dalam model Arp.php

public function kelas()
{
    return $this->belongsTo(Kelas::class, 'kelas');
}

public function wisma()
{
    return $this->belongsTo(Wisma::class, 'wisma');
}


    
}
