<?php

namespace App\Http\Controllers;

use App\Models\Perangkingan;
use Illuminate\Http\Request;

class PerangkinganController extends Controller
{
    //
    public function index(){
        $perangkingan = Perangkingan::orderBy('total_score', 'desc')->get();
        return view('ahp.perangkingan',compact('perangkingan'));

    }
}
