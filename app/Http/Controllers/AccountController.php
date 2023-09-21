<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function create()
    {
        // Tampilkan formulir pembuatan akun
        return view('account.create');
    }

    public function store(Request $request)
    {
        // Validasi input dan simpan akun
        // Tambahkan logika penyimpanan akun di sini
    }
}
