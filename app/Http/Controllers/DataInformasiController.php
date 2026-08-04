<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataInformasiController extends Controller
{
    public function index()
    {
        return view('pages.data-informasi');
    }
}
