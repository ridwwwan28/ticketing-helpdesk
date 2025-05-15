<?php

namespace App\Http\Controllers;

use App\Models\ComplainType;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ComplaintypeController extends Controller
{
    public function tampilListComplain()
    {
        $complain_types = ComplainType::get();

        return view('complaintype.list', compact('complain_types'));
    }

    public function submit(Request $request): RedirectResponse
    {
        $compl_type = new ComplainType();

        $compl_type->tipe_komplain = $request->complain_type;
        $compl_type->save();

        return redirect()->route('complaintype.list')->with(['success' => 'Data Berhasil Disimpan']);
    }

    public function destroy($id): RedirectResponse
    {
        // mendapatkan data berdasarkan id
        $compl_type = ComplainType::findOrFail($id);

        // hapus data
        $compl_type->delete();

        return redirect()->route('complaintype.list')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
