@extends('layouts.app')

@section('title', 'Formulir Permohonan Informasi - PPID LLDIKTI Wilayah IV')

@section('content')
<!-- Page Header -->
<div class="relative pt-32 pb-16 overflow-hidden bg-white border-b border-slate-100">
    <div class="absolute inset-0 bg-gradient-to-br from-blue-50 via-white to-orange-50 pointer-events-none"></div>
    <div class="absolute right-0 top-0 w-[500px] h-[400px] bg-blue-100 rounded-full blur-[120px] opacity-30 pointer-events-none -translate-y-1/2"></div>
    <div class="max-w-7xl mx-auto px-6 md:px-10 lg:px-16 relative z-10">
        <div class="flex items-center gap-2 text-sm text-slate-400 mb-6">
            <a href="{{ route('home') }}" class="hover:text-primary transition-colors">Beranda</a>
            <i class="ph ph-caret-right text-slate-300"></i>
            <span class="text-slate-600 font-medium">Formulir Permohonan Informasi</span>
        </div>
        <h1 class="text-3xl md:text-4xl font-extrabold text-slate-800 mb-4">Formulir Permohonan Informasi</h1>
        <div class="w-12 h-1 bg-secondary rounded-full mb-4"></div>
        <p class="text-slate-500 max-w-xl text-base leading-relaxed">Pengajuan permohonan informasi publik secara mandiri di lingkungan LLDIKTI Wilayah IV.</p>
    </div>
</div>

<!-- Content Section (Clean Pure White Background) -->
<div class="py-12 bg-white min-h-[50vh]">
    <div class="max-w-4xl mx-auto px-6 md:px-10 lg:px-16">

        {{-- Petunjuk Pengisian --}}
        <div class="bg-blue-50/70 border border-blue-100/90 rounded-2xl p-6 mb-10 flex items-start">
            <div class="w-10 h-10 rounded-xl bg-blue-100 text-primary flex items-center justify-center flex-shrink-0 mt-0.5 shadow-sm mr-4" style="margin-right: 16px;">
                <i class="ph ph-info text-xl"></i>
            </div>
            <div class="text-sm text-slate-600 leading-relaxed space-y-1">
                <p class="font-bold text-slate-800 text-[15px]">Petunjuk Pengisian:</p>
                <p>Silakan lengkapi data permohonan pada formulir di bawah ini. Setelah selesai, Anda dapat mengunduh dokumen dalam format <strong>PDF</strong> atau <strong>Word (.docx)</strong> untuk kemudian dicetak, ditempel materai Rp10.000,- dan ditandatangani.</p>
            </div>
        </div>

        {{-- Form --}}
        <form action="{{ route('formulir.permohonan.download') }}" method="POST">
            @csrf

            {{-- SECTION 1: Identitas Pemohon --}}
            <div class="mb-8">
                <div class="flex items-center pb-3 mb-6 border-b border-slate-100">
                    <span class="w-7 h-7 rounded-full bg-primary text-white text-xs font-bold flex items-center justify-center flex-shrink-0 shadow-sm mr-3.5" style="margin-right: 14px;">1</span>
                    <h2 class="text-base font-bold text-slate-800 tracking-wide">Identitas Pemohon Informasi</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    {{-- Nama Lengkap --}}
                    <div class="md:col-span-2">
                        <label class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">
                            Nama Lengkap <span class="text-red-500">*</span>
                        </label>
                        <input type="text" name="nama" value="{{ old('nama') }}" required
                            placeholder="Masukkan nama lengkap sesuai KTP"
                            class="w-full bg-slate-50/60 hover:bg-white focus:bg-white border border-slate-200 focus:border-primary focus:ring-2 focus:ring-primary/20 rounded-xl px-4 py-2.5 text-sm text-slate-800 placeholder:text-slate-400 transition @error('nama') border-red-400 bg-red-50/20 @enderror">
                        @error('nama')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>

                    {{-- Nomor WA / Posel --}}
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">
                            Nomor WhatsApp / Posel (Email) <span class="text-red-500">*</span>
                        </label>
                        <input type="text" name="nomor_wa_email" value="{{ old('nomor_wa_email') }}" required
                            placeholder="Contoh: 081234567890 / nama@email.com"
                            class="w-full bg-slate-50/60 hover:bg-white focus:bg-white border border-slate-200 focus:border-primary focus:ring-2 focus:ring-primary/20 rounded-xl px-4 py-2.5 text-sm text-slate-800 placeholder:text-slate-400 transition">
                    </div>

                    {{-- Pekerjaan / Profesi --}}
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">
                            Pekerjaan / Profesi <span class="text-red-500">*</span>
                        </label>
                        <input type="text" name="pekerjaan_profesi" value="{{ old('pekerjaan_profesi') }}" required
                            placeholder="Contoh: Mahasiswa, Dosen, Pegawai Swasta, Peneliti"
                            class="w-full bg-slate-50/60 hover:bg-white focus:bg-white border border-slate-200 focus:border-primary focus:ring-2 focus:ring-primary/20 rounded-xl px-4 py-2.5 text-sm text-slate-800 placeholder:text-slate-400 transition">
                    </div>

                    {{-- Alamat Tinggal / Domisili --}}
                    <div class="md:col-span-2">
                        <label class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">
                            Alamat Tinggal / Domisili <span class="text-red-500">*</span>
                        </label>
                        <textarea name="alamat" rows="2" required placeholder="Masukkan alamat lengkap domisili atau instansi pemohon"
                            class="w-full bg-slate-50/60 hover:bg-white focus:bg-white border border-slate-200 focus:border-primary focus:ring-2 focus:ring-primary/20 rounded-xl px-4 py-2.5 text-sm text-slate-800 placeholder:text-slate-400 transition resize-y">{{ old('alamat') }}</textarea>
                    </div>
                </div>
            </div>

            {{-- SECTION 2: Rincian Informasi & Tujuan --}}
            <div class="mt-8 mb-8">
                <div class="flex items-center pb-3 mb-6 border-b border-slate-100">
                    <span class="w-7 h-7 rounded-full bg-primary text-white text-xs font-bold flex items-center justify-center flex-shrink-0 shadow-sm mr-3.5" style="margin-right: 14px;">2</span>
                    <h2 class="text-base font-bold text-slate-800 tracking-wide">Rincian Informasi & Tujuan Penggunaan</h2>
                </div>

                <div class="space-y-5">
                    {{-- Rincian Informasi --}}
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">
                            Rincian Informasi yang Dibutuhkan <span class="text-red-500">*</span>
                        </label>
                        <textarea name="rincian_informasi" rows="3" required placeholder="Tuliskan secara spesifik dan jelas data atau informasi yang Anda butuhkan..."
                            class="w-full bg-slate-50/60 hover:bg-white focus:bg-white border border-slate-200 focus:border-primary focus:ring-2 focus:ring-primary/20 rounded-xl px-4 py-2.5 text-sm text-slate-800 placeholder:text-slate-400 transition resize-y">{{ old('rincian_informasi') }}</textarea>
                    </div>

                    {{-- Tujuan Penggunaan --}}
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">
                            Tujuan Penggunaan Informasi <span class="text-red-500">*</span>
                        </label>
                        <textarea name="tujuan_penggunaan" rows="2" required placeholder="Jelaskan maksud dan tujuan penggunaan informasi (misal: Penelitian Skripsi, Laporan, Kajian Akademik)..."
                            class="w-full bg-slate-50/60 hover:bg-white focus:bg-white border border-slate-200 focus:border-primary focus:ring-2 focus:ring-primary/20 rounded-xl px-4 py-2.5 text-sm text-slate-800 placeholder:text-slate-400 transition resize-y">{{ old('tujuan_penggunaan') }}</textarea>
                    </div>
                </div>
            </div>

            {{-- SECTION 3: Metode Perolehan --}}
            <div class="mt-8 mb-8">
                <div class="flex items-center pb-3 mb-6 border-b border-slate-100">
                    <span class="w-7 h-7 rounded-full bg-primary text-white text-xs font-bold flex items-center justify-center flex-shrink-0 shadow-sm mr-3.5" style="margin-right: 14px;">3</span>
                    <h2 class="text-base font-bold text-slate-800 tracking-wide">Metode Perolehan & Salinan Informasi</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    {{-- Cara Memperoleh Informasi --}}
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">
                            Cara Memperoleh Informasi <span class="text-red-500">*</span>
                        </label>
                        <select name="cara_memperoleh" required
                            class="w-full bg-slate-50/60 hover:bg-white focus:bg-white border border-slate-200 focus:border-primary focus:ring-2 focus:ring-primary/20 rounded-xl px-4 py-2.5 text-sm text-slate-800 transition @error('cara_memperoleh') border-red-400 @enderror">
                            <option value="" disabled selected>-- Pilih cara memperoleh informasi --</option>
                            <option value="Melihat/membaca/mendengarkan/mencatat" {{ old('cara_memperoleh') == 'Melihat/membaca/mendengarkan/mencatat' ? 'selected' : '' }}>
                                Melihat / Membaca / Mendengarkan / Mencatat
                            </option>
                            <option value="Mendapatkan salinan informasi (hardcopy/softcopy)" {{ old('cara_memperoleh') == 'Mendapatkan salinan informasi (hardcopy/softcopy)' ? 'selected' : '' }}>
                                Mendapatkan Salinan Informasi (Hardcopy / Softcopy)
                            </option>
                        </select>
                        @error('cara_memperoleh')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>

                    {{-- Cara Mendapatkan Salinan --}}
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">
                            Cara Mendapatkan Salinan <span class="text-red-500">*</span>
                        </label>
                        <select name="cara_mendapatkan_salinan" required
                            class="w-full bg-slate-50/60 hover:bg-white focus:bg-white border border-slate-200 focus:border-primary focus:ring-2 focus:ring-primary/20 rounded-xl px-4 py-2.5 text-sm text-slate-800 transition">
                            <option value="" disabled selected>-- Pilih cara pengiriman / pengambilan --</option>
                            <option value="Mengambil Langsung" {{ old('cara_mendapatkan_salinan') == 'Mengambil Langsung' ? 'selected' : '' }}>Mengambil Langsung</option>
                            <option value="Pos" {{ old('cara_mendapatkan_salinan') == 'Pos' ? 'selected' : '' }}>Pos</option>
                            <option value="Posel" {{ old('cara_mendapatkan_salinan') == 'Posel' ? 'selected' : '' }}>Posel (Email)</option>
                        </select>
                    </div>
                </div>
            </div>

            {{-- SECTION 4: Ketentuan & Pernyataan --}}
            <div class="mt-8 mb-6">
                <div class="rounded-2xl bg-amber-50/70 border border-amber-200/70 p-6 sm:p-7">
                    <div class="flex items-center mb-4">
                        <div class="w-8 h-8 rounded-lg bg-amber-100 text-amber-800 flex items-center justify-center flex-shrink-0 mr-3" style="margin-right: 12px;">
                            <i class="ph ph-shield-check text-lg"></i>
                        </div>
                        <h3 class="text-sm font-bold text-amber-900 uppercase tracking-wider">Pernyataan Pemohon Informasi (Menerangkan Bahwa):</h3>
                    </div>
                    <ol class="list-decimal list-outside ml-6 space-y-2.5 text-sm text-amber-950/80 leading-relaxed">
                        <li>Pemohon bersedia untuk menggunakan informasi sesuai dengan tujuan permohonan informasi.</li>
                        <li>Pemohon bersedia untuk tidak memindahtangankan data ASLI yang diberikan oleh <strong>LLDikti Wilayah IV</strong> kepada pihak mana pun.</li>
                        <li>Pemohon siap menerima sanksi apabila menyalahgunakan tujuan permohonan informasi.</li>
                        <li>Pemohon bersedia menandatangani pernyataan ini di atas <strong>materai Rp10.000,-</strong> dan bersedia menerima segala konsekuensi hukum apabila melanggar butir-butir perjanjian di atas.</li>
                    </ol>
                </div>
            </div>

            {{-- Footer Action Buttons (Jarak Disesuaikan & Rapi) --}}
            <div class="pt-5 border-t border-slate-100 flex flex-col sm:flex-row items-center justify-between gap-4">
                {{-- Kiri: Reset --}}
                <button type="reset"
                    class="w-full sm:w-auto inline-flex items-center justify-center px-6 py-3 rounded-xl border border-slate-300 bg-white text-slate-600 hover:text-slate-800 hover:bg-slate-50 text-sm font-semibold transition-all duration-200">
                    <i class="ph ph-arrow-counter-clockwise text-base" style="margin-right: 8px;"></i>
                    Reset Form
                </button>

                {{-- Kanan: Download DOCX --}}
                <div class="w-full sm:w-auto flex flex-col sm:flex-row items-center gap-4 sm:gap-6">
                    <button type="submit"
                        class="w-full sm:w-auto inline-flex items-center justify-center px-7 py-3 rounded-xl bg-primary hover:bg-primary-dark text-white text-sm font-semibold shadow-md shadow-primary/20 hover:shadow-lg transition-all duration-200 hover:-translate-y-0.5">
                        <i class="ph ph-file-doc text-lg text-white" style="margin-right: 8px;"></i>
                        Download (.docx)
                    </button>
                </div>
            </div>

        </form>
    </div>
</div>
@endsection

