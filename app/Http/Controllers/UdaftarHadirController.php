<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UdaftarHadirController extends Controller
{
    public function index(){
        return view('user.udh');
    }
}
