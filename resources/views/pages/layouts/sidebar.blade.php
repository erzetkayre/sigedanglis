<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite(['resources/js/app.js','resources/css/app.css'])
        <link rel="canonical" href="https://preline.co/">
        <title>@yield('title','Gedanglis')</title>
        {{-- Scroll Reveal --}}
        <script src="https://unpkg.com/scrollreveal"></script>
        {{-- Jquery --}}
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        {{-- Font Awesome --}}
        <script src="https://kit.fontawesome.com/669eae9cd0.js" crossorigin="anonymous"></script>
        {{-- Google Font and Icons --}}
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24..48,100..700,0..1,-50..200" />
        {{-- Scroll Reveal  --}}
        <script src="https://unpkg.com/scrollreveal"></script>
        <!-- Favicon -->
        <link rel="shortcut icon" href="../../favicon.ico">
        <!-- Font -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
        <!-- Theme Check and Update -->
        <script>
            const html = document.querySelector('html');
            const isLightOrAuto = localStorage.getItem('hs_theme') === 'light' || (localStorage.getItem('hs_theme') === 'auto' && !window.matchMedia('(prefers-color-scheme: dark)').matches);
            const isDarkOrAuto = localStorage.getItem('hs_theme') === 'dark' || (localStorage.getItem('hs_theme') === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches);

            if (isLightOrAuto && html.classList.contains('dark')) html.classList.remove('dark');
            else if (isDarkOrAuto && html.classList.contains('light')) html.classList.remove('light');
            else if (isDarkOrAuto && !html.classList.contains('dark')) html.classList.add('dark');
            else if (isLightOrAuto && !html.classList.contains('light')) html.classList.add('light');
        </script>
        <!-- Apexcharts -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts/dist/apexcharts.min.css">
        <style type="text/css">
            .apexcharts-tooltip.apexcharts-theme-light
            {
            background-color: transparent !important;
            border: none !important;
            box-shadow: none !important;
            }
        </style>
        <!-- CSS Preline -->
        <link rel="stylesheet" href="https://preline.co/assets/css/main.min.css">
    </head>
    <body>
        {{-- Side Bar --}}

    <!-- Breadcrumb -->
    <div class="sticky top-0 inset-x-0 z-20 bg-white border-y px-4 sm:px-6 lg:px-8 lg:hidden">
        <div class="flex items-center py-2">
        <!-- Navigation Toggle -->
        <button type="button" class="size-8 flex justify-center items-center gap-x-2 border border-gray-200 text-gray-800 hover:text-gray-500 rounded-lg focus:outline-none focus:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-200 dark:hover:text-neutral-500 dark:focus:text-neutral-500" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-application-sidebar" aria-label="Toggle navigation" data-hs-overlay="#hs-application-sidebar">
            <span class="sr-only">Toggle Navigation</span>
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <rect width="18" height="18" x="3" y="3" rx="2" />
            <path d="M15 3v18" />
            <path d="m8 9 3 3-3 3" />
            </svg>
        </button>
        <!-- End Navigation Toggle -->

        <!-- Breadcrumb -->
        <ol class="ms-3 flex items-center whitespace-nowrap">
            <li class="flex items-center text-sm text-gray-800 dark:text-neutral-400">
            Application Layout
            <svg class="shrink-0 mx-3 overflow-visible size-2.5 text-gray-400 dark:text-neutral-500" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
            </svg>
            </li>
            <li class="text-sm font-semibold text-gray-800 truncate dark:text-neutral-400" aria-current="page">
            Dashboard
            </li>
        </ol>
        <!-- End Breadcrumb -->
        </div>
    </div>
    <!-- End Breadcrumb -->


    <div class="flex justify-between h-16">
        <div class="flex">
            <!-- Logo -->


            <!-- Navigation Links -->
            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                @if (auth()->check())
                    @php
                        $role = auth()->user()->role_id;
                    @endphp

                    {{-- Role Owner --}}
                    @if ($role == 1)
                    <x-nav-link :href="route('owner.dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>

                    {{-- Role Admin --}}
                    @elseif ($role == 2)
                    <x-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>

                    {{-- Role Seller --}}
                    @else ($role == 2)
                    <x-nav-link :href="route('seller.dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    @endif
                @endif

            </div>
        </div>

        <!-- Settings Dropdown -->
        <div class="hidden sm:flex sm:items-center sm:ms-6">
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                        <div>{{ Auth::user()->name }}</div>

                        <div class="ms-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-dropdown-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        </div>


    </div>

  <!-- Sidebar -->
  <div id="hs-application-sidebar" class="hs-overlay  [--auto-close:lg]
    hs-overlay-open:translate-x-0
    -translate-x-full transition-all duration-300 transform
    w-[260px] h-full
    hidden
    fixed inset-y-0 start-0 z-[60]
    bg-white border-e border-gray-200
    lg:block lg:translate-x-0 lg:end-auto lg:bottom-0
   " role="dialog" tabindex="-1" aria-label="Sidebar">
    <div class="relative flex flex-col h-full max-h-full">
        <div class="px-6 pt-4">
            <a class="flex-none rounded-xl text-xl inline-block font-semibold focus:outline-none focus:opacity-80" href="#" aria-label="Preline">
            Gedanglis.
            </a>
        </div>
        <div class="h-full overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
            <nav class="hs-accordion-group p-3 w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
                <ul class="flex flex-col space-y-1">
                        @if (auth()->check())
                            @php
                                $role = auth()->user()->role_id;
                            @endphp

                            {{-- Role Owner --}}
                            @if ($role == 1)
                            <li class="text-md font-semibold text-sky-500 py-3 ps-3">
                                Owner Menus
                            </li>
                            <li>
                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-700 dark:text-white
                                    {{ Route::is('owner.dashboard') ? 'bg-gray-200 dark:bg-neutral-800' : '' }}"
                                    href="{{ route('owner.dashboard') }}">
                                    <span class="material-symbols-rounded">home</span>
                                    Dashboard
                                </a>
                            </li>

                            <li>
                                <a class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-700 dark:text-neutral-200 dark:hover:text-neutral-300
                                    {{ Route::is('owner.users.index') ? 'bg-gray-200 dark:bg-neutral-800' : '' }}"
                                    href="{{ route('owner.users.index') }}">
                                    <span class="material-symbols-rounded">groups</span>
                                    User Management
                                </a>
                            </li>

                            <li>
                                <a class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-700 dark:text-neutral-200 dark:hover:text-neutral-300
                                    {{ Route::is('owner.pv') ? 'bg-gray-200 dark:bg-neutral-800' : '' }}"
                                    href="{{ route('owner.pv') }}">
                                    <span class="material-symbols-rounded">solar_power</span>
                                    Monitoring PV
                                </a>
                            </li>

                            <li>
                                <a class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-700 dark:text-neutral-200 dark:hover:text-neutral-300
                                    {{ Route::is('owner.cart') ? 'bg-gray-200 dark:bg-neutral-800' : '' }}"
                                    href="{{ route('owner.cart') }}">
                                    <span class="material-symbols-rounded">agriculture</span>
                                    Monitoring Gerobak
                                </a>
                            </li>

                            <li>
                                <a class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-700 dark:text-neutral-200 dark:hover:text-neutral-300
                                    {{ Route::is('owner.report.index') ? 'bg-gray-200 dark:bg-neutral-800' : '' }}"
                                    href="{{ route('owner.report.index') }}">
                                    <span class="material-symbols-rounded">summarize</span>
                                    Report and Summary
                                </a>
                            </li>

                            {{-- Role Admin --}}
                            @elseif ($role == 2)
                            <li class="text-md font-semibold text-sky-500 py-3 ps-3">
                                Admin Menus
                            </li>
                            <li>
                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-700 dark:text-white
                                    {{ Route::is('owner.dashboard') ? 'bg-gray-200 dark:bg-neutral-800' : '' }}"
                                    href="{{ route('owner.dashboard') }}">
                                    <span class="material-symbols-rounded">home</span>
                                    Dashboard
                                </a>
                            </li>

                            <li>
                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-700 dark:text-white
                                    {{ Route::is('owner.users.index') ? 'bg-gray-200 dark:bg-neutral-800' : '' }}"
                                    href="{{ route('owner.users.index') }}">
                                    <span class="material-symbols-rounded">groups</span>
                                    User Management
                                </a>
                            </li>

                            <li>
                                <a class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-700 dark:text-neutral-200 dark:hover:text-neutral-300
                                    {{ Route::is('owner.pv') ? 'bg-gray-200 dark:bg-neutral-800' : '' }}"
                                    href="{{ route('owner.pv') }}">
                                    <span class="material-symbols-rounded">solar_power</span>
                                    Monitoring PV
                                </a>
                            </li>

                            <li>
                                <a class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-700 dark:text-neutral-200 dark:hover:text-neutral-300
                                    {{ Route::is('owner.cart') ? 'bg-gray-200 dark:bg-neutral-800' : '' }}"
                                    href="{{ route('owner.cart') }}">
                                    <span class="material-symbols-rounded">agriculture</span>
                                    Monitoring Gerobak
                                </a>
                            </li>

                            <li>
                                <a class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-700 dark:text-neutral-200 dark:hover:text-neutral-300
                                    {{ Route::is('owner.report.index') ? 'bg-gray-200 dark:bg-neutral-800' : '' }}"
                                    href="{{ route('owner.report.index') }}">
                                    <span class="material-symbols-rounded">summarize</span>
                                    Report and Summary
                                </a>
                            </li>


                            {{-- Role Seller --}}
                            @else
                            <li class="text-md font-semibold text-sky-500 py-3 ps-3">
                                Seller Menus
                            </li>

                            @endif

                        @endif



                        {{-- <li class="hs-accordion" id="users-accordion">
                            <button type="button" class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-200" aria-expanded="true" aria-controls="users-accordion-child">
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                </svg>
                                Users

                                <svg class="hs-accordion-active:block ms-auto hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m18 15-6-6-6 6" />
                                </svg>

                                <svg class="hs-accordion-active:hidden ms-auto block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6" />
                                </svg>
                            </button>
                            <div id="users-accordion-child" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden" role="region" aria-labelledby="users-accordion">
                                <ul class="hs-accordion-group ps-8 pt-1 space-y-1" data-hs-accordion-always-open>
                                <li class="hs-accordion" id="users-accordion-sub-1">
                                    <button type="button" class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-200" aria-expanded="true" aria-controls="users-accordion-sub-1-child">
                                    Sub Menu 1

                                    <svg class="hs-accordion-active:block ms-auto hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m18 15-6-6-6 6" />
                                    </svg>

                                    <svg class="hs-accordion-active:hidden ms-auto block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m6 9 6 6 6-6" />
                                    </svg>
                                    </button>

                                    <div id="users-accordion-sub-1-child" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden" role="region" aria-labelledby="users-accordion-sub-1">
                                    <ul class="pt-1 space-y-1">
                                        <li>
                                        <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-200" href="#">
                                            Link 1
                                        </a>
                                        </li>
                                        <li>
                                        <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-200" href="#">
                                            Link 2
                                        </a>
                                        </li>
                                        <li>
                                        <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-200" href="#">
                                            Link 3
                                        </a>
                                        </li>
                                    </ul>
                                    </div>
                                </li>
                                <li class="hs-accordion" id="users-accordion-sub-2">
                                    <button type="button" class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-200" aria-expanded="true" aria-controls="users-accordion-sub-2-child">
                                    Sub Menu 2

                                    <svg class="hs-accordion-active:block ms-auto hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m18 15-6-6-6 6" />
                                    </svg>

                                    <svg class="hs-accordion-active:hidden ms-auto block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m6 9 6 6 6-6" />
                                    </svg>
                                    </button>

                                    <div id="users-accordion-sub-2-child" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden" role="region" aria-labelledby="users-accordion-sub-2">
                                    <ul class="pt-1 space-y-1">
                                        <li>
                                        <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-200" href="#">
                                            Link 1
                                        </a>
                                        </li>
                                        <li>
                                        <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-200" href="#">
                                            Link 2
                                        </a>
                                        </li>
                                        <li>
                                        <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-200" href="#">
                                            Link 3
                                        </a>
                                        </li>
                                    </ul>
                                    </div>
                                </li>
                                </ul>
                            </div>
                        </li> --}}
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- End Sidebar -->

        @yield('content')
    </body>
</html>
