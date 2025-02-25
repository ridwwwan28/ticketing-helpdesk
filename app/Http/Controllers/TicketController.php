<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TicketController extends Controller
{
    function tampil(): View
    {
        // ambil semua ticket
        $tickets = Ticket::latest()->paginate(10);

        // tampilkan data ticket
        return view('ticket.tampil', compact('tickets'));
    }

    function submit(Request $request): RedirectResponse
    {
        $ticket = new Ticket();
        $ticket->no_tiket = $request->no_tiket;
        $ticket->username = $request->nama;
        $ticket->kendala = $request->kendala;
        $ticket->status = "MENUNGGU";
        $ticket->save();

        return redirect()->route('ticket.tampil')->with(['succes' => 'Data Berhasil Disimpan']);
    }

    public function show(string $id): View
    {
        // ambil ticket berdasarkan id
        $ticket = Ticket::findOrFail($id);

        // dikirim ke view
        return view('ticket.show', compact('tickets'));
    }

    public function edit(string $id): View
    {
        // ambil ticket berdasarkan id
        $ticket = Ticket::findOrFail($id);

        return view('ticket.edit', compact('tickets'));
    }
}
