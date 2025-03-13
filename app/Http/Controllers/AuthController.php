<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::attempt($request->only('email', 'password'), $request->remember)) {
            if (Auth::user()->role == 'user') return redirect('/home');
            return redirect('/dashboard');
        }
        return back()->with('failed', 'Email atau Password salah');
    }

    public function logout()
    {
        Auth::logout(Auth::user());
        return redirect('/');
    }

    public function tampilUser()
    {
        $users = User::paginate(10);

        return view('auth.user', compact('users'));
    }
}
