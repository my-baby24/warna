<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UdaftarHadir;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class UdaftarHadirController extends Controller
{
    public function index()
    {
        // $currentHour = Carbon::now()->hour;

        // Mengecek apakah jam saat ini berada di antara jam 07:00 dan 14:00
        // if ($currentHour >= 7 && $currentHour < 14) {
            return view('user.udh');
        // } else {
        //     return redirect()->route('dashboard')->with('error', 'Maaf, waktu daftar hadir hanya dari jam 07:00 sampai 14:00.');
        // }
    }
    public function store(Request $request)
{
    // $currentHour = Carbon::now()->hour;
    $currentHour = Carbon::now('Asia/Jakarta')->hour;


    if ($currentHour < 0 || $currentHour >= 14) {
        return redirect()->route('udh.index')->with('error', 'Maaf, waktu daftar hadir hanya dari jam 07:00 sampai 14:00.');
    }
    // Pastikan pengguna telah login
    if (Auth::check()) {
        $user = Auth::user();

        // Periksa apakah pengguna sudah mengambil absen
        if (!$user->hasTakenAbsensi()) {
            // Validasi input
            $validatedData = $request->validate([
                'konfirmasi' => 'required|in:iya,tidak'
            ]);

            // Tambahkan informasi NIP dan Nama dari pengguna
            $validatedData['nip'] = $user->nip;
            $validatedData['nama'] = $user->name;
            $validatedData['user_id'] = auth()->user()->id;

            // Simpan data ke database
            // dd($validatedData, $user);
            UdaftarHadir::create($validatedData);

            return redirect()->route('udh.index')->with('success', 'Data berhasil disimpan!');
        }
    }

    return redirect()->route('udh.index')->with('error', 'Anda sudah mengambil absen.');
}



}