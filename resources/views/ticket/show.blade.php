@extends('layout')
@section('konten')
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
@endsection
