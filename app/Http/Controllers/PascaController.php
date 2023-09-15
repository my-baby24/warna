<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PascaController extends Controller
{
    public function index(){
        return view ('admin.arp.pasca.index');
    }
}
