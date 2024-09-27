@extends('pages.layouts.sidebar')

@section('title','Monitoring PV - Gedanglis')
@section('content')

<style>
    #map{
        width: 100%;
        height: 100%;
        border-radius: 0.5rem;
        overflow: hidden;
    }
</style>
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
                <div class="bg-gray-200 rounded-lg h-96 flex items-center justify-center">
                    <!-- Map Placeholder -->
                    <div id="map" style="rounded-lg"></div>
                </div>
            </div>

            <!-- Card for Speed -->
            <div class="flex flex-col bg-white border shadow-sm rounded-xl p-4 md:p-5">
                <h2 class="text-lg font-semibold text-gray-800 mb-4">Kecepatan</h2>
                <div class="flex justify-center items-center text-4xl font-bold text-gray-800">
                    <span id="speed">0 km/h</span>
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
                    @php
                        $i = 1;
                    @endphp
                    <thead class="bg-gray-100 text">
                        <tr>
                            <th class="px-4 py-2 text-center text-sm font-medium text-gray-500 uppercase">No.</th>
                            <th class="px-4 py-2 text-center text-sm font-medium text-gray-500 uppercase">Tanggal</th>
                            <th class="px-4 py-2 text-center text-sm font-medium text-gray-500 uppercase">Kecepatan (km/h)</th>
                            <th class="px-4 py-2 text-center text-sm font-medium text-gray-500 uppercase">Kapasitas Baterai (%)</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ( $data as $key )
                            <tr>
                                <td class="px-4 py-2 text-sm text-gray-800">{{ $i++ }}</td>
                                <td class="px-4 py-2 text-sm text-gray-800">{{ $key->created_at->format('l, d F Y') }}</td>
                                <td class="px-4 py-2 text-sm text-gray-800">{{ $key->speed }}</td>
                                <td class="px-4 py-2 text-sm text-gray-800">{{ $key->battery }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Pagination Links -->
            <div class="mt-4">
                {{ $data->links() }} <!-- Add this line -->
            </div>
        </div>
    </div>
</div>
<!-- End Content -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Ambil data dari variabel PHP ke JavaScript
    const speedData = @json($data->pluck('speed'));
    const batteryData = @json($data->pluck('battery'));
    const labels = @json($data->pluck('created_at')->map(function($date) {
        return \Carbon\Carbon::parse($date)->format('l, d F Y'); // Format tanggal sesuai kebutuhan
    }));

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
{{-- Maps --}}
<script>
    // Script Maps
    var map = L.map('map').setView([-7.561907, 110.853972], 15);

    // API Map OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var customIcon = L.icon({
        iconUrl: 'https://cdn-icons-png.flaticon.com/512/252/252025.png',  // URL to your custom icon
        iconSize: [20, 20],  // Icon size [width, height]
        iconAnchor: [10, 20],  // Anchor the icon at its bottom center
        popupAnchor: [0, -20], // Popup should appear above the marker
    });

    // Ambil data Latitude dan Longitude
    // fetch('http://127.0.0.1:8000/api/tracking/1')
    //     .then(response => response.json())
    //     .then(data => {
    //         // Extract latitude and longitude from the data
    //         var latlngs = data.map(point => [point.latitude, point.longitude]);

    //         // Check if latlngs array is not empty
    //         if (latlngs.length > 5) {
    //             // Create a polyline and add it to the map
    //             var polyline = L.polyline(latlngs, { color: 'blue' }).addTo(map);

    //             // Fit the map to the polyline
    //             map.fitBounds(polyline.getBounds());

    //             // Add a marker at the end of the polyline
    //             L.marker(latlngs[latlngs.length - 1], { icon: customIcon }).addTo(map).bindPopup("Recent Location").openPopup();
    //         } else {
    //             console.log("No data points available for this device.");
    //         }
    //     })
    //     .catch(error => console.log(error));

        // Ambil 5 data terakhir
        fetch('http://127.0.0.1:8000/api/tracking/1')
            .then(response => response.json())
            .then(data => {
                // Extract latitude and longitude from the data
                var latlngs = data.map(point => [point.latitude, point.longitude]);

                // Check if latlngs array has more than 5 points
                if (latlngs.length > 10) {
                    // Get the last 5 data points
                    latlngs = latlngs.slice(-10);
                }

                // Check if latlngs array is not empty
                if (latlngs.length > 0) {
                    // Create a polyline and add it to the map
                    var polyline = L.polyline(latlngs, { color: 'blue' }).addTo(map);

                    // Fit the map to the polyline
                    map.fitBounds(polyline.getBounds());

                    // Add a custom marker at the end of the polyline (recent location)
                    L.marker(latlngs[latlngs.length - 1], { icon: customIcon })
                        .addTo(map)
                        .bindPopup("Recent Location")
                        .openPopup();
                } else {
                    console.log("No data points available for this device.");
                }
            })
            .catch(error => console.log(error));
</script>
@endsection
