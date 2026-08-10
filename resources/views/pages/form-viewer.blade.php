@extends('layouts.app')

@section('title', $title . ' - PPID LLDIKTI Wilayah IV')

@section('content')
<!-- Page Header -->
<div class="relative pt-32 pb-16 overflow-hidden bg-white border-b border-slate-100">
    <div class="absolute inset-0 bg-gradient-to-br from-blue-50 via-white to-orange-50 pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="flex items-center gap-2 text-sm text-slate-400 mb-6">
            <a href="{{ route('home') }}" class="hover:text-primary transition-colors">Beranda</a>
            <i class="ph ph-caret-right text-slate-300"></i>
            <span class="text-slate-600 font-medium">{{ $title }}</span>
        </div>
        <h1 class="text-3xl md:text-4xl font-extrabold text-slate-800 mb-4 uppercase">{{ $title }}</h1>
        <div class="w-12 h-1 bg-secondary rounded-full"></div>
    </div>
</div>

<div class="py-12 bg-slate-50 min-h-screen">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white p-4 rounded-2xl shadow-xl shadow-slate-200/50 border border-slate-100 h-[800px] flex flex-col">
            @if($pdf_file)
                <iframe src="{{ asset('storage/' . $pdf_file) }}" class="w-full flex-1 rounded-xl border border-slate-200"></iframe>
            @else
                <div class="flex flex-col items-center justify-center flex-1 text-slate-400">
                    <i class="ph ph-file-pdf text-6xl mb-4 text-slate-300"></i>
                    <p class="text-lg font-medium text-slate-500">Formulir belum diunggah.</p>
                    <p class="text-sm">Silakan unggah formulir melalui panel admin pada menu General Settings.</p>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
