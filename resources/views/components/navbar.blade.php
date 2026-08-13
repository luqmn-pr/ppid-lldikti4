<nav class="fixed w-full z-50 glass-nav transition-all duration-300" id="navbar">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <div class="flex-shrink-0 flex items-center gap-3">
                <a href="{{ route('home') }}" class="flex items-center hover:opacity-90 transition-opacity">
                    <img src="{{ asset('storage/logo-ppid.png') }}" alt="Logo PPID" class="h-10 w-auto">
                </a>
            </div>
            
            <div class="hidden md:flex space-x-2 items-center">
                <a href="{{ route('home') }}" class="nav-link px-4 py-2 text-[13px] font-bold {{ request()->routeIs('home') ? 'text-primary bg-blue-50' : 'text-slate-500 hover:text-primary hover:bg-slate-50' }} rounded-full transition-colors">
                    BERANDA
                </a>
                
                <div class="relative group">
                    <a class="nav-link px-4 py-2 text-[13px] font-bold {{ request()->is('profil*') ? 'text-primary bg-blue-50' : 'text-slate-500 hover:text-primary hover:bg-slate-50' }} rounded-full transition-colors flex items-center gap-1 cursor-pointer">
                        PROFIL <i class="ph ph-caret-down"></i>
                    </a>
                    <div class="absolute left-0 mt-2 w-56 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top-left scale-95 group-hover:scale-100 z-50">
                        <div class="bg-white rounded-xl shadow-xl shadow-slate-200/50 border border-slate-100 p-2">
                            <a href="https://lldikti4.kemdiktisaintek.go.id/profil-lldikti-wilayah-4/" target="_blank" class="block px-4 py-2.5 text-sm text-slate-600 hover:bg-blue-50 hover:text-primary rounded-lg transition-colors">Profil LLDIKTI4</a>
                            <a href="{{ route('profil.ppid') }}" class="block px-4 py-2.5 text-sm {{ request()->routeIs('profil.ppid') ? 'text-primary font-medium bg-blue-50/50' : 'text-slate-600 hover:bg-blue-50 hover:text-primary' }} rounded-lg transition-colors">Profil Singkat PPID</a>
                        </div>
                    </div>
                </div>
                
                <a href="{{ route('regulasi') }}" class="nav-link px-4 py-2 text-[13px] font-bold {{ request()->routeIs('regulasi') ? 'text-primary bg-blue-50' : 'text-slate-500 hover:text-primary hover:bg-slate-50' }} rounded-full transition-colors">
                    REGULASI
                </a>
                
                <div class="relative group">
                    <a href="{{ route('informasi-publik.index') }}" class="nav-link px-4 py-2 text-[13px] font-bold {{ request()->is('informasi-publik*') ? 'text-primary bg-blue-50' : 'text-slate-500 hover:text-primary hover:bg-slate-50' }} rounded-full transition-colors flex items-center gap-1 cursor-pointer">
                        INFORMASI PUBLIK <i class="ph ph-caret-down"></i>
                    </a>
                    <div class="absolute left-0 mt-2 w-80 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top-left scale-95 group-hover:scale-100 z-50">
                        <div class="bg-white rounded-xl shadow-xl shadow-slate-200/50 border border-slate-100 p-2">
                            <a href="{{ route('informasi-publik.daftar') }}" class="block px-4 py-2.5 text-sm {{ request()->routeIs('informasi-publik.daftar') ? 'text-primary font-medium bg-blue-50/50' : 'text-slate-600 hover:bg-blue-50 hover:text-primary' }} rounded-lg transition-colors">Daftar Informasi Publik</a>
                            <a href="{{ route('informasi-publik.rekapitulasi') }}" class="block px-4 py-2.5 text-sm {{ request()->routeIs('informasi-publik.rekapitulasi') ? 'text-primary font-medium bg-blue-50/50' : 'text-slate-600 hover:bg-blue-50 hover:text-primary' }} rounded-lg transition-colors">Rekapitulasi Permohonan Informasi Publik</a>
                            <a href="{{ route('informasi-publik.index', ['tab' => 'setiap-saat']) }}" class="block px-4 py-2.5 text-sm text-slate-600 hover:bg-blue-50 hover:text-primary rounded-lg transition-colors">Informasi Tersedia Setiap Saat</a>
                            <a href="{{ route('informasi-publik.index', ['tab' => 'berkala']) }}" class="block px-4 py-2.5 text-sm text-slate-600 hover:bg-blue-50 hover:text-primary rounded-lg transition-colors">Informasi Tersedia Secara Berkala</a>
                            <a href="{{ route('informasi-publik.index', ['tab' => 'serta-merta']) }}" class="block px-4 py-2.5 text-sm text-slate-600 hover:bg-blue-50 hover:text-primary rounded-lg transition-colors">Informasi Serta Merta</a>
                            <a href="https://drive.google.com/file/d/1ayaWtCaNAbiyyEA_N9sQgm49KGW60ny1/view?usp=sharing" target="_blank" class="block px-4 py-2.5 text-sm text-slate-600 hover:bg-blue-50 hover:text-primary rounded-lg transition-colors flex justify-between items-center">
                                Informasi yang Dikecualikan <i class="ph ph-arrow-up-right text-xs opacity-50"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <a href="{{ route('tata-cara') }}" class="nav-link px-4 py-2 text-[13px] font-bold {{ request()->routeIs('tata-cara') ? 'text-primary bg-blue-50' : 'text-slate-500 hover:text-primary hover:bg-slate-50' }} rounded-full transition-colors">
                    TATA CARA
                </a>
                
                <div class="relative group">
                    <a class="nav-link px-4 py-2 text-[13px] font-bold text-slate-500 hover:text-primary hover:bg-slate-50 rounded-full transition-colors flex items-center gap-1 cursor-pointer">
                        TAUTAN <i class="ph ph-caret-down"></i>
                    </a>
                    <div class="absolute right-0 mt-2 w-72 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top-right scale-95 group-hover:scale-100 z-50">
                        <div class="bg-white rounded-xl shadow-xl shadow-slate-200/50 border border-slate-100 p-2">
                            <a href="https://kemdiktisaintek.go.id/" target="_blank" class="px-4 py-2.5 text-sm text-slate-600 hover:bg-blue-50 hover:text-primary rounded-lg transition-colors flex justify-between items-start gap-3">
                                <span>Kemdiktisaintek</span> <i class="ph ph-arrow-up-right text-xs opacity-50 flex-shrink-0 mt-1"></i>
                            </a>
                            <a href="https://ppid.kemdiktisaintek.go.id/" target="_blank" class="px-4 py-2.5 text-sm text-slate-600 hover:bg-blue-50 hover:text-primary rounded-lg transition-colors flex justify-between items-start gap-3">
                                <span>PPID Kemdiktisaintek</span> <i class="ph ph-arrow-up-right text-xs opacity-50 flex-shrink-0 mt-1"></i>
                            </a>
                            <div class="h-px bg-slate-100 my-1 mx-2"></div>
                            <a href="https://lldikti4.kemdiktisaintek.go.id/" target="_blank" class="px-4 py-2.5 text-sm text-slate-600 hover:bg-blue-50 hover:text-primary rounded-lg transition-colors flex justify-between items-start gap-3">
                                <span>Portal LLDIKTI Wilayah IV</span> <i class="ph ph-arrow-up-right text-xs opacity-50 flex-shrink-0 mt-1"></i>
                            </a>
                            <a href="https://ult.lldikti4.id/booking/" target="_blank" class="px-4 py-2.5 text-sm text-slate-600 hover:bg-blue-50 hover:text-primary rounded-lg transition-colors flex justify-between items-start gap-3">
                                <span>Layanan ULT (Booking)</span> <i class="ph ph-arrow-up-right text-xs opacity-50 flex-shrink-0 mt-1"></i>
                            </a>
                            @php
                                $general = app(\App\Settings\GeneralSettings::class);
                            @endphp
                            <a href="{{ $general->url_lapor }}" target="_blank" class="px-4 py-2.5 text-sm text-slate-600 hover:bg-blue-50 hover:text-primary rounded-lg transition-colors flex justify-between items-start gap-3">
                                <span>Layanan LAPOR!</span> <i class="ph ph-arrow-up-right text-xs opacity-50 flex-shrink-0 mt-1"></i>
                            </a>
                            <a href="https://empat.lldikti4.id/" target="_blank" class="px-4 py-2.5 text-sm text-slate-600 hover:bg-blue-50 hover:text-primary rounded-lg transition-colors flex justify-between items-start gap-3">
                                <span>Aplikasi EMPAT</span> <i class="ph ph-arrow-up-right text-xs opacity-50 flex-shrink-0 mt-1"></i>
                            </a>
                            <a href="https://jad.lldikti4.id/login" target="_blank" class="px-4 py-2.5 text-sm text-slate-600 hover:bg-blue-50 hover:text-primary rounded-lg transition-colors flex justify-between items-start gap-3">
                                <span>Aplikasi JAD</span> <i class="ph ph-arrow-up-right text-xs opacity-50 flex-shrink-0 mt-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
            
            <div class="md:hidden flex items-center">
                <button id="mobile-menu-btn" class="text-slate-500 hover:text-primary focus:outline-none">
                    <i class="ph-bold ph-list text-2xl"></i>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white/95 backdrop-blur-xl border-t border-slate-100 shadow-xl max-h-[80vh] overflow-y-auto">
        <div class="px-4 pt-2 pb-6 space-y-1">
            <a href="{{ route('home') }}" class="block px-3 py-3 rounded-lg text-base font-bold {{ request()->routeIs('home') ? 'bg-blue-50 text-primary' : 'text-slate-700 hover:bg-slate-50 hover:text-primary' }}">Beranda</a>
            
            <div class="px-3 py-2">
                <div class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Profil</div>
                <div class="space-y-1 pl-3 border-l-2 border-slate-100">
                    <a href="https://lldikti4.kemdiktisaintek.go.id/profil-lldikti-wilayah-4/" target="_blank" class="block py-2 text-sm text-slate-600 hover:text-primary">Profil LLDIKTI4</a>
                    <a href="{{ route('profil.ppid') }}" class="block py-2 text-sm {{ request()->routeIs('profil.ppid') ? 'text-primary font-medium' : 'text-slate-600 hover:text-primary' }}">Profil Singkat PPID</a>
                </div>
            </div>
            
            <a href="{{ route('regulasi') }}" class="block px-3 py-3 rounded-lg text-base font-bold {{ request()->routeIs('regulasi') ? 'bg-blue-50 text-primary' : 'text-slate-700 hover:bg-slate-50 hover:text-primary' }}">Regulasi</a>
            
            <div class="px-3 py-2">
                <div class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Informasi Publik</div>
                <div class="space-y-1 pl-3 border-l-2 border-slate-100">
                    <a href="{{ route('informasi-publik.daftar') }}" class="block py-2 text-sm {{ request()->routeIs('informasi-publik.daftar') ? 'text-primary font-medium' : 'text-slate-600 hover:text-primary' }}">Daftar Informasi Publik</a>
                    <a href="{{ route('informasi-publik.index') }}" class="block py-2 text-sm text-slate-600 hover:text-primary">Kategori Informasi</a>
                    <a href="{{ route('informasi-publik.rekapitulasi') }}" class="block py-2 text-sm {{ request()->routeIs('informasi-publik.rekapitulasi') ? 'text-primary font-medium' : 'text-slate-600 hover:text-primary' }}">Rekapitulasi Permohonan</a>
                    <a href="https://drive.google.com/file/d/1ayaWtCaNAbiyyEA_N9sQgm49KGW60ny1/view?usp=sharing" target="_blank" class="flex items-center justify-between py-2 text-sm text-slate-600 hover:text-primary">
                        Informasi yang Dikecualikan <i class="ph ph-arrow-up-right text-xs opacity-50"></i>
                    </a>
                </div>
            </div>
            
            <a href="{{ route('tata-cara') }}" class="block px-3 py-3 rounded-lg text-base font-bold {{ request()->routeIs('tata-cara') ? 'bg-blue-50 text-primary' : 'text-slate-700 hover:bg-slate-50 hover:text-primary' }}">Tata Cara</a>
            
            <div class="px-3 py-2">
                <div class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Tautan</div>
                <div class="space-y-1 pl-3 border-l-2 border-slate-100">
                    <a href="https://kemdiktisaintek.go.id/" target="_blank" class="flex items-center justify-between py-2 text-sm text-slate-600 hover:text-primary">
                        Kemdiktisaintek <i class="ph ph-arrow-up-right text-xs opacity-50"></i>
                    </a>
                    <a href="https://ppid.kemdiktisaintek.go.id/" target="_blank" class="flex items-center justify-between py-2 text-sm text-slate-600 hover:text-primary">
                        PPID Kemdiktisaintek <i class="ph ph-arrow-up-right text-xs opacity-50"></i>
                    </a>
                    <a href="https://lldikti4.kemdiktisaintek.go.id/" target="_blank" class="flex items-center justify-between py-2 text-sm text-slate-600 hover:text-primary">
                        Portal LLDIKTI Wilayah IV <i class="ph ph-arrow-up-right text-xs opacity-50"></i>
                    </a>
                    <a href="https://ult.lldikti4.id/booking/" target="_blank" class="flex items-center justify-between py-2 text-sm text-slate-600 hover:text-primary">
                        Layanan ULT (Booking) <i class="ph ph-arrow-up-right text-xs opacity-50"></i>
                    </a>
                    <a href="https://empat.lldikti4.id/" target="_blank" class="flex items-center justify-between py-2 text-sm text-slate-600 hover:text-primary">
                        Aplikasi EMPAT <i class="ph ph-arrow-up-right text-xs opacity-50"></i>
                    </a>
                    <a href="https://jad.lldikti4.id/login" target="_blank" class="flex items-center justify-between py-2 text-sm text-slate-600 hover:text-primary">
                        Aplikasi JAD <i class="ph ph-arrow-up-right text-xs opacity-50"></i>
                    </a>
                </div>
            </div>
            
        </div>
    </div>
</nav>
