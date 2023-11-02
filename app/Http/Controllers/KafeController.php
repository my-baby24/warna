<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KafeController extends Controller
{
    public function index(){
        return view ('kafe.index');
    }
}
