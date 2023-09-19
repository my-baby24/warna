<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WismaController extends Controller
{
    public function index(){
        return view ('admin.wisma.index');
    }
}
