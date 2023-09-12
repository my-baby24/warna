<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformasiDashboardController extends Controller
{
    public function index()
    {
        return view('layouts.dashboard.informasi');
    }
}
