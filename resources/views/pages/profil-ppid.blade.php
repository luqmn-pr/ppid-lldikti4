@extends('layouts.app')

@section('title', 'Profil Singkat PPID - LLDIKTI Wilayah IV')

@section('content')
@php
    $profil = app(\App\Settings\ProfilSettings::class);
@endphp
<!-- Page Header -->
<div class="relative pt-32 pb-16 overflow-hidden bg-white border-b border-slate-100">
    <div class="absolute inset-0 bg-gradient-to-br from-blue-50 via-white to-orange-50 pointer-events-none"></div>
    <div class="absolute right-0 top-0 w-[500px] h-[400px] bg-blue-100 rounded-full blur-[120px] opacity-30 pointer-events-none -translate-y-1/2"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="flex items-center gap-2 text-sm text-slate-400 mb-6">
            <a href="{{ route('home') }}" class="hover:text-primary transition-colors">Beranda</a>
            <i class="ph ph-caret-right text-slate-300"></i>
            <span class="text-slate-600 font-medium">Profil Singkat PPID</span>
        </div>
        <h1 class="text-3xl md:text-4xl font-extrabold text-slate-800 mb-4">Profil Singkat PPID</h1>
        <div class="w-12 h-1 bg-secondary rounded-full mb-4"></div>
        <p class="text-slate-500 max-w-xl text-base leading-relaxed">Mengenal lebih dekat Pejabat Pengelola Informasi dan Dokumentasi LLDIKTI Wilayah IV.</p>
    </div>
</div>

<!-- Main Content -->
<div class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- ===== SECTION 1: Deskripsi + Info Cards ===== -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 mb-20 items-start">

            <!-- Kiri: Teks (2/3) -->
            <div class="lg:col-span-2">
                <span class="inline-block text-xs font-bold text-secondary uppercase tracking-widest bg-orange-50 px-3 py-1 rounded-full mb-4">Tentang PPID</span>
                <h2 class="text-2xl md:text-3xl font-extrabold text-slate-800 mb-6 leading-snug">Komitmen Keterbukaan<br>Informasi Publik</h2>
                <div class="space-y-5 text-[15px] text-slate-600 leading-[1.85]">
                    <p>{{ $profil->tentang_ppid }}</p>
                    @if($profil->visi)
                    <div class="mt-4 p-4 bg-blue-50 border-l-4 border-primary rounded-r-xl">
                        <h4 class="font-bold text-primary mb-1">Visi</h4>
                        <p class="text-sm font-medium">{{ $profil->visi }}</p>
                    </div>
                    @endif
                    @if(!empty($profil->misi))
                    <div class="mt-4">
                        <h4 class="font-bold text-slate-800 mb-2">Misi</h4>
                        <ul class="list-disc pl-5 space-y-1 text-sm">
                            @foreach($profil->misi as $misi)
                            <li>{{ $misi['teks'] }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
                <div class="mt-8 pt-6 border-t border-slate-100">
                    <p class="text-primary font-semibold italic text-sm">— Salam Keterbukaan Informasi.</p>
                </div>
            </div>

            <!-- Kanan: Info Cards (1/3) -->
            <div class="space-y-4">
                <div class="bg-white border border-slate-200 rounded-2xl p-6 hover:border-slate-300 transition-colors">
                    <div class="flex items-start gap-4">
                        <div class="w-11 h-11 bg-slate-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="ph-fill ph-scales text-xl text-slate-500"></i>
                        </div>
                        <div>
                            <p class="text-[10px] text-slate-400 uppercase font-bold tracking-widest mb-1.5">Dasar Hukum</p>
                            <p class="font-semibold text-slate-800 text-sm leading-relaxed">UU No. 14 Tahun 2008 tentang Keterbukaan Informasi Publik</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white border border-slate-200 rounded-2xl p-6 hover:border-slate-300 transition-colors">
                    <div class="flex items-start gap-4">
                        <div class="w-11 h-11 bg-slate-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="ph-fill ph-buildings text-xl text-slate-500"></i>
                        </div>
                        <div>
                            <p class="text-[10px] text-slate-400 uppercase font-bold tracking-widest mb-1.5">Lembaga</p>
                            <p class="font-semibold text-slate-800 text-sm leading-relaxed">LLDIKTI Wilayah IV Jawa Barat dan Banten</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white border border-slate-200 rounded-2xl p-6 hover:border-slate-300 transition-colors">
                    <div class="flex items-start gap-4">
                        <div class="w-11 h-11 bg-slate-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="ph-fill ph-certificate text-xl text-slate-500"></i>
                        </div>
                        <div>
                            <p class="text-[10px] text-slate-400 uppercase font-bold tracking-widest mb-1.5">Regulasi Teknis</p>
                            <p class="font-semibold text-slate-800 text-sm leading-relaxed">Permendikbud No. 41 Tahun 2020 tentang Pengelolaan & Pelayanan Informasi Publik</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white border border-slate-200 rounded-2xl p-6 hover:border-slate-300 transition-colors">
                    <div class="flex items-start gap-4">
                        <div class="w-11 h-11 bg-slate-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="ph-fill ph-check-circle text-xl text-slate-500"></i>
                        </div>
                        <div>
                            <p class="text-[10px] text-slate-400 uppercase font-bold tracking-widest mb-1.5">Prinsip Layanan</p>
                            <p class="font-semibold text-slate-800 text-sm leading-relaxed">Akuntabilitas &middot; Transparansi &middot; Kepastian Hukum &middot; Perlindungan Data</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Divider -->
        <div class="flex items-center gap-4 mb-16">
            <div class="flex-1 h-px bg-slate-100"></div>
            <div class="flex-shrink-0">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-widest px-4">Tugas &amp; Fungsi</span>
            </div>
            <div class="flex-1 h-px bg-slate-100"></div>
        </div>

        <!-- ===== SECTION 2: Tugas & Fungsi Header ===== -->
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-extrabold text-slate-800 mb-3">Tugas dan Fungsi PPID</h2>
            <p class="text-slate-500 text-[15px] max-w-xl mx-auto">Kewenangan resmi yang diemban PPID dalam mengelola dan melayani informasi publik di lingkungan LLDIKTI Wilayah IV.</p>
        </div>

        <!-- ===== SECTION 3: 3 Cards Grid ===== -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-20">

            <!-- Card 1: Tugas PPID -->
            <div class="bg-white border border-slate-200 rounded-2xl overflow-hidden hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                <div class="px-8 pt-8 pb-6 border-b border-slate-100">
                    <div class="w-12 h-12 bg-slate-100 rounded-xl flex items-center justify-center mb-4">
                        <i class="ph-fill ph-clipboard-text text-2xl text-slate-500"></i>
                    </div>
                    <h3 class="text-base font-extrabold text-slate-800 uppercase tracking-wide">Tugas PPID</h3>
                    <p class="text-xs text-slate-400 mt-1">{{ count($profil->tugas_fungsi) }} tugas pokok pengelolaan informasi</p>
                </div>
                <div class="px-8 py-6">
                    <ul class="space-y-3.5">
                        @foreach($profil->tugas_fungsi as $index => $tugas)
                        <li class="flex items-start gap-3 text-sm text-slate-600 leading-relaxed">
                            <span class="mt-1 w-5 h-5 rounded-full bg-secondary/15 text-secondary flex items-center justify-center flex-shrink-0 text-[10px] font-bold">{{ $index + 1 }}</span>
                            <span>{{ $tugas['teks'] }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <!-- Card 2: Wewenang PPID -->
            <div class="bg-white border border-slate-200 rounded-2xl overflow-hidden hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                <div class="px-8 pt-8 pb-6 border-b border-slate-100">
                    <div class="w-12 h-12 bg-slate-100 rounded-xl flex items-center justify-center mb-4">
                        <i class="ph-fill ph-shield-check text-2xl text-slate-500"></i>
                    </div>
                    <h3 class="text-base font-extrabold text-slate-800 uppercase tracking-wide">Wewenang PPID</h3>
                    <p class="text-xs text-slate-400 mt-1">{{ count($profil->wewenang) }} kewenangan dalam pengelolaan informasi</p>
                </div>
                <div class="px-8 py-6">
                    <ul class="space-y-3.5">
                        @foreach($profil->wewenang as $index => $wew)
                        <li class="flex items-start gap-3 text-sm text-slate-600 leading-relaxed">
                            <span class="mt-1 w-5 h-5 rounded-full bg-primary/10 text-primary flex items-center justify-center flex-shrink-0 text-[10px] font-bold">{{ $index + 1 }}</span>
                            <span>{{ $wew['teks'] }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <!-- Card 3: Tim Pertimbangan -->
            <div class="bg-white border border-slate-200 rounded-2xl overflow-hidden hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                <div class="px-8 pt-8 pb-6 border-b border-slate-100">
                    <div class="w-12 h-12 bg-slate-100 rounded-xl flex items-center justify-center mb-4">
                        <i class="ph-fill ph-users-three text-2xl text-slate-500"></i>
                    </div>
                    <h3 class="text-base font-extrabold text-slate-800 uppercase tracking-wide">Tim Pertimbangan PPID</h3>
                    <p class="text-xs text-slate-400 mt-1">{{ count($profil->tim_pertimbangan) }} tugas tim pertimbangan</p>
                </div>
                <div class="px-8 py-6">
                    <ul class="space-y-3.5">
                        @foreach($profil->tim_pertimbangan as $index => $tim)
                        <li class="flex items-start gap-3 text-sm text-slate-600 leading-relaxed">
                            <span class="mt-1 w-5 h-5 rounded-full bg-slate-100 text-slate-500 flex items-center justify-center flex-shrink-0 text-[10px] font-bold">{{ $index + 1 }}</span>
                            <span>{{ $tim['teks'] }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection
