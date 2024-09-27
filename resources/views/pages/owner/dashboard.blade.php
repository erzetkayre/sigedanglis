@extends('pages.layouts.sidebar')

@section('title','Dashboard Owner - Gedanglis')
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
    <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
    <!-- Grid -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
        <!-- Card -->
        <div class="flex flex-col bg-white border shadow-sm rounded-xl ">
        <div class="p-4 md:p-5">
            <div class="flex items-center gap-x-2">
            <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                Total Gerobak
            </p>
            </div>
            <div class="mt-1 flex items-center gap-x-2">
                <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                    1
                </h3>
            </div>
        </div>
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="flex flex-col bg-white border shadow-sm rounded-xl ">
        <div class="p-4 md:p-5">
            <div class="flex items-center gap-x-2">
            <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                Total Transaksi
            </p>
            </div>
            <div class="mt-1 flex items-center gap-x-2">
            <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                0
            </h3>
            </div>
        </div>
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="flex flex-col bg-white border shadow-sm rounded-xl ">
            <div class="p-4 md:p-5">
                <div class="flex items-center gap-x-2">
                <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                    Sistem Monitoring
                </p>
                </div>
                <div class="mt-1 flex items-center gap-x-2 justify-between">
                    <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                        Panel Surya
                    </h3>
                    <a class="inline-flex items-center gap-x-1 text-xs text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href="{{ route('owner.pv') }}">
                        Lebih lanjut
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                    </a>
                </div>
            </div>
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="flex flex-col bg-white border shadow-sm rounded-xl ">
        <div class="p-4 md:p-5">
            <div class="flex items-center gap-x-2">
                <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                    Sistem Monitoring
                </p>
            </div>
            <div class="mt-1 flex items-center gap-x-2 justify-between">
                <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                    Gerobak Dagang
                </h3>
                <a class="inline-flex items-center gap-x-1 text-xs text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href="{{ route('owner.cart') }}">
                    Lebih lanjut
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                </a>
            </div>
        </div>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Grid -->

    <div class="grid lg:grid-cols-2 gap-4 sm:gap-6">
        <!-- Card -->
        <div class="p-4 md:p-5 min-h-[410px] flex flex-col bg-white border shadow-sm rounded-xl ">
        <!-- Header -->
        <div class="flex justify-between items-center">
            <div>
                <h2 class="text-sm text-gray-500 dark:text-neutral-500">
                    Pemasukan
                </h2>
                <p class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                    null
                </p>
            </div>

            <div>
            {{-- <span class="py-[5px] px-1.5 inline-flex items-center gap-x-1 text-xs font-medium rounded-md bg-teal-100 text-teal-800 dark:bg-teal-500/10 dark:text-teal-500">
                <svg class="inline-block size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 5v14" />
                <path d="m19 12-7 7-7-7" />
                </svg>
                25%
            </span> --}}
            </div>
        </div>
        <!-- End Header -->

        <div id="hs-multiple-bar-charts"></div>
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="p-4 md:p-5 min-h-[410px] flex flex-col bg-white border shadow-sm rounded-xl ">
        <!-- Header -->
        <div class="flex justify-between items-center">
            <div class="pb-4">
                <h2 class="text-sm text-gray-500 dark:text-neutral-500">
                    Tracking Terkini
                </h2>
                <p class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                    Gedanglis (Device 1)
                </p>
            </div>
        </div>
        <!-- End Header -->
        <div id="map" style="rounded-lg"></div>
        </div>
        <!-- End Card -->
    </div>

    <!-- Card -->
    <div class="flex flex-col">

    </div>
    <!-- End Card -->
    </div>
</div>
<!-- End Content -->

<!-- JS PLUGINS -->
<!-- Required plugins -->
<script src="https://cdn.jsdelivr.net/npm/preline/dist/preline.min.js"></script>

<!-- Apexcharts -->
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="https://preline.co/assets/js/hs-apexcharts-helpers.js"></script>

<script>
    window.addEventListener("load", () => {
    (function () {
        buildChart(
        "#hs-multiple-bar-charts",
        (mode) => ({
            chart: {
            type: "bar",
            height: 300,
            toolbar: {
                show: false,
            },
            zoom: {
                enabled: false,
            },
            },
            series: [
            {
                name: "Chosen Period",
                data: [
                23000, 44000, 55000, 57000, 56000, 61000, 58000, 63000, 60000,
                66000, 34000, 78000,
                ],
            },
            {
                name: "Last Period",
                data: [
                17000, 76000, 85000, 101000, 98000, 87000, 105000, 91000, 114000,
                94000, 67000, 66000,
                ],
            },
            ],
            plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: "16px",
                borderRadius: 0,
            },
            },
            legend: {
            show: false,
            },
            dataLabels: {
            enabled: false,
            },
            stroke: {
            show: true,
            width: 8,
            colors: ["transparent"],
            },
            xaxis: {
            categories: [
                "January",
                "February",
                "March",
                "April",
                "May",
                "June",
                "July",
                "August",
                "September",
                "October",
                "November",
                "December",
            ],
            axisBorder: {
                show: false,
            },
            axisTicks: {
                show: false,
            },
            crosshairs: {
                show: false,
            },
            labels: {
                style: {
                colors: "#9ca3af",
                fontSize: "13px",
                fontFamily: "Inter, ui-sans-serif",
                fontWeight: 400,
                },
                offsetX: -2,
                formatter: (title) => title.slice(0, 3),
            },
            },
            yaxis: {
            labels: {
                align: "left",
                minWidth: 0,
                maxWidth: 140,
                style: {
                colors: "#9ca3af",
                fontSize: "13px",
                fontFamily: "Inter, ui-sans-serif",
                fontWeight: 400,
                },
                formatter: (value) => (value >= 1000 ? `${value / 1000}k` : value),
            },
            },
            states: {
            hover: {
                filter: {
                type: "darken",
                value: 0.9,
                },
            },
            },
            tooltip: {
            y: {
                formatter: (value) =>
                `$${value >= 1000 ? `${value / 1000}k` : value}`,
            },
            custom: function (props) {
                const { categories } = props.ctx.opts.xaxis;
                const { dataPointIndex } = props;
                const title = categories[dataPointIndex];
                const newTitle = `${title}`;

                return buildTooltip(props, {
                title: newTitle,
                mode,
                hasTextLabel: true,
                wrapperExtClasses: "min-w-28",
                labelDivider: ":",
                labelExtClasses: "ms-2",
                });
            },
            },
            responsive: [
            {
                breakpoint: 568,
                options: {
                chart: {
                    height: 300,
                },
                plotOptions: {
                    bar: {
                    columnWidth: "14px",
                    },
                },
                stroke: {
                    width: 8,
                },
                labels: {
                    style: {
                    colors: "#9ca3af",
                    fontSize: "11px",
                    fontFamily: "Inter, ui-sans-serif",
                    fontWeight: 400,
                    },
                    offsetX: -2,
                    formatter: (title) => title.slice(0, 3),
                },
                yaxis: {
                    labels: {
                    align: "left",
                    minWidth: 0,
                    maxWidth: 140,
                    style: {
                        colors: "#9ca3af",
                        fontSize: "11px",
                        fontFamily: "Inter, ui-sans-serif",
                        fontWeight: 400,
                    },
                    formatter: (value) =>
                        value >= 1000 ? `${value / 1000}k` : value,
                    },
                },
                },
            },
            ],
        }),
        {
            colors: ["#2563eb", "#d1d5db"],
            grid: {
            borderColor: "#e5e7eb",
            },
        },
        {
            colors: ["#6b7280", "#2563eb"],
            grid: {
            borderColor: "#404040",
            },
        }
        );
    })();
    });
</script>
<script>
    window.addEventListener("load", () => {
    (function () {
        buildChart(
        "#hs-single-area-chart",
        (mode) => ({
            chart: {
            height: 300,
            type: "area",
            toolbar: {
                show: false,
            },
            zoom: {
                enabled: false,
            },
            },
            series: [
            {
                name: "Visitors",
                data: [180, 51, 60, 38, 88, 50, 40, 52, 88, 80, 60, 70],
            },
            ],
            legend: {
            show: false,
            },
            dataLabels: {
            enabled: false,
            },
            stroke: {
            curve: "straight",
            width: 2,
            },
            grid: {
            strokeDashArray: 2,
            },
            fill: {
            type: "gradient",
            gradient: {
                type: "vertical",
                shadeIntensity: 1,
                opacityFrom: 0.1,
                opacityTo: 0.8,
            },
            },
            xaxis: {
            type: "category",
            tickPlacement: "on",
            categories: [
                "25 January 2023",
                "26 January 2023",
                "27 January 2023",
                "28 January 2023",
                "29 January 2023",
                "30 January 2023",
                "31 January 2023",
                "1 February 2023",
                "2 February 2023",
                "3 February 2023",
                "4 February 2023",
                "5 February 2023",
            ],
            axisBorder: {
                show: false,
            },
            axisTicks: {
                show: false,
            },
            crosshairs: {
                stroke: {
                dashArray: 0,
                },
                dropShadow: {
                show: false,
                },
            },
            tooltip: {
                enabled: false,
            },
            labels: {
                style: {
                colors: "#9ca3af",
                fontSize: "13px",
                fontFamily: "Inter, ui-sans-serif",
                fontWeight: 400,
                },
                formatter: (title) => {
                let t = title;

                if (t) {
                    const newT = t.split(" ");
                    t = `${newT[0]} ${newT[1].slice(0, 3)}`;
                }

                return t;
                },
            },
            },
            yaxis: {
            labels: {
                align: "left",
                minWidth: 0,
                maxWidth: 140,
                style: {
                colors: "#9ca3af",
                fontSize: "13px",
                fontFamily: "Inter, ui-sans-serif",
                fontWeight: 400,
                },
                formatter: (value) => (value >= 1000 ? `${value / 1000}k` : value),
            },
            },
            tooltip: {
            x: {
                format: "MMMM yyyy",
            },
            y: {
                formatter: (value) =>
                `${value >= 1000 ? `${value / 1000}k` : value}`,
            },
            custom: function (props) {
                const { categories } = props.ctx.opts.xaxis;
                const { dataPointIndex } = props;
                const title = categories[dataPointIndex].split(" ");
                const newTitle = `${title[0]} ${title[1]}`;

                return buildTooltip(props, {
                title: newTitle,
                mode,
                valuePrefix: "",
                hasTextLabel: true,
                markerExtClasses: "!rounded-sm",
                wrapperExtClasses: "min-w-28",
                });
            },
            },
            responsive: [
            {
                breakpoint: 568,
                options: {
                chart: {
                    height: 300,
                },
                labels: {
                    style: {
                    colors: "#9ca3af",
                    fontSize: "11px",
                    fontFamily: "Inter, ui-sans-serif",
                    fontWeight: 400,
                    },
                    offsetX: -2,
                    formatter: (title) => title.slice(0, 3),
                },
                yaxis: {
                    labels: {
                    align: "left",
                    minWidth: 0,
                    maxWidth: 140,
                    style: {
                        colors: "#9ca3af",
                        fontSize: "11px",
                        fontFamily: "Inter, ui-sans-serif",
                        fontWeight: 400,
                    },
                    formatter: (value) =>
                        value >= 1000 ? `${value / 1000}k` : value,
                    },
                },
                },
            },
            ],
        }),
        {
            colors: ["#2563eb", "#9333ea"],
            fill: {
            gradient: {
                stops: [0, 90, 100],
            },
            },
            grid: {
            borderColor: "#e5e7eb",
            },
        },
        {
            colors: ["#3b82f6", "#a855f7"],
            fill: {
            gradient: {
                stops: [100, 90, 0],
            },
            },
            grid: {
            borderColor: "#404040",
            },
        }
        );
    })();
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
