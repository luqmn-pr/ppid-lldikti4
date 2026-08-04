@extends('layouts.app')

@section('title', 'Informasi Publik - PPID LLDIKTI Wilayah IV')

@section('content')
<!-- Page Header -->
<div class="relative pt-32 pb-16 overflow-hidden bg-white border-b border-slate-100">
    <div class="absolute inset-0 bg-gradient-to-br from-blue-50 via-white to-orange-50 pointer-events-none"></div>
    <div class="absolute right-0 top-0 w-[500px] h-[400px] bg-blue-100 rounded-full blur-[120px] opacity-30 pointer-events-none -translate-y-1/2"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="flex items-center gap-2 text-sm text-slate-400 mb-6">
            <a href="{{ route('home') }}" class="hover:text-primary transition-colors">Beranda</a>
            <i class="ph ph-caret-right text-slate-300"></i>
            <span class="text-slate-600 font-medium">Informasi Publik</span>
        </div>
        <h1 class="text-3xl md:text-4xl font-extrabold text-slate-800 mb-4">Informasi Publik</h1>
        <div class="w-12 h-1 bg-secondary rounded-full mb-4"></div>
        <p class="text-slate-500 max-w-xl text-base leading-relaxed">Daftar lengkap informasi publik yang tersedia di LLDIKTI Wilayah IV, mencakup informasi setiap saat, berkala, dan serta merta.</p>
    </div>
</div>

<!-- Content Section -->
<div class="py-12 bg-white min-h-[50vh]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Tab Navigation -->
        <div class="flex flex-wrap gap-2 mb-8 border-b border-slate-200 pb-0">
            <button onclick="switchTab('setiap-saat')" id="tab-setiap-saat"
                class="tab-btn px-5 py-3 text-sm font-bold rounded-t-xl -mb-px border border-b-0 transition-all duration-200 border-primary bg-primary text-white">
                <i class="ph ph-clock mr-2"></i>Tersedia Setiap Saat
                <span class="tab-badge ml-2 text-xs bg-white/25 px-2 py-0.5 rounded-full">{{ $setiapSaat->count() }}</span>
            </button>
            <button onclick="switchTab('berkala')" id="tab-berkala"
                class="tab-btn px-5 py-3 text-sm font-bold rounded-t-xl -mb-px border border-b-0 transition-all duration-200 border-transparent bg-slate-100 text-slate-500 hover:text-primary hover:bg-slate-50">
                <i class="ph ph-calendar-blank mr-2"></i>Tersedia Secara Berkala
                <span class="tab-badge ml-2 text-xs bg-slate-200 text-slate-500 px-2 py-0.5 rounded-full">{{ $berkala->count() }}</span>
            </button>
            <button onclick="switchTab('serta-merta')" id="tab-serta-merta"
                class="tab-btn px-5 py-3 text-sm font-bold rounded-t-xl -mb-px border border-b-0 transition-all duration-200 border-transparent bg-slate-100 text-slate-500 hover:text-primary hover:bg-slate-50">
                <i class="ph ph-lightning mr-2"></i>Serta Merta
                <span class="tab-badge ml-2 text-xs bg-slate-200 text-slate-500 px-2 py-0.5 rounded-full">{{ $sertaMerta->count() }}</span>
            </button>
        </div>

        <!-- ===== TAB 1: Tersedia Setiap Saat ===== -->
        <div id="content-setiap-saat" class="tab-content active">
            <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-sm">
                <div class="flex items-center justify-between px-6 py-4 border-b border-slate-100 bg-slate-50/60">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center">
                            <i class="ph-fill ph-clock text-primary text-base"></i>
                        </div>
                        <div>
                            <p class="font-bold text-slate-800 text-sm">Informasi Tersedia Setiap Saat</p>
                            <p class="text-xs text-slate-400">{{ $setiapSaat->count() }} informasi tersedia</p>
                        </div>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-50 text-[11px] font-bold text-slate-500 uppercase tracking-widest border-b border-slate-200">
                                <th class="px-6 py-4 w-14 text-center">No</th>
                                <th class="px-6 py-4">Nama Informasi</th>
                                <th class="px-6 py-4 w-44 text-center">Akses</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @forelse($setiapSaat as $index => $item)
                            <tr class="hover:bg-slate-50/80 transition-colors group">
                                <td class="px-6 py-4 text-center"><span class="w-7 h-7 rounded-full {{ $index % 2 == 0 ? 'bg-primary text-white' : 'bg-slate-200 text-slate-600' }} text-xs font-bold flex items-center justify-center mx-auto">{{ $index + 1 }}</span></td>
                                <td class="px-6 py-4"><p class="text-sm text-slate-700">{{ $item->judul }}</p></td>
                                <td class="px-6 py-4 text-center">
                                    @if($item->link_tautan)
                                        @if($item->jenis_tautan === 'drive')
                                            <a href="{{ $item->link_tautan }}" target="_blank" class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-red-50 text-red-600 text-xs font-bold rounded-lg hover:bg-red-600 hover:text-white transition-all"><i class="ph ph-file-pdf"></i> Lihat PDF</a>
                                        @else
                                            <a href="{{ $item->link_tautan }}" target="_blank" class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-orange-50 text-secondary text-xs font-bold rounded-lg hover:bg-secondary hover:text-white transition-all"><i class="ph ph-arrow-square-out"></i> Tautan Web</a>
                                        @endif
                                    @elseif($item->file_pdf)
                                        <a href="{{ asset('storage/' . $item->file_pdf) }}" target="_blank" class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-primary/8 text-primary text-xs font-bold rounded-lg hover:bg-primary hover:text-white transition-all"><i class="ph ph-download-simple"></i> Unduh File</a>
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3" class="px-6 py-10 text-center text-slate-500">Belum ada informasi.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- ===== TAB 2: Tersedia Secara Berkala ===== -->
        <div id="content-berkala" class="tab-content">
            <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-sm">
                <div class="flex items-center justify-between px-6 py-4 border-b border-slate-100 bg-slate-50/60">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center">
                            <i class="ph-fill ph-calendar-blank text-primary text-base"></i>
                        </div>
                        <div>
                            <p class="font-bold text-slate-800 text-sm">Informasi Tersedia Secara Berkala</p>
                            <p class="text-xs text-slate-400">{{ $berkala->count() }} informasi tersedia</p>
                        </div>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-50 text-[11px] font-bold text-slate-500 uppercase tracking-widest border-b border-slate-200">
                                <th class="px-6 py-4 w-14 text-center">No</th>
                                <th class="px-6 py-4">Nama Informasi</th>
                                <th class="px-6 py-4 w-44 text-center">Akses</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @forelse($berkala as $index => $item)
                            <tr class="hover:bg-slate-50/80 transition-colors group">
                                <td class="px-6 py-4 text-center"><span class="w-7 h-7 rounded-full {{ $index % 2 == 0 ? 'bg-primary text-white' : 'bg-slate-200 text-slate-600' }} text-xs font-bold flex items-center justify-center mx-auto">{{ $index + 1 }}</span></td>
                                <td class="px-6 py-4"><p class="text-sm text-slate-700">{{ $item->judul }}</p></td>
                                <td class="px-6 py-4 text-center">
                                    @if($item->link_tautan)
                                        @if($item->jenis_tautan === 'drive')
                                            <a href="{{ $item->link_tautan }}" target="_blank" class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-red-50 text-red-600 text-xs font-bold rounded-lg hover:bg-red-600 hover:text-white transition-all"><i class="ph ph-file-pdf"></i> Lihat PDF</a>
                                        @else
                                            <a href="{{ $item->link_tautan }}" target="_blank" class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-orange-50 text-secondary text-xs font-bold rounded-lg hover:bg-secondary hover:text-white transition-all"><i class="ph ph-arrow-square-out"></i> Tautan Web</a>
                                        @endif
                                    @elseif($item->file_pdf)
                                        <a href="{{ asset('storage/' . $item->file_pdf) }}" target="_blank" class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-primary/8 text-primary text-xs font-bold rounded-lg hover:bg-primary hover:text-white transition-all"><i class="ph ph-download-simple"></i> Unduh File</a>
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3" class="px-6 py-10 text-center text-slate-500">Belum ada informasi.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- ===== TAB 3: Serta Merta ===== -->
        <div id="content-serta-merta" class="tab-content">
            <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-sm">
                <div class="flex items-center justify-between px-6 py-4 border-b border-slate-100 bg-slate-50/60">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center">
                            <i class="ph-fill ph-lightning text-primary text-base"></i>
                        </div>
                        <div>
                            <p class="font-bold text-slate-800 text-sm">Informasi Serta Merta</p>
                            <p class="text-xs text-slate-400">{{ $sertaMerta->count() }} informasi tersedia</p>
                        </div>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-50 text-[11px] font-bold text-slate-500 uppercase tracking-widest border-b border-slate-200">
                                <th class="px-6 py-4 w-14 text-center">No</th>
                                <th class="px-6 py-4">Nama Informasi</th>
                                <th class="px-6 py-4 w-44 text-center">Akses</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @forelse($sertaMerta as $index => $item)
                            <tr class="hover:bg-slate-50/80 transition-colors group">
                                <td class="px-6 py-4 text-center"><span class="w-7 h-7 rounded-full {{ $index % 2 == 0 ? 'bg-primary text-white' : 'bg-slate-200 text-slate-600' }} text-xs font-bold flex items-center justify-center mx-auto">{{ $index + 1 }}</span></td>
                                <td class="px-6 py-4"><p class="text-sm text-slate-700">{{ $item->judul }}</p></td>
                                <td class="px-6 py-4 text-center">
                                    @if($item->link_tautan)
                                        @if($item->jenis_tautan === 'drive')
                                            <a href="{{ $item->link_tautan }}" target="_blank" class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-red-50 text-red-600 text-xs font-bold rounded-lg hover:bg-red-600 hover:text-white transition-all"><i class="ph ph-file-pdf"></i> Lihat PDF</a>
                                        @else
                                            <a href="{{ $item->link_tautan }}" target="_blank" class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-orange-50 text-secondary text-xs font-bold rounded-lg hover:bg-secondary hover:text-white transition-all"><i class="ph ph-arrow-square-out"></i> Tautan Web</a>
                                        @endif
                                    @elseif($item->file_pdf)
                                        <a href="{{ asset('storage/' . $item->file_pdf) }}" target="_blank" class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-primary/8 text-primary text-xs font-bold rounded-lg hover:bg-primary hover:text-white transition-all"><i class="ph ph-download-simple"></i> Unduh File</a>
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3" class="px-6 py-10 text-center text-slate-500">Belum ada informasi.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
