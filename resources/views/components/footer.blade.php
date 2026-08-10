@php
    $general = app(\App\Settings\GeneralSettings::class);
    $tautans = \App\Models\TautanPenting::orderBy('urutan')->get();
@endphp
<footer class="bg-primary-dark text-blue-100 pt-8 pb-4 px-6 relative overflow-hidden mt-8">
    <div class="absolute top-0 inset-x-0 h-1 bg-gradient-to-r from-secondary via-white to-secondary"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-6 mb-6">
            
            <div class="md:col-span-5">
                <div class="flex items-center gap-3 mb-3">
                    <img src="{{ asset('storage/handayani.png') }}" alt="Tut Wuri Handayani" class="h-10 w-auto">
                    <div class="flex flex-col">
                        <span class="text-base font-bold text-white leading-tight">Lembaga Layanan</span>
                        <span class="text-base font-bold text-white leading-tight">Pendidikan Tinggi Wilayah IV</span>
                    </div>
                </div>
                <p class="text-xs text-blue-200 mb-4 leading-relaxed max-w-sm">
                    {{ $general->footer_description ?: 'Lembaga Layanan Pendidikan Tinggi (LLDIKTI) Wilayah IV memfasilitasi peningkatan mutu penyelenggaraan pendidikan tinggi di Provinsi Jawa Barat dan Banten.' }}
                </p>
                <div class="flex gap-2">
                    @if($general->url_instagram)
                    <a href="{{ $general->url_instagram }}" target="_blank" title="Instagram" class="w-7 h-7 rounded-full bg-primary flex items-center justify-center hover:bg-secondary text-white transition-all">
                        <i class="fa-brands fa-instagram text-xs"></i>
                    </a>
                    @endif
                    @if($general->url_tiktok)
                    <a href="{{ $general->url_tiktok }}" target="_blank" title="Tiktok" class="w-7 h-7 rounded-full bg-primary flex items-center justify-center hover:bg-secondary text-white transition-all">
                        <i class="fa-brands fa-tiktok text-xs"></i>
                    </a>
                    @endif
                    @if($general->url_youtube)
                    <a href="{{ $general->url_youtube }}" target="_blank" title="Youtube" class="w-7 h-7 rounded-full bg-primary flex items-center justify-center hover:bg-secondary text-white transition-all">
                        <i class="fa-brands fa-youtube text-xs"></i>
                    </a>
                    @endif
                    @if($general->url_facebook)
                    <a href="{{ $general->url_facebook }}" target="_blank" title="Facebook" class="w-7 h-7 rounded-full bg-primary flex items-center justify-center hover:bg-secondary text-white transition-all">
                        <i class="fa-brands fa-facebook-f text-xs"></i>
                    </a>
                    @endif
                </div>
            </div>
            
            <div class="md:col-span-3">
                <h4 class="text-white font-bold mb-3 tracking-wide text-sm">Tautan Penting</h4>
                <ul class="space-y-2 text-xs">
                    @foreach($tautans as $tautan)
                    <li><a href="{{ $tautan->url_tautan }}" target="_blank" class="hover:text-secondary transition-colors flex items-center gap-1.5"><i class="ph ph-arrow-right text-blue-400"></i> {{ $tautan->judul_tautan }}</a></li>
                    @endforeach
                </ul>
            </div>
            
            <div class="md:col-span-4">
                <h4 class="text-white font-bold mb-3 tracking-wide text-sm">Lokasi Kami</h4>
                <a href="{{ $general->url_map }}" target="_blank" class="block w-full h-24 rounded-xl overflow-hidden border border-blue-800 opacity-90 hover:opacity-100 transition-opacity relative group">
                    <img src="https://media.wired.com/photos/59269cd37034dc5f91bec0f1/191:100/w_1280,c_limit/GoogleMapTA.jpg" alt="Map" class="w-full h-full object-cover">
                    <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-primary/40 backdrop-blur-sm">
                        <span class="bg-white text-primary px-3 py-1.5 rounded-full font-bold text-xs shadow-lg flex items-center gap-1.5">
                            <i class="ph-fill ph-map-pin"></i> Lihat Peta
                        </span>
                    </div>
                </a>
            </div>
            
        </div>
        
        <div class="border-t border-blue-900/50 pt-4 flex flex-col md:flex-row justify-between items-center gap-2">
            <p class="text-xs text-blue-200/80 m-0">
                Copyright &copy; {{ date('Y') }} Lembaga Layanan Pendidikan Tinggi (LLDIKTI) Wilayah IV Jawa Barat dan Banten
            </p>
            <div class="text-xs text-blue-200/80 space-x-3">
                <a href="#" class="hover:text-white transition-colors">Kebijakan Privasi</a>
                <a href="#" class="hover:text-white transition-colors">Syarat Ketentuan</a>
                @auth
                    <a href="{{ url('/admin') }}" class="hover:text-secondary transition-colors font-medium">Dashboard Admin</a>
                @else
                    <a href="{{ url('/admin') }}" class="hover:text-secondary transition-colors font-medium">Login Admin</a>
                @endauth
            </div>
        </div>
    </div>
</footer>
