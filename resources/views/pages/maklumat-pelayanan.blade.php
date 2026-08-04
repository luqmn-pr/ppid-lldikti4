@extends('layouts.app')

@section('title', 'Maklumat Pelayanan - PPID LLDIKTI Wilayah IV')

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
            <span class="text-slate-600 font-medium">Maklumat Pelayanan</span>
        </div>
        <h1 class="text-3xl md:text-4xl font-extrabold text-slate-800 mb-4 uppercase tracking-tight">Maklumat Pelayanan</h1>
        <div class="w-12 h-1 bg-secondary rounded-full mb-4"></div>
        <p class="text-slate-500 max-w-xl text-base leading-relaxed">Janji dan komitmen kami dalam memberikan pelayanan informasi publik yang prima sesuai standar yang ditetapkan.</p>
    </div>
</div>

<!-- Content Section -->
<div class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-[2rem] p-4 sm:p-6 shadow-2xl shadow-primary/10 border border-slate-100 mx-auto max-w-3xl transform transition-transform hover:scale-[1.01] duration-500">
            <!-- Replace src with the actual image path from the screenshot later -->
            <img src="{{ asset('storage/Maklumat-Pelayanan-PAKTA-INTEGRITAS-2025-REV-1.png') }}" 
                 alt="Maklumat Pelayanan Informasi Publik" 
                 class="w-full h-auto rounded-[1.5rem] shadow-sm">
        </div>
        
        <div class="mt-12 text-center max-w-2xl mx-auto">
            <i class="ph-fill ph-quotes text-4xl text-slate-200 mb-4 inline-block"></i>
            <p class="text-lg font-medium text-slate-600 italic">"Kami Pejabat Pengelola Informasi dan Dokumentasi Lembaga Layanan Pendidikan Tinggi Wilayah IV berkomitmen untuk memberikan pelayanan informasi publik yang prima..."</p>
        </div>
    </div>
</div>
@endsection
