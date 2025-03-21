@extends('layout')
@section('konten')
    <div class="flex justify-between items-center py-3 px-4 border-b">
        <h3 class="font-bold text-gray-800">
            Ubah User
        </h3>
    </div>
    <form action="{{ route('auth.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="p-4 overflow-y-auto">
            <div class="grid grid-cols-2 gap-2">
                <div>
                    <label for="email" class="block text-sm font-medium mb-2">Email</label>
                    <input type="email" id="email" name="email"
                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                        value="{{ old('email', $user->email) }}" disabled>
                </div>

                <div>
                    <label for="nama-user" class="block text-sm font-medium mb-2">Nama</label>
                    <input type="text" id="nama-user" name="nama_user"
                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                        value="{{ old('nama_user', $user->name) }}" disabled>
                </div>

                <div>
                    <label for="divisi" class="block text-sm font-medium mb-2">Divisi</label>
                    <input type="text" id="divisi" name="divisi"
                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                        value="{{ old('divisi', $user->divisi) }}">
                </div>

                <div>
                    <label for="level" class="block text-sm font-medium mb-2">Level</label>
                    <select name="level" id="level"
                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                        required>
                        <option value="">-- Level --</option>
                        <option value=99 @if ($user->level == 99) @selected(true) @endif>99</option>
                        <option value=1 @if ($user->level == 1) @selected(true) @endif>1</option>
                        <option value=2 @if ($user->level == 2) @selected(true) @endif>2</option>
                        <option value=3 @if ($user->level == 3) @selected(true) @endif>3</option>
                    </select>
                </div>

                <div>
                    <label for="role" class="block text-sm font-medium mb-2">Role</label>
                    <select name="role" id="role"
                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                        required>
                        <option value="">-- Role --</option>
                        <option value="superadmin" @if ($user->role == 'superadmin') @selected(true) @endif>
                            superadmin
                        </option>
                        <option value="admin" @if ($user->role == 'admin') @selected(true) @endif>
                            admin
                        </option>
                        <option value="user" @if ($user->role == 'user') @selected(true) @endif>
                            user
                        </option>
                    </select>
                </div>

                <div>
                    <label for="grup" class="block text-sm font-medium mb-2">Grup</label>
                    <select name="grup" id="grup"
                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                        required>
                        <option value="">-- Grup --</option>
                        <option value="DP" @if ($user->group == 'DP') @selected(true) @endif>Danpac
                        </option>
                        <option value="SMI" @if ($user->group == 'SMI') @selected(true) @endif>SMI
                        </option>
                        <option value="SMID" @if ($user->group == 'SMID') @selected(true) @endif>SMID
                        </option>
                        <option value="RTP" @if ($user->group == 'RTP') @selected(true) @endif>RTP
                        </option>
                    </select>
                </div>

                <div>
                    <label for="status" class="block text-sm font-medium mb-2">Status</label>
                    <select name="status" id="status"
                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                        required>
                        <option value="">-- Status --</option>
                        <option value=1 @if ($user->status == 1) @selected(true) @endif>AKTIF
                        </option>
                        <option value=0 @if ($user->status == 0) @selected(true) @endif>NON AKTIF
                        </option>
                    </select>
                </div>
            </div>
        </div>
        <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
            <button type="submit"
                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                Save changes
            </button>
        </div>
    </form>
@endsection
