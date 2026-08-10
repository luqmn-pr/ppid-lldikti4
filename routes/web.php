<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\RegulasiController;
use App\Http\Controllers\InformasiPublikController;
use App\Http\Controllers\TataCaraController;
use App\Http\Controllers\DataInformasiController;

Route::get('/debug-php', function () {
    return [
        'php_ini' => php_ini_loaded_file(),
        'upload_tmp_dir' => ini_get('upload_tmp_dir'),
        'sys_temp_dir' => ini_get('sys_temp_dir'),
        'sys_get_temp_dir' => sys_get_temp_dir(),
    ];
});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/profil/ppid', [ProfilController::class, 'ppid'])->name('profil.ppid');

Route::get('/regulasi', [RegulasiController::class, 'index'])->name('regulasi');

Route::get('/informasi-publik', [InformasiPublikController::class, 'index'])->name('informasi-publik.index');
Route::get('/informasi-publik/daftar', [InformasiPublikController::class, 'daftar'])->name('informasi-publik.daftar');
Route::get('/informasi-publik/maklumat', [InformasiPublikController::class, 'maklumat'])->name('informasi-publik.maklumat');
Route::get('/informasi-publik/rekapitulasi', [InformasiPublikController::class, 'rekapitulasi'])->name('informasi-publik.rekapitulasi');

Route::get('/tata-cara', [TataCaraController::class, 'index'])->name('tata-cara');

Route::get('/data-informasi', [DataInformasiController::class, 'index'])->name('data-informasi');

Route::get('/formulir-permohonan', function () {
    return view('pages.form-viewer', [
        'title' => 'Formulir Permohonan Informasi',
        'pdf_file' => app(\App\Settings\GeneralSettings::class)->file_form_permohonan
    ]);
})->name('formulir.permohonan');

Route::get('/formulir-keberatan', function () {
    return view('pages.form-viewer', [
        'title' => 'Formulir Pernyataan Keberatan',
        'pdf_file' => app(\App\Settings\GeneralSettings::class)->file_form_keberatan
    ]);
})->name('formulir.keberatan');
