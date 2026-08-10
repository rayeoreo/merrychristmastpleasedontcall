<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="WABlaster PRO Mobile - WhatsApp Marketing Automation untuk bisnis. Kelola pemasaran WhatsApp, kirim promosi massal, dan bangun database pelanggan langsung dari smartphone.">
    <meta name="theme-color" content="#2563eb">
    <title>
        @hasSection('title')
            @yield('title') | WABlaster PRO Mobile
        @else
            WABlaster PRO Mobile - WhatsApp Marketing Automation
        @endif
    </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="overflow-x-hidden bg-white font-sans text-slate-800 antialiased selection:bg-blue-600 selection:text-white">

    <a href="#beranda"
       class="sr-only focus:not-sr-only focus:absolute focus:z-50 focus:bg-blue-600 focus:px-4 focus:py-2 focus:text-white">
        Langsung ke konten
    </a>

    <main>
        @yield('content')
    </main>

</body>

</html>