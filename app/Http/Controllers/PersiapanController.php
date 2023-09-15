<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersiapanController extends Controller
{
    public function index(){
        return view ('admin.arp.persiapan.index');
    }
}
