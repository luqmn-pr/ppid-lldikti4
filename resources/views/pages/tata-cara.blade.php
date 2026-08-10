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
@php
    $categories = \App\Models\TataCara::orderBy('urutan')->get()->groupBy('kategori');
    $colors = [
        'blue' => ['bg' => 'bg-blue-50', 'text' => 'text-primary', 'border' => 'border-primary', 'shadow' => 'shadow-primary/20'],
        'rose' => ['bg' => 'bg-rose-50', 'text' => 'text-rose-600', 'border' => 'border-rose-500', 'shadow' => 'shadow-rose-500/20'],
        'orange' => ['bg' => 'bg-orange-50', 'text' => 'text-secondary', 'border' => 'border-secondary', 'shadow' => 'shadow-orange-500/20'],
        'emerald' => ['bg' => 'bg-emerald-50', 'text' => 'text-emerald-600', 'border' => 'border-emerald-500', 'shadow' => 'shadow-emerald-500/20'],
    ];
@endphp
<div class="py-20 bg-white min-h-[50vh]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        @forelse($categories as $kategori => $steps)
        @php
            $colorKey = array_keys($colors)[$loop->index % count($colors)];
            $c = $colors[$colorKey];
        @endphp
        <div class="mb-20">
            <h2 class="text-2xl md:text-3xl font-extrabold text-slate-800 mb-8 border-b-2 {{ $c['border'] }} inline-block pb-2">{{ $kategori }}</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($steps as $step)
                <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-lg shadow-slate-200/50 hover:-translate-y-1 hover:shadow-xl hover:{{ $c['shadow'] }} transition-all duration-300 flex flex-col relative overflow-hidden group">
                    <div class="absolute inset-0 bg-gradient-to-b from-{{ $colorKey }}-50/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    
                    <div class="flex items-center gap-4 mb-4 relative z-10">
                        <div class="w-12 h-12 rounded-xl {{ $c['bg'] }} flex items-center justify-center flex-shrink-0">
                            <i class="ph-fill {{ $step->icon ?? 'ph-check-circle' }} text-2xl {{ $c['text'] }}"></i>
                        </div>
                        <h3 class="font-bold text-slate-800 text-lg leading-tight">{{ $step->judul_langkah }}</h3>
                    </div>
                    
                    <p class="text-sm text-slate-600 leading-relaxed relative z-10">
                        {{ $step->deskripsi_langkah }}
                    </p>
                    
                    <!-- Step Number Indicator -->
                    <div class="absolute top-4 right-4 text-6xl font-black text-slate-50 opacity-50 select-none z-0 group-hover:text-{{ $colorKey }}-50 transition-colors">
                        {{ $loop->iteration }}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @empty
        <div class="text-center py-12">
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-slate-100 mb-4">
                <i class="ph ph-folder-open text-2xl text-slate-400"></i>
            </div>
            <h3 class="text-lg font-bold text-slate-700 mb-2">Belum Ada Data Tata Cara</h3>
            <p class="text-slate-500">Data tata cara akan tampil di sini setelah ditambahkan melalui panel admin.</p>
        </div>
        @endforelse

    </div>
</div>
@endsection
