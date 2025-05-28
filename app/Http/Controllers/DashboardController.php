<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\ComplainType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function index()
    {
        $tickets = DB::table('tickets')
            ->join('users', 'tickets.username', '=', 'users.email')
            ->join('complain_types', 'tickets.tipe_komplain', '=', 'complain_types.id')
            ->select('tickets.*', 'users.name', 'users.email', 'users.role', 'complain_types.tipe_komplain')
            ->orderBy('level')
            ->paginate(5);

        $allusers = DB::table('users')->get();
        $alltickets = DB::table('tickets')->get();

        $ticketopen = DB::table('tickets')->where('ticket_status', 'OPEN');
        $ticketprocess = DB::table('tickets')->where('ticket_status', 'IN PROCESS');
        $ticketclosed = DB::table('tickets')->where('ticket_status', 'CLOSED');

        return view('dashboard', compact('allusers', 'alltickets', 'ticketopen', 'ticketprocess', 'ticketclosed', 'tickets'));
    }

    public function home()
    {
        $tickets = DB::table('tickets')
            ->join('users', 'tickets.username', '=', 'users.email')
            ->join('complain_types', 'tickets.tipe_komplain', '=', 'complain_types.id')
            ->where('ticket_status', 'OPEN')
            ->orWhere('ticket_status', 'IN PROCESS')
            ->select('tickets.*', 'users.name', 'users.email', 'users.role', 'complain_types.tipe_komplain')
            ->orderBy('level')
            ->paginate(10);

        $allusers = DB::table('users')->get();
        $alltickets = DB::table('tickets')->get();

        $ticketopen = DB::table('tickets')->where('ticket_status', 'OPEN');
        $ticketprocess = DB::table('tickets')->where('ticket_status', 'IN PROCESS');
        $ticketclosed = DB::table('tickets')->where('ticket_status', 'CLOSED');

        $komplain_tipe = ComplainType::all();

        return view('home', compact('allusers', 'alltickets', 'ticketopen', 'ticketprocess', 'ticketclosed', 'tickets', 'komplain_tipe'));
    }
}
