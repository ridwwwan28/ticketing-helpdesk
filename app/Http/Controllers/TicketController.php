<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\View\View;
use App\Models\ComplainType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class TicketController extends Controller
{
    function tampil(): View
    {
        // ambil semua ticket
        // $tickets = Ticket::paginate(10);
        $tickets = DB::table('tickets')
            ->join('users', 'tickets.username', '=', 'users.email')
            ->join('complain_types', 'tickets.tipe_komplain', '=', 'complain_types.id')
            ->select('tickets.*', 'users.name', 'complain_types.tipe_komplain')
            ->paginate();

        $komplain_tipe = ComplainType::all();

        // tampilkan data ticket
        return view('ticket.tampil', compact('tickets'), compact('komplain_tipe'));
    }

    function submit(Request $request): RedirectResponse
    {
        // ambil record ticket yg terakhir
        $ambilTicket = Ticket::latest()->first();
        $kodeDepan = "HD";
        $kodeTahun = date('Y');
        $kodeBulan = date('m');

        if ($ambilTicket == null) {
            // kode pertama;
            $nomorUrut = "0001";
        } else {
            // kode berikutnya
            $nomorUrut = substr($ambilTicket->no_tiket, 8, 4) + 1;

            $nomorUrut = str_pad($nomorUrut, 4, "0", STR_PAD_LEFT);
        }
        $kodeTicket = $kodeDepan . $kodeTahun . $kodeBulan . $nomorUrut;

        $ticket = new Ticket();
        $ticket->no_tiket = $kodeTicket;
        $ticket->username = $request->email_user;
        $ticket->tipe_komplain = $request->tipe_komplain;
        $ticket->kendala = $request->kendala;
        $ticket->ticket_status = "OPEN";
        $ticket->save();

        return redirect()->route('ticket.tampil')->with(['success' => 'Data Berhasil Disimpan']);
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

        $type_komplain = ComplainType::all();

        return view('ticket.edit', compact('ticket'), compact('type_komplain'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        // dapat ticket berdasarkan Id
        $ticket = Ticket::findOrFail($id);

        // update ticket
        $ticket->tipe_komplain = $request->tipe_komplain;
        $ticket->detail_penyelesaian = $request->detail_penyelesaian;
        $ticket->ticket_status = $request->status;
        $ticket->update();

        return redirect()->route('ticket.tampil')->with(['success' => 'Data Berhasil Diubah']);
    }

    public function destroy($id): RedirectResponse
    {
        // mendapatkan ticket berdasarkan id
        $ticket = Ticket::findOrFail($id);

        // hapus ticket
        $ticket->delete();

        return redirect()->route('ticket.tampil')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
