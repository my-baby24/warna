<?php

namespace App\Http\Controllers;
use App\Models\Informasi;

use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function index(){
        $informasis = Informasi::all();
        return view('admin.informasi.index', compact('informasis'));
    }

    public function create()
    {
        return view('admin.informasi.create'); // Perbaikan typo di sini
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi tipe dan ukuran gambar
            'keterangan' => 'required'
        ]);

        // Mengunggah gambar ke direktori penyimpanan
        $fotoPath = $request->file('foto')->store('storage/assets/informasi');

        // Menyimpan data ke database
        Informasi::create([
            'judul' => $request->input('judul'),
            'foto' => $fotoPath, // Menyimpan nama file gambar
            'keterangan' => $request->input('keterangan')
        ]);
        return redirect()->route('informasiadmin.admin')->with('success', 'Data berhasi ditambahkan.');

    }  

    public function edit(Request $request, string $id){
        
        $request->validate([
            'judul'=> 'required',
            'foto'=> 'required',
            'keterangan'=> 'required'
        ]);
        $informasi = Informasi::findOrFail($id);
        $informasi->judul = $request->input('judul');
        $informasi->foto = $request->input('foto');
        $informasi->keterangan = $request->input('keterangan');
        $informasi->save();
        return redirect()->route('informasiadmin.admin')->with('success', 'Data kelas berhasil diperbarui!');
    }

    public function destroy(string $id){
        $informasi = Informasi::findOrFail($id);
        $informasi->delete();
        return redirect()->route('informasiadmin.admin')->with('success', 'Data Informasi berhasil dihapus!');
    }
}
