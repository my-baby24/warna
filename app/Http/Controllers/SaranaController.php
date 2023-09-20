<?php

namespace App\Http\Controllers;
use App\Models\Sarana;

use Illuminate\Http\Request;

class SaranaController extends Controller
{
    public function index(){
        $saranas = Sarana::all();
        return view('admin.sarana.index', compact('saranas'));
    }

    public function create()
    {
        return view('admin.sarana.create'); // Perbaikan typo di sini
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi tipe dan ukuran gambar
            'keterangan' => 'required'
        ]);

        // Mengunggah gambar ke direktori penyimpanan
        $fotoPath = $request->file('foto')->store('storage/assets/sarana');

        // Menyimpan data ke database
        Sarana::create([
            'judul' => $request->input('judul'),
            'foto' => $fotoPath, // Menyimpan nama file gambar
            'keterangan' => $request->input('keterangan')
        ]);

        return redirect()->route('sarana.admin')->with('success', 'Sarana created successfully.');
    }  
}
