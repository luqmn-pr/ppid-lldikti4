<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformasiPublikController extends Controller
{
    public function index()
    {
        $setiapSaat = \App\Models\InformasiPublik::where('kategori', 'setiap_saat')->get();
        $berkala = \App\Models\InformasiPublik::where('kategori', 'berkala')->get();
        $sertaMerta = \App\Models\InformasiPublik::where('kategori', 'serta_merta')->get();

        return view('pages.informasi-publik', compact('setiapSaat', 'berkala', 'sertaMerta'));
    }

    public function daftar()
    {
        return view('pages.daftar-informasi-publik');
    }

    public function rekapitulasi()
    {
        $rekapitulasis = \App\Models\Rekapitulasi::orderBy('tahun', 'desc')->get();
        return view('pages.rekapitulasi', compact('rekapitulasis'));
    }
}
