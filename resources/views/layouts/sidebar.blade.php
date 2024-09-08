<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title><link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 ">
    <!-- ========== HEADER ========== -->
    <header class="sticky top-0 inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap z-[48] w-full bg-white border-b text-sm py-2.5 lg:ps-[260px] ">
    <nav class="px-4 sm:px-6 flex basis-full items-center w-full mx-auto">
        <div class="me-5 lg:me-0 lg:hidden">
        <!-- Logo -->
        <a class="flex-none rounded-md text-xl inline-block font-semibold focus:outline-none focus:opacity-80" href="#" aria-label="Preline">
            <svg class="w-28 h-auto" width="116" height="32" viewBox="0 0 116 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M33.5696 30.8182V11.3182H37.4474V13.7003H37.6229C37.7952 13.3187 38.0445 12.9309 38.3707 12.5369C38.7031 12.1368 39.134 11.8045 39.6634 11.5398C40.1989 11.2689 40.8636 11.1335 41.6577 11.1335C42.6918 11.1335 43.6458 11.4044 44.5199 11.946C45.3939 12.4815 46.0926 13.291 46.6158 14.3743C47.139 15.4515 47.4006 16.8026 47.4006 18.4276C47.4006 20.0095 47.1451 21.3452 46.6342 22.4347C46.1295 23.518 45.4401 24.3397 44.5661 24.8999C43.6982 25.4538 42.7256 25.7308 41.6484 25.7308C40.8852 25.7308 40.2358 25.6046 39.7003 25.3523C39.1709 25.0999 38.737 24.7829 38.3984 24.4013C38.0599 24.0135 37.8014 23.6226 37.6229 23.2287H37.5028V30.8182H33.5696ZM37.4197 18.4091C37.4197 19.2524 37.5367 19.9879 37.7706 20.6158C38.0045 21.2436 38.343 21.733 38.7862 22.0838C39.2294 22.4285 39.768 22.6009 40.402 22.6009C41.0421 22.6009 41.5838 22.4254 42.027 22.0746C42.4702 21.7176 42.8056 21.2251 43.0334 20.5973C43.2673 19.9633 43.3842 19.2339 43.3842 18.4091C43.3842 17.5904 43.2704 16.8703 43.0426 16.2486C42.8149 15.6269 42.4794 15.1406 42.0362 14.7898C41.593 14.4389 41.0483 14.2635 40.402 14.2635C39.7618 14.2635 39.2202 14.4328 38.777 14.7713C38.34 15.1098 38.0045 15.59 37.7706 16.2116C37.5367 16.8333 37.4197 17.5658 37.4197 18.4091ZM49.2427 25.5V11.3182H53.0559V13.7926H53.2037C53.4622 12.9124 53.8961 12.2476 54.5055 11.7983C55.1149 11.3428 55.8166 11.1151 56.6106 11.1151C56.8076 11.1151 57.02 11.1274 57.2477 11.152C57.4754 11.1766 57.6755 11.2105 57.8478 11.2536V14.7436C57.6632 14.6882 57.4077 14.639 57.0815 14.5959C56.7553 14.5528 56.4567 14.5312 56.1859 14.5312C55.6073 14.5312 55.0903 14.6574 54.6348 14.9098C54.1854 15.156 53.8284 15.5007 53.5638 15.9439C53.3052 16.3871 53.176 16.898 53.176 17.4766V25.5H49.2427ZM64.9043 25.777C63.4455 25.777 62.1898 25.4815 61.1373 24.8906C60.0909 24.2936 59.2845 23.4503 58.7182 22.3608C58.1519 21.2652 57.8688 19.9695 57.8688 18.4737C57.8688 17.0149 58.1519 15.7346 58.7182 14.6328C59.2845 13.531 60.0816 12.6723 61.1096 12.0568C62.1437 11.4413 63.3563 11.1335 64.7474 11.1335C65.683 11.1335 66.5539 11.2843 67.3603 11.5859C68.1728 11.8814 68.8806 12.3277 69.4839 12.9247C70.0932 13.5218 70.5672 14.2727 70.9057 15.1776C71.2443 16.0762 71.4135 17.1288 71.4135 18.3352V19.4155H59.4384V16.978H67.7111C67.7111 16.4117 67.588 15.91 67.3418 15.473C67.0956 15.036 66.754 14.6944 66.317 14.4482C65.8861 14.1958 65.3844 14.0696 64.812 14.0696C64.2149 14.0696 63.6856 14.2081 63.2239 14.4851C62.7684 14.7559 62.4114 15.1222 62.1529 15.5838C61.8944 16.0393 61.762 16.5471 61.7559 17.1072V19.4247C61.7559 20.1264 61.8851 20.7327 62.1437 21.2436C62.4083 21.7545 62.7807 22.1484 63.2608 22.4254C63.741 22.7024 64.3103 22.8409 64.9689 22.8409C65.406 22.8409 65.8061 22.7794 66.1692 22.6562C66.5324 22.5331 66.8432 22.3485 67.1018 22.1023C67.3603 21.8561 67.5572 21.5545 67.6927 21.1974L71.3304 21.4375C71.1458 22.3116 70.7672 23.0748 70.1948 23.7273C69.6285 24.3736 68.896 24.8783 67.9974 25.2415C67.1048 25.5985 66.0738 25.777 64.9043 25.777ZM77.1335 6.59091V25.5H73.2003V6.59091H77.1335ZM79.5043 25.5V11.3182H83.4375V25.5H79.5043ZM81.4801 9.49006C80.8954 9.49006 80.3937 9.29616 79.9752 8.90838C79.5628 8.51444 79.3566 8.04356 79.3566 7.49574C79.3566 6.95407 79.5628 6.48935 79.9752 6.10156C80.3937 5.70762 80.8954 5.51065 81.4801 5.51065C82.0649 5.51065 82.5635 5.70762 82.9759 6.10156C83.3944 6.48935 83.6037 6.95407 83.6037 7.49574C83.6037 8.04356 83.3944 8.51444 82.9759 8.90838C82.5635 9.29616 82.0649 9.49006 81.4801 9.49006ZM89.7415 17.3011V25.5H85.8083V11.3182H89.5569V13.8203H89.723C90.037 12.9955 90.5632 12.343 91.3019 11.8629C92.0405 11.3767 92.9361 11.1335 93.9887 11.1335C94.9735 11.1335 95.8322 11.349 96.5647 11.7798C97.2971 12.2107 97.8665 12.8262 98.2728 13.6264C98.679 14.4205 98.8821 15.3684 98.8821 16.4702V25.5H94.9489V17.1719C94.9551 16.304 94.7335 15.6269 94.2841 15.1406C93.8348 14.6482 93.2162 14.402 92.4283 14.402C91.8989 14.402 91.4311 14.5159 91.0249 14.7436C90.6248 14.9714 90.3109 15.3037 90.0831 15.7408C89.8615 16.1716 89.7477 16.6918 89.7415 17.3011ZM107.665 25.777C106.206 25.777 104.951 25.4815 103.898 24.8906C102.852 24.2936 102.045 23.4503 101.479 22.3608C100.913 21.2652 100.63 19.9695 100.63 18.4737C100.63 17.0149 100.913 15.7346 101.479 14.6328C102.045 13.531 102.842 12.6723 103.87 12.0568C104.905 11.4413 106.117 11.1335 107.508 11.1335C108.444 11.1335 109.315 11.2843 110.121 11.5859C110.934 11.8814 111.641 12.3277 112.245 12.9247C112.854 13.5218 113.328 14.2727 113.667 15.1776C114.005 16.0762 114.174 17.1288 114.174 18.3352V19.4155H102.199V16.978H110.472C110.472 16.4117 110.349 15.91 110.103 15.473C109.856 15.036 109.515 14.6944 109.078 14.4482C108.647 14.1958 108.145 14.0696 107.573 14.0696C106.976 14.0696 106.446 14.2081 105.985 14.4851C105.529 14.7559 105.172 15.1222 104.914 15.5838C104.655 16.0393 104.523 16.5471 104.517 17.1072V19.4247C104.517 20.1264 104.646 20.7327 104.905 21.2436C105.169 21.7545 105.542 22.1484 106.022 22.4254C106.502 22.7024 107.071 22.8409 107.73 22.8409C108.167 22.8409 108.567 22.7794 108.93 22.6562C109.293 22.5331 109.604 22.3485 109.863 22.1023C110.121 21.8561 110.318 21.5545 110.454 21.1974L114.091 21.4375C113.907 22.3116 113.528 23.0748 112.956 23.7273C112.389 24.3736 111.657 24.8783 110.758 25.2415C109.866 25.5985 108.835 25.777 107.665 25.777Z" class="fill-blue-600 " fill="currentColor"></path>
            <path d="M1 29.5V16.5C1 9.87258 6.37258 4.5 13 4.5C19.6274 4.5 25 9.87258 25 16.5C25 23.1274 19.6274 28.5 13 28.5H12" class="stroke-blue-600 " stroke="currentColor" stroke-width="2"></path>
            <path d="M5 29.5V16.66C5 12.1534 8.58172 8.5 13 8.5C17.4183 8.5 21 12.1534 21 16.66C21 21.1666 17.4183 24.82 13 24.82H12" class="stroke-blue-600 " stroke="currentColor" stroke-width="2"></path>
            <circle cx="13" cy="16.5214" r="5" class="fill-blue-600 " fill="currentColor"></circle>
            </svg>
        </a>
        <!-- End Logo -->
        </div>

        <div class="w-full flex items-center justify-end ms-auto md:justify-between gap-x-1 md:gap-x-3">

        <div class="hidden md:block">
            <!-- Search Input -->
            <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-3.5">
                <svg class="shrink-0 size-4 text-gray-400 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="8"></circle>
                <path d="m21 21-4.3-4.3"></path>
                </svg>
            </div>
            <input type="text" class="py-2 ps-10 pe-16 block w-full bg-white border-gray-200 rounded-lg text-sm focus:outline-none focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none    " placeholder="Search">
            <div class="hidden absolute inset-y-0 end-0 flex items-center pointer-events-none z-20 pe-1">
                <button type="button" class="inline-flex shrink-0 justify-center items-center size-6 rounded-full text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600  " aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"></circle>
                    <path d="m15 9-6 6"></path>
                    <path d="m9 9 6 6"></path>
                </svg>
                </button>
            </div>
            <div class="absolute inset-y-0 end-0 flex items-center pointer-events-none z-20 pe-3 text-gray-400">
                <svg class="shrink-0 size-3 text-gray-400 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M15 6v12a3 3 0 1 0 3-3H6a3 3 0 1 0 3 3V6a3 3 0 1 0-3 3h12a3 3 0 1 0-3-3"></path>
                </svg>
                <span class="mx-1">
                <svg class="shrink-0 size-3 text-gray-400 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5v14"></path>
                </svg>
                </span>
                <span class="text-xs">/</span>
            </div>
            </div>
            <!-- End Search Input -->
        </div>

        <div class="flex flex-row items-center justify-end gap-1">
            <button type="button" class="md:hidden size-[38px] relative inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none ">
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="8"></circle>
                <path d="m21 21-4.3-4.3"></path>
            </svg>
            <span class="sr-only">Search</span>
            </button>

            <button type="button" class="size-[38px] relative inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none ">
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"></path>
                <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"></path>
            </svg>
            <span class="sr-only">Notifications</span>
            </button>

            <button type="button" class="size-[38px] relative inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none ">
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
            </svg>
            <span class="sr-only">Activity</span>
            </button>

            <!-- Dropdown -->
            <div class="hs-dropdown [--placement:bottom-right] relative inline-flex">
            <button id="hs-dropdown-account" type="button" class="size-[38px] inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 focus:outline-none disabled:opacity-50 disabled:pointer-events-none " aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                <img class="shrink-0 size-[38px] rounded-full" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=320&amp;h=320&amp;q=80" alt="Avatar">
            </button>

            <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg mt-2   after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full" role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-account">
                <div class="py-3 px-5 bg-gray-100 rounded-t-lg ">
                <p class="text-sm text-gray-500 ">Signed in as</p>
                <p class="text-sm font-medium text-gray-800 ">james@site.com</p>
                </div>
                <div class="p-1.5 space-y-0.5">
                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100  vcus:bg-neutral-700 " href="#">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"></path>
                    <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"></path>
                    </svg>
                    Newsletter
                </a>
                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100  vcus:bg-neutral-700 " href="#">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z"></path>
                    <path d="M3 6h18"></path>
                    <path d="M16 10a4 4 0 0 1-8 0"></path>
                    </svg>
                    Purchases
                </a>
                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100  vcus:bg-neutral-700 " href="#">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 14.899A7 7 0 1 1 15.71 8h1.79a4.5 4.5 0 0 1 2.5 8.242"></path>
                    <path d="M12 12v9"></path>
                    <path d="m8 17 4 4 4-4"></path>
                    </svg>
                    Downloads
                </a>
                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100  vcus:bg-neutral-700 " href="#">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                    <circle cx="9" cy="7" r="4"></circle>
                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                    Team Account
                </a>
                </div>
            </div>
            </div>
            <!-- End Dropdown -->
        </div>
        </div>
    </nav>
    </header>
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    <!-- Breadcrumb -->
    <div class="sticky top-0 inset-x-0 z-20 bg-white border-y px-4 sm:px-6 lg:px-8 lg:hidden ">
    <div class="flex items-center py-2">
        <!-- Navigation Toggle -->
        <button type="button" class="size-8 flex justify-center items-center gap-x-2 border border-gray-200 text-gray-800 hover:text-gray-500 rounded-lg focus:outline-none focus:text-gray-500 disabled:opacity-50 disabled:pointer-events-none   " aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-application-sidebar" aria-label="Toggle navigation" data-hs-overlay="#hs-application-sidebar">
        <span class="sr-only">Toggle Navigation</span>
        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <rect width="18" height="18" x="3" y="3" rx="2"></rect>
            <path d="M15 3v18"></path>
            <path d="m8 9 3 3-3 3"></path>
        </svg>
        </button>
        <!-- End Navigation Toggle -->

        <!-- Breadcrumb -->
        <ol class="ms-3 flex items-center whitespace-nowrap">
        <li class="flex items-center text-sm text-gray-800 "=-gray-800 truncate "i- End Breadcrumb -->
    </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Sidebar -->
    <div id="hs-application-sidebar" class="hs-overlay [--auto-close:lg] hs-overlay-open:translate-x-0 -translate-x-full transition-all duration-300 transform w-[260px] h-full hidden fixed inset-y-0 start-0 z-[60] bg-white border-e border-gray-200 lg:block lg:translate-x-0 lg:end-auto lg:bottom-0 " role="dialog" aria-label="Sidebar">
    <div class="relative flex flex-col h-full max-h-full">
        <div class="px-6 pt-4">
        <!-- Logo -->
        <a class="flex-none rounded-xl text-xl inline-block font-semibold focus:outline-none focus:opacity-80" href="#" aria-label="Preline">
            <svg class="w-28 h-auto" width="116" height="32" viewBox="0 0 116 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M33.5696 30.8182V11.3182H37.4474V13.7003H37.6229C37.7952 13.3187 38.0445 12.9309 38.3707 12.5369C38.7031 12.1368 39.134 11.8045 39.6634 11.5398C40.1989 11.2689 40.8636 11.1335 41.6577 11.1335C42.6918 11.1335 43.6458 11.4044 44.5199 11.946C45.3939 12.4815 46.0926 13.291 46.6158 14.3743C47.139 15.4515 47.4006 16.8026 47.4006 18.4276C47.4006 20.0095 47.1451 21.3452 46.6342 22.4347C46.1295 23.518 45.4401 24.3397 44.5661 24.8999C43.6982 25.4538 42.7256 25.7308 41.6484 25.7308C40.8852 25.7308 40.2358 25.6046 39.7003 25.3523C39.1709 25.0999 38.737 24.7829 38.3984 24.4013C38.0599 24.0135 37.8014 23.6226 37.6229 23.2287H37.5028V30.8182H33.5696ZM37.4197 18.4091C37.4197 19.2524 37.5367 19.9879 37.7706 20.6158C38.0045 21.2436 38.343 21.733 38.7862 22.0838C39.2294 22.4285 39.768 22.6009 40.402 22.6009C41.0421 22.6009 41.5838 22.4254 42.027 22.0746C42.4702 21.7176 42.8056 21.2251 43.0334 20.5973C43.2673 19.9633 43.3842 19.2339 43.3842 18.4091C43.3842 17.5904 43.2704 16.8703 43.0426 16.2486C42.8149 15.6269 42.4794 15.1406 42.0362 14.7898C41.593 14.4389 41.0483 14.2635 40.402 14.2635C39.7618 14.2635 39.2202 14.4328 38.777 14.7713C38.34 15.1098 38.0045 15.59 37.7706 16.2116C37.5367 16.8333 37.4197 17.5658 37.4197 18.4091ZM49.2427 25.5V11.3182H53.0559V13.7926H53.2037C53.4622 12.9124 53.8961 12.2476 54.5055 11.7983C55.1149 11.3428 55.8166 11.1151 56.6106 11.1151C56.8076 11.1151 57.02 11.1274 57.2477 11.152C57.4754 11.1766 57.6755 11.2105 57.8478 11.2536V14.7436C57.6632 14.6882 57.4077 14.639 57.0815 14.5959C56.7553 14.5528 56.4567 14.5312 56.1859 14.5312C55.6073 14.5312 55.0903 14.6574 54.6348 14.9098C54.1854 15.156 53.8284 15.5007 53.5638 15.9439C53.3052 16.3871 53.176 16.898 53.176 17.4766V25.5H49.2427ZM64.9043 25.777C63.4455 25.777 62.1898 25.4815 61.1373 24.8906C60.0909 24.2936 59.2845 23.4503 58.7182 22.3608C58.1519 21.2652 57.8688 19.9695 57.8688 18.4737C57.8688 17.0149 58.1519 15.7346 58.7182 14.6328C59.2845 13.531 60.0816 12.6723 61.1096 12.0568C62.1437 11.4413 63.3563 11.1335 64.7474 11.1335C65.683 11.1335 66.5539 11.2843 67.3603 11.5859C68.1728 11.8814 68.8806 12.3277 69.4839 12.9247C70.0932 13.5218 70.5672 14.2727 70.9057 15.1776C71.2443 16.0762 71.4135 17.1288 71.4135 18.3352V19.4155H59.4384V16.978H67.7111C67.7111 16.4117 67.588 15.91 67.3418 15.473C67.0956 15.036 66.754 14.6944 66.317 14.4482C65.8861 14.1958 65.3844 14.0696 64.812 14.0696C64.2149 14.0696 63.6856 14.2081 63.2239 14.4851C62.7684 14.7559 62.4114 15.1222 62.1529 15.5838C61.8944 16.0393 61.762 16.5471 61.7559 17.1072V19.4247C61.7559 20.1264 61.8851 20.7327 62.1437 21.2436C62.4083 21.7545 62.7807 22.1484 63.2608 22.4254C63.741 22.7024 64.3103 22.8409 64.9689 22.8409C65.406 22.8409 65.8061 22.7794 66.1692 22.6562C66.5324 22.5331 66.8432 22.3485 67.1018 22.1023C67.3603 21.8561 67.5572 21.5545 67.6927 21.1974L71.3304 21.4375C71.1458 22.3116 70.7672 23.0748 70.1948 23.7273C69.6285 24.3736 68.896 24.8783 67.9974 25.2415C67.1048 25.5985 66.0738 25.777 64.9043 25.777ZM77.1335 6.59091V25.5H73.2003V6.59091H77.1335ZM79.5043 25.5V11.3182H83.4375V25.5H79.5043ZM81.4801 9.49006C80.8954 9.49006 80.3937 9.29616 79.9752 8.90838C79.5628 8.51444 79.3566 8.04356 79.3566 7.49574C79.3566 6.95407 79.5628 6.48935 79.9752 6.10156C80.3937 5.70762 80.8954 5.51065 81.4801 5.51065C82.0649 5.51065 82.5635 5.70762 82.9759 6.10156C83.3944 6.48935 83.6037 6.95407 83.6037 7.49574C83.6037 8.04356 83.3944 8.51444 82.9759 8.90838C82.5635 9.29616 82.0649 9.49006 81.4801 9.49006ZM89.7415 17.3011V25.5H85.8083V11.3182H89.5569V13.8203H89.723C90.037 12.9955 90.5632 12.343 91.3019 11.8629C92.0405 11.3767 92.9361 11.1335 93.9887 11.1335C94.9735 11.1335 95.8322 11.349 96.5647 11.7798C97.2971 12.2107 97.8665 12.8262 98.2728 13.6264C98.679 14.4205 98.8821 15.3684 98.8821 16.4702V25.5H94.9489V17.1719C94.9551 16.304 94.7335 15.6269 94.2841 15.1406C93.8348 14.6482 93.2162 14.402 92.4283 14.402C91.8989 14.402 91.4311 14.5159 91.0249 14.7436C90.6248 14.9714 90.3109 15.3037 90.0831 15.7408C89.8615 16.1716 89.7477 16.6918 89.7415 17.3011ZM107.665 25.777C106.206 25.777 104.951 25.4815 103.898 24.8906C102.852 24.2936 102.045 23.4503 101.479 22.3608C100.913 21.2652 100.63 19.9695 100.63 18.4737C100.63 17.0149 100.913 15.7346 101.479 14.6328C102.045 13.531 102.842 12.6723 103.87 12.0568C104.905 11.4413 106.117 11.1335 107.508 11.1335C108.444 11.1335 109.315 11.2843 110.121 11.5859C110.934 11.8814 111.641 12.3277 112.245 12.9247C112.854 13.5218 113.328 14.2727 113.667 15.1776C114.005 16.0762 114.174 17.1288 114.174 18.3352V19.4155H102.199V16.978H110.472C110.472 16.4117 110.349 15.91 110.103 15.473C109.856 15.036 109.515 14.6944 109.078 14.4482C108.647 14.1958 108.145 14.0696 107.573 14.0696C106.976 14.0696 106.446 14.2081 105.985 14.4851C105.529 14.7559 105.172 15.1222 104.914 15.5838C104.655 16.0393 104.523 16.5471 104.517 17.1072V19.4247C104.517 20.1264 104.646 20.7327 104.905 21.2436C105.169 21.7545 105.542 22.1484 106.022 22.4254C106.502 22.7024 107.071 22.8409 107.73 22.8409C108.167 22.8409 108.567 22.7794 108.93 22.6562C109.293 22.5331 109.604 22.3485 109.863 22.1023C110.121 21.8561 110.318 21.5545 110.454 21.1974L114.091 21.4375C113.907 22.3116 113.528 23.0748 112.956 23.7273C112.389 24.3736 111.657 24.8783 110.758 25.2415C109.866 25.5985 108.835 25.777 107.665 25.777Z" class="fill-blue-600 " fill="currentColor"></path>
            <path d="M1 29.5V16.5C1 9.87258 6.37258 4.5 13 4.5C19.6274 4.5 25 9.87258 25 16.5C25 23.1274 19.6274 28.5 13 28.5H12" class="stroke-blue-600 " stroke="currentColor" stroke-width="2"></path>
            <path d="M5 29.5V16.66C5 12.1534 8.58172 8.5 13 8.5C17.4183 8.5 21 12.1534 21 16.66C21 21.1666 17.4183 24.82 13 24.82H12" class="stroke-blue-600 " stroke="currentColor" stroke-width="2"></path>
            <circle cx="13" cy="16.5214" r="5" class="fill-blue-600 " fill="currentColor"></circle>
            </svg>
        </a>
        <!-- End Logo -->
        </div>

        <!-- Content -->
        <div class="h-full overflow-y-auto [&amp;::-webkit-scrollbar]:w-2 [&amp;::-webkit-scrollbar-thumb]:rounded-full [&amp;::-webkit-scrollbar-track]:bg-gray-100 [&amp;::-webkit-scrollbar-thumb]:bg-gray-300 ">
        <nav class="hs-accordion-group p-3 w-full flex flex-col flex-wrap" data-hs-accordion-always-open="">
            <ul class="flex flex-col space-y-1">
            <li>
                <a class="flex items-center gap-x-3.5 py-2 px-2.5 bg-gray-100 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-700 " href="#">
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
                Dashboard
                </a>
            </li>

            <li class="hs-accordion" id="users-accordion">
                <button type="button" class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100  dark:hover:bg-neutral-700 " aria-expanded="true" aria-controls="users-accordion-child">
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                    <circle cx="9" cy="7" r="4"></circle>
                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>
                Users

                <svg class="hs-accordion-active:block ms-auto hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m18 15-6-6-6 6"></path>
                </svg>

                <svg class="hs-accordion-active:hidden ms-auto block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m6 9 6 6 6-6"></path>
                </svg>
                </button>

                <div id="users-accordion-child" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden" role="region" aria-labelledby="users-accordion">
                <ul class="hs-accordion-group ps-8 pt-1 space-y-1" data-hs-accordion-always-open="">
                    <li class="hs-accordion" id="users-accordion-sub-1">
                    <button type="button" class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100  dark:hover:bg-neutral-700 " aria-expanded="true" aria-controls="users-accordion-sub-1-child">
                        Sub Menu 1

                        <svg class="hs-accordion-active:block ms-auto hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m18 15-6-6-6 6"></path>
                        </svg>

                        <svg class="hs-accordion-active:hidden ms-auto block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6"></path>
                        </svg>
                    </button>

                    <div id="users-accordion-sub-1-child" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden" role="region" aria-labelledby="users-accordion-sub-1">
                        <ul class="pt-1 space-y-1">
                        <li>
                            <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100  " href="#">
                            Link 1
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100  " href="#">
                            Link 2
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100  " href="#">
                            Link 3
                            </a>
                        </li>
                        </ul>
                    </div>
                    </li>
                    <li class="hs-accordion" id="users-accordion-sub-2">
                    <button type="button" class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100  dark:hover:bg-neutral-700 " aria-expanded="true" aria-controls="users-accordion-sub-2-child">
                        Sub Menu 2

                        <svg class="hs-accordion-active:block ms-auto hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m18 15-6-6-6 6"></path>
                        </svg>

                        <svg class="hs-accordion-active:hidden ms-auto block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6"></path>
                        </svg>
                    </button>

                    <div id="users-accordion-sub-2-child" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden" role="region" aria-labelledby="users-accordion-sub-2">
                        <ul class="pt-1 space-y-1">
                        <li>
                            <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-800 " href="#">
                            Link 1
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-800 " href="#">
                            Link 2
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-800 " href="#">
                            Link 3
                            </a>
                        </li>
                        </ul>
                    </div>
                    </li>
                </ul>
                </div>
            </li>

            <li class="hs-accordion" id="account-accordion">
                <button type="button" class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 " aria-expanded="true" aria-controls="account-accordion-child">
                <svg class="shrink-0 mt-0.5 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="18" cy="15" r="3"></circle>
                    <circle cx="9" cy="7" r="4"></circle>
                    <path d="M10 15H6a4 4 0 0 0-4 4v2"></path>
                    <path d="m21.7 16.4-.9-.3"></path>
                    <path d="m15.2 13.9-.9-.3"></path>
                    <path d="m16.6 18.7.3-.9"></path>
                    <path d="m19.1 12.2.3-.9"></path>
                    <path d="m19.6 18.7-.4-1"></path>
                    <path d="m16.8 12.3-.4-1"></path>
                    <path d="m14.3 16.6 1-.4"></path>
                    <path d="m20.7 13.8 1-.4"></path>
                </svg>
                Account

                <svg class="hs-accordion-active:block ms-auto hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m18 15-6-6-6 6"></path>
                </svg>

                <svg class="hs-accordion-active:hidden ms-auto block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m6 9 6 6 6-6"></path>
                </svg>
                </button>

                <div id="account-accordion-child" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden" role="region" aria-labelledby="account-accordion">
                <ul class="ps-8 pt-1 space-y-1">
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

            <li class="hs-accordion" id="projects-accordion">
                <button type="button" class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-200" aria-expanded="true" aria-controls="projects-accordion-child">
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect width="20" height="14" x="2" y="7" rx="2" ry="2"></rect>
                    <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                </svg>
                Projects

                <svg class="hs-accordion-active:block ms-auto hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m18 15-6-6-6 6"></path>
                </svg>

                <svg class="hs-accordion-active:hidden ms-auto block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m6 9 6 6 6-6"></path>
                </svg>
                </button>

                <div id="projects-accordion-child" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden" role="region" aria-labelledby="projects-accordion">
                <ul class="ps-8 pt-1 space-y-1">
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

            <li><a class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-700 dark:text-neutral-200 dark:hover:text-neutral-300" href="#">
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect width="18" height="18" x="3" y="4" rx="2" ry="2"></rect>
                    <line x1="16" x2="16" y1="2" y2="6"></line>
                    <line x1="8" x2="8" y1="2" y2="6"></line>
                    <line x1="3" x2="21" y1="10" y2="10"></line>
                    <path d="M8 14h.01"></path>
                    <path d="M12 14h.01"></path>
                    <path d="M16 14h.01"></path>
                    <path d="M8 18h.01"></path>
                    <path d="M12 18h.01"></path>
                    <path d="M16 18h.01"></path>
                </svg>
                Calendar
                </a></li>
            <li><a class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-900 dark:text-neutral-200 dark:hover:text-neutral-300" href="#">
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                    <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                </svg>
                Documentation
                </a></li>
            </ul>
        </nav>
        </div>
        <!-- End Content -->
    </div>
    </div>
    <!-- End Sidebar -->

    <!-- Content -->
    <div class="w-full lg:ps-64">
    <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
        <!-- Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
        <!-- Card -->
        <div class="flex flex-col bg-white border shadow-sm rounded-xl ">
            <div class="p-4 md:p-5">
            <div class="flex items-center gap-x-2">
                <p class="text-xs uppercase tracking-wide text-gray-500 ">
                Total users
                </p>
                <div class="hs-tooltip">
                <div class="hs-tooltip-toggle">
                    <svg class="shrink-0 size-4 text-gray-500 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"></circle>
                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                    <path d="M12 17h.01"></path>
                    </svg>
                    <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm " role="tooltip" style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(318px, -714px);" data-popper-placement="top">
                    The number of daily users
                    </span>
                </div>
                </div>
            </div>

            <div class="mt-1 flex items-center gap-x-2">
                <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                72,540
                </h3>
                <span class="flex items-center gap-x-1 text-green-600">
                <svg class="inline-block size-4 self-center" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                    <polyline points="16 7 22 7 22 13"></polyline>
                </svg>
                <span class="inline-block text-sm">
                    1.7%
                </span>
                </span>
            </div>
            </div>
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="flex flex-col bg-white border shadow-sm rounded-xl ">
            <div class="p-4 md:p-5">
            <div class="flex items-center gap-x-2">
                <p class="text-xs uppercase tracking-wide text-gray-500 ">
                Sessions
                </p>
            </div>

            <div class="mt-1 flex items-center gap-x-2">
                <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                29.4%
                </h3>
            </div>
            </div>
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="flex flex-col bg-white border shadow-sm rounded-xl ">
            <div class="p-4 md:p-5">
            <div class="flex items-center gap-x-2">
                <p class="text-xs uppercase tracking-wide text-gray-500 ">
                Avg. Click Rate
                </p>
            </div>

            <div class="mt-1 flex items-center gap-x-2">
                <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                56.8%
                </h3>
                <span class="flex items-center gap-x-1 text-red-600">
                <svg class="inline-block size-4 self-center" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="22 17 13.5 8.5 8.5 13.5 2 7"></polyline>
                    <polyline points="16 17 22 17 22 11"></polyline>
                </svg>
                <span class="inline-block text-sm">
                    1.7%
                </span>
                </span>
            </div>
            </div>
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="flex flex-col bg-white border shadow-sm rounded-xl ">
            <div class="p-4 md:p-5">
            <div class="flex items-center gap-x-2">
                <p class="text-xs uppercase tracking-wide text-gray-500 ">
                Pageviews
                </p>
            </div>

            <div class="mt-1 flex items-center gap-x-2">
                <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                92,913
                </h3>
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
                <h2 class="text-sm text-gray-500 ">
                Income
                </h2>
                <p class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                $126,238.49
                </p>
            </div>

            <div>
                <span class="py-[5px] px-1.5 inline-flex items-center gap-x-1 text-xs font-medium rounded-md bg-teal-100 text-teal-800 dark:bg-teal-500/10 dark:text-teal-500">
                <svg class="inline-block size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 5v14"></path>
                    <path d="m19 12-7 7-7-7"></path>
                </svg>
                25%
                </span>
            </div>
            </div>
            <!-- End Header -->

            <div id="hs-multiple-bar-charts" style="min-height: 315px;"><div id="apexcharts0iz0023b" class="apexcharts-canvas apexcharts0iz0023b apexcharts-theme-light" style="width: 339px; height: 300px;"><svg id="SvgjsSvg1469" width="339" height="300" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="339" height="300"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 150px;"></div></foreignObject><g id="SvgjsG1585" class="apexcharts-yaxis" rel="0" transform="translate(26.4169921875, 0)"><g id="SvgjsG1586" class="apexcharts-yaxis-texts-g" transform="translate(-29.4169921875, 0)"><text id="SvgjsText1588" font-family="Inter, ui-sans-serif" x="20" y="31.4" text-anchor="start" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Inter, ui-sans-serif;"><tspan id="SvgjsTspan1589">120k</tspan><title>120k</title></text><text id="SvgjsText1591" font-family="Inter, ui-sans-serif" x="20" y="83.2879489440918" text-anchor="start" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Inter, ui-sans-serif;"><tspan id="SvgjsTspan1592">90k</tspan><title>90k</title></text><text id="SvgjsText1594" font-family="Inter, ui-sans-serif" x="20" y="135.17589788818358" text-anchor="start" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Inter, ui-sans-serif;"><tspan id="SvgjsTspan1595">60k</tspan><title>60k</title></text><text id="SvgjsText1597" font-family="Inter, ui-sans-serif" x="20" y="187.06384683227537" text-anchor="start" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Inter, ui-sans-serif;"><tspan id="SvgjsTspan1598">30k</tspan><title>30k</title></text><text id="SvgjsText1600" font-family="Inter, ui-sans-serif" x="20" y="238.95179577636716" text-anchor="start" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Inter, ui-sans-serif;"><tspan id="SvgjsTspan1601">0</tspan><title>0</title></text></g></g><g id="SvgjsG1471" class="apexcharts-inner apexcharts-graphical" transform="translate(56.4169921875, 30)"><defs id="SvgjsDefs1470"><clipPath id="gridRectMask0iz0023b"><rect id="SvgjsRect1475" width="284.5830078125" height="243.5517957763672" x="-10" y="-18" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask0iz0023b"></clipPath><clipPath id="nonForecastMask0iz0023b"></clipPath><clipPath id="gridRectMarkerMask0iz0023b"><rect id="SvgjsRect1476" width="276.5830078125" height="211.5517957763672" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1534" class="apexcharts-grid"><g id="SvgjsG1535" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1539" x1="0" y1="51.8879489440918" x2="272.5830078125" y2="51.8879489440918" stroke="#e5e7eb" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1540" x1="0" y1="103.7758978881836" x2="272.5830078125" y2="103.7758978881836" stroke="#e5e7eb" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1541" x1="0" y1="155.6638468322754" x2="272.5830078125" y2="155.6638468322754" stroke="#e5e7eb" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1536" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1544" x1="0" y1="207.5517957763672" x2="272.5830078125" y2="207.5517957763672" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1543" x1="0" y1="1" x2="0" y2="207.5517957763672" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1537" class="apexcharts-grid-borders"><line id="SvgjsLine1538" x1="0" y1="0" x2="272.5830078125" y2="0" stroke="#e5e7eb" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1542" x1="0" y1="207.5517957763672" x2="272.5830078125" y2="207.5517957763672" stroke="#e5e7eb" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1477" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1478" class="apexcharts-series" rel="1" seriesName="ChosenxPeriod" data:realIndex="0"><path id="SvgjsPath1483" d="M -4.642374674479166 207.5527957763672 L -4.642374674479166 167.77203491923015 L 3.357625325520834 167.77203491923015 L 3.357625325520834 207.5527957763672 Z" fill="rgba(37,99,235,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="8" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask0iz0023b)" pathTo="M -4.642374674479166 207.5527957763672 L -4.642374674479166 167.77203491923015 L 3.357625325520834 167.77203491923015 L 3.357625325520834 207.5527957763672 Z" pathFrom="M -4.642374674479166 207.5527957763672 L -4.642374674479166 207.5527957763672 L 3.357625325520834 207.5527957763672 L 3.357625325520834 207.5527957763672 L 3.357625325520834 207.5527957763672 L 3.357625325520834 207.5527957763672 L 3.357625325520834 207.5527957763672 L -4.642374674479166 207.5527957763672 Z" cy="167.77103491923015" cx="14.0728759765625" j="0" val="23000" barHeight="39.78076085713705" barWidth="16"></path><path id="SvgjsPath1485" d="M 18.0728759765625 207.5527957763672 L 18.0728759765625 131.4504706583659 L 26.0728759765625 131.4504706583659 L 26.0728759765625 207.5527957763672 Z" fill="rgba(37,99,235,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="8" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask0iz0023b)" pathTo="M 18.0728759765625 207.5527957763672 L 18.0728759765625 131.4504706583659 L 26.0728759765625 131.4504706583659 L 26.0728759765625 207.5527957763672 Z" pathFrom="M 18.0728759765625 207.5527957763672 L 18.0728759765625 207.5527957763672 L 26.0728759765625 207.5527957763672 L 26.0728759765625 207.5527957763672 L 26.0728759765625 207.5527957763672 L 26.0728759765625 207.5527957763672 L 26.0728759765625 207.5527957763672 L 18.0728759765625 207.5527957763672 Z" cy="131.4494706583659" cx="36.78812662760417" j="1" val="44000" barHeight="76.1023251180013" barWidth="16"></path><path id="SvgjsPath1487" d="M 40.78812662760417 207.5527957763672 L 40.78812662760417 112.42488937886556 L 48.78812662760417 112.42488937886556 L 48.78812662760417 207.5527957763672 Z" fill="rgba(37,99,235,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="8" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask0iz0023b)" pathTo="M 40.78812662760417 207.5527957763672 L 40.78812662760417 112.42488937886556 L 48.78812662760417 112.42488937886556 L 48.78812662760417 207.5527957763672 Z" pathFrom="M 40.78812662760417 207.5527957763672 L 40.78812662760417 207.5527957763672 L 48.78812662760417 207.5527957763672 L 48.78812662760417 207.5527957763672 L 48.78812662760417 207.5527957763672 L 48.78812662760417 207.5527957763672 L 48.78812662760417 207.5527957763672 L 40.78812662760417 207.5527957763672 Z" cy="112.42388937886555" cx="59.50337727864584" j="2" val="55000" barHeight="95.12790639750163" barWidth="16"></path><path id="SvgjsPath1489" d="M 63.50337727864584 207.5527957763672 L 63.50337727864584 108.96569278259277 L 71.50337727864584 108.96569278259277 L 71.50337727864584 207.5527957763672 Z" fill="rgba(37,99,235,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="8" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask0iz0023b)" pathTo="M 63.50337727864584 207.5527957763672 L 63.50337727864584 108.96569278259277 L 71.50337727864584 108.96569278259277 L 71.50337727864584 207.5527957763672 Z" pathFrom="M 63.50337727864584 207.5527957763672 L 63.50337727864584 207.5527957763672 L 71.50337727864584 207.5527957763672 L 71.50337727864584 207.5527957763672 L 71.50337727864584 207.5527957763672 L 71.50337727864584 207.5527957763672 L 71.50337727864584 207.5527957763672 L 63.50337727864584 207.5527957763672 Z" cy="108.96469278259276" cx="82.21862792968751" j="3" val="57000" barHeight="98.58710299377442" barWidth="16"></path><path id="SvgjsPath1491" d="M 86.21862792968751 207.5527957763672 L 86.21862792968751 110.69529108072916 L 94.21862792968751 110.69529108072916 L 94.21862792968751 207.5527957763672 Z" fill="rgba(37,99,235,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="8" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask0iz0023b)" pathTo="M 86.21862792968751 207.5527957763672 L 86.21862792968751 110.69529108072916 L 94.21862792968751 110.69529108072916 L 94.21862792968751 207.5527957763672 Z" pathFrom="M 86.21862792968751 207.5527957763672 L 86.21862792968751 207.5527957763672 L 94.21862792968751 207.5527957763672 L 94.21862792968751 207.5527957763672 L 94.21862792968751 207.5527957763672 L 94.21862792968751 207.5527957763672 L 94.21862792968751 207.5527957763672 L 86.21862792968751 207.5527957763672 Z" cy="110.69429108072916" cx="104.93387858072919" j="4" val="56000" barHeight="96.85750469563803" barWidth="16"></path><path id="SvgjsPath1493" d="M 108.93387858072919 207.5527957763672 L 108.93387858072919 102.04729959004719 L 116.93387858072919 102.04729959004719 L 116.93387858072919 207.5527957763672 Z" fill="rgba(37,99,235,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="8" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask0iz0023b)" pathTo="M 108.93387858072919 207.5527957763672 L 108.93387858072919 102.04729959004719 L 116.93387858072919 102.04729959004719 L 116.93387858072919 207.5527957763672 Z" pathFrom="M 108.93387858072919 207.5527957763672 L 108.93387858072919 207.5527957763672 L 116.93387858072919 207.5527957763672 L 116.93387858072919 207.5527957763672 L 116.93387858072919 207.5527957763672 L 116.93387858072919 207.5527957763672 L 116.93387858072919 207.5527957763672 L 108.93387858072919 207.5527957763672 Z" cy="102.04629959004718" cx="127.64912923177084" j="5" val="61000" barHeight="105.50549618632" barWidth="16"></path><path id="SvgjsPath1495" d="M 131.64912923177084 207.5527957763672 L 131.64912923177084 107.23609448445637 L 139.64912923177084 107.23609448445637 L 139.64912923177084 207.5527957763672 Z" fill="rgba(37,99,235,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="8" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask0iz0023b)" pathTo="M 131.64912923177084 207.5527957763672 L 131.64912923177084 107.23609448445637 L 139.64912923177084 107.23609448445637 L 139.64912923177084 207.5527957763672 Z" pathFrom="M 131.64912923177084 207.5527957763672 L 131.64912923177084 207.5527957763672 L 139.64912923177084 207.5527957763672 L 139.64912923177084 207.5527957763672 L 139.64912923177084 207.5527957763672 L 139.64912923177084 207.5527957763672 L 139.64912923177084 207.5527957763672 L 131.64912923177084 207.5527957763672 Z" cy="107.23509448445637" cx="150.3643798828125" j="6" val="58000" barHeight="100.31670129191082" barWidth="16"></path><path id="SvgjsPath1497" d="M 154.3643798828125 207.5527957763672 L 154.3643798828125 98.58810299377441 L 162.3643798828125 98.58810299377441 L 162.3643798828125 207.5527957763672 Z" fill="rgba(37,99,235,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="8" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask0iz0023b)" pathTo="M 154.3643798828125 207.5527957763672 L 154.3643798828125 98.58810299377441 L 162.3643798828125 98.58810299377441 L 162.3643798828125 207.5527957763672 Z" pathFrom="M 154.3643798828125 207.5527957763672 L 154.3643798828125 207.5527957763672 L 162.3643798828125 207.5527957763672 L 162.3643798828125 207.5527957763672 L 162.3643798828125 207.5527957763672 L 162.3643798828125 207.5527957763672 L 162.3643798828125 207.5527957763672 L 154.3643798828125 207.5527957763672 Z" cy="98.58710299377441" cx="173.07963053385416" j="7" val="63000" barHeight="108.96469278259278" barWidth="16"></path><path id="SvgjsPath1499" d="M 177.07963053385416 207.5527957763672 L 177.07963053385416 103.77689788818358 L 185.07963053385416 103.77689788818358 L 185.07963053385416 207.5527957763672 Z" fill="rgba(37,99,235,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="8" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask0iz0023b)" pathTo="M 177.07963053385416 207.5527957763672 L 177.07963053385416 103.77689788818358 L 185.07963053385416 103.77689788818358 L 185.07963053385416 207.5527957763672 Z" pathFrom="M 177.07963053385416 207.5527957763672 L 177.07963053385416 207.5527957763672 L 185.07963053385416 207.5527957763672 L 185.07963053385416 207.5527957763672 L 185.07963053385416 207.5527957763672 L 185.07963053385416 207.5527957763672 L 185.07963053385416 207.5527957763672 L 177.07963053385416 207.5527957763672 Z" cy="103.77589788818358" cx="195.79488118489581" j="8" val="60000" barHeight="103.77589788818361" barWidth="16"></path><path id="SvgjsPath1501" d="M 199.79488118489581 207.5527957763672 L 199.79488118489581 93.39930809936523 L 207.79488118489581 93.39930809936523 L 207.79488118489581 207.5527957763672 Z" fill="rgba(37,99,235,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="8" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask0iz0023b)" pathTo="M 199.79488118489581 207.5527957763672 L 199.79488118489581 93.39930809936523 L 207.79488118489581 93.39930809936523 L 207.79488118489581 207.5527957763672 Z" pathFrom="M 199.79488118489581 207.5527957763672 L 199.79488118489581 207.5527957763672 L 207.79488118489581 207.5527957763672 L 207.79488118489581 207.5527957763672 L 207.79488118489581 207.5527957763672 L 207.79488118489581 207.5527957763672 L 207.79488118489581 207.5527957763672 L 199.79488118489581 207.5527957763672 Z" cy="93.39830809936522" cx="218.51013183593747" j="9" val="66000" barHeight="114.15348767700196" barWidth="16"></path><path id="SvgjsPath1503" d="M 222.51013183593747 207.5527957763672 L 222.51013183593747 148.74645363972982 L 230.51013183593747 148.74645363972982 L 230.51013183593747 207.5527957763672 Z" fill="rgba(37,99,235,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="8" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask0iz0023b)" pathTo="M 222.51013183593747 207.5527957763672 L 222.51013183593747 148.74645363972982 L 230.51013183593747 148.74645363972982 L 230.51013183593747 207.5527957763672 Z" pathFrom="M 222.51013183593747 207.5527957763672 L 222.51013183593747 207.5527957763672 L 230.51013183593747 207.5527957763672 L 230.51013183593747 207.5527957763672 L 230.51013183593747 207.5527957763672 L 230.51013183593747 207.5527957763672 L 230.51013183593747 207.5527957763672 L 222.51013183593747 207.5527957763672 Z" cy="148.74545363972982" cx="241.22538248697913" j="10" val="34000" barHeight="58.806342136637376" barWidth="16"></path><path id="SvgjsPath1505" d="M 245.22538248697913 207.5527957763672 L 245.22538248697913 72.6441285217285 L 253.22538248697913 72.6441285217285 L 253.22538248697913 207.5527957763672 Z" fill="rgba(37,99,235,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="8" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask0iz0023b)" pathTo="M 245.22538248697913 207.5527957763672 L 245.22538248697913 72.6441285217285 L 253.22538248697913 72.6441285217285 L 253.22538248697913 207.5527957763672 Z" pathFrom="M 245.22538248697913 207.5527957763672 L 245.22538248697913 207.5527957763672 L 253.22538248697913 207.5527957763672 L 253.22538248697913 207.5527957763672 L 253.22538248697913 207.5527957763672 L 253.22538248697913 207.5527957763672 L 253.22538248697913 207.5527957763672 L 245.22538248697913 207.5527957763672 Z" cy="72.6431285217285" cx="263.9406331380208" j="11" val="78000" barHeight="134.9086672546387" barWidth="16"></path><g id="SvgjsG1480" class="apexcharts-bar-goals-markers"><g id="SvgjsG1482" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask0iz0023b)"></g><g id="SvgjsG1484" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask0iz0023b)"></g><g id="SvgjsG1486" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask0iz0023b)"></g><g id="SvgjsG1488" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask0iz0023b)"></g><g id="SvgjsG1490" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask0iz0023b)"></g><g id="SvgjsG1492" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask0iz0023b)"></g><g id="SvgjsG1494" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask0iz0023b)"></g><g id="SvgjsG1496" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask0iz0023b)"></g><g id="SvgjsG1498" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask0iz0023b)"></g><g id="SvgjsG1500" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask0iz0023b)"></g><g id="SvgjsG1502" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask0iz0023b)"></g><g id="SvgjsG1504" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask0iz0023b)"></g></g><g id="SvgjsG1481" class="apexcharts-bar-shadows apexcharts-hidden-element-shown"></g></g><g id="SvgjsG1506" class="apexcharts-series" rel="2" seriesName="LastxPeriod" data:realIndex="1"><path id="SvgjsPath1511" d="M 11.357625325520834 207.5527957763672 L 11.357625325520834 178.1496247080485 L 19.357625325520836 178.1496247080485 L 19.357625325520836 207.5527957763672 Z" fill="rgba(209,213,219,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="8" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask0iz0023b)" pathTo="M 11.357625325520834 207.5527957763672 L 11.357625325520834 178.1496247080485 L 19.357625325520836 178.1496247080485 L 19.357625325520836 207.5527957763672 Z" pathFrom="M 11.357625325520834 207.5527957763672 L 11.357625325520834 207.5527957763672 L 19.357625325520836 207.5527957763672 L 19.357625325520836 207.5527957763672 L 19.357625325520836 207.5527957763672 L 19.357625325520836 207.5527957763672 L 19.357625325520836 207.5527957763672 L 11.357625325520834 207.5527957763672 Z" cy="178.1486247080485" cx="30.0728759765625" j="0" val="17000" barHeight="29.403171068318688" barWidth="16"></path><path id="SvgjsPath1513" d="M 34.0728759765625 207.5527957763672 L 34.0728759765625 76.1033251180013 L 42.0728759765625 76.1033251180013 L 42.0728759765625 207.5527957763672 Z" fill="rgba(209,213,219,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="8" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask0iz0023b)" pathTo="M 34.0728759765625 207.5527957763672 L 34.0728759765625 76.1033251180013 L 42.0728759765625 76.1033251180013 L 42.0728759765625 207.5527957763672 Z" pathFrom="M 34.0728759765625 207.5527957763672 L 34.0728759765625 207.5527957763672 L 42.0728759765625 207.5527957763672 L 42.0728759765625 207.5527957763672 L 42.0728759765625 207.5527957763672 L 42.0728759765625 207.5527957763672 L 42.0728759765625 207.5527957763672 L 34.0728759765625 207.5527957763672 Z" cy="76.10232511800129" cx="52.78812662760417" j="1" val="76000" barHeight="131.4494706583659" barWidth="16"></path><path id="SvgjsPath1515" d="M 56.78812662760417 207.5527957763672 L 56.78812662760417 60.53694043477375 L 64.78812662760417 60.53694043477375 L 64.78812662760417 207.5527957763672 Z" fill="rgba(209,213,219,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="8" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask0iz0023b)" pathTo="M 56.78812662760417 207.5527957763672 L 56.78812662760417 60.53694043477375 L 64.78812662760417 60.53694043477375 L 64.78812662760417 207.5527957763672 Z" pathFrom="M 56.78812662760417 207.5527957763672 L 56.78812662760417 207.5527957763672 L 64.78812662760417 207.5527957763672 L 64.78812662760417 207.5527957763672 L 64.78812662760417 207.5527957763672 L 64.78812662760417 207.5527957763672 L 64.78812662760417 207.5527957763672 L 56.78812662760417 207.5527957763672 Z" cy="60.53594043477375" cx="75.50337727864584" j="2" val="85000" barHeight="147.01585534159344" barWidth="16"></path><path id="SvgjsPath1517" d="M 79.50337727864584 207.5527957763672 L 79.50337727864584 32.86336766459146 L 87.50337727864584 32.86336766459146 L 87.50337727864584 207.5527957763672 Z" fill="rgba(209,213,219,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="8" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask0iz0023b)" pathTo="M 79.50337727864584 207.5527957763672 L 79.50337727864584 32.86336766459146 L 87.50337727864584 32.86336766459146 L 87.50337727864584 207.5527957763672 Z" pathFrom="M 79.50337727864584 207.5527957763672 L 79.50337727864584 207.5527957763672 L 87.50337727864584 207.5527957763672 L 87.50337727864584 207.5527957763672 L 87.50337727864584 207.5527957763672 L 87.50337727864584 207.5527957763672 L 87.50337727864584 207.5527957763672 L 79.50337727864584 207.5527957763672 Z" cy="32.86236766459146" cx="98.21862792968751" j="3" val="101000" barHeight="174.68942811177573" barWidth="16"></path><path id="SvgjsPath1519" d="M 102.21862792968751 207.5527957763672 L 102.21862792968751 38.05216255900063 L 110.21862792968751 38.05216255900063 L 110.21862792968751 207.5527957763672 Z" fill="rgba(209,213,219,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="8" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask0iz0023b)" pathTo="M 102.21862792968751 207.5527957763672 L 102.21862792968751 38.05216255900063 L 110.21862792968751 38.05216255900063 L 110.21862792968751 207.5527957763672 Z" pathFrom="M 102.21862792968751 207.5527957763672 L 102.21862792968751 207.5527957763672 L 110.21862792968751 207.5527957763672 L 110.21862792968751 207.5527957763672 L 110.21862792968751 207.5527957763672 L 110.21862792968751 207.5527957763672 L 110.21862792968751 207.5527957763672 L 102.21862792968751 207.5527957763672 Z" cy="38.05116255900063" cx="120.93387858072919" j="4" val="98000" barHeight="169.50063321736656" barWidth="16"></path><path id="SvgjsPath1521" d="M 124.93387858072919 207.5527957763672 L 124.93387858072919 57.07774383850096 L 132.93387858072919 57.07774383850096 L 132.93387858072919 207.5527957763672 Z" fill="rgba(209,213,219,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="8" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask0iz0023b)" pathTo="M 124.93387858072919 207.5527957763672 L 124.93387858072919 57.07774383850096 L 132.93387858072919 57.07774383850096 L 132.93387858072919 207.5527957763672 Z" pathFrom="M 124.93387858072919 207.5527957763672 L 124.93387858072919 207.5527957763672 L 132.93387858072919 207.5527957763672 L 132.93387858072919 207.5527957763672 L 132.93387858072919 207.5527957763672 L 132.93387858072919 207.5527957763672 L 132.93387858072919 207.5527957763672 L 124.93387858072919 207.5527957763672 Z" cy="57.07674383850096" cx="143.64912923177084" j="5" val="87000" barHeight="150.47505193786623" barWidth="16"></path><path id="SvgjsPath1523" d="M 147.64912923177084 207.5527957763672 L 147.64912923177084 25.94497447204588 L 155.64912923177084 25.94497447204588 L 155.64912923177084 207.5527957763672 Z" fill="rgba(209,213,219,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="8" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask0iz0023b)" pathTo="M 147.64912923177084 207.5527957763672 L 147.64912923177084 25.94497447204588 L 155.64912923177084 25.94497447204588 L 155.64912923177084 207.5527957763672 Z" pathFrom="M 147.64912923177084 207.5527957763672 L 147.64912923177084 207.5527957763672 L 155.64912923177084 207.5527957763672 L 155.64912923177084 207.5527957763672 L 155.64912923177084 207.5527957763672 L 155.64912923177084 207.5527957763672 L 155.64912923177084 207.5527957763672 L 147.64912923177084 207.5527957763672 Z" cy="25.94397447204588" cx="166.3643798828125" j="6" val="105000" barHeight="181.6078213043213" barWidth="16"></path><path id="SvgjsPath1525" d="M 170.3643798828125 207.5527957763672 L 170.3643798828125 50.15935064595538 L 178.3643798828125 50.15935064595538 L 178.3643798828125 207.5527957763672 Z" fill="rgba(209,213,219,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="8" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask0iz0023b)" pathTo="M 170.3643798828125 207.5527957763672 L 170.3643798828125 50.15935064595538 L 178.3643798828125 50.15935064595538 L 178.3643798828125 207.5527957763672 Z" pathFrom="M 170.3643798828125 207.5527957763672 L 170.3643798828125 207.5527957763672 L 178.3643798828125 207.5527957763672 L 178.3643798828125 207.5527957763672 L 178.3643798828125 207.5527957763672 L 178.3643798828125 207.5527957763672 L 178.3643798828125 207.5527957763672 L 170.3643798828125 207.5527957763672 Z" cy="50.15835064595538" cx="189.07963053385416" j="7" val="91000" barHeight="157.3934451304118" barWidth="16"></path><path id="SvgjsPath1527" d="M 193.07963053385416 207.5527957763672 L 193.07963053385416 10.37858978881834 L 201.07963053385416 10.37858978881834 L 201.07963053385416 207.5527957763672 Z" fill="rgba(209,213,219,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="8" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask0iz0023b)" pathTo="M 193.07963053385416 207.5527957763672 L 193.07963053385416 10.37858978881834 L 201.07963053385416 10.37858978881834 L 201.07963053385416 207.5527957763672 Z" pathFrom="M 193.07963053385416 207.5527957763672 L 193.07963053385416 207.5527957763672 L 201.07963053385416 207.5527957763672 L 201.07963053385416 207.5527957763672 L 201.07963053385416 207.5527957763672 L 201.07963053385416 207.5527957763672 L 201.07963053385416 207.5527957763672 L 193.07963053385416 207.5527957763672 Z" cy="10.37758978881834" cx="211.79488118489581" j="8" val="114000" barHeight="197.17420598754885" barWidth="16"></path><path id="SvgjsPath1529" d="M 215.79488118489581 207.5527957763672 L 215.79488118489581 44.97055575154621 L 223.79488118489581 44.97055575154621 L 223.79488118489581 207.5527957763672 Z" fill="rgba(209,213,219,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="8" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask0iz0023b)" pathTo="M 215.79488118489581 207.5527957763672 L 215.79488118489581 44.97055575154621 L 223.79488118489581 44.97055575154621 L 223.79488118489581 207.5527957763672 Z" pathFrom="M 215.79488118489581 207.5527957763672 L 215.79488118489581 207.5527957763672 L 223.79488118489581 207.5527957763672 L 223.79488118489581 207.5527957763672 L 223.79488118489581 207.5527957763672 L 223.79488118489581 207.5527957763672 L 223.79488118489581 207.5527957763672 L 215.79488118489581 207.5527957763672 Z" cy="44.96955575154621" cx="234.51013183593747" j="9" val="94000" barHeight="162.58224002482098" barWidth="16"></path><path id="SvgjsPath1531" d="M 238.51013183593747 207.5527957763672 L 238.51013183593747 91.66970980122883 L 246.51013183593747 91.66970980122883 L 246.51013183593747 207.5527957763672 Z" fill="rgba(209,213,219,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="8" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask0iz0023b)" pathTo="M 238.51013183593747 207.5527957763672 L 238.51013183593747 91.66970980122883 L 246.51013183593747 91.66970980122883 L 246.51013183593747 207.5527957763672 Z" pathFrom="M 238.51013183593747 207.5527957763672 L 238.51013183593747 207.5527957763672 L 246.51013183593747 207.5527957763672 L 246.51013183593747 207.5527957763672 L 246.51013183593747 207.5527957763672 L 246.51013183593747 207.5527957763672 L 246.51013183593747 207.5527957763672 L 238.51013183593747 207.5527957763672 Z" cy="91.66870980122883" cx="257.22538248697913" j="10" val="67000" barHeight="115.88308597513836" barWidth="16"></path><path id="SvgjsPath1533" d="M 261.22538248697913 207.5527957763672 L 261.22538248697913 93.39930809936523 L 269.22538248697913 93.39930809936523 L 269.22538248697913 207.5527957763672 Z" fill="rgba(209,213,219,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="8" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask0iz0023b)" pathTo="M 261.22538248697913 207.5527957763672 L 261.22538248697913 93.39930809936523 L 269.22538248697913 93.39930809936523 L 269.22538248697913 207.5527957763672 Z" pathFrom="M 261.22538248697913 207.5527957763672 L 261.22538248697913 207.5527957763672 L 269.22538248697913 207.5527957763672 L 269.22538248697913 207.5527957763672 L 269.22538248697913 207.5527957763672 L 269.22538248697913 207.5527957763672 L 269.22538248697913 207.5527957763672 L 261.22538248697913 207.5527957763672 Z" cy="93.39830809936522" cx="279.9406331380208" j="11" val="66000" barHeight="114.15348767700196" barWidth="16"></path><g id="SvgjsG1508" class="apexcharts-bar-goals-markers"><g id="SvgjsG1510" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask0iz0023b)"></g><g id="SvgjsG1512" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask0iz0023b)"></g><g id="SvgjsG1514" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask0iz0023b)"></g><g id="SvgjsG1516" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask0iz0023b)"></g><g id="SvgjsG1518" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask0iz0023b)"></g><g id="SvgjsG1520" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask0iz0023b)"></g><g id="SvgjsG1522" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask0iz0023b)"></g><g id="SvgjsG1524" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask0iz0023b)"></g><g id="SvgjsG1526" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask0iz0023b)"></g><g id="SvgjsG1528" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask0iz0023b)"></g><g id="SvgjsG1530" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask0iz0023b)"></g><g id="SvgjsG1532" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask0iz0023b)"></g></g><g id="SvgjsG1509" class="apexcharts-bar-shadows apexcharts-hidden-element-shown"></g></g><g id="SvgjsG1479" class="apexcharts-datalabels apexcharts-hidden-element-shown" data:realIndex="0"></g><g id="SvgjsG1507" class="apexcharts-datalabels apexcharts-hidden-element-shown" data:realIndex="1"></g></g><line id="SvgjsLine1545" x1="0" y1="0" x2="272.5830078125" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1546" x1="0" y1="0" x2="272.5830078125" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1547" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1548" class="apexcharts-xaxis-texts-g" transform="translate(0, -10)"><text id="SvgjsText1550" font-family="Inter, ui-sans-serif" x="7.357625325520834" y="230.5517957763672" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Inter, ui-sans-serif;" transform="rotate(-45 8.357625484466553 224.55178833007812)"><tspan id="SvgjsTspan1551">Jan</tspan><title>Jan</title></text><text id="SvgjsText1553" font-family="Inter, ui-sans-serif" x="30.0728759765625" y="230.5517957763672" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Inter, ui-sans-serif;" transform="rotate(-45 31.0909423828125 224.55178833007812)"><tspan id="SvgjsTspan1554">Feb</tspan><title>Feb</title></text><text id="SvgjsText1556" font-family="Inter, ui-sans-serif" x="52.788126627604164" y="230.5517957763672" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Inter, ui-sans-serif;" transform="rotate(-45 53.840858459472656 224.55178833007812)"><tspan id="SvgjsTspan1557">Mar</tspan><title>Mar</title></text><text id="SvgjsText1559" font-family="Inter, ui-sans-serif" x="75.50337727864584" y="230.5517957763672" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Inter, ui-sans-serif;" transform="rotate(-45 76.55391693115234 224.55178833007812)"><tspan id="SvgjsTspan1560">Apr</tspan><title>Apr</title></text><text id="SvgjsText1562" font-family="Inter, ui-sans-serif" x="98.21862792968751" y="230.5517957763672" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Inter, ui-sans-serif;" transform="rotate(-45 99.5589599609375 224.55178833007812)"><tspan id="SvgjsTspan1563">May</tspan><title>May</title></text><text id="SvgjsText1565" font-family="Inter, ui-sans-serif" x="120.93387858072917" y="230.5517957763672" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Inter, ui-sans-serif;" transform="rotate(-45 121.93388366699219 224.55178833007812)"><tspan id="SvgjsTspan1566">Jun</tspan><title>Jun</title></text><text id="SvgjsText1568" font-family="Inter, ui-sans-serif" x="143.64912923177081" y="230.5517957763672" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Inter, ui-sans-serif;" transform="rotate(-45 144.6491241455078 224.55178833007812)"><tspan id="SvgjsTspan1569">Jul</tspan><title>Jul</title></text><text id="SvgjsText1571" font-family="Inter, ui-sans-serif" x="166.36437988281247" y="230.5517957763672" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Inter, ui-sans-serif;" transform="rotate(-45 167.3721923828125 224.55178833007812)"><tspan id="SvgjsTspan1572">Aug</tspan><title>Aug</title></text><text id="SvgjsText1574" font-family="Inter, ui-sans-serif" x="189.07963053385413" y="230.5517957763672" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Inter, ui-sans-serif;" transform="rotate(-45 190.0942840576172 224.55178833007812)"><tspan id="SvgjsTspan1575">Sep</tspan><title>Sep</title></text><text id="SvgjsText1577" font-family="Inter, ui-sans-serif" x="211.7948811848958" y="230.5517957763672" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Inter, ui-sans-serif;" transform="rotate(-45 213.1659698486328 224.55178833007812)"><tspan id="SvgjsTspan1578">Oct</tspan><title>Oct</title></text><text id="SvgjsText1580" font-family="Inter, ui-sans-serif" x="234.51013183593744" y="230.5517957763672" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Inter, ui-sans-serif;" transform="rotate(-45 235.8497314453125 224.55178833007812)"><tspan id="SvgjsTspan1581">Nov</tspan><title>Nov</title></text><text id="SvgjsText1583" font-family="Inter, ui-sans-serif" x="257.22538248697913" y="230.5517957763672" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Inter, ui-sans-serif;" transform="rotate(-45 258.5105285644531 224.55178833007812)"><tspan id="SvgjsTspan1584">Dec</tspan><title>Dec</title></text></g></g><g id="SvgjsG1602" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1603" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1604" class="apexcharts-point-annotations"></g></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(37, 99, 235);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(209, 213, 219);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="p-4 md:p-5 min-h-[410px] flex flex-col bg-white border shadow-sm rounded-xl ">
            <!-- Header -->
            <div class="flex justify-between items-center">
            <div>
                <h2 class="text-sm text-gray-500 ">
                Visitors
                </h2>
                <p class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                80.3k
                </p>
            </div>

            <div>
                <span class="py-[5px] px-1.5 inline-flex items-center gap-x-1 text-xs font-medium rounded-md bg-red-100 text-red-800 dark:bg-red-500/10 dark:text-red-500">
                <svg class="inline-block size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 5v14"></path>
                    <path d="m19 12-7 7-7-7"></path>
                </svg>
                2%
                </span>
            </div>
            </div>
            <!-- End Header -->

            <div id="hs-single-area-chart" style="min-height: 315px;"><div id="apexchartsflpt9wxfh" class="apexcharts-canvas apexchartsflpt9wxfh apexcharts-theme-light" style="width: 339px; height: 300px;"><svg id="SvgjsSvg1606" width="339" height="300" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="339" height="300"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 150px;"></div></foreignObject><rect id="SvgjsRect1612" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1678" class="apexcharts-yaxis" rel="0" transform="translate(21.34375, 0)"><g id="SvgjsG1679" class="apexcharts-yaxis-texts-g" transform="translate(-24.34375, 0)"><text id="SvgjsText1681" font-family="Inter, ui-sans-serif" x="20" y="31.5" text-anchor="start" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Inter, ui-sans-serif;"><tspan id="SvgjsTspan1682">200</tspan><title>200</title></text><text id="SvgjsText1684" font-family="Inter, ui-sans-serif" x="20" y="71.45621735432943" text-anchor="start" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Inter, ui-sans-serif;"><tspan id="SvgjsTspan1685">160</tspan><title>160</title></text><text id="SvgjsText1687" font-family="Inter, ui-sans-serif" x="20" y="111.41243470865885" text-anchor="start" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Inter, ui-sans-serif;"><tspan id="SvgjsTspan1688">120</tspan><title>120</title></text><text id="SvgjsText1690" font-family="Inter, ui-sans-serif" x="20" y="151.36865206298828" text-anchor="start" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Inter, ui-sans-serif;"><tspan id="SvgjsTspan1691">80</tspan><title>80</title></text><text id="SvgjsText1693" font-family="Inter, ui-sans-serif" x="20" y="191.3248694173177" text-anchor="start" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Inter, ui-sans-serif;"><tspan id="SvgjsTspan1694">40</tspan><title>40</title></text><text id="SvgjsText1696" font-family="Inter, ui-sans-serif" x="20" y="231.28108677164713" text-anchor="start" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Inter, ui-sans-serif;"><tspan id="SvgjsTspan1697">0</tspan><title>0</title></text></g></g><g id="SvgjsG1608" class="apexcharts-inner apexcharts-graphical" transform="translate(51.34375, 30)"><defs id="SvgjsDefs1607"><clipPath id="gridRectMaskflpt9wxfh"><rect id="SvgjsRect1614" width="283.65625" height="211.78108677164713" x="-4" y="-6" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskflpt9wxfh"></clipPath><clipPath id="nonForecastMaskflpt9wxfh"></clipPath><clipPath id="gridRectMarkerMaskflpt9wxfh"><rect id="SvgjsRect1615" width="281.65625" height="203.78108677164713" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1620" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1621" stop-opacity="0.1" stop-color="rgba(37,99,235,0.1)" offset="0"></stop><stop id="SvgjsStop1622" stop-opacity="0.8" stop-color="rgba(255,255,255,0.8)" offset="0.9"></stop><stop id="SvgjsStop1623" stop-opacity="0.8" stop-color="rgba(255,255,255,0.8)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1613" x1="0" y1="0" x2="0" y2="199.78108677164713" stroke="#b6b6b6" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="199.78108677164713" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1626" class="apexcharts-grid"><g id="SvgjsG1627" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1631" x1="0" y1="39.956217354329425" x2="277.65625" y2="39.956217354329425" stroke="#e5e7eb" stroke-dasharray="2" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1632" x1="0" y1="79.91243470865885" x2="277.65625" y2="79.91243470865885" stroke="#e5e7eb" stroke-dasharray="2" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1633" x1="0" y1="119.86865206298828" x2="277.65625" y2="119.86865206298828" stroke="#e5e7eb" stroke-dasharray="2" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1634" x1="0" y1="159.8248694173177" x2="277.65625" y2="159.8248694173177" stroke="#e5e7eb" stroke-dasharray="2" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1628" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1637" x1="0" y1="199.78108677164713" x2="277.65625" y2="199.78108677164713" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1636" x1="0" y1="1" x2="0" y2="199.78108677164713" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1629" class="apexcharts-grid-borders"><line id="SvgjsLine1630" x1="0" y1="0" x2="277.65625" y2="0" stroke="#e5e7eb" stroke-dasharray="2" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1635" x1="0" y1="199.78108677164713" x2="277.65625" y2="199.78108677164713" stroke="#e5e7eb" stroke-dasharray="2" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1616" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1617" class="apexcharts-series" zIndex="0" seriesName="Visitors" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1624" d="M 0 199.78108677164713 L 0 19.978108677164727 L 25.241477272727273 148.8369096448771 L 50.48295454545455 139.846760740153 L 75.72443181818181 161.82268028503418 L 100.9659090909091 111.87740859212239 L 126.20738636363636 149.83581507873535 L 151.44886363636363 159.8248694173177 L 176.6903409090909 147.83800421101887 L 201.9318181818182 111.87740859212239 L 227.17329545454544 119.86865206298828 L 252.41477272727272 139.846760740153 L 277.65625 129.85770640157062 L 277.65625 199.78108677164713M 277.65625 129.85770640157062z" fill="url(#SvgjsLinearGradient1620)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskflpt9wxfh)" pathTo="M 0 199.78108677164713 L 0 19.978108677164727 L 25.241477272727273 148.8369096448771 L 50.48295454545455 139.846760740153 L 75.72443181818181 161.82268028503418 L 100.9659090909091 111.87740859212239 L 126.20738636363636 149.83581507873535 L 151.44886363636363 159.8248694173177 L 176.6903409090909 147.83800421101887 L 201.9318181818182 111.87740859212239 L 227.17329545454544 119.86865206298828 L 252.41477272727272 139.846760740153 L 277.65625 129.85770640157062 L 277.65625 199.78108677164713M 277.65625 129.85770640157062z" pathFrom="M -1 199.78108677164713 L -1 199.78108677164713 L 25.241477272727273 199.78108677164713 L 50.48295454545455 199.78108677164713 L 75.72443181818181 199.78108677164713 L 100.9659090909091 199.78108677164713 L 126.20738636363636 199.78108677164713 L 151.44886363636363 199.78108677164713 L 176.6903409090909 199.78108677164713 L 201.9318181818182 199.78108677164713 L 227.17329545454544 199.78108677164713 L 252.41477272727272 199.78108677164713 L 277.65625 199.78108677164713"></path><path id="SvgjsPath1625" d="M 0 19.978108677164727 L 25.241477272727273 148.8369096448771 L 50.48295454545455 139.846760740153 L 75.72443181818181 161.82268028503418 L 100.9659090909091 111.87740859212239 L 126.20738636363636 149.83581507873535 L 151.44886363636363 159.8248694173177 L 176.6903409090909 147.83800421101887 L 201.9318181818182 111.87740859212239 L 227.17329545454544 119.86865206298828 L 252.41477272727272 139.846760740153 L 277.65625 129.85770640157062" fill="none" fill-opacity="1" stroke="#2563eb" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskflpt9wxfh)" pathTo="M 0 19.978108677164727 L 25.241477272727273 148.8369096448771 L 50.48295454545455 139.846760740153 L 75.72443181818181 161.82268028503418 L 100.9659090909091 111.87740859212239 L 126.20738636363636 149.83581507873535 L 151.44886363636363 159.8248694173177 L 176.6903409090909 147.83800421101887 L 201.9318181818182 111.87740859212239 L 227.17329545454544 119.86865206298828 L 252.41477272727272 139.846760740153 L 277.65625 129.85770640157062" pathFrom="M -1 199.78108677164713 L -1 199.78108677164713 L 25.241477272727273 199.78108677164713 L 50.48295454545455 199.78108677164713 L 75.72443181818181 199.78108677164713 L 100.9659090909091 199.78108677164713 L 126.20738636363636 199.78108677164713 L 151.44886363636363 199.78108677164713 L 176.6903409090909 199.78108677164713 L 201.9318181818182 199.78108677164713 L 227.17329545454544 199.78108677164713 L 252.41477272727272 199.78108677164713 L 277.65625 199.78108677164713" fill-rule="evenodd"></path><g id="SvgjsG1618" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1701" r="0" cx="0" cy="0" class="apexcharts-marker wkot3vefs no-pointer-events" stroke="#ffffff" fill="#2563eb" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1619" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1638" x1="0" y1="0" x2="277.65625" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1639" x1="0" y1="0" x2="277.65625" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1640" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1641" class="apexcharts-xaxis-texts-g" transform="translate(0, -10)"><text id="SvgjsText1643" font-family="Inter, ui-sans-serif" x="0" y="222.78108677164713" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Inter, ui-sans-serif;" transform="rotate(-45 1 216.7810821533203)"><tspan id="SvgjsTspan1644">25 Jan</tspan><title>25 Jan</title></text><text id="SvgjsText1646" font-family="Inter, ui-sans-serif" x="25.24147727272727" y="222.78108677164713" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Inter, ui-sans-serif;" transform="rotate(-45 26.241477966308594 216.7810821533203)"><tspan id="SvgjsTspan1647">26 Jan</tspan><title>26 Jan</title></text><text id="SvgjsText1649" font-family="Inter, ui-sans-serif" x="50.48295454545455" y="222.78108677164713" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Inter, ui-sans-serif;" transform="rotate(-45 51.48295593261719 216.7810821533203)"><tspan id="SvgjsTspan1650">27 Jan</tspan><title>27 Jan</title></text><text id="SvgjsText1652" font-family="Inter, ui-sans-serif" x="75.72443181818181" y="222.78108677164713" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Inter, ui-sans-serif;" transform="rotate(-45 76.72443389892578 216.7810821533203)"><tspan id="SvgjsTspan1653">28 Jan</tspan><title>28 Jan</title></text><text id="SvgjsText1655" font-family="Inter, ui-sans-serif" x="100.96590909090908" y="222.78108677164713" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Inter, ui-sans-serif;" transform="rotate(-45 101.96591186523438 216.7810821533203)"><tspan id="SvgjsTspan1656">29 Jan</tspan><title>29 Jan</title></text><text id="SvgjsText1658" font-family="Inter, ui-sans-serif" x="126.20738636363636" y="222.78108677164713" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Inter, ui-sans-serif;" transform="rotate(-45 127.20738220214844 216.7810821533203)"><tspan id="SvgjsTspan1659">30 Jan</tspan><title>30 Jan</title></text><text id="SvgjsText1661" font-family="Inter, ui-sans-serif" x="151.44886363636365" y="222.78108677164713" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Inter, ui-sans-serif;" transform="rotate(-45 152.44886779785156 216.7810821533203)"><tspan id="SvgjsTspan1662">31 Jan</tspan><title>31 Jan</title></text><text id="SvgjsText1664" font-family="Inter, ui-sans-serif" x="176.69034090909093" y="222.78108677164713" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Inter, ui-sans-serif;" transform="rotate(-45 177.70376586914062 216.7810821533203)"><tspan id="SvgjsTspan1665">1 Feb</tspan><title>1 Feb</title></text><text id="SvgjsText1667" font-family="Inter, ui-sans-serif" x="201.93181818181822" y="222.78108677164713" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Inter, ui-sans-serif;" transform="rotate(-45 202.94525146484375 216.7810821533203)"><tspan id="SvgjsTspan1668">2 Feb</tspan><title>2 Feb</title></text><text id="SvgjsText1670" font-family="Inter, ui-sans-serif" x="227.1732954545455" y="222.78108677164713" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Inter, ui-sans-serif;" transform="rotate(-45 228.19064331054688 216.7810821533203)"><tspan id="SvgjsTspan1671">3 Feb</tspan><title>3 Feb</title></text><text id="SvgjsText1673" font-family="Inter, ui-sans-serif" x="252.41477272727275" y="222.78108677164713" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Inter, ui-sans-serif;" transform="rotate(-45 253.42868041992188 216.7810821533203)"><tspan id="SvgjsTspan1674">4 Feb</tspan><title>4 Feb</title></text><text id="SvgjsText1676" font-family="Inter, ui-sans-serif" x="277.65625" y="222.78108677164713" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Inter, ui-sans-serif;" transform="rotate(-45 278.671142578125 216.7810821533203)"><tspan id="SvgjsTspan1677">5 Feb</tspan><title>5 Feb</title></text></g></g><g id="SvgjsG1698" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1699" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1700" class="apexcharts-point-annotations"></g></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(37, 99, 235);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
        </div>
        <!-- End Card -->
        </div>

        <!-- Card -->
        <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
            <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden ">
                <!-- Header -->
                <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 ">ext-xl font-semibold text-gray-800 dark:text-neutral-200">
                    Users
                    </h2>
                    <p class="text-sm text-gray-600 "e       </p>
                </div>

                <div>
                    <div class="inline-flex gap-x-2">
                    <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50 dark:bg-transparent  dus:bg-neutral-800" href="#">
                        View all
                    </a>

                    <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="#">
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14"></path>
                        <path d="M12 5v14"></path>
                        </svg>
                        Add user
                    </a>
                    </div>
                </div>
                </div>
                <!-- End Header -->

                <!-- Table -->
                <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                <thead class="bg-gray-50 dark:bg-neutral-800">
                    <tr>
                    <th scope="col" class="ps-6 py-3 text-start">
                        <label for="hs-at-with-checkboxes-main" class="flex">
                        <input type="checkbox" class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-at-with-checkboxes-main">
                        <span class="sr-only">Checkbox</span>
                        </label>
                    </th>

                    <th scope="col" class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3 text-start">
                        <div class="flex items-center gap-x-2">
                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                            Name
                        </span>
                        </div>
                    </th>

                    <th scope="col" class="px-6 py-3 text-start">
                        <div class="flex items-center gap-x-2">
                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                            Position
                        </span>
                        </div>
                    </th>

                    <th scope="col" class="px-6 py-3 text-start">
                        <div class="flex items-center gap-x-2">
                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                            Status
                        </span>
                        </div>
                    </th>

                    <th scope="col" class="px-6 py-3 text-start">
                        <div class="flex items-center gap-x-2">
                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                            Portfolio
                        </span>
                        </div>
                    </th>

                    <th scope="col" class="px-6 py-3 text-start">
                        <div class="flex items-center gap-x-2">
                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                            Created
                        </span>
                        </div>
                    </th>

                    <th scope="col" class="px-6 py-3 text-end"></th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                    <tr>
                    <td class="size-px whitespace-nowrap">
                        <div class="ps-6 py-3">
                        <label for="hs-at-with-checkboxes-1" class="flex">
                            <input type="checkbox" class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-at-with-checkboxes-1">
                            <span class="sr-only">Checkbox</span>
                        </label>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                        <div class="flex items-center gap-x-3">
                            <img class="inline-block size-[38px] rounded-full" src="https://images.unsplash.com/photo-1531927557220-a9e23c1e4794?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=320&amp;h=320&amp;q=80" alt="Avatar">
                            <div class="grow">
                            <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Christina Bersh</span>
                            <span class="block text-sm text-gray-500 ">christina@site.com</span>
                            </div>
                        </div>
                        </div>
                    </td>
                    <td class="h-px w-72 whitespace-nowrap">
                        <div class="px-6 py-3">
                        <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Director</span>
                        <span class="block text-sm text-gray-500 ">Human resources</span>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                        <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                            <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                            </svg>
                            Active
                        </span>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                        <div class="flex items-center gap-x-3">
                            <span class="text-xs text-gray-500 ">1/5</span>
                            <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden ">
                            <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                        <span class="text-sm text-gray-500 ">28 Dec, 12:12</span>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-1.5">
                        <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href="#">
                            Edit
                        </a>
                        </div>
                    </td>
                    </tr>

                    <tr>
                    <td class="size-px whitespace-nowrap">
                        <div class="ps-6 py-3">
                        <label for="hs-at-with-checkboxes-2" class="flex">
                            <input type="checkbox" class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-at-with-checkboxes-2">
                            <span class="sr-only">Checkbox</span>
                        </label>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                        <div class="flex items-center gap-x-3">
                            <img class="inline-block size-[38px] rounded-full" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=320&amp;h=320&amp;q=80" alt="Avatar">
                            <div class="grow">
                            <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">David Harrison</span>
                            <span class="block text-sm text-gray-500 ">david@site.com</span>
                            </div>
                        </div>
                        </div>
                    </td>
                    <td class="h-px w-72 whitespace-nowrap">
                        <div class="px-6 py-3">
                        <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Seller</span>
                        <span class="block text-sm text-gray-500 ">Branding products</span>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                        <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-yellow-100 text-yellow-800 rounded-full dark:bg-yellow-500/10 dark:text-yellow-500">
                            <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
                            </svg>
                            Warning
                        </span>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                        <div class="flex items-center gap-x-3">
                            <span class="text-xs text-gray-500 ">3/5</span>
                            <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden ">
                            <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                        <span class="text-sm text-gray-500 ">20 Dec, 09:27</span>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-1.5">
                        <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href="#">
                            Edit
                        </a>
                        </div>
                    </td>
                    </tr>

                    <tr>
                    <td class="size-px whitespace-nowrap">
                        <div class="ps-6 py-3">
                        <label for="hs-at-with-checkboxes-3" class="flex">
                            <input type="checkbox" class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-at-with-checkboxes-3">
                            <span class="sr-only">Checkbox</span>
                        </label>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                        <div class="flex items-center gap-x-3">
                            <span class="inline-flex items-center justify-center size-[38px] rounded-full bg-white border border-gray-300 ">
                            <span class="font-medium text-sm text-gray-800 leading-none dark:text-neutral-200">A</span>
                            </span>
                            <div class="grow">
                            <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Anne Richard</span>
                            <span class="block text-sm text-gray-500 ">anne@site.com</span>
                            </div>
                        </div>
                        </div>
                    </td>
                    <td class="h-px w-72 whitespace-nowrap">
                        <div class="px-6 py-3">
                        <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Designer</span>
                        <span class="block text-sm text-gray-500 ">IT department</span>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                        <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                            <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                            </svg>
                            Active
                        </span>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                        <div class="flex items-center gap-x-3">
                            <span class="text-xs text-gray-500 ">5/5</span>
                            <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden ">
                            <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                        <span class="text-sm text-gray-500 ">18 Dec, 15:20</span>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-1.5">
                        <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href="#">
                            Edit
                        </a>
                        </div>
                    </td>
                    </tr>

                    <tr>
                    <td class="size-px whitespace-nowrap">
                        <div class="ps-6 py-3">
                        <label for="hs-at-with-checkboxes-4" class="flex">
                            <input type="checkbox" class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-at-with-checkboxes-4">
                            <span class="sr-only">Checkbox</span>
                        </label>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                        <div class="flex items-center gap-x-3">
                            <img class="inline-block size-[38px] rounded-full" src="https://images.unsplash.com/photo-1541101767792-f9b2b1c4f127?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;&amp;auto=format&amp;fit=facearea&amp;facepad=3&amp;w=320&amp;h=320&amp;q=80" alt="Avatar">
                            <div class="grow">
                            <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Samia Kartoon</span>
                            <span class="block text-sm text-gray-500 ">samia@site.com</span>
                            </div>
                        </div>
                        </div>
                    </td>
                    <td class="h-px w-72 whitespace-nowrap">
                        <div class="px-6 py-3">
                        <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Executive director</span>
                        <span class="block text-sm text-gray-500 ">Marketing</span>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                        <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                            <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                            </svg>
                            Active
                        </span>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                        <div class="flex items-center gap-x-3">
                            <span class="text-xs text-gray-500 ">0/5</span>
                            <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden ">
                            <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200" role="progressbar" style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                        <span class="text-sm text-gray-500 ">18 Dec, 15:20</span>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-1.5">
                        <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href="#">
                            Edit
                        </a>
                        </div>
                    </td>
                    </tr>

                    <tr>
                    <td class="size-px whitespace-nowrap">
                        <div class="ps-6 py-3">
                        <label for="hs-at-with-checkboxes-5" class="flex">
                            <input type="checkbox" class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-at-with-checkboxes-5">
                            <span class="sr-only">Checkbox</span>
                        </label>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                        <div class="flex items-center gap-x-3">
                            <span class="inline-flex items-center justify-center size-[38px] rounded-full bg-white border border-gray-300 ">
                            <span class="font-medium text-sm text-gray-800 leading-none dark:text-neutral-200">D</span>
                            </span>
                            <div class="grow">
                            <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">David Harrison</span>
                            <span class="block text-sm text-gray-500 ">david@site.com</span>
                            </div>
                        </div>
                        </div>
                    </td>
                    <td class="h-px w-72 whitespace-nowrap">
                        <div class="px-6 py-3">
                        <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Developer</span>
                        <span class="block text-sm text-gray-500 ">Mobile app</span>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                        <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-red-100 text-red-800 rounded-full dark:bg-red-500/10 dark:text-red-500">
                            <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
                            </svg>
                            Danger
                        </span>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                        <div class="flex items-center gap-x-3">
                            <span class="text-xs text-gray-500 ">3/5</span>
                            <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden ">
                            <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                        <span class="text-sm text-gray-500 ">15 Dec, 14:41</span>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-1.5">
                        <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href="#">
                            Edit
                        </a>
                        </div>
                    </td>
                    </tr>

                    <tr>
                    <td class="size-px whitespace-nowrap">
                        <div class="ps-6 py-3">
                        <label for="hs-at-with-checkboxes-6" class="flex">
                            <input type="checkbox" class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-at-with-checkboxes-6">
                            <span class="sr-only">Checkbox</span>
                        </label>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                        <div class="flex items-center gap-x-3">
                            <img class="inline-block size-[38px] rounded-full" src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=320&amp;h=320&amp;q=80" alt="Avatar">
                            <div class="grow">
                            <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Brian Halligan</span>
                            <span class="block text-sm text-gray-500 ">brian@site.com</span>
                            </div>
                        </div>
                        </div>
                    </td>
                    <td class="h-px w-72 whitespace-nowrap">
                        <div class="px-6 py-3">
                        <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Accountant</span>
                        <span class="block text-sm text-gray-500 ">Finance</span>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                        <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                            <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                            </svg>
                            Active
                        </span>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                        <div class="flex items-center gap-x-3">
                            <span class="text-xs text-gray-500 ">2/5</span>
                            <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden ">
                            <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                        <span class="text-sm text-gray-500 ">11 Dec, 18:51</span>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-1.5">
                        <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href="#">
                            Edit
                        </a>
                        </div>
                    </td>
                    </tr>

                    <tr>
                    <td class="size-px whitespace-nowrap">
                        <div class="ps-6 py-3">
                        <label for="hs-at-with-checkboxes-7" class="flex">
                            <input type="checkbox" class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-at-with-checkboxes-7">
                            <span class="sr-only">Checkbox</span>
                        </label>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                        <div class="flex items-center gap-x-3">
                            <img class="inline-block size-[38px] rounded-full" src="https://images.unsplash.com/photo-1659482634023-2c4fda99ac0c?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=2.5&amp;w=320&amp;h=320&amp;q=80" alt="Avatar">
                            <div class="grow">
                            <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Andy Clerk</span>
                            <span class="block text-sm text-gray-500 ">andy@site.com</span>
                            </div>
                        </div>
                        </div>
                    </td>
                    <td class="h-px w-72 whitespace-nowrap">
                        <div class="px-6 py-3">
                        <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Director</span>
                        <span class="block text-sm text-gray-500 ">Human resources</span>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                        <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                            <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                            </svg>
                            Active
                        </span>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                        <div class="flex items-center gap-x-3">
                            <span class="text-xs text-gray-500 dark:text-neutral-500">1/5</span>
                            <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden ">
                            <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                        <span class="text-sm text-gray-500 dark:text-neutral-500">28 Dec, 12:12</span>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-1.5">
                        <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href="#">
                            Edit
                        </a>
                        </div>
                    </td>
                    </tr>

                    <tr>
                    <td class="size-px whitespace-nowrap">
                        <div class="ps-6 py-3">
                        <label for="hs-at-with-checkboxes-8" class="flex">
                            <input type="checkbox" class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-at-with-checkboxes-8">
                            <span class="sr-only">Checkbox</span>
                        </label>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                        <div class="flex items-center gap-x-3">
                            <img class="inline-block size-[38px] rounded-full" src="https://images.unsplash.com/photo-1601935111741-ae98b2b230b0?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=320&amp;h=320&amp;q=80" alt="Avatar">
                            <div class="grow">
                            <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Bart Simpson</span>
                            <span class="block text-sm text-gray-500 dark:text-neutral-500">Bart@site.com</span>
                            </div>
                        </div>
                        </div>
                    </td>
                    <td class="h-px w-72 whitespace-nowrap">
                        <div class="px-6 py-3">
                        <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Seller</span>
                        <span class="block text-sm text-gray-500 dark:text-neutral-500">Branding products</span>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                        <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-yellow-100 text-yellow-800 rounded-full dark:bg-yellow-500/10 dark:text-yellow-500">
                            <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
                            </svg>
                            Warning
                        </span>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                        <div class="flex items-center gap-x-3">
                            <span class="text-xs text-gray-500 dark:text-neutral-500">3/5</span>
                            <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden ">
                            <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                        <span class="text-sm text-gray-500 dark:text-neutral-500">20 Dec, 09:27</span>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-1.5">
                        <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href="#">
                            Edit
                        </a>
                        </div>
                    </td>
                    </tr>

                    <tr>
                    <td class="size-px whitespace-nowrap">
                        <div class="ps-6 py-3">
                        <label for="hs-at-with-checkboxes-9" class="flex">
                            <input type="checkbox" class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-at-with-checkboxes-9">
                            <span class="sr-only">Checkbox</span>
                        </label>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                        <div class="flex items-center gap-x-3">
                            <span class="inline-flex items-center justify-center size-[38px] rounded-full bg-white border border-gray-300 ">
                            <span class="font-medium text-sm text-gray-800 leading-none dark:text-neutral-200">C</span>
                            </span>
                            <div class="grow">
                            <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Camila Welters</span>
                            <span class="block text-sm text-gray-500 dark:text-neutral-500">cwelt@site.com</span>
                            </div>
                        </div>
                        </div>
                    </td>
                    <td class="h-px w-72 whitespace-nowrap">
                        <div class="px-6 py-3">
                        <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Designer</span>
                        <span class="block text-sm text-gray-500 dark:text-neutral-500">IT department</span>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                        <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                            <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                            </svg>
                            Active
                        </span>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                        <div class="flex items-center gap-x-3">
                            <span class="text-xs text-gray-500 dark:text-neutral-500">5/5</span>
                            <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                            <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                        <span class="text-sm text-gray-500 dark:text-neutral-500">18 Dec, 15:20</span>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-1.5">
                        <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href="#">
                            Edit
                        </a>
                        </div>
                    </td>
                    </tr>

                    <tr>
                    <td class="size-px whitespace-nowrap">
                        <div class="ps-6 py-3">
                        <label for="hs-at-with-checkboxes-10" class="flex">
                            <input type="checkbox" class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-at-with-checkboxes-10">
                            <span class="sr-only">Checkbox</span>
                        </label>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                        <div class="flex items-center gap-x-3">
                            <img class="inline-block size-[38px] rounded-full" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=320&amp;h=320&amp;q=80" alt="Avatar">
                            <div class="grow">
                            <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Oliver Schevich</span>
                            <span class="block text-sm text-gray-500 dark:text-neutral-500">oliver@site.com</span>
                            </div>
                        </div>
                        </div>
                    </td>
                    <td class="h-px w-72 whitespace-nowrap">
                        <div class="px-6 py-3">
                        <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Seller</span>
                        <span class="block text-sm text-gray-500 dark:text-neutral-500">Branding products</span>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                        <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-yellow-100 text-yellow-800 rounded-full dark:bg-yellow-500/10 dark:text-yellow-500">
                            <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
                            </svg>
                            Warning
                        </span>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                        <div class="flex items-center gap-x-3">
                            <span class="text-xs text-gray-500 dark:text-neutral-500">3/5</span>
                            <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                            <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                        <span class="text-sm text-gray-500 dark:text-neutral-500">20 Dec, 09:27</span>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-1.5">
                        <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href="#">
                            Edit
                        </a>
                        </div>
                    </td>
                    </tr>

                    <tr>
                    <td class="size-px whitespace-nowrap">
                        <div class="ps-6 py-3">
                        <label for="hs-at-with-checkboxes-11" class="flex">
                            <input type="checkbox" class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-at-with-checkboxes-11">
                            <span class="sr-only">Checkbox</span>
                        </label>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                        <div class="flex items-center gap-x-3">
                            <span class="inline-flex items-center justify-center size-[38px] rounded-full bg-white border border-gray-300 ">
                            <span class="font-medium text-sm text-gray-800 leading-none dark:text-neutral-200">I</span>
                            </span>
                            <div class="grow">
                            <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Inna Ivy</span>
                            <span class="block text-sm text-gray-500 dark:text-neutral-500">invy@site.com</span>
                            </div>
                        </div>
                        </div>
                    </td>
                    <td class="h-px w-72 whitespace-nowrap">
                        <div class="px-6 py-3">
                        <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Designer</span>
                        <span class="block text-sm text-gray-500 dark:text-neutral-500">IT department</span>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                        <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                            <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                            </svg>
                            Active
                        </span>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                        <div class="flex items-center gap-x-3">
                            <span class="text-xs text-gray-500 dark:text-neutral-500">5/5</span>
                            <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                            <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                        <span class="text-sm text-gray-500 dark:text-neutral-500">18 Dec, 15:20</span>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-1.5">
                        <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href="#">
                            Edit
                        </a>
                        </div>
                    </td>
                    </tr>

                    <tr>
                    <td class="size-px whitespace-nowrap">
                        <div class="ps-6 py-3">
                        <label for="hs-at-with-checkboxes-12" class="flex">
                            <input type="checkbox" class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-at-with-checkboxes-12">
                            <span class="sr-only">Checkbox</span>
                        </label>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                        <div class="flex items-center gap-x-3">
                            <img class="inline-block size-[38px] rounded-full" src="https://images.unsplash.com/photo-1670272505340-d906d8d77d03?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=320&amp;h=320&amp;q=80" alt="Avatar">
                            <div class="grow">
                            <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Jessica Williams</span>
                            <span class="block text-sm text-gray-500 dark:text-neutral-500">myhairisred@site.com</span>
                            </div>
                        </div>
                        </div>
                    </td>
                    <td class="h-px w-72 whitespace-nowrap">
                        <div class="px-6 py-3">
                        <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Executive director</span>
                        <span class="block text-sm text-gray-500 dark:text-neutral-500">Marketing</span>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                        <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                            <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                            </svg>
                            Active
                        </span>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                        <div class="flex items-center gap-x-3">
                            <span class="text-xs text-gray-500 dark:text-neutral-500">0/5</span>
                            <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                            <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200" role="progressbar" style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                        <span class="text-sm text-gray-500 dark:text-neutral-500">18 Dec, 15:20</span>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-1.5">
                        <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href="#">
                            Edit
                        </a>
                        </div>
                    </td>
                    </tr>
                </tbody>
                </table>
                <!-- End Table -->

                <!-- Footer -->
                <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 ">xt-sm text-gray-600 "=0 dark:text-neutral-200">12</span> results
                    </p>
                </div>

                <div>
                    <div class="inline-flex gap-x-2">
                    <button type="button" class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50 dark:bg-transparent  dus:bg-neutral-800">
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m15 18-6-6 6-6"></path>
                        </svg>
                        Prev
                    </button>

                    <button type="button" class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50 dark:bg-transparent  dus:bg-neutral-800">
                        Next
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                        </svg>
                    </button>
                    </div>
                </div>
                </div>
                <!-- End Footer -->
            </div>
            </div>
        </div>
        </div>
        <!-- End Card -->
    </div>
    </div>
    <!-- End Content -->

    <div class="fixed bottom-2 sm:bottom-4 end-2 sm:end-4 ms-2 z-[70] bg-neutral-900 border border-neutral-800 rounded-lg dark:bg-neutral-800">
    <!-- Button Group -->
    <div class="flex items-center gap-px">
        <div class="hs-tooltip inline-block">
        <p class="hs-tooltip-toggle inline-flex gap-x-2 text-xs text-white py-1 px-2 relative before:absolute before:top-1/2 before:-start-0.5 before:z-10 before:w-px before:h-4 before:bg-white/20 before:-translate-y-1/2 first:before:hidden">
            <svg class="shrink-0 mt-0.5 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="10"></circle>
            <path d="M12 16v-4"></path>
            <path d="M12 8h.01"></path>
            </svg>
        </p>
        <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 inline-block absolute invisible z-20 py-1.5 px-2.5 bg-neutral-900 text-xs text-white rounded-lg whitespace-nowrap dark:bg-neutral-800" role="tooltip" style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(797px, -50px);" data-popper-placement="top">
            This is the Preline UI template preview mode.
        </span>
        </div>

        <!-- Templates Dropdown -->
        <div class="hs-dropdown relative inline-flex [--strategy:absolute] [--placement:bottom-right] before:absolute before:top-1/2 before:-start-px before:z-10 before:w-px before:h-4 before:bg-white/20 before:-translate-y-1/2 first:before:hidden">
        <button id="hs-dropdown-preview" type="button" class="py-1.5 px-2 inline-flex justify-center items-center gap-x-2 text-xs rounded-e-lg border border-transparent bg-neutral-900 text-white hover:bg-neutral-950 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-neutral-900 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
            Templates
            <svg class="hs-dropdown-open:rotate-180 shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="m18 15-6-6-6 6"></path>
            </svg>
        </button>

        <!-- Dropdown -->
        <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-48 transition-[opacity,margin] duration opacity-0 hidden z-10 overflow-hidden border border-neutral-800 bg-neutral-900 rounded-lg shadow-[0_10px_40px_10px_rgba(0,0,0,0.08)] dark:shadow-[0_10px_40px_10px_rgba(0,0,0,0.2)] dark:bg-neutral-800" role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-preview">
            <div class="max-h-[30rem] overflow-y-auto relative z-20 after:sticky after:inset-x-0 after:bottom-0 after:z-10 after:block after:w-full after:rounded-b-lg after:pointer-events-none after:bg-gradient-to-t after:from-neutral-900 after:via-neutral-900/95 dark:after:from-neutral-800 dark:after:via-neutral-800/95 [&amp;::-webkit-scrollbar]:w-2 [&amp;::-webkit-scrollbar-thumb]:rounded-full [&amp;::-webkit-scrollbar-track]:bg-neutral-800 [&amp;::-webkit-scrollbar-thumb]:bg-neutral-500 ">
            <div class="p-1 space-y-0.5">
                <span class="block p-2 pb-1 text-[11px] uppercase text-neutral-400 " s-center gap-x-1.5 py-1.5 px-2 rounded-md text-[13px] text-gray-200 hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700  " href="../../index.html">
                Preline UI
                <svg class="shrink-0 size-3.5 ms-auto opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="m12 5 7 7-7 7"></path>
                </svg>
                </a>

                <a class="group flex items-center gap-x-1.5 py-1.5 px-2 rounded-md text-[13px] text-gray-200 hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700  " href="../../docs/index.html">
                Components (595+)
                <svg class="shrink-0 size-3.5 ms-auto opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="m12 5 7 7-7 7"></path>
                </svg>
                </a>

                <a class="group flex items-center gap-x-1.5 py-1.5 px-2 rounded-md text-[13px] text-gray-200 hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700  " href="../../examples.html">
                Examples (200+<!-- 202 -->)
                <svg class="shrink-0 size-3.5 ms-auto opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="m12 5 7 7-7 7"></path>
                </svg>
                </a>

                <a class="group flex items-center gap-x-1.5 py-1.5 px-2 rounded-md text-[13px] text-gray-200 hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700  " href="../../templates.html">
                Templates (5)
                <svg class="shrink-0 size-3.5 ms-auto opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="m12 5 7 7-7 7"></path>
                </svg>
                </a>

                <a class="group flex items-center gap-x-1.5 py-1.5 px-2 rounded-md text-[13px] text-gray-200 hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700  " href="../../plugins.html">
                Plugins (20+<!-- 21  -->)
                <svg class="shrink-0 size-3.5 ms-auto opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="m12 5 7 7-7 7"></path>
                </svg>
                </a>

                <a class="group flex items-center gap-x-1.5 py-1.5 px-2 rounded-md text-[13px] text-gray-200 hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700  " href="../../figma.html">
                Figma
                <svg class="shrink-0 size-3.5 ms-auto opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="m12 5 7 7-7 7"></path>
                </svg>
                </a>

                <a class="group flex items-center gap-x-1.5 py-1.5 px-2 rounded-md text-[13px] text-gray-200 hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700  " href="../../pro/index.html">
                Preline Pro
                <svg class="shrink-0 size-3.5 ms-auto opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="m12 5 7 7-7 7"></path>
                </svg>
                </a>

                <div class="border-b border-neutral-800  p text-[11px] uppercase text-neutral-400 " ex items-center gap-x-1.5 py-1.5 px-2 rounded-md text-[13px] text-gray-200 hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700  " href="../../templates/agency/index.html">
                Agency
                <svg class="shrink-0 size-3.5 ms-auto opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="m12 5 7 7-7 7"></path>
                </svg>
                </a>
                <a class="group flex items-center gap-x-1.5 py-1.5 px-2 rounded-md text-[13px] text-gray-200 hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700  " href="../../templates/personal/index.html">
                Personal
                <span class="text-green-400">New</span>
                <svg class="shrink-0 size-3.5 ms-auto opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="m12 5 7 7-7 7"></path>
                </svg>
                </a>
                <a class="group flex items-center gap-x-1.5 py-1.5 px-2 rounded-md text-[13px] text-gray-200 hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700  " href="../../templates/creative-agency/index.html">
                Creative Agency
                <svg class="shrink-0 size-3.5 ms-auto opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="m12 5 7 7-7 7"></path>
                </svg>
                </a>
                <a class="group flex items-center gap-x-1.5 py-1.5 px-2 rounded-md text-[13px] text-gray-200 hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 bg-neutral-800 dark:bg-neutral-700 " href="../../templates/admin/index.html">
                Admin
                <svg class="shrink-0 size-3.5 ms-auto opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="m12 5 7 7-7 7"></path>
                </svg>
                </a>
                <a class="group flex items-center gap-x-1.5 py-1.5 px-2 rounded-md text-[13px] text-gray-200 hover:bg-neutral-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700  " href="../../templates/ai-prompt/ai-with-sidebar.html">
                AI Prompt
                <svg class="shrink-0 size-3.5 ms-auto opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="m12 5 7 7-7 7"></path>
                </svg>
                </a>
            </div>
            </div>
        </div>
        <!-- End Dropdown -->
        </div>
        <!-- End Templates Dropdown -->
    </div>
    <!-- End Button Group -->
    </div>

    <!-- JS Implementing Plugins -->

    <!-- JS PLUGINS -->
    <!-- Required plugins -->
    <script src="../../assets/vendor/preline/dist/index.js?v=1.0.0"></script>
    <!-- Apexcharts -->
    <script src="../../assets/vendor/lodash/lodash.min.js"></script>
    <script src="../../assets/vendor/apexcharts/dist/apexcharts.min.js"></script>
    <script src="../../assets/js/hs-apexcharts-helpers.js"></script>

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

    <!-- JS THIRD PARTY PLUGINS -->
    <!-- Google Analytics. Global site tag (gtag.js) -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-B73TDMXKF5"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());
    gtag('config', 'G-B73TDMXKF5');
    </script>

<svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M-1 230.73000000000002L-1 230.73000000000002L60.60453657670454 230.73000000000002L121.20907315340908 230.73000000000002L181.81360973011363 230.73000000000002L242.41814630681816 230.73000000000002L303.0226828835227 230.73000000000002L363.62721946022725 230.73000000000002L424.2317560369318 230.73000000000002L484.8362926136363 230.73000000000002L545.4408291903409 230.73000000000002L606.0453657670454 230.73000000000002L666.64990234375 230.73000000000002C666.64990234375 230.73000000000002 666.64990234375 230.73000000000002 666.64990234375 230.73000000000002 "></path></svg></body>
</html>
