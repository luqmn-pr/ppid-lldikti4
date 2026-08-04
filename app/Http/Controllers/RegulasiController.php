<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegulasiController extends Controller
{
    public function index()
    {
        $regulasis = \App\Models\Regulasi::where('is_active', true)->get();
        return view('pages.regulasi', compact('regulasis'));
    }
}
