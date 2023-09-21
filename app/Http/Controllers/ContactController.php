<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contact = Contact::all();
        return view('admin.contact.index', compact('contact'));
        
    }

    public function create()
    {
        return view('kelas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_visit' => 'required',
            'email_visit' => 'required',
            'pesan' => 'required',
            'status' => 'required'
        ]);

        Contact::create($request->all());

        return redirect()->route('admin.contact.index')->with('success', 'Kelas created successfully.');
    } 
}


