<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactDashboardController extends Controller
{
    public function index()
    {
        return view('layouts.dashboard.contact');
    }
}
