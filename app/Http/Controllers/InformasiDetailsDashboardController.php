<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformasiDetailsDashboardController extends Controller
{
    public function index()
    {
        return view('layouts.dashboard.informasi-details');
    }
}
