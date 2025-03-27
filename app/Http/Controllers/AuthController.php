<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::attempt($request->only('email', 'password'), $request->remember)) {
            if (Auth::user()->role == 'user' && Auth::user()->status == 1) return redirect('/home');
            return redirect('/dashboard');
        }
        return back()->with('failed', 'Email atau Password Salah!');
    }

    public function logout()
    {
        Auth::logout(Auth::user());
        return redirect('/');
    }

    public function tampilUser()
    {
        $users = User::paginate(10);

        return view('auth.users', compact('users'));
    }

    function submit(Request $request): RedirectResponse
    {
        $user = new User();
        $user->name = $request->nama_user;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->divisi = $request->divisi;
        $user->group = $request->grup;
        $user->level = $request->level;
        $user->role = $request->role;
        $user->status = $request->status;
        $user->save();

        return redirect()->route('auth.users');
    }

    function edit(string $id): View
    {
        // ambil data user berdasarkan id
        $user = User::findOrFail($id);

        // tampilkan di form edit user
        return view('auth.edit', compact('user'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        // ambil data user berdasarkan id
        $user = User::findOrFail($id);

        // update data
        $user->divisi = $request->divisi;
        $user->level = $request->level;
        $user->role = $request->role;
        $user->group = $request->grup;
        $user->status = $request->status;
        $user->update();

        // kembali ke halaman tampil data
        return redirect()->route('auth.users');
    }
}
