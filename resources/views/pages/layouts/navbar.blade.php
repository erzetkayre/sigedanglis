<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite(['resources/js/app.js','resources/css/app.css'])
        {{-- Leaflet Map --}}
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"/>
        <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
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
        <link rel="icon" href="assets/images/icon.png">
        {{-- AOS --}}
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    </head>
    <body>
        {{-- Navigation Bar --}}
        <header class="header flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full bg-white border-b border-gray-200 text-sm py-3 sm:py-0">
            <nav class="relative max-w-[85rem] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8" aria-label="Global">
                <div class="flex items-center justify-between">
                    <a class="inline-flex items-center gap-x-3 font-semibold text-sm" href="#">
                        <img class="w-10 h-auto" src="assets/images/logo.png" alt="Logo">
                    </a>
                    <div class="sm:hidden">
                        <button type="button" class="hs-collapse-toggle size-9 flex justify-center items-center text-sm font-semibold rounded-lg border border-gray-200 text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none" data-hs-collapse="#navbar-collapse-with-animation" aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
                            <svg class="hs-collapse-open:hidden size-4" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                            <svg class="hs-collapse-open:block flex-shrink-0 hidden size-4" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div id="navbar-collapse-with-animation" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-end sm:ps-7">
                        <a class="py-3 ps-px sm:px-3 font-medium text-gray-500" href="#beranda" aria-current="page">Beranda</a>
                        <a class="py-3 ps-px sm:px-3 font-medium text-gray-500 hover:text-sky-400" href="#about">About Us</a>
                        <a class="py-3 ps-px sm:px-3 font-medium text-gray-500 hover:text-sky-400" href="#features">Our Features</a>
                        <a class="py-3 ps-px sm:px-3 font-medium text-gray-500 hover:text-sky-400" href="#location">Recent Location</a>
                        <a class="py-3 ps-px sm:px-3 font-medium text-gray-500 hover:text-sky-400" href="#contact">Contact Us</a>
                    @auth
                        <a class="py-3 ps-px sm:px-3 font-medium text-gray-500 hover:text-sky-400" href="admin/dashboard">Dashboard</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="flex items-center gap-x-2 font-medium text-gray-500 hover:text-sky-400 sm:border-s sm:border-gray-300 py-2 sm:py-0 sm:ms-4 sm:my-6 sm:ps-6"
                               href="{{ route('logout') }}"
                               onclick="event.preventDefault(); this.closest('form').submit();">
                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                </svg>
                                Log out
                            </a>
                        </form>
                    @else
                        <a class="flex items-center gap-x-2 font-medium text-gray-500 hover:text-sky-400 sm:border-s sm:border-gray-300 py-2 sm:py-0 sm:ms-4 sm:my-6 sm:ps-6" href="/login">
                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                            </svg>
                            Log in
                        </a>
                    @endauth
                    </div>
                </div>
            </nav>
        </header>
        @yield('content')
    </body>
</html>
