<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaranaDashboardController extends Controller
{
    public function index()
    {
        return view('layouts.dashboard.sarana');
    }
}
