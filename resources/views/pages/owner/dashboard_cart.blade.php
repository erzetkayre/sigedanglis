@extends('pages.layouts.sidebar')

@section('title','Monitoring PV - Gedanglis')
@section('content')

<!-- Content -->
<div class="min-h-screen w-full lg:ps-64 bg-zinc-50">
    <!-- Content -->
    <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
        {{-- Header --}}
        <div class="bg-white border shadow-sm rounded-xl p-4 md:p-5">
            <h1 class="text-2xl font-bold text-gray-800">Dashboard Monitoring Gerobak</h1>
            <nav class="mt-2" aria-label="Breadcrumb">
                <ol class="list-none p-0 inline-flex text-sm space-x-2 text-gray-500">
                    <li class="inline-flex items-center">
                        <a href="#" class="text-gray-600">Dashboard</a>
                        <svg class="w-4 h-4 mx-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </li>
                    <li class="inline-flex items-center">Monitoring Gerobak</li>
                </ol>
            </nav>
        </div>
        {{-- End Header --}}

        <!-- Grid for Cards (2x2 Ratio) -->
        <div class="grid sm:grid-cols-2 gap-4 sm:gap-6">
            <!-- Card for Location (Full Width) -->
            <div class="col-span-2 flex flex-col bg-white border shadow-sm rounded-xl p-4 md:p-5">
                <h2 class="text-lg font-semibold text-gray-800 mb-4">Lokasi Terkini Gerobak</h2>
                <div class="bg-gray-200 rounded-lg h-64 flex items-center justify-center">
                    <!-- Map Placeholder -->
                    <iframe class="rounded-xl w-full h-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.120378699221!2d110.84910968408413!3d-7.561851955198028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a16fdf072a90f%3A0xea50b255b0e6ce3e!2sFakultas%20Teknik%20UNS!5e0!3m2!1sen!2sid!4v1725763958110!5m2!1sen!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <p class="mt-2 text-sm text-gray-600">Gerobak Terakhir Dilacak di Surakarta</p>
            </div>

            <!-- Card for Speed -->
            <div class="flex flex-col bg-white border shadow-sm rounded-xl p-4 md:p-5">
                <h2 class="text-lg font-semibold text-gray-800 mb-4">Kecepatan</h2>
                <div class="flex justify-center items-center text-4xl font-bold text-gray-800">
                    <span id="speed">10 km/h</span>
                </div>
                <p class="mt-2 text-sm text-gray-600 text-center">Kecepatan saat ini</p>
            </div>

            <!-- Card for Battery -->
            <div class="flex flex-col bg-white border shadow-sm rounded-xl p-4 md:p-5">
                <h2 class="text-lg font-semibold text-gray-800 mb-4">Kapasitas Baterai</h2>
                <div class="flex justify-center items-center text-4xl font-bold text-gray-800">
                    <span id="battery">75%</span>
                </div>
                <p class="mt-2 text-sm text-gray-600 text-center">Kapasitas Baterai</p>
            </div>
        </div>
        <!-- End Grid -->

         <!-- Graphs for Speed and Battery Capacity -->
         <div class="grid sm:grid-cols-2 gap-4 sm:gap-6">
            <!-- Card for Speed Graph -->
            <div class="flex flex-col bg-white border shadow-sm rounded-xl p-4 md:p-5">
                <h2 class="text-lg font-semibold text-gray-800 mb-4">Grafik Kecepatan</h2>
                <canvas id="speedGraph"></canvas>
            </div>

            <!-- Card for Battery Capacity Graph -->
            <div class="flex flex-col bg-white border shadow-sm rounded-xl p-4 md:p-5">
                <h2 class="text-lg font-semibold text-gray-800 mb-4">Grafik Kapasitas Baterai</h2>
                <canvas id="batteryGraph"></canvas>
            </div>
        </div>

        <!-- Table for Speed and Battery Data -->
        <div class="flex flex-col bg-white border shadow-sm rounded-xl p-4 md:p-5 mt-4">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Tabel Data Kecepatan dan Kapasitas Baterai</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full table-auto text-center">
                    <thead class="bg-gray-100 text">
                        <tr>
                            <th class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase">Tanggal</th>
                            <th class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase">Kecepatan (km/h)</th>
                            <th class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase">Kapasitas Baterai (%)</th>
                        </tr>
                    </thead>
                    <tbody id="dataTable" class="bg-white divide-y divide-gray-200">
                        <!-- Dummy Data Rows -->
                        <tr>
                            <td class="px-4 py-2 text-sm text-gray-800">2024-09-01</td>
                            <td class="px-4 py-2 text-sm text-gray-800">10</td>
                            <td class="px-4 py-2 text-sm text-gray-800">75</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 text-sm text-gray-800">2024-09-02</td>
                            <td class="px-4 py-2 text-sm text-gray-800">12</td>
                            <td class="px-4 py-2 text-sm text-gray-800">70</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 text-sm text-gray-800">2024-09-03</td>
                            <td class="px-4 py-2 text-sm text-gray-800">8</td>
                            <td class="px-4 py-2 text-sm text-gray-800">68</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 text-sm text-gray-800">2024-09-04</td>
                            <td class="px-4 py-2 text-sm text-gray-800">15</td>
                            <td class="px-4 py-2 text-sm text-gray-800">65</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 text-sm text-gray-800">2024-09-05</td>
                            <td class="px-4 py-2 text-sm text-gray-800">11</td>
                            <td class="px-4 py-2 text-sm text-gray-800">60</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 text-sm text-gray-800">2024-09-06</td>
                            <td class="px-4 py-2 text-sm text-gray-800">9</td>
                            <td class="px-4 py-2 text-sm text-gray-800">58</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 text-sm text-gray-800">2024-09-07</td>
                            <td class="px-4 py-2 text-sm text-gray-800">14</td>
                            <td class="px-4 py-2 text-sm text-gray-800">55</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 text-sm text-gray-800">2024-09-08</td>
                            <td class="px-4 py-2 text-sm text-gray-800">10</td>
                            <td class="px-4 py-2 text-sm text-gray-800">52</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- End Content -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Data for charts (replace with actual data)
    const speedData = [10, 12, 8, 15, 11, 9, 14, 10];
    const batteryData = [75, 70, 68, 65, 60, 58, 55, 52];
    const labels = ['2024-09-01', '2024-09-02', '2024-09-03', '2024-09-04', '2024-09-05', '2024-09-06', '2024-09-07', '2024-09-08'];

    // Speed Graph
    const ctxSpeed = document.getElementById('speedGraph').getContext('2d');
    const speedGraph = new Chart(ctxSpeed, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'Kecepatan (km/h)',
                data: speedData,
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderWidth: 2,
                fill: true,
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                }
            }
        }
    });

    // Battery Graph
    const ctxBattery = document.getElementById('batteryGraph').getContext('2d');
    const batteryGraph = new Chart(ctxBattery, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Kapasitas Baterai (%)',
                data: batteryData,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1,
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                }
            }
        }
    });
</script>
@endsection
