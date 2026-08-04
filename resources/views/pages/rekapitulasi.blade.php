@extends('layouts.app')

@section('title', 'Rekapitulasi Permohonan - PPID LLDIKTI Wilayah IV')

@push('styles')
<style>
    /* Custom styles for details/summary */
    details > summary {
        list-style: none;
    }
    details > summary::-webkit-details-marker {
        display: none;
    }
    details[open] summary ~ * {
        animation: sweep .3s ease-in-out;
    }
    @keyframes sweep {
        0%    {opacity: 0; margin-top: -10px}
        100%  {opacity: 1; margin-top: 0px}
    }
</style>
@endpush

@section('content')
<!-- Page Header (Template) -->
<div class="relative pt-32 pb-16 overflow-hidden bg-white border-b border-slate-100">
    <div class="absolute inset-0 bg-gradient-to-br from-blue-50 via-white to-orange-50 pointer-events-none"></div>
    <div class="absolute right-0 top-0 w-[500px] h-[400px] bg-blue-100 rounded-full blur-[120px] opacity-30 pointer-events-none -translate-y-1/2"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="flex items-center gap-2 text-sm text-slate-400 mb-6">
            <a href="{{ route('home') }}" class="hover:text-primary transition-colors">Beranda</a>
            <i class="ph ph-caret-right text-slate-300"></i>
            <a href="{{ route('informasi-publik.index') }}" class="hover:text-primary transition-colors">Informasi Publik</a>
            <i class="ph ph-caret-right text-slate-300"></i>
            <span class="text-slate-600 font-medium">Rekapitulasi Permohonan</span>
        </div>
        <h1 class="text-3xl md:text-4xl font-extrabold text-slate-800 mb-4 uppercase tracking-tight">Rekapitulasi Permohonan Informasi Publik</h1>
        <div class="w-12 h-1 bg-secondary rounded-full mb-4"></div>
        <p class="text-slate-500 max-w-xl text-base leading-relaxed">Laporan rekapitulasi jumlah permohonan informasi, waktu penyelesaian, dan status permohonan dari tahun ke tahun.</p>
    </div>
</div>

<!-- Content Section -->
<div class="py-16 bg-white min-h-[50vh]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="space-y-8">
            @forelse($rekapitulasis->groupBy('tahun') as $tahun => $items)
            <!-- Tahun {{ $tahun }} -->
            <div>
                <h2 class="text-xl font-bold text-slate-800 mb-4 flex items-center gap-3">
                    <span class="w-8 h-8 rounded-full {{ $loop->first ? 'bg-primary/10 text-primary' : 'bg-slate-100 text-slate-500' }} flex items-center justify-center"><i class="ph-bold ph-calendar-blank"></i></span>
                    Tahun {{ $tahun }}
                </h2>
                <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden divide-y divide-slate-100">
                    
                    @foreach($items as $item)
                    <details class="group">
                        <summary class="flex justify-between items-center font-semibold cursor-pointer list-none p-5 text-slate-700 hover:bg-slate-50 transition-colors">
                            <span class="flex items-center gap-3">
                                <i class="ph-bold ph-caret-right text-slate-400 group-open:rotate-90 transition-transform"></i>
                                {{ $item->judul }}
                            </span>
                        </summary>
                        <div class="p-5 bg-slate-50/50 border-t border-slate-100 flex justify-center">
                            @if($item->gambar)
                                <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" class="max-w-full h-auto rounded-xl shadow-sm border border-slate-200">
                            @else
                                <span class="text-sm text-slate-500 italic">Gambar grafik tidak tersedia.</span>
                            @endif
                        </div>
                    </details>
                    @endforeach

                </div>
            </div>
            @empty
            <div class="text-center py-10">
                <p class="text-slate-500">Belum ada data rekapitulasi.</p>
            </div>
            @endforelse

        </div>

    </div>
</div>
@endsection

@push('scripts')
<script>
    // Make the accordions exclusive
    const details = document.querySelectorAll("details");
    details.forEach((targetDetail) => {
        targetDetail.addEventListener("click", () => {
            details.forEach((detail) => {
                if (detail !== targetDetail) {
                    detail.removeAttribute("open");
                    detail.querySelector('summary').classList.remove('bg-blue-50/50', 'text-primary');
                    detail.querySelector('summary').classList.add('text-slate-700');
                    detail.querySelector('i').classList.replace('text-primary', 'text-slate-400');
                }
            });
            
            // Toggle styles for clicked element
            setTimeout(() => {
                if(targetDetail.hasAttribute('open')) {
                    targetDetail.querySelector('summary').classList.add('bg-blue-50/50', 'text-primary');
                    targetDetail.querySelector('summary').classList.remove('text-slate-700');
                    targetDetail.querySelector('i').classList.replace('text-slate-400', 'text-primary');
                } else {
                    targetDetail.querySelector('summary').classList.remove('bg-blue-50/50', 'text-primary');
                    targetDetail.querySelector('summary').classList.add('text-slate-700');
                    targetDetail.querySelector('i').classList.replace('text-primary', 'text-slate-400');
                }
            }, 10);
        });
    });
</script>
@endpush
