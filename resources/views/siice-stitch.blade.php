<!DOCTYPE html>

<html class="light" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>SIICE Mandiri - Sistem Informasi Izin Cetak Mandiri</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Plus+Jakarta+Sans:wght@700;800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        surface: '#ffffff',
                        'on-surface': '#1a1a1a',
                        'on-surface-variant': '#4a4a4a',
                    }
                }
            }
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            vertical-align: middle;
        }

        body {
            font-family: 'Inter', sans-serif;
        }

        h1,
        h2,
        h3,
        .font-headline {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        #video-slider {
            scroll-behavior: smooth;
            -webkit-overflow-scrolling: touch;
        }
    </style>
</head>

<body
    class="bg-surface text-on-surface selection:bg-orange-500/30 dark:bg-neutral-950 dark:text-neutral-50 transition-colors duration-300">
    <!-- TopNavBar -->
    <nav
        class="fixed top-0 w-full z-50 bg-white/80 dark:bg-neutral-900/80 backdrop-blur-xl shadow-xl shadow-orange-500/5 transition-all duration-300">
        <div class="max-w-7xl mx-auto flex justify-between items-center px-8 py-4">
            <div class="flex items-center gap-2">
                <span class="text-xl font-extrabold tracking-tighter text-orange-500">SIICE Mandiri</span>
            </div>
            <div class="hidden md:flex items-center gap-8">
                <a class="text-orange-600 dark:text-orange-400 font-bold border-b-2 border-orange-500 transition-all duration-300"
                    href="#">Beranda</a>
                <a class="text-neutral-600 dark:text-neutral-400 hover:text-orange-500 hover:bg-neutral-100 dark:hover:bg-neutral-800 px-2 py-1 rounded transition-all duration-300"
                    href="#fitur">Fitur</a>
                <a class="text-neutral-600 dark:text-neutral-400 hover:text-orange-500 hover:bg-neutral-100 dark:hover:bg-neutral-800 px-2 py-1 rounded transition-all duration-300"
                    href="#faq">FAQ</a>
                <a class="text-neutral-600 dark:text-neutral-400 hover:text-orange-500 hover:bg-neutral-100 dark:hover:bg-neutral-800 px-2 py-1 rounded transition-all duration-300"
                    href="#kontak">Kontak</a>
            </div>
            <div class="flex items-center gap-4">
                <button
                    class="p-2 rounded-full hover:bg-neutral-100 dark:hover:bg-neutral-800 transition-all duration-300"
                    id="theme-toggle">
                    <span
                        class="material-symbols-outlined text-on-surface-variant dark:text-neutral-300">dark_mode</span>
                </button>
                <button
                    class="bg-orange-500 hover:bg-orange-400 text-white px-6 py-2 rounded-lg font-semibold active:scale-95 transition-transform">
                    Masuk
                </button>
            </div>
        </div>
    </nav>
    <main class="pt-24 overflow-x-hidden">
        <!-- Hero Section -->
        <section class="relative px-8 py-20 lg:py-32 overflow-hidden">
            <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-12 items-center relative z-10">
                <div class="space-y-8">
                    <div
                        class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-orange-100 dark:bg-orange-500/20 text-orange-700 dark:text-orange-300 text-xs font-bold uppercase tracking-wider">
                        <span class="material-symbols-outlined text-sm"
                            style="font-variation-settings: 'FILL' 1;">verified</span>
                        Versi Terbaru 2024
                    </div>
                    <h1
                        class="text-5xl lg:text-7xl font-extrabold tracking-tighter text-on-surface dark:text-white leading-none">
                        SIICE <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-orange-400">Mandiri</span>
                    </h1>
                    <p class="text-2xl font-semibold text-orange-500/90">Sistem Informasi Izin Cetak Mandiri</p>
                    <p class="text-lg text-on-surface-variant dark:text-neutral-400 leading-relaxed max-w-xl">
                        Solusi digitalisasi perizinan terintegrasi dengan tanda tangan elektronik bersertifikat. Proses
                        lebih cepat, transparan, dan aman dalam satu genggaman platform modern.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <button
                            class="px-8 py-4 bg-gradient-to-r from-orange-500 to-orange-400 text-white rounded-xl font-bold shadow-lg shadow-orange-500/20 hover:shadow-xl hover:shadow-orange-500/30 transition-all active:scale-95">
                            Mulai Sekarang
                        </button>
                        <button
                            class="px-8 py-4 bg-neutral-100 dark:bg-neutral-800 text-on-surface dark:text-white rounded-xl font-bold hover:bg-neutral-200 dark:hover:bg-neutral-700 transition-all">
                            Pelajari Lebih Lanjut
                        </button>
                    </div>
                </div>
                <div class="relative">
                    <div class="absolute -top-12 -left-12 w-64 h-64 bg-orange-500/10 rounded-full blur-3xl"></div>
                    <div class="absolute -bottom-12 -right-12 w-64 h-64 bg-orange-400/10 rounded-full blur-3xl"></div>
                    <div
                        class="rounded-3xl overflow-hidden shadow-2xl rotate-2 hover:rotate-0 transition-transform duration-700 bg-neutral-50 dark:bg-neutral-800 p-2 border border-neutral-200 dark:border-neutral-700">
                        <img alt="Dashboard Analytics" class="rounded-2xl w-full object-cover aspect-video"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAxMIDaxCB_XgJNWdlW0Cfr5g9NZWxqdQ0g9ozbeBzzyhwrMbC0d6b7q7g_aRpukoV_BYz0PT4tjxqItr-7p5f8VIu2mJ9wXODQlSp05tZBxTI_BmNOaQo0-cEzP3L9dLPzFJl_29ReicERk1lUZ-nJUh7ZNj8RT0BX7asI_O3u4PZ37ldlgTNh5hzNhWiRw3lrwgzYW-AuvAVA18kV9ZTNv87ZcSoBF7BQw2CiPL08seFsS45gxVCgZdefb4-6mjrg9ZEf_Asnrpg" />
                    </div>
                </div>
            </div>
        </section>
        <!-- Stats Bar -->
        <section class="bg-neutral-50 dark:bg-neutral-900 py-12">
            <div class="max-w-7xl mx-auto px-8">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="text-4xl font-extrabold text-orange-500 mb-1">10,000+</div>
                        <div class="text-sm font-medium text-on-surface-variant dark:text-neutral-400">SK Diterbitkan
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-extrabold text-orange-500 mb-1">5,000+</div>
                        <div class="text-sm font-medium text-on-surface-variant dark:text-neutral-400">Pengguna Aktif
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-extrabold text-orange-500 mb-1">99.9%</div>
                        <div class="text-sm font-medium text-on-surface-variant dark:text-neutral-400">Uptime</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-extrabold text-orange-500 mb-1">24/7</div>
                        <div class="text-sm font-medium text-on-surface-variant dark:text-neutral-400">Support</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Video Slider Section -->
        <section class="py-24 px-8 bg-white dark:bg-neutral-950">
            <div class="max-w-7xl mx-auto">
                <div class="relative group">
                    <div
                        class="overflow-hidden rounded-[2.5rem] shadow-2xl shadow-orange-500/10 border border-neutral-100 dark:border-neutral-800">
                        <div class="flex transition-transform duration-700 ease-in-out no-scrollbar overflow-x-hidden"
                            id="video-slider">
                            <!-- Video Slide 1 -->
                            <div class="min-w-full relative aspect-video bg-neutral-900 flex-shrink-0">
                                <video autoplay="" class="w-full h-full object-cover" loop="" muted=""
                                    playsinline="">
                                    <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4" />
                                </video>
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-12">
                                    <div class="text-white max-w-lg">
                                        <h3 class="text-3xl font-bold mb-2">Keamanan Terjamin</h3>
                                        <p class="text-neutral-200">Enkripsi tingkat tinggi untuk setiap dokumen
                                            perizinan Anda.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Video Slide 2 -->
                            <div class="min-w-full relative aspect-video bg-neutral-900 flex-shrink-0">
                                <video autoplay="" class="w-full h-full object-cover" loop="" muted=""
                                    playsinline="">
                                    <source
                                        src="https://interactive-examples.mdn.mozilla.net/media/cc0-videos/flower.mp4"
                                        type="video/mp4" />
                                </video>
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-12">
                                    <div class="text-white max-w-lg">
                                        <h3 class="text-3xl font-bold mb-2">Proses Transparan</h3>
                                        <p class="text-neutral-200">Pantau setiap tahapan pengajuan secara real-time
                                            dari dashboard.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Video Slide 3 -->
                            <div class="min-w-full relative aspect-video bg-neutral-900 flex-shrink-0">
                                <video autoplay="" class="w-full h-full object-cover" loop=""
                                    muted="" playsinline="">
                                    <source src="https://vjs.zencdn.net/v/oceans.mp4" type="video/mp4" />
                                </video>
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-12">
                                    <div class="text-white max-w-lg">
                                        <h3 class="text-3xl font-bold mb-2">Layanan Modern</h3>
                                        <p class="text-neutral-200">Akses layanan kapan saja dan di mana saja dengan
                                            mudah.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slider Controls -->
                    <button
                        class="absolute left-4 top-1/2 -translate-y-1/2 w-12 h-12 rounded-full bg-white/20 hover:bg-orange-500 backdrop-blur-md text-white flex items-center justify-center transition-all opacity-0 group-hover:opacity-100 z-10"
                        id="video-prev">
                        <span class="material-symbols-outlined">chevron_left</span>
                    </button>
                    <button
                        class="absolute right-4 top-1/2 -translate-y-1/2 w-12 h-12 rounded-full bg-white/20 hover:bg-orange-500 backdrop-blur-md text-white flex items-center justify-center transition-all opacity-0 group-hover:opacity-100 z-10"
                        id="video-next">
                        <span class="material-symbols-outlined">chevron_right</span>
                    </button>
                    <!-- Pagination Dots -->
                    <div class="flex justify-center gap-3 mt-8" id="video-dots">
                        <div class="w-3 h-3 rounded-full bg-orange-500 transition-all cursor-pointer" data-index="0">
                        </div>
                        <div class="w-3 h-3 rounded-full bg-neutral-300 dark:bg-neutral-800 transition-all cursor-pointer"
                            data-index="1"></div>
                        <div class="w-3 h-3 rounded-full bg-neutral-300 dark:bg-neutral-800 transition-all cursor-pointer"
                            data-index="2"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Features Bento Grid -->
        <section class="py-24 px-8" id="fitur">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16 space-y-4">
                    <h2 class="text-3xl lg:text-5xl font-extrabold tracking-tight dark:text-white">Fitur Unggulan Kami
                    </h2>
                    <p class="text-on-surface-variant dark:text-neutral-400 max-w-2xl mx-auto">Dirancang untuk
                        efisiensi maksimal dalam pengelolaan izin cetak dengan teknologi terkini.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Feature 1 -->
                    <div
                        class="md:col-span-2 group relative bg-white dark:bg-neutral-900 rounded-3xl p-10 overflow-hidden shadow-xl shadow-orange-500/5 hover:shadow-orange-500/10 transition-all border border-neutral-200 dark:border-neutral-800">
                        <div class="relative z-10 flex flex-col h-full justify-between">
                            <div>
                                <div
                                    class="w-14 h-14 bg-orange-500/10 rounded-2xl flex items-center justify-center mb-6 text-orange-500">
                                    <span class="material-symbols-outlined text-3xl">signature</span>
                                </div>
                                <h3 class="text-2xl font-bold mb-4 dark:text-white">Tanda Tangan Digital</h3>
                                <p class="text-on-surface-variant dark:text-neutral-400 leading-relaxed">Keamanan data
                                    terjamin dengan integrasi BSrE untuk verifikasi dokumen yang sah secara hukum dan
                                    tidak dapat dipalsukan.</p>
                            </div>
                            <div class="mt-8">
                                <img alt="Digital Security"
                                    class="rounded-xl w-full h-48 object-cover opacity-80 group-hover:opacity-100 transition-opacity"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCvtgIRiPoW0vj2914c_JhFiuZ17HSlPN7Tv5zygmzLa7DxEkaKWksrryIS_D7TpJb0bI0zJ0EMNUj_dD3y23QpZcIgvAiRFG3yWFCl3ypwmRJaJxGAu_eXQtPsPbdm7cjXDEmih7kDm2kmJ-qpnILRER2Nh9cPLkvkVjL9OHEAwxTvoFLSCDpVvym9Jz6LIS_pIq1eZW4xtWQvp8vbsDkNAktzUVknWDwKhRjU2DIeR6sl2ksdfhoHBAEW5_AdYKgIyOmDORFci9U" />
                            </div>
                        </div>
                    </div>
                    <!-- Feature 2 -->
                    <div
                        class="bg-neutral-50 dark:bg-neutral-800 rounded-3xl p-10 border border-neutral-200 dark:border-neutral-700 flex flex-col justify-between">
                        <div>
                            <div
                                class="w-14 h-14 bg-orange-500/10 rounded-2xl flex items-center justify-center mb-6 text-orange-500">
                                <span class="material-symbols-outlined text-3xl">bolt</span>
                            </div>
                            <h3 class="text-2xl font-bold mb-4 dark:text-white">Proses Kilat</h3>
                            <p class="text-on-surface-variant dark:text-neutral-400">Pengajuan hingga penerbitan SK
                                dalam hitungan menit, bukan hari.</p>
                        </div>
                        <ul class="space-y-3 mt-8">
                            <li class="flex items-center gap-2 text-sm font-semibold dark:text-neutral-200">
                                <span class="material-symbols-outlined text-orange-500 text-lg"
                                    style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                Verifikasi Otomatis
                            </li>
                            <li class="flex items-center gap-2 text-sm font-semibold dark:text-neutral-200">
                                <span class="material-symbols-outlined text-orange-500 text-lg"
                                    style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                Alur Kerja Paralel
                            </li>
                        </ul>
                    </div>
                    <!-- Feature 3 -->
                    <div
                        class="bg-neutral-50 dark:bg-neutral-800 rounded-3xl p-10 border border-neutral-200 dark:border-neutral-700">
                        <div
                            class="w-14 h-14 bg-orange-500/10 rounded-2xl flex items-center justify-center mb-6 text-orange-500">
                            <span class="material-symbols-outlined text-3xl">monitoring</span>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 dark:text-white">Real-time Tracking</h3>
                        <p class="text-on-surface-variant dark:text-neutral-400">Pantau status permohonan Anda secara
                            transparan kapan saja dan di mana saja.</p>
                    </div>
                    <!-- Feature 4 -->
                    <div
                        class="md:col-span-2 bg-gradient-to-br from-orange-500 to-orange-400 rounded-3xl p-10 text-white relative overflow-hidden group">
                        <div class="relative z-10">
                            <h3 class="text-2xl font-bold mb-4">Integrasi Multi-Platform</h3>
                            <p class="opacity-90 max-w-md">Akses SIICE Mandiri melalui perangkat apa pun. Responsif dan
                                mudah digunakan baik di desktop maupun mobile.</p>
                            <button
                                class="mt-8 px-6 py-3 bg-white text-orange-500 rounded-xl font-bold hover:scale-105 transition-transform">
                                Lihat Demo Sistem
                            </button>
                        </div>
                        <span
                            class="material-symbols-outlined absolute -bottom-10 -right-10 text-[200px] opacity-10 group-hover:rotate-12 transition-transform duration-700">devices</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQ Section -->
        <section class="py-24 px-8 bg-neutral-50 dark:bg-neutral-900/50" id="faq">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-3xl lg:text-5xl font-extrabold tracking-tight mb-4 dark:text-white">Pertanyaan Umum
                    </h2>
                    <p class="text-on-surface-variant dark:text-neutral-400">Temukan jawaban untuk pertanyaan yang
                        sering diajukan seputar SIICE Mandiri.</p>
                </div>
                <div class="space-y-4">
                    <div
                        class="bg-white dark:bg-neutral-800 rounded-2xl p-6 shadow-sm border border-neutral-200 dark:border-neutral-700">
                        <button class="w-full flex justify-between items-center text-left"
                            onclick="this.nextElementSibling.classList.toggle('hidden')">
                            <span class="font-bold text-lg dark:text-white">Apa itu SIICE Mandiri?</span>
                            <span class="material-symbols-outlined text-orange-500">expand_more</span>
                        </button>
                        <div class="mt-4 text-on-surface-variant dark:text-neutral-400 leading-relaxed hidden">
                            SIICE Mandiri adalah platform digital terintegrasi yang memudahkan pelaku usaha dalam
                            mengelola perizinan cetak secara mandiri dengan sistem keamanan digital tingkat tinggi.
                        </div>
                    </div>
                    <div
                        class="bg-white dark:bg-neutral-800 rounded-2xl p-6 shadow-sm border border-neutral-200 dark:border-neutral-700">
                        <button class="w-full flex justify-between items-center text-left"
                            onclick="this.nextElementSibling.classList.toggle('hidden')">
                            <span class="font-bold text-lg dark:text-white">Bagaimana keamanan tanda tangan
                                digitalnya?</span>
                            <span class="material-symbols-outlined text-orange-500">expand_more</span>
                        </button>
                        <div class="mt-4 text-on-surface-variant dark:text-neutral-400 leading-relaxed hidden">
                            Kami menggunakan sertifikat elektronik dari Balai Sertifikasi Elektronik (BSrE) yang
                            menjamin integritas dokumen dan otentikasi pengirim sesuai standar hukum yang berlaku.
                        </div>
                    </div>
                    <div
                        class="bg-white dark:bg-neutral-800 rounded-2xl p-6 shadow-sm border border-neutral-200 dark:border-neutral-700">
                        <button class="w-full flex justify-between items-center text-left"
                            onclick="this.nextElementSibling.classList.toggle('hidden')">
                            <span class="font-bold text-lg dark:text-white">Berapa lama proses penerbitan SK?</span>
                            <span class="material-symbols-outlined text-orange-500">expand_more</span>
                        </button>
                        <div class="mt-4 text-on-surface-variant dark:text-neutral-400 leading-relaxed hidden">
                            Dengan validasi otomatis, SK dapat diterbitkan dalam waktu kurang dari 24 jam setelah semua
                            persyaratan dinyatakan lengkap oleh sistem.
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA Section -->
        <section class="py-24 px-8">
            <div class="max-w-7xl mx-auto">
                <div class="bg-neutral-900 rounded-[3rem] p-12 lg:p-24 text-center relative overflow-hidden">
                    <div class="absolute inset-0 opacity-20">
                        <img alt="Modern Office Background" class="w-full h-full object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAIjT9RQdCXniaDAYOZpwxo5XP0OOrBxBmyMXYk1S1-QyQy6TcT0V40XyrFOu4VRqb62hnIzujmUQFa8-4ZMA6B7cPExJBh8plud32nOFJwJatU_TuxA13Yq-HvuMiCWFFqDvFQdCAKO60cQY_mgptUhfCu4D0k0szqe8aXYtTr4YHTklOj7_erA5Bpej8lZqMZkCPGYejSXMOpvDMuqCe93qnUJ15q0ZbuxH0_t0-s1Yp4U3NMUYT0XErhxpxN8DO-4CE1vYq8kds" />
                    </div>
                    <div class="relative z-10">
                        <h2 class="text-4xl lg:text-6xl font-extrabold text-white mb-8 tracking-tighter">Siap
                            Digitalisasi Perizinan Anda?</h2>
                        <p class="text-neutral-400 text-xl max-w-2xl mx-auto mb-12">Bergabunglah dengan ribuan pengguna
                            lainnya yang telah merasakan kemudahan dan kecepatan layanan SIICE Mandiri.</p>
                        <div class="flex flex-col sm:flex-row justify-center gap-4">
                            <button
                                class="px-10 py-5 bg-orange-500 text-white rounded-2xl font-bold hover:scale-105 transition-transform shadow-2xl shadow-orange-500/20">
                                Mulai Sekarang Gratis
                            </button>
                            <button
                                class="px-10 py-5 bg-white/10 text-white rounded-2xl font-bold hover:bg-white/20 transition-all backdrop-blur-md">
                                Hubungi Konsultan
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <footer class="w-full pt-16 pb-8 bg-neutral-50 dark:bg-neutral-950 transition-colors">
        <div class="max-w-7xl mx-auto px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
                <div class="md:col-span-2">
                    <span class="font-plus-jakarta font-bold text-orange-500 text-2xl">SIICE Mandiri</span>
                    <p class="mt-6 text-neutral-500 dark:text-neutral-400 max-w-sm font-inter text-sm leading-relaxed">
                        Platform transformasi digital terdepan untuk kemudahan administrasi dan perizinan cetak di
                        Indonesia.
                    </p>
                </div>
                <div>
                    <h4 class="font-bold mb-6 dark:text-white">Tautan Cepat</h4>
                    <ul class="space-y-4">
                        <li><a class="text-neutral-500 dark:text-neutral-400 hover:text-orange-500 transition-colors text-sm"
                                href="#">Tentang Kami</a></li>
                        <li><a class="text-neutral-500 dark:text-neutral-400 hover:text-orange-500 transition-colors text-sm"
                                href="#">Pusat Bantuan</a></li>
                        <li><a class="text-neutral-500 dark:text-neutral-400 hover:text-orange-500 transition-colors text-sm"
                                href="#">Blog Berita</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-6 dark:text-white">Ikuti Kami</h4>
                    <div class="flex gap-4">
                        <a class="w-10 h-10 rounded-full bg-neutral-200 dark:bg-neutral-800 flex items-center justify-center hover:bg-orange-500 transition-colors hover:text-white dark:text-neutral-300"
                            href="#">
                            <span class="material-symbols-outlined text-lg">public</span>
                        </a>
                        <a class="w-10 h-10 rounded-full bg-neutral-200 dark:bg-neutral-800 flex items-center justify-center hover:bg-orange-500 transition-colors hover:text-white dark:text-neutral-300"
                            href="#">
                            <span class="material-symbols-outlined text-lg">share</span>
                        </a>
                    </div>
                </div>
            </div>
            <div
                class="flex flex-col md:flex-row justify-between items-center pt-8 border-t border-neutral-200/20 font-inter text-sm">
                <p class="text-neutral-500 dark:text-neutral-400 mb-4 md:mb-0">© 2024 SIICE Mandiri. All rights
                    reserved.</p>
                <div class="flex gap-6">
                    <a class="text-neutral-500 dark:text-neutral-400 hover:text-orange-500 transition-colors"
                        href="#">Kebijakan Privasi</a>
                    <a class="text-neutral-500 dark:text-neutral-400 hover:text-orange-500 transition-colors"
                        href="#">Syarat &amp; Ketentuan</a>
                    <a class="text-neutral-500 dark:text-neutral-400 hover:text-orange-500 transition-colors"
                        href="#">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </footer>
    <script>
        // 1. DARK MODE TOGGLE
        const themeToggleBtn = document.getElementById('theme-toggle');
        const htmlElement = document.documentElement;

        function updateThemeUI(isDark) {
            const icon = themeToggleBtn.querySelector('.material-symbols-outlined');
            if (isDark) {
                htmlElement.classList.add('dark');
                htmlElement.classList.remove('light');
                icon.textContent = 'light_mode';
            } else {
                htmlElement.classList.remove('dark');
                htmlElement.classList.add('light');
                icon.textContent = 'dark_mode';
            }
        }

        themeToggleBtn.addEventListener('click', () => {
            const isCurrentlyDark = htmlElement.classList.contains('dark');
            const newIsDark = !isCurrentlyDark;
            updateThemeUI(newIsDark);
            localStorage.setItem('theme', newIsDark ? 'dark' : 'light');
        });

        const savedTheme = localStorage.getItem('theme');
        const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        updateThemeUI(savedTheme === 'dark' || (!savedTheme && prefersDark));

        // 2. FIXED VIDEO SLIDER LOGIC
        const vSlider = document.getElementById('video-slider');
        const vDots = document.querySelectorAll('#video-dots div');
        const vNextBtn = document.getElementById('video-next');
        const vPrevBtn = document.getElementById('video-prev');
        const vSlides = vSlider.querySelectorAll('.min-w-full');
        const vSlideCount = vSlides.length;
        let vCurrentIndex = 0;
        let vAutoSlideInterval;

        function updateVideoSlider(index, behavior = 'smooth') {
            // Infinite Loop Logic
            if (index >= vSlideCount) vCurrentIndex = 0;
            else if (index < 0) vCurrentIndex = vSlideCount - 1;
            else vCurrentIndex = index;

            const slideWidth = vSlider.offsetWidth;
            vSlider.scrollTo({
                left: slideWidth * vCurrentIndex,
                behavior: behavior
            });

            // Update Dots UI
            vDots.forEach((dot, i) => {
                if (i === vCurrentIndex) {
                    dot.className = 'w-3 h-3 rounded-full bg-orange-500 transition-all cursor-pointer';
                } else {
                    dot.className =
                        'w-3 h-3 rounded-full bg-neutral-300 dark:bg-neutral-800 transition-all cursor-pointer';
                }
            });

            // Manage Video Playback
            vSlides.forEach((slide, i) => {
                const video = slide.querySelector('video');
                if (video) {
                    if (i === vCurrentIndex) {
                        video.play().catch(() => {});
                    } else {
                        video.pause();
                    }
                }
            });
        }

        function startVideoAutoSlide() {
            stopVideoAutoSlide();
            vAutoSlideInterval = setInterval(() => {
                updateVideoSlider(vCurrentIndex + 1);
            }, 5000); // 5 seconds interval
        }

        function stopVideoAutoSlide() {
            if (vAutoSlideInterval) clearInterval(vAutoSlideInterval);
        }

        vNextBtn.addEventListener('click', () => {
            stopVideoAutoSlide();
            updateVideoSlider(vCurrentIndex + 1);
            startVideoAutoSlide();
        });

        vPrevBtn.addEventListener('click', () => {
            stopVideoAutoSlide();
            updateVideoSlider(vCurrentIndex - 1);
            startVideoAutoSlide();
        });

        vDots.forEach((dot, i) => {
            dot.addEventListener('click', () => {
                stopVideoAutoSlide();
                updateVideoSlider(i);
                startVideoAutoSlide();
            });
        });

        // Handle Window Resize
        let vResizeTimer;
        window.addEventListener('resize', () => {
            clearTimeout(vResizeTimer);
            vResizeTimer = setTimeout(() => {
                updateVideoSlider(vCurrentIndex, 'auto');
            }, 100);
        });

        // Initialization
        updateVideoSlider(0, 'auto');
        startVideoAutoSlide();
    </script>
</body>

</html>
