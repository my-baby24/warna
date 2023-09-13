<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UabsensiPesertaController extends Controller
{
    public function index(){
        return view ('user.absensi-peserta');
    }
}
