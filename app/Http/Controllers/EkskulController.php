<?php

namespace App\Http\Controllers;

use App\Models\Ekskul;
use Illuminate\Http\Request;

class EskulController extends Controller
{
     public function index()
    {
        $ekskuls = Ekskul::orderBy('created_at', 'desc')->get();
        return view('ekskul.index', compact('ekskuls'));
    }

    public function create()
    {
        return view('ekskul.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:4096',
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255'

        ]);

        $path = null;
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('ekskul', 'public');
        }

        Ekskul::create([
            'foto' => $path ? basename($path) : null,
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect()->route('ekskul.index')->with('success', 'Ekstrakurikuler berhasil ditambahkan');
    }

     public function ekstrakurikuler()
    {
        $ekskuls = Ekskul::orderBy('created_at', 'desc')->get();
        return view('ekstrakurikuler', compact('ekskuls'));
    }
}
