@extends('layouts.app')

@section('content')

    @include('components.navbar')
    @include('components.hero')

    <section id="mitra" class="overflow-hidden bg-blue-600 pb-16 pt-10 lg:pb-20">
        <div class="mx-auto px-6 lg:px-8">
            <p class="text-center text-sm font-bold uppercase tracking-wider text-blue-100">
                Dipercaya oleh mitra kami
            </p>
        </div>

        <div class="group relative mt-10">
            <div class="pointer-events-none absolute inset-y-0 left-0 z-10 w-20 bg-gradient-to-r from-blue-600 to-transparent sm:w-32"></div>
            <div class="pointer-events-none absolute inset-y-0 right-0 z-10 w-20 bg-gradient-to-l from-blue-600 to-transparent sm:w-32"></div>

            <div class="flex w-max animate-marquee items-center group-hover:[animation-play-state:paused]">
                @php
                    $mitraLogos = [
                        ['images/Mitra/Malang Warehous.png', 'Malang Warehouse'],
                        ['images/Mitra/Traveiling Bromo.png', 'Traveling Bromo'],
                        ['images/Mitra/Tukang Indonesia.png', 'Tukang Indonesia'],
                    ];
                @endphp
                @foreach(array_merge($mitraLogos, $mitraLogos) as $m)
                    <img src="{{ asset($m[0]) }}" alt="{{ $m[1] }}"
                         class="mr-16 h-[45px] w-auto shrink-0 opacity-80 grayscale brightness-150 transition duration-300 hover:opacity-100 hover:grayscale-0 hover:brightness-100 sm:mr-20 sm:h-[61px]"
                         loading="lazy">
                @endforeach
            </div>
        </div>
    </section>

    <section id="perkenalan" class="relative scroll-mt-24 overflow-hidden bg-white py-20 lg:py-28">
        <div class="mx-auto max-w-6xl px-6 lg:px-8">
            <div class="reveal text-center">

                <span class="text-sm font-bold uppercase tracking-wider text-blue-600">
                    Memperkenalkan
                </span>

                <h2 class="mt-2 text-2xl font-black tracking-tight text-slate-950 sm:text-3xl">
                    Software <span class="text-blue-600">WABlaster Pro Mobile</span>
                </h2>

                <p class="mx-auto mt-3 max-w-3xl text-base font-semibold leading-7 text-slate-700 sm:text-lg">
                    Solusi pemasaran WhatsApp tanpa repot!
                </p>

                <p class="mx-auto mt-2 max-w-2xl text-base leading-7 text-slate-600">
                    Tools yang mampu mengotomatisasi pekerjaan Anda dalam promosi
                    WhatsApp, mengelola kontak, dan membangun database pelanggan.
                </p>

            </div>

            <div class="reveal relative mt-8 flex justify-center">
                <div class="pointer-events-none absolute inset-0 flex items-center justify-center">
                    <div class="h-[28rem] w-[28rem] rounded-full bg-gradient-to-tr from-blue-400/30 to-sky-300/30 blur-3xl sm:h-[38rem] sm:w-[38rem] lg:h-[48rem] lg:w-[48rem]"></div>
                </div>
                <img src="{{ asset('images/wablaster3d-removebg-preview.png') }}"
                     alt="WABlaster 3D"
                     class="relative mx-auto h-auto w-[28rem] drop-shadow-2xl sm:w-[36rem] lg:w-[46rem]"
                     width="736" height="736" loading="eager">
            </div>

            <div class="reveal mt-10 flex justify-center">
                <a href="#fitur"
                   class="inline-flex items-center justify-center rounded-xl bg-blue-600 px-8 py-3.5 text-base font-bold text-white shadow-xl shadow-blue-600/25 transition hover:-translate-y-0.5 hover:bg-blue-700">
                    Ini Dia Fiturnya
                </a>
            </div>
        </div>
    </section>

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

            <div class="mt-16 flex flex-wrap justify-center gap-6">

                <div class="reveal group w-full rounded-2xl border border-slate-200 bg-white p-7 shadow-sm transition hover:-translate-y-1 hover:border-blue-200 hover:shadow-xl hover:shadow-blue-600/10 sm:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)]">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-600 text-white shadow-lg shadow-blue-600/25">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M13 2H5a2 2 0 00-2 2v12h13a2 2 0 002-2V4a2 2 0 00-2-2h-5V2a2 2 0 00-2-2H5V1a1 1 0 011-1h6a2 2 0 012 2v0"></path>
                        </svg>
                    </div>
                    <h3 class="mt-5 text-xl font-bold text-slate-900">Campaign Message</h3>
                    <p class="mt-3 leading-7 text-slate-600">
                        Mengirim pesan promosi ke banyak kontak secara otomatis
                        menggunakan campaign.
                    </p>
                </div>

                <div class="reveal group w-full rounded-2xl border border-slate-200 bg-white p-7 shadow-sm transition hover:-translate-y-1 hover:border-blue-200 hover:shadow-xl hover:shadow-blue-600/10 sm:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)]">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-600 text-white shadow-lg shadow-blue-600/25">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M22 2L11 13M22 2l-7 20-4-9-9-4 22-7z" />
                        </svg>
                    </div>
                    <h3 class="mt-5 text-xl font-bold text-slate-900">Direct Message</h3>
                    <p class="mt-3 leading-7 text-slate-600">
                        Mengirim pesan langsung ke kontak target.
                    </p>
                </div>

                <div class="reveal group w-full rounded-2xl border border-slate-200 bg-white p-7 shadow-sm transition hover:-translate-y-1 hover:border-blue-200 hover:shadow-xl hover:shadow-blue-600/10 sm:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)]">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-600 text-white shadow-lg shadow-blue-600/25">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75" />
                            <circle cx="9" cy="7" r="4" />
                        </svg>
                    </div>
                    <h3 class="mt-5 text-xl font-bold text-slate-900">Contact Group</h3>
                    <p class="mt-3 leading-7 text-slate-600">
                        Mengelompokkan pelanggan berdasarkan kategori untuk promosi
                        yang lebih terarah.
                    </p>
                </div>

                <div class="reveal group w-full rounded-2xl border border-slate-200 bg-white p-7 shadow-sm transition hover:-translate-y-1 hover:border-blue-200 hover:shadow-xl hover:shadow-blue-600/10 sm:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)]">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-600 text-white shadow-lg shadow-blue-600/25">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4M7 10l5 5 5-5M12 15V3" />
                        </svg>
                    </div>
                    <h3 class="mt-5 text-xl font-bold text-slate-900">Extract Group</h3>
                    <p class="mt-3 leading-7 text-slate-600">
                        Mengambil daftar anggota grup WhatsApp untuk dijadikan
                        database prospek.
                    </p>
                </div>

                <div class="reveal group w-full rounded-2xl border border-slate-200 bg-white p-7 shadow-sm transition hover:-translate-y-1 hover:border-blue-200 hover:shadow-xl hover:shadow-blue-600/10 sm:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)]">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-600 text-white shadow-lg shadow-blue-600/25">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z" />
                        </svg>
                    </div>
                    <h3 class="mt-5 text-xl font-bold text-slate-900">Unsaved Contact</h3>
                    <p class="mt-3 leading-7 text-slate-600">
                        Mengekstrak nomor WhatsApp yang pernah menghubungi meski
                        belum tersimpan di kontak.
                    </p>
                </div>

                <div class="reveal group w-full rounded-2xl border border-slate-200 bg-white p-7 shadow-sm transition hover:-translate-y-1 hover:border-blue-200 hover:shadow-xl hover:shadow-blue-600/10 sm:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)]">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-600 text-white shadow-lg shadow-blue-600/25">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 2l10 5-10 5L2 7l10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
                        </svg>
                    </div>
                    <h3 class="mt-5 text-xl font-bold text-slate-900">Group Sender</h3>
                    <p class="mt-3 leading-7 text-slate-600">
                        Mengirim pesan ke beberapa grup WhatsApp secara praktis.
                    </p>
                </div>

                <div class="reveal group w-full rounded-2xl border border-slate-200 bg-white p-7 shadow-sm transition hover:-translate-y-1 hover:border-blue-200 hover:shadow-xl hover:shadow-blue-600/10 sm:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)]">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-600 text-white shadow-lg shadow-blue-600/25">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8zM14 2v6h6M16 13H8M16 17H8M10 9H8" />
                        </svg>
                    </div>
                    <h3 class="mt-5 text-xl font-bold text-slate-900">Message Template</h3>
                    <p class="mt-3 leading-7 text-slate-600">
                        Menyimpan template pesan agar tidak perlu mengetik pesan
                        yang sama berulang kali.
                    </p>
                </div>

                <div class="reveal group w-full rounded-2xl border border-slate-200 bg-white p-7 shadow-sm transition hover:-translate-y-1 hover:border-blue-200 hover:shadow-xl hover:shadow-blue-600/10 sm:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)]">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-600 text-white shadow-lg shadow-blue-600/25">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                            <circle cx="12" cy="10" r="3" />
                        </svg>
                    </div>
                    <h3 class="mt-5 text-xl font-bold text-slate-900">Maps Extractor</h3>
                    <p class="mt-3 leading-7 text-slate-600">
                        Mengumpulkan data prospek bisnis dari Google Maps.
                    </p>
                </div>

                <div class="reveal group w-full rounded-2xl border border-slate-200 bg-white p-7 shadow-sm transition hover:-translate-y-1 hover:border-blue-200 hover:shadow-xl hover:shadow-blue-600/10 sm:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)]">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-600 text-white shadow-lg shadow-blue-600/25">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <rect x="6" y="2" width="12" height="20" rx="2" ry="2" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M11 18h2" />
                        </svg>
                    </div>
                    <h3 class="mt-5 text-xl font-bold text-slate-900">Multi WhatsApp</h3>
                    <p class="mt-3 leading-7 text-slate-600">
                        Menggunakan beberapa akun WhatsApp sesuai kebutuhan bisnis.
                    </p>
                </div>

                <div class="reveal group w-full rounded-2xl border border-slate-200 bg-white p-7 shadow-sm transition hover:-translate-y-1 hover:border-blue-200 hover:shadow-xl hover:shadow-blue-600/10 sm:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)]">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-600 text-white shadow-lg shadow-blue-600/25">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z" />
                        </svg>
                    </div>
                    <h3 class="mt-5 text-xl font-bold text-slate-900">Manage Chatbot</h3>
                    <p class="mt-3 leading-7 text-slate-600">
                        Mengelola chatbot WhatsApp untuk membalas pelanggan
                        secara otomatis.
                    </p>
                </div>

                <div class="reveal group w-full rounded-2xl border border-slate-200 bg-white p-7 shadow-sm transition hover:-translate-y-1 hover:border-blue-200 hover:shadow-xl hover:shadow-blue-600/10 sm:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)]">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-600 text-white shadow-lg shadow-blue-600/25">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 3a9 9 0 00-9 9 9 9 0 002.6 6.4l.7.6-1 3.2 3.4-1 .6.4A9 9 0 0012 21a9 9 0 009-9 9 9 0 00-9-9z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9.5 9.5h.01M14.5 9.5h.01M9 14a4 4 0 006 0" />
                        </svg>
                    </div>
                    <h3 class="mt-5 text-xl font-bold text-slate-900">Android Based</h3>
                    <p class="mt-3 leading-7 text-slate-600">
                        Berjalan langsung di smartphone Android tanpa harus
                        menggunakan komputer.
                    </p>
                </div>

                <div class="reveal group w-full rounded-2xl border border-slate-200 bg-white p-7 shadow-sm transition hover:-translate-y-1 hover:border-blue-200 hover:shadow-xl hover:shadow-blue-600/10 sm:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)]">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-600 text-white shadow-lg shadow-blue-600/25">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 3l7.07 16.97 2.51-7.39 7.39-2.51L3 3zM13 13l6 6" />
                        </svg>
                    </div>
                    <h3 class="mt-5 text-xl font-bold text-slate-900">User Friendly</h3>
                    <p class="mt-3 leading-7 text-slate-600">
                        Antarmuka sederhana dan mudah digunakan.
                    </p>
                </div>

                <div class="reveal group w-full rounded-2xl border border-slate-200 bg-white p-7 shadow-sm transition hover:-translate-y-1 hover:border-blue-200 hover:shadow-xl hover:shadow-blue-600/10 sm:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)]">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-600 text-white shadow-lg shadow-blue-600/25">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M23 4v6h-6M1 20v-6h6M3.51 9a9 9 0 0114.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0020.49 15" />
                        </svg>
                    </div>
                    <h3 class="mt-5 text-xl font-bold text-slate-900">Free Update</h3>
                    <p class="mt-3 leading-7 text-slate-600">
                        Mendapatkan pembaruan aplikasi selama masa lisensi aktif.
                    </p>
                </div>

                <div class="reveal group w-full rounded-2xl border border-slate-200 bg-white p-7 shadow-sm transition hover:-translate-y-1 hover:border-blue-200 hover:shadow-xl hover:shadow-blue-600/10 sm:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)]">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-600 text-white shadow-lg shadow-blue-600/25">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" />
                            <circle cx="12" cy="12" r="4" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M22 12h-4M6 12H2M12 6V2M12 22v-4" />
                        </svg>
                    </div>
                    <h3 class="mt-5 text-xl font-bold text-slate-900">Support &amp; Tutorial</h3>
                    <p class="mt-3 leading-7 text-slate-600">
                        Mendapatkan panduan penggunaan dan dukungan ketika
                        mengalami kendala.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <section id="panduan" class="scroll-mt-24 bg-slate-50/60 py-20 lg:py-28">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-3xl font-black tracking-tight text-slate-950 sm:text-4xl">
                    Lihat bagaimana <span class="text-blue-600">WABlaster PRO bekerja</span>
                </h2>
                <p class="mt-5 text-lg leading-8 text-slate-600">
                    Kenali lebih dekat cara WABlaster PRO membantu mengelola campaign,
                    kontak, dan kebutuhan WhatsApp marketing dalam satu platform.
                </p>
            </div>

            <div class="mx-auto mt-16 max-w-6xl">
                <div class="overflow-hidden rounded-3xl bg-blue-600 shadow-2xl shadow-blue-600/25 ring-1 ring-blue-600/10">
                    <div class="aspect-video">
                        <iframe class="h-full w-full"
                                src="https://www.youtube-nocookie.com/embed/JHjXdJdEoik"
                                title="Video Demo WABlaster PRO"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen>
                        </iframe>
                    </div>
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

                <div class="reveal relative rounded-2xl border border-slate-200 bg-white p-8 shadow-sm hover:-translate-y-1 hover:border-blue-200 hover:shadow-xl hover:shadow-blue-600/10 transition">
                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-600 text-xl font-black text-white shadow-lg shadow-blue-600/25">1</div>
                    <h3 class="mt-6 text-lg font-bold text-slate-900">Unduh &amp; Install</h3>
                    <p class="mt-3 leading-7 text-slate-600">
                        Unduh aplikasi WABlaster PRO Mobile dan install di perangkat
                        Android Anda.
                    </p>
                </div>

                <div class="reveal relative rounded-2xl border border-slate-200 bg-white p-8 shadow-sm hover:-translate-y-1 hover:border-blue-200 hover:shadow-xl hover:shadow-blue-600/10 transition">
                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-600 text-xl font-black text-white shadow-lg shadow-blue-600/25">2</div>
                    <h3 class="mt-6 text-lg font-bold text-slate-900">Import Kontak</h3>
                    <p class="mt-3 leading-7 text-slate-600">
                        Tambahkan atau import daftar kontak pelanggan, lalu kelompokkan
                        sesuai kebutuhan bisnis Anda.
                    </p>
                </div>

                <div class="reveal relative rounded-2xl border border-slate-200 bg-white p-8 shadow-sm hover:-translate-y-1 hover:border-blue-200 hover:shadow-xl hover:shadow-blue-600/10 transition">
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

                    <div class="flex flex-col items-center gap-4">
                        <img src="{{ asset('images/wabpromobform.png') }}" alt="WABlasterPro Mobile"
                             class="h-28 w-28 rounded-2xl object-contain">
                        <div class="text-center">
                            <h3 class="text-lg font-bold text-slate-900">WABlaster PRO Mobile</h3>
                            <p class="mt-1 text-sm text-slate-500">Sekali bayar</p>
                        </div>
                    </div>

                    <div class="mt-8 rounded-2xl bg-blue-50 p-6">
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

                    <a href="#download"
                       class="mt-8 flex w-full items-center justify-center rounded-xl bg-blue-600 px-6 py-3.5 text-sm font-bold text-white shadow-xl shadow-blue-600/25 transition hover:-translate-y-0.5 hover:bg-blue-700">
                        Beli Sekarang
                    </a>
                </div>

                <div class="relative flex flex-col rounded-3xl border border-white/40 bg-white/10 p-8 backdrop-blur">
                    <span class="absolute -top-4 left-1/2 -translate-x-1/2 whitespace-nowrap rounded-full bg-white/90 px-4 py-1 text-xs font-black uppercase tracking-wide text-blue-700 shadow-lg">
                        Coming Soon
                    </span>

                    <div class="flex flex-col items-center gap-4">
                        <img src="{{ asset('images/wabpromobform.png') }}" alt="One Time Payment"
                             class="h-28 w-28 rounded-2xl object-contain opacity-90">
                        <div class="text-center">
                            <h3 class="text-lg font-bold text-white">One Time Payment</h3>
                            <p class="mt-1 text-sm text-blue-100">Pembayaran sekali untuk selamanya</p>
                        </div>
                    </div>

                    <div class="mt-8 rounded-2xl bg-white/10 p-6 ring-1 ring-white/20">
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

                    <button type="button" disabled
                            class="mt-8 flex w-full cursor-not-allowed items-center justify-center rounded-xl border border-white/30 bg-white/10 px-6 py-3.5 text-sm font-bold text-blue-100/60 opacity-70">
                        Segera Hadir
                    </button>
                </div>

            </div>

            <div class="mt-12 flex flex-col items-center gap-4 text-center">
                <p class="text-sm font-semibold text-blue-100">Metode Pembayaran</p>
                <img src="{{ asset('images/payment/payment.png') }}" alt="Metode Pembayaran"
                     class="h-12 w-auto object-contain opacity-90">
            </div>

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
        <div class="mx-auto max-w-4xl px-6 lg:px-8">

            <div class="text-center">
                <span class="text-sm font-bold uppercase tracking-wider text-blue-600">FAQ</span>
                <h2 class="mt-4 text-3xl font-black tracking-tight text-slate-950 sm:text-4xl">
                    Pertanyaan yang sering ditanyakan
                </h2>
            </div>

            <div class="faq-column mt-12 flex flex-col gap-4">

                <details class="group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm open:border-blue-200">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-bold text-slate-900">
                        Apakah WABlaster PRO Mobile mendukung perangkat iOS?
                        <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-blue-50 text-blue-600 transition-transform duration-300 group-open:rotate-45">+</span>
                    </summary>
                    <p class="mt-4 leading-7 text-slate-600">
                        Saat ini WABlaster PRO Mobile dirancang khusus untuk perangkat
                        Android agar pemasaran campaign berjalan optimal dari smartphone.
                    </p>
                </details>

                <details class="group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm open:border-blue-200">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-bold text-slate-900">
                        Berapa jumlah kontak yang bisa saya kelola?
                        <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-blue-50 text-blue-600 transition-transform duration-300 group-open:rotate-45">+</span>
                    </summary>
                    <p class="mt-4 leading-7 text-slate-600">
                        Pada paket Pro, kontak dapat dikelola tanpa batas sehingga
                        bisnis Anda bebas terus tumbuh tanpa khawatir kuota.
                    </p>
                </details>

                <details class="group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm open:border-blue-200">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-bold text-slate-900">
                        Apakah data pelanggan saya aman?
                        <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-blue-50 text-blue-600 transition-transform duration-300 group-open:rotate-45">+</span>
                    </summary>
                    <p class="mt-4 leading-7 text-slate-600">
                        Ya. Semua data kontak dan campaign diproses langsung dari
                        perangkat Anda dan tidak dibagikan kepada siapa pun.
                    </p>
                </details>

                <details class="group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm open:border-blue-200">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-bold text-slate-900">
                        Bagaimana proses pembayaran dilakukan?
                        <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-blue-50 text-blue-600 transition-transform duration-300 group-open:rotate-45">+</span>
                    </summary>
                    <p class="mt-4 leading-7 text-slate-600">
                        Pembayaran dilakukan satu kali via transfer dan aplikasi langsung
                        dikirim setelah pembayaran terverifikasi.
                    </p>
                </details>

                <details class="group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm open:border-blue-200">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-bold text-slate-900">
                        Bagaimana jika saya butuh bantuan?
                        <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-blue-50 text-blue-600 transition-transform duration-300 group-open:rotate-45">+</span>
                    </summary>
                    <p class="mt-4 leading-7 text-slate-600">
                        Kami menyediakan dukungan untuk semua pelanggan. Pengguna paket
                        Bisnis mendapatkan prioritas dukungan dan onboarding khusus.
                    </p>
                </details>

                <details class="group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm open:border-blue-200">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-bold text-slate-900">
                        Apakah tersedia garansi atau update?
                        <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-blue-50 text-blue-600 transition-transform duration-300 group-open:rotate-45">+</span>
                    </summary>
                    <p class="mt-4 leading-7 text-slate-600">
                        Ya, pembelian termasuk garansi dan update fitur selama masa
                        berlaku lisensi aplikasi Anda.
                    </p>
                </details>

            </div>

        </div>
    </section>

    <section id="download" class="scroll-mt-24 bg-white py-20 lg:py-28">
        <div class="mx-auto max-w-5xl px-6 lg:px-8">
            <div class="flex flex-col items-center overflow-hidden rounded-3xl bg-gradient-to-br from-blue-600 to-sky-500 px-6 py-16 text-center shadow-2xl shadow-blue-600/30 sm:px-16">

                <h2 class="mx-auto max-w-2xl text-3xl font-black tracking-tight text-white sm:text-4xl">
                    Siap meningkatkan pemasaran WhatsApp bisnis Anda?
                </h2>
                <p class="mx-auto mt-5 max-w-2xl text-lg leading-8 text-blue-50">
                    Unduh WABlaster PRO Mobile sekarang dan mulailah menjalankan
                    campaign promosi secara efisien dari smartphone Anda.
                </p>

                <div id="kontak" class="mt-9 flex w-full max-w-md flex-col items-center gap-4 sm:flex-row sm:max-w-none">
                    <a href="#download"
                       class="flex w-full items-center justify-center rounded-xl bg-white px-8 py-4 text-sm font-bold text-blue-700 shadow-xl transition hover:-translate-y-0.5 hover:bg-blue-50 sm:w-auto">
                        Download Aplikasi
                    </a>
                    <a href="#kontak"
                       class="flex w-full items-center justify-center rounded-xl border border-white/40 bg-white/10 px-8 py-4 text-sm font-bold text-white backdrop-blur transition hover:bg-white/20 sm:w-auto">
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

            <div class="mt-12 flex flex-col items-center justify-between gap-6 border-t border-slate-200 pt-8 text-sm text-slate-500 sm:flex-row">
                <p>&copy; {{ date('Y') }} WABlaster PRO Mobile. Hak cipta dilindungi.</p>
                <div class="flex gap-3">
                    <a href="#" class="socials socials-tiktok" aria-label="TikTok">
                        <svg class="socials-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
                        </svg>
                    </a>
                    <a href="#" class="socials socials-instagram" aria-label="Instagram">
                        <svg class="socials-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2.2c3.2 0 3.6 0 4.9.07 1.17.05 1.8.25 2.23.41.56.22.96.48 1.38.9.42.42.68.82.9 1.38.16.42.36 1.06.41 2.23.06 1.27.07 1.65.07 4.85s0 3.58-.07 4.85c-.05 1.17-.25 1.8-.41 2.23-.22.56-.48.96-.9 1.38-.42.42-.82.68-1.38.9-.42.16-1.06.36-2.23.41-1.27.06-1.65.07-4.85.07s-3.58 0-4.85-.07c-1.17-.05-1.8-.25-2.23-.41a3.7 3.7 0 01-1.38-.9 3.7 3.7 0 01-.9-1.38c-.16-.42-.36-1.06-.41-2.23C2.2 15.58 2.2 15.2 2.2 12s0-3.58.07-4.85c.05-1.17.25-1.8.41-2.23.22-.56.48-.96.9-1.38.42-.42.82-.68 1.38-.9.42-.16 1.06-.36 2.23-.41C8.42 2.2 8.8 2.2 12 2.2zm0 3.6a6.3 6.3 0 100 12.6 6.3 6.3 0 000-12.6zm0 2.2a4.1 4.1 0 110 8.2 4.1 4.1 0 010-8.2zm4.9-3.3a1.35 1.35 0 100 2.7 1.35 1.35 0 000-2.7z"/>
                        </svg>
                    </a>
                    <a href="#" class="socials socials-youtube" aria-label="YouTube">
                        <svg class="socials-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M23.5 6.2a3 3 0 00-2.1-2.2C19.5 3.5 12 3.5 12 3.5s-7.5 0-9.4.5A3 3 0 00.5 6.2 32 32 0 000 12a32 32 0 00.5 5.8 3 3 0 002.1 2.2c1.9.5 9.4.5 9.4.5s7.5 0 9.4-.5a3 3 0 002.1-2.2A32 32 0 0024 12a32 32 0 00-.5-5.8zM9.6 15.6V8.4l6.2 3.6-6.2 3.6z"/>
                        </svg>
                    </a>
                    <a href="#" class="socials socials-threads" aria-label="Threads">
                        <svg class="socials-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12.186 24h-.007c-3.581-.024-6.334-1.205-8.184-3.509C2.35 18.44 1.5 15.586 1.472 12.01v-.017c.03-3.579.879-6.43 2.525-8.482C5.845 1.205 8.6.024 12.18 0h.014c2.746.02 5.043.725 6.826 2.098 1.677 1.29 2.858 3.13 3.509 5.467l-2.04.569c-1.104-3.96-3.898-5.984-8.304-6.015-2.91.022-5.11.936-6.54 2.717C4.307 6.504 3.616 8.914 3.589 12c.027 3.086.718 5.496 2.057 7.164 1.43 1.783 3.631 2.698 6.54 2.717 2.623-.02 4.358-.631 5.8-2.045 1.647-1.613 1.618-3.593 1.09-4.798-.31-.71-.873-1.3-1.634-1.75-.192 1.352-.622 2.446-1.284 3.272-.886 1.102-2.14 1.704-3.73 1.79-1.202.065-2.361-.218-3.259-.801-1.063-.689-1.685-1.74-1.752-2.964-.065-1.19.408-2.285 1.33-3.082.88-.76 2.119-1.207 3.583-1.291a13.853 13.853 0 013.02.142c-.126-.742-.375-1.332-.75-1.757-.513-.586-1.308-.883-2.359-.89h-.029c-.844 0-1.992.232-2.721 1.32L7.734 7.847c.98-1.454 2.568-2.256 4.478-2.256h.044c3.194.02 5.097 1.975 5.287 5.388.108.046.216.094.321.142 1.49.7 2.58 1.761 3.154 3.07.797 1.82.871 4.79-1.548 7.158-1.85 1.81-4.094 2.628-7.277 2.65zm1.003-11.69c-.242 0-.487.007-.739.021-1.836.103-2.98.946-2.916 2.143.067 1.256 1.452 1.839 2.784 1.767 1.224-.065 2.818-.543 3.086-3.71a10.5 10.5 0 00-2.215-.221z"/>
                        </svg>
                    </a>
                    <a href="https://wa.me/6281333444233" target="_blank" rel="noopener noreferrer" class="socials socials-whatsapp" aria-label="WhatsApp">
                        <svg class="socials-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                        </svg>
                    </a>
                </div>
            </div>

        </div>
    </footer>

 
@endsection