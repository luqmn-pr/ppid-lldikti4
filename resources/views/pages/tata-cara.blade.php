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
<div class="py-20 bg-white min-h-[50vh]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- Card 1 -->
            <a href="#" class="bg-white rounded-3xl p-8 border border-slate-100 shadow-xl shadow-slate-200/50 hover:-translate-y-2 hover:shadow-2xl hover:shadow-primary/20 transition-all duration-300 group flex flex-col items-center text-center relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-b from-blue-50/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                <!-- Mock Icon -->
                <div class="w-32 h-32 mb-8 relative z-10">
                    <img src="https://img.freepik.com/free-vector/contact-center-abstract-concept-vector-illustration_107173-24953.jpg?w=740" class="w-full h-full object-contain mix-blend-multiply" alt="Icon Permohonan">
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-4 relative z-10 group-hover:text-primary transition-colors">Tata Cara Permohonan Informasi</h3>
                <div class="w-8 h-1 bg-slate-200 rounded-full mt-auto mb-4 group-hover:bg-primary group-hover:w-16 transition-all duration-300 relative z-10"></div>
                <span class="text-sm font-bold text-primary flex items-center gap-1 opacity-0 group-hover:opacity-100 transform translate-y-2 group-hover:translate-y-0 transition-all relative z-10">
                    Lihat Panduan <i class="ph-bold ph-arrow-right"></i>
                </span>
            </a>

            <!-- Card 2 -->
            <a href="#" class="bg-white rounded-3xl p-8 border border-slate-100 shadow-xl shadow-slate-200/50 hover:-translate-y-2 hover:shadow-2xl hover:shadow-rose-500/20 transition-all duration-300 group flex flex-col items-center text-center relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-b from-rose-50/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                <!-- Mock Icon -->
                <div class="w-32 h-32 mb-8 relative z-10">
                    <img src="https://img.freepik.com/free-vector/dispute-resolution-abstract-concept-vector-illustration_107173-25593.jpg?w=740" class="w-full h-full object-contain mix-blend-multiply" alt="Icon Keberatan">
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-4 relative z-10 group-hover:text-rose-600 transition-colors">Tata Cara Pengajuan Keberatan</h3>
                <div class="w-8 h-1 bg-slate-200 rounded-full mt-auto mb-4 group-hover:bg-rose-500 group-hover:w-16 transition-all duration-300 relative z-10"></div>
                <span class="text-sm font-bold text-rose-600 flex items-center gap-1 opacity-0 group-hover:opacity-100 transform translate-y-2 group-hover:translate-y-0 transition-all relative z-10">
                    Lihat Panduan <i class="ph-bold ph-arrow-right"></i>
                </span>
            </a>

            <!-- Card 3 -->
            <a href="#" class="bg-white rounded-3xl p-8 border border-slate-100 shadow-xl shadow-slate-200/50 hover:-translate-y-2 hover:shadow-2xl hover:shadow-orange-500/20 transition-all duration-300 group flex flex-col items-center text-center relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-b from-orange-50/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                <!-- Mock Icon -->
                <div class="w-32 h-32 mb-8 relative z-10">
                    <img src="https://img.freepik.com/free-vector/consulting-concept-illustration_114360-2565.jpg?w=740" class="w-full h-full object-contain mix-blend-multiply" alt="Icon Sengketa">
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-4 relative z-10 group-hover:text-secondary transition-colors">Tata Cara Pengajuan Permohonan Penyelesaian Sengketa Ke Komisi Informasi</h3>
                <div class="w-8 h-1 bg-slate-200 rounded-full mt-auto mb-4 group-hover:bg-secondary group-hover:w-16 transition-all duration-300 relative z-10"></div>
                <span class="text-sm font-bold text-secondary flex items-center gap-1 opacity-0 group-hover:opacity-100 transform translate-y-2 group-hover:translate-y-0 transition-all relative z-10">
                    Lihat Panduan <i class="ph-bold ph-arrow-right"></i>
                </span>
            </a>

        </div>
    </div>
</div>
@endsection
