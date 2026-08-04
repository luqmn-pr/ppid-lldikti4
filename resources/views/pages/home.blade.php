@extends('layouts.app')

@section('title', 'Beranda - PPID LLDIKTI Wilayah IV')

@section('content')
<!-- Hero Section (Modern & Aesthetic) -->
<div class="relative pt-32 pb-20 lg:pt-36 lg:pb-32 overflow-hidden bg-white">
    <!-- Abstract Gradients & Patterns -->
    <div class="absolute inset-0 hero-pattern pointer-events-none"></div>
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[500px] bg-blue-100 rounded-full blur-[100px] -z-10 opacity-70"></div>
    <div class="absolute top-40 -right-20 w-[400px] h-[400px] bg-orange-100 rounded-full blur-[80px] -z-10 opacity-60"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Text Content -->
            <div class="animate-slide-up">
                <p class="text-slate-500 font-bold tracking-[0.2em] uppercase text-xs mb-2">
                    Selamat Datang
                </p>

                <h1 class="text-4xl md:text-5xl font-extrabold text-slate-800 leading-tight mb-3 uppercase tracking-tight lg:whitespace-nowrap">
                    DI PORTAL RESMI PPID
                </h1>

                <h2 class="text-sm md:text-base font-bold text-slate-600 uppercase mb-8 tracking-widest lg:whitespace-nowrap">
                    LEMBAGA LAYANAN PENDIDIKAN TINGGI WILAYAH IV
                </h2>

                <div class="space-y-5 mb-10 max-w-lg lg:max-w-none pr-4">
                    <p class="text-slate-600 text-[15px] leading-relaxed font-medium">
                        Portal ini hadir sebagai wujud nyata komitmen kami dalam menjamin
                        keterbukaan informasi publik, memperkuat <i class="text-primary font-bold">good governance</i>, 
                        serta mempermudah akses informasi yang transparan dan akurat.
                    </p>

                    <p class="text-slate-600 text-[15px] leading-relaxed">
                        Temukan informasi lengkap terkait kebijakan, layanan, serta prosedur permohonan maupun
                        keberatan informasi publik bagi masyarakat dan seluruh pemangku kepentingan.
                    </p>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-wrap items-center gap-4 mt-8">
                    <a href="#layanan" class="bg-primary hover:bg-primary-dark text-white px-8 py-4 rounded-xl font-bold transition-all shadow-xl shadow-primary/20 flex items-center gap-2">
                        Layanan Informasi <i class="ph-bold ph-arrow-down"></i>
                    </a>
                    <a href="https://empat.lldikti4.id/login" target="_blank" class="bg-blue-50 text-primary hover:bg-blue-100 px-8 py-4 rounded-xl font-bold transition-all flex items-center gap-2 border border-blue-100">
                        Aplikasi 4 <i class="ph-bold ph-arrow-up-right"></i>
                    </a>
                </div>
            </div>

            <!-- Hero Image/Graphic -->
            <div class="relative hidden lg:block animate-slide-up" style="animation-delay: 0.2s;">
                <div class="relative w-full h-[500px] rounded-3xl overflow-hidden shadow-2xl shadow-primary/20">
                    <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80"
                        alt="Gedung LLDIKTI" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-primary/80 via-primary/20 to-transparent"></div>

                    <!-- Floating Glass Stat -->
                    <div class="absolute bottom-8 left-8 glass-card p-4 rounded-2xl flex items-center gap-4">
                        <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-secondary">
                            <i class="ph-fill ph-files text-2xl"></i>
                        </div>
                        <div>
                            <p class="text-xs text-blue-100 font-medium uppercase tracking-wider">Tahun 2022-2025</p>
                            <p class="text-2xl font-bold text-white">65 <span class="text-lg font-medium">Pemohon</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Quick Access / Kategori Informasi -->
<div class="py-20 relative z-10 bg-gradient-to-b from-blue-50/50 to-white" id="layanan">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Statement Header -->
        <div class="mb-14">
            <p class="text-secondary font-bold tracking-[0.2em] uppercase text-xs mb-3">Layanan Kami</p>
            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-4">
                <div>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-slate-800 leading-tight">
                        Kami Menyediakan Akses Informasi <br class="hidden md:block">
                        yang <span class="text-primary">Transparan</span> &amp; <span class="text-secondary">Akuntabel</span>
                    </h2>
                </div>
            </div>
            <div class="mt-6 h-px bg-gradient-to-r from-primary via-secondary to-transparent"></div>
        </div>

        <!-- 5 Cards (Clean with Accents) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-5 mb-10">
            <!-- Card 1 -->
            <a href="{{ route('informasi-publik.index', ['tab' => 'berkala']) }}"
                class="bg-white rounded-2xl p-6 border border-slate-200 hover:border-primary hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group flex flex-col h-full">
                <div class="w-12 h-12 bg-blue-50 text-primary rounded-xl flex items-center justify-center mb-5 group-hover:bg-primary group-hover:text-white transition-colors flex-shrink-0">
                    <i class="ph-fill ph-calendar-dots text-2xl"></i>
                </div>
                <h3 class="font-bold text-slate-800 text-sm leading-snug mb-2">Halaman Berkala</h3>
                <p class="text-xs text-slate-500 leading-relaxed mb-5 flex-grow">Wajib disediakan dan diumumkan secara rutin.</p>
                <div class="mt-auto flex items-center gap-1 text-xs font-bold text-slate-400 group-hover:text-primary transition-colors">
                    Jelajahi <i class="ph-bold ph-arrow-right"></i>
                </div>
            </a>

            <!-- Card 2 -->
            <a href="{{ route('informasi-publik.index', ['tab' => 'setiap-saat']) }}"
                class="bg-white rounded-2xl p-6 border border-slate-200 hover:border-secondary hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group flex flex-col h-full">
                <div class="w-12 h-12 bg-orange-50 text-secondary rounded-xl flex items-center justify-center mb-5 group-hover:bg-secondary group-hover:text-white transition-colors flex-shrink-0">
                    <i class="ph-fill ph-clock text-2xl"></i>
                </div>
                <h3 class="font-bold text-slate-800 text-sm leading-snug mb-2">Informasi Tersedia Setiap Saat</h3>
                <p class="text-xs text-slate-500 leading-relaxed mb-5 flex-grow">Harus selalu siap diakses kapanpun oleh setiap pemohon.</p>
                <div class="mt-auto flex items-center gap-1 text-xs font-bold text-slate-400 group-hover:text-secondary transition-colors">
                    Jelajahi <i class="ph-bold ph-arrow-right"></i>
                </div>
            </a>

            <!-- Card 3 -->
            <a href="{{ route('informasi-publik.index', ['tab' => 'serta-merta']) }}"
                class="bg-white rounded-2xl p-6 border border-slate-200 hover:border-primary hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group flex flex-col h-full">
                <div class="w-12 h-12 bg-blue-50 text-primary rounded-xl flex items-center justify-center mb-5 group-hover:bg-primary group-hover:text-white transition-colors flex-shrink-0">
                    <i class="ph-fill ph-lightning text-2xl"></i>
                </div>
                <h3 class="font-bold text-slate-800 text-sm leading-snug mb-2">Informasi Serta Merta</h3>
                <p class="text-xs text-slate-500 leading-relaxed mb-5 flex-grow">Terkait hajat hidup orang banyak — diumumkan langsung.</p>
                <div class="mt-auto flex items-center gap-1 text-xs font-bold text-slate-400 group-hover:text-primary transition-colors">
                    Jelajahi <i class="ph-bold ph-arrow-right"></i>
                </div>
            </a>

            <!-- Card 4 -->
            <a href="https://empat.lldikti4.id/login" target="_blank"
                class="bg-white rounded-2xl p-6 border border-slate-200 hover:border-primary hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group flex flex-col h-full">
                <div class="w-12 h-12 bg-blue-50 text-primary rounded-xl flex items-center justify-center mb-5 group-hover:bg-primary group-hover:text-white transition-colors flex-shrink-0">
                    <i class="ph-fill ph-app-window text-2xl"></i>
                </div>
                <h3 class="font-bold text-slate-800 text-sm leading-snug mb-2">Pengajuan Lewat Aplikasi Empat</h3>
                <p class="text-xs text-slate-500 leading-relaxed mb-5 flex-grow">Portal pengajuan permohonan informasi secara online.</p>
                <div class="mt-auto flex items-center gap-1 text-xs font-bold text-slate-400 group-hover:text-primary transition-colors">
                    Akses <i class="ph-bold ph-arrow-up-right"></i>
                </div>
            </a>

            <!-- Card 5 -->
            <a href="{{ route('data-informasi') }}"
                class="bg-white rounded-2xl p-6 border border-slate-200 hover:border-secondary hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group flex flex-col h-full">
                <div class="w-12 h-12 bg-orange-50 text-secondary rounded-xl flex items-center justify-center mb-5 group-hover:bg-secondary group-hover:text-white transition-colors flex-shrink-0">
                    <i class="ph-fill ph-folder-open text-2xl"></i>
                </div>
                <h3 class="font-bold text-slate-800 text-sm leading-snug mb-2">Data dan Informasi</h3>
                <p class="text-xs text-slate-500 leading-relaxed mb-5 flex-grow">Kumpulan statistik, dokumen, dan laporan kinerja.</p>
                <div class="mt-auto flex items-center gap-1 text-xs font-bold text-slate-400 group-hover:text-secondary transition-colors">
                    Eksplor <i class="ph-bold ph-arrow-right"></i>
                </div>
            </a>
        </div>

        <!-- CTA Strip -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <a href="https://empat.lldikti4.id/login" target="_blank"
                class="group flex items-center justify-between bg-white border border-slate-200 border-l-4 border-l-primary rounded-2xl p-6 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                <div class="flex items-center gap-5">
                    <div class="w-14 h-14 rounded-full bg-blue-50 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-colors flex-shrink-0">
                        <i class="ph-fill ph-file-arrow-up text-3xl"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-slate-800 text-lg mb-1 group-hover:text-primary transition-colors">Form Permohonan Informasi</h3>
                        <p class="text-sm text-slate-500">Ajukan permintaan data secara online.</p>
                    </div>
                </div>
                <i class="ph-bold ph-arrow-right text-slate-300 group-hover:text-primary group-hover:translate-x-1 transition-all text-xl"></i>
            </a>

            <a href="https://empat.lldikti4.id/login" target="_blank"
                class="group flex items-center justify-between bg-white border border-slate-200 border-l-4 border-l-secondary rounded-2xl p-6 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                <div class="flex items-center gap-5">
                    <div class="w-14 h-14 rounded-full bg-orange-50 flex items-center justify-center text-secondary group-hover:bg-secondary group-hover:text-white transition-colors flex-shrink-0">
                        <i class="ph-fill ph-shield-warning text-3xl"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-slate-800 text-lg mb-1 group-hover:text-secondary transition-colors">Form Pernyataan Keberatan</h3>
                        <p class="text-sm text-slate-500">Sampaikan keluhan atas layanan kami.</p>
                    </div>
                </div>
                <i class="ph-bold ph-arrow-right text-slate-300 group-hover:text-secondary group-hover:translate-x-1 transition-all text-xl"></i>
            </a>
        </div>

    </div>
</div>

<!-- Maklumat Pelayanan -->
<div class="py-24 bg-white relative overflow-hidden">
    <div class="absolute top-0 inset-x-0 h-px bg-gradient-to-r from-transparent via-slate-200 to-transparent"></div>

    <div class="max-w-4xl mx-auto px-4 relative z-10 text-center">
        <h3 class="text-sm font-bold text-secondary uppercase tracking-widest mb-2">Maklumat Pelayanan</h3>
        <h2 class="text-3xl font-extrabold text-slate-800 mb-10">Lembaga Layanan Pendidikan Tinggi Wilayah IV</h2>
        
        <div class="bg-slate-50 rounded-[40px] p-6 border border-slate-100 shadow-2xl shadow-slate-200/50 inline-block overflow-hidden relative">
            <img src="{{ asset('storage/Maklumat-Pelayanan-PAKTA-INTEGRITAS-2025-REV-1.png') }}" 
                 alt="Sertifikat Maklumat Pelayanan" 
                 class="max-w-full h-auto mx-auto rounded-2xl" 
                 style="max-height: 500px; object-fit: contain;">
        </div>
    </div>
</div>

<!-- Informasi & Layanan Kontak -->
<div class="py-20 bg-gradient-to-tr from-white to-blue-50/50 border-t border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8" style="align-items: stretch;">
            <!-- Left: Lapor Aplikasi -->
            <div class="lg:col-span-4 flex flex-col" style="min-height: 100%;">
                <span class="text-secondary font-bold tracking-widest text-sm uppercase mb-2">Aplikasi Terkait</span>
                <h2 class="text-3xl font-extrabold text-slate-800 mb-3">Kanal Pengaduan Resmi</h2>
                <p class="text-slate-500 mb-6 leading-relaxed text-sm">Sampaikan aspirasi dan pengaduan langsung melalui platform pengaduan nasional yang terintegrasi.</p>

                <!-- Lapor Card -->
                <div class="flex-1 rounded-2xl overflow-hidden shadow-lg flex flex-col border border-rose-100"
                    style="background-color: #fff5f5; border-left: 4px solid #e11d48;">
                    <div class="flex-1 flex flex-col items-center justify-center px-6 py-8">
                        <img src="https://www.lapor.go.id/themes/lapor/assets/images/logo.png" alt="Logo LAPOR!" class="h-12 w-auto object-contain mb-3">
                        <p class="text-rose-400 text-xs text-center leading-relaxed">Layanan Aspirasi dan Pengaduan Online Rakyat</p>
                    </div>

                    <div class="h-px bg-rose-100 mx-6"></div>

                    <div class="px-6 py-5">
                        <a href="https://www.lapor.go.id/" target="_blank" class="flex items-center justify-between bg-[#e11d48] hover:bg-rose-700 text-white px-5 py-3 rounded-xl font-bold transition-all text-sm group shadow-md shadow-rose-200">
                            <span>Akses Website LAPOR!</span>
                            <i class="ph-bold ph-arrow-up-right group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right: Info Pelayanan -->
            <div class="lg:col-span-8 flex flex-col" style="min-height: 100%;">
                <div class="bg-white rounded-3xl shadow-xl shadow-slate-200/50 border border-slate-100 overflow-hidden flex-1 flex flex-col">
                    <div class="px-8 py-5 border-b border-slate-100 flex items-center gap-3 bg-blue-50/40">
                        <div class="w-9 h-9 bg-primary/10 rounded-lg flex items-center justify-center">
                            <i class="ph-fill ph-headset text-primary text-lg"></i>
                        </div>
                        <h3 class="text-base font-bold text-slate-800">Informasi Pelayanan</h3>
                    </div>

                    <div class="divide-y divide-slate-100">
                        <!-- Alamat -->
                        <div class="flex items-start gap-4 px-8 py-5 hover:bg-slate-50/50 transition-colors">
                            <div class="w-10 h-10 bg-blue-50 text-primary rounded-xl flex items-center justify-center flex-shrink-0 mt-0.5">
                                <i class="ph-fill ph-map-pin text-lg"></i>
                            </div>
                            <div class="min-w-0">
                                <h4 class="font-semibold text-slate-700 text-sm mb-0.5">Alamat Kantor</h4>
                                <p class="text-sm text-slate-500 leading-relaxed">Jl. P.H.H. Mustofa No.38, Cikutra, Kec. Cibeunying Kidul, Kota Bandung, Jawa Barat 40124</p>
                            </div>
                        </div>

                        <!-- Waktu -->
                        <div class="flex items-start gap-4 px-8 py-5 hover:bg-slate-50/50 transition-colors">
                            <div class="w-10 h-10 bg-orange-50 text-secondary rounded-xl flex items-center justify-center flex-shrink-0 mt-0.5">
                                <i class="ph-fill ph-clock text-lg"></i>
                            </div>
                            <div class="min-w-0">
                                <h4 class="font-semibold text-slate-700 text-sm mb-0.5">Waktu Pelayanan</h4>
                                <p class="text-sm text-slate-500">
                                    <span class="font-medium text-slate-600">Senin – Kamis:</span> 07.30 – 16.00 WIB &nbsp;|&nbsp;
                                    <span class="font-medium text-slate-600">Jumat:</span> 07.30 – 16.30 WIB
                                </p>
                            </div>
                        </div>

                        <!-- Telepon -->
                        <div class="flex items-start gap-4 px-8 py-5 hover:bg-slate-50/50 transition-colors">
                            <div class="w-10 h-10 bg-emerald-50 text-emerald-600 rounded-xl flex items-center justify-center flex-shrink-0 mt-0.5">
                                <i class="ph-fill ph-phone text-lg"></i>
                            </div>
                            <div class="min-w-0">
                                <h4 class="font-semibold text-slate-700 text-sm mb-0.5">Kontak Cepat</h4>
                                <p class="text-sm text-slate-500">
                                    <span class="font-medium text-slate-600">ULT:</span> (022) 7275630 &nbsp;|&nbsp;
                                    <span class="font-medium text-slate-600">WhatsApp:</span> 082244121226
                                </p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-start gap-4 px-8 py-5 hover:bg-slate-50/50 transition-colors">
                            <div class="w-10 h-10 bg-blue-50 text-primary rounded-xl flex items-center justify-center flex-shrink-0 mt-0.5">
                                <i class="ph-fill ph-envelope-simple text-lg"></i>
                            </div>
                            <div class="min-w-0">
                                <h4 class="font-semibold text-slate-700 text-sm mb-0.5">Email Resmi</h4>
                                <a href="mailto:informasi@lldikti4.id" class="text-sm text-primary font-medium hover:underline">informasi@lldikti4.id</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
