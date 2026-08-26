<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\RegulasiController;
use App\Http\Controllers\InformasiPublikController;
use App\Http\Controllers\TataCaraController;
use App\Http\Controllers\FormulirController;


    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('/profil/ppid', [ProfilController::class, 'ppid'])->name('profil.ppid');

    Route::get('/regulasi', [RegulasiController::class, 'index'])->name('regulasi');

    Route::get('/informasi-publik', [InformasiPublikController::class, 'index'])->name('informasi-publik.index');
    Route::get('/informasi-publik/daftar', [InformasiPublikController::class, 'daftar'])->name('informasi-publik.daftar');
    Route::get('/informasi-publik/rekapitulasi', [InformasiPublikController::class, 'rekapitulasi'])->name('informasi-publik.rekapitulasi');

    Route::get('/tata-cara', [TataCaraController::class, 'index'])->name('tata-cara');


    Route::get('/formulir-permohonan', [FormulirController::class, 'showPermohonan'])->name('formulir.permohonan');
    Route::post('/formulir-permohonan/download', [FormulirController::class, 'downloadPermohonan'])->name('formulir.permohonan.download');

    Route::get('/formulir-keberatan', function () {
        return view('pages.form-viewer', [
            'title'    => 'Formulir Pernyataan Keberatan',
            'pdf_file' => app(\App\Settings\GeneralSettings::class)->file_form_keberatan
        ]);
    })->name('formulir.keberatan');
