@extends('layout')
@section('konten')
    <div class="flex justify-between items-center py-3 px-4 border-b">
        <h3 class="font-bold text-gray-800">
            Ubah Ticket
        </h3>
    </div>
    <form action="{{ route('ticket.update', $ticket->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="p-4 overflow-y-auto">
            <!-- Content Modal -->
            <div class="grid grid-cols-2 gap-2">
                <div>
                    <label for="nomor-tiket" class="block text-sm font-medium mb-2">Ticket ID</label>
                    <input type="text" id="nomor-ticket" name="no_tiket"
                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                        value="{{ old('tiket', $ticket->no_tiket) }}" disabled>
                </div>
                <div>
                    <label for="nama-user" class="block text-sm font-medium mb-2">Username</label>
                    <input type="text" id="nama-user" name="nama"
                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                        value="{{ old('nama', $ticket->username) }}" disabled>
                </div>
                <div class="lg:col-span-2">
                    <label for="kendala" class="block text-sm font-medium mb-2">Problem</label>
                    <textarea id="kendala" name="kendala"
                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                        rows="3" placeholder="Ketik kendalanya disini..." disabled>{{ old('kendala', $ticket->kendala) }}</textarea>
                </div>
                <div class="lg:col-span-2">
                    <label for="detail_penyelesaian" class="block text-sm font-medium mb-2">Detail Solution</label>
                    <textarea id="detail_penyelesaian" name="detail_penyelesaian"
                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                        rows="3" placeholder="Detail Penyelesaian...">{{ old('detail_penyelesaian', $ticket->detail_penyelesaian) }}</textarea>
                </div>
                <div>
                    <label for="tipe-komplain" class="block text-sm font-medium mb-2">Complain Type</label>
                    <select name="tipe_komplain" id="tipe-komplain"
                        class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                        <option value="">-- Complain Type --</option>
                        @foreach ($type_komplain as $item)
                            <option value={{ $item->id }}
                                @if ($ticket->tipe_komplain == $item->id) @selected(true) @endif>
                                {{ $item->tipe_komplain }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="status" class="block text-sm font-medium mb-2">Status</label>
                    <select name="status" id="status"
                        class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                        <option value="">-- CHOOSE STATUS --</option>
                        <option value="OPEN" @if ($ticket->ticket_status == 'OPEN') @selected(true) @endif>
                            OPEN
                        </option>
                        <option value="IN PROCESS" @if ($ticket->ticket_status == 'IN PROCESS') @selected(true) @endif>
                            IN PROCESS
                        </option>
                        <option value="CLOSED" @if ($ticket->ticket_status == 'CLOSED') @selected(true) @endif>
                            CLOSED
                        </option>
                    </select>
                </div>
                <div>
                    <label for="tgl-buat" class="block text-sm font-medium mb-2">Created Date</label>
                    <input type="text" id="tgl-buat" name="tgl_buat"
                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                        value="{{ old('tgl_buat', $ticket->created_at) }}" disabled>
                </div>
                <div>
                    <label for="tgl-selesai" class="block text-sm font-medium mb-2">Finished Date</label>
                    <input type="text" id="tgl-selesai" name="tgl_selesai"
                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                        value="{{ old('tgl_selesai', $ticket->tgl_selesai) }}" disabled>
                </div>
            </div>
            <!-- End Content Modal -->
        </div>
        <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
            <button type="submit"
                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                Save changes
            </button>
        </div>
    </form>
@endsection
