<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArealisasiPesertaController extends Controller
{
    public function index(){
        return view('admin.arp.arealisasi_peserta.index');
    }
}
