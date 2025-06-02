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


        $allusers = DB::table('users')->get();
        $alltickets = DB::table('tickets')->get();

        $ticketopen = DB::table('tickets')->where('ticket_status', 'OPEN');
        $dtl_tickets_open = DB::table('tickets')
            ->join('users', 'tickets.username', '=', 'users.email')
            ->join('complain_types', 'tickets.tipe_komplain', '=', 'complain_types.id')
            ->where('ticket_status', 'OPEN')
            ->select('tickets.*', 'users.name', 'users.email', 'users.role', 'complain_types.tipe_komplain')
            ->orderBy('level')
            ->paginate(10);

        $ticketprocess = DB::table('tickets')->where('ticket_status', 'IN PROCESS');
        $dtl_tickets_process = DB::table('tickets')
            ->join('users', 'tickets.username', '=', 'users.email')
            ->join('complain_types', 'tickets.tipe_komplain', '=', 'complain_types.id')
            ->where('ticket_status', 'IN PROCESS')
            ->select('tickets.*', 'users.name', 'users.email', 'users.role', 'complain_types.tipe_komplain')
            ->orderBy('level')
            ->paginate(10);

        $ticketclosed = DB::table('tickets')->where('ticket_status', 'CLOSED');
        $dtl_tickets_closed = DB::table('tickets')
            ->join('users', 'tickets.username', '=', 'users.email')
            ->join('complain_types', 'tickets.tipe_komplain', '=', 'complain_types.id')
            ->where('ticket_status', 'CLOSED')
            ->select('tickets.*', 'users.name', 'users.email', 'users.role', 'complain_types.tipe_komplain')
            ->orderBy('level')
            ->paginate(10);

        return view('dashboard', compact('allusers', 'alltickets', 'ticketopen', 'ticketprocess', 'ticketclosed', 'dtl_tickets_open', 'dtl_tickets_process', 'dtl_tickets_closed'));
    }

    public function home()
    {
        $allusers = DB::table('users')->get();
        $alltickets = DB::table('tickets')->get();

        $ticketopen = DB::table('tickets')->where('ticket_status', 'OPEN');
        $dtl_tickets_open = DB::table('tickets')
            ->join('users', 'tickets.username', '=', 'users.email')
            ->join('complain_types', 'tickets.tipe_komplain', '=', 'complain_types.id')
            ->where('ticket_status', 'OPEN')
            ->select('tickets.*', 'users.name', 'users.email', 'users.role', 'complain_types.tipe_komplain')
            ->orderBy('level')
            ->paginate(10);

        $ticketprocess = DB::table('tickets')->where('ticket_status', 'IN PROCESS');
        $dtl_tickets_process = DB::table('tickets')
            ->join('users', 'tickets.username', '=', 'users.email')
            ->join('complain_types', 'tickets.tipe_komplain', '=', 'complain_types.id')
            ->where('ticket_status', 'IN PROCESS')
            ->select('tickets.*', 'users.name', 'users.email', 'users.role', 'complain_types.tipe_komplain')
            ->orderBy('level')
            ->paginate(10);

        $ticketclosed = DB::table('tickets')->where('ticket_status', 'CLOSED');
        $dtl_tickets_closed = DB::table('tickets')
            ->join('users', 'tickets.username', '=', 'users.email')
            ->join('complain_types', 'tickets.tipe_komplain', '=', 'complain_types.id')
            ->where('ticket_status', 'CLOSED')
            ->select('tickets.*', 'users.name', 'users.email', 'users.role', 'complain_types.tipe_komplain')
            ->orderBy('level')
            ->paginate(10);

        $komplain_tipe = ComplainType::all();

        return view('home', compact('allusers', 'alltickets', 'ticketopen', 'ticketprocess', 'ticketclosed', 'dtl_tickets_open', 'dtl_tickets_process', 'dtl_tickets_closed', 'komplain_tipe'));
    }
}
