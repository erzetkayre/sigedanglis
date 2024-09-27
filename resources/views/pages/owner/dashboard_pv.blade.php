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
                    <div id="map" style="rounded-lg"></div>
                <!-- City and Weather Information -->
                <h3 class="text-sm font-semibold text-gray-600 mt-4">Location</h3>
                <div class="flex mt-2">
                    <span class="material-symbols-rounded me-2">map</span>
                    <p class="text-gray-800" id="location"></p>
                </div>
                {{-- <div class="mt-2">
                    <h3 class="text-sm font-semibold text-gray-600">Weather</h3>
                    <div class="flex items-center gap-x-2">
                        <svg class="w-6 h-6 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2a9 9 0 100 18 9 9 0 000-18zM12 7v5l3 3" />
                        </svg>
                        <p class="text-gray-800" id="weather">Sunny, 29°C</p>
                    </div>
                </div> --}}
            </div>
        </div>
        <!-- End Grid -->

        <div class="flex flex-col bg-white border shadow-sm rounded-xl p-4 md:p-5">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Tabel Tegangan, Arus, dan Daya</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full table-auto text-center">
                    @php
                        $i = 1;
                    @endphp
                    <thead class="bg-gray-100 text">
                        <tr>
                            <th class="px-4 py-2 text-center text-sm font-medium text-gray-500 uppercase">No.</th>
                            <th class="px-4 py-2 text-center text-sm font-medium text-gray-500 uppercase">Tanggal</th>
                            <th class="px-4 py-2 text-center text-sm font-medium text-gray-500 uppercase">Tegangan (V)</th>
                            <th class="px-4 py-2 text-center text-sm font-medium text-gray-500 uppercase">Arus (A)</th>
                            <th class="px-4 py-2 text-center text-sm font-medium text-gray-500 uppercase">Power (W)</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ( $data as $key )
                            <tr>
                                <td class="px-4 py-2 text-sm text-gray-800">{{ $i++ }}</td>
                                <td class="px-4 py-2 text-sm text-gray-800">{{ $key->created_at->format('l, d F Y') }}</td>
                                <td class="px-4 py-2 text-sm text-gray-800">{{ $key->volt }}</td>
                                <td class="px-4 py-2 text-sm text-gray-800">{{ $key->current }}</td>
                                <td class="px-4 py-2 text-sm text-gray-800">{{ $key->power }}</td>
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
</div>
<!-- End Content -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Ambil data dari variabel PHP ke JavaScript
    const voltData = @json($data->pluck('volt'));
    const currentData = @json($data->pluck('current'));
    const powerData = @json($data->pluck('power'));
    const labels = @json($data->pluck('created_at')->map(function($date) {
        return \Carbon\Carbon::parse($date)->format('l, d F Y'); // Format tanggal sesuai kebutuhan
    }));

    // Graph for Voltage, Current, and Power
    const ctx = document.getElementById('pvGraphs').getContext('2d');
    const pvGraph = new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [
                {
                    label: 'Tegangan (V)',
                    data: voltData,
                    borderColor: 'rgba(54, 162, 235, 1)',
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    fill: true,
                    tension: 0.4,
                },
                {
                    label: 'Arus (A)',
                    data: currentData,
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    fill: true,
                    tension: 0.4,
                },
                {
                    label: 'Daya (W)',
                    data: powerData,
                    borderColor: 'rgba(255, 206, 86, 1)',
                    backgroundColor: 'rgba(255, 206, 86, 0.2)',
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
                    text: 'Data Monitoring PV'
                }
            },
            scales: {
                x: {
                    title: {
                        display: true,
                        text: 'Tanggal'
                    }
                },
                y: {
                    title: {
                        display: true,
                        text: 'Nilai'
                    },
                    beginAtZero: true
                }
            }
        }
    });
</script>


<script>
    // Script Maps
    var map = L.map('map').setView([-7.561907, 110.853972], 15);

    // API Map OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var customIcon = L.icon({
        iconUrl: 'https://cdn-icons-png.flaticon.com/512/252/252025.png',
        iconSize: [20, 20],
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

    // Get Nama Kota
    function getCityName(latitude, longitude) {
        console.log("Fetching city name for:", latitude, longitude); // Debug log
        const url = `https://nominatim.openstreetmap.org/reverse?lat=${latitude}&lon=${longitude}&format=json`;

        fetch(url)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                if (data && data.address) {
                    const prov = data.address.state || 'Provinsi not found';
                    const kota = data.address.city || 'Kota not found';
                    const kec = data.address.town || 'Kecamantan not found';

                    document.getElementById('location').innerText = `${kec}, ${kota}, ${prov}`;
                } else {
                    console.log('No address found for these coordinates.');
                }
            })
            .catch(error => {
                console.error('Error fetching city name:', error);
            });
    }
</script>

@endsection
