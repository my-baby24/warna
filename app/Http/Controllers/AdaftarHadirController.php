<?php

namespace App\Http\Controllers;

use App\Models\Adh;
use App\Models\UabsensiPeserta;
use App\Models\TelatAbsen;

use Illuminate\Http\Request;

class AdaftarHadirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $adhs = Adh::orderBy('created_at', 'DESC')->get();
        $absensiPeserta = UabsensiPeserta::all();
        return view('admin.adh.adh', compact('absensiPeserta'));
    }

    public function pengajuan(){
        $telatAbsen = TelatAbsen::all();
        return view('admin.adh.pengajuan.index', compact('telatAbsen'));
    }
    
    public function terimaAjukan(Request $request)
{
    try {
        $absensiPeserta = new UabsensiPeserta();
        $absensiPeserta->nip = $request->input('nip');
        $absensiPeserta->nama = $request->input('nama');
        $absensiPeserta->judul = $request->input('judul');
        $absensiPeserta->jenis_permintaan_diklat = $request->input('alasan_permintaan_diklat'); // Perbaikan disesuaikan dengan nama input field
        $absensiPeserta->tanggal_absensi = $request->input('tanggal_absensi');
        $absensiPeserta->penggantian_kuota = $request->input('penggantian_kuota');
        $absensiPeserta->no_hp = $request->input('no_hp');
        $absensiPeserta->absensi = $request->input('absensi');
        $absensiPeserta->user_id = $request->input('user_id');
        
        if ($absensiPeserta->save()) {
            return redirect()->back()->with('success', 'Pengajuan telat absen berhasil.');
        } else {
            return redirect()->back()->with('error', 'Gagal mengajukan telat absen.');
        }
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
    }
}
}
