<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Arp;
use App\Models\UdaftarHadir;
use App\Models\UabsensiPeserta;
use App\Models\ArealisasiPeserta;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'nip',
        'jabatan',
        'unit_induk',
        'unit_pelaksana',
        'no_hp',
        'arp_id',

    ];
    // Relasi Many-to-One ke model Arp
    public function arp()
    {
        return $this->belongsTo(Arp::class, 'arp_id', 'id');
        // return $this->belongsTo(Arp::class, 'arp_id', 'id');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function absensi()
    {
        return $this->hasMany(UdaftarHadir::class); // Sesuaikan dengan nama model Absensi Anda.
    }
    public function hasTakenAbsensi()
    {
        // Gantilah dengan logika sesuai dengan struktur tabel dan data absensi Anda.
        return $this->absensi()->exists(); // `absensi` adalah relasi ke data absensi pengguna.
    }
    public function udaftarHadir()
    {
        return $this->hasOne(UdaftarHadir::class, 'user_id', 'id');
    }

    public function absensiPeserta(){
        return $this->hasOne(UabsensiPeserta::class, 'user_id', 'id');
    }


}
