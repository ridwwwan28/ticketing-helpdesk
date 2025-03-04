<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TicketController extends Controller
{
    function tampil(): View
    {
        // ambil semua ticket
        $tickets = Ticket::paginate(10);

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
        return view('ticket.show', compact('ticket'));
    }

    public function edit(string $id): View
    {
        // ambil ticket berdasarkan id
        $ticket = Ticket::findOrFail($id);

        return view('ticket.edit', compact('ticket'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        // dapat ticket berdasarkan Id
        $ticket = Ticket::findOrFail($id);

        // update ticket
        $ticket->tipe_komplain = $request->tipe_komplain;
        $ticket->detail_penyelesaian = $request->detail_penyelesaian;
        $ticket->status = $request->status;
        $ticket->update();

        return redirect()->route('ticket.tampil')->with(['succes' => 'Data Berhasil Diubah']);
    }
}
