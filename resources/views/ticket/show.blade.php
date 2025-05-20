@extends('layout')
@section('konten')
    <div class="flex justify-between items-center py-3 px-4 border-b">
        <h3 class="font-bold text-gray-800">
            Detail Ticket
        </h3>
    </div>
    <div class="p-4 overflow-y-auto">
        <!-- Content Modal -->
        <div class="grid grid-cols-2 gap-2">
            <div>
                <label for="nomor-tiket" class="block text-sm font-medium mb-2">Nomor Ticket</label>
                <input type="text" id="nomor-ticket" name="no_tiket"
                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                    value="{{ old('tiket', $ticket->no_tiket) }}" disabled>
            </div>
            <div>
                <label for="nama-user" class="block text-sm font-medium mb-2">Nama Pengguna</label>
                <input type="text" id="nama-user" name="nama"
                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                    value="{{ old('nama', $ticket->username) }}" disabled>
            </div>
            <div class="lg:col-span-2">
                <label for="kendala" class="block text-sm font-medium mb-2">Kendala</label>
                <textarea id="kendala" name="kendala"
                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                    rows="3" placeholder="Ketik kendalanya disini..." disabled>{{ old('kendala', $ticket->kendala) }}</textarea>
            </div>
            <div class="lg:col-span-2">
                <label for="detail_penyelesaian" class="block text-sm font-medium mb-2">Detail Penyelesaian</label>
                <textarea id="detail_penyelesaian" name="detail_penyelesaian"
                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                    rows="3" placeholder="Detail Penyelesaian..." disabled>{{ old('detail_penyelesaian', $ticket->detail_penyelesaian) }}</textarea>
            </div>
            <div>
                <label for="tipe-komplain" class="block text-sm font-medium mb-2">Klasifikasi Kendala</label>
                <input type="text" id="tipe-komplain" name="tipe_komplain"
                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                    value="{{ old('tipe_komplain', $ticket->tipe_komplain) }}" disabled>
            </div>
            <div>
                <label for="prioritas" class="block text-sm font-medium mb-2">Prioritas</label>
                <select name="prioritas" id="prioritas" required
                    class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                    disabled>
                    <option value="">-- Prioritas --</option>
                    <option value=1 @if ($ticket->prioritas === 1) @selected(true) @endif>
                        Prioritas 1 – Kritikal (Critical)
                    </option>
                    <option value=2 @if ($ticket->prioritas === 2) @selected(true) @endif>
                        Prioritas 2 – Tinggi (High)
                    </option>
                    <option value=3 @if ($ticket->prioritas === 3) @selected(true) @endif>
                        Prioritas 3 – Sedang (Medium)
                    </option>
                    <option value=4 @if ($ticket->prioritas === 4) @selected(true) @endif>
                        Prioritas 4 – Rendah (Low)
                    </option>
                </select>
            </div>
            <div>
                <label for="status" class="block text-sm font-medium mb-2">Status</label>
                <select name="status" id="status"
                    class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                    disabled>
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
                <label for="tgl-buat" class="block text-sm font-medium mb-2">Tanggal Terbit Ticket</label>
                <input type="text" id="tgl-buat" name="tgl_buat"
                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                    value="{{ old('tgl_buat', $ticket->tgl_buat) }}" disabled>
            </div>
            <div>
                <label for="tgl-estimasi" class="block text-sm font-medium mb-2">Tanggal Estimasi Penyelesaian</label>
                <input type="text" id="tgl-estimasi" name="tgl_buat"
                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                    value="{{ old('tgl_estimasi', $ticket->tgl_estimasi) }}" disabled>
            </div>
            <div>
                <label for="tgl-selesai" class="block text-sm font-medium mb-2">Tanggal Selesai</label>
                <input type="text" id="tgl-selesai" name="tgl_selesai"
                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                    value="{{ old('tgl_selesai', $ticket->tgl_selesai) }}" disabled>
            </div>
        </div>
        <!-- End Content Modal -->
    </div>
@endsection
