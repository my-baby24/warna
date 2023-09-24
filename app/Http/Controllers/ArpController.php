<?php

namespace App\Http\Controllers;

use App\Models\Arp;
use Illuminate\Support\Facades\Hash;

use App\Models\ArpRencanaPe;
use League\Csv\Reader;
use App\Models\User;
use App\Models\UabsensiPeserta;
use App\Models\Kelas;
use App\Models\Wisma;
use App\Imports\ArpImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $arp = Arp::orderBy('created_at', 'DESC')->paginate(10);
        $arp = Arp::with('users.udaftarHadir')->orderBy('created_at', 'DESC')->get();
        $kelasOptions = Kelas::pluck('namakelas', 'id');
        $wismaOptions = Wisma::pluck('nama_wisma', 'id');
        // Tambahkan logika untuk menghitung jumlah konfirmasi
    foreach ($arp as &$item) {
        $item->confirmed_count = $item->users->filter(function ($user) {
            return isset($user->udaftarHadir->konfirmasi) && $user->udaftarHadir->konfirmasi == 'iya';
        })->count();
    }
    
        return view('admin.arp.arp', compact('arp', 'kelasOptions', 'wismaOptions'));
    }

    public function aipView(){
        $arp = Arp::all();
        return view('admin.aip.aip', ['arp' => $arp]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelasOptions = Kelas::pluck('namakelas', 'id');
        $wismaOptions = Wisma::pluck('nama_wisma', 'id');
        return view('admin.arp.create', compact('kelasOptions', 'wismaOptions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Tambahkan kode berikut untuk mengatur nilai 'jenis_permintaan_diklat' menjadi null jika input kosong
        $requestData = $request->all();
        $requestData['jenis_permintaan_diklat'] = $request->input('jenis_permintaan_diklat') ?: null;

        $requestData['kelas'] = $request->input('kelas');
        $requestData['wisma'] = $request->input('wisma');

        Arp::create($requestData);

        return redirect()->route('arp.index')->with('success', 'Data Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function showPeserta(Arp $arp, string $id)
    {
        //
        $arp = Arp::with('users.udaftarHadir')->find($id);

        // Sekarang Anda dapat mengakses pengguna yang terkait dengan ARP ini seperti ini:
        $peserta = $arp->users;
        return view('admin.arp.subarp.rencana-peserta', compact('arp', 'peserta'));
    }
    // public function showRealisasi(Arp $arp, string $id)
    // {
    //    // Mengambil data ARP berserta relasi users dan absensiPeserta
    // $arp = Arp::with('users.absensiPeserta')->find($id);

    // if (!$arp) {
    //     // Handle jika ARP dengan ID yang diberikan tidak ditemukan
    //     abort(404);
    // }

    // // Memfilter pengguna yang memiliki status absensi "hadir"
    // $realisasiPeserta = $arp->users->filter(function ($user) {
    //     return isset($user->absensiPeserta->absensi) && $user->absensiPeserta->absensi == 'hadir';
    // });

    // // Mengembalikan view dengan data yang sudah difilter
    // return view('admin.arp.arealisasi_peserta.index', compact('arp', 'realisasiPeserta'));

    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Arp $arp, string $id)
    {
        $arp = Arp::findOrFail($id);
        $kelasOptions = Kelas::pluck('namakelas', 'id');
        $wismaOptions = Wisma::pluck('nama_wisma', 'id');
        return view('admin.arp.edit', compact('arp', 'kelasOptions', 'wismaOptions'));
    }

    
    public function update(Request $request, Arp $arp, string $id)
    {
        try {
            //  dd($request->all());
            // Validasi data input
            // dd($arp->absensi_count);
            $validatedData = $request->validate([
                'tanggal_mulai' => 'required|date',
                'tanggal_selesai' => 'required|date',
                'kode' => 'required|string',
                'judul' => 'required|string',
                'jenis_permintaan_diklat' => 'required|string',
                'jenis_pelaksanaan_diklat' => 'required|string',
                'angkatan' => 'required|string',
                'instruktur' => 'required|string',
                'kelas' => 'required|string',
                'wisma' => 'required|string',
                'persiapan' => 'required|string',
                'pelaksanaan' => 'required|string',
                'pasca' => 'required|string',
                'realisasi_biaya' => 'required|string',
                // ... tambahkan validasi untuk field lainnya jika diperlukan
            ]);

            // Temukan entri yang ingin diperbarui berdasarkan ID
            $arp = Arp::findOrFail($id);


            if (!$arp) {
                return redirect()->back()->with('error', 'Data tidak ditemukan!');
            }

            // Update data ARP
            $arp->tanggal_mulai = $request->tanggal_mulai;
            $arp->tanggal_selesai = $request->tanggal_selesai;
            $arp->kode = $request->kode;
            $arp->judul = $request->judul;
            $arp->jenis_permintaan_diklat = $request->jenis_permintaan_diklat;
            $arp->jenis_pelaksanaan_diklat = $request->jenis_pelaksanaan_diklat;
            $arp->angkatan = $request->angkatan;
            $arp->instruktur = $request->instruktur;
            // 
            $arp->rencana_peserta = $arp->users->count();
            $arp->realisasi_peserta = $arp->hitungAbsensiCount();
            $kelas = Kelas::find($request->kelas);
            if ($kelas) {
                $arp->kelas = $kelas->namakelas;
            }
            $wisma = Wisma::find($request->wisma);
            if ($wisma) {
                $arp->wisma = $wisma->nama_wisma;
            }
            $arp->persiapan = $arp->persentasePersiapan();
            $arp->pelaksanaan = $arp->persentasePelaksanaan();
            $arp->pasca = $arp->persentasePasca();
            $arp->realisasi_biaya = $arp->totalRealisasiBiaya();
            // ... lakukan hal yang sama untuk field lainnya

            // Simpan perubahan ke database
            if ($arp->save()) {
                return redirect()->route('arp.index')->with('success', 'Data berhasil diperbarui!');
            } else {
                return redirect()->back()->with('error', 'Gagal menyimpan data. Silakan coba lagi.');
            }
        } catch (\Throwable $e) {
            // Tangani kesalahan validasi
            return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan periksa kembali data yang Anda masukkan.');
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Arp $arp, string $id)
    {
        $arp = Arp::findOrFail($id);
        $arp->delete();
        return redirect()->route('arp.index')->with('success', 'Data berhasil di hapus.');
    }

    // upload rendiklat
    public function uploadRendiklat(Request $request) {
        $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:csv,xls,xlsx',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        $file = $request->file('file');
        $fileExtension = $file->getClientOriginalExtension();
        // dd($fileExtension);
        if ($fileExtension === 'csv') {
            // Proses file CSV
            $csv = Reader::createFromPath($file->getPathname());
            $csv->setHeaderOffset(0);
            $records = $csv->getRecords();
            foreach ($records as $record) {
                Arp::create([
                    'tanggal_mulai' => date('Y-m-d', strtotime($record['TANGGAL MULAI'])),
                    'tanggal_selesai' => date('Y-m-d', strtotime($record['TANGGAL SELESAI'])),
                    'kode' => $record['KODE'],
                    'judul' => $record['JUDUL'],
                    'jenis_permintaan_diklat' => $record['JENIS PERMINTAAN DIKLAT'],
                    'jenis_pelaksanaan_diklat' => $record['JENIS PELAKSANAAN DIKLAT'],
                    'angkatan' => $record['ANGKATAN'],
                    'instruktur' => $record['INSTRUKTUR'],

                ]);
            }
        } elseif (in_array($fileExtension, ['xls', 'xlsx'])) {
            // Proses file Excel
            try {
                Excel::import(new ArpImport, $file);
            } catch (\Exception $e) {
                \Log::error($e->getMessage());
                $importError = true;
            }
        } else {
            //jika tipe data tidak sesuai
            return redirect()->back()->with('error', 'Gagal! Format data anda salah. Hanya file CSV, XLS, dan XLSX yang diizinkan.');
        }
        return redirect()->route('arp.index')->with('success', 'File berhasil diunggah dan data berhasil diproses.');
    }

    // upload peserta
    public function uploadPeserta(Request $request)
    {
        $arpId = $request->input('arp_id'); // Mendapatkan input arp id
        // dd($arpId);
        // Validasi file peserta
        $validator = $request->validate([
            'file_peserta' => 'required|mimes:csv,xls,xlsx',
        ]);
        // Dapatkan file peserta
        $filePeserta = $request->file('file_peserta');
        // dd([
        //     'filePeserta' => $filePeserta,
        //     'arp_id' => $arp_id,
        // ]);

        // mengimpor data peserta
        $fileExtension = $filePeserta->getClientOriginalExtension();
        $importError = false; //variable error
        if ($fileExtension === 'csv') {
            // Proses file CSV
            $csv = Reader::createFromPath($filePeserta->getPathname());
            $csv->setHeaderOffset(0);
            $records = $csv->getRecords();
            //kata sandi default
            $defaultPassword = Hash::make('12345678');
            foreach ($records as $record) {
                try {
                    User::create([
                        'name' => $record['NAMA'],
                        'email' => $record['EMAIL'],
                        'password' => $defaultPassword,
                        'nip' => $record['NIP'],
                        'jabatan' => $record['JABATAN'],
                        'unit_induk' => $record['UNIT INDUK'],
                        'unit_pelaksana' => $record['UNIT PELAKSANA'],
                        'no_hp' => $record['NO HP'],
                        'arp_id' => $arpId
                    ]);
                } catch (\Exception $e) {
                    // Tangani kesalahan pengecualian untuk email duplikat
                    // return redirect()->route('arp')->with('error', 'Email sudah ada dalam database.');
                    $importError = true;
                }
            }
        } elseif (in_array($fileExtension, ['xls', 'xlsx'])) {
            // Proses file Excel
            try {
                Excel::import(new UserController, $filePeserta);
            } catch (\Exception $e) {
                // Tangani kesalahan pengecualian untuk email duplikat
                // return redirect()->route('arp')->with('error', 'Email sudah ada dalam database.');
                // Tampilkan pesan kesalahan atau log pesan kesalahan ke file log Laravel
                \Log::error($e->getMessage());
                $importError = true;
            }
        } else {
            // Tipe file tidak sesuai
            return redirect()->back()->with('error', 'Gagal! Format data Anda salah. Hanya file CSV, XLS, dan XLSX yang diizinkan.');
        }
        if ($importError) {
            return redirect()->route('arp.index')->with('error', 'Terjadi kesalahan saat mengunggah file peserta. Pastikan tidak ada email yang sama dan periksa data anda.');
        } else {
            // Pesan sukses hanya ditampilkan jika tidak ada kesalahan
            return redirect()->route('arp.index')->with('success', 'File berhasil diunggah dan data berhasil diproses.');
        }

        // Redirect kembali ke tampilan ARP atau tampilan yang sesuai
        return redirect()->route('arp.index');
    }

    // public function asdas(Request $request, string $id){
    //     try {
    //     $validatedDataArp = $request->validate([
    //         'tanggal_mulai' => 'required|date',
    //         'tanggal_selesai' => 'required|date',
    //         'kode' => 'required|string',
    //         'judul' => 'required|string',
    //         'jenis_permintaan_diklat' => 'required|string',
    //         'jenis_pelaksanaan_diklat' => 'required|string',
    //         'angkatan' => 'required|integer',
    //         'instruktur' => 'required|string',
    //         'rencana_peserta' => 'required|string',
    //         'realisasi_peserta' => 'required|string',
    //         'kelas' => 'required|string',
    //         'wisma' => 'required|string',
    //         'persiapan' => 'required|string',
    //         'pelaksanaan' => 'required|string',
    //         'pasca' => 'required|string',
    //         'realisasi_biaya' => 'required|string',
    //     ]);
    //     dd([
    //         'id' => $id,
    //         'validatedDataArp' => $validatedDataArp,
    //     ]); 
    //     // $arp = Arp::findOrFail($id);
    //     // $arp->update($validatedDataArp);
    //     return redirect()->route('arp.index')->with('success', 'Data berhasil disimpan.');
    // } catch (\Exception $e) {
    //     return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
    // }
    
    //     // return redirect()->route('arp.index')->with('success', 'data berhasil di simpan.');
    // }
    public function saveArp(Request $request, $id) 
    {
        try {
            $name = $request->input('name');
        $arpId = explode('_', $name)[2];
            // Validasi data input
            $validatedData = $request->validate([
                'tanggal_mulai' => 'required|date',
                'tanggal_selesai' => 'required|date',
                'kode' => 'required|string',
                'judul' => 'required|string',
                'jenis_permintaan_diklat' => 'required|string',
                'jenis_pelaksanaan_diklat' => 'required|string',
                'angkatan' => 'required|string',
                'instruktur' => 'required|string',
                'rencana_peserta' => 'required|string',
                'realisasi_peserta' => 'required|string',
                'kelas' => 'required|string',
                'wisma' => 'required|string',
                // ... tambahkan validasi untuk field lainnya jika diperlukan
            ]);
    
            // Temukan entri yang ingin diperbarui berdasarkan ID
            $arp = Arp::find($id);
    
            if (!$arp) {
                return redirect()->back()->with('error', 'Data tidak ditemukan!');
            }
    
            // Update data ARP
            $arp->tanggal_mulai = $request->tanggal_mulai;
            $arp->tanggal_selesai = $request->tanggal_selesai;
            $arp->kode = $request->kode;
            $arp->judul = $request->judul;
            $arp->jenis_permintaan_diklat = $request->jenis_permintaan_diklat;
            $arp->jenis_pelaksanaan_diklat = $request->jenis_pelaksanaan_diklat;
            $arp->angkatan = $request->angkatan;
            $arp->instruktur = $request->instruktur;
            $arp->rencana_peserta = $request->rencana_peserta;
            $arp->realisasi_peserta = $request->realisasi_peserta;
            $arp->kelas = $request->kelas;
            $arp->wisma = $request->wisma;
            $arp->persiapan = $arp->persentasePersiapan();
            $arp->pelaksanaan = $arp->persentasePelaksanaan();
            $arp->pasca = $arp->persentasePasca();
            $arp->realisasi_biaya = $arp->totalRealisasiBiaya();
            // ... lakukan hal yang sama untuk field lainnya
    
            // Simpan perubahan ke database
            if ($arp->save()) {
                return redirect()->back()->with('success', 'Data berhasil diperbarui!');
            } else {
                return redirect()->back()->with('error', 'Gagal menyimpan data. Silakan coba lagi.');
            }
        } catch (\Throwable $e) {
            // Tangani kesalahan validasi
            return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan periksa kembali data yang Anda masukkan.');
        }
    }
    
    
    
}
