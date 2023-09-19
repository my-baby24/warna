<?php

namespace App\Http\Controllers;
use App\Models\Wisma;

use Illuminate\Http\Request;

class WismaController extends Controller
{
    public function index(){
        $wismas = Wisma::all();
        return view('admin.wisma.index', compact('wismas'));
        
    }

    public function create()
    {
        return view('wismas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_wisma' => 'required',
            'nama_wisma' => 'required',
        ]);

        Wisma::create($request->all());

        return redirect()->route('admin.wisma.index')->with('success', 'Wisma created successfully.');
    }   

    // public function edit(Wisma $wisma)
    // {
    //     // return view('wismas.edit', compact('wisma'));
    // }

    // public function update(Request $request, Wisma $wisma)
    // {
    //     $request->validate([
    //         'no_wisma' => 'required',
    //         'nama_wisma' => 'required',
    //     ]);

    //     $wisma->update($request->all());

    //     return redirect()->route('wismas.index')->with('success', 'Wisma updated successfully.');
    // }

    // public function destroy(Wisma $wisma)
    // {
    //     $wisma->delete();

    //     return redirect()->route('wismas.index')->with('success', 'Wisma deleted successfully.');
    // }

}


