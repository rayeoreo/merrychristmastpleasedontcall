<header class="sticky top-0 z-50 border-b border-white/60 bg-white/70 shadow-lg shadow-blue-900/5 backdrop-blur-xl">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4 lg:px-8">

        <a href="#beranda" class="flex items-center" aria-label="WABlaster PRO Mobile">
            <img src="{{ asset('images/logo.png') }}" alt="WABlaster PRO Mobile"
                 class="h-9 w-auto object-contain lg:h-10">
        </a>

        <nav class="hidden items-center gap-8 lg:flex" aria-label="Navigasi utama">
            <a href="#beranda"
               class="relative text-sm font-medium text-slate-600 transition hover:text-blue-600 after:absolute after:-bottom-2 after:left-0 after:h-0.5 after:w-full after:origin-left after:scale-x-0 after:rounded-full after:bg-blue-600 after:transition-transform after:duration-300 hover:after:scale-x-100">
                Beranda
            </a>
            <a href="#fitur"
               class="relative text-sm font-medium text-slate-600 transition hover:text-blue-600 after:absolute after:-bottom-2 after:left-0 after:h-0.5 after:w-full after:origin-left after:scale-x-0 after:rounded-full after:bg-blue-600 after:transition-transform after:duration-300 hover:after:scale-x-100">
                Fitur
            </a>
            <a href="#cara-kerja"
               class="relative text-sm font-medium text-slate-600 transition hover:text-blue-600 after:absolute after:-bottom-2 after:left-0 after:h-0.5 after:w-full after:origin-left after:scale-x-0 after:rounded-full after:bg-blue-600 after:transition-transform after:duration-300 hover:after:scale-x-100">
                Cara Kerja
            </a>
            <a href="#harga"
               class="relative text-sm font-medium text-slate-600 transition hover:text-blue-600 after:absolute after:-bottom-2 after:left-0 after:h-0.5 after:w-full after:origin-left after:scale-x-0 after:rounded-full after:bg-blue-600 after:transition-transform after:duration-300 hover:after:scale-x-100">
                Harga
            </a>
            <a href="#testimoni"
               class="relative text-sm font-medium text-slate-600 transition hover:text-blue-600 after:absolute after:-bottom-2 after:left-0 after:h-0.5 after:w-full after:origin-left after:scale-x-0 after:rounded-full after:bg-blue-600 after:transition-transform after:duration-300 hover:after:scale-x-100">
                Testimoni
            </a>
            <a href="#faq"
               class="relative text-sm font-medium text-slate-600 transition hover:text-blue-600 after:absolute after:-bottom-2 after:left-0 after:h-0.5 after:w-full after:origin-left after:scale-x-0 after:rounded-full after:bg-blue-600 after:transition-transform after:duration-300 hover:after:scale-x-100">
                FAQ
            </a>
        </nav>

        <div class="hidden items-center gap-3 lg:flex">
            <a href="#kontak"
               class="text-sm font-semibold text-slate-600 transition hover:text-blue-600">
                Hubungi Kami
            </a>

            <a href="https://member.jvpartner.id/" target="_blank" rel="noopener noreferrer"
               class="rounded-xl bg-blue-600 px-5 py-2.5 text-sm font-bold text-white shadow-lg shadow-blue-600/25 ring-1 ring-inset ring-white/40 transition hover:bg-blue-700 hover:shadow-blue-600/40">
                Join Member
            </a>
        </div>

        <button type="button" id="menu-toggle"
                class="inline-flex h-11 w-11 items-center justify-center rounded-xl border border-white/60 bg-white/70 text-slate-700 shadow-sm backdrop-blur transition hover:border-blue-300 hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-600 lg:hidden"
                aria-controls="mobile-menu" aria-expanded="false" aria-label="Buka menu navigasi">

            <svg id="icon-open" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16" />
            </svg>

            <svg id="icon-close" class="hidden h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

    </div>

    <div id="mobile-menu" class="hidden border-t border-white/60 bg-white/80 shadow-lg shadow-blue-900/5 backdrop-blur-xl lg:hidden">
        <nav class="flex flex-col gap-1 px-6 py-4" aria-label="Navigasi mobile">
            <a href="#beranda" class="rounded-lg px-3 py-3 text-sm font-medium text-slate-700 transition hover:bg-blue-50 hover:text-blue-600">
                Beranda
            </a>
            <a href="#fitur" class="rounded-lg px-3 py-3 text-sm font-medium text-slate-700 transition hover:bg-blue-50 hover:text-blue-600">
                Fitur
            </a>
            <a href="#cara-kerja" class="rounded-lg px-3 py-3 text-sm font-medium text-slate-700 transition hover:bg-blue-50 hover:text-blue-600">
                Cara Kerja
            </a>
            <a href="#harga" class="rounded-lg px-3 py-3 text-sm font-medium text-slate-700 transition hover:bg-blue-50 hover:text-blue-600">
                Harga
            </a>
            <a href="#testimoni" class="rounded-lg px-3 py-3 text-sm font-medium text-slate-700 transition hover:bg-blue-50 hover:text-blue-600">
                Testimoni
            </a>
            <a href="#faq" class="rounded-lg px-3 py-3 text-sm font-medium text-slate-700 transition hover:bg-blue-50 hover:text-blue-600">
                FAQ
            </a>
            <div class="mt-2 flex flex-col gap-3 border-t border-white/70 pt-4 pb-1">
                <a href="#kontak" class="rounded-lg text-center px-4 py-3 text-sm font-semibold text-slate-700 transition hover:text-blue-600">
                    Hubungi Kami
                </a>

                <a href="https://member.jvpartner.id/" target="_blank" rel="noopener noreferrer"
                   class="rounded-xl bg-blue-600 px-5 py-3 text-center text-sm font-bold text-white shadow-lg shadow-blue-600/25 transition hover:bg-blue-700">
                    Join Member
                </a>
            </div>
        </nav>
    </div>

</header>