@extends('layout')
@section('konten')
    <!-- Header -->
    <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200">
        <div>
            <h2 class="text-xl font-semibold text-gray-800">
                Complain Type
            </h2>
            <p class="text-sm text-gray-600">
                Tambah tipe komplain, ubah dan lainnya.
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
        <thead>
            <tr>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">No</th>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Type Complain
                </th>
                <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">
                    Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($complain_types as $no => $data)
                <tr class="odd:bg-white even:bg-gray-100 hover:bg-gray-100">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 ">{{ $no + 1 }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 ">{{ $data->tipe_komplain }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                        <button type="button"
                            class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-hidden focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- End Table -->

    <!-- Modals -->
    <div id="hs-static-backdrop-modal"
        class="hs-overlay [--overlay-backdrop:static] hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
        role="dialog" tabindex="-1" aria-labelledby="hs-static-backdrop-modal-label" data-hs-overlay-keyboard="false">
        <div
            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg md:max-w-2xl sm:w-full m-3 sm:mx-auto">
            <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                <div class="flex justify-between items-center py-3 px-4 border-b">
                    <h3 id="hs-static-backdrop-modal-label" class="font-bold text-gray-800">
                        Tambah Complain Type
                    </h3>
                    <button type="button"
                        class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                        aria-label="Close" data-hs-overlay="#hs-static-backdrop-modal">
                        <span class="sr-only">Close</span>
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
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
                                    <option value=99>admin</option>
                                    <option value=1>BOD</option>
                                    <option value=2>Manager</option>
                                    <option value=3>SPV/Staff</option>
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
                            <div class="col-span-2">
                                <div
                                    data-hs-file-upload='{
                                "url": "/upload",
                                "acceptedFiles": "image/*",
                                "maxFiles": 1,
                                "singleton": true
                              }'>
                                    <template data-hs-file-upload-preview="">
                                        <div class="size-20">
                                            <img class="w-full object-contain rounded-full" data-dz-thumbnail="">
                                        </div>
                                    </template>

                                    <div class="flex flex-wrap items-center gap-3 sm:gap-5">
                                        <div class="group" data-hs-file-upload-previews=""
                                            data-hs-file-upload-pseudo-trigger="">
                                            <span
                                                class="group-has-[div]:hidden flex shrink-0 justify-center items-center size-20 border-2 border-dotted border-gray-300 text-gray-400 cursor-pointer rounded-full hover:bg-gray-50">
                                                <svg class="shrink-0 size-7" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <circle cx="12" cy="10" r="3"></circle>
                                                    <path d="M7 20.662V19a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v1.662"></path>
                                                </svg>
                                            </span>
                                        </div>

                                        <div class="grow">
                                            <div class="flex items-center gap-x-2">
                                                <button type="button"
                                                    class="py-2 px-3 inline-flex items-center gap-x-2 text-xs font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                                    data-hs-file-upload-trigger="">
                                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                        <polyline points="17 8 12 3 7 8"></polyline>
                                                        <line x1="12" x2="12" y1="3"
                                                            y2="15"></line>
                                                    </svg>
                                                    Upload photo
                                                </button>
                                                <button type="button"
                                                    class="py-2 px-3 inline-flex items-center gap-x-2 text-xs font-semibold rounded-lg border border-gray-200 bg-white text-gray-500 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                                    data-hs-file-upload-clear="">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
