@extends('pages.layouts.navbar')

@section('title','Home - Gedanglis')
@section('content')
<script>
    AOS.init();
</script>
<style>
    #map{
        width: 100%;
        height: 400px;
        border-radius: 0.5rem;
        overflow: hidden;
    }
</style>

{{-- Section Welcome --}}
<section class="pt-10" id="beranda" data-aos="fade-up">
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
<section class="judul pt-5" id="about" data-aos="fade-up">
    <div class="text-center max-w-[85rem] px-4 py-3 sm:px-6 lg:px-8 lg:py-7 mx-auto">
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
            <div class="flex justify-center w-4/6">
                <img class="object-center" src="assets/images/real.svg" alt="search">
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
<section class="pt-10 pb-10" id="features" data-aos="fade-up">
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

{{-- Section Video --}}
<section class="pt-5 pb-10" id="features" data-aos="fade-up">
    <div class="text-center max-w-[85rem] px-4 py-3 sm:px-6 lg:px-8 lg:pt-7 mx-auto">
        <h1 class=" text-5xl text-gray-800 font-bold lg:text-4xl align-middle">
            Discover Our Smart Cart!
        </h1>
        <p class="mt-1 text-sky-400 text-md">
            Kenal kami lebih dekat melalui video berikut
        </p>
    </div>
    <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
        <video class="w-full rounded-lg shadow-lg" controls>
            <source src="assets/videos/fixxx.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</section>

{{-- Section Location --}}
<section class="pt-10 pb-10" id="location" data-aos="fade-up">
    <div class="text-center">
        <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 lg:py-3 mx-auto">
            <h1 class=" text-5xl text-gray-800 font-bold lg:text-4xl align-middle">
                Recent Location
            </h1>
            <p class="mt-1 text-sky-400 text-lg">
                Lokasi terkini gerobak dagang listrik
            </p>
        </div>
        <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 lg:py-3 mx-auto H-64">
            <div id="map" style="rounded-lg"></div>
        </div>
    </div>
</section class="pt-10 pb-10" id="team">

{{-- Footer --}}
<section class="pt-5" id="contact" data-aos="fade-up">
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
                <a href="" class="inline-flex gap-x-2 text-gray-400">support.gedanglis@gmail.com</a>
                <a href="https://wa.me/+6282295313834" target="_blank">
                    <button type="button" class="flex shrink-0 justify-center items-center gap-2 size-[38px] text-sm font-medium rounded-lg border border-transparent bg-green-500 text-white hover:bg-green-600 focus:outline-none focus:bg-green-600 disabled:opacity-50 disabled:pointer-events-none">
                        <i class="fa-brands fa-whatsapp fa-xl"></i>
                    </button>
                </a>

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
                <a inactive class="w-full sm:w-auto whitespace-nowrap p-3 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="">
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
</section data-aos="fade-up">
<hr class="border-sky-800">

{{-- Copyright --}}
<section class="py-5 bg-sky-900" id="footer">
    <div class="mt-auto w-full max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
        <p class="text-center text-sm text-white"> © Copyright 2024 - Gerobak Dagang Listrik Teknik Elektro Universitas Sebelas Maret</p>
    </div>
</section>


<script>
    // Script Maps
    var map = L.map('map').setView([-7.561907, 110.853972], 15);

    // API Map OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var customIcon = L.icon({
        iconUrl: 'https://cdn-icons-png.flaticon.com/512/252/252025.png',
        iconSize: [30, 30],
        iconAnchor: [10, 20],
        popupAnchor: [0, -20],
    });

    url = 'http://127.0.0.1:8000/api/tracking/1';

    // Ambil data Latitude dan Longitude
    fetch(url)
        .then(response => response.json())
        .then(data => {
            if (data.length > 0) {
                var latestPoint = data[data.length - 1];
                var latlng = [latestPoint.latitude, latestPoint.longitude];

                // Update the marker and map view
                L.marker(latlng, { icon: customIcon })
                    .addTo(map)
                    .bindPopup("Recent Location")
                    .openPopup();

                map.setView(latlng, 17);

                // Call the function to get the city name
                getCityName(latlng[0], latlng[1]);
            } else {
                console.log("No data points available for this device.");
            }
        })
        .catch(error => console.log(error));

</script>


@endsection

