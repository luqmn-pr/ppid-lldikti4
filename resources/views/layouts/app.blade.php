<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'Portal resmi Pejabat Pengelola Informasi dan Dokumentasi (PPID) LLDIKTI Wilayah IV Jawa Barat dan Banten.')">

    <title>@yield('title', 'PPID LLDIKTI Wilayah IV')</title>

    @php
        $favicon = app(\App\Settings\GeneralSettings::class)->favicon;
    @endphp
    @if($favicon)
        <link rel="icon" type="image/x-icon" href="{{ Storage::url($favicon) }}">
    @else
        <link rel="icon" type="image/png" href="{{ asset('storage/handayani.png') }}">
    @endif

    {{-- Phosphor Icons --}}
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    {{-- FontAwesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    {{-- Vite: CSS + JS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- UserWay Accessibility Widget (default: kanan atas) --}}
    <script src="https://cdn.userway.org/widget.js" data-account="SBAj7Cfrij"></script>

    @stack('head')
</head>

<body class="text-slate-800 antialiased overflow-x-hidden">

    {{-- Navbar --}}
    <x-navbar />

    {{-- Page Content --}}
    @yield('content')

    {{-- Footer --}}
    <x-footer />

    {{-- WhatsApp Floating Button (kanan bawah, di bawah UserWay) --}}
    <a href="https://web.whatsapp.com/send?text=a&phone=6282244121226"
       target="_blank"
       id="wa-float-btn"
       aria-label="Hubungi kami via WhatsApp"
       title="Chat WhatsApp"
       style="position:fixed; bottom:24px; right:24px; z-index:99998; width:50px; height:50px; background:#25D366; border-radius:50%; display:flex; align-items:center; justify-content:center; box-shadow:0 4px 16px rgba(37,211,102,0.4); text-decoration:none; transition:transform .2s, box-shadow .2s;"
       onmouseover="this.style.transform='scale(1.1)'; this.style.boxShadow='0 6px 24px rgba(37,211,102,0.55)'"
       onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 4px 16px rgba(37,211,102,0.4)'">
        <i class="fa-brands fa-whatsapp" style="color:#fff; font-size:1.5rem;"></i>
    </a>

    {{-- TTS Floating Button (kiri bawah) --}}
    <button id="tts-toggle-btn"
        aria-label="Aktifkan Text to Speech"
        title="Text to Speech"
        onclick="toggleTTS()"
        style="position:fixed; bottom:24px; left:24px; z-index:99999; width:48px; height:48px; background:#1e3a8a; border:none; border-radius:50%; display:flex; align-items:center; justify-content:center; cursor:pointer; box-shadow:0 4px 16px rgba(30,58,138,0.35); transition:all .2s;">
        <i id="tts-icon" class="ph ph-speaker-simple-x" style="color:#fff; font-size:1.3rem;"></i>
    </button>
    {{-- TTS Label tooltip --}}
    <div id="tts-label" style="position:fixed; bottom:80px; left:24px; z-index:99999; background:#1e3a8a; color:#fff; font-size:0.7rem; font-weight:600; padding:4px 10px; border-radius:20px; white-space:nowrap; opacity:0; transition:opacity .2s; pointer-events:none; letter-spacing:0.04em;">TTS Nonaktif</div>

    {{-- TTS Script --}}
    <script>
    (function() {
        let ttsActive = false;
        let currentUtterance = null;
        const synth = window.speechSynthesis;

        window.toggleTTS = function() {
            ttsActive = !ttsActive;
            const btn = document.getElementById('tts-toggle-btn');
            const icon = document.getElementById('tts-icon');
            const label = document.getElementById('tts-label');

            if (ttsActive) {
                btn.style.background = '#f97316';
                btn.style.boxShadow = '0 4px 16px rgba(249,115,22,0.45)';
                icon.className = 'ph ph-speaker-simple-high';
                label.textContent = 'TTS Aktif';
                label.style.background = '#f97316';
                label.style.opacity = '1';
                setTimeout(() => { label.style.opacity = '0'; }, 2000);
                speak('Text to speech aktif');
            } else {
                synth.cancel();
                btn.style.background = '#1e3a8a';
                btn.style.boxShadow = '0 4px 16px rgba(30,58,138,0.35)';
                icon.className = 'ph ph-speaker-simple-x';
                label.textContent = 'TTS Nonaktif';
                label.style.background = '#1e3a8a';
                label.style.opacity = '1';
                setTimeout(() => { label.style.opacity = '0'; }, 1500);
            }
        };

        function speak(text) {
            if (!ttsActive || !text || !synth) return;
            synth.cancel();
            const utt = new SpeechSynthesisUtterance(text.trim());
            utt.lang = 'id-ID';
            utt.rate = 0.92;
            utt.pitch = 1;
            synth.speak(utt);
        }

        function getTextForElement(el) {
            // Prioritas: data-tts > aria-label > title > innerText (dibatasi)
            if (el.dataset && el.dataset.tts) return el.dataset.tts;
            if (el.getAttribute('aria-label')) return el.getAttribute('aria-label');
            if (el.getAttribute('title')) return el.getAttribute('title');
            const text = el.innerText || el.textContent || '';
            return text.replace(/\s+/g, ' ').trim().substring(0, 120);
        }

        function attachTTS() {
            // Semua elemen yang bisa di-hover: a, button, [role=button], .card-like, [data-tts]
            const selectors = [
                'a[href]',
                'button',
                '[role="button"]',
                '[data-tts]',
                '.group',
            ].join(', ');

            document.querySelectorAll(selectors).forEach(el => {
                if (el._ttsAttached) return;
                el._ttsAttached = true;

                el.addEventListener('mouseenter', function() {
                    if (!ttsActive) return;
                    const text = getTextForElement(this);
                    if (text && text.length > 1) speak(text);
                });

                el.addEventListener('focus', function() {
                    if (!ttsActive) return;
                    const text = getTextForElement(this);
                    if (text && text.length > 1) speak(text);
                });

                el.addEventListener('mouseleave', function() {
                    // Tidak cancel saat leave agar kalimat selesai dibaca
                });
            });
        }

        // Attach saat DOM siap
        document.addEventListener('DOMContentLoaded', attachTTS);

        // Re-attach jika ada konten dinamis (misal dropdown)
        const observer = new MutationObserver(function() {
            attachTTS();
        });
        document.addEventListener('DOMContentLoaded', function() {
            observer.observe(document.body, { childList: true, subtree: true });
        });

        // Fallback: jika speech synthesis tidak didukung browser
        if (!('speechSynthesis' in window)) {
            document.getElementById('tts-toggle-btn').style.display = 'none';
        }
    })();
    </script>

    @stack('scripts')
</body>
</html>
