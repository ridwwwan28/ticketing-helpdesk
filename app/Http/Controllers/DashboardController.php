<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get();
        return view('dashboard', compact('users'));
    }

    public function home()
    {
        return view('home');
    }
}
