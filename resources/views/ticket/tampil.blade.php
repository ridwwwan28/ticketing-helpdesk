@extends('layout')

@section('konten')
    <!-- Header -->
    <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200">
        <div>
            <h2 class="text-xl font-semibold text-gray-800">
                Ticket
            </h2>
            <p class="text-sm text-gray-600">
                Klik Tambah untuk membuat ticket bantuan IT.
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
                    Buat Ticket
                </a>
            </div>
        </div>
    </div>
    <!-- End Header -->

    <!-- Table -->
    <table class="min-w-full divide-y divide-gray-200">
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
                            No Ticket
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
                            Kendala
                        </span>
                    </div>
                </th>

                <th scope="col" class="px-6 py-3 text-start">
                    <div class="flex items-center gap-x-2">
                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                            Penyelesaian
                        </span>
                    </div>
                </th>

                <th scope="col" class="px-6 py-3 text-start">
                    <div class="flex items-center gap-x-2">
                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                            Tgl Buat
                        </span>
                    </div>
                </th>

                <th scope="col" class="px-6 py-3 text-start">
                    <div class="flex items-center gap-x-2">
                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                            Tgl Selesai
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

                <th scope="col" class="px-6 py-3 text-end">
                    <div class="flex items-center gap-x-2">
                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                            Action
                        </span>
                    </div>
                </th>
            </tr>
        </thead>

        <tbody class="divide-y divide-gray-200">
            @foreach ($tickets as $no => $ticket)
                <tr>
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
                            <span class="text-xs text-gray-800">{{ $ticket->username }}</span>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="py-2 px-2">
                            <span class="text-xs text-gray-800">{{ $ticket->kendala }}</span>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="py-2 px-2">
                            <span class="text-xs text-gray-800">
                                {{ $ticket->detail_penyelesaian }}
                            </span>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="py-2 px-2">
                            <span class="text-xs text-gray-800">
                                {{ $ticket->created_at }}
                            </span>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="py-2 px-2">
                            <span class="text-xs text-gray-800">
                                {{ $ticket->updated_at }}
                            </span>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="py-2 px-2">
                            <span class="text-xs text-gray-800">
                                {{ $ticket->status }}
                            </span>
                        </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="py-2 px-2">
                            <span class="text-xs text-gray-500 uppercase">
                                <a href="{{ route('ticket.show', $ticket->id) }}"
                                    class="text-gray-800 hover:text-gray-500">tampil</a>
                                @if (auth()->user()->role != 'user')
                                    |
                                    <a href="{{ route('ticket.edit', $ticket->id) }}"
                                        class="text-blue-500 hover:text-blue-800">ubah</a>
                                @endif

                                @if (
                                    (auth()->user()->role != 'user' && $ticket->status != 'SELESAI') ||
                                        (auth()->user()->role == 'user' && $ticket->status == 'MENUNGGU'))
                                    |
                                    <form method="POST" action="{{ route('ticket.destroy', $ticket->id) }}"
                                        onsubmit="return confirm('Apakah Anda Yakin?')" class="block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="text-xs uppercase text-red-500 hover:text-red-800">hapus</button>
                                    </form>
                                @endif

                            </span>
                        </div>

                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    <!-- End Table -->

    <!-- Footer -->
    <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200">
        <div>
            <p class="text-sm text-gray-600">
                <span class="font-semibold text-gray-800">{{ $tickets->count() }}</span> results
            </p>
        </div>

        <div>
            <div class="inline-flex gap-x-2">
                {{-- <button type="button"
                    class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="m15 18-6-6 6-6" />
                    </svg>
                    Prev
                </button> --}}
                {{ $tickets->links() }}
                {{-- <button type="button"
                    class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50">
                    Next
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </button> --}}
            </div>
        </div>
    </div>
    <!-- End Footer -->

    <!-- Modals -->
    <div id="hs-static-backdrop-modal"
        class="hs-overlay [--overlay-backdrop:static] hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
        role="dialog" tabindex="-1" aria-labelledby="hs-static-backdrop-modal-label" data-hs-overlay-keyboard="false">
        <div
            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg md:max-w-2xl sm:w-full m-3 sm:mx-auto">
            <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                <div class="flex justify-between items-center py-3 px-4 border-b">
                    <h3 id="hs-static-backdrop-modal-label" class="font-bold text-gray-800">
                        Tambah Ticket
                    </h3>
                    <button type="button"
                        class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                        aria-label="Close" data-hs-overlay="#hs-static-backdrop-modal">
                        <span class="sr-only">Close</span>
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
                <form action="{{ route('ticket.submit') }}" method="POST">
                    @csrf
                    <div class="p-4 overflow-y-auto">
                        <!-- Content Modal -->
                        <div class="grid grid-cols-2 gap-2">
                            <div>
                                <label for="nomor-tiket" class="block text-sm font-medium mb-2">Nomor Ticket</label>
                                <input type="text" id="nomor-ticket" name="no_tiket"
                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                    required>
                            </div>
                            <div>
                                <label for="nama-user" class="block text-sm font-medium mb-2">Nama Pengguna</label>
                                <input type="text" id="nama-user" name="nama"
                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                    required>
                            </div>
                            <div class="lg:col-span-2">
                                <label for="kendala" class="block text-sm font-medium mb-2">Kendala</label>
                                <textarea id="kendala" name="kendala"
                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                    rows="3" placeholder="Ketik kendalanya disini..." required></textarea>
                            </div>
                        </div>
                        <!-- End Content Modal -->
                    </div>
                    <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
                        <button type="button"
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
