<footer class="bg-primary-dark text-blue-100 pt-16 pb-6 relative overflow-hidden mt-8">
    <div class="absolute top-0 inset-x-0 h-1 bg-gradient-to-r from-secondary via-white to-secondary"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12 mb-12">
            
            <div class="md:col-span-4">
                <div class="flex items-center gap-4 mb-6">
                    <img src="{{ asset('storage/handayani.png') }}" alt="Tut Wuri Handayani" class="h-16 w-auto">
                    <div class="flex flex-col">
                        <span class="text-lg font-bold text-white leading-tight">Lembaga Layanan</span>
                        <span class="text-lg font-bold text-white leading-tight">Pendidikan Tinggi Wilayah IV</span>
                    </div>
                </div>
                <p class="text-sm text-blue-200 mb-8 leading-relaxed">
                    Lembaga Layanan Pendidikan Tinggi (LLDIKTI) Wilayah IV memfasilitasi peningkatan mutu penyelenggaraan pendidikan tinggi di Provinsi Jawa Barat dan Banten.
                </p>
                <h4 class="text-white font-bold mb-4 tracking-wide text-sm">Terhubung Bersama Kami</h4>
                <div class="flex gap-3">
                    <a href="https://www.instagram.com/lldiktiwilayah4?utm_medium=copy_link" target="_blank" title="Instagram" class="w-10 h-10 rounded-full bg-primary flex items-center justify-center hover:bg-secondary text-white transition-all">
                        <i class="fa-brands fa-instagram text-xl"></i>
                    </a>
                    <a href="https://www.tiktok.com/@lldiktiwilayah4" target="_blank" title="Tiktok" class="w-10 h-10 rounded-full bg-primary flex items-center justify-center hover:bg-secondary text-white transition-all">
                        <i class="fa-brands fa-tiktok text-lg"></i>
                    </a>
                    <a href="https://www.youtube.com/@LLDIKTIWilayahIV" target="_blank" title="Youtube" class="w-10 h-10 rounded-full bg-primary flex items-center justify-center hover:bg-secondary text-white transition-all">
                        <i class="fa-brands fa-youtube text-lg"></i>
                    </a>
                    <a href="https://www.facebook.com/lldiktiwilayah4/?tsid=0.24115179413463506&source=result" target="_blank" title="Facebook" class="w-10 h-10 rounded-full bg-primary flex items-center justify-center hover:bg-secondary text-white transition-all">
                        <i class="fa-brands fa-facebook-f text-lg"></i>
                    </a>
                </div>
            </div>
            
            <div class="hidden md:block md:col-span-1"></div>
            
            <div class="md:col-span-3">
                <h4 class="text-white font-bold mb-6 tracking-wide">Tautan Penting</h4>
                <ul class="space-y-3 text-sm">
                    <li><a href="https://lldikti4.kemdiktisaintek.go.id/" target="_blank" class="hover:text-secondary transition-colors flex items-center gap-2"><i class="ph ph-arrow-right text-blue-400"></i> Website LLDIKTI Wilayah IV</a></li>
                    <li><a href="https://ppid.kemdikbud.go.id/" target="_blank" class="hover:text-secondary transition-colors flex items-center gap-2"><i class="ph ph-arrow-right text-blue-400"></i> PPID Kemdikbudristek</a></li>
                    <li><a href="https://www.kemdikbud.go.id/" target="_blank" class="hover:text-secondary transition-colors flex items-center gap-2"><i class="ph ph-arrow-right text-blue-400"></i> Website Kemdikbudristek</a></li>
                </ul>
            </div>
            
            <div class="md:col-span-4">
                <h4 class="text-white font-bold mb-6 tracking-wide">Lokasi Kami</h4>
                <a href="https://www.google.com/maps/place/LLDIKTI+Wilayah+IV/@-6.896444,107.6333816,15z/data=!4m6!3m5!1s0x2e68e7bdf22c8919:0xacef29aa22f49986!8m2!3d-6.8992448!4d107.6377182!16s%2Fg%2F1hc36rtm3?entry=ttu&g_ep=EgoyMDI2MDgwMi4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="block w-full h-40 rounded-xl overflow-hidden border border-blue-800 opacity-90 hover:opacity-100 transition-opacity relative group">
                    <img src="https://media.wired.com/photos/59269cd37034dc5f91bec0f1/191:100/w_1280,c_limit/GoogleMapTA.jpg" alt="Map" class="w-full h-full object-cover">
                    <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-primary/40 backdrop-blur-sm">
                        <span class="bg-white text-primary px-4 py-2 rounded-full font-bold text-sm shadow-lg flex items-center gap-2">
                            <i class="ph-fill ph-map-pin"></i> Lihat Peta
                        </span>
                    </div>
                </a>
            </div>
            
        </div>
        
        <div class="border-t border-blue-900/50 pt-6 text-center md:flex md:justify-between md:text-left">
            <p class="text-xs text-blue-200/80 mb-2 md:mb-0">
                Copyright &copy; {{ date('Y') }} Lembaga Layanan Pendidikan Tinggi (LLDIKTI) Wilayah IV Jawa Barat dan Banten
            </p>
            <div class="text-xs text-blue-200/80 space-x-4">
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
