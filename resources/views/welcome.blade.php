<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title ?? config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            html {
                scroll-behavior: smooth;
            }
        </style>
    </head>

    <body class="antialiased">
        <div
            class="relative min-h-screen bg-green-400 bg-center sm:flex sm:justify-center sm:items-center bg-dots-darker dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <livewire:welcome.navigation />
            @endif

            <div id="beranda" class="w-full mx-auto">
                <div class="mt-20">
                    <section class="bg-green-400 dark:bg-gray-900">
                        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                            <div class="mr-auto place-self-center lg:col-span-7">
                                <h1
                                    class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl dark:text-white">
                                    Sistem Pakar Diagnosis Penyakit Jerawat</h1>
                                <p
                                    class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                                    Temukan penyakit jerawat yang menyerang kulit wajah anda serta ketahui penyebab dan
                                    solusi pengendaliannya. Daftar sekarang lalu mulai diagnosis!</p>
                                <a href="#diagnosa"
                                    class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                                    Mulai
                                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </div>
                            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                                <img src="{{ asset('img/hero-img.png') }}" class="max-w-sm" alt="mockup">
                            </div>
                        </div>
                    </section>

                    <section id="diagnosa" class="bg-green-500 dark:bg-gray-800">
                        <div class="max-w-full px-4 py-8 mx-auto sm:py-16 lg:px-6">
                            <div class="max-w-screen-xl mx-auto text-center">
                                <h2
                                    class="mb-4 text-4xl font-extrabold leading-tight tracking-tight text-gray-100 dark:text-white">
                                    Diagnosis</h2>
                                <p class="mb-6 font-light text-gray-100 dark:text-gray-400 md:text-lg">Sistem ini
                                    menggunakan metode <span class="italic font-semibold"> Certainty Factor</span> untuk
                                    mendiagnosis
                                    penyakit. Proses dimulai
                                    dengan mengevaluasi gejala yang diberikan oleh pengguna, kemudian sistem
                                    mencocokkannya dengan aturan yang ada. Jika terdapat aturan yang terpenuhi, sistem
                                    akan memberikan detail hasil diagnosis penyakit. Detail hasil diagnosis penyakit
                                    akan disimpan dalam sistem. Pengguna dapat melihat kembali detail hasil diagnosis
                                    yang telah dilakukan pada histori diagnosis di menu history.</p>
                                <a href="{{ route('diagnosa.create') }}" wire:navigate
                                    class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">Mulai
                                    Diagnosa Penyakit</a>
                            </div>
                        </div>
                    </section>

                    <section id="penyakit" class="bg-green-400 dark:bg-gray-900">
                        <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-16 lg:px-6">
                            <div class="max-w-screen-md mb-8 lg:mb-16">
                                <h2 class="mb-4 text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">
                                    Daftar Penyakit Jerawat</h2>
                            </div>
                            <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">

                                @foreach ($penyakits as $penyakit)
                                    <div>
                                        <div class="flex items-center justify-center overflow-hidden w-24 h-20 mb-4 ">
                                            <!-- <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300"
                                                        fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z"
                                                            clip-rule="evenodd"></path>
                                                    </svg> -->
                                            <!-- <p>{{ $penyakit->image }}</p> -->
                                            <img src="{{ asset('storage/' . $penyakit->image) }}" alt="">

                                        </div>

                                        <a href="{{ route('penyakit.show', $penyakit->id) }}" wire:navigate
                                            class="hover:text-blue-700">
                                            <h3 class="mb-2 text-xl font-bold dark:text-white">{{ $penyakit->name }}
                                        </a>
                                        </h3>
                                        <p class="text-gray-500 dark:text-gray-400">
                                            {{ \Str::limit($penyakit->definisi, 100) }}
                                        </p>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </section>

                    <footer class="p-4 bg-gray-700 md:p-8 lg:p-10 dark:bg-gray-800">
                        <div class="max-w-screen-xl mx-auto text-center">
                            <a href="#"
                                class="flex items-center justify-center text-2xl font-semibold text-gray-100 dark:text-white">
                                <img class="h-8 mr-3" src="{{ asset('img/logo2.png') }}" />
                                SPDKJ
                            </a>
                            <p class="my-6 text-gray-100 dark:text-gray-400">SPDKJ (Sistem Pakar Diagnosis Penyakit
                                Kulit Jerawat) merupakan hasil tugas akhir dari Jesyca Michel di Prodi Sistem Informasi
                                Universitas Pasir Pengaraian. SPDKJ menggunakan data yang diperoleh dari
                                pakar yang berkompeten, sehingga keakuratan datanya dapat dipercaya. Latar belakang
                                mengapa SPDKJ dibangun adalah untuk membantu masyarakat, terutama para remaja yang
                                mengalami masalah dengan jerawat,
                                dalam mendapatkan informasi dengan cepat dan mudah tanpa harus berkonsultasi secara
                                langsung dengan pakar atau penyuluh lapangan.</p>

                            <span class="text-sm text-gray-400 sm:text-center dark:text-gray-400">Copyright ©
                                {{ now()->year }}
                                &bullet; SPDKJ</span>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </body>

</html>
