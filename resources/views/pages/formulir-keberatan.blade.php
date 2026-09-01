@extends('layouts.app')

@section('title', 'Formulir Keberatan - PPID LLDIKTI Wilayah IV')

@section('content')
<!-- Page Header -->
<div class="relative pt-32 pb-16 overflow-hidden bg-white border-b border-slate-100">
    <div class="absolute inset-0 bg-gradient-to-br from-orange-50 via-white to-blue-50 pointer-events-none"></div>
    <div class="absolute right-0 top-0 w-[500px] h-[400px] bg-orange-100 rounded-full blur-[120px] opacity-30 pointer-events-none -translate-y-1/2"></div>
    <div class="max-w-7xl mx-auto px-6 md:px-10 lg:px-16 relative z-10">
        <div class="flex items-center gap-2 text-sm text-slate-400 mb-6">
            <a href="{{ route('home') }}" class="hover:text-primary transition-colors">Beranda</a>
            <i class="ph ph-caret-right text-slate-300"></i>
            <span class="text-slate-600 font-medium">Formulir Keberatan</span>
        </div>
        <h1 class="text-3xl md:text-4xl font-extrabold text-slate-800 mb-4">Formulir Keberatan Atas Informasi Publik</h1>
        <div class="w-12 h-1 bg-secondary rounded-full mb-4"></div>
        <p class="text-slate-500 max-w-xl text-base leading-relaxed">Ajukan keberatan secara resmi apabila permohonan informasi Anda tidak dipenuhi atau mendapat penolakan dari pejabat PPID.</p>
    </div>
</div>

<!-- Content Section -->
<div class="py-12 bg-white min-h-[50vh]">
    <div class="max-w-4xl mx-auto px-6 md:px-10 lg:px-16">

        {{-- Info Banner --}}
        <div class="bg-orange-50/70 border border-orange-100/90 rounded-2xl p-6 mb-10 flex items-start">
            <div class="w-10 h-10 rounded-xl bg-orange-100 text-orange-600 flex items-center justify-center flex-shrink-0 mt-0.5 shadow-sm" style="margin-right: 16px;">
                <i class="ph ph-warning text-xl"></i>
            </div>
            <div class="text-sm text-slate-600 leading-relaxed space-y-1">
                <p class="font-bold text-slate-800 text-[15px]">Petunjuk Pengisian:</p>
                <p>Formulir ini digunakan untuk mengajukan keberatan atas permohonan informasi yang <strong>ditolak, tidak ditanggapi, atau tidak sesuai</strong> dengan ketentuan UU Keterbukaan Informasi Publik. Setelah selesai, unduh dokumen, cetak, dan tandatangani sebelum diserahkan kepada petugas PPID.</p>
            </div>
        </div>

        {{-- Form --}}
        <form action="{{ route('formulir.keberatan.download') }}" method="POST">
            @csrf

            {{-- SECTION 1: Info Permohonan Asal --}}
            <div class="mb-8">
                <div class="flex items-center pb-3 mb-6 border-b border-slate-100">
                    <span class="w-7 h-7 rounded-full bg-primary text-white text-xs font-bold flex items-center justify-center flex-shrink-0 shadow-sm" style="margin-right: 14px;">1</span>
                    <h2 class="text-base font-bold text-slate-800 tracking-wide">Data Permohonan Asal</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    {{-- Nomor Permohonan --}}
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">
                            Nomor Permohonan Informasi <span class="text-red-500">*</span>
                        </label>
                        <input type="text" name="no_permohonan" value="{{ old('no_permohonan') }}" required
                            placeholder="Contoh: 001/PPID/2025"
                            class="w-full bg-slate-50/60 hover:bg-white focus:bg-white border border-slate-200 focus:border-primary focus:ring-2 focus:ring-primary/20 rounded-xl px-4 py-2.5 text-sm text-slate-800 placeholder:text-slate-400 transition @error('no_permohonan') border-red-400 bg-red-50/20 @enderror">
                        @error('no_permohonan')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>

                    {{-- Tujuan Penggunaan --}}
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">
                            Tujuan Penggunaan Informasi <span class="text-red-500">*</span>
                        </label>
                        <input type="text" name="tujuan_penggunaan" value="{{ old('tujuan_penggunaan') }}" required
                            placeholder="Contoh: Penelitian, Laporan, Keperluan Pribadi"
                            class="w-full bg-slate-50/60 hover:bg-white focus:bg-white border border-slate-200 focus:border-primary focus:ring-2 focus:ring-primary/20 rounded-xl px-4 py-2.5 text-sm text-slate-800 placeholder:text-slate-400 transition @error('tujuan_penggunaan') border-red-400 bg-red-50/20 @enderror">
                        @error('tujuan_penggunaan')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>
                </div>
            </div>

            {{-- SECTION 2: Identitas Pemohon Keberatan --}}
            <div class="mb-8">
                <div class="flex items-center pb-3 mb-6 border-b border-slate-100">
                    <span class="w-7 h-7 rounded-full bg-primary text-white text-xs font-bold flex items-center justify-center flex-shrink-0 shadow-sm" style="margin-right: 14px;">2</span>
                    <h2 class="text-base font-bold text-slate-800 tracking-wide">Identitas Pemohon Keberatan</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    {{-- Nama Pemohon --}}
                    <div class="md:col-span-2">
                        <label class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">
                            Nama Lengkap <span class="text-red-500">*</span>
                        </label>
                        <input type="text" name="nama_pemohon" value="{{ old('nama_pemohon') }}" required
                            placeholder="Masukkan nama lengkap sesuai KTP"
                            class="w-full bg-slate-50/60 hover:bg-white focus:bg-white border border-slate-200 focus:border-primary focus:ring-2 focus:ring-primary/20 rounded-xl px-4 py-2.5 text-sm text-slate-800 placeholder:text-slate-400 transition @error('nama_pemohon') border-red-400 bg-red-50/20 @enderror">
                        @error('nama_pemohon')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>

                    {{-- Alamat Pemohon --}}
                    <div class="md:col-span-2">
                        <label class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">
                            Alamat <span class="text-red-500">*</span>
                        </label>
                        <textarea name="alamat_pemohon" rows="2" required placeholder="Masukkan alamat lengkap domisili"
                            class="w-full bg-slate-50/60 hover:bg-white focus:bg-white border border-slate-200 focus:border-primary focus:ring-2 focus:ring-primary/20 rounded-xl px-4 py-2.5 text-sm text-slate-800 placeholder:text-slate-400 transition resize-y @error('alamat_pemohon') border-red-400 bg-red-50/20 @enderror">{{ old('alamat_pemohon') }}</textarea>
                        @error('alamat_pemohon')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>

                    {{-- Nomor Telepon --}}
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">
                            Nomor Telepon <span class="text-red-500">*</span>
                        </label>
                        <input type="text" name="telepon_pemohon" value="{{ old('telepon_pemohon') }}" required
                            placeholder="Contoh: 081234567890"
                            class="w-full bg-slate-50/60 hover:bg-white focus:bg-white border border-slate-200 focus:border-primary focus:ring-2 focus:ring-primary/20 rounded-xl px-4 py-2.5 text-sm text-slate-800 placeholder:text-slate-400 transition @error('telepon_pemohon') border-red-400 bg-red-50/20 @enderror">
                        @error('telepon_pemohon')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>
                </div>
            </div>

            {{-- SECTION 3: Identitas Kuasa Pemohon (Opsional) --}}
            <div class="mb-8">
                <div class="flex items-center pb-3 mb-2 border-b border-slate-100">
                    <span class="w-7 h-7 rounded-full bg-primary text-white text-xs font-bold flex items-center justify-center flex-shrink-0 shadow-sm" style="margin-right: 14px;">3</span>
                    <h2 class="text-base font-bold text-slate-800 tracking-wide">Identitas Kuasa Pemohon</h2>
                    <span class="ml-3 text-xs text-slate-400 font-medium">(Opsional — isi jika ada kuasa)</span>
                </div>

                <p class="text-xs text-slate-400 mb-6">Isi bagian ini hanya jika permohonan keberatan dikuasakan kepada orang lain. Sertakan Surat Kuasa saat penyerahan.</p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="md:col-span-2">
                        <label class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">
                            Nama Kuasa Pemohon
                        </label>
                        <input type="text" name="nama_kuasa" value="{{ old('nama_kuasa') }}"
                            placeholder="Nama penerima kuasa (jika ada)"
                            class="w-full bg-slate-50/60 hover:bg-white focus:bg-white border border-slate-200 focus:border-primary focus:ring-2 focus:ring-primary/20 rounded-xl px-4 py-2.5 text-sm text-slate-800 placeholder:text-slate-400 transition">
                    </div>

                    <div class="md:col-span-2">
                        <label class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">
                            Alamat Kuasa
                        </label>
                        <textarea name="alamat_kuasa" rows="2" placeholder="Alamat penerima kuasa"
                            class="w-full bg-slate-50/60 hover:bg-white focus:bg-white border border-slate-200 focus:border-primary focus:ring-2 focus:ring-primary/20 rounded-xl px-4 py-2.5 text-sm text-slate-800 placeholder:text-slate-400 transition resize-y">{{ old('alamat_kuasa') }}</textarea>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">
                            Nomor Telepon Kuasa
                        </label>
                        <input type="text" name="telepon_kuasa" value="{{ old('telepon_kuasa') }}"
                            placeholder="Nomor telepon penerima kuasa"
                            class="w-full bg-slate-50/60 hover:bg-white focus:bg-white border border-slate-200 focus:border-primary focus:ring-2 focus:ring-primary/20 rounded-xl px-4 py-2.5 text-sm text-slate-800 placeholder:text-slate-400 transition">
                    </div>
                </div>
            </div>

            {{-- SECTION 4: Isi Keberatan --}}
            <div class="mt-8 mb-8">
                <div class="flex items-center pb-3 mb-6 border-b border-slate-100">
                    <span class="w-7 h-7 rounded-full bg-primary text-white text-xs font-bold flex items-center justify-center flex-shrink-0 shadow-sm" style="margin-right: 14px;">4</span>
                    <h2 class="text-base font-bold text-slate-800 tracking-wide">Substansi Keberatan</h2>
                </div>

                <div class="space-y-5">
                    {{-- Alasan Keberatan --}}
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">
                            Alasan Keberatan <span class="text-red-500">*</span>
                        </label>
                        <textarea name="alasan_keberatan" rows="4" required
                            placeholder="Tuliskan secara jelas alasan Anda mengajukan keberatan (misal: permohonan tidak ditanggapi, informasi tidak diberikan, dst.)..."
                            class="w-full bg-slate-50/60 hover:bg-white focus:bg-white border border-slate-200 focus:border-primary focus:ring-2 focus:ring-primary/20 rounded-xl px-4 py-2.5 text-sm text-slate-800 placeholder:text-slate-400 transition resize-y @error('alasan_keberatan') border-red-400 bg-red-50/20 @enderror">{{ old('alasan_keberatan') }}</textarea>
                        @error('alasan_keberatan')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>

                    {{-- Kasus Posisi --}}
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-2">
                            Kasus Posisi <span class="text-red-500">*</span>
                            <span class="text-slate-400 text-[10px] font-normal normal-case ml-1">(Tambahkan kertas bila perlu)</span>
                        </label>
                        <textarea name="kasus_posisi" rows="4" required
                            placeholder="Uraikan kronologi dan duduk perkara permohonan informasi yang menjadi dasar keberatan ini..."
                            class="w-full bg-slate-50/60 hover:bg-white focus:bg-white border border-slate-200 focus:border-primary focus:ring-2 focus:ring-primary/20 rounded-xl px-4 py-2.5 text-sm text-slate-800 placeholder:text-slate-400 transition resize-y @error('kasus_posisi') border-red-400 bg-red-50/20 @enderror">{{ old('kasus_posisi') }}</textarea>
                        @error('kasus_posisi')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>
                </div>
            </div>

            {{-- Dasar Hukum Banner --}}
            <div class="mt-8 mb-6">
                <div class="rounded-2xl bg-blue-50/70 border border-blue-100/70 p-6 sm:p-7">
                    <div class="flex items-center mb-3">
                        <div class="w-8 h-8 rounded-lg bg-blue-100 text-blue-700 flex items-center justify-center flex-shrink-0" style="margin-right: 12px;">
                            <i class="ph ph-scales text-lg"></i>
                        </div>
                        <h3 class="text-sm font-bold text-blue-900 uppercase tracking-wider">Dasar Hukum Pengajuan Keberatan</h3>
                    </div>
                    <p class="text-sm text-blue-900/70 leading-relaxed">
                        Keberatan ini diajukan berdasarkan <strong>Pasal 35 Undang-Undang Nomor 14 Tahun 2008</strong> tentang Keterbukaan Informasi Publik. Pemohon berhak mengajukan keberatan kepada Atasan PPID paling lambat <strong>30 (tiga puluh) hari kerja</strong> sejak permohonan diterima atau tanggapan diterima.
                    </p>
                </div>
            </div>

            {{-- Footer Buttons --}}
            <div class="pt-5 border-t border-slate-100 flex flex-col sm:flex-row items-center justify-between gap-4">
                <button type="reset"
                    class="w-full sm:w-auto inline-flex items-center justify-center px-6 py-3 rounded-xl border border-slate-300 bg-white text-slate-600 hover:text-slate-800 hover:bg-slate-50 text-sm font-semibold transition-all duration-200">
                    <i class="ph ph-arrow-counter-clockwise text-base" style="margin-right: 8px;"></i>
                    Reset Form
                </button>

                <button type="submit"
                    class="w-full sm:w-auto inline-flex items-center justify-center px-7 py-3 rounded-xl bg-secondary hover:bg-orange-600 text-white text-sm font-semibold shadow-md shadow-orange-200 hover:shadow-lg transition-all duration-200 hover:-translate-y-0.5">
                    <i class="ph ph-file-doc text-lg text-white" style="margin-right: 8px;"></i>
                    Download Formulir (.docx)
                </button>
            </div>

        </form>
    </div>
</div>
@endsection
