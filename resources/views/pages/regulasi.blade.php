@extends('layouts.app')

@section('title', 'Regulasi - PPID LLDIKTI Wilayah IV')

@section('content')
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
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Table Card -->
        <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-sm">
            <!-- Table Header Bar -->
            <div class="flex items-center justify-between px-6 py-4 border-b border-slate-100 bg-slate-50/60">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center">
                        <i class="ph-fill ph-book-open text-primary text-base"></i>
                    </div>
                    <div>
                        <p class="font-bold text-slate-800 text-sm">Daftar Regulasi</p>
                        <p class="text-xs text-slate-400">{{ $regulasis->count() }} peraturan tersedia</p>
                    </div>
                </div>
                <span class="text-xs text-slate-400 font-medium hidden sm:block">Klik <span class="font-bold text-primary">Unduh</span> untuk mengakses dokumen</span>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-50 text-[11px] font-bold text-slate-500 uppercase tracking-widest border-b border-slate-200">
                            <th class="px-6 py-4 w-14 text-center">No</th>
                            <th class="px-6 py-4 w-72">Judul</th>
                            <th class="px-6 py-4">Sinopsis</th>
                            <th class="px-6 py-4 w-28 text-center">Berkas</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @forelse($regulasis as $index => $regulasi)
                        <tr class="hover:bg-slate-50/80 transition-colors group">
                            <td class="px-6 py-5 text-center">
                                <span class="w-7 h-7 rounded-full {{ $index % 2 == 0 ? 'bg-primary text-white' : 'bg-slate-200 text-slate-600' }} text-xs font-bold flex items-center justify-center mx-auto">
                                    {{ $index + 1 }}
                                </span>
                            </td>
                            <td class="px-6 py-5">
                                <p class="font-semibold text-slate-800 text-sm leading-snug">{{ $regulasi->judul }}</p>
                            </td>
                            <td class="px-6 py-5">
                                <p class="text-sm text-slate-600 leading-relaxed">{{ $regulasi->sinopsis }}</p>
                            </td>
                            <td class="px-6 py-5 text-center">
                                @if($regulasi->file_pdf)
                                <a href="{{ asset('storage/' . $regulasi->file_pdf) }}" target="_blank" class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-primary/8 text-primary text-xs font-bold rounded-lg hover:bg-primary hover:text-white transition-all duration-200 group-hover:scale-105">
                                    <i class="ph ph-download-simple"></i> Unduh
                                </a>
                                @elseif($regulasi->link_tautan)
                                    @if($regulasi->jenis_tautan === 'drive')
                                        <a href="{{ $regulasi->link_tautan }}" target="_blank" class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-red-50 text-red-600 text-xs font-bold rounded-lg hover:bg-red-600 hover:text-white transition-all duration-200 group-hover:scale-105">
                                            <i class="ph ph-file-pdf"></i> Lihat PDF
                                        </a>
                                    @else
                                        <a href="{{ $regulasi->link_tautan }}" target="_blank" class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-orange-50 text-secondary text-xs font-bold rounded-lg hover:bg-secondary hover:text-white transition-all duration-200 group-hover:scale-105">
                                            <i class="ph ph-arrow-square-out"></i> Tautan Web
                                        </a>
                                    @endif
                                @else
                                <span class="text-xs text-slate-400 italic">Tidak tersedia</span>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="px-6 py-10 text-center text-slate-500">Belum ada data regulasi.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            <!-- Table Footer -->
            <div class="px-6 py-4 bg-slate-50/60 border-t border-slate-100 flex items-center justify-between">
                <p class="text-xs text-slate-400">Menampilkan {{ $regulasis->count() }} regulasi</p>
                <p class="text-xs text-slate-400">Terakhir diperbarui: {{ $regulasis->max('updated_at') ? $regulasis->max('updated_at')->format('d M Y') : '-' }}</p>
            </div>
        </div>

    </div>
</div>
@endsection
