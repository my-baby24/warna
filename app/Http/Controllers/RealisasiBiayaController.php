<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RealisasiBiayaController extends Controller
{
    public function index(){
        return view ('admin.arp.realisasi_biaya.index');
    }
}
