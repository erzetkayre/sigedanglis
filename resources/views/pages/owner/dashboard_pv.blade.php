@extends('pages.layouts.sidebar')

@section('title','Monitoring PV - Gedanglis')
@section('content')

<!-- Content -->
<div class="min-h-screen w-full lg:ps-64 bg-zinc-50">
    <!-- Content -->
    <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
        {{-- Header --}}
        <div class="bg-white border shadow-sm rounded-xl p-4 md:p-5">
            <h1 class="text-2xl font-bold text-gray-800">Dashboard Monitoring Energi PV</h1>
            <nav class="mt-2" aria-label="Breadcrumb">
                <ol class="list-none p-0 inline-flex text-sm space-x-2 text-gray-500">
                    <li class="inline-flex items-center">
                        <a href="#" class="text-gray-600">Dashboard</a>
                        <svg class="w-4 h-4 mx-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </li>
                    <li class="inline-flex items-center">Monitoring PV</li>
                </ol>
            </nav>
        </div>
        {{-- End Header --}}

        <!-- Grid for Cards (3:1 Ratio) -->
        <div class="grid sm:grid-cols-4 gap-4 sm:gap-6">
            <!-- Card for Graphs (3/4 width) -->
            <div class="col-span-3 flex flex-col bg-white border shadow-sm rounded-xl p-4 md:p-5">
                <h2 class="text-lg font-semibold text-gray-800 mb-4">Grafik Tegangan, Arus, dan Daya</h2>
                <canvas id="pvGraphs"></canvas>
            </div>
            <div class="flex flex-col bg-white border shadow-sm rounded-xl p-4 md:p-5">
                <h2 class="text-lg font-semibold text-gray-800 mb-4">Lokasi Gerobak</h2>
                <div id="pvLocation" class="w-full h-auto bg-gray-200 rounded-lg">
                    <!-- Example placeholder for a map. You can use Leaflet.js, Google Maps, or other mapping libraries. -->
                    <iframe class="rounded-xl w-full justify-end" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.120378699221!2d110.84910968408413!3d-7.561851955198028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a16fdf072a90f%3A0xea50b255b0e6ce3e!2sFakultas%20Teknik%20UNS!5e0!3m2!1sen!2sid!4v1725763958110!5m2!1sen!2sid" width="200" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <!-- City and Weather Information -->
                <div class="mt-4">
                    <h3 class="text-sm font-semibold text-gray-600">Location</h3>
                    <p class="text-gray-800" id="cityName">City: Surakarta</p>
                </div>
                <div class="mt-2">
                    <h3 class="text-sm font-semibold text-gray-600">Weather</h3>
                    <div class="flex items-center gap-x-2">
                        <svg class="w-6 h-6 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2a9 9 0 100 18 9 9 0 000-18zM12 7v5l3 3" />
                        </svg>
                        <p class="text-gray-800" id="weather">Sunny, 29°C</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Grid -->

        <div class="flex flex-col bg-white border shadow-sm rounded-xl p-4 md:p-5">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Tabel Tegangan, Arus, dan Daya</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full table-auto text-center">
                    <thead class="bg-gray-100 text">
                        <tr>
                            <th class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase">Date</th>
                            <th class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase">Voltage (V)</th>
                            <th class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase">Power (W)</th>
                            <th class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase">Current (A)</th>
                        </tr>
                    </thead>
                    <tbody id="dataTable" class="bg-white divide-y divide-gray-200">
                        <!-- Dummy Data Rows -->
                        <tr>
                            <td class="px-4 py-2 text-sm text-gray-800">2024-09-01</td>
                            <td class="px-4 py-2 text-sm text-gray-800">12.5</td>
                            <td class="px-4 py-2 text-sm text-gray-800">55</td>
                            <td class="px-4 py-2 text-sm text-gray-800">4.4</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 text-sm text-gray-800">2024-09-02</td>
                            <td class="px-4 py-2 text-sm text-gray-800">13.0</td>
                            <td class="px-4 py-2 text-sm text-gray-800">60</td>
                            <td class="px-4 py-2 text-sm text-gray-800">4.8</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 text-sm text-gray-800">2024-09-03</td>
                            <td class="px-4 py-2 text-sm text-gray-800">12.8</td>
                            <td class="px-4 py-2 text-sm text-gray-800">58</td>
                            <td class="px-4 py-2 text-sm text-gray-800">4.7</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 text-sm text-gray-800">2024-09-04</td>
                            <td class="px-4 py-2 text-sm text-gray-800">13.2</td>
                            <td class="px-4 py-2 text-sm text-gray-800">62</td>
                            <td class="px-4 py-2 text-sm text-gray-800">5.0</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 text-sm text-gray-800">2024-09-05</td>
                            <td class="px-4 py-2 text-sm text-gray-800">12.7</td>
                            <td class="px-4 py-2 text-sm text-gray-800">57</td>
                            <td class="px-4 py-2 text-sm text-gray-800">4.6</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 text-sm text-gray-800">2024-09-06</td>
                            <td class="px-4 py-2 text-sm text-gray-800">13.3</td>
                            <td class="px-4 py-2 text-sm text-gray-800">63</td>
                            <td class="px-4 py-2 text-sm text-gray-800">5.1</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 text-sm text-gray-800">2024-09-07</td>
                            <td class="px-4 py-2 text-sm text-gray-800">12.9</td>
                            <td class="px-4 py-2 text-sm text-gray-800">59</td>
                            <td class="px-4 py-2 text-sm text-gray-800">4.9</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 text-sm text-gray-800">2024-09-08</td>
                            <td class="px-4 py-2 text-sm text-gray-800">13.1</td>
                            <td class="px-4 py-2 text-sm text-gray-800">61</td>
                            <td class="px-4 py-2 text-sm text-gray-800">5.0</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 text-sm text-gray-800">2024-09-09</td>
                            <td class="px-4 py-2 text-sm text-gray-800">12.6</td>
                            <td class="px-4 py-2 text-sm text-gray-800">56</td>
                            <td class="px-4 py-2 text-sm text-gray-800">4.5</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 text-sm text-gray-800">2024-09-10</td>
                            <td class="px-4 py-2 text-sm text-gray-800">13.4</td>
                            <td class="px-4 py-2 text-sm text-gray-800">64</td>
                            <td class="px-4 py-2 text-sm text-gray-800">5.2</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Pagination Controls -->
            <div class="mt-4">
                <nav class="flex justify-between items-center">
                    <button class="px-3 py-1 text-sm font-medium text-gray-700 bg-gray-200 hover:bg-gray-300 rounded-md">Previous</button>
                    <button class="px-3 py-1 text-sm font-medium text-gray-700 bg-gray-200 hover:bg-gray-300 rounded-md">Next</button>
                </nav>
            </div>
        </div>
    </div>


    </div>
    <!-- End Content -->
</div>
<!-- End Content -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Sample data for Voltage, Power, and Current
    const ctx = document.getElementById('pvGraphs').getContext('2d');
    const pvGraph = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['00:00', '01:00', '02:00', '03:00', '04:00', '05:00', '06:00', '07:00'], // Example time data
            datasets: [
                {
                    label: 'Voltage (V)',
                    data: [12, 13, 12.5, 13.2, 12.8, 13.1, 13.4, 12.9],
                    borderColor: 'rgba(54, 162, 235, 1)',
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    fill: true,
                    tension: 0.4,
                },
                {
                    label: 'Power (W)',
                    data: [50, 55, 52, 58, 60, 59, 62, 61],
                    borderColor: 'rgba(255, 206, 86, 1)',
                    backgroundColor: 'rgba(255, 206, 86, 0.2)',
                    fill: true,
                    tension: 0.4,
                },
                {
                    label: 'Current (A)',
                    data: [4.2, 4.5, 4.3, 4.6, 4.8, 4.7, 4.9, 4.6],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    fill: true,
                    tension: 0.4,
                }
            ]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'PV Monitoring Data'
                }
            },
            scales: {
                x: {
                    title: {
                        display: true,
                        text: 'Waktu'
                    }
                },
                y: {
                    title: {
                        display: true,
                        text: 'Nilai'
                    }
                }
            }
        }
    });
</script>
@endsection
