<?php

namespace App\Http\Controllers;

use App\Models\Eskul;
use Illuminate\Http\Request;

class EskulController extends Controller
{
     public function index()
    {
        $eskul = Eskul::all();

        return view('eskul', compact('eskul'));
    }
}
