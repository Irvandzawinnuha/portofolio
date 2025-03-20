<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Irvan Dzawin Nuha - Portofolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">
    <!-- Navbar -->
    <nav class="bg-white dark:bg-gray-800 fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"> 
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="pt-20 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32">
            <div class="lg:flex lg:items-center lg:justify-between">
                <div class="lg:w-1/2">
                    <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white sm:text-5xl md:text-6xl">
                        <span class="block">Irvan Dzawin Nuha</span>
                        <span class="block text-blue-600">Web Developer</span>
                    </h1>
                    <p class="mt-3 text-base text-gray-500 dark:text-gray-300 sm:text-lg md:mt-5 md:text-xl">
                        Selamat datang di portfolio saya. Saya adalah seorang web developer yang passionate dalam menciptakan solusi digital yang inovatif.
                    </p>
                    <div class="mt-5 sm:mt-8">
                        <a href="#contact" class="inline-flex items-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 md:py-4 md:text-lg md:px-10">
                            Hubungi Saya
                        </a>
                    </div>
                </div>
                <div class="mt-10 lg:mt-0 lg:w-1/2">
                    <img class="rounded-lg shadow-xl" src="{{ asset('images/profile.jpg') }}" alt="Profile">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white sm:text-4xl">
                    Tentang Saya
                </h2>
                <p class="mt-4 max-w-2xl mx-auto text-xl text-gray-500 dark:text-gray-300">
                    Saya adalah seorang Web Developer dengan pengalaman dalam pengembangan aplikasi web modern.
                </p>
            </div>
            <div class="mt-20">
                <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
                    <div class="bg-gray-50 dark:bg-gray-700 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white">Pendidikan</h3>
                        <ul class="mt-4 space-y-4">
                            <li class="text-gray-600 dark:text-gray-300">
                                <span class="font-medium">Universitas XYZ</span>
                                <p>Jurusan Teknik Informatika (2019-2023)</p>
                            </li>
                        </ul>
                    </div>
                    <div class="bg-gray-50 dark:bg-gray-700 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white">Pengalaman</h3>
                        <ul class="mt-4 space-y-4">
                            <li class="text-gray-600 dark:text-gray-300">
                                <span class="font-medium">Web Developer - PT ABC</span>
                                <p>2023 - Sekarang</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-20 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white sm:text-4xl">
                    Keahlian
                </h2>
            </div>
            <div class="mt-20">
                <div class="grid grid-cols-2 gap-8 md:grid-cols-3 lg:grid-cols-4">
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('images/skills/laravel.svg') }}" alt="Laravel" class="h-16">
                        <span class="mt-4 text-gray-600 dark:text-gray-300">Laravel</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('images/skills/php.svg') }}" alt="PHP" class="h-16">
                        <span class="mt-4 text-gray-600 dark:text-gray-300">PHP</span>
                    </div>
                    <!-- Tambahkan skill lainnya -->
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20 bg-white dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white sm:text-4xl">
                    Proyek Terbaru
                </h2>
            </div>
            <div class="mt-20">
                <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                    <div class="bg-gray-50 dark:bg-gray-700 rounded-lg overflow-hidden">
                        <img src="{{ asset('images/projects/project1.jpg') }}" alt="Project 1" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white">Nama Proyek 1</h3>
                            <p class="mt-2 text-gray-600 dark:text-gray-300">Deskripsi singkat proyek</p>
                            <div class="mt-4">
                                <a href="#" class="text-blue-600 hover:text-blue-700">Lihat Detail →</a>
                            </div>
                        </div>
                    </div>
                    <!-- Tambahkan proyek lainnya -->
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white sm:text-4xl">
                    Mari Terhubung
                </h2>
                <p class="mt-4 text-xl text-gray-500 dark:text-gray-300">
                    Tertarik untuk bekerja sama? Hubungi saya melalui:
                </p>
            </div>
            <div class="mt-10">
                <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
                    <div class="bg-white dark:bg-gray-700 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white">Kontak Langsung</h3>
                        <div class="mt-4 space-y-4">
                            <p class="flex items-center text-gray-600 dark:text-gray-300">
                                <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                irvandzwinnuha15@gmail.com
                            </p>
                            <p class="flex items-center text-gray-600 dark:text-gray-300">
                                <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                                +62 878-476-19448
                            </p>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-gray-700 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white">Media Sosial</h3>
                        <div class="mt-4 flex space-x-6">
                            <a href="https://github.com/Irvandzawinnuha" class="text-gray-400 hover:text-gray-500">
                                <span class="sr-only">GitHub</span>
                                <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                </svg>
                            </a>
                            <a href="https://www.linkedin.com/in/irvan-dzawin-nuha-b9928418a/" class="text-gray-400 hover:text-gray-500">
                                <span class="sr-only">LinkedIn</span>
                                <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                </svg>
                            </a>
                            <a href="https://www.instagram.com/vn_zwin" class="text-gray-400 hover:text-gray-500">
                                <span class="sr-only">Instagram</span>
                                <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
