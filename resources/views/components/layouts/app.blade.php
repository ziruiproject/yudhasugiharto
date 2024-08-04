<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Yudha\'s Dairy')</title>

    <link rel="shortcut icon" href="{{ asset('favicon.svg') }}" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&family=Quicksand:wght@300..700&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="bg-[#FAFAFA] text-gray-900 min-h-screen flex flex-col justify-between">
    {{-- NAVBAR START --}}
    <nav class="bg-white border-gray-200">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{ route('main') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('yutprw.png') }}" class="h-6" alt="yutprw logo" />
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <a href="mailto:yudhasugiharto.enterprise@gmail.com" target="_blank"
                    class="text-white bg-[#070F2B] hover:bg-[#070F2B] focus:ring-4 focus:outline-none focus:ring-[#070F2B] font-medium rounded-lg text-sm px-4 py-2 text-center hidden md:flex">
                    Contact Me
                </a>
                <button data-collapse-toggle="navbar-cta" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    aria-controls="navbar-cta" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                <ul
                    class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white">
                    <li>
                        <a href="{{ route('main') }}"
                            class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#070F2B]">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}"
                            class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#070F2B]">
                            About
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('service') }}"
                            class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#070F2B]">
                            Services
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- NAVBAR END --}}
    @hasSection('content')
        <main>
            @yield('content')
        </main>
    @else
        {{ $slot }}
    @endif
    @livewireScripts
    {{-- FOOTER START --}}
    <footer class="bg-white rounded-lg shadow m-4">
        <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
            <span class="text-sm text-gray-500 sm:text-center">
                Yudha Prawira Sugiharto
            </span>
            <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 sm:mt-0">
                <li>
                    <a href="{{ route('about') }}" class="hover:underline me-4 md:me-6">About</a>
                </li>
                <li>
                    <a href="{{ route('service') }}" class="hover:underline me-4 md:me-6">Services</a>
                </li>
            </ul>
        </div>
    </footer>

    {{-- FOOTER END --}}
</body>

</html>
