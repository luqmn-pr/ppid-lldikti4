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
    <div class="max-w-6xl mx-auto px-4 w-full text-center">
        
        <h2 class="text-3xl font-extrabold text-slate-800 mb-12">Tata Cara</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @forelse($tataCaras as $item)
                <a href="{{ $item->link }}" target="_blank" class="block group p-6 rounded-2xl bg-white border border-slate-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div class="aspect-square flex items-center justify-center mb-6">
                        @if($item->gambar)
                            <img src="{{ Storage::url($item->gambar) }}" alt="{{ $item->judul_langkah }}" class="w-40 h-40 object-contain group-hover:scale-105 transition-transform duration-300">
                        @else
                            <div class="w-40 h-40 bg-slate-50 rounded-2xl flex items-center justify-center text-slate-300">
                                <i class="ph ph-image text-4xl"></i>
                            </div>
                        @endif
                    </div>
                    <h3 class="text-lg font-bold text-slate-700 group-hover:text-primary transition-colors line-clamp-3 leading-snug">{{ $item->judul_langkah }}</h3>
                </a>
            @empty
                <div class="col-span-full py-12 text-slate-500">
                    Belum ada data tata cara.
                </div>
            @endforelse
        </div>

    </div>
</div>
@endsection
