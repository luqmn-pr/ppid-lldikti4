@extends('layouts.app')

@section('title', 'Regulasi - PPID LLDIKTI Wilayah IV')

@section('content')
@php $reg = app(\App\Settings\RegulasiSettings::class); @endphp

<!-- Page Header -->
<div class="relative pt-32 pb-16 overflow-hidden bg-white border-b border-slate-100">
    <div class="absolute inset-0 bg-gradient-to-br from-blue-50 via-white to-orange-50 pointer-events-none"></div>
    <div class="absolute right-0 top-0 w-[500px] h-[400px] bg-blue-100 rounded-full blur-[120px] opacity-30 pointer-events-none -translate-y-1/2"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="flex items-center gap-2 text-sm text-slate-400 mb-6">
            <a href="{{ route('home') }}" class="hover:text-primary transition-colors">Beranda</a>
            <i class="ph ph-caret-right text-slate-300"></i>
            <span class="text-slate-600 font-medium">Regulasi</span>
        </div>
        <h1 class="text-3xl md:text-4xl font-extrabold text-slate-800 mb-4">Regulasi</h1>
        <div class="w-12 h-1 bg-secondary rounded-full mb-4"></div>
        <p class="text-slate-500 max-w-xl text-base leading-relaxed">Peraturan perundang-undangan yang menjadi landasan hukum pengelolaan informasi publik di lingkungan LLDIKTI Wilayah IV.</p>
    </div>
</div>

<!-- Content Section -->
<div class="py-16 bg-white min-h-[50vh]">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        <p class="text-slate-700 text-base leading-relaxed mb-8">
            Berikut adalah regulasi yang berkaitan dengan keterbukaan informasi publik:
        </p>

        {{-- ===== 1. Regulasi Umum ===== --}}
        <ol style="list-style: decimal; padding-left: 1.5rem;" class="space-y-5 mb-10 text-slate-700 text-base">
            <li>
                Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik.
                @if($reg->link_uu_14_2008)
                    <a href="{{ $reg->link_uu_14_2008 }}" target="_blank" class="text-primary font-medium hover:underline ml-1">(klik di sini untuk mengunduh)</a>
                @endif
            </li>
            <li>
                Peraturan Pemerintah Nomor 61 Tahun 2010 tentang Pelaksanaan Undang-Undang Keterbukaan Informasi Publik.
                @if($reg->link_pp_61_2010)
                    <a href="{{ $reg->link_pp_61_2010 }}" target="_blank" class="text-primary font-medium hover:underline ml-1">(klik di sini untuk mengunduh)</a>
                @endif
            </li>
            <li>
                Peraturan Mahkamah Agung Nomor 2 Tahun 2011 tentang Tata Cara Penyelesaian Sengketa Informasi Publik di Pengadilan.
                @if($reg->link_perma_2_2011)
                    <a href="{{ $reg->link_perma_2_2011 }}" target="_blank" class="text-primary font-medium hover:underline ml-1">(klik di sini untuk mengunduh)</a>
                @endif
            </li>
            <li>
                Peraturan Komisi Informasi Nomor 1 Tahun 2013 tentang Prosedur Penyelesaian Sengketa Informasi Publik.
                @if($reg->link_perki_1_2013)
                    <a href="{{ $reg->link_perki_1_2013 }}" target="_blank" class="text-primary font-medium hover:underline ml-1">(klik di sini untuk mengunduh)</a>
                @endif
            </li>
            <li>
                Peraturan Komisi Informasi Pusat Nomor 1 Tahun 2021 tentang Standar Layanan Informasi Publik.
                @if($reg->link_perki_1_2021)
                    <a href="{{ $reg->link_perki_1_2021 }}" target="_blank" class="text-primary font-medium hover:underline ml-1">(klik di sini untuk mengunduh)</a>
                @endif
            </li>
        </ol>

        {{-- ===== 2. Regulasi Kemendikbud (Paragraf) ===== --}}
        <p class="text-slate-700 text-base leading-relaxed mb-8">
            Regulasi yang berkaitan dengan keterbukaan informasi publik di Kementerian Pendidikan Tinggi, Sains, dan Teknologi diatur dalam Peraturan Menteri Pendidikan, Kebudayaan, Riset, dan Teknologi Nomor 69 Tahun 2024 tentang Pengelolaan dan Pelayanan Informasi Publik di Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi.
            @if($reg->link_permendikbud_69_2024)
                <a href="{{ $reg->link_permendikbud_69_2024 }}" target="_blank" class="text-primary font-medium hover:underline ml-1">(klik di sini untuk mengunduh)</a>
            @endif
        </p>

        <p class="text-slate-700 text-base leading-relaxed mb-10">
            Adapun standar pelayanan permintaan informasi publik di Kementerian Pendidikan Tinggi, Sains, dan Teknologi diatur dalam Keputusan Kepala Biro Umum, Hubungan Masyarakat, dan Pengadaan Barang dan Jasa Nomor 0894/A5/OT.02.02/2025 tentang Standar Pelayanan Permintaan Informasi Publik Kementerian Pendidikan Tinggi, Sains, dan Teknologi.
            @if($reg->link_sk_biro_2025)
                <a href="{{ $reg->link_sk_biro_2025 }}" target="_blank" class="text-primary font-medium hover:underline ml-1">(klik di sini untuk mengunduh)</a>
            @endif
        </p>

        {{-- ===== 3. POS ===== --}}
        <p class="text-slate-700 text-base leading-relaxed mb-8">
            Lembaga Layanan Pendidikan Tinggi Wilayah IV juga telah memiliki prosedur operasional standar (POS) dalam pelayanan informasi publik meliputi:
        </p>

        <ol style="list-style: decimal; padding-left: 1.5rem;" class="space-y-5 mb-16 text-slate-700 text-base">
            <li>
                POS Layanan Permintaan Informasi Publik.
                @if($reg->link_pos_permintaan)
                    <a href="{{ $reg->link_pos_permintaan }}" target="_blank" class="text-primary font-medium hover:underline ml-1">(klik di sini untuk mengunduh)</a>
                @endif
            </li>
            <li>
                POS Layanan Keberatan Atas Permintaan Informasi Publik.
                @if($reg->link_pos_keberatan)
                    <a href="{{ $reg->link_pos_keberatan }}" target="_blank" class="text-primary font-medium hover:underline ml-1">(klik di sini untuk mengunduh)</a>
                @endif
            </li>
            <li>
                POS Pendokumentasian Informasi Publik.
                @if($reg->link_pos_pendokumentasian)
                    <a href="{{ $reg->link_pos_pendokumentasian }}" target="_blank" class="text-primary font-medium hover:underline ml-1">(klik di sini untuk mengunduh)</a>
                @endif
            </li>
            <li>
                POS Pemutakhiran dan Penetapan Daftar Informasi Publik.
                @if($reg->link_pos_pemutakhiran)
                    <a href="{{ $reg->link_pos_pemutakhiran }}" target="_blank" class="text-primary font-medium hover:underline ml-1">(klik di sini untuk mengunduh)</a>
                @endif
            </li>
            <li>
                POS Pengujian Konsekuensi dan Penetapan Informasi yang Dikecualikan.
                @if($reg->link_pos_pengujian)
                    <a href="{{ $reg->link_pos_pengujian }}" target="_blank" class="text-primary font-medium hover:underline ml-1">(klik di sini untuk mengunduh)</a>
                @endif
            </li>
            <li>
                POS Pengumuman Informasi Publik.
                @if($reg->link_pos_pengumuman)
                    <a href="{{ $reg->link_pos_pengumuman }}" target="_blank" class="text-primary font-medium hover:underline ml-1">(klik di sini untuk mengunduh)</a>
                @endif
            </li>
        </ol>

        <!-- Tags -->
        <div class="border-t border-slate-100 pt-8">
            <div class="flex items-center gap-2 mb-4">
                <i class="ph ph-tag text-slate-400"></i>
                <span class="text-sm font-semibold text-slate-700">Tags:</span>
            </div>
            <div class="flex flex-wrap gap-2">
                <span class="px-3 py-1 bg-slate-100 text-slate-600 text-sm rounded-full font-medium">Informasi Publik</span>
                <span class="px-3 py-1 bg-slate-100 text-slate-600 text-sm rounded-full font-medium">Regulasi</span>
                <span class="px-3 py-1 bg-slate-100 text-slate-600 text-sm rounded-full font-medium">Standar</span>
            </div>
        </div>

    </div>
</div>
@endsection
