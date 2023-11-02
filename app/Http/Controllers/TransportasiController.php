<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransportasiController extends Controller
{
    public function index(){
        return view ('transportasi.index');
    }
}
