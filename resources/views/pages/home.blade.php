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
                <div class="text-right">
                    <p class="text-2xl font-bold text-primary leading-none">{{ $hero->stats_count ?? '65' }}+</p>
                    <p class="text-slate-400 text-xs mt-1">{{ $hero->stats_label ?? 'Dokumen tersedia' }}</p>
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

<!-- Informasi & Layanan Kontak -->
<div class="py-20 border-t border-slate-100" style="background: linear-gradient(135deg, #f0f4ff 0%, #f8faff 50%, #fff7ee 100%);">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8" style="align-items: stretch;">
            <!-- Left: Lapor Aplikasi -->
            <div class="lg:col-span-4 flex flex-col" style="min-height: 100%;">
                <span class="text-secondary font-bold tracking-widest text-sm uppercase mb-2">Aplikasi Terkait</span>
                <h2 class="text-3xl font-extrabold text-slate-800 mb-3">Kanal Pengaduan Resmi</h2>
                <p class="text-slate-500 mb-6 leading-relaxed text-sm">Sampaikan aspirasi dan pengaduan langsung melalui platform pengaduan nasional yang terintegrasi.</p>

                <div class="flex-1 rounded-2xl overflow-hidden shadow-lg flex flex-col border border-rose-100"
                    style="background-color: #fff5f5; border-left: 4px solid #e11d48;">
                    <div class="flex-1 flex flex-col items-center justify-center px-6 py-8">
                        <img src="https://www.lapor.go.id/themes/lapor/assets/images/logo.png" alt="Logo LAPOR!" class="h-12 w-auto object-contain mb-3">
                        <p class="text-rose-400 text-xs text-center leading-relaxed">Layanan Aspirasi dan Pengaduan Online Rakyat</p>
                    </div>
                    <div class="h-px bg-rose-100 mx-6"></div>
                    <div class="px-6 py-5">
                        <a href="{{ $general->url_lapor }}" target="_blank" class="flex items-center justify-between bg-[#e11d48] hover:bg-rose-700 text-white px-5 py-3 rounded-xl font-bold transition-all text-sm group shadow-md shadow-rose-200">
                            <span>Akses Website LAPOR!</span>
                            <i class="ph-bold ph-arrow-up-right group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right: Info Pelayanan -->
            <div class="lg:col-span-8 flex flex-col" style="min-height: 100%;">
                <div class="bg-white rounded-3xl shadow-xl shadow-slate-200/50 border border-slate-100 overflow-hidden flex-1 flex flex-col">
                    <div class="px-8 py-5 border-b border-slate-100 flex items-center gap-3 bg-primary/5">
                        <div class="w-9 h-9 bg-primary/10 rounded-lg flex items-center justify-center">
                            <i class="ph-fill ph-headset text-primary text-lg"></i>
                        </div>
                        <h3 class="text-base font-bold text-slate-800">Informasi Pelayanan</h3>
                    </div>

                    <div class="divide-y divide-slate-100">
                        <!-- Alamat -->
                        <div class="flex items-start gap-4 px-8 py-5 hover:bg-blue-50/30 transition-colors">
                            <div class="w-10 h-10 bg-blue-50 text-primary rounded-xl flex items-center justify-center flex-shrink-0 mt-0.5">
                                <i class="ph-fill ph-map-pin text-lg"></i>
                            </div>
                            <div class="min-w-0">
                                <h4 class="font-semibold text-slate-700 text-sm mb-0.5">Alamat Kantor</h4>
                                <p class="text-sm text-slate-500 leading-relaxed">{{ $general->alamat_kantor }}</p>
                            </div>
                        </div>

                        <!-- Waktu -->
                        <div class="flex items-start gap-4 px-8 py-5 hover:bg-orange-50/30 transition-colors">
                            <div class="w-10 h-10 bg-orange-50 text-secondary rounded-xl flex items-center justify-center flex-shrink-0 mt-0.5">
                                <i class="ph-fill ph-clock text-lg"></i>
                            </div>
                            <div class="min-w-0">
                                <h4 class="font-semibold text-slate-700 text-sm mb-0.5">Waktu Pelayanan</h4>
                                <p class="text-sm text-slate-500">{{ $general->waktu_pelayanan }}</p>
                            </div>
                        </div>

                        <!-- Telepon -->
                        <div class="flex items-start gap-4 px-8 py-5 hover:bg-emerald-50/30 transition-colors">
                            <div class="w-10 h-10 bg-emerald-50 text-emerald-600 rounded-xl flex items-center justify-center flex-shrink-0 mt-0.5">
                                <i class="ph-fill ph-phone text-lg"></i>
                            </div>
                            <div class="min-w-0">
                                <h4 class="font-semibold text-slate-700 text-sm mb-0.5">Kontak Cepat</h4>
                                <p class="text-sm text-slate-500">
                                    <span class="font-medium text-slate-600">ULT:</span> {{ $general->kontak_telepon }} &nbsp;|&nbsp;
                                    <span class="font-medium text-slate-600">WhatsApp:</span> {{ $general->kontak_whatsapp }}
                                </p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-start gap-4 px-8 py-5 hover:bg-blue-50/30 transition-colors">
                            <div class="w-10 h-10 bg-blue-50 text-primary rounded-xl flex items-center justify-center flex-shrink-0 mt-0.5">
                                <i class="ph-fill ph-envelope-simple text-lg"></i>
                            </div>
                            <div class="min-w-0">
                                <h4 class="font-semibold text-slate-700 text-sm mb-0.5">Email Resmi</h4>
                                <a href="mailto:{{ $general->email_resmi }}" class="text-sm text-primary font-medium hover:underline">{{ $general->email_resmi }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
