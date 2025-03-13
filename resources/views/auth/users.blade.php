@extends('layout')
@section('konten')
    <!-- Header -->
    <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200">
        <div>
            <h2 class="text-xl font-semibold text-gray-800">
                Users
            </h2>
            <p class="text-sm text-gray-600">
                Tambah pengguna, ubah dan lainnya.
            </p>
        </div>

        <div>
            <div class="inline-flex gap-x-2">
                <a class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                    aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-static-backdrop-modal"
                    data-hs-overlay="#hs-static-backdrop-modal" href="#">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M5 12h14" />
                        <path d="M12 5v14" />
                    </svg>
                    Tambah
                </a>
            </div>
        </div>
    </div>
    <!-- End Header -->

    <!-- Table -->
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-start">
                    <div class="flex items-center gap-x-2">
                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                            No
                        </span>
                    </div>
                </th>

                <th scope="col" class="px-6 py-3 text-start">
                    <div class="flex items-center gap-x-2">
                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                            Nama
                        </span>
                    </div>
                </th>

                <th scope="col" class="px-6 py-3 text-start">
                    <div class="flex items-center gap-x-2">
                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                            Divisi
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

                <th scope="col" class="px-6 py-3 text-start">
                    <div class="flex items-center gap-x-2">
                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                            Portfolio
                        </span>
                    </div>
                </th>

                <th scope="col" class="px-6 py-3 text-start">
                    <div class="flex items-center gap-x-2">
                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                            Created
                        </span>
                    </div>
                </th>

                <th scope="col" class="px-6 py-3 text-end"></th>
            </tr>
        </thead>

        <tbody class="divide-y divide-gray-200">
            <tr>
                <td class="size-px whitespace-nowrap">
                    <div class="ps-6 py-3">
                        <label for="hs-at-with-checkboxes-1" class="flex">
                            <input type="checkbox"
                                class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                id="hs-at-with-checkboxes-1">
                            <span class="sr-only">Checkbox</span>
                        </label>
                    </div>
                </td>
                <td class="size-px whitespace-nowrap">
                    <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                        <div class="flex items-center gap-x-3">
                            <img class="inline-block size-[38px] rounded-full"
                                src="https://images.unsplash.com/photo-1531927557220-a9e23c1e4794?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                                alt="Avatar">
                            <div class="grow">
                                <span class="block text-sm font-semibold text-gray-800">Christina
                                    Bersh</span>
                                <span class="block text-sm text-gray-500">christina@site.com</span>
                            </div>
                        </div>
                    </div>
                </td>
                <td class="h-px w-72 whitespace-nowrap">
                    <div class="px-6 py-3">
                        <span class="block text-sm font-semibold text-gray-800">Director</span>
                        <span class="block text-sm text-gray-500">Human resources</span>
                    </div>
                </td>
                <td class="size-px whitespace-nowrap">
                    <div class="px-6 py-3">
                        <span
                            class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full">
                            <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </svg>
                            Active
                        </span>
                    </div>
                </td>
                <td class="size-px whitespace-nowrap">
                    <div class="px-6 py-3">
                        <div class="flex items-center gap-x-3">
                            <span class="text-xs text-gray-500">1/5</span>
                            <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden">
                                <div class="flex flex-col justify-center overflow-hidden bg-gray-800" role="progressbar"
                                    style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </td>
                <td class="size-px whitespace-nowrap">
                    <div class="px-6 py-3">
                        <span class="text-sm text-gray-500">28 Dec, 12:12</span>
                    </div>
                </td>
                <td class="size-px whitespace-nowrap">
                    <div class="px-6 py-1.5">
                        <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium"
                            href="#">
                            Edit
                        </a>
                    </div>
                </td>
            </tr>

            <tr>
                <td class="size-px whitespace-nowrap">
                    <div class="ps-6 py-3">
                        <label for="hs-at-with-checkboxes-2" class="flex">
                            <input type="checkbox"
                                class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                id="hs-at-with-checkboxes-2">
                            <span class="sr-only">Checkbox</span>
                        </label>
                    </div>
                </td>
                <td class="size-px whitespace-nowrap">
                    <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                        <div class="flex items-center gap-x-3">
                            <img class="inline-block size-[38px] rounded-full"
                                src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                                alt="Avatar">
                            <div class="grow">
                                <span class="block text-sm font-semibold text-gray-800">David
                                    Harrison</span>
                                <span class="block text-sm text-gray-500">david@site.com</span>
                            </div>
                        </div>
                    </div>
                </td>
                <td class="h-px w-72 whitespace-nowrap">
                    <div class="px-6 py-3">
                        <span class="block text-sm font-semibold text-gray-800">Seller</span>
                        <span class="block text-sm text-gray-500">Branding products</span>
                    </div>
                </td>
                <td class="size-px whitespace-nowrap">
                    <div class="px-6 py-3">
                        <span
                            class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-yellow-100 text-yellow-800 rounded-full">
                            <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                            Warning
                        </span>
                    </div>
                </td>
                <td class="size-px whitespace-nowrap">
                    <div class="px-6 py-3">
                        <div class="flex items-center gap-x-3">
                            <span class="text-xs text-gray-500">3/5</span>
                            <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden">
                                <div class="flex flex-col justify-center overflow-hidden bg-gray-800" role="progressbar"
                                    style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </td>
                <td class="size-px whitespace-nowrap">
                    <div class="px-6 py-3">
                        <span class="text-sm text-gray-500">20 Dec, 09:27</span>
                    </div>
                </td>
                <td class="size-px whitespace-nowrap">
                    <div class="px-6 py-1.5">
                        <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium"
                            href="#">
                            Edit
                        </a>
                    </div>
                </td>
            </tr>

            <tr>
                <td class="size-px whitespace-nowrap">
                    <div class="ps-6 py-3">
                        <label for="hs-at-with-checkboxes-3" class="flex">
                            <input type="checkbox"
                                class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                id="hs-at-with-checkboxes-3">
                            <span class="sr-only">Checkbox</span>
                        </label>
                    </div>
                </td>
                <td class="size-px whitespace-nowrap">
                    <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                        <div class="flex items-center gap-x-3">
                            <span
                                class="inline-flex items-center justify-center size-[38px] rounded-full bg-white border border-gray-300">
                                <span class="font-medium text-sm text-gray-800 leading-none">A</span>
                            </span>
                            <div class="grow">
                                <span class="block text-sm font-semibold text-gray-800">Anne
                                    Richard</span>
                                <span class="block text-sm text-gray-500">anne@site.com</span>
                            </div>
                        </div>
                    </div>
                </td>
                <td class="h-px w-72 whitespace-nowrap">
                    <div class="px-6 py-3">
                        <span class="block text-sm font-semibold text-gray-800">Designer</span>
                        <span class="block text-sm text-gray-500">IT department</span>
                    </div>
                </td>
                <td class="size-px whitespace-nowrap">
                    <div class="px-6 py-3">
                        <span
                            class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full">
                            <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </svg>
                            Active
                        </span>
                    </div>
                </td>
                <td class="size-px whitespace-nowrap">
                    <div class="px-6 py-3">
                        <div class="flex items-center gap-x-3">
                            <span class="text-xs text-gray-500">5/5</span>
                            <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden">
                                <div class="flex flex-col justify-center overflow-hidden bg-gray-800" role="progressbar"
                                    style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </td>
                <td class="size-px whitespace-nowrap">
                    <div class="px-6 py-3">
                        <span class="text-sm text-gray-500">18 Dec, 15:20</span>
                    </div>
                </td>
                <td class="size-px whitespace-nowrap">
                    <div class="px-6 py-1.5">
                        <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium"
                            href="#">
                            Edit
                        </a>
                    </div>
                </td>
            </tr>

            <tr>
                <td class="size-px whitespace-nowrap">
                    <div class="ps-6 py-3">
                        <label for="hs-at-with-checkboxes-4" class="flex">
                            <input type="checkbox"
                                class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                id="hs-at-with-checkboxes-4">
                            <span class="sr-only">Checkbox</span>
                        </label>
                    </div>
                </td>
                <td class="size-px whitespace-nowrap">
                    <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                        <div class="flex items-center gap-x-3">
                            <img class="inline-block size-[38px] rounded-full"
                                src="https://images.unsplash.com/photo-1541101767792-f9b2b1c4f127?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&&auto=format&fit=facearea&facepad=3&w=320&h=320&q=80"
                                alt="Avatar">
                            <div class="grow">
                                <span class="block text-sm font-semibold text-gray-800">Samia
                                    Kartoon</span>
                                <span class="block text-sm text-gray-500">samia@site.com</span>
                            </div>
                        </div>
                    </div>
                </td>
                <td class="h-px w-72 whitespace-nowrap">
                    <div class="px-6 py-3">
                        <span class="block text-sm font-semibold text-gray-800">Executive
                            director</span>
                        <span class="block text-sm text-gray-500">Marketing</span>
                    </div>
                </td>
                <td class="size-px whitespace-nowrap">
                    <div class="px-6 py-3">
                        <span
                            class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full">
                            <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </svg>
                            Active
                        </span>
                    </div>
                </td>
                <td class="size-px whitespace-nowrap">
                    <div class="px-6 py-3">
                        <div class="flex items-center gap-x-3">
                            <span class="text-xs text-gray-500">0/5</span>
                            <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden">
                                <div class="flex flex-col justify-center overflow-hidden bg-gray-800" role="progressbar"
                                    style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </td>
                <td class="size-px whitespace-nowrap">
                    <div class="px-6 py-3">
                        <span class="text-sm text-gray-500">18 Dec, 15:20</span>
                    </div>
                </td>
                <td class="size-px whitespace-nowrap">
                    <div class="px-6 py-1.5">
                        <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium"
                            href="#">
                            Edit
                        </a>
                    </div>
                </td>
            </tr>

            <tr>
                <td class="size-px whitespace-nowrap">
                    <div class="ps-6 py-3">
                        <label for="hs-at-with-checkboxes-5" class="flex">
                            <input type="checkbox"
                                class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                id="hs-at-with-checkboxes-5">
                            <span class="sr-only">Checkbox</span>
                        </label>
                    </div>
                </td>
                <td class="size-px whitespace-nowrap">
                    <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                        <div class="flex items-center gap-x-3">
                            <span
                                class="inline-flex items-center justify-center size-[38px] rounded-full bg-white border border-gray-300">
                                <span class="font-medium text-sm text-gray-800 leading-none">D</span>
                            </span>
                            <div class="grow">
                                <span class="block text-sm font-semibold text-gray-800">David
                                    Harrison</span>
                                <span class="block text-sm text-gray-500">david@site.com</span>
                            </div>
                        </div>
                    </div>
                </td>
                <td class="h-px w-72 whitespace-nowrap">
                    <div class="px-6 py-3">
                        <span class="block text-sm font-semibold text-gray-800">Developer</span>
                        <span class="block text-sm text-gray-500">Mobile app</span>
                    </div>
                </td>
                <td class="size-px whitespace-nowrap">
                    <div class="px-6 py-3">
                        <span
                            class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-red-100 text-red-800 rounded-full">
                            <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                            Danger
                        </span>
                    </div>
                </td>
                <td class="size-px whitespace-nowrap">
                    <div class="px-6 py-3">
                        <div class="flex items-center gap-x-3">
                            <span class="text-xs text-gray-500">3/5</span>
                            <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden">
                                <div class="flex flex-col justify-center overflow-hidden bg-gray-800" role="progressbar"
                                    style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </td>
                <td class="size-px whitespace-nowrap">
                    <div class="px-6 py-3">
                        <span class="text-sm text-gray-500">15 Dec, 14:41</span>
                    </div>
                </td>
                <td class="size-px whitespace-nowrap">
                    <div class="px-6 py-1.5">
                        <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium"
                            href="#">
                            Edit
                        </a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <!-- End Table -->

    <!-- Footer -->
    <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200">
        <div>
            <p class="text-sm text-gray-600">
                <span class="font-semibold text-gray-800">12</span> results
            </p>
        </div>

        <div>
            <div class="inline-flex gap-x-2">
                <button type="button"
                    class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="m15 18-6-6 6-6" />
                    </svg>
                    Prev
                </button>

                <button type="button"
                    class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50">
                    Next
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
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

    <! -- End Table Section -->
        </div>

        <!-- Modals -->
        <div id="hs-static-backdrop-modal"
            class="hs-overlay [--overlay-backdrop:static] hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
            role="dialog" tabindex="-1" aria-labelledby="hs-static-backdrop-modal-label"
            data-hs-overlay-keyboard="false">
            <div
                class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg md:max-w-2xl sm:w-full m-3 sm:mx-auto">
                <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                    <div class="flex justify-between items-center py-3 px-4 border-b">
                        <h3 id="hs-static-backdrop-modal-label" class="font-bold text-gray-800">
                            Modal title
                        </h3>
                        <button type="button"
                            class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                            aria-label="Close" data-hs-overlay="#hs-static-backdrop-modal">
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
                        <p class="mt-1 text-gray-800">
                            This is a wider card with supporting text below as a natural lead-in to additional content.
                        </p>
                    </div>
                    <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
                        <button type="button"
                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                            data-hs-overlay="#hs-static-backdrop-modal">
                            Close
                        </button>
                        <button type="button"
                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                            Save changes
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modals -->
    @endsection
