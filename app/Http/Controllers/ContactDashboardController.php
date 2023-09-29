<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class ContactDashboardController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama_visit' => 'required',
            'email_visit' => 'required|email',
            'subject' => 'required',
            'pesan' => 'required',
            'status' => 'required'
        ]);

        Contact::create($request->all());

        return redirect()->route('contact.dashboard.index')->with('success', 'Contact berhasil dibuat.');
    }

    public function index()
    {
        $contacts = Contact::all();
        return view('layouts.dashboard.contact', compact('contacts'));
    }

}
