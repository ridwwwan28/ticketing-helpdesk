<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function index()
    {
        $allusers = DB::table('users')->get();
        $alltickets = DB::table('tickets')->get();

        $ticketopen = DB::table('tickets')->where('ticket_status', 'OPEN');
        $ticketprocess = DB::table('tickets')->where('ticket_status', 'IN PROCESS');
        $ticketclosed = DB::table('tickets')->where('ticket_status', 'CLOSED');

        return view('dashboard', compact('allusers', 'alltickets', 'ticketopen', 'ticketprocess', 'ticketclosed'));
    }

    public function home()
    {
        $allusers = DB::table('users')->get();
        $alltickets = DB::table('tickets')->get();

        $ticketopen = DB::table('tickets')->where('ticket_status', 'OPEN');
        $ticketprocess = DB::table('tickets')->where('ticket_status', 'IN PROCESS');
        $ticketclosed = DB::table('tickets')->where('ticket_status', 'CLOSED');

        return view('home', compact('allusers', 'alltickets', 'ticketopen', 'ticketprocess', 'ticketclosed'));
    }
}
