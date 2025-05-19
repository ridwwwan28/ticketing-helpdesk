<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class DashboardController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get();
        $tickets = DB::table('tickets')->get();
        return view('dashboard', compact('users', 'tickets'));
    }

    public function home()
    {
        $tickets = DB::table('tickets')->get();
        return view('home', compact('tickets'));
    }
}
