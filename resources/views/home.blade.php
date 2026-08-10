@extends('layouts.app')

@section('content')

    @include('components.navbar')
    @include('components.hero')

    <section id="fitur" class="scroll-mt-24 bg-slate-50/60 py-20 lg:py-28">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            <div class="mx-auto max-w-2xl text-center">
                <span class="text-sm font-bold uppercase tracking-wider text-blue-600">Fitur Unggulan</span>
                <h2 class="mt-4 text-3xl font-black tracking-tight text-slate-950 sm:text-4xl">
                    Semua yang Anda butuhkan untuk <span class="text-blue-600">pemasaran WhatsApp</span>
                </h2>
                <p class="mt-5 text-lg leading-8 text-slate-600">
                    Kendalikan campaign pemasaran dari satu aplikasi, langsung dari smartphone.
                </p>
            </div>

            <div class="mt-16 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">

                <div class="group rounded-2xl border border-slate-200 bg-white p-7 shadow-sm transition hover:-translate-y-1 hover:border-blue-200 hover:shadow-xl hover:shadow-blue-600/10">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-600 text-white shadow-lg shadow-blue-600/25">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 20h9M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z" />
                        </svg>
                    </div>
                    <h3 class="mt-5 text-xl font-bold text-slate-900">Campaign Massal</h3>
                    <p class="mt-3 leading-7 text-slate-600">
                        Kirim pesan promosi ke ratusan atau ribuan kontak sekaligus
                        langsung dari smartphone tanpa berhenti.
                    </p>
                </div>

                <div class="group rounded-2xl border border-slate-200 bg-white p-7 shadow-sm transition hover:-translate-y-1 hover:border-blue-200 hover:shadow-xl hover:shadow-blue-600/10">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-600 text-white shadow-lg shadow-blue-600/25">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <h3 class="mt-5 text-xl font-bold text-slate-900">Kelola Kontak</h3>
                    <p class="mt-3 leading-7 text-slate-600">
                        Bangun dan atur database pelanggan, kelompokkan segmen,
                        dan kelola daftar kontak dengan mudah.
                    </p>
                </div>

                <div class="group rounded-2xl border border-slate-200 bg-white p-7 shadow-sm transition hover:-translate-y-1 hover:border-blue-200 hover:shadow-xl hover:shadow-blue-600/10">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-600 text-white shadow-lg shadow-blue-600/25">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="mt-5 text-xl font-bold text-slate-900">Penjadwalan Otomatis</h3>
                    <p class="mt-3 leading-7 text-slate-600">
                        Jadwalkan pesan promo pada waktu terbaik agar kontak Anda
                        selalu menerima informasi tepat waktu.
                    </p>
                </div>

                <div class="group rounded-2xl border border-slate-200 bg-white p-7 shadow-sm transition hover:-translate-y-1 hover:border-blue-200 hover:shadow-xl hover:shadow-blue-600/10">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-600 text-white shadow-lg shadow-blue-600/25">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                    </div>
                    <h3 class="mt-5 text-xl font-bold text-slate-900">Laporan Real-time</h3>
                    <p class="mt-3 leading-7 text-slate-600">
                        Pantau progress campaign, pesan terkirim, dan performa
                        pemasaran dengan laporan yang jelas.
                    </p>
                </div>

                <div class="group rounded-2xl border border-slate-200 bg-white p-7 shadow-sm transition hover:-translate-y-1 hover:border-blue-200 hover:shadow-xl hover:shadow-blue-600/10">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-600 text-white shadow-lg shadow-blue-600/25">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 5a2 2 0 012-2h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5zm6 10h6m-6-3h6m-3-3h3" />
                        </svg>
                    </div>
                    <h3 class="mt-5 text-xl font-bold text-slate-900">Template Pesan</h3>
                    <p class="mt-3 leading-7 text-slate-600">
                        Gunakan template siap pakai untuk mempercepat pembuatan
                        pesan promosi yang menarik dan efektif.
                    </p>
                </div>

                <div class="group rounded-2xl border border-slate-200 bg-white p-7 shadow-sm transition hover:-translate-y-1 hover:border-blue-200 hover:shadow-xl hover:shadow-blue-600/10">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-600 text-white shadow-lg shadow-blue-600/25">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                    <h3 class="mt-5 text-xl font-bold text-slate-900">Aman &amp; Pribadi</h3>
                    <p class="mt-3 leading-7 text-slate-600">
                        Data kontak dan campaign Anda dikelola dengan aman,
                        langsung dari perangkat Anda sendiri.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <section id="cara-kerja" class="py-20 lg:py-28">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            <div class="mx-auto max-w-2xl text-center">
                <span class="text-sm font-bold uppercase tracking-wider text-blue-600">Cara Kerja</span>
                <h2 class="mt-4 text-3xl font-black tracking-tight text-slate-950 sm:text-4xl">
                    Mulai dalam 3 langkah mudah
                </h2>
                <p class="mt-5 text-lg leading-8 text-slate-600">
                    Tidak perlu keahlian teknis. WABlaster PRO Mobile siap dipakai
                    dalam hitungan menit.
                </p>
            </div>

            <div class="mt-16 grid gap-8 md:grid-cols-3">

                <div class="relative rounded-2xl border border-slate-200 bg-white p-8 shadow-sm">
                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-600 text-xl font-black text-white shadow-lg shadow-blue-600/25">1</div>
                    <h3 class="mt-6 text-lg font-bold text-slate-900">Unduh &amp; Install</h3>
                    <p class="mt-3 leading-7 text-slate-600">
                        Unduh aplikasi WABlaster PRO Mobile dan install di perangkat
                        Android Anda.
                    </p>
                </div>

                <div class="relative rounded-2xl border border-slate-200 bg-white p-8 shadow-sm">
                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-600 text-xl font-black text-white shadow-lg shadow-blue-600/25">2</div>
                    <h3 class="mt-6 text-lg font-bold text-slate-900">Import Kontak</h3>
                    <p class="mt-3 leading-7 text-slate-600">
                        Tambahkan atau import daftar kontak pelanggan, lalu kelompokkan
                        sesuai kebutuhan bisnis Anda.
                    </p>
                </div>

                <div class="relative rounded-2xl border border-slate-200 bg-white p-8 shadow-sm">
                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-600 text-xl font-black text-white shadow-lg shadow-blue-600/25">3</div>
                    <h3 class="mt-6 text-lg font-bold text-slate-900">Jalankan Campaign</h3>
                    <p class="mt-3 leading-7 text-slate-600">
                        Kirim pesan promosi terjadwal dan pantau hasilnya secara
                        real-time dari panel aplikasi.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <section id="harga" class="scroll-mt-24 bg-gradient-to-b from-blue-700 via-blue-600 to-blue-700 py-20 lg:py-28">
        <div class="mx-auto max-w-5xl px-6 lg:px-8">

            <div class="mx-auto max-w-2xl text-center">
                <span class="text-sm font-bold uppercase tracking-wider text-blue-200">Paket Harga</span>
                <h2 class="mt-4 text-3xl font-black tracking-tight text-white sm:text-4xl">
                    Pilih paket yang sesuai kebutuhan
                </h2>
                <p class="mt-5 text-lg leading-8 text-blue-100">
                    Satu kali bayar untuk otomatisasi pemasaran WhatsApp Anda.
                </p>
            </div>

            <div class="mx-auto mt-16 grid max-w-4xl gap-8 lg:grid-cols-2">

                <div class="relative flex flex-col rounded-3xl bg-white p-8 shadow-2xl shadow-blue-900/25 ring-4 ring-white/20 lg:ring-blue-400">
                    <span class="absolute -top-4 left-1/2 -translate-x-1/2 whitespace-nowrap rounded-full bg-gradient-to-r from-yellow-400 to-amber-400 px-4 py-1 text-xs font-black uppercase tracking-wide text-blue-900 shadow-lg">
                        Paling Recommended
                    </span>

                    <div class="flex items-center gap-4">
                        <img src="{{ asset('images/wabpromobform.png') }}" alt="WABlasterPro Mobile"
                             class="h-16 w-16 shrink-0 rounded-2xl object-contain">
                        <div>
                            <h3 class="text-lg font-bold text-slate-900">WABlaster PRO Mobile</h3>
                            <p class="mt-1 text-sm text-slate-500">WABlasterPro Mobile &middot; Sekali bayar</p>
                        </div>
                    </div>

                    <div class="mt-6 rounded-2xl bg-blue-50 p-5">
                        <div class="flex items-baseline justify-between">
                            <span class="text-sm font-semibold text-slate-500">Harga Normal</span>
                            <span class="text-xl font-bold text-slate-400 line-through decoration-red-400">
                                Rp497.002
                            </span>
                        </div>
                        <div class="mt-3 flex items-baseline justify-between">
                            <span class="text-sm font-semibold text-slate-500">Diskon</span>
                            <span class="text-lg font-bold text-yellow-600">−Rp248.501</span>
                        </div>
                        <div class="mt-4 border-t border-blue-100 pt-4">
                            <p class="text-sm font-semibold text-slate-500">Total &ndash; Bayar</p>
                            <p class="mt-1 text-4xl font-black tracking-tight text-blue-600">Rp249.000</p>
                        </div>
                    </div>

                    <ul class="mt-8 flex-1 space-y-4 text-sm text-slate-600">
                        <li class="flex items-center gap-3"><span class="text-blue-600">✓</span> Tahun Berikutnya 199.000</li>
                        <li class="flex items-center gap-3"><span class="text-blue-600">✓</span> Penjadwalan otomatis</li>
                        <li class="flex items-center gap-3"><span class="text-blue-600">✓</span> Laporan real-time</li>
                    </ul>

                    <a href="#download"
                       class="mt-8 flex w-full items-center justify-center rounded-xl bg-blue-600 px-6 py-3.5 text-sm font-bold text-white shadow-xl shadow-blue-600/25 transition hover:-translate-y-0.5 hover:bg-blue-700">
                        Beli Sekarang &ndash; Rp249.999
                    </a>
                </div>

                <div class="relative flex flex-col rounded-3xl border border-white/40 bg-white/10 p-8 backdrop-blur">
                    <span class="absolute -top-4 left-1/2 -translate-x-1/2 whitespace-nowrap rounded-full bg-white/90 px-4 py-1 text-xs font-black uppercase tracking-wide text-blue-700 shadow-lg">
                        Coming Soon
                    </span>

                    <h3 class="text-lg font-bold text-white">One Time Payment</h3>
                    <p class="mt-1 text-sm text-blue-100">Opsi pembayaran sekali untuk selamanya</p>

                    <div class="mt-6 rounded-2xl bg-white/10 p-5 ring-1 ring-white/20">
                        <div class="flex items-baseline justify-between">
                            <span class="text-sm font-semibold text-blue-100">Harga Normal</span>
                            <span class="text-xl font-bold text-blue-200 line-through decoration-red-400">
                                Rp999.999
                            </span>
                        </div>
                        <div class="mt-3 flex items-baseline justify-between">
                            <span class="text-sm font-semibold text-blue-100">Diskon</span>
                            <span class="text-lg font-bold text-yellow-300">−Rp500.000</span>
                        </div>
                        <div class="mt-4 border-t border-white/20 pt-4">
                            <p class="text-sm font-semibold text-blue-100">Total &ndash; Satu Kali Bayar</p>
                            <p class="mt-1 text-4xl font-black tracking-tight text-white">Rp499.999</p>
                        </div>
                    </div>

                    <ul class="mt-8 flex-1 space-y-4 text-sm text-blue-50">
                        <li class="flex items-center gap-3"><span class="text-white">✓</span> Semua fitur WABPROMOB</li>
                        <li class="flex items-center gap-3"><span class="text-white">✓</span> Pembayaran sekali saja</li>
                        <li class="flex items-center gap-3"><span class="text-white">✓</span> Tanpa biaya bulanan</li>
                        <li class="flex items-center gap-3"><span class="text-white">✓</span> Upgrade seumur hidup</li>
                    </ul>

                    <button type="button" disabled
                            class="mt-8 flex w-full cursor-not-allowed items-center justify-center rounded-xl border border-white/30 bg-white/10 px-6 py-3.5 text-sm font-bold text-blue-100/60 opacity-70">
                        Segera Hadir
                    </button>
                </div>

            </div>

            <div class="mt-14">
                <p class="text-center text-sm font-semibold uppercase tracking-wider text-blue-200">
                    Metode pembayaran didukung
                </p>

                <div class="mx-auto mt-6 flex max-w-3xl flex-wrap items-center justify-center gap-3">
                    <div class="flex items-center gap-2 rounded-2xl border border-white/15 bg-white/10 px-4 py-2.5 text-sm font-bold text-white shadow-sm backdrop-blur">
                        <svg class="h-5 w-5 text-blue-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h2m4 0h2m2 0h1m-13 5h14a2 2 0 002-2V8a2 2 0 00-2-2H6a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        Bank Transfer
                    </div>

                    <div class="flex items-center gap-2 rounded-2xl border border-white/15 bg-white/10 px-4 py-2 text-sm font-bold text-white shadow-sm backdrop-blur">
                        <svg class="h-5 w-5 text-blue-200" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l2.4 2.4H19v4.6L21.4 11.4a1.4 1.4 0 010 2L19 15.6v4.6h-4.6L12 22.6 9.6 20.2H5v-4.6L2.6 13.4a1.4 1.4 0 010-2L5 8.6V4.4h4.6L12 2zm0 5.2a4.8 4.8 0 100 9.6 4.8 4.8 0 000-9.6zm0 2a2.8 2.8 0 110 5.6 2.8 2.8 0 010-5.6z" />
                        </svg>
                        QRIS
                    </div>

                    <div class="flex items-center gap-2 rounded-2xl border border-white/15 bg-white/10 px-4 py-2 text-sm font-bold text-white shadow-sm backdrop-blur">
                        <svg class="h-5 w-5 text-blue-200" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 3a9 9 0 00-9 9 9 9 0 002.6 6.4l.7.6-1 3.2 3.4-1 .6.4A9 9 0 0012 21a9 9 0 009-9 9 9 0 00-9-9zm3.8 12.2c-.2.5-1.1 1-1.6 1-.4 0-.9.1-2.3-.6-1.6-.8-3-2.3-3.5-3.3-.4-.8-.4-1.5-.2-2 .1-.3.4-.6.8-.7h.6c.3 0 .5-.1.7.1.3.2.9 1.2 1 1.3.1.1.1.3 0 .4-.4.5-.5.6-.3.9.6 1 1.4 1.8 2 2.2.2.2.3.2.4.1l1-1c.2-.2.3-.2.5 0l1.7 1c.2.1.3.3.2.4z" />
                        </svg>
                        DANA
                    </div>

                    <div class="flex items-center gap-2 rounded-2xl border border-white/15 bg-white/10 px-4 py-2 text-sm font-bold text-white shadow-sm backdrop-blur">
                        <svg class="h-5 w-5 text-blue-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zm0 0c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3zM5 16c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3zm0 0c1.66 0 3 1.34 3 3m8-3c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zM19 16c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" />
                        </svg>
                        GoPay
                    </div>

                    <div class="flex items-center gap-2 rounded-2xl border border-white/15 bg-white/10 px-4 py-2 text-sm font-bold text-white shadow-sm backdrop-blur">
                        <svg class="h-5 w-5 text-blue-200" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2a10 10 0 100 20 10 10 0 000-20zm4 9.2v2.6a1 1 0 01-1 1h-.4v2.6a.8.8 0 01-.8.8h-.2a1.4 1.4 0 01-1.4-1.1v-2.3l-1.1 2.1a1.6 1.6 0 01-1.4.9h-.9a3.3 3.3 0 01-1.5-.3 1 1 0 01-.5-1.3l3.3-5.6v-2a.7.7 0 01.7-.7h2a.7.7 0 01.8.8v1.6h.9a1 1 0 011 1z" />
                        </svg>
                        OVO
                    </div>

                    <div class="flex items-center gap-2 rounded-2xl border border-white/15 bg-white/10 px-4 py-2 text-sm font-bold text-white shadow-sm backdrop-blur">
                        <svg class="h-5 w-5 text-blue-200" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M6 12a6 6 0 116 6 6 6 0 01-6-6zM2 12a10 10 0 0010 10 10 10 0 10-10-10z" />
                        </svg>
                        ShopeePay
                    </div>
                </div>
            </div>

            <p class="mt-10 text-center text-sm text-blue-100">
                * Metode pembayaran &amp; harga yang tampil dapat berubah sewaktu-waktu. Diskon mengikuti kode unik.
            </p>

        </div>
    </section>

    <section id="testimoni" class="scroll-mt-24 bg-white py-20 lg:py-28">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            <div class="mx-auto max-w-2xl text-center">
                <span class="text-sm font-bold uppercase tracking-wider text-blue-600">Testimoni</span>
                <h2 class="mt-4 text-3xl font-black tracking-tight text-slate-950 sm:text-4xl">
                    Dipercaya oleh pelanggan kami
                </h2>
                <p class="mt-5 text-lg leading-8 text-slate-600">
                    Geser untuk melihat ulasan dari para pelanggan.
                </p>
            </div>

            <div class="relative mt-16">

                <div class="overflow-hidden">
                    <div id="testimoni-track"
                         class="flex gap-6 transition-transform duration-500 ease-out will-change-transform">

                    <article class="w-[85%] shrink-0 snap-start rounded-2xl border border-slate-200 bg-slate-50/70 p-7 sm:w-[380px]">
                        <div class="flex gap-1 text-blue-600">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                        <p class="mt-4 leading-7 text-slate-600">
                            "Produk-produk dari JV Partner Indonesia ini sangat mendukung untuk marketing
                            UMKM di Indonesia, investasi murah untuk peningkatan omset yang luar biasa."
                        </p>
                        <div class="mt-6 flex items-center gap-3">
                            <div class="flex h-11 w-11 items-center justify-center rounded-full bg-blue-600 font-bold text-white">F</div>
                            <div>
                                <div class="font-bold text-slate-900">Fathoni Hamzah</div>
                                <div class="mt-0.5 text-sm text-slate-500">CEO &middot; www.sahabatukm.id</div>
                            </div>
                        </div>
                    </article>

                    <article class="w-[85%] shrink-0 snap-start rounded-2xl border border-slate-200 bg-slate-50/70 p-7 sm:w-[380px]">
                        <div class="flex gap-1 text-blue-600">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                        <p class="mt-4 leading-7 text-slate-600">
                            "Vendor terpercaya dan sangat bertanggungjawab, saya sudah berlangganan sejak
                            2016 hingga sekarang, aplikasinya terus diupdate dan disupport."
                        </p>
                        <div class="mt-6 flex items-center gap-3">
                            <div class="flex h-11 w-11 items-center justify-center rounded-full bg-blue-600 font-bold text-white">F</div>
                            <div>
                                <div class="font-bold text-slate-900">Ferdian Setiadi</div>
                                <div class="mt-0.5 text-sm text-slate-500">Founder &middot; www.Travelingbromo.com</div>
                            </div>
                        </div>
                    </article>

                    <article class="w-[85%] shrink-0 snap-start rounded-2xl border border-slate-200 bg-slate-50/70 p-7 sm:w-[380px]">
                        <div class="flex gap-1 text-blue-600">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                        <p class="mt-4 leading-7 text-slate-600">
                            "After sale service-nya keren, team support selalu ready di hari dan jam kerja,
                            user pasti dibantu jika ada kendala, bisa dibantu via remote juga, good job."
                        </p>
                        <div class="mt-6 flex items-center gap-3">
                            <div class="flex h-11 w-11 items-center justify-center rounded-full bg-blue-600 font-bold text-white">F</div>
                            <div>
                                <div class="font-bold text-slate-900">Fahmi Mahfudzi</div>
                                <div class="mt-0.5 text-sm text-slate-500">Founder &middot; www.pesenbaju.com</div>
                            </div>
                        </div>
                    </article>

                    <article class="w-[85%] shrink-0 snap-start rounded-2xl border border-slate-200 bg-slate-50/70 p-7 sm:w-[380px]">
                        <div class="flex gap-1 text-blue-600">
                            <span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                        <p class="mt-4 leading-7 text-slate-600">
                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua."
                        </p>
                        <div class="mt-6 flex items-center gap-3">
                            <div class="flex h-11 w-11 items-center justify-center rounded-full bg-blue-600 font-bold text-white">A</div>
                            <div>
                                <div class="font-bold text-slate-900">Andi Saputra</div>
                                <div class="mt-0.5 text-sm text-slate-500">Pemilik UMKM</div>
                            </div>
                        </div>
                    </article>

                    <article class="w-[85%] shrink-0 snap-start rounded-2xl border border-slate-200 bg-slate-50/70 p-7 sm:w-[380px]">
                        <div class="flex gap-1 text-blue-600">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                        <p class="mt-4 leading-7 text-slate-600">
                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua."
                        </p>
                        <div class="mt-6 flex items-center gap-3">
                            <div class="flex h-11 w-11 items-center justify-center rounded-full bg-blue-600 font-bold text-white">B</div>
                            <div>
                                <div class="font-bold text-slate-900">Budi Santoso</div>
                                <div class="mt-0.5 text-sm text-slate-500">Pemilik toko online</div>
                            </div>
                        </div>
                    </article>

                    <article class="w-[85%] shrink-0 snap-start rounded-2xl border border-slate-200 bg-slate-50/70 p-7 sm:w-[380px]">
                        <div class="flex gap-1 text-blue-600">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                        <p class="mt-4 leading-7 text-slate-600">
                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua."
                        </p>
                        <div class="mt-6 flex items-center gap-3">
                            <div class="flex h-11 w-11 items-center justify-center rounded-full bg-blue-600 font-bold text-white">R</div>
                            <div>
                                <div class="font-bold text-slate-900">Ratna Kumala</div>
                                <div class="mt-0.5 text-sm text-slate-500">F&amp;B entrepreneur</div>
                            </div>
                        </div>
                    </article>

                    <article class="w-[85%] shrink-0 snap-start rounded-2xl border border-slate-200 bg-slate-50/70 p-7 sm:w-[380px]">
                        <div class="flex gap-1 text-blue-600">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                        <p class="mt-4 leading-7 text-slate-600">
                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua."
                        </p>
                        <div class="mt-6 flex items-center gap-3">
                            <div class="flex h-11 w-11 items-center justify-center rounded-full bg-blue-600 font-bold text-white">D</div>
                            <div>
                                <div class="font-bold text-slate-900">Dewi Lestari</div>
                                <div class="mt-0.5 text-sm text-slate-500">Digital agency</div>
                            </div>
                        </div>
                    </article>

                    <article class="w-[85%] shrink-0 snap-start rounded-2xl border border-slate-200 bg-slate-50/70 p-7 sm:w-[380px]">
                        <div class="flex gap-1 text-blue-600">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                        <p class="mt-4 leading-7 text-slate-600">
                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua."
                        </p>
                        <div class="mt-6 flex items-center gap-3">
                            <div class="flex h-11 w-11 items-center justify-center rounded-full bg-blue-600 font-bold text-white">J</div>
                            <div>
                                <div class="font-bold text-slate-900">Joko Prasetyo</div>
                                <div class="mt-0.5 text-sm text-slate-500">Pemilik toko online</div>
                            </div>
                        </div>
                    </article>

                </div>
                </div>

                <div class="mt-12 flex items-center justify-center gap-4">
                    <button type="button" id="testi-prev" aria-label="Sebelumnya"
                            class="flex h-11 w-11 items-center justify-center rounded-full border border-slate-200 bg-white text-slate-600 shadow-sm transition hover:border-blue-300 hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-600">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>

                    <div class="flex h-1.5 w-24 overflow-hidden rounded-full bg-slate-200">
                        <div id="testi-progress" class="h-full rounded-full bg-blue-600 transition-all"></div>
                    </div>

                    <button type="button" id="testi-next" aria-label="Berikutnya"
                            class="flex h-11 w-11 items-center justify-center rounded-full border border-slate-200 bg-white text-slate-600 shadow-sm transition hover:border-blue-300 hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-600">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>

            </div>
        </div>
    </section>

    <section id="faq" class="scroll-mt-24 bg-slate-50/60 py-20 lg:py-28">
        <div class="mx-auto max-w-3xl px-6 lg:px-8">

            <div class="text-center">
                <span class="text-sm font-bold uppercase tracking-wider text-blue-600">FAQ</span>
                <h2 class="mt-4 text-3xl font-black tracking-tight text-slate-950 sm:text-4xl">
                    Pertanyaan yang sering ditanyakan
                </h2>
            </div>

            <div class="mt-12 space-y-4">

                <details class="group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm open:border-blue-200">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-bold text-slate-900">
                        Apakah WABlaster PRO Mobile mendukung perangkat iOS?
                        <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-blue-50 text-blue-600 transition group-open:rotate-45">+</span>
                    </summary>
                    <p class="mt-4 leading-7 text-slate-600">
                        Saat ini WABlaster PRO Mobile dirancang khusus untuk perangkat
                        Android agar pemasaran campaign berjalan optimal dari smartphone.
                    </p>
                </details>

                <details class="group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm open:border-blue-200">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-bold text-slate-900">
                        Berapa jumlah kontak yang bisa saya kelola?
                        <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-blue-50 text-blue-600 transition group-open:rotate-45">+</span>
                    </summary>
                    <p class="mt-4 leading-7 text-slate-600">
                        Pada paket Pro, kontak dapat dikelola tanpa batas sehingga
                        bisnis Anda bebas terus tumbuh tanpa khawatir kuota.
                    </p>
                </details>

                <details class="group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm open:border-blue-200">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-bold text-slate-900">
                        Apakah data pelanggan saya aman?
                        <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-blue-50 text-blue-600 transition group-open:rotate-45">+</span>
                    </summary>
                    <p class="mt-4 leading-7 text-slate-600">
                        Ya. Semua data kontak dan campaign diproses langsung dari
                        perangkat Anda dan tidak dibagikan kepada siapa pun.
                    </p>
                </details>

                <details class="group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm open:border-blue-200">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-bold text-slate-900">
                        Bagaimana jika saya butuh bantuan?
                        <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-blue-50 text-blue-600 transition group-open:rotate-45">+</span>
                    </summary>
                    <p class="mt-4 leading-7 text-slate-600">
                        Kami menyediakan dukungan untuk semua pelanggan. Pengguna paket
                        Bisnis mendapatkan prioritas dukungan dan onboarding khusus.
                    </p>
                </details>

            </div>

        </div>
    </section>

    <section id="download" class="scroll-mt-24 bg-white py-20 lg:py-28">
        <div class="mx-auto max-w-5xl px-6 lg:px-8">
            <div class="relative overflow-hidden rounded-3xl bg-gradient-to-br from-blue-600 to-sky-500 px-8 py-16 text-center shadow-2xl shadow-blue-600/30 sm:px-16">
                <div class="pointer-events-none absolute -top-24 -right-24 h-64 w-64 rounded-full bg-white/10 blur-2xl"></div>
                <div class="pointer-events-none absolute -bottom-24 -left-24 h-64 w-64 rounded-full bg-white/10 blur-2xl"></div>

                <h2 class="relative mx-auto max-w-2xl text-3xl font-black tracking-tight text-white sm:text-4xl">
                    Siap meningkatkan pemasaran WhatsApp bisnis Anda?
                </h2>
                <p class="relative mx-auto mt-5 max-w-2xl text-lg leading-8 text-blue-50">
                    Unduh WABlaster PRO Mobile sekarang dan mulailah menjalankan
                    campaign promosi secara efisien dari smartphone Anda.
                </p>

                <div id="kontak" class="relative mt-9 flex flex-col items-center justify-center gap-4 sm:flex-row">
                    <a href="#download"
                       class="inline-flex w-full items-center justify-center rounded-xl bg-white px-8 py-4 text-sm font-bold text-blue-700 shadow-xl transition hover:-translate-y-0.5 hover:bg-blue-50 sm:w-auto">
                        Download Aplikasi
                    </a>
                    <a href="#kontak"
                       class="inline-flex w-full items-center justify-center rounded-xl border border-white/40 bg-white/10 px-8 py-4 text-sm font-bold text-white backdrop-blur transition hover:bg-white/20 sm:w-auto">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </section>

    <footer class="border-t border-slate-200 bg-slate-50/60">
        <div class="mx-auto max-w-7xl px-6 py-14 lg:px-8">

            <div class="grid gap-10 md:grid-cols-4">

                <div class="md:col-span-2">
                    <a href="/" class="inline-flex items-center">
                        <img src="{{ asset('images/logo.png') }}" alt="WABlaster PRO Mobile" class="h-9 w-auto object-contain">
                    </a>
                    <p class="mt-5 max-w-sm leading-7 text-slate-600">
                        Solusi WhatsApp Marketing Automation untuk membantu bisnis
                        menjangkau pelanggan lebih cepat, mudah, dan otomatis.
                    </p>
                    <div class="mt-6 flex gap-3">
                        <a href="#" class="flex h-10 w-10 items-center justify-center rounded-xl border border-slate-200 bg-white text-slate-500 transition hover:border-blue-300 hover:text-blue-600" aria-label="Instagram">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.2c3.2 0 3.6 0 4.9.07 1.17.05 1.8.25 2.23.41.56.22.96.48 1.38.9.42.42.68.82.9 1.38.16.42.36 1.06.41 2.23.06 1.27.07 1.65.07 4.85s0 3.58-.07 4.85c-.05 1.17-.25 1.8-.41 2.23-.22.56-.48.96-.9 1.38-.42.42-.82.68-1.38.9-.42.16-1.06.36-2.23.41-1.27.06-1.65.07-4.85.07s-3.58 0-4.85-.07c-1.17-.05-1.8-.25-2.23-.41a3.7 3.7 0 01-1.38-.9 3.7 3.7 0 01-.9-1.38c-.16-.42-.36-1.06-.41-2.23C2.2 15.58 2.2 15.2 2.2 12s0-3.58.07-4.85c.05-1.17.25-1.8.41-2.23.22-.56.48-.96.9-1.38.42-.42.82-.68 1.38-.9.42-.16 1.06-.36 2.23-.41C8.42 2.2 8.8 2.2 12 2.2zm0 3.6a6.3 6.3 0 100 12.6 6.3 6.3 0 000-12.6zm0 2.2a4.1 4.1 0 110 8.2 4.1 4.1 0 010-8.2zm4.9-3.3a1.35 1.35 0 100 2.7 1.35 1.35 0 000-2.7z"/></svg>
                        </a>
                        <a href="#" class="flex h-10 w-10 items-center justify-center rounded-xl border border-slate-200 bg-white text-slate-500 transition hover:border-blue-300 hover:text-blue-600" aria-label="Facebook">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12a10 10 0 10-11.6 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.4v7A10 10 0 0022 12z"/></svg>
                        </a>
                        <a href="#" class="flex h-10 w-10 items-center justify-center rounded-xl border border-slate-200 bg-white text-slate-500 transition hover:border-blue-300 hover:text-blue-600" aria-label="YouTube">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.5 6.2a3 3 0 00-2.1-2.2C19.5 3.5 12 3.5 12 3.5s-7.5 0-9.4.5A3 3 0 00.5 6.2 32 32 0 000 12a32 32 0 00.5 5.8 3 3 0 002.1 2.2c1.9.5 9.4.5 9.4.5s7.5 0 9.4-.5a3 3 0 002.1-2.2A32 32 0 0024 12a32 32 0 00-.5-5.8zM9.6 15.6V8.4l6.2 3.6-6.2 3.6z"/></svg>
                        </a>
                    </div>
                </div>

                <div>
                    <h4 class="text-sm font-bold uppercase tracking-wider text-slate-900">Produk</h4>
                    <ul class="mt-5 space-y-3 text-sm text-slate-600">
                        <li><a href="#fitur" class="transition hover:text-blue-600">Fitur</a></li>
                        <li><a href="#cara-kerja" class="transition hover:text-blue-600">Cara Kerja</a></li>
                        <li><a href="#harga" class="transition hover:text-blue-600">Harga</a></li>
                        <li><a href="#download" class="transition hover:text-blue-600">Unduh Aplikasi</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-sm font-bold uppercase tracking-wider text-slate-900">Perusahaan</h4>
                    <ul class="mt-5 space-y-3 text-sm text-slate-600">
                        <li><a href="#testimoni" class="transition hover:text-blue-600">Testimoni</a></li>
                        <li><a href="#faq" class="transition hover:text-blue-600">FAQ</a></li>
                        <li><a href="#kontak" class="transition hover:text-blue-600">Kontak</a></li>
                    </ul>
                </div>

            </div>

            <div class="mt-12 flex flex-col items-center justify-between gap-4 border-t border-slate-200 pt-8 text-sm text-slate-500 sm:flex-row">
                <p>&copy; {{ date('Y') }} WABlaster PRO Mobile. Hak cipta dilindungi.</p>
                <p>Dibuat dengan teknologi modern.</p>
            </div>

        </div>
    </footer>

@endsection