<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>DANPAC TICKET</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/png">
</head>

<body class="bg-gray-50">
    <!-- ========== HEADER ========== -->
    <header
        class="sticky top-0 inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap z-[48] w-full bg-white border-b text-sm py-2.5 lg:ps-[260px]">
        <nav class="px-4 sm:px-6 flex basis-full items-center w-full mx-auto">
            <div class="me-5 lg:me-0 lg:hidden">
                <!-- Logo -->
                <a class="flex-none rounded-md text-xl inline-block font-semibold focus:outline-none focus:opacity-80"
                    href="/dashboard" aria-label="Preline">
                    <img src="img/danpac-logo-blue.png" alt="Danpac Logo" width="200">
                </a>
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
                                    href="/logout">
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
                <li class="flex items-center text-sm text-gray-800">
                    Dashboard
                    <svg class="shrink-0 mx-3 overflow-visible size-2.5 text-gray-400" width="16" height="16"
                        viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </li>
                {{-- <li class="text-sm font-semibold text-gray-800 truncate" aria-current="page">
                    Dashboard
                </li> --}}
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
                <a class="flex-none rounded-xl text-xl inline-block font-semibold focus:outline-none focus:opacity-80"
                    href="#" aria-label="Preline">
                    <img src="{{ asset('img/danpac-logo-wh.png') }}" alt="Danpac Logo" width="150">
                </a>
                <!-- End Logo -->
            </div>

            <!-- Content -->
            <div
                class="h-full overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300">
                <nav class="hs-accordion-group p-3 w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
                    <ul class="flex flex-col space-y-1">
                        <li>
                            <a class="flex items-center gap-x-3.5 py-2 px-2.5 bg-white/20 text-sm text-white rounded-lg hover:bg-white/10 focus:outline-none focus:bg-white/10"
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

                        <li class="hs-accordion" id="projects-accordion">
                            <a class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-white rounded-lg hover:bg-white/10 focus:outline-none focus:bg-white/10"
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
    <div class="w-[calc(100% - 260px)] ml-1 mr-1 lg:ml-[264px]">
        <!-- your content goes here ... -->
        <!-- Card Section -->
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto border-b">
            <div class="mb-2">
                <p class="tracking-wide font-medium text-xl">
                    DASHBOARD
                </p>
            </div>
            <!-- Grid -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                <!-- Card -->
                <div class="flex flex-col bg-white border shadow-sm rounded-xl">
                    <div class="p-4 md:p-5 flex justify-between gap-x-3">
                        <div>
                            <p class="text-xs uppercase tracking-wide text-gray-500">
                                Total Ticket
                            </p>
                            <div class="mt-1 flex items-center gap-x-2">
                                <h3 class="mt-1 text-xl font-medium text-gray-800">
                                    {{ $alltickets->count() }}
                                </h3>
                            </div>
                        </div>
                        <div
                            class="shrink-0 flex justify-center items-center size-[46px] bg-blue-600 text-white rounded-full">
                            <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12s2.545-5 7-5c4.454 0 7 5 7 5s-2.546 5-7 5c-4.455 0-7-5-7-5z" />
                                <path d="M12 13a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                <path d="M21 17v2a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-2" />
                                <path d="M21 7V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2" />
                            </svg>
                        </div>
                    </div>

                    <a class="py-3 px-4 md:px-5 inline-flex justify-between items-center text-sm text-gray-600 border-t border-gray-200 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 rounded-b-xl"
                        href="#">
                        View reports
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </a>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="flex flex-col bg-white border shadow-sm rounded-xl">
                    <div class="p-4 md:p-5 flex justify-between gap-x-3">
                        <div>
                            <p class="text-xs uppercase tracking-wide text-gray-500">
                                Rata-rata Penyelesaian
                            </p>
                            <div class="mt-1 flex items-center gap-x-2">
                                <h3 class="mt-1 text-xl font-medium text-gray-800">
                                    29%
                                </h3>
                            </div>
                        </div>
                        <div
                            class="shrink-0 flex justify-center items-center size-[46px] bg-blue-600 text-white rounded-full">
                            <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 22h14" />
                                <path d="M5 2h14" />
                                <path d="M17 22v-4.172a2 2 0 0 0-.586-1.414L12 12l-4.414 4.414A2 2 0 0 0 7 17.828V22" />
                                <path d="M7 2v4.172a2 2 0 0 0 .586 1.414L12 12l4.414-4.414A2 2 0 0 0 17 6.172V2" />
                            </svg>
                        </div>
                    </div>

                    <a class="py-3 px-4 md:px-5 inline-flex justify-between items-center text-sm text-gray-600 border-t border-gray-200 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 rounded-b-xl"
                        href="#">
                        View reports
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </a>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="flex flex-col bg-white border shadow-sm rounded-xl">
                    <div class="p-4 md:p-5 flex justify-between gap-x-3">
                        <div>
                            <p class="text-xs uppercase tracking-wide text-gray-500">
                                Klasifikasi Kendala
                            </p>
                            <div class="mt-1 flex items-center gap-x-2">
                                <h3 class="text-xl sm:text-2xl font-medium text-gray-800">
                                    56.8%
                                </h3>
                            </div>
                        </div>
                        <div
                            class="shrink-0 flex justify-center items-center size-[46px] bg-blue-600 text-white rounded-full">
                            <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 11V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h6" />
                                <path d="m12 12 4 10 1.7-4.3L22 16Z" />
                            </svg>
                        </div>
                    </div>

                    <a class="py-3 px-4 md:px-5 inline-flex justify-between items-center text-sm text-gray-600 border-t border-gray-200 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 rounded-b-xl"
                        href="#">
                        View reports
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </a>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="flex flex-col bg-white border shadow-sm rounded-xl">
                    <div class="p-4 md:p-5 flex justify-between gap-x-3">
                        <div>
                            <p class="text-xs uppercase tracking-wide text-gray-500">
                                Total users
                            </p>
                            <div class="mt-1 flex items-center gap-x-2">
                                <h3 class="text-xl sm:text-2xl font-medium text-gray-800">
                                    {{ $allusers->count() }}
                                </h3>
                            </div>
                        </div>
                        <div
                            class="shrink-0 flex justify-center items-center size-[46px] bg-blue-600 text-white rounded-full">
                            <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            </svg>
                        </div>
                    </div>

                    <a class="py-3 px-4 md:px-5 inline-flex justify-between items-center text-sm text-gray-600 border-t border-gray-200 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 rounded-b-xl"
                        href="#">
                        View reports
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </a>
                </div>
                <!-- End Card -->
            </div>
            <!-- End Grid -->
        </div>
        <!-- End Card Section -->

        <!-- Card Section -->
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto border-b">
            <div class="mb-2">
                <p class="tracking-wide font-medium text-xl">
                    TRAFFIC
                </p>
            </div>
            <!-- Grid -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                <!-- Card Ticket Open -->
                <div class="flex flex-col bg-white border shadow-sm rounded-xl">
                    <div class="p-4 md:p-5 flex justify-between gap-x-3">
                        <div>
                            <p class="text-xs uppercase tracking-wide text-gray-500">
                                Ticket Open
                            </p>
                            <div class="mt-1 flex items-center gap-x-2">
                                <h3 class="mt-1 text-xl font-medium text-gray-800">
                                    {{ $ticketopen->count() }}
                                </h3>
                            </div>
                        </div>
                        <div
                            class="shrink-0 flex justify-center items-center size-[46px] bg-blue-600 text-white rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="shrink-0 size-5 lucide lucide-scroll-text-icon lucide-scroll-text">
                                <path d="M15 12h-5" />
                                <path d="M15 8h-5" />
                                <path d="M19 17V5a2 2 0 0 0-2-2H4" />
                                <path
                                    d="M8 21h12a2 2 0 0 0 2-2v-1a1 1 0 0 0-1-1H11a1 1 0 0 0-1 1v1a2 2 0 1 1-4 0V5a2 2 0 1 0-4 0v2a1 1 0 0 0 1 1h3" />
                            </svg>
                        </div>
                    </div>

                    <a class="py-3 px-4 md:px-5 inline-flex justify-between items-center text-sm text-gray-600 border-t border-gray-200 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 rounded-b-xl"
                        href="#" aria-haspopup="dialog" aria-expanded="false"
                        aria-controls="ticket-open-backdrop-modal" data-hs-overlay="#ticket-open-backdrop-modal">
                        View reports
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </a>
                </div>
                <!-- End Card -->

                <!-- Card Ticket In Process -->
                <div class="flex flex-col bg-white border shadow-sm rounded-xl">
                    <div class="p-4 md:p-5 flex justify-between gap-x-3">
                        <div>
                            <p class="text-xs uppercase tracking-wide text-gray-500">
                                Ticket In Process
                            </p>
                            <div class="mt-1 flex items-center gap-x-2">
                                <h3 class="mt-1 text-xl font-medium text-gray-800">
                                    {{ $ticketprocess->count() }}
                                </h3>
                            </div>
                        </div>
                        <div
                            class="shrink-0 flex justify-center items-center size-[46px] bg-blue-600 text-white rounded-full">
                            <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 22h14" />
                                <path d="M5 2h14" />
                                <path d="M17 22v-4.172a2 2 0 0 0-.586-1.414L12 12l-4.414 4.414A2 2 0 0 0 7 17.828V22" />
                                <path d="M7 2v4.172a2 2 0 0 0 .586 1.414L12 12l4.414-4.414A2 2 0 0 0 17 6.172V2" />
                            </svg>
                        </div>
                    </div>

                    <a class="py-3 px-4 md:px-5 inline-flex justify-between items-center text-sm text-gray-600 border-t border-gray-200 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 rounded-b-xl"
                        href="#" aria-haspopup="dialog" aria-expanded="false"
                        aria-controls="ticket-process-backdrop-modal"
                        data-hs-overlay="#ticket-process-backdrop-modal">
                        View reports
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </a>
                </div>
                <!-- End Card -->

                <!-- Card Ticket Closed -->
                <div class="flex flex-col bg-white border shadow-sm rounded-xl">
                    <div class="p-4 md:p-5 flex justify-between gap-x-3">
                        <div>
                            <p class="text-xs uppercase tracking-wide text-gray-500">
                                Ticket Closed
                            </p>
                            <div class="mt-1 flex items-center gap-x-2">
                                <h3 class="mt-1 text-xl font-medium text-gray-800">
                                    {{ $ticketclosed->count() }}
                                </h3>
                            </div>
                        </div>
                        <div
                            class="shrink-0 flex justify-center items-center size-[46px] bg-blue-600 text-white rounded-full">
                            <svg class="shrink-0 size-5 lucide lucide-file-check-icon lucide-file-check"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z" />
                                <path d="M14 2v4a2 2 0 0 0 2 2h4" />
                                <path d="m9 15 2 2 4-4" />
                            </svg>
                        </div>
                    </div>

                    <a class="py-3 px-4 md:px-5 inline-flex justify-between items-center text-sm text-gray-600 border-t border-gray-200 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 rounded-b-xl"
                        href="#" aria-haspopup="dialog" aria-expanded="false"
                        aria-controls="ticket-closed-backdrop-modal" data-hs-overlay="#ticket-closed-backdrop-modal">
                        View reports
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </a>
                </div>
                <!-- End Card -->

            </div>
            <!-- End Grid -->
        </div>
        <!-- End Card Section -->

    </div>
    <!-- End Content -->
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- ========== MODALS ========== -->
    <!-- Modals for show ticket open -->
    <div id="ticket-open-backdrop-modal"
        class="hs-overlay [--overlay-backdrop:static] hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
        role="dialog" tabindex="-1" aria-labelledby="ticket-open-backdrop-modal-label"
        data-hs-overlay-keyboard="false">
        <div
            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg md:max-w-2xl sm:w-full m-3 sm:mx-auto">
            <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                <div class="flex justify-between items-center py-3 px-4 border-b">
                    <h3 id="ticket-open-backdrop-modal-label" class="font-bold text-gray-800">
                        Antrian Ticket
                    </h3>
                    <button type="button"
                        class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                        aria-label="Close" data-hs-overlay="#ticket-open-backdrop-modal">
                        <span class="sr-only">Close</span>
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>

                <div class="p-4 overflow-y-auto">
                    <!-- Content Modal -->
                    <div class="flex justify-center mx-auto">
                        <table class="min-w-full divide-y divide-gray-200 hidden md:table">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="ps-6 lg:ps-1 pe-6 py-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                                No
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                                No. Ticket
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                                Pengguna
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                                Kategori Kendala
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                                Status
                                            </span>
                                        </div>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($dtl_tickets_open as $no => $ticket)
                                    <tr class="odd:bg-white even:bg-gray-100 hover:bg-gray-100">
                                        <td class="size-px whitespace-nowrap">
                                            <div class="py-2 px-2">
                                                <span class="text-xs text-gray-800">{{ $no + 1 }}</span>
                                            </div>
                                        </td>

                                        <td class="size-px whitespace-nowrap">
                                            <div class="py-2 px-2">
                                                <span class="text-xs text-gray-800">{{ $ticket->no_tiket }}</span>
                                            </div>
                                        </td>

                                        <td class="size-px whitespace-nowrap">
                                            <div class="py-2 px-2">
                                                <span class="text-xs text-gray-800">{{ $ticket->name }}</span>
                                            </div>
                                        </td>

                                        <td class="size-px whitespace-nowrap">
                                            <div class="py-2 px-2">
                                                <span
                                                    class="text-xs text-gray-800">{{ $ticket->tipe_komplain }}</span>
                                            </div>
                                        </td>

                                        <td class="size-px whitespace-nowrap">
                                            <div class="py-2 px-2">
                                                @if ($ticket->ticket_status == 'OPEN')
                                                    <span
                                                        class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-red-100 text-red-800 rounded-full">
                                                        <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg"
                                                            width="16" height="16" fill="currentColor"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                                        </svg>
                                                        {{ $ticket->ticket_status }}
                                                    </span>
                                                @endif

                                                @if ($ticket->ticket_status == 'IN PROCESS')
                                                    <span
                                                        class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-orange-200 text-orange-800 rounded-full">
                                                        {{-- <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" viewBox="0 0 16 16" fill="currentColor">
                                                <path
                                                    d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z" />
                                            </svg> --}}

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" viewBox="0 0 24 16" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="lucide lucide-user-cog-icon lucide-user-cog">
                                                            <path d="M10 15H6a4 4 0 0 0-4 4v2" />
                                                            <path d="m14.305 16.53.923-.382" />
                                                            <path d="m15.228 13.852-.923-.383" />
                                                            <path d="m16.852 12.228-.383-.923" />
                                                            <path d="m16.852 17.772-.383.924" />
                                                            <path d="m19.148 12.228.383-.923" />
                                                            <path d="m19.53 18.696-.382-.924" />
                                                            <path d="m20.772 13.852.924-.383" />
                                                            <path d="m20.772 16.148.924.383" />
                                                            <circle cx="18" cy="15" r="3" />
                                                            <circle cx="9" cy="7" r="4" />
                                                        </svg>
                                                        {{ $ticket->ticket_status }}
                                                    </span>
                                                @endif

                                                @if ($ticket->ticket_status == 'CLOSED')
                                                    <span
                                                        class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full">
                                                        <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg"
                                                            width="16" height="16" fill="currentColor"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                        </svg>
                                                        {{ $ticket->ticket_status }}
                                                    </span>
                                                @endif

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- LIST UNTUK MOBILE -->
                    <div class="md:hidden space-y-4">
                        @foreach ($dtl_tickets_open as $no => $ticket)
                            <div class="odd:bg-white even:bg-gray-100 hover:bg-gray-100 m-1 p-4 border rounded shadow">
                                <div class="text-sm">
                                    <div><strong>NO :</strong> {{ $no + 1 }}</div>
                                    <div><strong>NO. TICKET :</strong> {{ $ticket->no_tiket }}</div>
                                    <div><strong>PENGGUNA :</strong> {{ $ticket->name }}</div>
                                    <div><strong>KATEGORI KENDALA :</strong> {{ $ticket->tipe_komplain }}</div>
                                    <div>
                                        <strong>Status :</strong>
                                        @if ($ticket->ticket_status == 'OPEN')
                                            <span class="text-red-800 font-semibold">
                                                {{ $ticket->ticket_status }}</span>
                                        @endif

                                        @if ($ticket->ticket_status == 'IN PROCESS')
                                            <span class="text-orange-600 font-semibold">
                                                {{ $ticket->ticket_status }}</span>
                                        @endif

                                        @if ($ticket->ticket_status == 'CLOSED')
                                            <span class="text-green-600 font-semibold">
                                                {{ $ticket->ticket_status }}</span>
                                        @endif
                                    </div>
                                    <div class="mt-4 gap-4">
                                        <a href="{{ route('ticket.show', $ticket->id) }}"
                                            class="inline-flex items-center gap-x-1 text-xs font-medium bg-blue-500 rounded-lg py-1 px-1.5 text-white decoration-2 hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-list">
                                                <path d="M3 12h.01" />
                                                <path d="M3 18h.01" />
                                                <path d="M3 6h.01" />
                                                <path d="M8 12h13" />
                                                <path d="M8 18h13" />
                                                <path d="M8 6h13" />
                                            </svg>
                                            DETAIL
                                        </a>

                                        @if (auth()->user()->role != 'user' && $ticket->ticket_status != 'CLOSED')
                                            <a href="{{ route('ticket.edit', $ticket->id) }}"
                                                class="inline-flex items-center gap-x-1 text-xs font-medium bg-orange-400 rounded-lg py-1 px-1.5 text-white decoration-2 hover:bg-orange-500 focus:outline-none focus:bg-orange-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-pencil">
                                                    <path
                                                        d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                                                    <path d="m15 5 4 4" />
                                                </svg>
                                                EDIT
                                            </a>
                                        @endif

                                        @if (auth()->user()->role != 'user' && $ticket->ticket_status != 'CLOSED')
                                            <form method="POST" action="{{ route('ticket.destroy', $ticket->id) }}"
                                                onclick="return confirm('Apakah Anda Yakin?')"
                                                class="inline-flex items-center">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="inline-flex items-center gap-x-1 text-xs font-medium bg-red-500 rounded-lg py-1 px-1.5 text-white decoration-2 hover:bg-red-600 focus:outline-none focus:bg-red-600">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                        height="13" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="lucide lucide-trash-2">
                                                        <path d="M3 6h18" />
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                                                        <line x1="10" x2="10" y1="11"
                                                            y2="17" />
                                                        <line x1="14" x2="14" y1="11"
                                                            y2="17" />
                                                    </svg>
                                                    HAPUS
                                                </button>
                                            </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- End Content Modal -->
                </div>
                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">

                </div>

            </div>
        </div>
    </div>
    <!-- End Modals -->

    <!-- Modals for show ticket process -->
    <div id="ticket-process-backdrop-modal"
        class="hs-overlay [--overlay-backdrop:static] hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
        role="dialog" tabindex="-1" aria-labelledby="ticket-process-backdrop-modal-label"
        data-hs-overlay-keyboard="false">
        <div
            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg md:max-w-2xl sm:w-full m-3 sm:mx-auto">
            <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                <div class="flex justify-between items-center py-3 px-4 border-b">
                    <h3 id="ticket-process-backdrop-modal-label" class="font-bold text-gray-800">
                        Antrian Ticket
                    </h3>
                    <button type="button"
                        class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                        aria-label="Close" data-hs-overlay="#ticket-process-backdrop-modal">
                        <span class="sr-only">Close</span>
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>

                <div class="p-4 overflow-y-auto">
                    <!-- Content Modal -->
                    <div class="flex justify-center mx-auto">
                        <table class="min-w-full divide-y divide-gray-200 hidden md:table">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="ps-6 lg:ps-1 pe-6 py-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                                No
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                                No. Ticket
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                                Pengguna
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                                Kategori Kendala
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                                Status
                                            </span>
                                        </div>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($dtl_tickets_process as $no => $ticket)
                                    <tr class="odd:bg-white even:bg-gray-100 hover:bg-gray-100">
                                        <td class="size-px whitespace-nowrap">
                                            <div class="py-2 px-2">
                                                <span class="text-xs text-gray-800">{{ $no + 1 }}</span>
                                            </div>
                                        </td>

                                        <td class="size-px whitespace-nowrap">
                                            <div class="py-2 px-2">
                                                <span class="text-xs text-gray-800">{{ $ticket->no_tiket }}</span>
                                            </div>
                                        </td>

                                        <td class="size-px whitespace-nowrap">
                                            <div class="py-2 px-2">
                                                <span class="text-xs text-gray-800">{{ $ticket->name }}</span>
                                            </div>
                                        </td>

                                        <td class="size-px whitespace-nowrap">
                                            <div class="py-2 px-2">
                                                <span
                                                    class="text-xs text-gray-800">{{ $ticket->tipe_komplain }}</span>
                                            </div>
                                        </td>

                                        <td class="size-px whitespace-nowrap">
                                            <div class="py-2 px-2">
                                                @if ($ticket->ticket_status == 'OPEN')
                                                    <span
                                                        class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-red-100 text-red-800 rounded-full">
                                                        <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg"
                                                            width="16" height="16" fill="currentColor"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                                        </svg>
                                                        {{ $ticket->ticket_status }}
                                                    </span>
                                                @endif

                                                @if ($ticket->ticket_status == 'IN PROCESS')
                                                    <span
                                                        class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-orange-200 text-orange-800 rounded-full">
                                                        {{-- <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" viewBox="0 0 16 16" fill="currentColor">
                                                <path
                                                    d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z" />
                                            </svg> --}}

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" viewBox="0 0 24 16" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="lucide lucide-user-cog-icon lucide-user-cog">
                                                            <path d="M10 15H6a4 4 0 0 0-4 4v2" />
                                                            <path d="m14.305 16.53.923-.382" />
                                                            <path d="m15.228 13.852-.923-.383" />
                                                            <path d="m16.852 12.228-.383-.923" />
                                                            <path d="m16.852 17.772-.383.924" />
                                                            <path d="m19.148 12.228.383-.923" />
                                                            <path d="m19.53 18.696-.382-.924" />
                                                            <path d="m20.772 13.852.924-.383" />
                                                            <path d="m20.772 16.148.924.383" />
                                                            <circle cx="18" cy="15" r="3" />
                                                            <circle cx="9" cy="7" r="4" />
                                                        </svg>
                                                        {{ $ticket->ticket_status }}
                                                    </span>
                                                @endif

                                                @if ($ticket->ticket_status == 'CLOSED')
                                                    <span
                                                        class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full">
                                                        <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg"
                                                            width="16" height="16" fill="currentColor"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                        </svg>
                                                        {{ $ticket->ticket_status }}
                                                    </span>
                                                @endif

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- LIST UNTUK MOBILE -->
                    <div class="md:hidden space-y-4">
                        @foreach ($dtl_tickets_process as $no => $ticket)
                            <div class="odd:bg-white even:bg-gray-100 hover:bg-gray-100 m-1 p-4 border rounded shadow">
                                <div class="text-sm">
                                    <div><strong>NO :</strong> {{ $no + 1 }}</div>
                                    <div><strong>NO. TICKET :</strong> {{ $ticket->no_tiket }}</div>
                                    <div><strong>PENGGUNA :</strong> {{ $ticket->name }}</div>
                                    <div><strong>KATEGORI KENDALA :</strong> {{ $ticket->tipe_komplain }}</div>
                                    <div>
                                        <strong>Status :</strong>
                                        @if ($ticket->ticket_status == 'OPEN')
                                            <span class="text-red-800 font-semibold">
                                                {{ $ticket->ticket_status }}</span>
                                        @endif

                                        @if ($ticket->ticket_status == 'IN PROCESS')
                                            <span class="text-orange-600 font-semibold">
                                                {{ $ticket->ticket_status }}</span>
                                        @endif

                                        @if ($ticket->ticket_status == 'CLOSED')
                                            <span class="text-green-600 font-semibold">
                                                {{ $ticket->ticket_status }}</span>
                                        @endif
                                    </div>
                                    <div class="mt-4 gap-4">
                                        <a href="{{ route('ticket.show', $ticket->id) }}"
                                            class="inline-flex items-center gap-x-1 text-xs font-medium bg-blue-500 rounded-lg py-1 px-1.5 text-white decoration-2 hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-list">
                                                <path d="M3 12h.01" />
                                                <path d="M3 18h.01" />
                                                <path d="M3 6h.01" />
                                                <path d="M8 12h13" />
                                                <path d="M8 18h13" />
                                                <path d="M8 6h13" />
                                            </svg>
                                            DETAIL
                                        </a>

                                        @if (auth()->user()->role != 'user' && $ticket->ticket_status != 'CLOSED')
                                            <a href="{{ route('ticket.edit', $ticket->id) }}"
                                                class="inline-flex items-center gap-x-1 text-xs font-medium bg-orange-400 rounded-lg py-1 px-1.5 text-white decoration-2 hover:bg-orange-500 focus:outline-none focus:bg-orange-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-pencil">
                                                    <path
                                                        d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                                                    <path d="m15 5 4 4" />
                                                </svg>
                                                EDIT
                                            </a>
                                        @endif

                                        @if (auth()->user()->role != 'user' && $ticket->ticket_status != 'CLOSED')
                                            <form method="POST" action="{{ route('ticket.destroy', $ticket->id) }}"
                                                onclick="return confirm('Apakah Anda Yakin?')"
                                                class="inline-flex items-center">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="inline-flex items-center gap-x-1 text-xs font-medium bg-red-500 rounded-lg py-1 px-1.5 text-white decoration-2 hover:bg-red-600 focus:outline-none focus:bg-red-600">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                        height="13" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="lucide lucide-trash-2">
                                                        <path d="M3 6h18" />
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                                                        <line x1="10" x2="10" y1="11"
                                                            y2="17" />
                                                        <line x1="14" x2="14" y1="11"
                                                            y2="17" />
                                                    </svg>
                                                    HAPUS
                                                </button>
                                            </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- End Content Modal -->
                </div>
                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">

                </div>

            </div>
        </div>
    </div>
    <!-- End Modals -->

    <!-- Modals for show ticket closed -->
    <div id="ticket-closed-backdrop-modal"
        class="hs-overlay [--overlay-backdrop:static] hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
        role="dialog" tabindex="-1" aria-labelledby="ticket-closed-backdrop-modal-label"
        data-hs-overlay-keyboard="false">
        <div
            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg md:max-w-2xl sm:w-full m-3 sm:mx-auto">
            <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                <div class="flex justify-between items-center py-3 px-4 border-b">
                    <h3 id="ticket-closed-backdrop-modal-label" class="font-bold text-gray-800">
                        Antrian Ticket
                    </h3>
                    <button type="button"
                        class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                        aria-label="Close" data-hs-overlay="#ticket-closed-backdrop-modal">
                        <span class="sr-only">Close</span>
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>

                <div class="p-4 overflow-y-auto">
                    <!-- Content Modal -->
                    <div class="flex justify-center mx-auto">
                        <table class="min-w-full divide-y divide-gray-200 hidden md:table">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="ps-6 lg:ps-1 pe-6 py-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                                No
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                                No. Ticket
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                                Pengguna
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                                Kategori Kendala
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                                Status
                                            </span>
                                        </div>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($dtl_tickets_closed as $no => $ticket)
                                    <tr class="odd:bg-white even:bg-gray-100 hover:bg-gray-100">
                                        <td class="size-px whitespace-nowrap">
                                            <div class="py-2 px-2">
                                                <span class="text-xs text-gray-800">{{ $no + 1 }}</span>
                                            </div>
                                        </td>

                                        <td class="size-px whitespace-nowrap">
                                            <div class="py-2 px-2">
                                                <span class="text-xs text-gray-800">{{ $ticket->no_tiket }}</span>
                                            </div>
                                        </td>

                                        <td class="size-px whitespace-nowrap">
                                            <div class="py-2 px-2">
                                                <span class="text-xs text-gray-800">{{ $ticket->name }}</span>
                                            </div>
                                        </td>

                                        <td class="size-px whitespace-nowrap">
                                            <div class="py-2 px-2">
                                                <span
                                                    class="text-xs text-gray-800">{{ $ticket->tipe_komplain }}</span>
                                            </div>
                                        </td>

                                        <td class="size-px whitespace-nowrap">
                                            <div class="py-2 px-2">
                                                @if ($ticket->ticket_status == 'OPEN')
                                                    <span
                                                        class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-red-100 text-red-800 rounded-full">
                                                        <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg"
                                                            width="16" height="16" fill="currentColor"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                                        </svg>
                                                        {{ $ticket->ticket_status }}
                                                    </span>
                                                @endif

                                                @if ($ticket->ticket_status == 'IN PROCESS')
                                                    <span
                                                        class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-orange-200 text-orange-800 rounded-full">
                                                        {{-- <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" viewBox="0 0 16 16" fill="currentColor">
                                                <path
                                                    d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z" />
                                            </svg> --}}

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" viewBox="0 0 24 16" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="lucide lucide-user-cog-icon lucide-user-cog">
                                                            <path d="M10 15H6a4 4 0 0 0-4 4v2" />
                                                            <path d="m14.305 16.53.923-.382" />
                                                            <path d="m15.228 13.852-.923-.383" />
                                                            <path d="m16.852 12.228-.383-.923" />
                                                            <path d="m16.852 17.772-.383.924" />
                                                            <path d="m19.148 12.228.383-.923" />
                                                            <path d="m19.53 18.696-.382-.924" />
                                                            <path d="m20.772 13.852.924-.383" />
                                                            <path d="m20.772 16.148.924.383" />
                                                            <circle cx="18" cy="15" r="3" />
                                                            <circle cx="9" cy="7" r="4" />
                                                        </svg>
                                                        {{ $ticket->ticket_status }}
                                                    </span>
                                                @endif

                                                @if ($ticket->ticket_status == 'CLOSED')
                                                    <span
                                                        class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full">
                                                        <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg"
                                                            width="16" height="16" fill="currentColor"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                        </svg>
                                                        {{ $ticket->ticket_status }}
                                                    </span>
                                                @endif

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- LIST UNTUK MOBILE -->
                    <div class="md:hidden space-y-4">
                        @foreach ($dtl_tickets_closed as $no => $ticket)
                            <div class="odd:bg-white even:bg-gray-100 hover:bg-gray-100 m-1 p-4 border rounded shadow">
                                <div class="text-sm">
                                    <div><strong>NO :</strong> {{ $no + 1 }}</div>
                                    <div><strong>NO. TICKET :</strong> {{ $ticket->no_tiket }}</div>
                                    <div><strong>PENGGUNA :</strong> {{ $ticket->name }}</div>
                                    <div><strong>KATEGORI KENDALA :</strong> {{ $ticket->tipe_komplain }}</div>
                                    <div>
                                        <strong>Status :</strong>
                                        @if ($ticket->ticket_status == 'OPEN')
                                            <span class="text-red-800 font-semibold">
                                                {{ $ticket->ticket_status }}</span>
                                        @endif

                                        @if ($ticket->ticket_status == 'IN PROCESS')
                                            <span class="text-orange-600 font-semibold">
                                                {{ $ticket->ticket_status }}</span>
                                        @endif

                                        @if ($ticket->ticket_status == 'CLOSED')
                                            <span class="text-green-600 font-semibold">
                                                {{ $ticket->ticket_status }}</span>
                                        @endif
                                    </div>
                                    <div class="mt-4 gap-4">
                                        <a href="{{ route('ticket.show', $ticket->id) }}"
                                            class="inline-flex items-center gap-x-1 text-xs font-medium bg-blue-500 rounded-lg py-1 px-1.5 text-white decoration-2 hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-list">
                                                <path d="M3 12h.01" />
                                                <path d="M3 18h.01" />
                                                <path d="M3 6h.01" />
                                                <path d="M8 12h13" />
                                                <path d="M8 18h13" />
                                                <path d="M8 6h13" />
                                            </svg>
                                            DETAIL
                                        </a>

                                        @if (auth()->user()->role != 'user' && $ticket->ticket_status != 'CLOSED')
                                            <a href="{{ route('ticket.edit', $ticket->id) }}"
                                                class="inline-flex items-center gap-x-1 text-xs font-medium bg-orange-400 rounded-lg py-1 px-1.5 text-white decoration-2 hover:bg-orange-500 focus:outline-none focus:bg-orange-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-pencil">
                                                    <path
                                                        d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                                                    <path d="m15 5 4 4" />
                                                </svg>
                                                EDIT
                                            </a>
                                        @endif

                                        @if (auth()->user()->role != 'user' && $ticket->ticket_status != 'CLOSED')
                                            <form method="POST" action="{{ route('ticket.destroy', $ticket->id) }}"
                                                onclick="return confirm('Apakah Anda Yakin?')"
                                                class="inline-flex items-center">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="inline-flex items-center gap-x-1 text-xs font-medium bg-red-500 rounded-lg py-1 px-1.5 text-white decoration-2 hover:bg-red-600 focus:outline-none focus:bg-red-600">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                        height="13" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="lucide lucide-trash-2">
                                                        <path d="M3 6h18" />
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                                                        <line x1="10" x2="10" y1="11"
                                                            y2="17" />
                                                        <line x1="14" x2="14" y1="11"
                                                            y2="17" />
                                                    </svg>
                                                    HAPUS
                                                </button>
                                            </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- End Content Modal -->
                </div>
                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">

                </div>

            </div>
        </div>
    </div>
    <!-- End Modals -->

</body>

</html>
