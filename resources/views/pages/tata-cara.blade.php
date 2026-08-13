@extends('layouts.app')

@section('title', 'Tata Cara - PPID LLDIKTI Wilayah IV')

@section('content')
<!-- Page Header (Template) -->
<div class="relative pt-32 pb-16 overflow-hidden bg-white border-b border-slate-100">
    <div class="absolute inset-0 bg-gradient-to-br from-blue-50 via-white to-orange-50 pointer-events-none"></div>
    <div class="absolute right-0 top-0 w-[500px] h-[400px] bg-blue-100 rounded-full blur-[120px] opacity-30 pointer-events-none -translate-y-1/2"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="flex items-center gap-2 text-sm text-slate-400 mb-6">
            <a href="{{ route('home') }}" class="hover:text-primary transition-colors">Beranda</a>
            <i class="ph ph-caret-right text-slate-300"></i>
            <span class="text-slate-600 font-medium">Tata Cara</span>
        </div>
        <h1 class="text-3xl md:text-4xl font-extrabold text-slate-800 mb-4 uppercase tracking-tight">Tata Cara</h1>
        <div class="w-12 h-1 bg-secondary rounded-full mb-4"></div>
        <p class="text-slate-500 max-w-xl text-base leading-relaxed">Panduan lengkap mengenai tata cara permohonan, pengajuan keberatan, dan penyelesaian sengketa informasi.</p>
    </div>
</div>

<!-- Content Section -->
<div class="py-24 bg-white min-h-[50vh] flex flex-col items-center justify-center">
    <div class="max-w-3xl mx-auto px-4 text-center">
        
        <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-slate-50 mb-6">
            <i class="ph-fill ph-hourglass-medium text-4xl text-slate-400"></i>
        </div>
        
        <h2 class="text-2xl font-bold text-slate-700 mb-3">Tata Cara</h2>
        <p class="text-slate-500 text-lg">Menyusul, dibikin dulu nanti</p>

    </div>
</div>
@endsection
