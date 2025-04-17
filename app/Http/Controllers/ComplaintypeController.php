<?php

namespace App\Http\Controllers;

use App\Models\ComplainType;
use Illuminate\Http\Request;

class ComplaintypeController extends Controller
{
    public function tampilListComplain()
    {
        $complain_types = ComplainType::latest()->get();

        return view('complaintype.list', compact('complain_types'));
    }
}
