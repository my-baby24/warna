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
    public function storeRealisasi(Request $request){
        $request->validate([
            'verifikasi.*' => 'required|in:verif,tidak',
        ]);
        dd([
            'nip' => $request->nip,
            'nama' => $request->name,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
            'kode' => $request->kode,
            'judul' => $request->judul,
            'angkatan' => $request->angkatan,
            'verifikasi' => $request->verifikasi,
            'absensi' => $request->absensi,
        ]);
    }
    public function cth(Request $request)
    {
        $request->validate([
            'verifikasi' => 'required|in:verif,tidak',
        ]);
    
        $results = []; // Array untuk menyimpan data
    
        // Loop melalui data yang dikirimkan dari formulir
        foreach ($request->input('verifikasi') as $userId => $verifikasi) {
            // Dapatkan data pengguna dan ARP yang sesuai dengan ID pengguna
            $user = User::findOrFail($userId);
            $arp = $user->arp;
    
            // Update status verifikasi untuk pengguna tertentu
            $user->absensiPeserta->update(['verifikasi' => $verifikasi]);
    
            // Menambahkan data ke dalam array results
            $results[] = [
                'nip' => $user->nip,
                'nama' => $user->name,
                'tanggal_mulai' => $arp->tanggal_mulai,
                'tanggal_selesai' => $arp->tanggal_selesai,
                'kode' => $arp->kode,
                'judul' => $arp->judul,
                'angkatan' => $arp->angkatan,
                'verifikasi' => $request->verifikasi,
                'absensi' => $user->absensiPeserta->absensi,
            ];
        }
    
        dd($results); // Menampilkan semua data
    }
    

}
