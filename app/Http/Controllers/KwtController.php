<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KwtController extends Controller
{
    public function index(){
        return view ('layouts.kwt.dashboard.index');
    }
}
