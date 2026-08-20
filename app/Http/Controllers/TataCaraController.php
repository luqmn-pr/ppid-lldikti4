<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TataCaraController extends Controller
{
    public function index()
    {
        $tataCaras = \App\Models\TataCara::orderBy('urutan')->get();
        return view('pages.tata-cara', compact('tataCaras'));
    }
}
