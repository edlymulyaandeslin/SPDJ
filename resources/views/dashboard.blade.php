<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="grid grid-cols-3 mx-auto max-w-7xl sm:px-6 lg:px-8">

            <a href="{{ route('penyakit.index') }}" wire:navigate
                class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Penyakit</h5>
                <div class="flex justify-evenly">
                    <p class="text-gray-700 text-7xl dark:text-gray-400">{{ $penyakit }}</p>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#f1c40f" class="w-16 h-16">
                        <path fill-rule="evenodd"
                            d="M2.25 13.5a8.25 8.25 0 0 1 8.25-8.25.75.75 0 0 1 .75.75v6.75H18a.75.75 0 0 1 .75.75 8.25 8.25 0 0 1-16.5 0Z"
                            clip-rule="evenodd" />
                        <path fill-rule="evenodd"
                            d="M12.75 3a.75.75 0 0 1 .75-.75 8.25 8.25 0 0 1 8.25 8.25.75.75 0 0 1-.75.75h-7.5a.75.75 0 0 1-.75-.75V3Z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
            </a>

            <a href="{{ route('gejala.index') }}" wire:navigate
                class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Gejala</h5>
                <div class="flex justify-evenly">
                    <p class="text-gray-700 text-7xl dark:text-gray-400">{{ $gejala }}</p>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#e74c3c" class="w-16 h-16">
                        <path
                            d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75ZM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 0 1-1.875-1.875V8.625ZM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 0 1 3 19.875v-6.75Z" />
                    </svg>
                </div>
            </a>

            <a href="{{ route('diagnosa.index') }}" wire:navigate
                class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

                @php
                    auth()->user()->role == 'admin'
                        ? ($diagnosa = \App\Models\Diagnosa::all()->count())
                        : ($diagnosa = \App\Models\Diagnosa::where('user_id', auth()->user()->id)
                            ->get()
                            ->count());
                @endphp

                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Diagnosa</h5>
                <div class="flex justify-evenly">

                    <p class="text-gray-700 text-7xl dark:text-gray-400">{{ $diagnosa }}</p>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#2ecc71" class="w-16 h-16">
                        <path fill-rule="evenodd"
                            d="M12.516 2.17a.75.75 0 0 0-1.032 0 11.209 11.209 0 0 1-7.877 3.08.75.75 0 0 0-.722.515A12.74 12.74 0 0 0 2.25 9.75c0 5.942 4.064 10.933 9.563 12.348a.749.749 0 0 0 .374 0c5.499-1.415 9.563-6.406 9.563-12.348 0-1.39-.223-2.73-.635-3.985a.75.75 0 0 0-.722-.516l-.143.001c-2.996 0-5.717-1.17-7.734-3.08Zm3.094 8.016a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
            </a>

        </div>
    </div>
</x-app-layout>
