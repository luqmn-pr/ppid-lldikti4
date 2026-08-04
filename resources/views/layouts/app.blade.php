<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'Portal resmi Pejabat Pengelola Informasi dan Dokumentasi (PPID) LLDIKTI Wilayah IV Jawa Barat dan Banten.')">

    <title>@yield('title', 'PPID LLDIKTI Wilayah IV')</title>

    {{-- Phosphor Icons --}}
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    {{-- FontAwesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    {{-- Vite: CSS + JS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('head')
</head>

<body class="text-slate-800 antialiased overflow-x-hidden">

    {{-- Navbar --}}
    <x-navbar />

    {{-- Page Content --}}
    @yield('content')

    {{-- Footer --}}
    <x-footer />

    @stack('scripts')
</body>
</html>
