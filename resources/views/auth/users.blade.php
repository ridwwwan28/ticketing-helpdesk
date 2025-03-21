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
                            Grup
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
            @foreach ($users as $no => $user)
                <tr>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                            <span class="text-sm text-gray-500">{{ $no + 1 }}</span>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                            <div class="flex items-center gap-x-3">
                                <img class="inline-block size-[38px] rounded-full" src="" alt="Avatar">
                                <div class="grow">
                                    <span class="block text-sm font-semibold text-gray-800">{{ $user->name }}</span>
                                    <span class="block text-sm text-gray-500">{{ $user->email }}</span>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                            <span class="text-sm font-semibold text-gray-800">{{ $user->divisi }}</span>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                            @if ($user->status === 1)
                                <span
                                    class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full">
                                    <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                    Active
                                </span>
                            @else
                                <span
                                    class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-red-100 text-red-800 rounded-full">
                                    <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                    </svg>
                                    Not Active
                                </span>
                            @endif
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                            <span class="text-sm font-semibold text-gray-800">{{ $user->group }}</span>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                            <span class="text-sm font-semibold text-gray-800">{{ $user->created_at }}</span>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-1.5">
                            <a class="inline-flex items-center gap-x-1 text-xs font-medium bg-orange-300 rounded-lg py-1 px-1.5 text-black decoration-2 hover:bg-orange-500 focus:outline-none focus:bg-orange-500"
                                href="{{ route('auth.edit', $user->id) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-pencil">
                                    <path
                                        d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                                    <path d="m15 5 4 4" />
                                </svg>
                                EDIT
                            </a>

                            <form method="POST" action="" class="inline-flex items-center">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="inline-flex items-center gap-x-1 text-xs font-medium bg-red-600 rounded-lg py-1 px-1.5 text-black decoration-2 hover:bg-red-700 focus:outline-none focus:bg-red-700"
                                    href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash-2">
                                        <path d="M3 6h18" />
                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                                        <line x1="10" x2="10" y1="11" y2="17" />
                                        <line x1="14" x2="14" y1="11" y2="17" />
                                    </svg>
                                    HAPUS
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
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
                            Tambah User
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
                    <form method="POST" action="{{ route('auth.submit') }}">
                        @csrf
                        <div class="p-4 overflow-y-auto">
                            <!-- Content Modal -->
                            <div class="grid grid-cols-2 gap-2">
                                <div>
                                    <label for="email" class="block text-sm font-medium mb-2">Email</label>
                                    <input type="email" id="email" name="email"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                        required placeholder="test@example.com">
                                </div>
                                <div>
                                    <label for="password" class="block text-sm font-medium mb-2">Password</label>
                                    <input type="password" id="password" name="password"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                        required placeholder="Password">
                                </div>
                                <div>
                                    <label for="nama-user" class="block text-sm font-medium mb-2">Nama</label>
                                    <input type="text" id="nama-user" name="nama_user"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                        required placeholder="Nama">
                                </div>
                                <div>
                                    <label for="divisi" class="block text-sm font-medium mb-2">Divisi</label>
                                    <input type="text" id="divisi" name="divisi"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                        required placeholder="Divisi">
                                </div>
                                <div>
                                    <label for="level" class="block text-sm font-medium mb-2">Level</label>
                                    <select name="level" id="level"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                        required>
                                        <option value="">-- Level --</option>
                                        <option value=99>99</option>
                                        <option value=1>1</option>
                                        <option value=2>2</option>
                                        <option value=3>3</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="role" class="block text-sm font-medium mb-2">Role</label>
                                    <select name="role" id="role"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                        required>
                                        <option value="">-- Role --</option>
                                        <option value="superadmin">superadmin</option>
                                        <option value="admin">admin</option>
                                        <option value="user">user</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="grup" class="block text-sm font-medium mb-2">Grup</label>
                                    <select name="grup" id="grup"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                        required>
                                        <option value="">-- Grup --</option>
                                        <option value="DP">Danpac</option>
                                        <option value="SMI">SMI</option>
                                        <option value="SMID">SMID</option>
                                        <option value="RTP">RTP</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="status" class="block text-sm font-medium mb-2">Status</label>
                                    <select name="status" id="status"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                        required>
                                        <option value="">-- Status --</option>
                                        <option value=1>AKTIF</option>
                                        <option value=0>NON AKTIF</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
                            <button type="reset"
                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                data-hs-overlay="#hs-static-backdrop-modal">
                                Close
                            </button>
                            <button type="submit"
                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                Save changes
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Modals -->
    @endsection
