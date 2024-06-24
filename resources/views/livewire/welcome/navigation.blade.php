<div class="z-10 flex justify-between w-full px-20 pt-6 pb-2 sm:fixed sm:top-0 sm:right-0 ">
    @auth
        <div class="flex space-x-10">
            <x-application-logo class="block w-auto text-gray-800 fill-current h-9 dark:text-gray-200" />

            <a href="#beranda"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Beranda</a>
            <a href="#diagnosa"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Diagnosa</a>
            <a href="#penyakit"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Informasi
                Penyakit</a>
        </div>
        <a href="{{ url('/dashboard') }}"
            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
            wire:navigate>Dashboard</a>
    @else
        <div class="flex space-x-10">
            <x-application-logo class="block w-auto text-gray-800 fill-current h-9 dark:text-gray-200" />

            <a href="#beranda"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Beranda</a>
            <a href="#diagnosa"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Diagnosa</a>
            <a href="#penyakit"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Informasi
                Penyakit</a>
        </div>

        <div>
            <a href="{{ route('login') }}"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                wire:navigate>Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="font-semibold text-gray-600 ms-4 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                    wire:navigate>Register</a>
            @endif
        </div>

    @endauth
</div>
