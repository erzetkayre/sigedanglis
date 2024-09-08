@extends('pages.layouts.navbar')

@section('title','Home - Gedanglis')
@section('content')
{{-- Section Welcome --}}
<section class="py-10" id="beranda">
    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-4 md:gap-8 xl:gap-20 md:items-center">
            <div>
                <h1 class="block text-3xl font-bold text-gray-800 sm:text-4xl lg:text-5xl lg:leading-tight">Gerobak Dagang Listrik <span class="text-sky-500">Inovasi Bisnis Cerdas, </span>Energi Bersih.</h1>
                <p class="mt-3 text-md text-gray-800">Gedanglis menawarkan gerobak dagang listrik yang praktis dan ramah lingkungan. Solusi cerdas untuk bisnis dengan teknologi efisien  berdampak minimal. Temukan gerobak listrik ideal untuk usaha di sini.</p>
                <div class="mt-7 grid gap-3 w-full sm:inline-flex">
                <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-sky-500 text-white hover:bg-sky-700 disabled:opacity-50 disabled:pointer-events-none" href="#about">
                    Get Started
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                </a>
                </div>
            </div>
            <div class="relative">
                <img class="w-full rounded-md" src="assets/images/cart.svg" alt="Image Description">
            </div>
            </div>
    </div>
</section>

{{-- Section About --}}
<section class="judul pt-5 text-center page-section " id="about">
    <div class="max-w-[85rem] px-4 py-3 sm:px-6 lg:px-8 lg:py-7 mx-auto">
        <h1 class=" text-5xl text-gray-800 font-bold lg:text-4xl align-middle">
            About Us
        </h1>
        <p class="mt-1 text-sky-400 text-md">
            Pelajari lebih lanjut mengenai kami
        </p>
    </div>
    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Grid -->
        <div class="grid md:grid-cols-2 gap-4 md:gap-8 xl:gap-20">
            {{-- <div data-hs-carousel='{
                "loadingClasses": "opacity-0",
                "isAutoPlay": true
            }' class="relative">
                <div class="hs-carousel relative overflow-hidden w-full min-h-96 bg-white rounded-lg">
                    <div class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
                        <div class="hs-carousel-slide">
                            <div class="flex justify-center w-full bg-gray-100">
                                <img src="media/bg.jpg" alt="">
                            </div>
                        </div>
                        <div class="hs-carousel-slide">
                            <div class="flex justify-center h-full bg-gray-200">
                                <img src="media/start.jpg" alt="">
                            </div>
                        </div>
                        <div class="hs-carousel-slide">
                            <div class="flex justify-center h-full bg-gray-300">
                                <img src="media/bg.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="hs-carousel-prev  hs-carousel:disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 start-0 inline-flex justify-center items-center w-[46px] h-full text-sky-500 hover:bg-gray-600/10 rounded-s-lg">
                    <span class="text-2xl " aria-hidden="true">
                    <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m15 18-6-6 6-6"></path>
                    </svg>
                    </span>
                    <span class="sr-only">Previous</span>
                </button>
                <button type="button" class="hs-carousel-next hs-carousel:disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 end-0 inline-flex justify-center items-center w-[46px] h-full text-sky-500 hover:bg-gray-600/10 rounded-e-lg">
                    <span class="sr-only">Next</span>
                    <span class="text-2xl" aria-hidden="true">
                    <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg>
                    </span>
                </button>
                <div class="hs-carousel-pagination flex justify-center absolute bottom-3 start-0 end-0 space-x-2">
                    <span class="hs-carousel-active:bg-sky-500 hs-carousel-active:border-sky-500 size-3 border border-gray-400 rounded-full cursor-pointer"></span>
                    <span class="hs-carousel-active:bg-sky-500 hs-carousel-active:border-sky-500 size-3 border border-gray-400 rounded-full cursor-pointer"></span>
                    <span class="hs-carousel-active:bg-sky-500 hs-carousel-active:border-sky-500 size-3 border border-gray-400 rounded-full cursor-pointer"></span>
                </div>
            </div> --}}
            <div class="flex justify-center h-4/6">
                <img src="assets/images/real.svg" alt="">
            </div>
            <div>
                <h1 class=" text-5xl md:text-2xl sm:text-xl text-gray-800 font-bold lg:text-4xl text-start">
                    Gerobak Dagang Listrik <span class="text-sky-500">(Gedanglis)</span>
                </h1>
                <p class="mt-5 text-gray-500 text-md text-justify indent-10">
                    Gedanglis menghadirkan gerobak dagang listrik yang praktis dan ramah lingkungan sebagai solusi inovatif bagi para pengusaha. Dengan teknologi yang efisien, gerobak ini dirancang untuk mengurangi dampak lingkungan dan memudahkan operasional bisnis. Desainnya yang modern dan kompak memungkinkan gerobak digunakan di berbagai lokasi dengan fleksibilitas tinggi, tanpa bergantung pada bahan bakar fosil. Hal ini menjadikannya pilihan ideal bagi para pelaku usaha yang ingin menjalankan bisnis secara lebih berkelanjutan.
                </p>
                <p class="mt-1 text-gray-500 text-md text-justify indent-10">
                    Selain ramah lingkungan, gerobak listrik dari Gedanglis dilengkapi dengan fitur canggih seperti teknologi IoT untuk pelacakan lokasi secara real-time, panel surya yang mendukung sumber daya terbarukan, serta motor listrik yang efisien. Dengan kombinasi ini, pengusaha dapat menjalankan usaha mereka dengan lebih hemat energi, biaya operasional yang lebih rendah, serta pemantauan yang mudah dari mana saja, menjadikan gerobak ini solusi cerdas untuk bisnis modern.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Section Features --}}
<section class="pt-5 pb-10" id="features">
    <div class="text-center max-w-[85rem] px-4 py-3 sm:px-6 lg:px-8 lg:pt-7 mx-auto">
        <h1 class=" text-5xl text-gray-800 font-bold lg:text-4xl align-middle">
            Our Features
        </h1>
        <p class="mt-1 text-sky-400 text-md">
            Fitur yang kami berikan pada layanan kami
        </p>
    </div>
    <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
        <div class="lg:mt-8 grid lg:grid-cols-3 gap-8 lg:gap-12">
            <div class="lg:col-span-3">
                <div class="grid lg:grid-cols-3 sm:grid-cols-2 gap-8 md:gap-12">
                    <div class="flex gap-x-5">
                        <div class="justify-content">
                            <span class="flex-shrink-0 mt-1 fa-xl text-sky-500 material-symbols-rounded scale-150">
                                location_on
                            </span>
                        </div>
                        <div class="grow">
                            <h3 class="text-lg font-semibold text-gray-800">
                                Real-time Tracking
                            </h3>
                        <p class="mt-1 text-gray-600">
                                Fitur pelacakan lokasi gerobak secara real-time memungkinkan pemantauan posisi usaha dengan akurat dan efisien.
                        </p>
                        </div>
                    </div>
                    <div class="flex gap-x-5">
                        <div class="justify-content">
                            <span class="flex-shrink-0 mt-1 fa-xl text-sky-500 material-symbols-rounded scale-150">
                                analytics
                            </span>
                        </div>
                        <div class="grow">
                            <h3 class="text-lg font-semibold text-gray-800">
                                Analytical Dashboard
                            </h3>
                        <p class="mt-1 text-gray-600">
                                Dashboard analitik menyediakan data lengkap mengenai performa usaha, memudahkan pengambilan keputusan berbasis data.
                        </p>
                        </div>
                    </div>
                    <div class="flex gap-x-5">
                        <div class="justify-content">
                            <span class="flex-shrink-0 mt-1 fa-xl text-sky-500 material-symbols-rounded scale-150">
                                monitoring
                            </span>
                        </div>
                        <div class="grow">
                            <h3 class="text-lg font-semibold text-gray-800">
                                Monitoring & Control
                            </h3>
                        <p class="mt-1 text-gray-600">
                                Sistem memungkinkan pemantauan dan pengendalian gerobak listrik dari jarak jauh melalui platform yang mudah diakses, meningkatkan fleksibilitas operasional.
                        </p>
                        </div>
                    </div>
                    <div class="flex gap-x-5">
                        <div class="justify-content">
                            <span class="flex-shrink-0 mt-1 fa-xl text-sky-500 material-symbols-rounded scale-150">
                                cycle
                            </span>
                        </div>
                        <div class="grow">
                        <h3 class="text-lg font-semibold text-gray-800">
                            Cross Platform
                        </h3>
                        <p class="mt-1 text-gray-600">
                            Aplikasi mendukung berbagai sistem operasi, baik di perangkat mobile maupun desktop, memudahkan akses dari mana saja.
                        </p>
                        </div>
                    </div>
                    <div class="flex gap-x-5">
                        <div class="justify-content">
                            <span class="flex-shrink-0 mt-1 fa-xl text-sky-500 material-symbols-rounded scale-150">
                                devices
                            </span>
                        </div>
                        <div class="grow">
                        <h3 class="text-lg font-semibold text-gray-800">
                            Multi-Device Control
                        </h3>
                        <p class="mt-1 text-gray-600">
                            Kontrol gerobak listrik dapat dilakukan dari berbagai perangkat seperti smartphone, tablet, atau komputer, untuk kenyamanan dan kemudahan.
                        </p>
                        </div>
                    </div>
                    <div class="flex gap-x-5">
                        <div class="justify-content">
                            <span class="flex-shrink-0 mt-1 fa-xl text-sky-500 material-symbols-rounded scale-150">
                                lab_profile
                            </span>
                        </div>
                        <div class="grow">
                        <h3 class="text-lg font-semibold text-gray-800">
                            Report and Summary
                        </h3>
                        <p class="mt-1 text-gray-600">
                            Laporan dan ringkasan otomatis memberikan gambaran lengkap tentang penggunaan energi, performa sistem, dan hasil usaha dalam satu tempat.
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Section Location --}}
<section class="pt-10 pb-10" id="location">
    <div class="text-center">
        <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 lg:py-3 mx-auto">
            <h1 class=" text-5xl text-gray-800 font-bold lg:text-4xl align-middle">
                Recent Location
            </h1>
            <p class="mt-1 text-sky-400 text-lg">
                Lokasi terkini gerobak dagang listrik
            </p>
        </div>
        <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 lg:py-3 mx-auto">
            <iframe class="rounded-xl w-full justify-end" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.120378699221!2d110.84910968408413!3d-7.561851955198028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a16fdf072a90f%3A0xea50b255b0e6ce3e!2sFakultas%20Teknik%20UNS!5e0!3m2!1sen!2sid!4v1725763958110!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section class="pt-10 pb-10" id="team">

{{-- Footer --}}
<section class="pt-5" id="contact">
 <!-- ========== FOOTER ========== -->
    <footer class="mt-auto bg-sky-900 w-full">
        <div class="mt-auto w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 lg:pt-20 mx-auto">
        <!-- Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6">
            <div class="col-span-full lg:col-span-1">
                <img class="w-20 h-auto" src="assets/images/logo.png" alt="Logo">
                <a class="flex-none text-xl font-semibold text-white focus:outline-none focus:opacity-80" href="#" aria-label="Brand">Gedanglis</a>
            </div>
            <!-- End Col -->

            <div class="col-span-1">
            <h4 class="font-semibold text-gray-100">Company</h4>

            <div class="mt-3 grid space-y-3">
                <p><a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200" href="#home">Home</a></p>
                <p><a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200" href="#about">About Us</a></p>
                <p><a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200" href="#features">Our Features</a></p>
                <p><a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200" href="#location">Recent Location</a></p>
                <p><a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200"href="#contact">Contact Us</a></p>
            </div>
            </div>
            <!-- End Col -->

            <div class="col-span-1">
            <h4 class="font-semibold text-gray-100">Contact Us</h4>

            <div class="mt-3 grid space-y-3">
                <Address class="inline-flex gap-x-2 text-gray-400">Jl. Ir. Sutami No.36 A, Jebres, Kec. Jebres, Kota Surakarta, Jawa Tengah 57126</Address>
                <Address class="inline-flex gap-x-2 text-gray-400">support.gedanglis@gmail.com</Address>

            </div>
            </div>
            <!-- End Col -->

            <div class="col-span-2">
            <h4 class="font-semibold text-gray-100">Stay up to date</h4>

            <form>
                <div class="mt-4 flex flex-col items-center gap-2 sm:flex-row sm:gap-3 bg-white rounded-lg p-2">
                <div class="w-full">
                    <label for="hero-input" class="sr-only">Subscribe</label>
                    <input type="text" id="hero-input" name="hero-input" class="py-3 px-4 block w-full border-transparent rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Enter your email">
                </div>
                <a class="w-full sm:w-auto whitespace-nowrap p-3 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="#">
                    Subscribe
                </a>
                </div>
                <p class="mt-3 text-sm text-gray-400">
                </p>
            </form>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Grid -->
    </footer>
    <!-- ========== END FOOTER ========== -->
</section>
<hr class="border-sky-400">

{{-- Copyright --}}
<section class="py-5" id="footer">
    <div class="mt-auto w-full max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
        <p class="text-center text-sm"> © Copyright 2024 - Gerobak Dagang Listrik Teknik Elektro Universitas Sebelas Maret</p>
    </div>
</section>

<script>
    ScrollReveal({ reset: true });

    ScrollReveal().reveal('.judul',{origin:'left'});
</script>
<script>
    // Initialize ScrollReveal
    ScrollReveal().reveal('.judul', { origin: 'left', distance: '50px', duration: 1000 });
    ScrollReveal().reveal('#beranda', { origin: 'bottom', distance: '50px', duration: 1000 });
    ScrollReveal().reveal('#about', { origin: 'bottom', distance: '50px', duration: 1000 });
    ScrollReveal().reveal('#features', { origin: 'bottom', distance: '50px', duration: 1000 });
    ScrollReveal().reveal('#location', { origin: 'bottom', distance: '50px', duration: 1000 });
    ScrollReveal().reveal('#contact', { origin: 'bottom', distance: '50px', duration: 1000 });
    ScrollReveal().reveal('#footer', { origin: 'bottom', distance: '50px', duration: 1000 });
</script>


@endsection

