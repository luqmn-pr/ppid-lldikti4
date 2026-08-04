@extends('layouts.app')

@section('title', 'Daftar Informasi Publik - PPID LLDIKTI Wilayah IV')

@section('content')
<!-- Page Header (Template) -->
<div class="relative pt-32 pb-16 overflow-hidden bg-white border-b border-slate-100">
    <div class="absolute inset-0 bg-gradient-to-br from-blue-50 via-white to-orange-50 pointer-events-none"></div>
    <div class="absolute right-0 top-0 w-[500px] h-[400px] bg-blue-100 rounded-full blur-[120px] opacity-30 pointer-events-none -translate-y-1/2"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="flex items-center gap-2 text-sm text-slate-400 mb-6">
            <a href="{{ route('home') }}" class="hover:text-primary transition-colors">Beranda</a>
            <i class="ph ph-caret-right text-slate-300"></i>
            <a href="{{ route('informasi-publik.index') }}" class="hover:text-primary transition-colors">Informasi Publik</a>
            <i class="ph ph-caret-right text-slate-300"></i>
            <span class="text-slate-600 font-medium">Daftar Informasi Publik</span>
        </div>
        <h1 class="text-3xl md:text-4xl font-extrabold text-slate-800 mb-4 uppercase tracking-tight">Daftar Informasi Publik</h1>
        <div class="w-12 h-1 bg-secondary rounded-full mb-4"></div>
        <p class="text-slate-500 max-w-xl text-base leading-relaxed">Dokumen lengkap mengenai daftar informasi publik yang tersedia dan dikelola oleh PPID LLDIKTI Wilayah IV.</p>
    </div>
</div>

<!-- Content Section -->
<div class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-slate-100 rounded-3xl p-2 border border-slate-200 shadow-inner h-[800px] relative overflow-hidden group">
            <!-- PDF Viewer Placeholder -->
            <iframe src="{{ asset('assets/docs/daftar-informasi-publik.pdf') }}" class="w-full h-full rounded-2xl bg-white relative z-10" title="Daftar Informasi Publik PDF">
            </iframe>
            
            <!-- Fallback visual if no local PDF exists -->
            <div class="absolute inset-0 flex flex-col items-center justify-center bg-white rounded-2xl z-0 pointer-events-none">
                <i class="ph-fill ph-file-pdf text-6xl text-slate-300 mb-4"></i>
                <p class="text-slate-400 font-medium text-lg">Memuat dokumen PDF...</p>
                <p class="text-sm text-slate-400 mt-2">(Jika tidak muncul, pastikan file PDF tersedia di server)</p>
            </div>
        </div>
        
        <div class="mt-6 flex justify-center">
            <a href="{{ asset('assets/docs/daftar-informasi-publik.pdf') }}" target="_blank" class="inline-flex items-center gap-2 bg-primary hover:bg-primary-dark text-white px-6 py-3 rounded-xl font-bold shadow-lg shadow-primary/20 transition-all hover:-translate-y-1">
                <i class="ph-bold ph-download-simple text-xl"></i> Unduh Dokumen
            </a>
        </div>
    </div>
</div>
@endsection
