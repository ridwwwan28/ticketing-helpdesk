<?php

namespace App\Http\Controllers;

use App\Mail\DataAddedNotification;
use App\Models\Ticket;
use Illuminate\View\View;
use App\Models\ComplainType;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Carbon;

class TicketController extends Controller
{
    function tampil(): View
    {
        $role = Auth::user()->role;
        $email = Auth::user()->email;

        if ($role == 'user') {
            $tickets = DB::table('tickets')
                ->join('users', 'tickets.username', '=', 'users.email')
                ->join('complain_types', 'tickets.tipe_komplain', '=', 'complain_types.id')
                ->where('tickets.username', $email)
                ->select('tickets.*', 'users.name', 'users.email', 'users.role', 'complain_types.tipe_komplain')
                ->orderBy('level')
                ->get();
        } else {
            // ambil semua ticket
            $tickets = DB::table('tickets')
                ->join('users', 'tickets.username', '=', 'users.email')
                ->join('complain_types', 'tickets.tipe_komplain', '=', 'complain_types.id')
                ->select('tickets.*', 'users.name', 'users.email', 'users.role', 'complain_types.tipe_komplain')
                ->orderBy('level')
                ->get();
        }

        $komplain_tipe = ComplainType::all();

        // tampilkan data ticket
        return view('ticket.tampil', compact('tickets'), compact('komplain_tipe'));
    }

    function submit(Request $request)
    {
        $maxRetry = 5;
        $attempt = 0;

        do {
            try {
                DB::beginTransaction();

                $kodeDepan = "DP";
                $kodeTahun = date('Y');
                $kodeBulan = date('m');

                // Hitung jumlah tiket di bulan berjalan untuk nomor urut
                $lastTicket = Ticket::whereYear('created_at', $kodeTahun)
                    ->whereMonth('created_at', $kodeBulan)
                    ->lockForUpdate()
                    ->orderByDesc('no_tiket')
                    ->first();

                if ($lastTicket) {
                    // Ambil 4 digit terakhir setelah prefix (DP-YYYYMM)
                    $lastNumber = (int) substr($lastTicket->no_tiket, -4);
                    $nomorUrut = $lastNumber + 1;
                } else {
                    $nomorUrut = 1;
                }

                $kodeTicket = $kodeDepan . '-' . $kodeTahun . $kodeBulan . str_pad($nomorUrut, 4, "0", STR_PAD_LEFT);

                $ticket = new Ticket();
                $ticket->no_tiket = $kodeTicket;
                $ticket->username = $request->email_user;
                $ticket->tipe_komplain = $request->tipe_komplain;
                $ticket->kendala = $request->kendala;
                $ticket->tgl_buat = now();
                $ticket->ticket_status = "OPEN";
                $ticket->save();

                DB::commit();
                $katKendala = DB::table('complain_types')
                    ->where('complain_types.id', $ticket->tipe_komplain)
                    ->firstOrFail();

                // Kirim email notifikasi
                $data = [
                    'subject' => '[' . $ticket->no_tiket . ']',
                    'title' => 'Nomor Ticket ' . $ticket->no_tiket,
                    'body1' => 'No. Ticket : ' . $ticket->no_tiket,
                    'body2' => ' Dari : ' . $request->nama_user,
                    'body3' => 'Kategori Kendala : ' . $katKendala->tipe_komplain,
                    'body4' => 'Kendala : ' . $ticket->kendala
                ];

                // kirim ke email tujuan
                Mail::to($ticket->username)->send(new DataAddedNotification($data));
                return redirect()->route('ticket.tampil')->with(['success' => 'Ticket Berhasil Dibuat dengan Nomor ' . $kodeTicket]);
            } catch (\Illuminate\Database\QueryException $ex) {
                DB::rollBack();

                if ($ex->errorInfo[1] == 1062) {
                    // Duplicate entry, retry
                    $attempt++;

                    if ($attempt >= $maxRetry) {
                        return redirect()->back()->with(['error' => 'Gagal membuat ticket, silahkan coba lagi']);
                    }
                } else {
                    throw $ex;
                }
            }
        } while ($attempt < $maxRetry);
    }

    public function show(string $id): View
    {
        // ambil ticket berdasarkan id
        // $ticket = Ticket::findOrFail($id);


        $ticket = DB::table('tickets')
            ->join('users', 'tickets.username', '=', 'users.email')
            ->join('complain_types', 'tickets.tipe_komplain', '=', 'complain_types.id')
            ->where('tickets.id', '=', $id)
            ->select('tickets.*', 'users.name', 'users.email', 'users.role', 'complain_types.tipe_komplain')
            ->first();

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
        $ticket->prioritas = $request->prioritas;
        $ticket->ticket_status = $request->status;



        // isi tgl estimasi sesuai dari prioritas yang dipilih
        if ($ticket->ticket_status === 'IN PROCESS' && $ticket->prioritas === '1') {
            $ticket->tgl_estimasi = Carbon::parse($ticket->tgl_buat)->addDays(1);
        } elseif ($ticket->ticket_status === 'IN PROCESS' && $ticket->prioritas === '2') {
            $ticket->tgl_estimasi = Carbon::parse($ticket->tgl_buat)->addDays(2);
        } elseif ($ticket->ticket_status === 'IN PROCESS' && $ticket->prioritas === '3') {
            $ticket->tgl_estimasi = Carbon::parse($ticket->tgl_buat)->addDays(3);
        } elseif ($ticket->ticket_status === 'IN PROCESS' && $ticket->prioritas === '4') {
            $ticket->tgl_estimasi = Carbon::parse($ticket->tgl_buat)->addDays(4);
        }

        // isi tgl selesai
        if ($ticket->ticket_status === 'CLOSED') {
            $ticket->tgl_selesai = date('Y-m-d H:i:s');

            $katKendala = DB::table('complain_types')
                ->where('complain_types.id', $ticket->tipe_komplain)
                ->firstOrFail();

            // Kirim email notifikasi
            $dataEmail = [
                'subject' => '[' . $ticket->no_tiket . ']',
                'title' => 'Nomor Ticket ' . $ticket->no_tiket,
                'body1' => 'No. Ticket : ' . $ticket->no_tiket,
                'body2' => ' Dari : ' . $request->nama_user,
                'body3' => 'Kategori Kendala : ' . $katKendala->tipe_komplain,
                'body4' => 'Kendala : ' . $ticket->kendala,
                'body5' => 'Status : ' . $ticket->status
            ];

            // kirim ke email tujuan
            Mail::to($ticket->username)->send(new DataAddedNotification($dataEmail));
        }

        // update data ticket
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
