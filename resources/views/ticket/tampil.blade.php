@extends('layout')

@section('konten')
    <!-- Header -->

    <div class="px-6 py-4 grid gap-3 md:justify-between md:items-center">
        <div>
            <h2 class="text-xl font-semibold text-gray-800">Ticket</h2>
            <p class="text-sm text-gray-600">Klik Tambah untuk membuat ticket bantuan IT.</p>
        </div>
    </div>
    <div class="px-6 py-3 md:border-b border-gray-200">
        <div class="inline-flex gap-x-2">
            <a class="py-2 px-2 inline-flex items-center gap-x-1 text-sm font-medium rounded-md border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
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

    <!-- End Header -->

    <!-- Table -->
    <div class="">
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
                                Tgl Terbit Ticket
                            </span>
                        </div>
                    </th>

                    <th scope="col" class="px-6 py-3 text-start">
                        <div class="flex items-center gap-x-2">
                            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                Estimasi Waktu Penyelesaian
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
                                Tindakan
                            </span>
                        </div>
                    </th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200">
                @foreach ($tickets as $no => $ticket)
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
                                <span class="text-xs text-gray-800">{{ $ticket->tipe_komplain }}</span>
                            </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                            <div class="py-2 px-2">
                                <span class="text-xs text-gray-800">
                                    {{ $ticket->tgl_buat }}
                                </span>
                            </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                            <div class="py-2 px-2">
                                <span class="text-xs text-gray-800">
                                    {{ $ticket->tgl_estimasi }}
                                </span>
                            </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                            <div class="py-2 px-2">
                                <span class="text-xs text-gray-800">
                                    {{ $ticket->tgl_selesai }}
                                </span>
                            </div>
                        </td>

                        <td class="size-px whitespace-nowrap">
                            <div class="py-2 px-2">
                                @if ($ticket->ticket_status == 'OPEN')
                                    <span
                                        class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-red-100 text-red-800 rounded-full">
                                        <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" viewBox="0 0 16 16">
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

                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 16" fill="none" stroke="currentColor" stroke-width="2"
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
                                        <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                        </svg>
                                        {{ $ticket->ticket_status }}
                                    </span>
                                @endif

                            </div>
                        </td>

                        <td class="size-px whitespace-nowrap">
                            <div class="py-2 px-2">
                                <a href="{{ route('ticket.show', $ticket->id) }}"
                                    class="inline-flex items-center gap-x-1 text-xs font-medium bg-blue-500 rounded-lg py-1 px-1.5 text-white decoration-2 hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-list">
                                        <path d="M3 12h.01" />
                                        <path d="M3 18h.01" />
                                        <path d="M3 6h.01" />
                                        <path d="M8 12h13" />
                                        <path d="M8 18h13" />
                                        <path d="M8 6h13" />
                                    </svg>
                                    TAMPIL
                                </a>
                                @if (auth()->user()->role != 'user' && $ticket->ticket_status != 'CLOSED')
                                    <a href="{{ route('ticket.edit', $ticket->id) }}"
                                        class="inline-flex items-center gap-x-1 text-xs font-medium bg-orange-400 rounded-lg py-1 px-1.5 text-white decoration-2 hover:bg-orange-500 focus:outline-none focus:bg-orange-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil">
                                            <path
                                                d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                                            <path d="m15 5 4 4" />
                                        </svg>
                                        EDIT
                                    </a>
                                @endif

                                @if (auth()->user()->role != 'user' && $ticket->ticket_status != 'CLOSED')
                                    <form method="POST" action="{{ route('ticket.destroy', $ticket->id) }}"
                                        onclick="return confirm('Apakah Anda Yakin?')" class="inline-flex items-center">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="inline-flex items-center gap-x-1 text-xs font-medium bg-red-500 rounded-lg py-1 px-1.5 text-white decoration-2 hover:bg-red-600 focus:outline-none focus:bg-red-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-trash-2">
                                                <path d="M3 6h18" />
                                                <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                                                <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                                                <line x1="10" x2="10" y1="11" y2="17" />
                                                <line x1="14" x2="14" y1="11" y2="17" />
                                            </svg>
                                            HAPUS
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <!-- End Table -->

    <!-- LIST UNTUK MOBILE -->
    <div class="md:hidden space-y-4">
        @foreach ($tickets as $ticket)
            <div class="odd:bg-white even:bg-gray-100 hover:bg-gray-100 m-1 p-4 border rounded shadow">
                <div class="text-sm">
                    <div><strong>NO. TICKET :</strong> {{ $ticket->no_tiket }}</div>
                    <div><strong>PENGGUNA :</strong> {{ $ticket->name }}</div>
                    <div><strong>KATEGORI KENDALA :</strong> {{ $ticket->tipe_komplain }}</div>
                    <div>
                        <strong>Status :</strong>
                        @if ($ticket->ticket_status == 'OPEN')
                            <span class="text-red-800 font-semibold"> {{ $ticket->ticket_status }}</span>
                        @endif

                        @if ($ticket->ticket_status == 'IN PROCESS')
                            <span class="text-orange-600 font-semibold"> {{ $ticket->ticket_status }}</span>
                        @endif

                        @if ($ticket->ticket_status == 'CLOSED')
                            <span class="text-green-600 font-semibold"> {{ $ticket->ticket_status }}</span>
                        @endif
                    </div>
                    <div class="mt-4 gap-4">
                        <a href="{{ route('ticket.show', $ticket->id) }}"
                            class="inline-flex items-center gap-x-1 text-xs font-medium bg-blue-500 rounded-lg py-1 px-1.5 text-white decoration-2 hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-list">
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
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil">
                                    <path
                                        d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                                    <path d="m15 5 4 4" />
                                </svg>
                                EDIT
                            </a>
                        @endif

                        @if (auth()->user()->role != 'user' && $ticket->ticket_status != 'CLOSED')
                            <form method="POST" action="{{ route('ticket.destroy', $ticket->id) }}"
                                onclick="return confirm('Apakah Anda Yakin?')" class="inline-flex items-center">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="inline-flex items-center gap-x-1 text-xs font-medium bg-red-500 rounded-lg py-1 px-1.5 text-white decoration-2 hover:bg-red-600 focus:outline-none focus:bg-red-600">
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
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!-- END LIST UNTUK MOBILE -->

    <!-- Footer -->
    <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200">
        <div>
            <p class="text-sm text-gray-600">
                <span class="font-semibold text-gray-800">{{ $tickets->count() }}</span> results
            </p>
        </div>

        <div>
            <div class="inline-flex gap-x-2">
                {{ $tickets->links() }}
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
                            <div class="col-span-2">
                                <label for="nama-user" class="block text-sm font-medium mb-2">Nama
                                    Pengguna</label>
                                <input type="text" id="nama-user" name="nama"
                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                    value="{{ auth()->user()->name }}" disabled>
                                <input type="hidden" name="email_user" value="{{ auth()->user()->email }}">
                                <input type="hidden" name="nama_user" value="{{ auth()->user()->name }}">
                            </div>

                            <div class="lg:col-span-2">
                                <label for="complain-type" class="block text-sm font-medium mb-2">Klasifikasi
                                    Kendala</label>
                                <select name="tipe_komplain" id="complain-type"
                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                    required>

                                    <option value="" selected>-- Choose --</option>
                                    @foreach ($komplain_tipe as $data)
                                        <option value={{ $data->id }}>
                                            {{ $data->tipe_komplain }}
                                        </option>
                                    @endforeach

                                </select>
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
