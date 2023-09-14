<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArealisasiPeserta;
use App\Models\Arp;
use App\Models\User;

class ArealisasiPesertaController extends Controller
{
    public function index(){
        // $realisasi = Arealisasi_peserta::with('users.uabsensiPeserta')->orderBy('created_at', 'DESC')->get();
        // return view('admin.arp.arealisasi_peserta.index', compact('realisasi'));
        $arps = Arp::has('users.absensiPeserta')->get();

        return view('admin.arp.arealisasi_peserta.index', compact('arps'));
    }

    public function showRealisasi(Arp $arp, string $id)
    {
       // Mengambil data ARP berserta relasi users dan absensiPeserta
        $arp = Arp::with('users.absensiPeserta')->find($id);
        if (!$arp) {
            // Handle jika ARP dengan ID yang diberikan tidak ditemukan
            abort(404);
        }
        // Memfilter pengguna yang memiliki status absensi "hadir"
        $realisasiPeserta = $arp->users->filter(function ($user) {
            return isset($user->absensiPeserta->absensi) && $user->absensiPeserta->absensi == 'hadir';
        });
        // Mengembalikan view dengan data yang sudah difilter
        return view('admin.arp.arealisasi_peserta.index', compact('arp', 'realisasiPeserta'));
    }
   
    // public function storeRealisasi(Request $request){
    //     // dd($request->all()); 
    //     $request->validate([
    //         'nip.*' => 'required|string',
    //         'name.*' => 'required|string',
    //         'tanggal_mulai.*' => 'required|date',
    //         'tanggal_selesai.*' => 'required|date',
    //         'kode.*' => 'required|string',
    //         'judul.*' => 'required|string',
    //         'angkatan.*' => 'required|integer',
    //         'verifikasi.*' => 'required|in:verif,tidak',
    //         'absensi.*' => 'required|string',
    //     ]);
    
    //     foreach ($request->nip as $userId => $nip) {
    //         $user = User::find($userId);
    //         $arp = $user->arp;
    //         ArealisasiPeserta::create([
    //             'nip' => $nip,
    //             'nama' => $request->name[$userId],
    //             'tanggal_mulai' => $arp->tanggal_mulai,
    //             'tanggal_selesai' => $arp->tanggal_selesai,
    //             'kode' => $arp->kode,
    //             'judul' => $arp->judul,
    //             'angkatan' => $arp->angkatan,
    //             'verifikasi' => $request->verifikasi[$userId],
    //             'absensi' => $request->absensi[$userId],
    //             'arp_id' => $arp->id,
    //         ]);
            
    //     }
    //     return redirect()->route('show.realisasi', ['id'=>$arp])->with('success', 'Absensi berhasil disimpan!');
    // }
    public function storeRealisasi(Request $request){
        $request->validate([
            'nip.*' => 'required|string',
            'name.*' => 'required|string',
            'tanggal_mulai.*' => 'required|date',
            'tanggal_selesai.*' => 'required|date',
            'kode.*' => 'required|string',
            'judul.*' => 'required|string',
            'angkatan.*' => 'required|integer',
            'verifikasi.*' => 'required|in:verif,tidak',
            'absensi.*' => 'required|string',
            'tanggal_absensi.*' => 'required|date',
        ]);
    
        foreach ($request->nip as $userId => $nip) {
            $user = User::find($userId);
            $arp = $user->arp;
    
            // Cari catatan yang sudah ada berdasarkan ARP_ID dan ID Pengguna
            $existingRecord = ArealisasiPeserta::where('arp_id', $arp->id)
                ->where('nip', $nip)
                ->where('tanggal_absensi', $request->tanggal_absensi[$userId])
                ->first();

    
            // Jika catatan belum ada, buat catatan baru
            if (!$existingRecord) {
                ArealisasiPeserta::create([
                    'nip' => $nip,
                    'nama' => $request->name[$userId],
                    'tanggal_mulai' => $arp->tanggal_mulai,
                    'tanggal_selesai' => $arp->tanggal_selesai,
                    'kode' => $arp->kode,
                    'judul' => $arp->judul,
                    'angkatan' => $arp->angkatan,
                    'verifikasi' => $request->verifikasi[$userId],
                    'absensi' => $request->absensi[$userId],
                    'tanggal_absensi' => $request->tanggal_absensi[$userId],
                    'arp_id' => $arp->id,
                ]);
            }
        }
        session()->flash('message', 'Data baru berhasil ditambahkan');
        // Pindahkan pernyataan redirect ke luar dari loop
        return redirect()->route('show.realisasi', ['id'=>$arp])->with('success', 'Absensi berhasil disimpan!');
    }
    
    
   
    

}
