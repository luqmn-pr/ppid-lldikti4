@php
    $general = app(\App\Settings\GeneralSettings::class);
@endphp
<footer style="background:#1e3a5f; color:#bfdbfe; padding-top:2.5rem; padding-bottom:1rem; position:relative; overflow:hidden; margin-top:2rem;">
    <div style="position:absolute; top:0; left:0; right:0; height:4px; background:linear-gradient(to right, #f97316, #fff, #f97316);"></div>
    <div style="max-width:1200px; margin:0 auto; padding:0 1.5rem;">

        {{-- Main row --}}
        <div style="display:flex; flex-wrap:wrap; gap:2.5rem; margin-bottom:2rem;">

            {{-- Kiri: Logo + Sosmed --}}
            <div style="flex:0 0 280px; min-width:220px;">
                <div style="display:flex; align-items:center; gap:0.75rem; margin-bottom:0.75rem;">
                    @php
                        $logo = $general->site_logo;
                    @endphp
                    @if($logo)
                        <img src="{{ Storage::url($logo) }}" alt="Logo" style="height:40px; width:auto;">
                    @else
                        <img src="{{ asset('storage/handayani.png') }}" alt="Logo" style="height:40px; width:auto;">
                    @endif
                    <div>
                        <div style="color:#fff; font-weight:700; font-size:0.95rem; line-height:1.3;">Lembaga Layanan</div>
                        <div style="color:#fff; font-weight:700; font-size:0.95rem; line-height:1.3;">Pendidikan Tinggi Wilayah IV</div>
                    </div>
                </div>
                <p style="color:#bfdbfe; font-size:0.75rem; line-height:1.7; margin-bottom:1.25rem; max-width:260px;">
                    {{ $general->footer_description ?: 'LLDIKTI Wilayah IV memfasilitasi peningkatan mutu penyelenggaraan pendidikan tinggi di Provinsi Jawa Barat dan Banten.' }}
                </p>
                <div style="display:flex; gap:0.5rem; flex-wrap:wrap;">
                    @if($general->url_instagram)
                    <a href="{{ $general->url_instagram }}" target="_blank" title="Instagram" style="width:32px;height:32px;border-radius:50%;background:#1d4ed8;display:flex;align-items:center;justify-content:center;color:#fff;text-decoration:none;transition:background .2s;" onmouseover="this.style.background='#f97316'" onmouseout="this.style.background='#1d4ed8'">
                        <i class="fa-brands fa-instagram" style="font-size:0.8rem;"></i>
                    </a>
                    @endif
                    @if($general->url_tiktok)
                    <a href="{{ $general->url_tiktok }}" target="_blank" title="TikTok" style="width:32px;height:32px;border-radius:50%;background:#1d4ed8;display:flex;align-items:center;justify-content:center;color:#fff;text-decoration:none;" onmouseover="this.style.background='#f97316'" onmouseout="this.style.background='#1d4ed8'">
                        <i class="fa-brands fa-tiktok" style="font-size:0.8rem;"></i>
                    </a>
                    @endif
                    @if($general->url_youtube)
                    <a href="{{ $general->url_youtube }}" target="_blank" title="YouTube" style="width:32px;height:32px;border-radius:50%;background:#1d4ed8;display:flex;align-items:center;justify-content:center;color:#fff;text-decoration:none;" onmouseover="this.style.background='#f97316'" onmouseout="this.style.background='#1d4ed8'">
                        <i class="fa-brands fa-youtube" style="font-size:0.8rem;"></i>
                    </a>
                    @endif
                    @if($general->url_facebook)
                    <a href="{{ $general->url_facebook }}" target="_blank" title="Facebook" style="width:32px;height:32px;border-radius:50%;background:#1d4ed8;display:flex;align-items:center;justify-content:center;color:#fff;text-decoration:none;" onmouseover="this.style.background='#f97316'" onmouseout="this.style.background='#1d4ed8'">
                        <i class="fa-brands fa-facebook-f" style="font-size:0.8rem;"></i>
                    </a>
                    @endif
                </div>
            </div>

            {{-- Garis pemisah --}}
            <div style="width:1px; background:rgba(255,255,255,0.1); align-self:stretch; flex-shrink:0;"></div>

            {{-- Kanan: Informasi Pelayanan --}}
            <div style="flex:1; min-width:300px;">
                <div style="color:#fff; font-weight:700; font-size:0.85rem; margin-bottom:1rem; padding-bottom:0.6rem; border-bottom:1px solid rgba(255,255,255,0.1); letter-spacing:0.05em;">
                    Informasi Pelayanan
                </div>
                <div style="display:grid; grid-template-columns:1fr 1fr; gap:1.25rem;">

                    {{-- Alamat --}}
                    <div style="display:flex; align-items:flex-start; gap:0.75rem;">
                        <div style="width:32px;height:32px;border-radius:8px;background:rgba(255,255,255,0.08);display:flex;align-items:center;justify-content:center;flex-shrink:0;margin-top:2px;">
                            <i class="ph-fill ph-map-pin" style="color:#93c5fd; font-size:1rem;"></i>
                        </div>
                        <div>
                            <p style="color:#fff; font-size:0.72rem; font-weight:600; margin:0 0 4px;">Alamat Kantor</p>
                            <p style="color:#bfdbfe; font-size:0.72rem; line-height:1.6; margin:0;">{{ $general->alamat_kantor }}</p>
                        </div>
                    </div>

                    {{-- Waktu --}}
                    <div style="display:flex; align-items:flex-start; gap:0.75rem;">
                        <div style="width:32px;height:32px;border-radius:8px;background:rgba(255,255,255,0.08);display:flex;align-items:center;justify-content:center;flex-shrink:0;margin-top:2px;">
                            <i class="ph-fill ph-clock" style="color:#93c5fd; font-size:1rem;"></i>
                        </div>
                        <div>
                            <p style="color:#fff; font-size:0.72rem; font-weight:600; margin:0 0 4px;">Waktu Pelayanan</p>
                            <p style="color:#bfdbfe; font-size:0.72rem; line-height:1.6; margin:0;">{{ $general->waktu_pelayanan }}</p>
                        </div>
                    </div>

                    {{-- Kontak --}}
                    <div style="display:flex; align-items:flex-start; gap:0.75rem;">
                        <div style="width:32px;height:32px;border-radius:8px;background:rgba(255,255,255,0.08);display:flex;align-items:center;justify-content:center;flex-shrink:0;margin-top:2px;">
                            <i class="ph-fill ph-phone" style="color:#93c5fd; font-size:1rem;"></i>
                        </div>
                        <div>
                            <p style="color:#fff; font-size:0.72rem; font-weight:600; margin:0 0 4px;">Kontak Cepat</p>
                            <p style="color:#bfdbfe; font-size:0.72rem; line-height:1.6; margin:0;">
                                ULT: {{ $general->kontak_telepon }}<br>
                                WA: {{ $general->kontak_whatsapp }}
                            </p>
                        </div>
                    </div>

                    {{-- Email --}}
                    <div style="display:flex; align-items:flex-start; gap:0.75rem;">
                        <div style="width:32px;height:32px;border-radius:8px;background:rgba(255,255,255,0.08);display:flex;align-items:center;justify-content:center;flex-shrink:0;margin-top:2px;">
                            <i class="ph-fill ph-envelope-simple" style="color:#93c5fd; font-size:1rem;"></i>
                        </div>
                        <div>
                            <p style="color:#fff; font-size:0.72rem; font-weight:600; margin:0 0 4px;">Email Resmi</p>
                            <a href="mailto:{{ $general->email_resmi }}" style="color:#bfdbfe; font-size:0.72rem; text-decoration:none; transition:color .2s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='#bfdbfe'">{{ $general->email_resmi }}</a>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        {{-- Bottom bar --}}
        <div style="border-top:1px solid rgba(255,255,255,0.08); padding-top:1rem; display:flex; flex-wrap:wrap; justify-content:space-between; align-items:center; gap:0.75rem;">
            <p style="color:rgba(191,219,254,0.7); font-size:0.72rem; margin:0;">
                Copyright &copy; {{ date('Y') }} Lembaga Layanan Pendidikan Tinggi (LLDIKTI) Wilayah IV Jawa Barat dan Banten
            </p>
            <div style="display:flex; gap:1rem; font-size:0.72rem; color:rgba(191,219,254,0.7);">
                <a href="#" style="color:rgba(191,219,254,0.7); text-decoration:none;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='rgba(191,219,254,0.7)'">Kebijakan Privasi</a>
                <a href="#" style="color:rgba(191,219,254,0.7); text-decoration:none;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='rgba(191,219,254,0.7)'">Syarat Ketentuan</a>
            </div>
        </div>

    </div>
</footer>
