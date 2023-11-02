<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PolehController extends Controller
{
    public function index(){
        return view ('poleh.index');
    }
}
