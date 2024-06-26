<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ?? config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
        <wireui:scripts />

    </head>

    <body class="font-sans antialiased text-gray-900">

        <div
            class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 max-w-screen sm:justify-center dark:bg-gray-900">
            <div>
                <a href="/" wire:navigate>
                    <x-application-logo class="w-20 h-20 text-gray-500 fill-current" />
                </a>
            </div>

            <div
                class="w-full px-6 py-4 my-16 mt-6 overflow-hidden text-gray-600 bg-white shadow-md sm:max-w-screen-md dark:text-white dark:bg-gray-800 sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>

        <x-dialog />

        @livewireScripts
    </body>

</html>
