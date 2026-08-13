@extends('layouts.app')

@section('title', 'Beranda - PPID LLDIKTI Wilayah IV')

@section('content')
@php
    $hero = app(\App\Settings\HeroSettings::class);
    $general = app(\App\Settings\GeneralSettings::class);
    $layanans = \App\Models\Layanan::where('is_active', true)->orderBy('urutan', 'asc')->take(5)->get();
@endphp

<!-- Hero Section -->
<div class="relative pt-32 pb-20 lg:pt-36 lg:pb-32 overflow-hidden bg-white">
    <div class="absolute inset-0 hero-pattern pointer-events-none"></div>
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[500px] bg-blue-100 rounded-full blur-[100px] -z-10 opacity-60"></div>
    <div class="absolute top-40 -right-20 w-[400px] h-[400px] bg-orange-100 rounded-full blur-[80px] -z-10 opacity-50"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="animate-slide-up">
                <p class="text-slate-500 font-bold tracking-[0.2em] uppercase text-xs mb-2">Selamat Datang</p>
                <h1 class="text-4xl md:text-5xl font-extrabold text-slate-800 leading-tight mb-3 uppercase tracking-tight lg:whitespace-nowrap">
                    {{ $hero->title }}
                </h1>
                <h2 class="text-sm md:text-base font-bold text-slate-600 uppercase mb-8 tracking-widest lg:whitespace-nowrap">
                    {{ $hero->subtitle }}
                </h2>
                <div class="space-y-5 mb-10 max-w-lg lg:max-w-none pr-4">
                    <p class="text-slate-600 text-[15px] leading-relaxed font-medium">{{ $hero->description1 }}</p>
                    <p class="text-slate-600 text-[15px] leading-relaxed">{{ $hero->description2 }}</p>
                </div>
                <div class="flex flex-wrap items-center gap-4 mt-8">
                    <a href="#layanan" class="bg-primary hover:bg-primary-dark text-white px-8 py-4 rounded-xl font-bold transition-all shadow-xl shadow-primary/20 flex items-center gap-2">
                        Layanan Informasi <i class="ph-bold ph-arrow-down"></i>
                    </a>
                    <a href="https://empat.lldikti4.id/login" target="_blank" class="bg-blue-50 text-primary hover:bg-blue-100 px-8 py-4 rounded-xl font-bold transition-all flex items-center gap-2 border border-blue-100">
                        Aplikasi EMPAT <i class="ph-bold ph-arrow-up-right"></i>
                    </a>
                </div>
            </div>

            <div class="relative hidden lg:block animate-slide-up" style="animation-delay: 0.2s;">
                <div class="relative w-full rounded-3xl overflow-hidden shadow-2xl shadow-primary/10 bg-white border border-slate-100 flex items-center justify-center" style="height: 500px;">
                    <img src="{{ $hero->background_image ? asset('storage/' . $hero->background_image) : asset('storage/Background-LLDIKTI-4.jpeg') }}"
                        alt="Maklumat Pelayanan" class="h-full w-auto max-w-full object-contain">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Layanan & Akses Informasi -->
<div class="relative z-10 bg-slate-50 border-t border-slate-200" id="layanan">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Section Header -->
        <div class="pt-20 pb-12 lg:pt-24 lg:pb-14 grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-end">
            <div>
                <p class="text-secondary font-semibold tracking-[0.15em] uppercase text-[11px] mb-4">Layanan Informasi Publik</p>
                <h2 class="text-2xl md:text-[2rem] font-bold text-slate-800 leading-snug mb-4">
                    Akses informasi yang transparan dan akuntabel untuk masyarakat.
                </h2>
                <p class="text-slate-400 text-sm leading-relaxed">
                    Jelajahi kategori informasi publik yang tersedia, atau ajukan permohonan informasi secara langsung.
                </p>
            </div>
            <div class="flex flex-col sm:flex-row lg:flex-col xl:flex-row items-start sm:items-center lg:items-start xl:items-center gap-5 lg:justify-end">
                <a href="https://empat.lldikti4.id/login" target="_blank" class="inline-flex items-center gap-2 bg-primary hover:bg-primary-dark text-white px-6 py-3 rounded-lg font-semibold text-sm transition-colors shadow-md shadow-primary/20">
                    Ajukan Permohonan <i class="ph ph-arrow-up-right text-xs"></i>
                </a>
                <div style="background:#fff; border:1px solid #e8edf5; border-radius:16px; box-shadow:0 4px 24px rgba(30,58,120,0.08), 0 1px 4px rgba(30,58,120,0.04); padding:1.25rem 1.75rem; text-align:center; min-width:140px;">
                    <p style="font-size:2.75rem; font-weight:900; line-height:1; letter-spacing:-1px; color:#1e3a8a; margin:0;">{{ $hero->stats_count ?? '65' }}<span style="color:#f97316;">+</span></p>
                    <p style="font-size:0.8rem; font-weight:700; color:#334155; margin:0.5rem 0 0.2rem;">{{ $hero->stats_label ?? 'Pemohon' }}</p>
                    <p style="font-size:0.68rem; color:#94a3b8; letter-spacing:0.08em; margin:0;">{{ $hero->stats_description ?? '2022 – 2025' }}</p>
                </div>
            </div>
        </div>

        <!-- Service Cards — grid, square, icon-first, like reference design -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 pb-12">
            @foreach($layanans as $index => $layanan)
            @php
                $iconColors = [
                    ['bg' => 'bg-blue-100', 'icon' => 'text-primary'],
                    ['bg' => 'bg-sky-100',  'icon' => 'text-sky-600'],
                    ['bg' => 'bg-orange-100','icon' => 'text-secondary'],
                    ['bg' => 'bg-indigo-100','icon' => 'text-indigo-600'],
                    ['bg' => 'bg-teal-100', 'icon' => 'text-teal-600'],
                ];
                $c = $iconColors[$index % count($iconColors)];
            @endphp
            <a href="{{ $layanan->url ?? '#' }}"
                class="group bg-white border border-slate-200 rounded-xl p-6 flex flex-col items-center text-center hover:border-primary/30 hover:shadow-md hover:shadow-primary/5 transition-all duration-200">
                <!-- Large Icon Area -->
                <div class="w-20 h-20 {{ $c['bg'] }} rounded-2xl flex items-center justify-center mb-5 group-hover:scale-105 transition-transform duration-200">
                    <i class="ph-fill {{ $layanan->icon }} text-4xl {{ $c['icon'] }}"></i>
                </div>
                <h3 class="font-bold text-slate-800 text-base leading-snug mb-2">{{ $layanan->judul }}</h3>
                <p class="text-slate-400 text-sm leading-relaxed flex-grow">{{ $layanan->deskripsi }}</p>
                <span class="mt-4 inline-flex items-center gap-1.5 text-xs text-primary font-semibold group-hover:gap-2.5 transition-all">
                    Selengkapnya <i class="ph ph-arrow-right"></i>
                </span>
            </a>
            @endforeach
        </div>

        <!-- Divider -->
        <div class="border-t border-slate-200"></div>

        <!-- Formulir Section -->
        <div class="pt-8 pb-20 lg:pb-24">
            <p class="text-slate-400 text-[11px] font-semibold uppercase tracking-[0.15em] mb-4">Unduh Formulir</p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                <a href="{{ route('formulir.permohonan') }}"
                    class="group flex items-center gap-4 bg-white border border-slate-200 rounded-xl px-5 py-4 hover:border-primary/30 hover:shadow-md hover:shadow-primary/5 transition-all duration-200">
                    <div class="w-11 h-11 rounded-xl bg-blue-50 flex items-center justify-center flex-shrink-0">
                        <i class="ph-fill ph-file-arrow-up text-primary text-xl"></i>
                    </div>
                    <div class="flex-grow min-w-0">
                        <h3 class="font-semibold text-slate-700 text-sm">Form Permohonan Informasi</h3>
                        <p class="text-slate-400 text-xs mt-0.5">Ajukan permintaan data secara online</p>
                    </div>
                    <i class="ph ph-arrow-right text-slate-300 group-hover:text-primary group-hover:translate-x-0.5 transition-all flex-shrink-0"></i>
                </a>

                <a href="{{ route('formulir.keberatan') }}"
                    class="group flex items-center gap-4 bg-white border border-slate-200 rounded-xl px-5 py-4 hover:border-secondary/30 hover:shadow-md hover:shadow-secondary/5 transition-all duration-200">
                    <div class="w-11 h-11 rounded-xl bg-orange-50 flex items-center justify-center flex-shrink-0">
                        <i class="ph-fill ph-shield-warning text-secondary text-xl"></i>
                    </div>
                    <div class="flex-grow min-w-0">
                        <h3 class="font-semibold text-slate-700 text-sm">Form Pernyataan Keberatan</h3>
                        <p class="text-slate-400 text-xs mt-0.5">Sampaikan keluhan atas layanan kami</p>
                    </div>
                    <i class="ph ph-arrow-right text-slate-300 group-hover:text-secondary group-hover:translate-x-0.5 transition-all flex-shrink-0"></i>
                </a>
            </div>
        </div>

    </div>
</div>

<!-- Maklumat Pelayanan -->
<div class="py-24 bg-white relative overflow-hidden">
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-0 left-0 w-72 h-72 bg-blue-50 rounded-full blur-[80px] opacity-60"></div>
        <div class="absolute bottom-0 right-0 w-72 h-72 bg-orange-50 rounded-full blur-[80px] opacity-60"></div>
    </div>
    <div class="absolute top-0 inset-x-0 h-px bg-gradient-to-r from-transparent via-slate-200 to-transparent"></div>

    <div class="max-w-4xl mx-auto px-4 relative z-10 text-center">
        <h3 class="text-sm font-bold text-secondary uppercase tracking-widest mb-2">Maklumat Pelayanan</h3>
        <h2 class="text-3xl font-extrabold text-slate-800 mb-10">Lembaga Layanan Pendidikan Tinggi Wilayah IV</h2>

        <div class="bg-white rounded-[40px] p-6 border border-slate-100 shadow-2xl shadow-slate-200/50 inline-block overflow-hidden relative">
            <img src="{{ $general->maklumat_image ? asset('storage/' . $general->maklumat_image) : asset('storage/Maklumat-Pelayanan-PAKTA-INTEGRITAS-2025-REV-1.png') }}"
                 alt="Sertifikat Maklumat Pelayanan"
                 class="max-w-full h-auto mx-auto rounded-2xl"
                 style="max-height: 500px; object-fit: contain;">
        </div>
    </div>
</div>


@endsection
