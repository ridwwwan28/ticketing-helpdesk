<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <style>
        .dt-layout-row:has(.dt-search),
        .dt-layout-row:has(.dt-length),
        .dt-layout-row:has(.dt-paging) {
            display: none !important;
        }
    </style>
    <link href="https://unpkg.com/preline@2.7.0/dist/preline.min.css" rel="stylesheet" />

    <title>DANPAC TICKET</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/png">
</head>

<body class="bg-gray-200">
    <!-- ========== HEADER ========== -->
    <header
        class="sticky top-0 inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap z-[48] w-full bg-white border-b text-sm py-2.5 lg:ps-[260px]">
        <nav class="px-4 sm:px-6 flex basis-full items-center w-full mx-auto">
            <div class="me-5 lg:me-0 lg:hidden">
                <!-- Logo -->
                @if (auth()->user()->role == 'user')
                    <a class="flex-none rounded-md text-xl inline-block font-semibold focus:outline-none focus:opacity-80"
                        href="/home" aria-label="Danpac">
                        <img src="{{ asset('img/danpac-logo-blue.png') }}" alt="Danpac Logo" width="200">
                    </a>
                @else
                    <a class="flex-none rounded-md text-xl inline-block font-semibold focus:outline-none focus:opacity-80"
                        href="/dashboard" aria-label="Danpac">
                        <img src="{{ asset('img/danpac-logo-blue.png') }}" alt="Danpac Logo" width="200">
                    </a>
                @endif
                <!-- End Logo -->

                <div class="lg:hidden ms-1">

                </div>
            </div>

            <div class="w-full flex items-center justify-end ms-auto md:justify-between gap-x-1 md:gap-x-3">

                <div class="hidden md:block">
                    <!-- Search Input -->

                    <!-- End Search Input -->
                </div>

                <div class="flex flex-row items-center justify-end gap-1">
                    <div>
                        <p class="text-sm font-semibold uppercase text-gray-800">{{ auth()->user()->name }}</p>
                    </div>
                    <button type="button"
                        class="size-[38px] relative inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none">
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9" />
                            <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0" />
                        </svg>
                        <span class="sr-only">Notifications</span>
                    </button>

                    <!-- Dropdown -->
                    <div class="hs-dropdown [--placement:bottom-right] relative inline-flex">
                        <button id="hs-dropdown-account" type="button"
                            class="size-[38px] inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 focus:outline-none disabled:opacity-50 disabled:pointer-events-none"
                            aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                            <img class="shrink-0 size-[38px] rounded-full" src="{{ asset('img/user-icon.jpg') }}"
                                alt="Avatar">
                        </button>

                        <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg mt-2 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full"
                            role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-account">
                            <div class="py-3 px-5 bg-gray-100 rounded-t-lg">
                                <p class="text-sm text-gray-500">Signed in as</p>
                                <p class="text-sm font-medium text-gray-800">{{ auth()->user()->email }}</p>
                            </div>
                            <div class="p-1.5 space-y-0.5">
                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                                    href="#">
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9" />
                                        <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0" />
                                    </svg>
                                    Notifications
                                </a>
                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                                    href="#">
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="18" cy="15" r="3" />
                                        <circle cx="9" cy="7" r="4" />
                                        <path d="M10 15H6a4 4 0 0 0-4 4v2" />
                                        <path d="m21.7 16.4-.9-.3" />
                                        <path d="m15.2 13.9-.9-.3" />
                                        <path d="m16.6 18.7.3-.9" />
                                        <path d="m19.1 12.2.3-.9" />
                                        <path d="m19.6 18.7-.4-1" />
                                        <path d="m16.8 12.3-.4-1" />
                                        <path d="m14.3 16.6 1-.4" />
                                        <path d="m20.7 13.8 1-.4" />
                                    </svg>
                                    Account
                                </a>
                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                                    href="/logout" onclick="return confirm('Anda yakin akan logout?')">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-log-out">
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                                        <polyline points="16 17 21 12 16 7" />
                                        <line x1="21" x2="9" y1="12" y2="12" />
                                    </svg>
                                    Logout
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Dropdown -->
                </div>
            </div>
        </nav>
    </header>
    <!-- ========== MAIN CONTENT ========== -->
    <!-- Breadcrumb -->
    <div class="sticky top-0 inset-x-0 z-20 bg-white border-y px-4 sm:px-6 lg:px-8 lg:hidden">
        <div class="flex items-center py-2">
            <!-- Navigation Toggle -->
            <button type="button"
                class="size-8 flex justify-center items-center gap-x-2 border border-gray-200 text-gray-800 hover:text-gray-500 rounded-lg focus:outline-none focus:text-gray-500 disabled:opacity-50 disabled:pointer-events-none"
                aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-application-sidebar"
                aria-label="Toggle navigation" data-hs-overlay="#hs-application-sidebar">
                <span class="sr-only">Toggle Navigation</span>
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <rect width="18" height="18" x="3" y="3" rx="2" />
                    <path d="M15 3v18" />
                    <path d="m8 9 3 3-3 3" />
                </svg>
            </button>
            <!-- End Navigation Toggle -->

            <!-- Breadcrumb -->
            <ol class="ms-3 flex items-center whitespace-nowrap">
                @if (auth()->user()->role == 'user')
                    <li class="flex items-center text-sm text-gray-800">
                        Home
                        <svg class="shrink-0 mx-3 overflow-visible size-2.5 text-gray-400" width="16"
                            height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </li>
                @else
                    <li class="flex items-center text-sm text-gray-800">
                        Dashboard
                        <svg class="shrink-0 mx-3 overflow-visible size-2.5 text-gray-400" width="16"
                            height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </li>
                @endif
                <li class="text-sm font-semibold text-gray-800 truncate" aria-current="page">
                    Ticket
                </li>
            </ol>
            <!-- End Breadcrumb -->
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Sidebar -->
    <div id="hs-application-sidebar"
        class="hs-overlay [--auto-close:lg]
hs-overlay-open:translate-x-0
  -translate-x-full transition-all duration-300 transform
  w-[260px] h-full
  hidden
  fixed inset-y-0 start-0 z-[60]
  bg-[#003adc]
  lg:block lg:translate-x-0 lg:end-auto lg:bottom-0"
        role="dialog" tabindex="-1" aria-label="Sidebar">
        <div class="relative flex flex-col h-full max-h-full">
            <div class="px-8 pt-4">
                <!-- Logo -->
                @if (auth()->user()->role == 'user')
                    <a class="flex-none rounded-xl text-xl inline-block font-semibold focus:outline-none focus:opacity-80"
                        href="/home" aria-label="Preline">
                        <img src="{{ asset('img/danpac-logo-wh.png') }}" alt="Danpac Logo" width="150">
                    </a>
                @else
                    <a class="flex-none rounded-xl text-xl inline-block font-semibold focus:outline-none focus:opacity-80"
                        href="/dashboard" aria-label="Preline">
                        <img src="{{ asset('img/danpac-logo-wh.png') }}" alt="Danpac Logo" width="150">
                    </a>
                @endif
                <!-- End Logo -->
            </div>

            <!-- Content -->
            <div
                class="h-full overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300">
                <nav class="hs-accordion-group p-3 w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
                    <ul class="flex flex-col space-y-1">
                        @if (auth()->user()->role == 'superadmin' || auth()->user()->role == 'admin')
                            <li>
                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-white rounded-lg hover:bg-white/10 focus:outline-none focus:bg-white/10"
                                    href="/dashboard">
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                                        <polyline points="9 22 9 12 15 12 15 22" />
                                    </svg>
                                    Dashboard
                                </a>
                            </li>
                        @else
                            <li>
                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-white rounded-lg hover:bg-white/10 focus:outline-none focus:bg-white/10"
                                    href="/home">
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                                        <polyline points="9 22 9 12 15 12 15 22" />
                                    </svg>
                                    Home
                                </a>
                            </li>
                        @endif

                        <li class="hs-accordion" id="tickets-accordion">
                            <a class="w-full flex items-center gap-x-3.5 py-2 px-2.5 bg-white/20 text-sm text-white rounded-lg hover:bg-white/10 focus:outline-none focus:bg-white/10"
                                href="/ticket">
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect width="20" height="14" x="2" y="7" rx="2" ry="2" />
                                    <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16" />
                                </svg>
                                Ticket
                            </a>
                        </li>

                        @if (auth()->user()->role == 'superadmin')
                            <li class="hs-accordion" id="users-accordion">
                                <a href="/users"
                                    class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-white rounded-lg hover:bg-white/10 focus:outline-none focus:bg-white/10">
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                        <circle cx="9" cy="7" r="4" />
                                        <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                    </svg>
                                    Users
                                </a>
                            </li>
                        @endif

                        @if (auth()->user()->role == 'superadmin')
                            <li class="hs-accordion" id="users-accordion">
                                <a href="/complaintype"
                                    class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-white rounded-lg hover:bg-white/10 focus:outline-none focus:bg-white/10">
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                        <circle cx="9" cy="7" r="4" />
                                        <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                    </svg>
                                    Complain Type
                                </a>
                            </li>
                        @endif

                        @if (auth()->user()->role == 'superadmin')
                            <li class="hs-accordion" id="account-accordion">
                                <button type="button"
                                    class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-white rounded-lg hover:bg-white/10 focus:outline-none focus:bg-white/10"
                                    aria-expanded="true" aria-controls="account-accordion-child">

                                    <svg class="shrink-0 mt-0.5 size-4" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-list-icon lucide-list">
                                        <path d="M3 12h.01" />
                                        <path d="M3 18h.01" />
                                        <path d="M3 6h.01" />
                                        <path d="M8 12h13" />
                                        <path d="M8 18h13" />
                                        <path d="M8 6h13" />
                                    </svg>
                                    Master Data

                                    <svg class="hs-accordion-active:block ms-auto hidden size-4"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m18 15-6-6-6 6" />
                                    </svg>

                                    <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m6 9 6 6 6-6" />
                                    </svg>
                                </button>

                                <div id="account-accordion-child"
                                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden"
                                    role="region" aria-labelledby="account-accordion">
                                    <ul class="ps-8 pt-1 space-y-1">
                                        <li>
                                            <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-white rounded-lg hover:bg-white/10 focus:outline-none focus:bg-white/10"
                                                href="#">
                                                Link 1
                                            </a>
                                        </li>
                                        <li>
                                            <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-white rounded-lg hover:bg-white/10 focus:outline-none focus:bg-white/10"
                                                href="#">
                                                Link 2
                                            </a>
                                        </li>
                                        <li>
                                            <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-white rounded-lg hover:bg-white/10 focus:outline-none focus:bg-white/10"
                                                href="#">
                                                Link 3
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        @endif

                        <li><a class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-white rounded-lg hover:bg-white/10"
                                href="#">
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" />
                                    <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
                                </svg>
                                Documentation
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- End Content -->
        </div>
    </div>
    <!-- End Sidebar -->

    <!-- Content -->
    <div class="w-[calc(100% - 260px)] ml-2 mr-2 lg:ml-[266px]">
        <!-- your content goes here ... -->
        <!-- Table Section -->

        <!-- Card -->
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
                        @yield('konten')
                    </div>
                </div>
            </div>
        </div>
        <!-- End Card -->

        <! -- End Table Section -->
    </div>



    <!-- End Content -->
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        //message with sweetalert
        @if (session('success'))
            Swal.fire({
                icon: "success",
                title: "BERHASIL",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @elseif (session('error'))
            Swal.fire({
                icon: "error",
                title: "GAGAL!",
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 2000
            })
        @endif
    </script>


    <!-- End Javascript -->
</body>

</html>
